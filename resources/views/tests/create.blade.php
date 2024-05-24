<!DOCTYPE html>
<html>
    <head>
        <title>Create Test</title>
    </head>

    <body>
        <h1>Créé un Test</h1>
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('tests.store')}}">
            @csrf
            @method('post')

            <div>
                <label>Date de Rédaction du Test &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="date_test" placeholder="Date au format YYYY-MM-DD HH:MI:SS" />
                <br>
            </div>
            <br>

            <div>
                <label>Aspect du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="aspect" placeholder="Aspect Produit" />
            </div>
            <br>

            <div>
                <label>Couleur du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="couleur" placeholder="Couleur Produit" />
            </div>
            <br>

            <div>
                <label>Point d'Ebullition du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="ebulition" placeholder="Point Ebulition" />
            </div>
            <br>

            <div>
                <label>Acidité du produit en PH &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="acidite" placeholder="Acidité en PH" />
            </div>
            <br>

            <div>
                <label>Solubilité du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="solubilite" placeholder="Solubilité Produit" />
            </div>
            <br>

            <div>
                <label>Validité : le produit peut il être commercialisé ? &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="estValide" placeholder="Validité Produit" />
            </div>
            <br>

            <div>
                <input type="submit" value="Sauvegarder le nouveau Test"/>
            </div>
        </form>

        <br>
        <div>
            <a href="{{route('tests.index')}}">Retour à la liste des Tests</a>
        </div>

    </body>
</html>
