<?php
$a = empty($_GET['a']) ? 0 : intval($_GET['a']);
$b = empty($_GET['b']) ? 0 : intval($_GET['b']);


// $a = empty($_GET['a']) ? 0 : intval($_GET['a']);
// $b = empty($_GET['b']) ? 0 : intval($_GET['b']);  


// $a = empty($_GET['a']) ? 0 : floatval($_GET['a']);
// $b = empty($_GET['b']) ? 0 : floatval($_GET['b']);

echo ($a + $b), '<br>';

$c = [5];

echo empty($c) ? 'empty' : 'filled';
