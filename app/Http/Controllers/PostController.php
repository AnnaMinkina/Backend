<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                "id" => 1,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 2,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 3,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ]
        ];

        return $posts;
    }

    public function show($id)
    {
        $posts = [
            [
                "id" => 1,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 2,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 3,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ]
        ];

        return $posts[$id - 1];
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function update(Request $request, $id)
    {
        return [
            "update" => true
        ];
    }
    
    public function destroy($id)
    {
        return [
            "deleted" => true
        ];
    }
}
