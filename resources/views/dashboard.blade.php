@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="alert alert-info">Tokens expire after one year.</p>

                    <p class="card-text">Current status of account:</p>
                    <ul>
                        <li>Approved to use API: <b>{{ $user->is_approved ? "Yes" : "No" }}</b>.</li>
                        <li>Approved to use read endpoint from API : <b>{{ $user->can_read ? "Yes" : "No" }}</b>.</li>
                        <li>Approved to use write endpoint from API : <b>{{ $user->can_write ? "Yes" : "No" }}</b>.</li>
                        <li>Current rate limit : {{ $user->rate_limit }} calls per minutes.</li>
                    </ul>
                </div>
            </div>

            @can('use-api')
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
            @endcan
        </div>
    </div>
</div>
@endsection
