<?php

namespace App\Http\Controllers;

use App\Guitar;
use App\Services\TestService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use \Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GuitarController extends Controller
{
    public function index(TestService $testService)
    {
        return view(
            'guitars.index',
            [
                'guitars' => Guitar::all()
            ]
        );
    }

    /**
     * @param Guitar $guitar
     * @return Application|Factory|View
     */
    public function show(Guitar $guitar)
    {

        return view(
            'guitars.show',
            [
                'guitar' => $guitar
            ]
        );
    }

    /**
     * @param int $guitar
     * @return Application|Factory|View
     */
    public function edit(int $guitar)
    {

        return view(
            'guitars.edit',
            [
                'guitar' => Guitar::findOrFail($guitar)
            ]
        );
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('guitars.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'guitar_name' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer'],
        ]);
        $guitar = new Guitar();
        $guitar->name = strip_tags($request->input('guitar_name'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->year_made = strip_tags($request->input('year'));

        $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * @param Request $request
     * @param $guitar
     * @return RedirectResponse
     */
    public function update(Request $request, $guitar): RedirectResponse
    {
        $request->validate([
            'guitar_name' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer'],
        ]);
        $record = Guitar::findOrFail($guitar);
        $record->name = strip_tags($request->input('guitar_name'));
        $record->brand = strip_tags($request->input('brand'));
        $record->year_made = strip_tags($request->input('year'));

        $record->save();

        return redirect()->route('guitars.show', $guitar);
    }

}
