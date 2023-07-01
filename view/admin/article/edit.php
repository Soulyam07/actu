<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Modification d'un article</title>
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
          <a class="nav-link"  href="index.php?action=homeAdmin">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=listArticle">Voir mes articles</a>
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

<div class="card mt-5 w-50 mx-auto">
    <div class="card-header">
        <h5>Modification d'un article</h5>
    </div>
    <div class="card-body bg-light">
            <form action="index.php?action=updateArticle" method="post">
                <div class="mb-3">
                  <input type="hidden" name="id" value="<?=$article['id']?>">
                <label for="exampleFormControlInput1" class="form-label">Titre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre" name="titre" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contenu</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" ><?=$article['contenu']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Categorie</label>

                    <select class="form-select" aria-label="Default select example" name="categorie">
                      <option value="<?=$article['categorie'] ?>" selected><?=$article['libelle'] ?></option>
                      <?php foreach($categories as $categorie ) { ?>                        
                        <option value="<?= $categorie['id'] ?>"><?= $categorie['libelle'] ?></option>                      
                      <?php }?>
                    </select>
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