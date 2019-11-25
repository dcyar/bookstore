@extends('layouts.app')

@section('title')
    | Books
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Books</h5>
                        <a href="{{ route('admin.books.create') }}" class="btn btn-primary btn-sm">New Book</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Title</th>
                                    <th class="text-center">Credits</th>
                                    <th class="text-center">Published Date</th>
                                    <th class="text-center">Author</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td class="text-center">{{ $book->id }}</td>
                                        {{-- <td>{{ $book->cover->getUrl('thumb') }}</td> --}}
                                        <td>{{ $book->title }}</td>
                                        <td class="text-center">{{ $book->price }}</td>
                                        <td class="text-center">{{ $book->published_date }}</td>
                                        <td class="text-center">{{ $book->author->name }}</td>
                                        <td class="text-center">
                                            @if ($book->publish)
                                                <span class="badge badge-success">Published</span>
                                            @else
                                                <span class="badge badge-danger">Not Published</span>    
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.books.show', $book->id) }}" class="btn btn-info btn-sm">S</a>
                                                <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning btn-sm">E</a>
                                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST">
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