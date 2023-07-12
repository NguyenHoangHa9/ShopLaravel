@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>FPT Library</h3>
    {{-- <a class="btn btn-success btn-sm" href="{{ route('search')}}">Search Here</a> --}}
</div>

@if(session()->has('success'))
    <label class="alert alert-success w-100">{{session('success')}}</label>
@elseif (session()->has('error'))
    <label class="alert alert-danger w-100">{{session('error')}}</label>
@endif
<form action="{{ route('books.search') }}" method="GET">
    <input type="text" name="search" placeholder="Search by book title">
    <button type="submit">Search</button>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Author ID</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pub year</th>
            <th>Available</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($book as $book)
            <tr>
                <td>{{ $book->authorid}}</td>
                <td>{{ $book->title}}</td>
                <td>{{ $book->ISBN}}</td>
                <td>{{ $book->pub_year}}</td>
                <td>{{ $book->available}}</td>
            @endforeach
    </tbody>
</table>


@endsection
