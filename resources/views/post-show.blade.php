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
                  {{ $post -> views }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
