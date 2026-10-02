<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'djsantiago123',
                'full_name' => 'David James Santiago',
                'role' => 'Admin'
            ],
            [
                'username' => 'slramos456',
                'full_name' => 'Sid Leonard Ramos',
                'role' => 'User'
            ],
            [
                'username' => 'klgantang789',
                'full_name' => 'Kein Louis Gantang',
                'role' => 'Editor'
            ],
            [
                'username' => 'mjsgabriel101',
                'full_name' => 'Martin James San Gabriel',
                'role' => 'User'
            ],
            [
                'username' => 'nmkun202',
                'full_name' => 'Neo Maverick Kun',
                'role' => 'Admin'
            ]
        ];

        return view('users', ['users' => $users]);
    }
}