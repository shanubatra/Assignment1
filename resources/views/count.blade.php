@extends('layouts.app')
@section('title')
    <title> {{ env('WEBSITE_NAME') }} | Import Page </title>
@endsection

@section('content')
    <div class="container-fluid my-3">
        <h3>Total Name : {{ $total }}</h3>
        <h3>City Wise Data : {{ $city }}</h3>
        <h3>SubCategory + area : {{ $area }}</h3>
        <h3>SubCategory + city : {{ $subcat }}</h3>
    </div>
@endsection
