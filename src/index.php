<?php

use App\OOP\PHP\Employee;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$employee = new Employee('Mohamed',12,1000);

var_dump($employee);