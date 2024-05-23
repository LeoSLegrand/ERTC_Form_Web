<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
        
                    {{-- <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" style="float: right; padding-right: 40px;" class="btn btn-danger">
                        {{ __('Log Out') }}
                    </x-dropdown-link> --}}
            </form>
    </head>

    <body>
        <br><br>
        <h1 style="text-align: center"><strong>{{ __('Liste Produits Cosmétiques')}}</strong></h1>
        <br>

        <!-- Display user's name in the header -->
        @if (Auth::check())
            <div style="text-align: right; padding-right: 20px;">
                <p>{{ __('Welcome') }}, {{ Auth::user()->name }}</p>
            </div>
        @endif

        <table  class="table table-striped" border="1" style="margin-left: auto; margin-right: auto">
            <tr>
                <th>{{ __('Nom du Produit') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Date de Création') }}</th>
                <!-- Add more columns as needed -->
            </tr>
            {{-- @foreach($products  as $products )
            <tr>
                <td>{{ $product->nom }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->date_creation }}</td>
                <!-- Add more columns as needed -->
            </tr>
            @endforeach --}}
        </table>

        <br><br>
        <div>
            @auth
            <a href="/produit/index" class="btn btn-secondary">{{ __('Gestion des Produits') }}</a>
            <div>&nbsp;&nbsp;</div>
            @endauth

            @auth
            <a href="/test/index" class="btn btn-secondary">{{ __('Gestion des Tests Produits') }}</a>
            <div>&nbsp;&nbsp;</div>
            @endauth
        </div>
        <br><br>
    </body>
</html>