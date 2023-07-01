
<html>
    <head>
        <link rel="stylesheet" href="../public/css/style.css">
        <title>Liste des articles</title>
    </head>

    <body>

    <header>
        <ul>
            <li>
                <a href="index.php">Accueil</a>
            </li>

           <?php foreach($categories as $categorie ){ ?>
         <li>                                
    <a href="index.php?action=seeByCat&amp;id=<?=$categorie['id']?>"><?= $categorie['libelle'] ?></a>
            </li>
        <?php } ?>
        </ul>
    </header>


<div class="container ">
       <div class="inline-container">
      <h1>
       <?=$article['titre']?> </h1><span> <?=$article['libelle']?> </span> </div>
        <p><?=$article['contenu']?></p>
        <!-- <a href="index.php?action=seeById&amp;id=<?=$article['id']?>">Voir en details</a></div> -->

       
    
    </body>
</html>