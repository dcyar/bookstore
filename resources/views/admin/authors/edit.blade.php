@extends('layouts.app')

@section('title')
    | Edit Author
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Edit Author</h5>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.authors.update', $author->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name"><strong>Name:</strong></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $author->name }}" id="name" required autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr />
                            <button type="submit" class="btn btn-outline-primary btn-block">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection