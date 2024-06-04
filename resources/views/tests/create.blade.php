<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Create Test</title>
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
                <label>Produit à tester &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="produit_id" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->nom_produit }}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <br>

            <div>
                <label>Date de Rédaction du Test &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="datetime-local" name="date_test" value="{{ now()->format('Y-m-d\TH:i:s') }}" />
                <br>
            </div>
            <br>

            <div>
                <label>Aspect du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="aspect">
                    <option value="liquide">Liquide</option>
                    <option value="gel">Gel</option>
                    <option value="Poudre">Poudre</option>
                    <option value="mousse">Mousse</option>
                    <option value="baume">Baume</option>
                    <option value="spray">Spray</option>
                    <option value="huile">Huile</option>
                </select>
            </div>
            <br>

            <div>
                <label>Couleur du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="couleur" placeholder="Couleur Produit" />
            </div>
            <br>

            <div>
                <label>Point d'Ebullition du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="ebulition">
                    <option value="faible">Faible</option>
                    <option value="moyenne">Moyenne</option>
                    <option value="haute">Haute</option>
                </select>
            </div>
            <br>

            <div>
                <label>Acidité du produit en PH &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="number" name="acidite" placeholder="Acidité en PH" min="0" max="14" step="0.01" />
            </div>
            <br>

            <div>
                <label>Solubilité du Produit &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="solubilite">
                    <option value="soluble">Soluble</option>
                    <option value="insoluble">Insoluble</option>
                </select>
            </div>
            <br>

            <div>
                <label>Validité : le produit peut il être commercialisé ? &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="estValide" required>
                    <option value="Oui">Oui</option>
                    <option value="Non">Non</option>
                </select>
            </div>
            <br>

            <div>
                <input type="submit" value="Sauvegarder le nouveau Test" class="btn btn-primary"/>
            </div>
        </form>

        <br>
        <div>
            <a href="{{route('tests.index')}}" class="btn btn-secondary">Retour à la liste des Tests</a>
        </div>

    </body>
</html>
