<?php

function star($a){
$string="*";
$pyramid_str="";

for($i=1;$i<=$a;$i+=2){
    for($j=$a-$i;$j>=0;$j--) {
           $pyramid_str.=$string."";
    }
    $pyramid_str.="\r\n";
}

return $pyramid_str;
}

/* the program can only receive input if it runs on linux (refer to screenshot)
*  because readline is not supported anymore: https://www.php.net/manual/en/ref.readline.php
*/

$a = (int)readline("Insert Odd number: ");
$rem = $a %2;
if ($rem == 0){
        echo "Please enter the Odd number only.";
        } else {
           echo star($a);
        }
?>

