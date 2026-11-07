<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $customers = $customerModel
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('customers', ['customers' => $customers]);
    }

    public function newCustomer()
    {
        return view('customer_form', [
            'validationErrors' => session()->getFlashdata('validationErrors') ?? [],
        ]);
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|max_length[20]',
        ];

        $messages = [
            'full_name' => [
                'required' => 'Please enter the customer full name.',
            ],
            'email' => [
                'required'    => 'Please enter the customer email.',
                'valid_email' => 'Please enter a valid email address.',
            ],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()
                ->to(base_url('customers/new'))
                ->withInput()
                ->with('validationErrors', $this->validator->getErrors());
        }

        $customerModel = new CustomerModel();

        $customerModel->insert([
            'full_name' => trim($this->request->getPost('full_name')),
            'email'     => trim($this->request->getPost('email')),
            'phone'     => trim($this->request->getPost('phone') ?? '') ?: null,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->to(base_url('customers'))
            ->with('success', 'Customer added successfully.');
    }
}