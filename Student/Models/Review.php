<?php

namespace Student\Models;

class Review
{
    public int $id;
    public string $review;
    public int $user_id;
    public int $room_id;

    public function __construct()
    {
        
    }

    public function getReviews()
    {
        // return  array of reviews
    }
}