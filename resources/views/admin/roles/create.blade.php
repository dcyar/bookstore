@extends('layouts.app')

@section('title')
    | New Role
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>New Role</h5>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.roles.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name"><strong>Name:</strong></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr />
                            <button type="submit" class="btn btn-outline-primary btn-block">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection