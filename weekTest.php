<?php
/**
 * Created by PhpStorm.
 * User: woosun
 * Date: 2018. 2. 9.
 * Time: PM 10:26
 */

include 'CustomWeekUtil.php';

$utli = new CustomWeekUtil();


$result = $utli->getCustomWeek(3,'06:00:00');

print_r($result);
