<?php

use mylib\mypackage\MyTestClass;
use Person\Person;
use Veedok\Php2bettaTest\Person as Php2bettaTestPerson;

require_once '../../vendor/autoload.php';
$test = new MyTestClass;
$test->seyHelo();
$test1 = new Php2bettaTestPerson('afsa', 'fasfa', 'dsfsdf');
echo $test1;
?>