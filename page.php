<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            background-color: rgba(248, 248, 248, 0.8); /* Couleur de fond légèrement transparent */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .logo {
            width: 80px;
        }
        .center {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Fond semi-transparent pour le contenu */
            border-radius: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        h1, h3 {
            margin: 0;
        }
    </style>
</head>
<body>
   
    <div class="header">
        <h1><b>BIENVENU DANS MON SITE</b></h1>
        <a href="https://pigier-benin.com/">
            <img src="pigier.jpeg" alt="Logo 1" class="logo" style=" width: 100px; height: 100px; border-radius: 60%; object-fit: cover;">
        </a>
        <a href="vianney2.php">
            <img src="pigier 1.jpeg" alt="Logo 2" class="logo" style="width: 300px; height: 300px; border-radius: 60%; object-fit:contain;">
        </a>

    </div>
    
    <div class="center">
        <h1>I-Etat Civil</h1>
        <h2>
            <p>Nom: TOFFA HOUNNON <br><br>
               Prénom: <a href="#DESCRIPTIONS">Vianney</a> <br><br>
               Contact: +229 94655998 <br><br>
               Filière: <a href="vianney2.php#Rgl">Rgl</a></p>
        </h2>
    </div>
    
    <br>
    
    <h1>II-Mes Diplomes</h1> 
    <h3>
        <p>1- CEP <br> 2- BEPC <br> 3- BAC</p>
    </h3>
    
    <br>
    <center><img src="via.jpg" style="width:200px; height: 200px"></center>
    <h1>MES DESCRIPTIONS</h1>
    <h3 id="DESCRIPTIONS">
        <p>Les attributs sont des moyens de donner des précisions sur les deux types de balises (par paire ou seule). La syntaxe est: <b>non-attribut="valeur-attribut"</b>. Par exemple, prenons la balise seule. C'est bien beau de dire qu'on insère une image, mais encore faut-il indiquer laquelle. Les éléments sont l'ensemble composé d'une balise ouvrante, d'un contenu (du texte et/ou d'autres balises), et de la balise fermante correspondante.</p>
    </h3>
</body>
</html>
