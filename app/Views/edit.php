<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoria</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('style/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('style/responsividade.css'); ?>">

    </div>


</head>

<body>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">

        <div class="container-fluid d-flex justify-content-between">
            <!-- Logo -->
            <div class="mb-3">


                <img class="logo-invest" src="<?= base_url('img/logo.png'); ?>" alt="kkkkk">
                <a class="navbar-brand">InvestPlanner</a>

            </div>

            <!-- Menu Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Navbar Content -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link active" href="/home">Home</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="/autenticacao">Login</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="https://investplanner.org">Site</a>

                    </li>

                </ul>

            </div>

            <!-- Social Media Icons -->
            <div class="mb-3">


                <div class="d-flex">

                    <a href="https://goo.gl/maps/R4RHVQHFGCc3LwdC7" class="text-decoration-none text-dark m-1">
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

    <!-- forms Edição -->

    <form id="signUpForm" method="post" action="<?php echo base_url('autenticacao/update/' . $formulario['PK']); ?>">

        </div>

        <div class="mb-3">
             <!-- SOBRE -->
            <label>Email: </label>
            <input type="email" name="SOBRE_EMAIL" id="SOBRE_EMAIL" placeholder="email..." value="<?php echo $formulario['SOBRE_EMAIL']; ?>">

        </div>

        <div class="mb-3">

            <label>Nome: </label>
            <input type="text" name="SOBRE_NOME" id="SOBRE_NOME"
                value="<?php echo $formulario['SOBRE_NOME']; ?>">

        </div>

        <div class="mb-3">

            <label>Sobrenome: </label>
            <input type="text" name="SOBRE_NOME_SOBRENOME" id="SOBRE_NOME_SOBRENOME"
                value="<?php echo $formulario['SOBRE_NOME_SOBRENOME']; ?> ">

        </div>

        <div class="mb-3">

            <label>Profissão: </label>
            <input type="text" name="SOBRE_PROFISSAO" id="SOBRE_PROFISSAO"
                value="<?php echo $formulario['SOBRE_PROFISSAO']; ?>">

        </div>

        <div class="mb-3">

            <label>Data de nascimento:</label>
            <input type="date" name="SOBRE_DATA_NASCIMENTO" id="SOBRE_DATA_NASCIMENTO"
                value="<?php echo $formulario['SOBRE_DATA_NASCIMENTO']; ?>"
                placeholder="<?php echo date('Y-m-d'); ?>">

        </div>

        <div class="mb-3">

            <label>Profissão</label>
            <input type="text" name="SOBRE_ESTADO_CIVIL_DETALHE" id="SOBRE_ESTADO_CIVIL_DETALHE"
                value="<?php echo $formulario['SOBRE_ESTADO_CIVIL_DETALHE']?>">

        </div>

        <!-- RECEITAS -->

        <div class="mb-3">

            <label>Renda mensal líquida (já descontado o imposto de
                    renda):</label>            
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="RECEITA_RENDA_MENSAL_LIQUIDA" id="RECEITA_RENDA_MENSAL_LIQUIDA" step="0.01" 
                value="<?php echo $formulario['RECEITA_RENDA_MENSAL_LIQUIDA']; ?>">           

        </div>

        <div class="mb-3">
            
            <label>Aplicações Financeiras - Valor TOTAL </label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="RECEITA_APLICACOES_VALOR_TOTAL" id="RECEITA_APLICACOES_VALOR_TOTAL" step="0.01"
                value="<?php echo $formulario['RECEITA_APLICACOES_VALOR_TOTAL']; ?>">

        </div>

        <!--     NECESSARIO FAZER O UPLOADO DOS ARQUIVOS DE MANEIRA CORRETA       ->

        <!-- DESPESAS -->

        <div class="mb-3">
             
            <label>Conta de luz - Inserir média mensal </label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_LUZ_MEDIA_MENSAL" id="DESPESA_LUZ_MEDIA_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_LUZ_MEDIA_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Conta de água - Inserir média mensal </label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_AGUA_MEDIA_MENSAL" id="DESPESA_AGUA_MEDIA_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_AGUA_MEDIA_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Conta de gás - Inserir média mensal</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_GAS_MEDIA_MENSAL" id="DESPESA_GAS_MEDIA_MENSAL" step="0.01"
                value="<?php echo $formulario["DESPESA_GAS_MEDIA_MENSAL"]; ?>">

        </div>

        <div class="mb-3">

            <label>Valor do aluguel</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_ALUGUEL" id="DESPESA_ALUGUEL" step="0.01"
                value="<?php echo $formulario['DESPESA_ALUGUEL']; ?>">

        </div>

        <div class="mb-3">

            <label>Financiamento Residencial - Parcela</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA"
                id="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA" step="0.01"
                value="<?php echo $formulario['DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA']; ?>">

        </div>

        <div class="mb-3">

            <label>Financiamento Residencial - Saldo devedor</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR"
                id="DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR" step="0.01"
                value="<?php echo $formulario['DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR']; ?>">

        </div>

        <div class="mb-3">

            <label>Financiamento Veiculos - Parcela</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_FINANCIAMENTO_VEICULO_PARCELA" id="DESPESA_FINANCIAMENTO_VEICULO_PARCELA"
                step="0.01" value="<?php echo $formulario['DESPESA_FINANCIAMENTO_VEICULO_PARCELA']; ?>">

        </div>

        <div class="mb-3">

            <label>Financiamento veiculo - Saldo devedor</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR"
                id="DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR" step="0.01"
                value="<?php echo $formulario['DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR']; ?>">

        </div>

        <div class="mb-3">

            <label>IPTU</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_IPTU" id="DESPESA_IPTU" step="0.01"
                value="<?php echo $formulario['DESPESA_IPTU']; ?>">

        </div>

        <div class="mb-3">

            <label>IPVA - Valot total</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_IPVA" id="DESPESA_IPVA" step="DESPESA_IPVA"
                value="<?php echo $formulario['DESPESA_IPVA']; ?>">

        </div>

        <div class="mb-3">

            <label>Emprestimos parcela</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_EMPRESTIMO_PARCELA" id="DESPESA_EMPRESTIMO_PARCELA" step="0.01"
                value="<?php echo $formulario['DESPESA_EMPRESTIMO_PARCELA']; ?>">

        </div>

        <div class="mb-3">

            <label>EMPRESTIMO - Saldo devedor</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DIVIDA_EMPRESTIMO_SALDO_DEVEDOR" id="DIVIDA_EMPRESTIMO_SALDO_DEVEDOR" step="0.01"
                value="<?php echo $formulario['DIVIDA_EMPRESTIMO_SALDO_DEVEDOR']; ?>">

        </div>

        <div class="mb-3">

            <label>Valor da conta de internet + televisão</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_INTERNET_TELEVISAO" id="DESPESA_INTERNET_TELEVISAO" step="0.01"
                value="<?php echo $formulario['DESPESA_INTERNET_TELEVISAO']; ?>">

        </div>
        
        <div class="mb-3">

            <label>Conta de celular</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_CELULAR" id="DESPESA_CELULAR" step="0.01"
                value="<?php echo $formulario['DESPESA_CELULAR']; ?>">

        </div>

        <div class="mb-3">

            <label>Média dos gastos em supermercados</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_MEDIA_MERCADO" id="DESPESA_MEDIA_MERCADO" step="0.01"
                value="<?php echo $formulario['DESPESA_MEDIA_MERCADO']; ?>">

        </div>

        <div class="mb-3">

            <label>Gastos com medicamentos</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_MEDICAMENTOS" id="DESPESA_MEDICAMENTOS" step="0.01"
                value="<?php echo $formulario['DESPESA_MEDICAMENTOS']; ?>">

        </div>

        <div class="mb-3">

            <label>Plano de saúde - Parcela</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_PLANO_SAUDE_MENSAL" id="DESPESA_PLANO_SAUDE_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_PLANO_SAUDE_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Valor parcela INSS</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_INSS" id="DESPESA_INSS" step="0.01"
                value="<?php echo $formulario['DESPESA_INSS']; ?>">

        </div>

        <div class="mb-3">

            <label>Gastos com lazer</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_LAZER" id="DESPESA_LAZER" step="0.01"
                value="<?php echo $formulario['DESPESA_LAZER']; ?>">

        </div>

        <div class="mb-3">

            <label>Gasto com combustivél</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_COMBUSTIVEL" id="DESPESA_COMBUSTIVEL" step="0.01"
                value="<?php echo $formulario['DESPESA_COMBUSTIVEL']; ?>">

        </div>

        <div class="mb-3">

            <label>Gastos com cartao de crédito - Fatura</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_CARTAO_FATURA" id="DESPESA_CARTAO_FATURA" step="0.01"
                value="<?php echo $formulario['DESPESA_CARTAO_FATURA']; ?>">

        </div>

        <div class="mb-3">

            <label>Gastos com cartao de crédito - Saldo Devedor</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR" id="DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR"
                step="0.01" value="<?php echo $formulario['DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR']; ?>">

        </div>

        <div class="mb-3">

            <label>Valor do Aluguel dos veículos</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_VEICULO_ALUGADO_MENSALIDADE" id="DESPESA_VEICULO_ALUGADO_MENSALIDADE"
                step="0.01" value="<?php echo $formulario['DESPESA_VEICULO_ALUGADO_MENSALIDADE']; ?>">

        </div>

        <div class="mb-3">

            <label>Mensalidade do seguro dos veículos</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_VEICULO_SEGURO" id="DESPESA_VEICULO_SEGURO" step="0.01"
                value="<?php echo $formulario['DESPESA_VEICULO_SEGURO']; ?>">

        </div>

        <div class="mb-3">

            <label>Mensalidade do seguro de vida</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_SEGURO_VIDA_MENSAL" id="DESPESA_SEGURO_VIDA_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_SEGURO_VIDA_MENSAL']; ?>">

        </div>
        
        <div class="mb-3">

            <label>Mensalidade do Condominio</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_CONDOMINIO_MENSAL" id="DESPESA_CONDOMINIO_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_CONDOMINIO_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Contribuição Sindical</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_CONTRIBUICAO_SINDICAL" id="DESPESA_CONTRIBUICAO_SINDICAL" step="0.01"
                value="<?php echo $formulario['DESPESA_CONTRIBUICAO_SINDICAL']; ?>">

        </div>
        
        <div class="mb-3">

            <label>Mensalidade Escolar</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_ESCOLA_MENSAL" id="DESPESA_ESCOLA_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_ESCOLA_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Mensalidade Universidade</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_UNIVERSIDADE_MENSAL" id="DESPESA_UNIVERSIDADE_MENSAL" step="0.01"
                value="<?php echo $formulario['DESPESA_UNIVERSIDADE_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Mensalidade do clube</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="DESPESA_CLUBE_MENSALIDADE" id="DESPESA_CLUBE_MENSALIDADE" step="0.01"
                value="<?php echo $formulario['DESPESA_CLUBE_MENSALIDADE']; ?>">

        </div>

        <!-- BENS -->

        <div class="mb-3">

            <label>Imoveis Residenciais - Valor de mercado</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="BENS_VALOR_MERCADO_IMOVEL" id="BENS_VALOR_MERCADO_IMOVEL" step="0.01"
                value="<?php echo $formulario['BENS_VALOR_MERCADO_IMOVEL']; ?>">

        </div>

        <div class="mb-3">

            <label>Imoveis veraneio - Valor de mercado</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="BENS_VALOR_MERCADO_IMOVEL_VERAO" id="BENS_VALOR_MERCADO_IMOVEL_VERAO" step="0.01"
                value="<?php echo $formulario['BENS_VALOR_MERCADO_IMOVEL_VERAO']; ?>">

        </div>

        <div class="mb-3">

        <label>Imnoveis alugados - Valor de mercado</label>
        <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="BENS_VALOR_MERCADO_IMOVEL_ALUGADO" id="BENS_VALOR_MERCADO_IMOVEL_ALUGADO" step="0.01"
                value="<?php echo $formulario['BENS_VALOR_MERCADO_IMOVEL_ALUGADO']; ?>">

        </div>

        <div class="mb-3">

            <label>Veiculos - valor mercado</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="BENS_VALOR_MERCADO_VEICULOS" id="BENS_VALOR_MERCADO_VEICULOS" step="0.01"
                value="<?php echo $formulario['BENS_VALOR_MERCADO_VEICULOS']; ?>">

        </div>

        <div class="mb-3">

            <label>Empresas - Valor de mercado</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="BENS_VALOR_MERCADO_EMPRESAS" id="BENS_VALOR_MERCADO_EMPRESAS" step="0.01"
                value="<?php echo $formulario['BENS_VALOR_MERCADO_EMPRESAS']; ?>">

        </div>

        <div class="mb-3">
             <!-- PROTEÇÃO -->
            <label>Previdencia privada - Valor da Parcela</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL" id="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL"
                step="0.01" value="<?php echo $formulario['PROTECAO_PREVIDENCIA_PRIVADA_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Previdencia privada - Saldo Acumulado</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO"
                id="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO" step="0.01"
                value="<?php echo $formulario['PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO']; ?>">

        </div>

        <div class="mb-3">

            <label>Valor do fundo de garantia</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="PROTECAO_FUNDO_GARANTIA_VALOR" id="PROTECAO_FUNDO_GARANTIA_VALOR" step="0.01"
                value="<?php echo $formulario['PROTECAO_FUNDO_GARANTIA_VALOR']; ?>">

        </div>

        <!-- OBJETIVOS -->
        <div class="mb-3">

            <label>Renda mensal pretendida na aposentadoria:</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="OBJETIVO_RENDA_MENSAL" id="OBJETIVO_RENDA_MENSAL" step="0.01"
                value="<?php echo $formulario['OBJETIVO_RENDA_MENSAL']; ?>">

        </div>

        <div class="mb-3">

            <label>Idade pretendida para aposentadoria</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="OBJETIVO_IDADE_PRETENDIDA" id="OBJETIVO_IDADE_PRETENDIDA" step="0.01"
                value="<?php echo $formulario['OBJETIVO_IDADE_PRETENDIDA']; ?>">

        </div>

        <div class="mb-3">

            <p>Além da aposentadoria, você possui algum outro objetivo/sonho que requer uma meta de acúmulo
                        financeiro?</p>
            <label>Ano de realização:</label>
            <input type="text" class="formatCurrency" name="OBJETIVO_ANO_REALIZACAO" id="OBJETIVO_ANO_REALIZACAO"
                value="<?php echo $formulario['OBJETIVO_ANO_REALIZACAO']; ?>">

        </div>

        <div class="mb-3">

            <label>Valor requerido:</label>
            <input type="text" class="formatCurrency" oninput="formatCurrency(this)" name="OBJETIVO_VALOR" id="OBJETIVO_VALOR" step="0.01"
                value="<?php echo $formulario['OBJETIVO_VALOR']; ?>">

        </div>


        <!-- não sei como fazer isso ainda -->
        <?php foreach ($despesas as $index => $despesa): ?>

            <?php if ($despesa['CLIENTE_FORMULARIO_FK'] == $formulario['PK']): ?>

                <div class="mb-3">

                    <label><?php echo $despesa['DESCRICAO'] ?></label>

                    <input type="text" name="DESPESA[<?= $despesa['PK']; ?>]" value="<?php echo $despesa['VALOR']; ?>">

                    <input type="hidden" name="CATEGORIA[<?= $despesa['PK']; ?>]" class="categoriaInput" value="DESPESA">

                    <div class="form-check form-switch isolated-switch">

                        <input class="form-check-input switchInput" type="checkbox" style="border-radius: 20px; width: 65px; height: 10px;">

                        <label class="switchLabel" style="margin-top: 7px; margin-left: 10px; text-decoration: underline;">DESPESA</label>

                    </div>

                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <button type="submit" name="update_button" class="btn btn-warning" style="margin-top: 30px"
            value="update">Atualizar</button>


    </form>



</body>

<script>

    // switch de divida / despesas 
    const switchInputs = document.querySelectorAll('.switchInput');
    const switchLabels = document.querySelectorAll('.switchLabel');
    const categoriaInputs = document.querySelectorAll('input[name^="CATEGORIA"]');

    switchInputs.forEach((switchInput, index) => {
        const categoriaInput = categoriaInputs[index];

        switchInput.addEventListener('change', function() {
            if (this.checked) {
                switchLabels[index].textContent = 'DIVIDA';
                categoriaInput.value = 'DIVIDA';
            } else {
                switchLabels[index].textContent = 'DESPESA';
                categoriaInput.value = 'DESPESA';
            }
        });
    });



    // formatação -----------------

    document.addEventListener('DOMContentLoaded', function() {
        // Aplica a formatação a todos os campos com a classe "formatCurrency"
        document.querySelectorAll('.formatCurrency').forEach(function(input) {
            input.addEventListener('input', function() {
                formatCurrency(this);
            });
        });
        
        const updateButton = document.querySelector('button[name="update_button"]');

        updateButton.addEventListener('click', function() {
            // Remove a formatação dos campos ao clicar no botão de atualização
            document.querySelectorAll('.formatCurrency').forEach(function(input) {
                formatCurrencyForSave(input);
            });
        });
    });

        function formatCurrencyForSave(input) {
        let value = input.value.replace(/\D/g, '');
        value = (Number(value) / 100).toFixed(2);
        value = value.replace('.', ',');
        input.value = value;
    }


    document.addEventListener('DOMContentLoaded', function() {
        // Aplica a formatação a todos os campos com a classe "formatCurrency"
        document.querySelectorAll('.formatCurrency').forEach(function(input) {
            formatCurrency(input);
        });
    });

    function formatCurrency(input) {
        let value = input.value.replace(/\D/g, '');
        value = (Number(value) / 100).toFixed(2);
        
        // Inverte a ordem dos substitutos
        value = value.replace('.', ',').replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        input.value = value;
    }
</script>

