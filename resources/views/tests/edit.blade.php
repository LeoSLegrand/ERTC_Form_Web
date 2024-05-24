<!DOCTYPE html>
<html>
    <head>
        <title>Edit Test</title>
    </head>

    <body>
        <h1>Editer un Test Produit</h1>
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('tests.update', ['tests' => $tests])}}">
            @csrf
            @method('put')

            <div>
                <label>Date de Rédaction du Test &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="date_test" placeholder="Date au format YYYY-MM-DD HH:MI:SS" value="{{$tests->date_test}}"/>
                <br>
            </div>
            <br>

            <div>
                <label>Aspect du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="aspect" placeholder="Aspect Produit" value="{{$tests->aspect}}"/>
            </div>
            <br>

            <div>
                <label>Couleur du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="couleur" placeholder="Couleur Produit" value="{{$tests->couleur}}"/>
            </div>
            <br>

            <div>
                <label>Point d'Ebullition du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="ebulition" placeholder="Point Ebulition" value="{{$tests->ebulition}}"/>
            </div>
            <br>

            <div>
                <label>Acidité du produit en PH &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="acidite" placeholder="PH entre 1 et 14" value="{{$tests->acidite}}"/>
            </div>
            <br>

            <div>
                <label>Solubilité du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="solubilite" placeholder="Solubilité Produit" value="{{$tests->solubilite}}"/>
            </div>
            <br>

            <div>
                <label>Validité : le produit peut il être commercialisé ? &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="estValide" placeholder="Validité Produit" value="{{$tests->estValide}}"/>
            </div>
            <br>

            <div>
                <input type="submit" value="Editer les paramètres"/>
            </div>
        </form>

        <br>
        <div>
            <a href="{{route('tests.index')}}">Retour à la liste des Tests</a>
        </div>

    </body>
</html>
