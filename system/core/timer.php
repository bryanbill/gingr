<?php 

class timer {
        public function __construct($d1, $d2, $d3, $month, $day, $year){
        $date = $this->defineCurrentDate($d1, $d2, $d3, $month, $day, $year);

        //define the date methods
        $dow = $date['dow'];
        $full_date= $date['date'];
        $month = $date['month'];
        $year = $year['year'];
        $abb_d = $date['abbrevdayname'];
        $dayname = $date['dayname'];
        $abb_m = $date['abbrevmonth'];
        $monthname = $date['monthname'];

    }
    public function defineCurrentDate($d1, $d2, $d3, $month, $day, $year){
        $today = unixtojd(mktime($d1, $d2, $d3, $month, $day, $year));
        $conv = cal_from_jd($today, CAL_GREGORIAN);
        return $conv;
    }
    public function defineCurrentTime(){


    }
}
new timer(0, 0, 0, 4, 13, 2009);
