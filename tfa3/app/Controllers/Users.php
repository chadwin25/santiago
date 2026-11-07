<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('users', ['users' => $users]);
    }

    public function newUser()
    {
        return view('user_form', [
            'user' => null,
            'validationErrors' => session()->getFlashdata('validationErrors') ?? [],
        ]);
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
        ];

        $messages = [
            'username' => [
                'required'  => 'Please enter a username.',
                'is_unique' => 'That username is already taken.',
            ],
            'full_name' => [
                'required' => 'Please enter the user full name.',
            ],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()
                ->to(base_url('users/new'))
                ->withInput()
                ->with('validationErrors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'   => trim($this->request->getPost('username')),
            'full_name'  => trim($this->request->getPost('full_name')),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->to(base_url('users'))
            ->with('success', 'User added successfully.');
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound('User not found.');
        }

        return view('user_form', [
            'user' => $user,
            'validationErrors' => session()->getFlashdata('validationErrors') ?? [],
        ]);
    }

    public function update($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound('User not found.');
        }

        $rules = [
            'username'  => "required|max_length[50]|is_unique[users.username,id,{$id}]",
            'full_name' => 'required|max_length[100]',
        ];

        $messages = [
            'username' => [
                'required'  => 'Please enter a username.',
                'is_unique' => 'That username is already taken.',
            ],
            'full_name' => [
                'required' => 'Please enter the user full name.',
            ],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()
                ->to(base_url('users/' . $id . '/edit'))
                ->withInput()
                ->with('validationErrors', $this->validator->getErrors());
        }

        $userModel->update($id, [
            'username'  => trim($this->request->getPost('username')),
            'full_name' => trim($this->request->getPost('full_name')),
        ]);

        return redirect()
            ->to(base_url('users'))
            ->with('success', 'User updated successfully.');
    }
}