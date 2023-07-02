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
          <a class="nav-link"  href="index.php?action=home">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Voir mes articles</a>
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
            <li><a class="dropdown-item" href="index.php?action=profil">Voir Profil</a></li>
            <li><a class="dropdown-item" href="index.php?action=deconnexion">Deconnexion</a></li>
            
          </ul>
        </li>
        </ul>
</div>
    </div>
  </div>
</nav>


<div class="card mt-4 bg-light">
    <div class="card-header bg-light d-flex bd-highlight mb-3">
        <h4 class="me-auto p-2 bd-highlight">Liste des article</h4>&nbsp;
        <a type="button" href="index.php?action=addArticle" class="p-2 bd-highlight align-self-center" style="color:black;"><i class="fa-solid fa-circle-plus fa-beat fa-2xl"></i>
         </a>
    </div>
    <div class="card-body bg-light">

        <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libelle</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php                
                foreach ($articles as $article) { 
                ?> 
                <tbody>
                
                <td></td>
                  <td>
                  <?=$article['titre']?>
                  </td>
                  <td><?=$article['contenu']?></td>
                  <td class="d-flex">
                    <a href="index.php?action=editArticle&id=<?= $article['id']?>" style="color:black;"><i class="fa-solid fa-pencil"></i></a>&nbsp;
                    <a type="button" onclick="confirmDelete()"  style="color:black;"><i class="fa-solid fa-trash"></i></a>&nbsp;
                    <a href="index.php?action=seeOneArticle&id=<?= $article['id']?>" style="color:black;"><i class="fa-solid fa-eye"></i></a>
                  </td>
                  
                  <script>
                    function confirmDelete() {
                      if (confirm("Êtes-vous sûr de vouloir supprimer cet article ?")) {
                        window.location.href = "index.php?action=deleteArticle&id=<?= $article['id']?>";
                      }
                    }
                  </script>
                <?php }?>

                    
                </tbody>
        </table>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>