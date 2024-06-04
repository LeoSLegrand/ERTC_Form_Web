## Installation

Dans le document '.env' on doit modifier ces lignes de code :<br><br>

>DB_CONNECTION=mysql<br>
>DB_HOST=127.0.0.1<br>
>DB_PORT=3306<br>
>DB_DATABASE=ertc<br>
>DB_USERNAME=root<br>
>DB_PASSWORD=secret
<br><br>
Par la suite on peut lancer les Seeder pour remplire la base de donée avec les commandes suivantes :<br><br>

> artisan db:seed --class=EntrepriseSeeder<br>
> artisan db:seed --class=TestSeeder<br><br>
> artisan db:seed --class=BouncerSeeder<br><br>
> artisan db:seed --class=UserSeeder<br><br>

Aller dans le dossier avec le fichier 'package.json' puis entrer la commande : <br><br>

> npm run dev<br><br>

Si la commande échoue, on doit installer npm avec la commande : <br><br>

> npm npm install<br><br>

Tout compte créé sera de base un compte '*client*'.<br> 
Pour créer un compte '*testeur*' on doit modifier la ligne suivante dans le fichier app\Models\User.php :<br><br>

> $bouncer->assign('client')->to($user); <br>
devient <br>
> $bouncer->assign('testeur')->to($user); <br>