<?php
$string1=
"한국어 모릅니다.
서울은 우리집에서 멀다.
한국 음식 맛있다.";

$nl2br1=nl2br($string1);
echo $nl2br1;

echo("<br>");
echo("<br>");

$string2=
"나는 개구리다.
개구리는 폴짝 뛴다.
나는 청개구리다.";
echo $string2;
#이러면 문단 개행을 안 한다.

echo("<br>");
echo("<br>");

$string3=
"나는 과일이 좋다.
나는 사과가 좋다.
나는 사과주스가 좋다.";
$nl2br2=nl2br($string3);
echo $nl2br2;
#nl2br을 쓰니깐 문단 개행을 한다.
?>