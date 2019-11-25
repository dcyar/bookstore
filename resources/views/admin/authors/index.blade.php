@extends('layouts.app')

@section('title')
    | Authors
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Authors</h5>
                        <a href="{{ route('admin.authors.create') }}" class="btn btn-primary btn-sm">New Author</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($authors as $author)
                                    <tr>
                                        <td class="text-center">{{ $author->id }}</td>
                                        <td>{{ $author->name }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.authors.edit', $author->id) }}" class="btn btn-warning btn-sm">E</a>
                                                <form action="{{ route('admin.authors.destroy', $author->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">D</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection