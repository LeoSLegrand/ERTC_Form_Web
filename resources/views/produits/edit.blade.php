<!DOCTYPE html>
<html>
    <head>
        <title>Edit Produit</title>
    </head>

    <body>
        <h1>Editer un Produit</h1>
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('produits.update', ['produits' => $produits])}}">
            @csrf
            @method('put')

            <div>
                <label>Nom du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="nom_produit" placeholder="Nom Produit" value="{{$produits->nom_produit}}"/>
                <br>
            </div>
            <br>

            <div>
                <label>Type du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="type_produit" placeholder="Type Produit" value="{{$produits->type_produit}}"/>
            </div>
            <br>

            <div>
                <label>Description Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="description" placeholder="Description Produit" value="{{$produits->description}}"/>
            </div>
            <br>

            <div>
                <input type="submit" value="Editer les paramètres"/>
            </div>
        </form>

        <br>
        <div>
            <a href="{{route('produits.index')}}">Retour à la liste de Produits</a>
        </div>

    </body>
</html>
