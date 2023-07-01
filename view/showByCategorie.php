
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Liste des articles</title>
    </head>

    <body>

    <header>
        <ul>
            <li>
                <a href="index.php" >Accueil</a>
            </li>
         <?php foreach($categories as $categorie ){ ?>
         <li>                            
                        <?php
                        $categorieId = $categorie['id'];
                        $classeActive = '';
                        if (isset($_GET['id']) && $_GET['id'] == $categorieId) {
                            $classeActive = 'active';
                        }
                       
                        ?>
                        <a class="<?= $classeActive ?>" href="index.php?action=seeByCat&amp;id=<?=$categorie['id']?>"><?= $categorie['libelle'] ?></a>
                    </li>
                <?php } ?>
                </ul>   

    </header>
     
 <?php foreach ($articles as $article) { ?>

    <div class="container ">
           <div class="inline-container">
          <h1>
           <?=$article['titre']?> </h1><span> <?=$article['libelle']?> </span> </div>
            <p><?=$article['contenu']?></p>

            <a href="index.php?action=seeById&amp;id=<?=$article['id']?>">Voir en details</a></div>

            <?php
        }
    
    ?>
    
    </body>
</html>