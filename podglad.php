<?php


$file = file("baza.txt");

foreach($file as $value) {
    $exp = explode("`",$value);
    echo $exp[0]."<br />".$exp[1]."<br />".$exp[2]."<br />".$exp[3]."<br />".$exp[4]."<hr />";
}

?> 