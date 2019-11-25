@extends('layouts.app')

@section('title')
    | New Book
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>New Book</h5>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title"><strong>Title:</strong></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required autofocus />
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price"><strong>Price:</strong></label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price" min="0" step="0.10" required />
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="published_date"><strong>Published Date:</strong></label>
                                <input type="text" class="form-control @error('published_date') is-invalid @enderror" name="published_date" id="published_date" required placeholder="19xx" />
                                @error('published_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="author_id"><strong>Author:</strong></label>
                                <select name="author_id" class="form-control" id="author_id">
                                    <option value="" selected disabled>Pick an author</option>
                                    @foreach ($authors as $id => $author)
                                        <option value="{{ $id }}">{{ $author }}</option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cover"><strong>Book Cover:</strong></label>
                                <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover" required />
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex">
                                <label for="publish"><strong>Publish:</strong></label>
                                <div class="form-check ml-2">
                                    <input type="checkbox" class="form-check-input" value="1" name="publish" id="publish" />
                                    {{-- <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}
                                </div>
                                @error('publish')
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