<?php

use Student\Models\Room;
use Student\Models\RoomUser;
use Student\Models\User;

include "./Models/User.php";
include "./Models/Room.php";
include "./Models/RoomUser.php";


$ahmed = new User(1,"ahmed");
$mohammed = new User(2,"mohammed");
$ali = new User(3,"ali");

$room = new Room(1,50);

$room2 = new Room(2,100);

$roomUser = new RoomUser();
$roomUser2 = new RoomUser();

$ahmed->buyRoom($roomUser,$room,30);

$ahmed->buyRoom($roomUser2,$room2,30);