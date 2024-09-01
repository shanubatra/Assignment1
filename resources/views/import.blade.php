@extends('layouts.app')
@section('title')
    <title> {{ env('WEBSITE_NAME') }} | Import Page </title>
@endsection

@section('content')
    <div class="container-fluid my-3">
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <form action="{{ route('import-data') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input class="form-control" type="file" name="import_file" id="">
                <button type="submit" class="btn btn-primary">import</button>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <table class="table table-bordered table-hover">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Area</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Category</th>
                <th>SubCategory</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->area }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->subcategory }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection
