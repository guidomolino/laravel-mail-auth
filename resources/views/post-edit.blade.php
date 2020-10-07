@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h1>Modifica:</h1>
                </div>
                <div class="card-body">
                  <form action="{{ route('post.update', $post -> id)}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="title">titolo:</label>
                      <input type="text" name="title" value="{{ $post -> title }}">
                    </div>
                    <div class="form-group">
                      <label for="topic">topic:</label>
                      <input type="text" name="topic" value="{{ $post -> topic }}">
                    </div>
                    <div class="form-group">
                      <label for="content">contenuto:</label><br>
                      <textarea class="form-control" name="content" rows="8" cols="80">{{ $post -> content }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="views">views:</label>
                      <input type="number" name="views" value="{{ $post -> views }}">
                    </div>
                    <button class="btn btn-primary" type="submit">Confirm</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
