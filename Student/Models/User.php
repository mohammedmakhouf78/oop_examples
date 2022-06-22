<?php

namespace Student\Models;

class User
{
    public int $id;
    public string $name;
    public string $password;

    //typed parameter
    public function __construct(int $id,string $name,string $password = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
    }

    public function buyRoom(RoomUser $roomUser,Room $room,int $roomUserDays)
    {
        $roomUser->id = 1;
        $roomUser->user_id = $this->id;
        $roomUser->room_id = $room->id;
        $roomUser->days = $roomUserDays;
        return $roomUser;
    }

    public function makeReview(Room $room)
    {
        //user can make review on a room
    }
}