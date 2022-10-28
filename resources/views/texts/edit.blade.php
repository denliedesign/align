@extends('layouts.app')

@section('content')


    <div class="container py-5">
        <form action="{{ route('texts.update', ['text' => $text]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('texts.form')
        </form>
    </div>

@endsection
