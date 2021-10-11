<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Calendar Display</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">

    <h1>Calendar</h1>
    <div class="card-body">
        <div id="calendar"></div>
    </div>


    </div>
    </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Afspraak toevoegen</h4>
          </div>
          <div class="modal-body">
          <?php echo form_open(site_url("calendar/add_event"), array("class" => "form-horizontal")) ?>
          <input type="hidden" name="client" value="<?= $this->input->get('clientid'); ?>">
          <div class="form-group">
            <label for="p-in" class="col-md-4 label-heading">Type afspraak</label>
              <div class="col-md-8 ui-front">
                <select class="form-control" name="name">
                  <option value="Stroom storing">Stroom storing</option>
                  <option value="Vervolgafspraak">Vervolgafspraak</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="p-in" class="col-md-4 label-heading">Selecteer een monteur</label>
                <div class="col-md-8 ui-front">
                  <select class="form-control" name="user">
                    <option value="0">Klaas</option>
                    <option value="1">Linward</option>
                  </select>
                </div>
              </div>
            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Datum afspraak</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="start_date" id="start_date">
                    </div>
            </div>

            <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Einde afspraak</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
            <input type="submit" class="btn btn-primary" value="Afspraak maken">
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Afspraak bewerken</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendar/edit_event"), array("class" => "form-horizontal")) ?>
      <!-- <input type="hidden" name="post_id" value="<?= $post['post_id']; ?>"> -->
      <div class="form-group">
            <label for="p-in" class="col-md-4 label-heading">Type afspraak</label>
            <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
            </div>
      </div>
      <div class="form-group">
        <label for="p-in" class="col-md-4 label-heading">Datum afspraak</label>
          <div class="col-md-8">
            <input type="text" class="form-control" name="start_date" id="start_date_edit">
          </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Einde afspraak</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date_edit">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Afspraak verwijderen</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
        <input type="submit" class="btn btn-primary" value="Afspraak bijwerken">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {

    var date_last_clicked = null;

    $('#calendar').fullCalendar({
      header:{
          left:'prev,next today',
          center:'title',
          right:'month,agendaWeek,agendaDay'
      },
      defaultView: 'agendaWeek',
      slotLabelFormat:"HH:mm",
      editable: true,
      selectHelper:true,
        eventSources: [
           {
           events: function(start, end, timezone, callback) {
                $.ajax({
                    url: '<?php echo base_url() ?>calendar/get_events',
                    dataType: 'json',
                    data: {
                        // our hypothetical feed requires UNIX timestamps
                        start: start.unix(),
                        end: end.unix()
                    },
                    success: function(msg) {
                        var events = msg.events;
                        callback(events);
                    }
                });
              }
            },
        ],
        dayClick: function(date, jsEvent, view) {
            datum = date.format("Y/MM/DD HH:mm");
            //alert(datum);
            date_last_clicked = $(this);
            $(this).css('background-color', '#bed7f3');
            $('#addModal').modal();
            $('#start_date').val(datum);
            $('#end_date').val(moment(datum).add(1, "hour").format("Y/MM/DD HH:mm"));
        },
       eventClick: function(event, jsEvent, view) {
         // datum = date.format();
         // alert(datum);
          $('#name').val(event.title);
          $('#user').val(event.user);
          $('#start_date_edit').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          if(event.end) {
            $('#end_date_edit').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
          } else {
            $('#end_date_edit').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();
       },
    });
});
</script>
    </body>
</html>
