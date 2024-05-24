<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Create Produit</title>
    </head>

    <body>
        <h1>Créé un Produit</h1>
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('produits.store')}}">
            @csrf
            @method('post')

            <div>
                <label>Nom du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="nom_produit" placeholder="Nom Produit" />
                <br>
            </div>
            <br>

            <div>
                <label>Type de Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="type_produit" placeholder="Type Produit" />
            </div>
            <br>

            <div>
                <label>Description du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="description" placeholder="Description Produit" />
            </div>
            <br>
            <div>
                <input type="submit" value="Sauvegarde le nouveau produit"/>
            </div>
        </form>

        <br>
        <div>
            <a href="{{route('produits.index')}}">Retour à la liste de Produits</a>
        </div>

    </body>
</html>
