<?php

/**
 * @author TEAM iNFECTiON
 * @copyright 2020
 */


$arr = array("var" => "1", "team" => "2", "man" => "3");

foreach($arr as $i => $value)
{
    if($value == "2")
    {
        unset($arr[$i]);
}
    echo $arr[$i];
}
?>