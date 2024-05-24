<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>{{ __('Index des Tests Produit') }}</title>
    </head>

    <body style="text-align: center">
        <h1><strong>{{ __('Tests Produit') }}</strong></h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <div>
                <a href="{{route('tests.create')}}" class="btn btn-primary">{{ __('Ajouter un Test') }}</a>
                <div>&nbsp;&nbsp;</div>
                <a href="{{route('ertc.main')}}" class="btn btn-secondary">{{ __('Retour à la page principal') }}</a>
            </div>
            <br>
            <table class="table table-striped" border="1" style="margin-left: auto; margin-right: auto">
                <tr>
                    <th>Id &nbsp;&nbsp;</th>
                    <th>{{ __('Produit Testé') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Date Test') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Aspect') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Couleur') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Ebulition') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Acidité') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Solubilité') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Validité Produit') }} &nbsp;&nbsp;</th>

                    <th>{{ __('Editer') }} &nbsp;&nbsp;</th>
                    <th>{{ __('Supprimer') }} &nbsp;&nbsp;</th>
                </tr>
                @foreach($tests as $tests)
                    <tr>
                        <td style="text-align: center;">{{$tests->id}}</td>
                        <td style="text-align: center;">{{$tests->produit->nom_produit}}</td>
                        <td style="text-align: center;">{{$tests->date_test}}</td>
                        <td style="text-align: center;">{{$tests->aspect}}</td>
                        <td style="text-align: center;">{{$tests->couleur}}</td>
                        <td style="text-align: center;">{{$tests->ebulition}}</td>
                        <td style="text-align: center;">{{$tests->acidite}}</td>
                        <td style="text-align: center;">{{$tests->solubilite}}</td>
                        <td style="text-align: center;">{{$tests->estValide}}</td>

                        <td style="text-align: center;">
                            <a href="{{route('tests.edit', ['tests' => $tests])}}" class="btn btn-primary">{{ __('Editer') }}</a>
                        </td>
                        <td style="text-align: center;">
                            <form method="post" action="{{route('tests.destroy', [$tests])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        <br><br>
            
        </div>
    </body>
</html>
