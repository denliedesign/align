@extends('layouts.app')

@section('content')


    <div class="container py-5">
        <form action="{{ route('teams.update', ['team' => $team]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('teams.form')
        </form>
    </div>

@endsection
