
<html>
    <head>
        <link rel="stylesheet" href="../public/css/style.css">
        <title>Liste des articles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9f528a4563.js" crossorigin="anonymous"></script>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2 mx-auto">
  <div class="container-fluid">
    <!-- <a class="navbar-brand active" href="#">Accueil</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php if(isset($_SESSION['username'])) { ?>
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=listArticle">Voir mes articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=listCategorie">Categorie</a>
        </li>
       <?php } else {?>  
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=home">Accueil</a>
        </li>          
            <?php 
        foreach($categories as $categorie ) { ?>
        <li class="nav-item">                               
    <a class="nav-link" href="index.php?action=seeByCat&amp;id=<?=$categorie['id']?>"><?= $categorie['libelle'] ?></a>
            </li>
        <?php } ?>
            
        <?php } ?>
      
      </ul>
      
      <div class="d-flex">
        <ul class="navbar-nav">
        <?php if(isset($_SESSION['username'])) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user fa-beat-fade"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php?action=profil">Voir Profil</a></li>
                    <li><a class="dropdown-item" href="index.php?action=deconnexion">Deconnexion</a></li>
                    
                </ul>
            </li>
        <?php } else{ ?>
            <li class="nav-item">
            <a href="index.php?action=dirConnexion" class="nav-link">Connexion</a>
            </li>
        <?php } ?>
        </ul>
</div>
    </div>
  </div>
</nav>

<div class="card mt-5 mx-auto bg-light w-75">
    <div class="card-header d-flex justify-content-start">
    <h1>
       <?=$article['titre']?> </h1>&nbsp;&nbsp;&nbsp;
       <span class="align-self-center"> (<?=$article['libelle']?>) </span>    
    </div>
    <div class="card-body">
    <p><?=$article['contenu']?> Creer par <b><?=$article['createdBy']?></b></p> 

    </div>
</div>



       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    </body>
</html>