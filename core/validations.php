<?php

//*name section
// ----------------------------------------------------------------
// check here for the empty input string here 
function reqval($value): bool
{
    if (empty($value)) {
        return FALSE;
    }

    return True;
}

// ----------------------------------------------------------------
//check here for the length of the input here 

function minlen($value, $len): bool
{
    if (strlen($value) < $len) {
        return false;
    }
    return true;
}

// ----------------------------------------------------------------
// check for the max lenght 

function maxlen($value, $len): bool
{
    if (strlen($value) > $len) {
        return false;
    }
    return true;
}

// ----------------------------------------------------------------
//*email section

function emailval($value): bool
{
    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}