<!DOCTYPE html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>{{ __('Index des Produits') }}</title>
    </head>

    <body style="text-align: center">
        <h1><strong>{{ __('Produits') }}</strong></h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <div>
                <a href="{{route('produits.create')}}" class="btn btn-primary">{{ __('Ajouter un Produit') }}</a>
                <div>&nbsp;&nbsp;</div>
                <a href="{{route('ertc.main')}}" class="btn btn-secondary">{{ __('Retour à la page principal') }}</a>
            </div>
            <br>
            <table class="table table-striped" border="1" style="margin-left: auto; margin-right: auto">
                <tr>
                    {{-- <th>Id &nbsp;&nbsp;</th> --}}
                    <th><strong>{{ __('Nom Produit') }} &nbsp;&nbsp;</strong></th>
                    <th><strong>{{ __('Type Produit') }} &nbsp;&nbsp;</strong></th>
                    <th><strong>{{ __('Description') }} &nbsp;&nbsp;</strong></th>
                    <th><strong>{{ __('Entreprise') }} &nbsp;&nbsp;</strong></th>
                    {{-- <th><strong>{{ __('Editer') }} &nbsp;&nbsp;</strong></th>
                    <th><strong>{{ __('Supprimer') }} &nbsp;&nbsp;</strong></th> --}}
                </tr>
                @foreach($produits as $produits)
                    <tr>
                        {{-- <td style="text-align: center;">{{$produits->id}}</td> --}}
                        <th style="text-align: center;">{{$produits['nom_produit'] }}</th>
                        <th style="text-align: center;">{{$produits['type_produit'] }}</th>
                        <th style="text-align: center;">{{$produits['description'] }}</th>
                        <th style="text-align: center;">{{$produits->produit->nom_entreprise }}</th> 
                        
                        {{-- <td style="text-align: center;">
                            <a href="{{route('produits.edit', ['produits' => $produits])}}" class="btn btn-primary">{{ __('Editer') }}</a>
                        </td>
                        <td style="text-align: center;">
                            <form method="post" action="{{route('produits.destroy', [$produits])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"/>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </table>
        <br><br>

        </div>
    </body>
</html>
