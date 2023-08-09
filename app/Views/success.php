<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;900&display=swap" rel="stylesheet">
  <title>Navbar</title>
</head>
<style>
    h1 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 8vh;
    color: green;
    }
    h2 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 4vh;
    }
</style>

<body style="background-color: #eeee;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
  <div class="container-fluid d-flex justify-content-between">
    <!-- Logo -->
    <div>
      <a class="navbar-brand" href="#">InvestPlanner</a>
    </div>

    <!-- Menu Items -->
    <div>
      <div class="navbar-collapse justify-content-center " id="navbarNavAltMarkup">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Social Media Icons -->
    <div>
      <div class="d-flex">
        <a href="#" class="text-decoration-none text-dark m-1">
          <i class="fas fa-map-marker-alt"></i>
        </a>
        <a href="#" class="text-decoration-none text-dark m-1">
          <i class="fas fa-phone"></i>
        </a>
        <a href="#" class="text-decoration-none text-dark m-1">
         <i class="fas fa-envelope"></i>
        </a>
      </div>
    </div>

  </div>
</nav>

  <div class="container d-flex justify-content-center align-items-center min-vh-100 mt-n5">
  <div class="card" style="border-radius: 2vh; width: 100%;">
    <div class="card-body m-lg-5 text-center">
       <h1>Cadastro realizado</h1>
       <h1>Com Sucesso!</h1>

       <h4 class="mt-5">Seu cadastro foi enviado para nossos especialistas e logo
         você receberá um retorno do nosso projeto personalizado para suas necessidades.</h4>
    </div>
  </div>
</div>


</body>
</html>