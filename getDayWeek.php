<?php

    public function getDateDayWeek ($month, $year){

        $j=1;
        $k=1;

        $date = Carbon::createFromDate($year,$month, 1);

        $start = [];
        $end = [];

        if(Carbon::createFromDate($year, $month, 1)->isSunday()){
            $start[$j] = Carbon::createFromDate($year, $month, 1)->firstOfMonth()->day;
            $j++;
            $end[$k] = Carbon::createFromDate($year, $month, 1)->firstOfMonth()->day;
            $k++;
        }
        else{
            $start[$j] = Carbon::createFromDate($year, $month, 1)->firstOfMonth()->day;
            $j++;
        }

        for ($i=1; $i <= $date->daysInMonth ; $i++) {

            $isMonday = Carbon::createFromDate($year, $month, $i)->isMonday();
            $isSunday = Carbon::createFromDate($year, $month, $i)->isSunday();

            if( $isMonday == true ) {
                $start[$j] = $i;
                $j++;
            }
            elseif( $isSunday == true && $i != 1){
                $end[$k]= $i;
                $k++;
            }

        }

        $end[$k] = Carbon::createFromDate($year, $month, 1)->endOfMonth()->day;

        $object = (object) ['start' => $start,
                            'end' => $end];

        return $object;

    }

?>
