<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .nav-link {
            margin-left: 1rem;
            font-weight: 600;
            color: #4b5563;
            text-decoration: none;
        }

        .nav-link:hover {
            color: #1c2c52;
        }

        .logout-link {
            font-weight: 600;
            color: #ff0505;
            text-decoration: none;
        }

        .logout-link:hover {
            color: #ff0000;
        }
    </style>
</head>

<body>
        {{-- <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>    --}}

        <a href="{{ route('welcome') }}" class="nav-link">Page d'Accueil ERTC</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();" class="logout-link">
                {{ __('Déconnexion') }}
            </x-dropdown-link>
        </form>

        <br><br>
        <h1 style="text-align: center"><strong>{{ __('Liste Produits Cosmétiques')}}</strong></h1>
        <br>

        <!-- Display user's name in the header -->
        @if (Auth::check())
            <div style="text-align: right; padding-right: 20px;">
                <p style="text-align: center">Connecté en tant que <strong>{{ Auth::user()->name }}</strong></p>
            </div>
        @endif

        <table class="table table-striped" border="1" style="margin-left: auto; margin-right: auto; max-width: 80%;">
            <tr>
                <th style="text-align: center;"><strong>{{ __('Nom du Produit') }}</strong></th>
                <th style="text-align: center;"><strong>{{ __('Type Produit') }}</strong></th>
                <th style="text-align: center;"><strong>{{ __('Entreprise') }}</strong></th>
                <th style="text-align: center;"><strong>{{ __('Validité Produit') }}</strong></th>
            </tr>
            
            @foreach($produits as $produits )
            <tr>
                <th style="text-align: center;">{{$produits['nom_produit'] }}</th>
                <th style="text-align: center;">{{$produits['type_produit'] }}</th>
                <th style="text-align: center;">{{$produits->produit->nom_entreprise }}</th> 
                {{-- $produits->produit->nom_entreprise fait référence à la fonction "produit" dans Produit.php --}}       
                <th style="text-align: center;">
                    @if($produits->test)
                        {{$produits->test->estValide}}
                    @else
                        {{ __('Attente d\'évaluation') }}
                    @endif
                </th>
            </tr>
            @endforeach
        </table>

        <br><br>
        <div>
            @auth
            <a href="/produit/index" class="btn btn-secondary" style="position: relative;left: 45%;">{{ __('Gestion des Produits') }}</a>
            <div>&nbsp;&nbsp;</div>
            @endauth

            @auth
            <a href="/test/index" class="btn btn-secondary" style="position: relative;left: 44%;">{{ __('Gestion des Tests Produits') }}</a>
            <div>&nbsp;&nbsp;</div>
            @endauth
        </div>
        <br><br>
    </body>
</html>