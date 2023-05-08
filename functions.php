<?php session_start();

function generate_password($pwd_length, $chars_to_use)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!£$%&/()=?^{}[]*-.,';

    $full_chars = "";

    if (count($chars_to_use) === 0) {
        $full_chars = $alphabet . $numbers . $symbols;
    } else {
        if (in_array('N', $chars_to_use)) {
            $full_chars .= $numbers;
        }
        if (in_array('S', $chars_to_use)) {
            $full_chars .= $symbols;
        }
        if (in_array('L', $chars_to_use)) {
            $full_chars .= $alphabet;
        }
    }

    $passwd = '';
    while (strlen($passwd) < $pwd_length) {
        $index = rand(0, strlen($full_chars) - 1);
        $passwd .= $full_chars[$index];
    }

    return $passwd;
}
