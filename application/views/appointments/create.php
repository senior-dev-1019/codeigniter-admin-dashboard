<div class="row">
<div class="col-lg-12">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>fullcalendar/load",
            selectable:true,
            editable: true,
            selectHelper:true,
            select:function(start, end, allDay)
            {

                var title = prompt("Enter Event Title");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url(); ?>fullcalendar/insert",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }

                
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                var title = event.title;

                var id = event.id;

                $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Update");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url(); ?>fullcalendar/delete",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Removed');
                        }
                    })
                }
            }

        });
    });

    </script>
   <!-- Basic Card Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h2 class="m-0 font-weight-bold text-primary"><i class="far fa-calendar-plus"></i> Nieuwe afspraak toevoegen</h2>
      </div>
   </div>
</div>
</div>
<?php echo validation_errors(); ?>

    <div class="row">
    <div class="col-lg-8">
       <!-- Basic Card Example -->
       <div class="card shadow">
          <div class="card-body">
            <div class="card-body">
              <div id="calendar"></div>
            </div>
          </div>
       </div>
    </div>
    <div class="col-lg-4">
       <!-- Basic Card Example -->
       <div class="card shadow mb-4">
         <div class="card-body">
           <h3 class="m-0 font-weight-bold text-primary"><i class="far fa-calendar-plus"></i> Monteurs</h3>
           <br>
           <?= form_open(); ?>
             <fieldset>
               <div class="form-group">
                <label for="exampleFormControlSelect1">Type afspraak</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Avondtarief</option>
                  <option>Dagtarief</option>
                </select>
              </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Telefoonnummer</label>
               <input type="text" class="form-control">
             </div>
             <button type="submit" class="btn btn-primary">Verzenden</button>
           </fieldset>
         </form>
         </div>
       </div>
    </div>
    </div>

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
<script>
jQuery(document).ready(function(){
  $("#example-basic").steps({
      headerTag: "h3",
      bodyTag: "section",
      enableFinishButton: false,
      transitionEffect: "slideLeft",
      autoFocus: true,
      labels: {
        cancel: "Annuleren",
        current: "",
        pagination: "Pagination",
        finish: "Finish",
        next: "Volgende",
        previous: "Vorige",
        loading: "Laden ..."
    }
  });
});

</script>
<style>

h3.hidden.title {
  display: none !important;
}



.wizard, .tabcontrol {
    display: block;
    width: 100%;
    overflow:hidden
}

.wizard a, .tabcontrol a {
    outline:0
}

.wizard ul, .tabcontrol ul {
    list-style: none !important;
    padding: 0;
    margin:0
}

.wizard ul > li, .tabcontrol ul > li {
    display: block;
    padding:0
}

.wizard > .steps .current-info, .tabcontrol > .steps .current-info {
    position: absolute;
    left:-999em
}

.wizard > .content > .title, .tabcontrol > .content > .title {
    position: absolute;
    left:-999em
}

.wizard > .steps {
    position: relative;
    display: block;
    width:100%
}

.wizard.vertical > .steps {
    display: inline;
    float: left;
    width:30%
}

.wizard > .steps .number {
    font-size:1.429em
}

.wizard > .steps > ul > li {
    width:25%
}

.wizard > .steps > ul > li, .wizard > .actions > ul > li {
    float:left
}

.wizard.vertical > .steps > ul > li {
    float: none;
    width:100%
}

.wizard > .steps a, .wizard > .steps a:hover, .wizard > .steps a:active {
    display: block;
    width: auto;
    margin: 0 .5em .5em;
    padding: 1em 1em;
    text-decoration: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px
}

.wizard > .steps .disabled a, .wizard > .steps .disabled a:hover, .wizard > .steps .disabled a:active {
    background: #eee;
    color: #aaa;
    cursor:default
}

.wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
    background: #001fba;
    color: #fff;
    cursor:default
}

.wizard > .steps .done a, .wizard > .steps .done a:hover, .wizard > .steps .done a:active {
    background: rgba(0, 31, 186, 0.53);
    color:#fff
}

.wizard > .steps .error a, .wizard > .steps .error a:hover, .wizard > .steps .error a:active {
    background: #ff3111;
    color:#fff
}

.wizard > .content {
    display: block;
    margin: .5em;
    min-height: 25em;
    overflow: hidden;
    position: relative;
    width: auto;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px
}

.wizard.vertical > .content {
    display: inline;
    float: left;
    margin: 0 2.5% .5em 2.5%;
    width:65%
}

.wizard > .content > .body {
  width: 100%;
  margin-top: 25px;
  overflow: hidden;
}

.wizard > .content > .body ul {
    list-style:disc !important
}

.wizard > .content > .body ul > li {
    display:list-item
}

.wizard > .content > .body > iframe {
    border: 0 none;
    width: 100%;
    height:100%
}

.wizard > .content > .body input {
    display: block;
    border: 1px solid #ccc
}

.wizard > .content > .body input[type="checkbox"] {
    display:inline-block
}

.wizard > .content > .body input.error {
    background: #fbe3e4;
    border: 1px solid #fbc2c4;
    color:#8a1f11
}

.wizard > .content > .body label {
    display: inline-block;
    margin-bottom:.5em
}

.wizard > .content > .body label.error {
    color: #8a1f11;
    display: inline-block;
    margin-left:1.5em
}

.wizard > .actions {
    position: relative;
    display: block;
    text-align: right;
    width:100%
}

.wizard.vertical > .actions {
    display: inline;
    float: right;
    margin: 0 2.5%;
    width:95%
}

.wizard > .actions > ul {
    display: inline-block;
    text-align:right
}

.wizard > .actions > ul > li {
    margin:0 .5em
}

.wizard.vertical > .actions > ul > li {
    margin:0 0 0 1em
}

.wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
    background: #001fba;
    color: #fff;
    display: block;
    padding: .5em 1em;
    text-decoration: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius:5px
}

.wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active {
    background: #eee;
    color:#aaa
}

.wizard > .loading {
}

.wizard > .loading .spinner {
}

.tabcontrol > .steps {
    position: relative;
    display: block;
    width:100%
}

.tabcontrol > .steps > ul {
    position: relative;
    margin: 6px 0 0 0;
    top: 1px;
    z-index:1
}

.tabcontrol > .steps > ul > li {
    float: left;
    margin: 5px 2px 0 0;
    padding: 1px;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius:5px
}

.tabcontrol > .steps > ul > li:hover {
    background: #edecec;
    border: 1px solid #bbb;
    padding:0
}

.tabcontrol > .steps > ul > li.current {
    background: #fff;
    border: 1px solid #bbb;
    border-bottom: 0 none;
    padding: 0 0 1px 0;
    margin-top:0
}

.tabcontrol > .steps > ul > li > a {
    color: #5f5f5f;
    display: inline-block;
    border: 0 none;
    margin: 0;
    padding: 10px 30px;
    text-decoration:none
}

.tabcontrol > .steps > ul > li > a:hover {
    text-decoration:none
}

.tabcontrol > .steps > ul > li.current > a {
    padding:15px 30px 10px 30px
}

.tabcontrol > .content {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 35em;
    overflow: hidden;
    border-top: 1px solid #bbb;
    padding-top:20px
}

.tabcontrol > .content > .body {
    float: left;
    position: absolute;
    width: 95%;
    height: 95%;
    padding:2.5%
}

.tabcontrol > .content > .body ul {
    list-style:disc !important
}

.tabcontrol > .content > .body ul > li {
    display:list-item
}

@media (max-width: 600px) {
    .wizard > .steps > ul > li {
        width:50%
    }

    .wizard > .steps a, .wizard > .steps a:hover, .wizard > .steps a:active {
        margin-top:.5em
    }

    .wizard.vertical > .steps, .wizard.vertical > .actions {
        display: block;
        float: none;
        width:100%
    }

    .wizard.vertical > .content {
        display: block;
        float: none;
        margin: 0 .5em .5em;
        width:auto
    }
}

@media (max-width: 480px) {
    .wizard > .steps > ul > li {
        width:100%
    }
}

.com {
    color:#93a1a1
}

.lit {
    color:#195f91
}

.pun, .opn, .clo {
    color:#93a1a1
}

.fun {
    color:#dc322f
}

.str, .atv {
    color:#d14
}

.kwd, .prettyprint .tag {
    color:#1e347b
}

.typ, .atn, .dec, .var {
    color:teal
}

.pln {
    color:#48484c
}

.prettyprint {
    padding: 8px;
    background-color: #f7f7f9;
    border:1px solid #e1e1e8
}

.prettyprint.linenums {
    -webkit-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
    -moz-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
    box-shadow:inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0
}

ol.linenums {
    margin:0 0 0 33px
}

ol.linenums li {
    padding-left: 12px;
    color: #bebec5;
    line-height: 20px;
    text-shadow: 0 1px 0 #fff
}


</style>
