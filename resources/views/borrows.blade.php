@extends('layouts.site')

@section('title', 'Borrow')

@section('sidebar')

@section('content')
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Book Title</th>
        <th scope="col">Username</th>
        <th scope="col">Date Issued</th>
        <th scope="col">Date from return</th>
        <th scope="col">Return Date</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($userBorrows as $borrow)
        <tr>
            <td>{{$borrow->id}}</td>
            <td>{{$borrow->book->title}}</td>
            <td>{{$borrow->user->name}}</td>
            <td>{{$borrow->date_issued}}</td>
            <td>{{$borrow->date_due_for_return}}</td>
            <td>{{$borrow->date_return}}</td>


        </tr>
    @endforeach

    </tbody>
    </table>
@endsection

