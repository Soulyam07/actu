
<html>
    <head>
        <link rel="stylesheet" href="../public/css/style.css">
        <title>Liste des articles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

    <header>
        <ul>
            <li>
                <a href="#" class="active">Accueil</a>
            </li>            
    <?php 
        foreach($categories as $categorie ) { ?>
         <li>                                
    <a href="index.php?action=seeByCat&amp;id=<?=$categorie['id']?>"><?= $categorie['libelle'] ?></a>
            </li>
        <?php } ?>
            <!-- <li>            
                <a href="#" class="disabled-link">Voir en details article</a>
            </li>
             -->
             
            <li>            
                <a href="index.php?action=dirConnexion">Connexion</a>
            </li>
        </ul>
    </header>
    <h1 style="text-align:center">Actualite les plus recents</h1>
    <div class="card bg-light w-100">
         <?php                

             foreach ($articles as $article) { 
            ?>
            <div class="card-body">
    
              
            
         
          <h1>
           <?=$article['titre']?> </h1><span> <?=$article['libelle']?> </span>
            <p><?=$article['contenu']?></p>
            <a href="index.php?action=seeById&amp;id=<?=$article['id']?>">Voir en details</a>
        <?php }
    
    ?>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>