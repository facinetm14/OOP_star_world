<?php

require_once "Entity/Singer.php";
require_once "Entity/Footballer.php";

$star = new Entity\Singer("Takana", "Zion", "21/04/1985", "Guinea", "tk.zion@gmail.com", "123456789", 10000, "Ragae");
$star1 = new Entity\Footballer("Mesut", "OZIL", "15/10/1988", "Germany", "mo10@gmail.com", "1234659", 30000, "MD");
$star->displayInfo();
$star1->displayInfo();
$star->prepareConcert();
$star1->prepareMatch();
$star->doCharity();
$star1->doCharity();
$star->signNewContract();
$star1->signNewContract();
$star1->signNewContract();

