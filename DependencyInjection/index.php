<?php
require 'interface.php';
require 'person.php';
require 'wallet.php';
require 'houseKeys.php';
require 'transportCard.php';
require 'phone.php';

$person1 = new Person(new Wallet(), new HouseKeys(), new TransportCard(), new Phone());
$person1->leaveHome();