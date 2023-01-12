<?php

namespace App\Http\Controllers;

use App\Models\Button;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $button = \App\Models\Button::all();
        return view('/', compact('button'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Button::class);
        $button = new Button();
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $button = Button::create($this->validateRequest());
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function show(Button $button)
    {
        return view('/', compact('button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function edit(Button $button)
    {
        $this->authorize('update', Button::class);
        return view('buttons.edit', compact('button'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Button $button)
    {
        $button->update($this->validateRequest());
        return Redirect::to(url()->previous("/"))->with('message', 'Your Page Has Been Updated!');
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function destroy(Button $button)
    {
        $button->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'buttonTag' => 'required',
            'buttonText' => 'required',
            'buttonLink' => 'required',
        ]);
    }

}
