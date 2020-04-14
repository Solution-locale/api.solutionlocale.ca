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
                       {{--  <li>Vous êtes approuvés pour une utilisation en lecture l'API: <b>{{ $user->can_read ? "Oui" : "Non" }}</b>.</li>
                        <li>Vous êtes approuvés pour une utilisation en écriture l'API: <b>{{ $user->can_write ? "Oui" : "non" }}</b>.</li> --}}
                        <li><em>Rate limit</em> actuelle : {{ $user->rate_limit }} appels d'API par minutes.</li>
                    </ul>
                    <div class="alert alert-warning">
                        <p>Pour obtenir une augmentation du nombre d'API que vous pouvez faire, merci de contacter</p>
                        <p>Jean-Philippe&nbsp;Murray à l'adresse <a href="mailto:jp@atomescroch.us" class="text-reset">jp@atomescroch.us</a></p> 
                    </div>
                </div>
            </div>

            <div class="alert alert-info mt-3">
                <p>La seule contrainte d'utilisation de notre API est d'en faire l'attribution si vous utilisez ses données. Une mention devrait se trouver dans votre site, ou application, qui devrait se lire comme suit: </p>
                <p><code>Données provenant en tout, ou en partie, de solutionlocale.ca</code>.</p>
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
