<?php

echo "<pre>";

//igual
var_dump(2 == 2);
var_dump(2 == "2");
var_dump(2 == 3);
echo "<hr>";

//identico
var_dump(2 === 2);
var_dump(2 === "2");
echo "<hr>";

//diferente
var_dump(2 !=2);
var_dump(3 !=2);
echo "<hr>";

//maior que
var_dump(2 > 5);
var_dump(5 > 2);
var_dump(2 > 2);
echo "<hr>";

//menor que
var_dump(2 < 5);
var_dump(5 < 2);
var_dump(2 < 2);
echo "<hr>";

//menor ou igual
var_dump(2 <= 5);
var_dump(5 <= 2);
var_dump(2 <= 2);