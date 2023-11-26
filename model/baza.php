<?php

$baza = mysqli_connect('localhost', 'root', '', 'socialn');

function query($sql)
{
    global $baza;

    return mysqli_query($baza, $sql);
}
function escape($string)
{
    global $baza;

    return mysqli_real_escape_string($baza, $string);
}
function confim($result)
{
    global $baza;
    if (!$result) {
        exit('QUERY FAILED'.mysqli_error($baza));
    }
}
