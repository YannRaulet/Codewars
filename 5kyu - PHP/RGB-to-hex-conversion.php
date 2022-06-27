<?php

/*
DESCRIPTION:

Complete the function that

The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

The following are examples of expected output values:

rgb(255, 255, 255); // returns FFFFFF
rgb(255, 255, 300); // returns FFFFFF
rgb(0, 0, 0); // returns 000000
rgb(148, 0, 211); // returns 9400D3

*/

function rgb($r,$g,$b){
    $zero = 0;
    $end = 255;

    if ($r < 0)
    {
      $r = $zero;
      return sprintf("%02X%02X%02X", $zero, $g, $b);
    }
    else if($g <0)
    {
        $g = $zero;
        return sprintf("%02X%02X%02X", $r, $zero, $b);
    }
    else if($b <0)
    {
        $b = $zero;
        return sprintf("%02X%02X%02X", $r, $g, $zero);
    }
    else if($r >255)
    {
        $r = $end;
        return sprintf("%02X%02X%02X", $end, $g, $b);
    }
    else if($g >255)
    {
        $g = $end;
        return sprintf("%02X%02X%02X", $r, $end, $b);
    }
    else if($b >255)
    {
        $b = $end;
        return sprintf("%02X%02X%02X", $r, $g, $end);
    }
    else
    {
        return sprintf("%02X%02X%02X", $r, $g, $b);
    }
}
