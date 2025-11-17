<?php

$N01 = $_POST['n1'];
$N02 = $_POST['n2'];

$adição = $N01 + $N02;
$sub = $N01 - $N02;
$mult = $N01 * $N02;
$divisao = $N01 / $N02;


echo "Seus números somados são:". $adição. "<br>";
echo "Seus números subtraidos são:". $sub . "<br>";
echo "Seus números multiplicados são:". $mult. "<br>";
echo "Seus números divididos são:". $divisao. "<br>";
