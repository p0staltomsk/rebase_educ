<?php

echo 'hello world!';
echo serverAnswer();

function getLog() {

    var_dump('<pre>', $_SERVER);
}

function serverAnswer () {
    return "\n".'And see u soon!';
}