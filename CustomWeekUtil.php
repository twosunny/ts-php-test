<?php
/**
 * Created by PhpStorm.
 * User: woosun
 * Date: 2018. 2. 9.
 * Time: PM 9:56
 */

class CustomWeekUtil
{
    private $day = array(
        0 => 'Monday',
        1=> 'Tuesday',
        2=> 'Wednesday',
        3=> 'Thursday',
        4=> 'Friday',
        5=> 'Saturday',
        6=> 'Sunday'
    );

    public function getCustomWeek($standDay=0, $standHis='00:00:00'){


        //현재 시간
        $nowDate = date('Y-m-d H:i:s');

        //첫번째 주차 정의
        $firstWeektOfThisMonth =
            date('Y-m-d '.$standHis, strtotime('first '.$this->day[$standDay].' of this month'));

        //현재 시간이 첫번째 주차보다 같거나 클 경우
        if($nowDate >= $firstWeektOfThisMonth){

            //첫번째 주차와 현재 날짜의 일수 차이를 구함
            $diffResult = date_diff(date_create($nowDate), date_create($firstWeektOfThisMonth));
            $diffDay = $diffResult->days;

            //현재 시간이 첫번째 주차보다 과거일 경우
        }else{

            //이전달 마지막 주차
            $lastWeektOfPreviousMonth =
                date('Y-m-d '.$standHis, strtotime('last '.$this->day[$standDay].' of previous month'));

            //이전달 마지막 주차의 일수
            $diffDay = date("d",strtotime($lastWeektOfPreviousMonth));
        }

        //일수를 7로 나오면 주차가 나온다.
        return (int)($diffDay / 7)+1;

    }
}