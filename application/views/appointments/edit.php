<?php echo validation_errors(); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<?= form_open('appointments/update/'); ?>
<input type="hidden" name="appointment_id" value="<?= $appointments_item['appointment_id'];?>">
<fieldset>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="card shadow mb-4">
          <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Afspraak gegevens</h6>
          </div>
          <div class="card-body">
              <div class="form-group">
                <label for="inputState">Type afspraak</label>
                <select id="inputState" name="appointment_type" class="form-control">
                  <option value="1">Avondtarief</option>
                  <option value="2">Dagtarief</option>
                  <option value="3">Vervolgafspraak</option>
                </select>
              </div>
              <div class="row">
                  <div class="col form-group">
                      <label for="inputState">Datum</label>
                      <div id="datepicker" class=" date" data-date-format="mm-dd-yyyy">
                          <input class="form-control" type="text" name="appointment_date"/>
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
                  </div>
                  <div class="col form-group">
                      <label for="inputState">Tijd</label>
                      <div class='input-group date' id='datetimepicker3'>
                          <input class="form-control timepicker text-center" name="appointment_time" jt-timepicker="" time="model.time" time-string="model.timeString" default-time="model.options.defaultTime" time-format="model.options.timeFormat" start-time="model.options.startTime" min-time="model.options.minTime" max-time="model.options.maxTime" interval="model.options.interval" dynamic="model.options.dynamic" scrollbar="model.options.scrollbar" dropdown="model.options.dropdown">
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Beschikbare electriciens</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                    <option>Klaas</option>
                    <option>Athbi</option>
                    <option>Mike</option>
                    <option>Robin</option>
                  </select>
                </div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="card shadow mb-4">
          <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Afspraak notities</h6>
          </div>
          <div class="card-body">
              <div class="form-group">
                <textarea id="editor1" class="form-control" name="description" rows="3" placeholder="Opmerkingen"></textarea>
              </div>
          </div>
       </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
       <!-- Basic Card Example -->
       <div class="mb-4">
          <button type="submit" class="btn btn-primary float-right">Klant toevoegen en afspraak inplannen</button>
       </div>
    </div>
    </div>
</fieldset>
</form>

<script type="text/javascript">
$(function () {
$("#datepicker").datepicker({
    language: "nl",
    calendarWeeks: true,
    todayHighlight: true
}).datepicker('update', new Date());
});

$('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 30,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
</script>
