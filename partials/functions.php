<?php

function generator_password($leng_pass)
{
    $valid_string = "ghugiuygloihBUIBUOHEWQBNC123456789,.-<>!?^*°-_";
    $result = "";
    if ($leng_pass > 0) {
        for ($i = 0; $i < $leng_pass; $i++) {

            $result .= $valid_string[rand(0, strlen($valid_string)) - 1];
        }
        return $result;
    } else {
        $result = "Riprova";
    }
}
