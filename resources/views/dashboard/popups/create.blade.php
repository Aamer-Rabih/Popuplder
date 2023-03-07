@extends('dashboard.layouts.master')

@section('content')
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<div class="create-form">
    <h3 style="margin-left: 10%;">Create Popup Windows</h3>

    <div class="container">
    <form method="POST" action="{{ route('popups.store') }}">
        @csrf
        @method('POST')
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">

        <label for="type">Select Popup Type</label>
        <select id="type" name="type">
            <option value="" selected>--Select Please--</option>
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>

        <label for="location">Popup location</label>
        <select id="location" name="location">
            <option value="" selected>--Select Please--</option>
            <option value="top">Top</option>
            <option value="top-start">Top left Corner</option>
            <option value="top-end">Top Right Corner</option>
            <option value="center">Center</option>
            <option value="center-start">Center Left Corner</option>
            <option value="center-end">Center Right Corner</option>
            <option value="bottom">Bottom</option>
            <option value="bottom-start">Bottom Left Corner</option>
            <option value="bottom-end">Bottom Right Corner</option>
        </select>

        <label for="height">Height: </label>
        <input type="number" id="heigth" name="height"> px<br/><br/>

        <label for="width">Width: </label>
        <input type="number" id="width" name="width"> px<br/><br/>

        <label for="color">Popup Color</label><br/>
        <input type="color" id="color" name="color" placeholder="Your name.."><br/><br/>

        <label for="pages">select Pages to show This Popup Window</label>
        <select id="pages" name="pages">
        <option value="" selected>--Select Please--</option>
            @foreach($pages as $page)
            <option value="{{$page->id}}">{{$page->name}}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
    </div>
</div>

@endsection