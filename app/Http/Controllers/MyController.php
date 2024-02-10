<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function method($title, $content)
    {
        $links=[
            [
                'text'=>'text1',
                'href' =>'href1',
            ],
            [
                'text'=>'text2',
                'href' =>'href2',
            ],
            [
                'text'=>'text3',
                'href' =>'href3',
            ],
        ];
        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],[
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];
        //return view('method', ['title' => $title, 'content' => $content, 'links'=>$links]);
        return view('method', compact('title', 'content', 'links','users'));

    }

}
