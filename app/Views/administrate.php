<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
   <!-- css -->
  <link rel="stylesheet" href="<?php echo base_url('style/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('style/responsividade.css')?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;900&display=swap" rel="stylesheet">

  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 

  
  
</head>

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
                  
                  <a class="nav-link" href="https://investplanner.org">Site</a>
              
              </li>
          
          </ul>
      
      </div>

      <!-- Social Media Icons -->
      <div>

          <div class="d-flex">

              <a href="https://goo.gl/maps/R4RHVQHFGCc3LwdC7" class="text-decoration-none text-dark m-1">
                  <i class="fas fa-map-marker-alt"></i>
              </a>

              <a href="https://goo.gl/maps/R4RHVQHFGCc3LwdC7" class="text-decoration-none text-dark m-1">
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
      
      <div class="table-responsive"> <!-- Adicione esta div -->

      <div class="mb-3">
        <label for="pesquisa" class="form-label">Pesquisar:</label>
        <input type="text" id="pesquisa" class="form-control" placeholder="Digite sua pesquisa...">
      </div>

        <table class="table table-striped ">
          <thead>
            <tr>
              <th>ID</th>
              <th style="text-align: center;">Ações</th>
              <th>Nome</th>
              <th>Data</th>
              <th>INDICE_POUPANCA</th>
              <th>INDICE_LIQUIDEZ_CORRENTE</th>
              <th>INDICE_ENDIVIDAMENTO</th>
              <th>INDICE_COBERTURA</th>
              <th>PATRIMONIO_LIQUIDO</th>              
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $item): ?>
              <tr>
                <td><?= $item->PK ?></td>
                <td>
                  <div style="display: flex; gap: 10px">
                    <a href="/autenticacao/gerar/<?= $item->PK ?>" class="btn btn-primary">Relatório</a>
                    <a href="<?= base_url('autenticacao/edit/' . $item->PK) ?>" class="btn btn-warning">Editar</a>
                    <a href="<?= base_url("autenticacao/excluir/{$item->PK}") ?>" class="btn btn-danger">Excluir</a>
                  </div>
                </td>

                <td><?= $item->SOBRE_NOME ?></td>
                <td><?= date('d/m/Y', strtotime($item->DATA)) ?></td>
                <td><?= $item->INDICE_POUPANCA ?></td>
                <td><?= $item->INDICE_LIQUIDEZ_CORRENTE ?></td>
                <td><?= $item->INDICE_ENDIVIDAMENTO ?></td>
                <td><?= $item->INDICE_COBERTURA ?></td>
                <td><?= $item->PATRIMONIO_LIQUIDO ?></td>
                </tr>
              <?php endforeach; ?>

            </tbody>

          </table>

        </div> <!-- Fim da div .table-responsive -->

      </div>

    </div>

  </div>

</body>
</html>

<script>
  //função de pesquisa 
  $(document).ready(function () {
    $('#pesquisa').on('keyup', function () {
      const searchText = $(this).val().toLowerCase();
      $('tbody tr').each(function () {
        const cellText = $(this).text().toLowerCase();
        if (cellText.indexOf(searchText) === -1) {
          $(this).hide();
        } else {
          $(this).show();
        }
      });
    });
  });
</script>
