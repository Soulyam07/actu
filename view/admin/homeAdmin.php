<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page d'accueil Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=listArticle">Voir mes articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=listCategorie">Categorie</a>
        </li>
       
      
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?action=profil">Voir Profil</a></li>
            <li><a class="dropdown-item" href="index.php?action=deconnexion">Deconnexion</a></li>
            
          </ul>
        </li>
        </ul>
</div>
    </div>
  </div>
</nav>
<br>

    <div class="card bg-light">
        <?php                

        foreach ($articles as $article) { 
        ?> 
        <div class="card-header d-flex">
        <h3>
           <?=$article['titre']?> </h3>&nbsp;&nbsp;<span class="align-self-center"> <?=$article['libelle']?> </span> 

        </div>
        <div class="card-body">
            <p><?=$article['contenu']?></p>
            <a href="index.php?action=seeById&amp;id=<?=$article['id']?>">Voir en details</a></div>
        <?php }
    
    ?>
       
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>