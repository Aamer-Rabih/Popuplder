@extends('dashboard.layouts.master')

@section('content')
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<div class="create-form">
    <h3 style="margin-left: 10%;">Create Popup Type</h3>

    <div class="container">
    <form method="POST" action="{{ route('popuptypes.store') }}">
        @csrf
        @method('POST')
        <label for="fname">Name Of The New Type</label>
        <input type="text" id="fname" name="name" placeholder="Name..">

        <input type="submit" value="Submit">
    </form>
    </div>
</div>

@endsection