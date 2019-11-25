@extends('layouts.app')

@section('title')
    | New User
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>New User</h5>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.users.store') }}" method="post">
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
                            <div class="form-group">
                                <label for="email"><strong>Email:</strong></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><strong>Password:</strong></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><strong>Roles:</strong></label>
                                <br />
                                @foreach ($roles as $id => $role)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="{{ $role }}" name="roles[]" value="{{ $id }}" />
                                        <label class="form-check-label" for="{{ $role }}">{{ $role }}</label>
                                    </div>
                                @endforeach
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