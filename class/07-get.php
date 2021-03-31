<?php
//echo $_GET['a'] + $_GET['b'];
$a = $_GET['a'] ?? 0; // php 7
$b = $_GET['b'] ?? 0;

echo $a + $b;
