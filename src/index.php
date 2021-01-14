<?php

use App\Pattens\Creational\Prototype\Employee\Address;
use App\Pattens\Creational\Prototype\Employee\EmployeePrototype;
use App\Pattens\Creational\Prototype\Employee\Privileges\Privileges;
use App\Pattens\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivilege;
use App\Pattens\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;
use App\Pattens\Creational\Prototype\Employee\ProfileData;
use App\Pattens\Creational\Prototype\Employee\Salary;

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



//$director =  new  Director(new ComputerCSBuilder());
//$computer =  $director->makeComputer();
//
//var_dump(
//    $computer
//);

$employee = new EmployeePrototype(
    new ProfileData(
        'habib',
        19,
        new Address(
       31.22,
        29.5,
     'alazer',
           'cairo',
        'egypt',
  300,
       19888
        ),
        '1231654654654',
        '123132123132132132',
        'Habib',
    ),
    new Salary( 10000,23/100,300 ),
    new Privileges(
        [
            new WebProjectPrivilege(),
            new ServerRoomPrivilege()
        ]
    )
);
var_dump( $employee );

$ahmed = clone $employee;
var_dump( $ahmed );