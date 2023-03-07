@extends('dashboard.layouts.master')

@section('content')
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<div class="create-form">
    <h3 style="margin-left: 10%;">Create Page</h3>

    <div class="container">
    <form method="POST" action="{{ route('pages.store') }}">
        @csrf
        @method('POST')
        <label for="name">Page Name</label>
        <input type="text" id="name" name="name" placeholder="Name..">

        <label for="popup">select Popup Window to show on This Pages</label>
        <select id="popup" name="popup">
            <option value="" selected>--Select Please--</option>
            @foreach($popups as $popup)
            <option value="{{$popup->id}}">{{$popup->name}}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
    </div>
</div>

@endsection