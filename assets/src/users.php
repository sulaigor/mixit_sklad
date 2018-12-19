<?php
require 'User.php';

$users = [];

array_push($users, new User("Jan", "Novák", "man", "password"));
array_push($users, new User("Lukáš", "Dvořák", "man", "password"));
array_push($users, new User("Martin", "David", "man", "password"));
array_push($users, new User("Jana", "Nováková", "woman", "password"));
array_push($users, new User("Petr", "Karas", "man", "password"));
array_push($users, new User("Petr", "Škarda", "man", "password"));
array_push($users, new User("Antonín", "Nevim", "man", "password"));
array_push($users, new User("Petra", "Chvátalová", "woman", "password"));
array_push($users, new User("Karolína", "Kápová", "woman", "password"));
array_push($users, new User("Vladimír", "Dunaystev", "man", "password"));
array_push($users, new User("Olga", "Gertrudová", "woman", "password"));
array_push($users, new User("Ivan", "Rus", "man", "password"));
array_push($users, new User("Angelina", "Jolie", "woman", "password"));
array_push($users, new User("David", "Vox", "man", "password"));
array_push($users, new User("Obiwan", "Kenobi", "man", "password"));

//foreach($users as $user)
//{
//    echo $user->getName().', '. $user->getSex() .'<br>';
//}
//
//echo count($users);