<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Microblog</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column h-100">
    
<header id="topo" class="border-bottom sticky-top">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <h1 class="ms-n1"><a class="navbar-brand" href="index.php">Microblog</a></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php"><i class="bi bi-lock-fill"></i> Área administrativa</a>
        </li>
      </ul>

      <form autocomplete="off" class="d-flex" action="resultados.php" method="GET">
        <input name="busca" class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Pesquise aqui">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">OK</button>
      </form>
      
    </div>
  </div>
</nav>

</header>

<main class="flex-shrink-0">
    <div class="container">

    