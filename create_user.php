<?php
require_once "bootstrap.php";

$user = new User();
$user->setName("Sushil Kumar");
$user->setEmail("sushilkumar@gmail.com");
$user->setPassword("abcd@123");

$entityManager->persist($user);
$entityManager->flush();

echo "Created Product with ID ". $user->getId() ."\n";

echo "Product name is ". $user->getName() ."\n";
