
<html>
    <head>
        <link rel="stylesheet" href="../public/css/style.css">
        <title>Liste des articles</title>
    </head>

    <body>

    <header>
        <ul>
            <li>
                <a href="index.php?action=home">Accueil</a>
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
                <a href="#" class="active">Ajouter un article</a>
            </li>
        </ul>
    </header>
    <h1 style="text-align:center">Ajout d'un article</h1>
   <div class="container" style="width:50%;text-align:center">
          <form action="">
            <input type="text" name="" id="" placeholder="Titre">
            <input type="text" name="" id="" placeholder="Contenu">
          </form>
   </div>
    
    </body>
</html>