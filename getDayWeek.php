<?php

    public function getDateDayWeek ($month, $year){

        $j=1;
        $k=1;

        $date = Carbon::createFromDate($year,$month, 1);

        $start = [];
        $end = [];

        if(Carbon::createFromDate($year, $month, 1)->isSunday()){
            $start[$j] = Carbon::createFromDate($year, $month, 1)->firstOfMonth()->toDateString();
            $j++;
            $end[$k] = Carbon::createFromDate($year, $month, 1)->firstOfMonth()->toDateString();
            $k++;
        }
        else{
            $start[$j] = Carbon::createFromDate($year, $month, 1)->firstOfMonth()->toDateString();
            $j++;
        }

        for ($i=1; $i <= $date->daysInMonth ; $i++) {

            $isMonday = Carbon::createFromDate($year, $month, $i)->isMonday();
            $isSunday = Carbon::createFromDate($year, $month, $i)->isSunday();

            if( $isMonday == true ) {
                $start[$j] = Carbon::createFromDate($year, $month, $i)->toDateString();
                $j++;
            }
            elseif( $isSunday == true && $i != 1){
                $end[$k]= Carbon::createFromDate($year, $month, $i)->toDateString();
                $k++;
            }

        }

        $end[$k] = Carbon::createFromDate($year, $month, 1)->endOfMonth()->toDateString();

        $object = (object) ['start' => $start,
                            'end' => $end];

        return $object;

    }
?>
