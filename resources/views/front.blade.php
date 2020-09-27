@extends('layouts.site')

@section('title', 'Library')

@section('sidebar')

@section('content')
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Welcome {{Auth::user()->name}}</h1>
    </header>

    <!-- Page Features -->

    <div class="row text-center">
        @foreach ($books as $book)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
{{--                <img class="card-img-top" src="{{$book->}}" alt="">--}}
                <div class="card-body">
                    <h4 class="card-title">{{$book->title}}</h4>
{{--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>--}}
                </div>
                <div class="card-footer">

                    <a href="{{ route('student.store') }}" class="btn btn-primary">Borrow !</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
@section('footer')
