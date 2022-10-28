<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $team = \App\Models\Team::all();
        return view('/', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Team::class);
        $team = new Team();
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
        $team = Team::create($this->validateRequest());
        $this->storeImage($team);
        return Redirect::to(url()->previous("/"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('/', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $this->authorize('update', Team::class);
        return view('/', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->update($this->validateRequest());
        $this->storeImage($team);
        return Redirect::to(url()->previous("/"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return Redirect::to(url()->previous("/"));

    }

    private function validateRequest()
    {
        return request()->validate([
            'teamTag' => 'required',
            'teamImage' => 'required|file|image|max:5000',
            'name' => 'required',
            'title' => 'required',
            'bio' => 'required',
        ]);
    }

    private function storeImage($team)
    {
        if (request()->has('teamImage'))
        {
            $team->update([
                'teamImage' => request()->teamImage->store('uploads', 'public'),
            ]);
        }
    }

}
