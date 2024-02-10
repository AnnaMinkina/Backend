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
        //return view('method', ['title' => $title, 'content' => $content, 'links'=>$links]);
        return view('method', compact('title', 'content', 'links'));

    }

}
