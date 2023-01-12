@extends('layouts.app')

@section('content')


    <div class="container py-5">
        <form action="{{ route('buttons.update', ['button' => $button]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('buttons.form')
        </form>
    </div>

@endsection
