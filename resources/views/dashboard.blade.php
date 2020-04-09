@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">État actuel de votre compte</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>Vous êtes approuvés pour une utilisation de l'API: <b>{{ $user->is_approved ? "Oui" : "Non" }}</b>.</li>
                        <li>Vous êtes approuvés pour une utilisation en lecture l'API: <b>{{ $user->can_read ? "Oui" : "Non" }}</b>.</li>
                        <li>Vous êtes approuvés pour une utilisation en écriture l'API: <b>{{ $user->can_write ? "Oui" : "non" }}</b>.</li>
                        <li><em>Rate limit</em> actuelle : {{ $user->rate_limit }} appels d'API par minutes.</li>
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
