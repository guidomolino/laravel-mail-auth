@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h1>{{ $post -> title }}</h1>
                  <h3>{{ $post -> topic }}</h3>
                </div>
                <div class="card-body">
                  {{ $post -> content }} <br> <br>
                  {{ $post -> views }} views
                  <a href="{{ route('posts') }}">↩Return</a>
                  {{-- middleware in LoggedController --}}
                  @auth
                    <a class="btn btn-primary" href="{{route('post.edit', $post-> id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('post.delete', $post -> id)}}">Delete</a>
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
