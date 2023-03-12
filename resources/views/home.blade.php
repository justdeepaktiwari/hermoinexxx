@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                    <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                    <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
