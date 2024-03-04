<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./images/datafoot.png" type="image/x-icon">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/style_register.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Inscription </title> 
</head>
<body>

    <div class="container">

    <a href="./index.php"><img style="display: block; margin: 0 auto; height: 100px;" src="./images/datafoot.png" ></a>
        

        <form action="traitement.php" method="POST">
            <div>
                <div class="details personal">
                    <header style="color: white;">S'inscrire</header>
                    <br><br>
                    <div class="fields">
                        <div for="nom" class="input-field">
                            <label style="color: white;">Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
                        </div>

                        <div for="prenom" class="input-field">
                            <label style="color: white;">Prénom</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
                        </div>

                        <div for="pseudo" class="input-field">
                            <label style="color: white;">Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" placeholder="Entrez un pseudo" required>
                        </div>

                        <div for="datenaissance" class="input-field">
                            <label style="color: white;">Date de naissance</label>
                            <input type="date" id="datenaissance" name="datenaissance" required>
                        </div>

                        <script>
                            // Calcul de la date maximale (13 ans avant la date actuelle)
                            const today = new Date();
                            today.setFullYear(today.getFullYear() - 13);

                            const datenaissance = document.getElementById("datenaissance");
                            datenaissance.max = today.toISOString().split('T')[0];
                        </script>

                        <div for="email" class="input-field">
                            <label style="color: white;">Email</label>
                            <input type="text" id="email" name="email" placeholder="Entrez votre email" required>
                        </div>

                        <div for="mdp" class="input-field">
                            <label style="color: white;">Mot de passe</label>
                            <input type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe" required minlength="10">
                        </div>


                        <div for="telephone" class="input-field">
                            <label style="color: white;">Numéro de téléphone</label>
                            <input type="number" id="telephone" name="telephone" style="font-size: 13px; text-align: left;" placeholder="Entrez votre numéro de téléphone" required>
                        </div>

                        <div for="genre" class="input-field">
                            <label style="color: white;">Genre</label>
                            <select id="genre" name="genre" required>
                                <option disabled selected style="color: #333;">Sélectionner votre genre</option>
                                <option style="color: #333;">Homme</option>
                                <option style="color: #333;">Femme</option>
                                <option style="color: #333;">Autres</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="input-field">
                    <input type="submit" style="background-color: white; color: #333;" value="S'inscrire" name="ok">
                </div> 
            </div>
        </form>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>