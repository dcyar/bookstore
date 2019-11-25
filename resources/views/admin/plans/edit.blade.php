@extends('layouts.app')

@section('title')
    | Edit Plan
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Edit Plan</h5>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.plans.update', $plan->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name"><strong>Name:</strong></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $plan->name }}" id="name" required autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="credits"><strong>Credits:</strong></label>
                                <input type="number" class="form-control @error('name') is-invalid @enderror" name="credits" value="{{ $plan->credits }}" id="credits" min="1" required autofocus />
                                @error('credits')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price"><strong>Price:</strong></label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $plan->price }}" id="price" min="1" step="0.10" required autofocus />
                                @error('price')
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