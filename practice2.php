<?php
function checkMail($str){
    $regular = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regular,$str)){
        echo("Mail hop le");
    }
    else
        echo("Mail khong hop le");
}
echo "hoangtu1297hp@gmail.com:"." ";
checkMail('hoangtu1297hp@gmail.com');
echo "</br>";
echo "a@gmail.com:"." ";
checkMail('a@yahoo.com');
echo "</br>";
echo "abc@hotmail.com:"." ";
checkMail('abc@hotmail.com');
echo "</br>";
echo "@gmail.com:"." ";
checkMail('@gmail.com');
echo "</br>";
echo "@#abc@gmail.com:"." ";
checkMail('@#abc@gmail.com');