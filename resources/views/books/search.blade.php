@extends('layouts.master')

@section('content')
    <h1>Search Results for "{{ $searchTerm }}"</h1>

    @if ($book->count() > 0)
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
    @else
        <p>No books found.</p>
    @endif
@endsection

