<main class="calendar-contain">
    <section class="title-bar">
        <a href="javascript:void(0);" class="title-bar__prev" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($calendar['date'].' - 1 Month')); ?>','<?php echo date("m",strtotime($calendar['date'].' - 1 Month')); ?>');"></a>
        <div class="title-bar__month">
            <select class="month-dropdown">
                <?php echo $monthOptions; ?>
            </select>
        </div>
        <div class="title-bar__year">
            <select class="year-dropdown">
                <?php echo $yearOptions; ?>
            </select>
        </div>
        <a href="javascript:void(0);" class="title-bar__next" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($calendar['date'].' + 1 Month')); ?>','<?php echo date("m",strtotime($calendar['date'].' + 1 Month')); ?>');"></a>
    </section>

    <aside class="calendar__sidebar" id="event_list">
        <?php echo $eventList; ?>
    </aside>

    <section class="calendar__days">
        <section class="calendar__top-bar">
            <span class="top-bar__days">Mon</span>
            <span class="top-bar__days">Tue</span>
            <span class="top-bar__days">Wed</span>
            <span class="top-bar__days">Thu</span>
            <span class="top-bar__days">Fri</span>
            <span class="top-bar__days">Sat</span>
            <span class="top-bar__days">Sun</span>
        </section>

        <?php
            $dayCount = 1;
            $eventNum = 0;

            echo '<section class="calendar__week">';
            for($cb=1;$cb<=$calendar['boxDisplay'];$cb++){
                if(($cb >= $calendar['currentMonthFirstDay'] || $calendar['currentMonthFirstDay'] == 1) && $cb <= $calendar['totalDaysOfMonthDisplay']){
                    // Current date
                    $dayCount = ($dayCount < 10 && strpos($dayCount, '0') == false)?'0'.$dayCount:$dayCount;
                    $currentDate = $calendar['dateYear'].'-'.$calendar['dateMonth'].'-'.$dayCount;

                    // Get number of events based on the current date
                    $eventNum = 0;
                    if(!empty($events)){
                        $eventData = array_filter($events, function ($var) use ($currentDate) {
                            return ($var['date'] == $currentDate);
                        });
                        $eventData = array_values($eventData);
                        $eventData = !empty($eventData[0])?$eventData[0]:'';
                        $eventNum = !empty($eventData['event_num'])?$eventData['event_num']:0;
                    }

                    // Define date cell color
                    if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
                        echo '
                            <div class="calendar__day today" onclick="getEvents(\''.$currentDate.'\');">
                                <span class="calendar__date">'.$dayCount.'</span>
                                <span class="calendar__task calendar__task--today">'.$eventNum.' Events</span>
                            </div>
                        ';
                    }elseif($eventNum > 0){
                        echo '
                            <div class="calendar__day event" onclick="getEvents(\''.$currentDate.'\');">
                                <span class="calendar__date">'.$dayCount.'</span>
                                <span class="calendar__task">'.$eventNum.' Events</span>
                            </div>
                        ';
                    }else{
                        echo '
                            <div class="calendar__day no-event" onclick="getEvents(\''.$currentDate.'\');">
                                <span class="calendar__date">'.$dayCount.'</span>
                                <span class="calendar__task">'.$eventNum.' Events</span>
                            </div>
                        ';
                    }
                    $dayCount++;
                }else{
                    if($cb < $calendar['currentMonthFirstDay']){
                        $inactiveCalendarDay = ((($calendar['totalDaysOfMonth_Prev']-$calendar['currentMonthFirstDay'])+1)+$cb);
                        $inactiveLabel = 'expired';
                    }else{
                        $inactiveCalendarDay = ($cb-$calendar['totalDaysOfMonthDisplay']);
                        $inactiveLabel = 'upcoming';
                    }
                    echo '
                        <div class="calendar__day inactive">
                            <span class="calendar__date">'.$inactiveCalendarDay.'</span>
                            <span class="calendar__task">'.$inactiveLabel.'</span>
                        </div>
                    ';
                }
                echo ($cb%7 == 0 && $cb != $calendar['boxDisplay'])?'</section><section class="calendar__week">':'';
            }
            echo '</section>';
        ?>
    </section>
</main>
