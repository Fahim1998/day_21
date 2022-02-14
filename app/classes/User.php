<?php

namespace App\classes;
class User
{
    public function getAllUser()
    {
        return [
            0 => [
                'id' => '1',
                'name' => 'Hasibul khan',
                'email' => 'admin@gmail.com',
                'password' => '123245'
            ],
            1 => [
                'id' => '2',
                'name' => 'Fahim Montasir',
                'email' => 'fahim@gmail.com',
                'password' => '123245'
            ],
        ];
    }
}
