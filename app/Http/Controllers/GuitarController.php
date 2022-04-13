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

    /**
     * @param int $guitar
     * @return \Illuminate\Http\Client\Response
     */
    public function show($guitar)
    {
        $guitars = self::getData();
        $index = array_search($guitar, array_column($guitars, 'id'));

        if ($index === false) {
            abort(404);
        }
        return view(
            'guitars.show',
            [
                'guitar' => $guitars[$index]
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
