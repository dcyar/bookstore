@extends('layouts.app')

@section('title')
    | {{ $book->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>{{ $book->title }}</h5>
                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm">Back</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td><strong>Title</strong></td>
                                    <td>{{ $book->title }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Slug</strong></td>
                                    <td>{{ $book->slug }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Price</strong></td>
                                    <td>{{ $book->price }} credits</td>
                                </tr>
                                <tr>
                                    <td><strong>Published Date</strong></td>
                                    <td>{{ $book->published_date }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Author</strong></td>
                                    <td>{{ $book->author->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Book Cover</strong></td>
                                    <td>
                                        <img src="{{ $book->cover->getUrl() }}" alt="{{ $book->title }}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Publish</strong></td>
                                    <td>
                                        @if ($book->publish)
                                            <span class="badge badge-success">Published</span>
                                        @else
                                            <span class="badge badge-danger">Not Published</span>    
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection