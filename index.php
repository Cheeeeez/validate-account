<?php
function checkAccount($str)
{
    $regex = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regex, $str)) {
        echo "Account is valid";
    } else {
        echo "Account is invalid";
    }
}

checkAccount('123abc_');
echo "<br>";
checkAccount('_abc123');
echo "<br>";
checkAccount('______');
echo "<br>";
checkAccount('123456');
echo "<br>";
checkAccount('abcdefg');
echo "<br>";
checkAccount('.@');
echo "<br>";
checkAccount('12345');
echo "<br>";
checkAccount('1234_');
echo "<br>";
checkAccount('abcde');
echo "<br>";
