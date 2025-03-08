<?php

/*
    Returning random IPs to simulate different users, real behavior commented
*/
function getUserIP() {

    // Uncomment for a real behavior
    /* if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP from shared proxy
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP passed from HTTP headers
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Direct IP from visitor
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip; */

    // Comment it if you uncomment the code above
    return rand(1, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(1, 255);
}