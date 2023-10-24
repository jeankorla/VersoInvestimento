<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>


  <!--- CSS --->
  <link rel="stylesheet" href="style/responsividade.css">

  <title>Document</title>
</head>

<body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

  <section class="vh-100 d-flex align-items-center" >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0 text-center">
          <img class="img-fluid mb-4" style="max-width: 50%; margin-top: -60px;" src="<?= base_url('img/logo.png') ?>"
            alt="Logo">
            
              <div class="card mx-auto w-100 shadow-lg" style=";border-radius: 30px; background-color: #fffff">
                <h1 class="my-1 display-5 fw-bold" style="margin: 70px;">
                  <span style="color: #bfa96c">Mentoria </span> Viver de <span style="color: #5d5136">Renda</span>
                  <p style="font-size: 2.5vh;">Tenha um processo estruturado de crescimento financeiro e patrimonial feito sob
                    medida para você saber exatamente o que fazer,
                    como fazer e qual resultado esperar.</p>
                </h1>
              </div>
           
        </div>

        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0 d-flex align-items-center ms-auto">
          <div class="card mx-auto w-100 shadow-lg" style="border-radius: 30px; background-color: #5d5136">
            <div class="card-body py-5 px-md-5">
              <h1 class="text-center text-white">Login</h1>

              <form action="<?php echo base_url('autenticacao/login') ?>" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="NAME" name="NAME" class="form-control" />
                  <label class="form-label text-white" for="NAME">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="PASSWORD" name="PASSWORD" class="form-control" />
                  <label class="form-label text-white" for="PASSWORD">Password</label>
                </div>

                <!-- Exibe a mensagem de erro, caso exista -->
                <?php if (session()->has('error')): ?>
                  <div class="alert alert-danger" role="alert">
                    <?= session('error') ?>
                  </div>
                <?php endif; ?>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: #bfa96c">
                  Sign in
                </button>

              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>