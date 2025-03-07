<?php

/*
    Returning random IPs to simulate different users
*/
function getUserIP() {
    return rand(1, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(1, 255);
}