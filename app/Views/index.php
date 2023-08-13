<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoria</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        h1 {
            font-size: 10em;
            font-weight: 800;
            font-family: 'Roboto Slab', serif;
            text-align: left;
            margin: 0;
            padding-top: 20px;
            padding-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            /* Sombreamento */
        }
        .logo-invest{
            width: 40px;

        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #000000;
            opacity: 1;
            background-image:  linear-gradient(30deg, #5d5136 12%, transparent 12.5%, transparent 87%, #5d5136 87.5%, #5d5136), linear-gradient(150deg, #5d5136 12%, transparent 12.5%, transparent 87%, #5d5136 87.5%, #5d5136), 
                linear-gradient(30deg, #5d5136 12%, transparent 12.5%, transparent 87%, #5d5136 87.5%, #5d5136), linear-gradient(150deg, #5d5136 12%, transparent 12.5%, transparent 87%, #5d5136 87.5%, #5d5136),
                 linear-gradient(60deg, #5d513677 25%, transparent 25.5%, transparent 75%, #5d513677 75%, #5d513677), linear-gradient(60deg, #5d513677 25%, transparent 25.5%, transparent 75%, #5d513677 75%, #5d513677);
            background-size: 24px 42px;
            background-position: 0 0, 0 0, 12px 21px, 12px 21px, 0 0, 12px 21px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            margin-bottom: 10px;

        }

        .radio-option input {
            margin-right: 5px;
        }

        #signUpForm {
            max-width: 800px;
            background-color: #ffffff;
            margin: 40px auto;
            padding: 40px;
            box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
            border-radius: 12px;
        }

        #signUpForm .form-header {
            gap: 5px;
            text-align: center;
            font-size: .9em;
        }

        #signUpForm .form-header .stepIndicator {
            position: relative;
            flex: 1;
            padding-bottom: 30px;
        }

        #signUpForm .form-header .stepIndicator.active {
            font-weight: 600;
        }

        #signUpForm .form-header .stepIndicator.finish {
            font-weight: 600;
            color: #bfa96c;
        }

        #signUpForm .form-header .stepIndicator::before {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            z-index: 9;
            width: 20px;
            height: 20px;
            background-color: #c2b596;
            border-radius: 50%;
            border: 3px solid #c2b596;
        }

        #signUpForm .form-header .stepIndicator.active::before {
            background-color: #5d5136;
            border: 3px solid #5d5136;
        }

        #signUpForm .form-header .stepIndicator.finish::before {
            background-color: #bfa96c;
            border: 3px solid #b7e1dd;
        }

        #signUpForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f0e3bd;
        }
        .nav-item {
            margin-right: 20px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #bfa96c;
            font-weight: bold; 
            box-shadow: 0px 1px 0px 0px #bfa96c; 

        }
        .navbar-brand:hover {
            color: #bfa96c;
            font-size: 150%;
            box-shadow: 0px 1px 0px 0px #bfa96c; 
            font-weight: bold;
            
        }
        .navbar-brand {
            transition: font-size 0.3s;
            
        }
                    
        .IDADE {
            position: relative;

        }

        .IDADE::after {
            content: "anos";
            position: absolute;
            top: 0;
            transform: translateY(16%);
            right: 630px;
            height: 100%;
            display: flex;
            align-items: center;
            color: gray;
        }


        #signUpForm .form-header .stepIndicator.active::after {
            background-color: #bfa96c;
        }

        #signUpForm .form-header .stepIndicator.finish::after {
            background-color: #bfa96c;
        }

        #signUpForm .form-header .stepIndicator:last-child:after {
            display: none;
        }

        #signUpForm input {
            padding: 15px 20px;
            width: 100%;
            font-size: 1em;
            border: 1px solid #e3e3e3;
            border-radius: 5px;
        }

        #signUpForm input:focus {
            border: 1px solid #bfa96c;
            outline: 0;
        }

        #signUpForm input.invalid {
            border: 2px solid;
            color: #fd4444;
        }

        #signUpForm .step {
            display: none;
        }

        #signUpForm .form-footer {
            overflow: auto;
            gap: 20px;
        }

        #signUpForm .form-footer button {
            background-color: #bfa96c;
            border: 1px solid #bfa96c !important;
            color: #ffffff;
            border: none;
            padding: 13px 30px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            flex: 1;
            margin-top: 5px;
        }

        #signUpForm .form-footer button:hover {
            opacity: 0.8;
        }

        #signUpForm .form-footer #prevBtn {
            background-color: #fff;
            color: #bfa96c;
        }

        .invalid {
            border: 2px solid;
            color: #fd4444;
        }

        /* Telas 768px */

        @media (max-width: 768px) {
            h1 {
                font-size: 6em;
                padding-top: 10px;
                padding-bottom: 5px;
            }

            #signUpForm {
                padding: 20px;
                margin: 20px auto;
            }

            #signUpForm input {
                padding: 10px 15px;
                font-size: 0.8em;
            }

            .radio-option input {
                margin-right: 3px;
            }

            #signUpForm .form-footer button {
                padding: 10px 20px;
            }
        }

        /* Telas 280px */
        @media (max-width:280px) {
            .stepIndicator {
                white-space: normal;
                text-align: center;
                width: 100%;
                margin-bottom: 5px;
                font-size: 0.7em;
            }

        }

        /* Telas 320 :.: */
        @media (max-width: 424px) {
            .stepIndicator {
                white-space: normal;
                text-align: center;
                width: 100%;
                /* ocupar toda a largura ! */
                margin-bottom: 5px;
                /* espaço */
                font-size: 0.8em;
            }
            .navbar .navbar-toggler {
                margin-left: 35px;

            }
        
            .IDADE{
                position: relative;
            }

            .IDADE::after {
            content: "anos";
            position: absolute;
            top: 0;
            transform: translateY(16%);
            right: 300px;
            height: 100%;
            display: flex;
            align-items: center;
            color: gray;
            }



        }
        @media (max-width: 376px) {
            .stepIndicator {
                white-space: normal;
                text-align: center;
                width: 100%;
                /* ocupar toda a largura ! */
                margin-bottom: 10px;
                /* espaço */
                font-size: 0.8em;
            }
            .navbar .navbar-toggler {
                margin-right: 70px;

            }
        
            .IDADE{
                position: relative;
            }

            .IDADE::after {
            content: "anos";
            position: absolute;
            top: 0;
            transform: translateY(16%);
            right: 60px;
            height: 100%;
            display: flex;
            align-items: center;
            color: gray;
            }



        }

        @media (max-width: 399px) {
            .navbar-brand{
                display: flex;
                margin: 0;
                font-size: 1.0em;
            }
            .stepIndicator {
                white-space: normal;
                text-align: center;
                width: 100%;
                /* ocupar toda a largura ! */
                margin-bottom: 5px;
                /* espaço */
                font-size: 0.8em;
            }
            .navbar .navbar-toggler {
                margin-right: auto;

            }
        
            .IDADE{
                position: relative;
            }

            .IDADE::after {
            content: "anos";
            position: absolute;
            top: 0;
            transform: translateY(18%);
            right: 275px;
            height: 100%;
            display: flex;
            align-items: center;
            color: gray;
            }



        }


        /* Telas 480px */
        @media (max-width: 480px) and (min-width:425px) {

            .stepIndicator {
                white-space: normal;
                text-align: center;
                width: 100%;
                /* ocupar toda a largura ! */
                margin-bottom: 5px;
                /* espaço */
                font-size: 0.8em;
            }

            .navbar .navbar-toggler {
                margin-left: 35px;

            }

            .IDADE{
                position: relative;
            }

            .IDADE::after {
            content: "anos";
            position: absolute;
            top: 0;
            transform: translateY(16%);
            right: 313px;
            height: 100%;
            display: flex;
            align-items: center;
            color: gray;
        }



        }


        @media (min-width:750px) and (max-width:1000px) {
            .navbar .navbar-toggler {
                margin-left: 450px;

            }


        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
        
        <div class="container-fluid d-flex justify-content-between">
            <!-- Logo -->
            <div>
                
                <img class="logo-invest" src="<?= base_url('img/logo.png'); ?>" alt="kkkkk">
                <a class="navbar-brand" href="/home">InvestPlanner</a>
            
            </div>

            <!-- Menu Items -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    
                    <ul class="navbar-nav mx-auto">
                        
                        <li class="nav-item">
                            
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        
                        </li>
                        
                        <li class="nav-item">
                            
                            <a class="nav-link" href="#">Serviços</a>
                        
                        </li>
                        
                        <li class="nav-item">
                            
                            <a class="nav-link" href="#">Blog</a>
                        
                        </li>
                    
                    </ul>
                
                </div>
                        
            </nav>

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
    
    <div class="card">
        
        <div class="card-body mt-5">
            
            <h1 class="text-center fs-4">Mentoria Viver de Renda</h1>
            <h1 class="text-center fs-4">Tenha um processo estruturado de crescimento financeiro e patrimonial feito sob
                medida para você saber exatamente o que fazer, como fazer e qual resultado esperar.</h1>
        
        </div>
    
    </div>
    
    <form id="signUpForm" method="POST" action="<?= base_url('home/salvar') ?>">

        <!-- start step indicators -->
        <div class="form-header d-flex mb-4">
            
            <span class="stepIndicator">Sobre</span>
            <span class="stepIndicator">Receitas</span>
            <span class="stepIndicator">Despesas</span>
            <span class="stepIndicator">Bens</span>
            <span class="stepIndicator">Proteções</span>
            <span class="stepIndicator">Objetivos</span>
        
        </div>
        <!-- end step indicators -->

        <!-- step one -->
        <div class="step">

            <p class="text-center mb-4">Cadastro!</p>

            <div class="mb-3">
                
                <label for="SOBRE_EMAIL">E-mail:</label>
                
                <input type="email" placeholder="Inserir seu E-mail" oninput="''" name="SOBRE_EMAIL"
                    id="SOBRE_EMAIL" class="required">
            
        </div>

            <div class="mb-3">
                
                <label for="SOBRE_NOME_COMPLETO">Nome Completo:</label>
                
                <input class="required" type="text" oninput="removeNumbers(this)" name="SOBRE_NOME_COMPLETO"
                    id="SOBRE_NOME_COMPLETO">
            
            </div>

            <div class="mb-3">
                
                <label for="SOBRE_DATA_NASCIMENTO">Data de nascimento:</label>
                
                <input class="required" type="date" placeholder="" oninput="this.className = ''"
                    name="SOBRE_DATA_NASCIMENTO" id="SOBRE_DATA_NASCIMENTO">
            
            </div>

            <div class="mb-3">
                
                <label for="SOBRE_PROFISSAO">Profissão:</label>
                
                <input class="required" type="text" placeholder="Sua Profissão" oninput="removeNumbers(this)"
                    name="SOBRE_PROFISSAO" id="SOBRE_PROFISSAO">
            
            </div>

            <div class="mb-3">
                
                <label for="SOBRE_PROFISSAO_TIPO">Como exerce a sua profissão?</label>
                
                <select id="SOBRE_PROFISSAO_TIPO" name="SOBRE_PROFISSAO_TIPO" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="Assalariado (carteira assinada)">Assalariado (carteira assinada)</option>
                    <option value="Assalariado (como PJ)">Assalariado (como PJ)</option>
                    <option value="Profissional Liberal (autônomo)">Profissional Liberal (autônomo)</option>
                    <option value="Empresario">Empresário</option>
                </select>
            
            </div>

            <div class="mb-3">
                
                <label for="SOBRE_ESTADO_CIVIL">Estado Civil:</label>
                
                <select id="SOBRE_ESTADO_CIVIL-DIV" name="SOBRE_ESTADO_CIVIL" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Viúvo">Viúvo(a)</option>
                    <option value="Uniao Estável">União Estável</option>
                </select>
            
            </div>

            <div class="mb-3" id="SOBRE_ESTADO_CIVIL_DETALHE-DIV">
                
                <label for="SOBRE_ESTADO_CIVIL_DETALHE">Qual o regime?</label>
                
                <select id="SOBRE_ESTADO_CIVIL_DETALHE" name="SOBRE_ESTADO_CIVIL_DETALHE" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Comunhão de bens">Comunhão de bens</option>
                    <option value="Separação total de bens">Separação total de bens</option>
                    <option value="Participação final nos aquestos">Participação final nos aquestos</option>
                </select>
            
            </div>

        </div>

        <!-- step two -->

        <div class="step">
            <p class="text-center mb-4">Receitas</p>

            <div class="mb-3">

                <label for="RECEITA_RENDA_MENSAL_LIQUIDA">Renda mensal líquida (já descontado o imposto de
                    renda):</label>
                
                <input type="text" name="RECEITA_RENDA_MENSAL_LIQUIDA" id="RECEITA_RENDA_MENSAL_LIQUIDA"
                    class="currency-input required" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00" />
                
                <!-- hidden input -->
                <input type="hidden" name="RECEITA_RENDA_MENSAL_LIQUIDA_HIDDEN" 
                    id="RECEITA_RENDA_MENSAL_LIQUIDA_HIDDEN" />

            </div>

            <div class="mb-3">

                <label for="RECEITA_APLICACAO_OPCAO">Possui alguma aplicação ?</label>
                
                <select id="RECEITA_APLICACAO_OPCAO-DIV" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>
                </select>
            
            </div>

            <div class="mb-3" id="RECEITA_APLICACOES_VALOR_TOTAL-DIV">
                
                <label for="RECEITA_APLICACOES_VALOR_TOTAL">Aplicações Financeiras - Valor TOTAL</label>
                
                <input type="text" name="RECEITA_APLICACOES_VALOR_TOTAL" id="RECEITA_APLICACOES_VALOR_TOTAL"
                    class="currency-input" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00" />
            
                <!-- hidden input -->
                <input type="hidden" name="RECEITA_APLICACOES_VALOR_TOTAL_HIDDEN" 
                    id="RECEITA_APLICACOES_VALOR_TOTAL_HIDDEN" />

            </div>

            <div class="mb-3" id="RECEITA_APLICACOES_ARQUIVO-DIV">

                <label for="RECEITA_APLICACOES_ARQUIVO">Aplicações Financeiras - Anexar extrato das
                    aplicações</label><br>
                
                    <input type="file" id="RECEITA_APLICACOES_ARQUIVO" name="RECEITA_APLICACOES_ARQUIVO" />
                
                    <!-- anexo arruma depois -->
            
                </div>

        </div>

        <!-- step three -->

        <div class="step">
            <p class="text-center mb-4">Despesas</p>

            <div class="mb-3">
                
                <label for="DESPESA_LUZ_MEDIA_MENSAL">Conta de luz - Inserir média mensal</label>
                
                <input type="text" class="required" id="DESPESA_LUZ_MEDIA_MENSAL" name="DESPESA_LUZ_MEDIA_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
                
                <!-- hidden input -->
                <input type="hidden" name="DESPESA_LUZ_MEDIA_MENSAL_HIDDEN" 
                    id="DESPESA_LUZ_MEDIA_MENSAL_HIDDEN">
           
            </div>

            <div class="mb-3">

                <label for="DESPESA_AGUA_MEDIA_MENSAL">Conta de água - Inserir média mensal</label>
                
                <input type="text" class="required" id="DESPESA_AGUA_MEDIA_MENSAL" name="DESPESA_AGUA_MEDIA_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
                
                <!-- hidden input -->
                <input type="hidden" name="DESPESA_AGUA_MEDIA_MENSAL_HIDDEN" 
                    id="DESPESA_AGUA_MEDIA_MENSAL_HIDDEN">
            
                </div>

            <div class="mb-3">
                
                <label for="DESPESA_GAS_MEDIA_MENSAL">Conta de gás - Inserir média mensal</label>
                
                <input type="text" class="required" id="DESPESA_GAS_MEDIA_MENSAL" name="DESPESA_GAS_MEDIA_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
                
                <!-- hidden input -->
                <input type="hidden" name="DESPESA_GAS_MEDIA_MENSAL_HIDDEN" 
                    id="DESPESA_GAS_MEDIA_MENSAL_HIDDEN">
            
            </div>

            <!--- Linkados ALUGUEL--->
            <div class="mb-3">

                <label for="DESPESA_ALUGUEL_OPCAO">Possui contrato de aluguel?</label>
                
                <select name="DESPESA_ALUGUEL_OPCAO" id="DESPESA_ALUGUEL_OPCAO-DIV" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>

                </select>

            </div>

            <div class="mb-3" id="DESPESA_ALUGUEL-DIV">
                
                <label for="DESPESA_ALUGUEL">Aluguel</label>
                
                <input type="text" id="DESPESA_ALUGUEL" name="DESPESA_ALUGUEL" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00" required>
                
                    <!-- hidden input -->
                <input type="hidden" name="DESPESA_ALUGUEL_HIDDEN" 
                    id="DESPESA_ALUGUEL_HIDDEN">
            
            </div>

            <!---------------------------------------->

            <!----------- FINANCIAMENTO -------------->

            <div class="mb-3">
                
                <label for="DESPESA_FINANCIAMENTO_TIPO">Possui algum financiamento ?</label>
                
                <select name="DESPESA_FINANCIAMENTO_TIPO" id="DESPESA_FINANCIAMENTO_TIPO-DIV" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="CASA">Casa ou apto</option>
                    <option value="CARRO">Veículo</option>
                    <option value="AMBOS">Ambos</option>
                </select>
            
            </div>

            <div class="mb-3" id="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA-DIV">
                
                <label for="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA">Financiamento Residencial - Parcela</label>
                
                <input type="text" id="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA"
                    name="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
                
                <!-- hidden input -->
                <input type="hidden" name="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA_HIDDEN" 
                    id="DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA_HIDDEN">
            
                </div>
            <!-- DIVIDA -->
            <div class="mb-3" id="DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR-DIV">
                
                <label for="DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR">Financiamento Residencial - Saldo
                    devedor</label>
                
                <input type="text" id="DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR"
                    name="DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
             
                    <!-- hidden input -->
                <input type="hidden" name="DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR_HIDDEN" 
                    id="DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR_HIDDEN">
            
                </div>

            <div class="mb-3" id="DESPESA_FINANCIAMENTO_VEICULO_PARCELA-DIV">
                
                <label for="DESPESA_FINANCIAMENTO_VEICULO_PARCELA">Financiamento Veiculos - Parcela</label>
                
                <input type="text" id="DESPESA_FINANCIAMENTO_VEICULO_PARCELA"
                    name="DESPESA_FINANCIAMENTO_VEICULO_PARCELA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
                
                <!-- hidden input -->
                <input type="hidden" name="DESPESA_FINANCIAMENTO_VEICULO_PARCELA_HIDDEN" 
                    id="DESPESA_FINANCIAMENTO_VEICULO_PARCELA_HIDDEN">

            </div>
            <!-- DIVIDA -->
            <div class="mb-3" id="DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR-DIV">
                <label for="DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR">Financiamento veiculo - Saldo
                    devedor</label>
                
                <input type="text" id="DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR"
                    name="DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
                
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR_HIDDEN" 
                    id="DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR_HIDDEN">                
            
            </div>

            <!------------------------------------->

            <div class="mb-3">
                
                <label for="DESPESA_IPTU">IPTU</label>
                
                <input type="text" id="DESPESA_IPTU" name="DESPESA_IPTU" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">

                <!-- input hidden -->
                <input type="hidden" name="DESPESA_IPTU_HIDDEN" 
                    id="DESPESA_IPTU_HIDDEN">
            
            </div>

            <div class="mb-3">
                
                <label for="DESPESA_IPVA">IPVA - Valot total</label>
                
                <input type="text" id="DESPESA_IPVA" name="DESPESA_IPVA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_IPVA_HIDDEN" 
                    id="DESPESA_IPVA_HIDDEN">

            </div>

            <!--- Linkados EMPRESTIMO--->
            <div class="mb-3">

                
                <label for="DESPESA_EMPRESTIMO_OPCAO">Possui contrato de Emprestimo ?</label>
                
                <select name="DESPESA_EMPRESTIMO_OPCAO" id="DESPESA_EMPRESTIMO_OPCAO-DIV" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="DESPESA_EMPRESTIMO_PARCELA-DIV">
                
                <label for="DESPESA_EMPRESTIMO_PARCELA">Emprestimos parcela</label>
                
                <input type="text" id="DESPESA_EMPRESTIMO_PARCELA" name="DESPESA_EMPRESTIMO_PARCELA"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_EMPRESTIMO_PARCELA_HIDDEN" 
                    id="DESPESA_EMPRESTIMO_PARCELA_HIDDEN">

            </div>
            <!-- DIVIDA -->
            <div class="mb-3" id="DESPESA_EMPRESTIMO_SALDO_DEVEDOR-DIV">
                <label for="DESPESA_EMPRESTIMO_SALDO_DEVEDOR">EMPRESTIMO - Saldo devedor</label>
                
                <input type="text" id="DESPESA_EMPRESTIMO_SALDO_DEVEDOR" name="DESPESA_EMPRESTIMO_SALDO_DEVEDOR"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
                
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_EMPRESTIMO_SALDO_DEVEDOR_HIDDEN" 
                    id="DESPESA_EMPRESTIMO_SALDO_DEVEDOR_HIDDEN">
            
            </div>

            <!-------------------------------->

            <div class="mb-3">
                
                <label for="DESPESA_INTERNET_TELEVISAO">Valor da conta de internet + televisão</label>
                
                <input type="text" id="DESPESA_INTERNET_TELEVISAO" name="DESPESA_INTERNET_TELEVISAO"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00" class="required">
                
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_INTERNET_TELEVISAO_HIDDEN" 
                    id="DESPESA_INTERNET_TELEVISAO_HIDDEN">

            </div>

            <div class="mb-3">

                <label for="DESPESA_CELULAR">Conta de celular</label>
                
                <input type="text" id="DESPESA_CELULAR" name="DESPESA_CELULAR" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            
               <!-- input hidden -->
                <input type="hidden" name="DESPESA_CELULAR_HIDDEN" 
                    id="DESPESA_CELULAR_HIDDEN">
            
            </div>

            <div class="mb-3">
                
                <label for="DESPESA_MEDIA_MERCADO">Média dos gastos em supermercados</label>
                
                <input type="text" id="DESPESA_MEDIA_MERCADO" name="DESPESA_MEDIA_MERCADO"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00" class="required">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_MEDIA_MERCADO_HIDDEN" 
                    id="DESPESA_MEDIA_MERCADO_HIDDEN">
            
                </div>

            <div class="mb-3">
                
                <label for="DESPESA_MEDICAMENTOS">Gastos com medicamentos</label>
                
                <input type="text" id="DESPESA_MEDICAMENTOS" name="DESPESA_MEDICAMENTOS"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_MEDICAMENTOS_HIDDEN" 
                    id="DESPESA_MEDICAMENTOS_HIDDEN">

            </div>

            <!---------------- PLANO DE SAUDE -------------------------->
            <div class="mb-3">

                <label for="DESPESA_PLANO_OPCAO">Possui plano de saude ?</label>
                
                <select name="DESPESA_PLANO_OPCAO" id="DESPESA_PLANO_OPCAO-DIV" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="DESPESA_PLANO_SAUDE_MENSAL-DIV">
                
                <label for="DESPESA_PLANO_SAUDE_MENSAL">Plano de saúde - Parcela</label>
                
                <input type="text" id="DESPESA_PLANO_SAUDE_MENSAL" name="DESPESA_PLANO_SAUDE_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->   
                <input type="hidden" name="DESPESA_PLANO_SAUDE_MENSAL_HIDDEN" 
                    id="DESPESA_PLANO_SAUDE_MENSAL_HIDDEN">

            </div>

            <!----------------------------------------------------------->

            <div class="mb-3">

                <label for="DESPESA_INSS">Valor parcela INSS</label>
                
                <input type="text" name=DESPESA_INSS id="DESPESA_INSS" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_INSS_HIDDEN" 
                    id="DESPESA_INSS_HIDDEN">
            
            </div>

            <div class="mb-3">
                
                <label for="DESPESA_LAZER">Gastos com lazer</label>
                
                <input type="text" id="DESPESA_LAZER" name="DESPESA_LAZER" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00" class="required">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_LAZER_HIDDEN" 
                    id="DESPESA_LAZER_HIDDEN">
                
            </div>

            <div class="mb-3">
                
                <label for="DESPESA_COMBUSTIVEL">Gasto com combustivél</label>
                
                <input type="text" id="DESPESA_COMBUSTIVEL" name="DESPESA_COMBUSTIVEL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
               <!-- input hidden -->
               <input type="hidden" name="DESPESA_COMBUSTIVEL_HIDDEN" 
                    id="DESPESA_COMBUSTIVEL_HIDDEN">            
            
            </div>

            <div class="mb-3">
                
                <label for="DESPESA_CARTAO_FATURA">Gastos com cartao de crédito - Fatura</label>
                
                <input type="text" id="DESPESA_CARTAO_FATURA" name="DESPESA_CARTAO_FATURA"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">

                <!-- input hidden -->
                <input type="hidden" name="DESPESA_CARTAO_FATURA_HIDDEN" 
                    id="DESPESA_CARTAO_FATURA_HIDDEN">
            
            </div>


            <!--------------------ALUGUEL DOS VEICULOS------------------------->
            <div class="mb-3">

                <label for="DESPESA_ALUGUEL_CARROS">Usa veículos alugados ?</label>
                
                <select name="DESPESA_ALUGUEL_CARROS" id="DESPESA_ALUGUEL_CARROS-DIV" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="DESPESA_VEICULO_ALUGADO_MENSALIDADE-DIV">
                
                <label for="DESPESA_VEICULO_ALUGADO_MENSALIDADE">Valor do Aluguel dos veículos</label>
                
                <input type="text" id="DESPESA_VEICULO_ALUGADO_MENSALIDADE" name="DESPESA_VEICULO_ALUGADO_MENSALIDADE"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_VEICULO_ALUGADO_MENSALIDADE_HIDDEN" 
                    id="DESPESA_VEICULO_ALUGADO_MENSALIDADE_HIDDEN">
            
            </div>

            <!---------------------------------------------------------------------->

            <div class="mb-3">
                
                <label for="DESPESA_VEICULO_ALUGADO">Mensalidade do seguro dos veículos</label>
                
                <input type="text" id="DESPESA_VEICULO_ALUGADO" name="DESPESA_VEICULO_ALUGADO"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">

                <!-- input hidden -->
                <input type="hidden" name="DESPESA_VEICULO_ALUGADO_HIDDEN" 
                    id="DESPESA_VEICULO_ALUGADO_HIDDEN">
            
            </div>

            <div class="mb-3">

                
            <label for="DESPESA_SEGURO_VIDA_OPCAO">Tem seguro de vida ?</label>
                
            <select name="DESPESA_SEGURO_VIDA_OPCAO" id="DESPESA_SEGURO_VIDA_OPCAO-DIV" class="form-control required">
                <option value="Não">Não</option>
                <option value="SIM">Sim</option>
            </select>

            </div>

            
            <div class="mb-3" id="DESPESA_SEGURO_VIDA_MENSAL-DIV">
                
                <label for="DESPESA_SEGURO_VIDA_MENSAL">Mensalidade do seguro de vida</label>
                
                <input type="text" id="DESPESA_SEGURO_VIDA_MENSAL" name="DESPESA_SEGURO_VIDA_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">

                <!-- input hidden -->
                <input type="hidden" name="DESPESA_SEGURO_VIDA_MENSAL_HIDDEN" 
                    id="DESPESA_SEGURO_VIDA_MENSAL_HIDDEN">

            </div>


            <!--------------------------------CONDOMINIO-------------------------------------->

            <div class="mb-3">

                <label for="DESPESA_CONDOMINIO_OPCAO">Mora em Condominio ?</label>
                
                <select name="DESPESA_CONDOMINIO_OPCAO" id="DESPESA_CONDOMINIO_OPCAO-DIV" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="DESPESA_CONDOMINIO_MENSAL-DIV">
                
                <label for="DESPESA_CONDOMINIO_MENSAL">Mensalidade do Condominio</label>
                
                <input type="text" id="DESPESA_CONDOMINIO_MENSAL" name="DESPESA_CONDOMINIO_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_CONDOMINIO_MENSAL_HIDDEN" 
                    id="DESPESA_CONDOMINIO_MENSAL_HIDDEN">
            
            </div>

            <!---------------------------------------------------------------------->

            <div class="mb-3">
                
                <label for="DESPESA_CONTRIBUICAO_SINDICAL">Contribuição Sindical</label>
                
                <input type="text" id="DESPESA_CONTRIBUICAO_SINDICAL" name="DESPESA_CONTRIBUICAO_SINDICAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_CONTRIBUICAO_SINDICAL_HIDDEN" 
                    id="DESPESA_CONTRIBUICAO_SINDICAL_HIDDEN">
            
            </div>

            <div class="mb-3" id="DESPESA_ESCOLA_MENSAL-DIV">
                
                <label for="DESPESA_ESCOLA_MENSAL">Mensalidade Escolar</label>
                
                <input type="text" id="DESPESA_ESCOLA_MENSAL" name="DESPESA_ESCOLA_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_ESCOLA_MENSAL_HIDDEN" 
                    id="DESPESA_ESCOLA_MENSAL_HIDDEN">
            
            </div>

            <div class="mb-3" id="DESPESA_UNIVERSIDADE_MENSAL-DIV">
                
                <label for="DESPESA_UNIVERSIDADE_MENSAL">Mensalidade Universidade</label>
                
                <input type="text" id="DESPESA_UNIVERSIDADE_MENSAL" name="DESPESA_UNIVERSIDADE_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="DESPESA_UNIVERSIDADE_MENSAL_HIDDEN" 
                    id="DESPESA_UNIVERSIDADE_MENSAL_HIDDEN">            
            
            </div>

            <!--------------------------------Clube-------------------------------------->

            <div class="mb-3">

                <label for="DESPESA_CLUBE_OPCAO">Freequenta algum clube?</label>
                
                <select name="DESPESA_CLUBE_OPCAO" id="DESPESA_CLUBE_OPCAO-DIV" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="DESPESA_CLUBE_MENSALIDADE-DIV">
                
                <label for="DESPESA_CLUBE_MENSALIDADE">Mensalidade do Clube</label>
                
                <input type="text" id="DESPESA_CLUBE_MENSALIDADE" name="DESPESA_CLUBE_MENSALIDADE"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">

                <!-- input hidden -->
                <input type="hidden" name="DESPESA_CLUBE_MENSALIDADE_HIDDEN" 
                    id="DESPESA_CLUBE_MENSALIDADE_HIDDEN">
            
            </div>

            <!---------------------------------------------------------------------->


            <p class="mb-4">Gastos Personalizados</p>
            
            <div class="mb-3">
                
                <button id="addExpense" class="btn btn-light">Adicionar Gasto Personalizado</button>
            
            </div>
            
            <div id="customExpenses">
                
                <!-- Aqui é onde os campos de gastos personalizados serão adicionados dinamicamente -->
            
            </div>

        </div>




        <!-- BENS -->
        <div class="step">
            
            <p class="text-center mb-4">Bens</p>

            <div class="mb-3">
                
                <label for="BENS_VALOR_MERCADO_IMOVEL">Imoveis residenciais - Valor de Mercado</label>
                
                <input type="text" id="BENS_VALOR_MERCADO_IMOVEL" name="BENS_VALOR_MERCADO_IMOVEL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
               <!-- input hidden -->
               <input type="hidden" name="BENS_VALOR_MERCADO_IMOVEL_HIDDEN" 
                    id="BENS_VALOR_MERCADO_IMOVEL_HIDDEN">            
            
            </div>

            <div class="mb-3">

                <label for="BENS_IMOVEIS_ALUGADOS_VERANEIO">Possui casa de veraneio ou alugadas ?</label>
                
                <select name="BENS_IMOVEIS_ALUGADOS_VERANEIO" id="BENS_IMOVEIS_ALUGADOS_VERANEIO-DIV" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="VERA">Veraneio</option>
                    <option value="ALU">Alugadas</option>
                    <option value="SIM">AMBAS</option>
                </select>

            </div>

            <div class="mb-3" id="BENS_VALOR_MERCADO_IMOVEL_VERAO-DIV">
                
                <label for="BENS_VALOR_MERCADO_IMOVEL_VERAO">Imovéis de veraneio - Valor de mercado</label>
                
                <input type="text" id="BENS_VALOR_MERCADO_IMOVEL_VERAO" name="BENS_VALOR_MERCADO_IMOVEL_VERAO"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
           
                <!-- input hidden -->
                <input type="hidden" name="BENS_VALOR_MERCADO_IMOVEL_VERAO_HIDDEN" 
                    id="BENS_VALOR_MERCADO_IMOVEL_VERAO_HIDDEN">
           
             </div>

            <div class="mb-3" id="BENS_VALOR_MERCADO_IMOVEL_ALUGADO-DIV">
                
                <label for="BENS_VALOR_MERCADO_IMOVEL_ALUGADO">Imovéis alugados - Valor de mercado</label>
                
                <input type="text" id="BENS_VALOR_MERCADO_IMOVEL_ALUGADO" name="BENS_VALOR_MERCADO_IMOVEL_ALUGADO"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="BENS_VALOR_MERCADO_IMOVEL_ALUGADO_HIDDEN" 
                    id="BENS_VALOR_MERCADO_IMOVEL_ALUGADO_HIDDEN">
            
            </div>


            <div class="mb-3">
                
                <label for="BENS_VALOR_MERCADO_VEICULOS">Veiculos - Valor de mercado</label>
                
                <input type="text" id="BENS_VALOR_MERCADO_VEICULOS" name="BENS_VALOR_MERCADO_VEICULOS"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
               <!-- input hidden -->
                <input type="hidden" name="BENS_VALOR_MERCADO_VEICULOS_HIDDEN" 
                    id="BENS_VALOR_MERCADO_VEICULOS_HIDDEN">
                   
            </div>


            <div class="mb-3">
                
                <label for="BENS_VALOR_MERCADO_EMPRESAS">Empresas - Valor de mercado</label>
                
                <input type="text" id="BENS_VALOR_MERCADO_EMPRESAS" name="BENS_VALOR_MERCADO_EMPRESAS" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="BENS_VALOR_MERCADO_EMPRESAS_HIDDEN" 
                    id="BENS_VALOR_MERCADO_EMPRESAS_HIDDEN">
            
            </div>

        </div>



        </div>

        <!-- PROTEÇÃO -->
        <div class="step">

            <p class="text-center mb-4">Proteção</p>

            <div class="mb-3" id="PROTECAO_APOLICE_SEGURO_ARQUIVO-DIV">
                
                <label for="PROTECAO_APOLICE_SEGURO_ARQUIVO">Anexar apólice de seguro</label><br>
                
                <input type="file" id="PROTECAO_APOLICE_SEGURO_ARQUIVO" name="PROTECAO_APOLICE_SEGURO_ARQUIVO">
            
            </div>

            <div class="mb-3">
                
                <label for="PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO">Anexar extrato planos da previdência</label><br>
                
                <input type="file" id="PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO"
                    name="PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO">
            
            </div>

            <div class="mb-3">
                
                <label for="PROTECAO_PREVIDENCIA_PRIVADA_OPCAO">Possui previdência privada ?</label>
                
                <select name="PROTECAO_PREVIDENCIA_PRIVADA_OPCAO" id="PROTECAO_PREVIDENCIA_PRIVADA_OPCAO-DIV"
                    class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>
                </select>
            
            </div>

            <div class="mb-3" id="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL-DIV">
                
                <label for="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL">Previdencia privada - Valor da Parcela</label>
                
                <input type="text" id="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL" name="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL"
                    oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL_HIDDEN" 
                    id="PROTECAO_PREVIDENCIA_PRIVADA_MENSAL_HIDDEN">
            
            </div>

            <div class="mb-3" id="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO-DIV">
                
                <label for="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO">Montante acumulado</label>
                
                <input type="text" id="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO"
                    name="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO_HIDDEN" 
                    id="PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO_HIDDEN">
            
            </div>

            <div class="mb-3">
                
                <label for="PROTECAO_FUNDO_GARANTIA_VALOR">Valor do fundo de garantia</label>
                
                <input type="text" name="PROTECAO_FUNDO_GARANTIA_VALOR" id="PROTECAO_FUNDO_GARANTIA_VALOR"
                    oninput="handleCurrencyInput(this)" placeholder="0,00">
            
                <!-- input hidden -->
                <input type="hidden" name="PROTECAO_FUNDO_GARANTIA_VALOR_HIDDEN" 
                    id="PROTECAO_FUNDO_GARANTIA_VALOR_HIDDEN">
        
            </div>


        </div>


        <!---- OBJETIVOS ---->
        <div class="step">
            
            <p class="text-center mb-4"> Objetivos</p>
            
            <div class="mb-3">
                
                <label for="OBJETIVO_RENDA_MENSAL">Renda mensal pretendida na aposentadoria:</label>
                
                <input type="text" placeholder="R$ 0,00" oninput="handleCurrencyInput(this)"
                    name="OBJETIVO_RENDA_MENSAL" id="OBJETIVO_RENDA_MENSAL">
            
                <!-- input hidden -->
                <input type="hidden" name="OJETIVO_RENDA_MENSAL_HIDDEN" 
                    id="OBJETIVO_RENDA_MENSAL_HIDDEN">

            </div>

            <div class="mb-3 IDADE">
                
                <label for="OBJETIVO_IDADE_PRETENDIDA">Idade pretendida para aposentadoria:</label>
                
                <input type="number" oninput="this.className = maxIdade(this)" name="OBJETIVO_IDADE_PRETENDIDA"
                    id="OBJETIVO_IDADE_PRETENDIDA" maxlength="2">
            
            
            
            </div>

            <br>
            <div class="mb-3">
                
                <p>Além da aposentadoria, você possui algum outro objetivo/sonho que requer uma meta de acúmulo
                    financeiro? Se sim, informar o horizonte de tempo e o valor requerido para essas realizações.</p>
                
                <label for="OBJETIVO_ANO_REALIZACAO">Quanto tempo?</label>
                <input type="date" oninput="this.className = ''" name="OBJETIVO_ANO_REALIZACAO"
                    id="OBJETIVO_ANO_REALIZACAO">
            
                <label for="OBJETIVO_VALOR">Valor requerido?</label>
                <input type="text" placeholder="R$ 0,00" oninput="handleCurrencyInput(this)" name="OBJETIVO_VALOR"
                    id="OBJETIVO_VALOR">

                <!-- input hidden -->
                <input type="hidden" name="OBJETIVO_VALOR_HIDDEN" 
                    id="OBJETIVO_VALOR_HIDDEN">

            </div>


        </div>


        <!-- start previous / next buttons -->
        <div class="form-footer d-flex">
            
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        
        </div>
        <!-- end previous / next buttons -->

        <!-- INPUTS CONTADORES -->
        <input type="hidden" id="DESPESA_PERSONALIZADA_QUANTIDADE_LINHAS"
            name="DESPESA_PERSONALIZADA_QUANTIDADE_LINHAS">
    </form>
</body>

</html>



<script>

function inputHidden(inText) {
    const inHidden2 = inText + "_HIDDEN";
        
        // console.log(inHidden2);
        
        document.querySelector(`#${inText}`).addEventListener('change', (event) => {
            const formattedValue = event.target.value; 
            
            
            const cleanedValue = formattedValue.replace(/[^\d,]/g, '');
            
            
            const valueWithDot = cleanedValue.replace(',', '.');
            
            const numericValue = parseFloat(valueWithDot); 
            
            // document.querySelector(`#${inHidden2}`).value = numericValue;
            // console.log(numericValue);
            
            // const hiddenElement = document.querySelector(`#${inHidden2}`);
            // console.log(typeof hiddenElement.value);
        });
    }

    //INPUT HIDDEN
    inputHidden("RECEITA_RENDA_MENSAL_LIQUIDA");
    inputHidden("RECEITA_APLICACOES_VALOR_TOTAL");
    inputHidden("DESPESA_LUZ_MEDIA_MENSAL");
    inputHidden("DESPESA_AGUA_MEDIA_MENSAL");
    inputHidden("DESPESA_GAS_MEDIA_MENSAL");
    inputHidden("DESPESA_ALUGUEL");
    inputHidden("DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA");
    inputHidden("DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR");
    inputHidden("DESPESA_FINANCIAMENTO_VEICULO_PARCELA");
    inputHidden("DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR");
    inputHidden("DESPESA_IPTU");
    inputHidden("DESPESA_IPVA");
    inputHidden("DESPESA_EMPRESTIMO_PARCELA");
    inputHidden("DESPESA_EMPRESTIMO_SALDO_DEVEDOR");
    inputHidden("DESPESA_INTERNET_TELEVISAO");
    inputHidden("DESPESA_CELULAR");
    inputHidden("DESPESA_MEDIA_MERCADO");
    inputHidden("DESPESA_MEDICAMENTOS");
    inputHidden("DESPESA_PLANO_SAUDE_MENSAL");
    inputHidden("DESPESA_INSS");
    inputHidden("DESPESA_LAZER");
    inputHidden("DESPESA_COMBUSTIVEL");
    inputHidden("DESPESA_CARTAO_FATURA");
    inputHidden("DESPESA_VEICULO_ALUGADO_MENSALIDADE");
    inputHidden("DESPESA_VEICULO_ALUGADO")
    inputHidden("DESPESA_SEGURO_VIDA_MENSAL");
    inputHidden("DESPESA_CONDOMINIO_MENSAL");
    inputHidden("DESPESA_CONTRIBUICAO_SINDICAL");
    inputHidden("DESPESA_ESCOLA_MENSAL");
    inputHidden("DESPESA_UNIVERSIDADE_MENSAL");
    inputHidden("DESPESA_CLUBE_MENSALIDADE");
    inputHidden("BENS_VALOR_MERCADO_IMOVEL");
    inputHidden("BENS_VALOR_MERCADO_IMOVEL_VERAO");
    inputHidden("BENS_VALOR_MERCADO_IMOVEL_ALUGADO");
    inputHidden("BENS_VALOR_MERCADO_VEICULOS");
    inputHidden("BENS_VALOR_MERCADO_EMPRESAS");
    inputHidden("PROTECAO_PREVIDENCIA_PRIVADA_MENSAL");
    inputHidden("PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO");
    inputHidden("PROTECAO_FUNDO_GARANTIA_VALOR");
    inputHidden("OBJETIVO_RENDA_MENSAL");  
    inputHidden("OBJETIVO_VALOR");
    

    /////////////

    function removeNumbers(input) {
        input.value = input.value.replace(/[^A-Za-z\s]/g, ''); // Remove números
    }

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab   

    $(document).ready(function () {
        function setupLinkedField(id1, id2, opcao, opcao2) {
            //ESCONDE O SEGUNDO ID 
            $(id2).hide();

            // Monitorar a mudança no campo de opção
            $(id1).change(function () {
                if ($(this).val() === opcao || $(this).val() === opcao2) {
                    // DEIXA O SEGUNDO CAMPO VISIVEL CASO A OPÇÃO SEJA VALIDADA
                    $(id2).show();
                } else {
                    // ESCONDE O SEGUNDO CAMPO
                    $(id2).hide();
                }
            });
        }

        //FILTRO DE CONDIÇOES ------------------------------------------------
        setupLinkedField("#SOBRE_ESTADO_CIVIL-DIV", "#SOBRE_ESTADO_CIVIL_DETALHE-DIV", "Casado", "Uniao Estável");
        // setupLinkedField("#FILHOS","#MENSALIDADE_ESCOLA", "SIM");    FILHOS SE PRECISAR !!!
        // setupLinkedField("#FILHOS", "#MENSALIDADE_UNIVERSIDADE", "SIM");
        // setupLinkedField("#FILHOS", "#FILHOS-QNT", "SIM");
        setupLinkedField("#RECEITA_APLICACAO_OPCAO-DIV", "#RECEITA_APLICACOES_VALOR_TOTAL-DIV", "SIM");
        setupLinkedField("#RECEITA_APLICACAO_OPCAO-DIV", "#RECEITA_APLICACOES_ARQUIVO-DIV", "SIM"); //ARQUIVO
        setupLinkedField("#DESPESA_ALUGUEL_OPCAO-DIV", "#DESPESA_ALUGUEL-DIV", "SIM");
        setupLinkedField("#DESPESA_FINANCIAMENTO_TIPO-DIV", "#DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA-DIV", "CASA", "AMBOS");
        setupLinkedField("#DESPESA_FINANCIAMENTO_TIPO-DIV", "#DESPESA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR-DIV", "CASA", "AMBOS");
        setupLinkedField("#DESPESA_FINANCIAMENTO_TIPO-DIV", "#DESPESA_FINANCIAMENTO_VEICULO_PARCELA-DIV", "CARRO", "AMBOS");
        setupLinkedField("#DESPESA_FINANCIAMENTO_TIPO-DIV", "#DESPESA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR-DIV", "CARRO", "AMBOS");
        setupLinkedField("#DESPESA_EMPRESTIMO_OPCAO-DIV", "#DESPESA_EMPRESTIMO_PARCELA-DIV", "SIM");
        setupLinkedField("#DESPESA_EMPRESTIMO_OPCAO-DIV", "#DESPESA_EMPRESTIMO_SALDO_DEVEDOR-DIV", "SIM");
        setupLinkedField("#DESPESA_PLANO_OPCAO-DIV", "#DESPESA_PLANO_SAUDE_MENSAL-DIV", "SIM");
        setupLinkedField("#DESPESA_ALUGUEL_CARROS-DIV", "#DESPESA_VEICULO_ALUGADO_MENSALIDADE-DIV", "SIM");
        setupLinkedField("#DESPESA_SEGURO_VIDA_OPCAO-DIV", "#DESPESA_SEGURO_VIDA_MENSAL-DIV", "SIM");
        setupLinkedField("#DESPESA_SEGURO_VIDA_OPCAO-DIV", "#PROTECAO_APOLICE_SEGURO_ARQUIVO-DIV", "SIM"); // ARQUIVO
        setupLinkedField("#DESPESA_CONDOMINIO_OPCAO-DIV", "#DESPESA_CONDOMINIO_MENSAL-DIV", "SIM");
        setupLinkedField("#DESPESA_CLUBE_OPCAO-DIV", "#DESPESA_CLUBE_MENSALIDADE-DIV", "SIM");
        setupLinkedField("#BENS_IMOVEIS_ALUGADOS_VERANEIO-DIV", "#BENS_VALOR_MERCADO_IMOVEL_VERAO-DIV", "ALU", "SIM");
        setupLinkedField("#BENS_IMOVEIS_ALUGADOS_VERANEIO-DIV", "#BENS_VALOR_MERCADO_IMOVEL_ALUGADO-DIV", "VERA", "SIM");
        setupLinkedField("#PROTECAO_PREVIDENCIA_PRIVADA_OPCAO-DIV", "#PROTECAO_PREVIDENCIA_PRIVADA_MENSAL-DIV", "SIM");
        setupLinkedField("#PROTECAO_PREVIDENCIA_PRIVADA_OPCAO-DIV", "#PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO-DIV", "SIM");

    });

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("stepIndicator");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("step");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("step");
        // Exit the function if any field in the current tab is invalid:
        // if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();

            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }


    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("step");
        y = x[currentTab].querySelectorAll("input, select");

        for (i = 0; i < y.length; i++) {
            if ((y[i].tagName === "INPUT" || y[i].tagName === "SELECT")) {
                var isrequiredField = y[i].classList.contains("required");

                if (isrequiredField && y[i].value === "") {
                    y[i].classList.add("invalid");
                    valid = false;
                } else {
                    y[i].classList.remove("invalid"); // Remove a classe "invalid" se o campo estiver preenchido
                }
            }
        }

        if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
        } else {
            alert("Campo obrigatório vazio!");
        }

        return valid;
    }

    function maxIdade(input) {
        if (input.value.length > 2) {
            input.value = input.value.slice(0, 2);
        }
    }

    function validateCurrency(input) {
        var value = input.value.replace(/\D/g, ""); // Remove tudo que não for número
        var floatValue = parseFloat(value);

        if (floatValue === 0) {
            input.setCustomValidity("O valor não pode ser 0,00");
        } else {
            input.setCustomValidity(""); // Campo é válido
        }
    }

    function formatCurrencyValue(value) {
        var formattedValue = new Intl.NumberFormat("pt-br", {
            style: "currency",
            currency: "BRL",
            minimumFractionDigits: 2,
        }).format(value / 100); // Dividir por 100 para ajustar para centavos

        return formattedValue;
    }


    function handleCurrencyInput(input) {
        var value = input.value.replace(/\D/g, ""); // Remove tudo que não for número
        var numericValue = parseFloat(value);

        if (!isNaN(numericValue)) {
            var formattedValue = formatCurrencyValue(numericValue);
            input.value = formattedValue;
        } else {
            input.value = "R$ 0,00";
        }
    }

    //ADICIONAR OPÇÔES DE GASTOS  -- REPASSAR

    document.addEventListener("DOMContentLoaded", function () {
    var customExpensesContainer = document.getElementById("customExpenses");
    var addExpenseButton = document.getElementById("addExpense");

    var expenseIndex = 0;

    addExpenseButton.addEventListener("click", function (event) {
        event.preventDefault(); // pq ??

        expenseIndex++;

        document.getElementById('DESPESA_PERSONALIZADA_QUANTIDADE_LINHAS').value = expenseIndex;

        var expenseDiv = document.createElement("div");
        expenseDiv.classList.add("mb-3");

        var nameLabel = document.createElement("label");
        nameLabel.textContent = "Nome do Gasto " + expenseIndex;
        var nameInput = document.createElement("input");
        nameInput.type = "text";
        nameInput.name = "DESPESA_PERSONALIZADA_DESCRICAO_" + expenseIndex;
        expenseDiv.appendChild(nameLabel);
        expenseDiv.appendChild(nameInput);

        var valueLabel = document.createElement("label");
        valueLabel.textContent = "Valor do Gasto " + expenseIndex;
        var valueInput = document.createElement("input");
        valueInput.type = "number";
        valueInput.name = "DESPESA_PERSONALIZADA_VALOR_" + expenseIndex;
        expenseDiv.appendChild(valueLabel);
        expenseDiv.appendChild(valueInput);

        customExpensesContainer.appendChild(expenseDiv);

    });
});

</script>