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
        <li class="nav-item">
          <a class="nav-link"  href="#">Accueil</a>
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
          <i class="fa-solid fa-user fa-beat-fade"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item active" href="index.php?action=profil" aria-current="page">Voir Profil</a></li>
            <li><a class="dropdown-item" href="index.php?action=deconnexion">Deconnexion</a></li>
            
          </ul>
        </li>
        </ul>
</div>
    </div>
  </div>
</nav>

<div class="card w-50 mx-auto mt-4">
    <div class="card-body bg-light">
    <form action="index.php?action=updateProfil" method="post">
                <input type="hidden" name="id" value="<?=$admin['id']?>">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Login</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="login" name="login" value="<?=$admin['login']?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="prenom" name="prenom" value="<?=$admin['Prenom']?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom" name="nom" value="<?=$admin['Nom']?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" name="password" value="<?=$admin['password']?>">
                </div>
                
               
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Modifier</button>
                </div>
            </form>

    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>