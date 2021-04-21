@extends('layouts.app')

@section('title')Book @endsection
<head>
    <style>
        #users {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #users td, #users th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #users tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #users tr:hover {
            background-color: #ddd;
        }

        #users th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #044A06;
            color: white;
        }
    </style>
</head>

@section('page')
<div class="container">
<table id="users">
    <thead>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
    </tr>
    </thead>
    <tbody>
    @if(count($books)>0)
        @foreach ($books as $key => $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->year}}</td>
            </tr>
        @endforeach
    @else
        <h2>No books are found</h2>
    @endif
    </tbody>
</table>
</div>

@endsection
