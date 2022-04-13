<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarController extends Controller
{
    public function index()
    {
        return view(
            'guitars.index',
            [
                'guitars' => self::getData()
            ]
        );
    }

    public static function getData()
    {
        return [
            ['id' => 1, "name" => 'Gibson'],
            ['id' => 2, "name" => 'Starla 2'],
            ['id' => 3, "name" => 'Explorer'],
            ['id' => 4, "name" => 'Talman']
        ];
    }
}
