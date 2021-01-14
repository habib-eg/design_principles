<?php

use App\Pattens\Creational\Builder\Builders\ComputerCSBuilder;
use App\Pattens\Creational\Builder\Computer\Types\Computer;
use App\Pattens\Creational\Builder\Computer\Types\ComputerCS;
use App\Pattens\Creational\Builder\Director;
use App\Pattens\Creational\FactoryMethod\DialogExample\Dialogs\MobileDialog;
use App\Pattens\Creational\FactoryMethod\DialogExample\Dialogs\SystemDialog;
use App\Pattens\Creational\FactoryMethod\DialogExample\Dialogs\WebDialog;
use App\OOP\Relationship\Aggregation\Developer;
use App\OOP\Relationship\Aggregation\Project;

use App\OOP\Relationship\Composition\House;
use App\OOP\Relationship\Composition\Room;

require_once dirname(__DIR__) . '/vendor/autoload.php';

//$employee = new Employee('Mohamed',12,1000);
//$microwave = new Microwave(90,"DE1",30);
//$bmw = new BMW(90,2,"FRONT","white");
//$order = new Order("Egypt","Cairo",100);

//$employee = new Employee(
//    'Mohamed',
//    12,
//    new OrganizationSalary(
//        3000,
//        0.2,
//        3,
//        40,
//        40,
//        30,
//        .2
//    )
//);

//$teacher = new Teacher('habib');
//$printer = new PlainTextPrinter();
//var_dump($teacher->sayWelcome($printer));

//$mohamed = new Developer('mohamed');
//$ahmed = new Developer('ahmed');
//$ali = new Developer('ali');
//
//$xProject = new Project(
//    'X Project',
//    new DateTime('now'),
//    [
//        $mohamed,
//        $ahmed,
//        $ali
//    ]
//);
//
//$xProject->setDeadLineTo(new DateInterval('P1M'));
//
//var_dump(
//    $xProject->showProjectInfo()
//);

//$room1 = new Room('White',20);
//$room2 = new Room('LightGray',30);
//$room3 = new Room('LightBlue',25);
//
//$house = new House([
//    $room1,
//    $room2,
//    $room3,
//]);
//
//var_dump($house);

//$systemDialog = new SystemDialog();
//$webDialog = new WebDialog();
//$mobileDialog = new MobileDialog();
//var_dump($systemDialog->renderDialog());
//var_dump($webDialog->renderDialog());
//var_dump($mobileDialog->renderDialog());



$director =  new  Director(new ComputerCSBuilder());
$computer =  $director->makeComputer();

var_dump(
    $computer
);