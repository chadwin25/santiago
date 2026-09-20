<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Sherwin Adrian Santiago',
                'email' => 'sasantiago@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Abele John Juarez',
                'email' => 'ajjuarez@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Ken Anthonie Bautista',
                'email' => 'kabautista@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Andrei Lee Flores',
                'email' => 'alflores@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Ivan Mark Lizardo',
                'email' => 'imlizardo@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', ['customers' => $customers]);
    }
}