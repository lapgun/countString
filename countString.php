<?php
function countString($str , $char){
    $count = 0;
    for($i = 0; $i < strlen($str);$i++)
    {

        if ($char === $str[$i]){
            $count ++;
        }
    }
    return $count;
}
$str = "pham huu lap";
$char = " ";
var_dump(countString($str,$char));
?>