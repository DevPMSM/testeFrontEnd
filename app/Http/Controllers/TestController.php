<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Página de Teste Frontend',
            'items' => ['Item 1', 'Item 2', 'Item 3'],
            'user' => [
                'name' => 'Jeremias BackEnder',
                'email' => 'emailJeremia@example.com'
            ],
            'isLoggedIn' => true,
        ];

        return view('test', $data);
    }
}
