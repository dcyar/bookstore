@extends('layouts.app')

@section('title')
    | My Wallet
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Wallet</h5>
                    <p>You have <strong>{{ auth()->user()->wallet->credits }}</strong> credits</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($plans as $plan)
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <form action="/checkout" method="post">
                                        @csrf
                                        <input type="hidden" name="plan_id" value="{{ $plan->id }}" />
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $plan->name }}</h5>
                                        </div>
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item">{{ $plan->credits }} total credits</li>
                                            <li class="list-group-item">${{ $plan->price }}</li>
                                        </ul>
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary btn-block">Buy</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
