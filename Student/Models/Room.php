<?php

namespace Student\Models;

class Room
{
    public int $id;
    public float $price;

    public function __construct(int $id, float $price)
    {
        $this->id = $id;
        $this->price = $price;
    }

    public static function getRoomUsers()
    {
        $ahmed = new User(1,"ahmed");
        $mohammed = new User(2,"mohammed");
        $ali = new User(2,"ali");
        $ebrahim = new User(2,"ebrahim");
        $osama = new User(2,"osama");

        $room = new Room(1,50);
        $room2 = new Room(2,100);
        
        $roomUser = new RoomUser();
        $roomUser2 = new RoomUser();

        $ahmed->buyRoom($roomUser,$room,30);
        $mohammed->buyRoom($roomUser2,$room2,10);
        return [
            $ahmed,
            $mohammed,
            $ali,
            $ebrahim,
            $osama
        ];
    }
}