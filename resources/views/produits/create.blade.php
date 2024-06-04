<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Create Produit</title>
        <style>
            body {
                text-align: center; /* Center-align all content */
            }
            
            h1 {
                margin-top: 1%; 
            }
        
            form {
                margin-top: 1%; 
                margin-bottom: 2%; 
                display: inline-block; /* Display form elements in a block */
                text-align: left; /* Left-align form elements */
            }
        </style>
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
                <select name="type_produit">
                    <option value="crème hydratante">Crème hydratante</option>
                    <option value="shampooing">Shampooing</option>
                    <option value="savon">Savon</option>
                    <option value="lotion tonique">Lotion tonique</option>
                    <option value="masque facial">Masque facial</option>
                    <option value="démaquillant">Démaquillant</option>
                    <option value="baume à lèvres">Baume à lèvres</option>
                    <option value="exfoliant corporel">Exfoliant corporel</option>
                    <option value="sérum anti-âge">Sérum anti-âge</option>
                    <option value="Huile pour le visage">Huile pour le visage</option>
                </select>
            </div>
            <br>

            <div>
                <label>Description du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="description" placeholder="Description Produit" />
            </div>
            <br>

            <div>
                <label>Entreprise &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="entreprise_id" required>
                    @foreach($entreprises as $entreprise)
                        <option value="{{ $entreprise->id }}">{{ $entreprise->nom_entreprise }}</option>
                    @endforeach
                </select>
            </div>
            <br>

            <div>
                <input type="submit" value="Sauvegarde le nouveau produit" class="btn btn-primary"/>
            </div>
        </form>

        <br>
        <div>
            <a href="{{route('produits.index')}}" class="btn btn-secondary"
            >Retour à la liste de Produits</a>
        </div>

    </body>
</html>
