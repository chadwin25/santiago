<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskPages extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        return view('tasks/today', [
            'tasks' => $taskModel->getTodayTasks(),
        ]);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        return view('tasks/index', [
            'tasks' => $taskModel->getAllTasks(),
        ]);
    }

    public function profile()
    {
        $userModel = new UserModel();

        return view('pages/profile', [
            'user' => $userModel->getDemoUser(),
        ]);
    }

    public function about()
    {
        return view('pages/about');
    }
}