@extends('layouts.app')

@section('title')
    | Plans
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Plans</h5>
                        <a href="{{ route('admin.plans.create') }}" class="btn btn-primary btn-sm">New Plan</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th class="text-center">Credits</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                    <tr>
                                        <td class="text-center">{{ $plan->id }}</td>
                                        <td>{{ $plan->name }}</td>
                                        <td class="text-center">{{ $plan->credits }}</td>
                                        <td class="text-center">{{ $plan->price }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.plans.edit', $plan->id) }}" class="btn btn-warning btn-sm">E</a>
                                                <form action="{{ route('admin.plans.destroy', $plan->id) }}" method="post">
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