<?php

/**
 * @param $phone
 * @return string
 */

function ust_phone_filter($phone){
    if ($phone[0] == '+'){
        $phone_clear = '+'.preg_replace('~\D+~','',$phone);
        return $phone_clear;
    }else{
        $phone_clear = '+1'.preg_replace('~\D+~','',$phone);
        return $phone_clear;
    }
}
