<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;900&display=swap" rel="stylesheet">

  <!---- ---->
  <link rel="stylesheet" href="<?= base_url('style/responsividade.css'); ?>">
  

  <title>Navbar</title>
</head>
<style>
    h1 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 8vh;
    color: #5d5136;
    }
    h2 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 4vh;
    }

    
.bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, #bfa96c 50%, #5d5136 50%);
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
    animation-duration: 5s;
}

.bg2 {
    animation-direction:alternate-reverse;
    animation-duration:6s;
}

.bg3 {
    animation-duration: 7s;
}

.content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:10vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
}

@keyframes slide {
    0% {
        transform:translateX(-25%);
    }
    100% {
        transform:translateX(25%);
    }
}


</style>

<body style="background-color: #eeee;">

  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">

<div class="container-fluid d-flex justify-content-between">
    <!-- Logo -->
    <div>

        <img class="logo-invest" src="<?= base_url('img/logo.png'); ?>" alt="kkkkk">
        <a class="navbar-brand">InvestPlanner</a>

    </div>

    <!-- Menu Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

            <!-- Collapsible Navbar Content -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        
        <ul class="navbar-nav">
            
            <li class="nav-item">
                
                <a class="nav-link active" href="/home">Home</a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="/Autenticacao">Login</a>
            
            </li>
            
            <li class="nav-item">
                
                <a class="nav-link" href="https://investplanner.org">Site</a>
            
            </li>
        
        </ul>
    
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
         você receberá um retorno do nosso projeto personalizado para suas necessidades.        
        </h4>
        <h5 style="text-decoration: underline;">Caso seja necessário, nossos especialistas entrarão em contato para solicitar informações adicionais!</h5>
    </div>
  </div>
</div>




</body>
</html>