@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                  <ul>
                    @foreach ($posts as $post)
                      <li>
                        <h3> {{ $post -> title }} </h3>
                        {{ $post -> views }} views
                      </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
