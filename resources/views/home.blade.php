@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                  <a href="{{ route('posts') }}">  <h3>Posts</h3>  </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
