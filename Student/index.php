<?php

use Student\Models\Room;
use Student\Models\RoomUser;
use Student\Models\User;


// fully qualified class name
// Student\Models\Room

spl_autoload_register(function($class_name){
    $path = __DIR__ . "/../$class_name.php";
    $path = str_replace('\\',DIRECTORY_SEPARATOR,$path);
    include $path;
});

// include "./Models/User.php";
// include __DIR__ . "/Models/Room.php";
// include "./Models/RoomUser.php";


$ahmed = new User(1,"ahmed");
$mohammed = new User(2,"mohammed");
$ali = new User(3,"ali");

$room = new Room(1,50);

$room2 = new Room(2,100);

$roomUser = new RoomUser();
$roomUser2 = new RoomUser();

// $ahmed->buyRoom($roomUser,$room,30);

// $ahmed->buyRoom($roomUser2,$room2,30);


$data = Room::getRoomUsers(); // array of users

foreach($data as $user)
{
    $userRoom = new RoomUser();
    $room = new Room(5,100);
    $result = $user->buyRoom($userRoom,$room,5);
    var_dump($result);
}

$x = 10;
$x = 10.5;
$x = "ahmed";
$x = [10,15,30];
$x = [10.5,15.4,30.5];
$x = [
    'color' => 'red',
    'blue' => 'asdf'
];

$ahmed = new User(410,"asf");

$x = [
    $ahmed,
    new User(410,"asf"),
    new User(410,"asf"),
    new User(410,"asf"),
];

$x = [
    'sayHello' => function(){
        echo "say hello";
    },
    'sayHi' => function($name){
        echo "say $name";
    },
];

// foreach($data as $user)
// {
//     $user->buyRoom();
// }