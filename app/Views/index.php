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

    <style>
        h1{
            font-size: 10em;
            font-weight: 800;
            font-family: 'Roboto Slab', serif;
            text-align: left;
            margin: 0;
            padding-top: 20px;
            padding-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombreamento */
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #e3e3e3;


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
            max-width: 500px;
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
            color: #009688;
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
            background-color: #d5efed;
            border-radius: 50%;
            border: 3px solid #ecf5f4;
        }

        #signUpForm .form-header .stepIndicator.active::before {
            background-color: #a7ede8;
            border: 3px solid #d5f9f6;
        }

        #signUpForm .form-header .stepIndicator.finish::before {
            background-color: #009688;
            border: 3px solid #b7e1dd;
        }

        #signUpForm .form-header .stepIndicator::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 8px;
            width: 100%;
            height: 3px;
            background-color: #f3f3f3;
        }

        .IDADE{
            position: relative;

        }

        .IDADE::after{
            content: "anos";
            position: absolute;
            top: 0;
            right: 340px;
            height: 100%;
            display: flex;
            align-items: center;
            color: gray;
        }


        #signUpForm .form-header .stepIndicator.active::after {
            background-color: #a7ede8;
        }

        #signUpForm .form-header .stepIndicator.finish::after {
            background-color: #009688;
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
            border: 1px solid #009688;
            outline: 0;
        }

        #signUpForm input.invalid {
            border: 3px solid red;
        }

        #signUpForm .step {
            display: none;
        }

        #signUpForm .form-footer {
            overflow: auto;
            gap: 20px;
        }

        #signUpForm .form-footer button {
            background-color: #009688;
            border: 1px solid #009688 !important;
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
            color: #009688;
        }

        .invalid {
            border: 3px solid red;
        }
    </style>


</head>

<body>
    <h1 class="text-center fs-4">Mentoria Viver de Renda</h1>
    <h1 class="text-center fs-4">Tenha um processo estruturado de crescimento financeiro e patrimonial feito sob medida
        para você saber exatamente o que fazer, como fazer e qual resultado esperar.</h1>


    <form id="signUpForm" method="POST" action="<?= base_url('home/salvar') ?>">
        <!-- start step indicators -->
        <div class="form-header d-flex mb-4">
            <span class="stepIndicator">Sobre</span>
            <span class="stepIndicator">Receitas</span>
            <span class="stepIndicator">Despesas</span>
            <span class="stepIndicator">Bens</span>
            <span class="stepIndicator">Proteção</span>
            <span class='stepIndicator'>Objetivos</span>
        </div>
        <!-- end step indicators -->

        <!-- step one -->
        <div class="step">
            <p class="text-center mb-4">Cadastro!</p>
            <div class="mb-3">
                <label for="EMAIL">E-mail:</label>
                <input type="email" placeholder="Inserir seu E-mail" oninput="this.className = ''" name="EMAIL"
                    id="EMAIL" class="required">
            </div>

            <div class="mb-3">
                <label for="NOME_COMPLETO">Nome Completo:</label>
                <input class="required" type="text" oninput="this.className = ''" name="NOME_COMPLETO" id="NOME_COMPLETO">
            </div>

            <div class="mb-3">
                <label for="DATA_NASCIMENTO">Data de nascimento:</label>
                <input class="required" type="date" placeholder="" oninput="this.className = ''" name="DATA_NASCIMENTO" id="DATA_NASCIMENTO">
            </div>

            <div class="mb-3">
                <label for="PROFISSAO">Profissão:</label>
                <input class="required" type="text" placeholder="Sua Profissão" oninput="this.className = ''" name="PROFISSAO"
                    id="PROFISSAO">
            </div>

            <div class="mb-3">
                <label for="PROFISSAO_TIPO">Como exerce a sua profissão?</label>
                <select id="PROFISSAO_TIPO" name="PROFISSAO_TIPO" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="Assalariado (carteira assinada)">Assalariado (carteira assinada)</option>
                    <option value="Assalariado (como PJ)">Assalariado (como PJ)</option>
                    <option value="Profissional Liberal (autônomo)">Profissional Liberal (autônomo)</option>
                    <option value="Empresario">Empresário</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ESTADO_CIVIL">Estado Civil:</label>
                <select id="ESTADO_CIVIL" name="ESTADO_CIVIL" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Viúvo">Viúvo(a)</option>
                    <option value="Uniao Estável">União Estável</option>
                </select>
            </div>

            <div class="mb-3" id="ESTADO_CIVIL_DETALHE">
                <label for="ESTADO_CIVIL_DETALHE">Qual o regime?</label>
                <select id="ESTADO_CIVIL_DETALHE" name="ESTADO_CIVIL_DETALHE" class="form-control">
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

                <label for="RENDA_MENSAL_LIQUIDA">Renda mensal líquida (já descontado o imposto de renda):</label>
                <input type="text" id="RENDA_MENSAL_LIQUIDA" class="currency-input required" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00"/>                

            </div>

            <div class="mb-3">

            <label for="APLICACAO-OP">Possui alguma aplicação ?</label>
            <select name="APLICACAO-OP" id="APLICACAO-OP" class="form-control required">
                <option value="NAO">Não</option>
                <option value="SIM">Sim</option>
            </select>
            </div>

            <div class="mb-3" id="APLICACAOT">

                    <label for="APLICACAO_FINANCEIRA_TOTAL">Aplicações Financeiras - Valor TOTAL</label>
                    <input type="text" id="APLICACAO_FINANCEIRA_TOTAL" class="currency-input" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00"/>

            </div>

            <div class="mb-3" id="APLICACAO_SIM">

                <label for="APLICACAO_SIM">Aplicações Financeiras - Anexar extrato das aplicações</label><br>
                <input type="file" id="APLICACAO_SIM" name="APLICACAO_SIM"/>      
                                     <!-- anexo arruma depois -->
            </div>

        </div>

        <!-- step three -->
        
        <div class="step">
            <p class="text-center mb-4">Despesas</p>

            <div class="mb-3">
                <label for="CONTA_LUZ">Conta de luz - Inserir média mensal</label>
                <input type="text" class="required" id="CONTA_LUZ" name="CONTA_LUZ" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="CONTA_AGUA">Conta de água - Inserir média mensal</label>
                <input type="text" class="required" id="CONTA_AGUA" name="CONTA_AGUA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="CONTA_GAS">Conta de gás - Inserir média mensal</label>
                <input type="text" class="required" id="CONTA_GAS" name="CONTA_GAS" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!--- Linkados ALUGUEL--->
            <div class="mb-3">

                <label for="ALUGUEL-OP">Possui contrato de aluguel ?</label>
                <select name="ALUGEL-OP" id="ALUGUEL-OP" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>

            </div>

            <div class="mb-3" id="ALUGUEL">
                <label for="ALUGUEL">Aluguel</label>
                <input type="text" id="ALUGUEL" name="ALUGUEL" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00"
                    required>
            </div>

            <!---------------------------------------->

            <!----------- FINANCIAMENTO -------------->

            <div class="mb-3">
                <label for="FINANCIAMENTO-OP">Possui algum financiamento ?</label>
                <select name="FINANCIAMENTO-OP" id="FINANCIAMENTO-OP" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="CASA">Casa ou apto</option>
                    <option value="CARRO">Veículo</option>
                    <option value="AMBOS">Ambos</option>
                </select>
            </div>

            <div class="mb-3" id="FINANCIAMENTO_CASA_PARCONTA_CELA">
                <label for="FINANCIAMENTO_CASA_PARCONTA_CELA">Financiamento Residencial - Parcela</label>
                <input type="text" id="FINANCIAMENTO_CASA_PARCONTA_CELA" name="FINANCIAMENTO_CASA_PARCONTA_CELA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="FINANCIAMENTO_CASA_DEVEDOR">
                <label for="FINANCIAMENTO_CASA_DEVEDOR">Financiamento Residencial - Saldo devedor</label>
                <input type="text" id="FINANCIAMENTO_CASA_DEVEDOR" name="FINANCIAMENTO_CASA_DEVEDOR" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="FINANCIAMENTO_VEICULO_PARCONTA_CELA">
                <label for="FINANCIAMENTO_VEICULO_PARCONTA_CELA">Financiamento Veiculos - Parcela</label>
                <input type="text" id="FINANCIAMENTO_VEICULO_PARCONTA_CELA" name="FINANCIAMENTO_VEICULO_PARCONTA_CELA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="FINANCIAMENTO_VEICULOS_DEVEDOR">
                <label for="FINANCIAMENTO_VEICULOS_DEVEDOR">Financiamento Residencial - Saldo devedor</label>
                <input type="text" id="FINANCIAMENTO_VEICULOS_DEVEDOR" name="FINANCIAMENTO_VEICULOS_DEVEDOR" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!------------------------------------->

            <div class="mb-3">
                <label for="IPTU">IPTU</label>
                <input type="text" id="IPTU" name="IPTU" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="IPVA">IPVA - Valot total</label>
                <input type="text" id="IPVA" name="IPVA" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <!--- Linkados EMPRESTIMO--->
            <div class="mb-3">

                <label for="EMPRESTIMO-OP">Possui contrato de Emprestimo ?</label>
                <select name="EMPRESTIMO-OP" id="EMPRESTIMO-OP" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>

            </div>

            <div class="mb-3" id="EMPRESTIMOS_PARCONTA_CELA">
                <label for="EMPRESTIMOS_PARCONTA_CELA">Emprestimos parcela</label>
                <input type="text" id="EMPRESTIMOS_PARCONTA_CELA" name="EMPRESTIMOS_PARCONTA_CELA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="EMPRESTIMO_DEVEDOR">
                <label for="EMPRESTIMO_DEVEDOR">EMPRESTIMO - Saldo devedor</label>
                <input type="text" id="EMPRESTIMO_DEVEDOR" name="EMPRESTIMO_DEVEDOR" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!-------------------------------->

            <div class="mb-3">
                <label for="CONTA_NET_TV">Valor da conta de internet + televisão</label>
                <input type="text" id="CONTA_NET_TV" name="CONTA_NET_TV" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00"
                    class="required">
            </div>

            <div class="mb-3">
                <label for="CONTA_CEL">Conta de celular</label>
                <input type="text" id="CONTA_CEL" name="CONTA_CEL" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="CONTA_MERCADO">Média dos gastos em supermercados</label>
                <input type="text" id="CONTA_MERCADO" name="CONTA_MERCADO" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00"
                    class="required">
            </div>

            <div class="mb-3">
                <label for="CONTA_MEDICAMENTOS">Gastos com medicamentos</label>
                <input type="text" id="CONTA_MEDICAMENTOS" name="CONTA_MEDICAMENTOS" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <!---------------- PLANO DE SAUDE -------------------------->
            <div class="mb-3">

                <label for="PLANO-OP">Possui plano de saude ?</label>
                <select name="PLANO-OP" id="PLANO-OP" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>
                </select>

            </div>

            <div class="mb-3" id="PLANO_SAUDE_PARCELA">
                <label for="PLANO_SAUDE_PARCELA">Plano de saúde - Parcela</label>
                <input type="text" id="PLANO_SAUDE_PARCELA" name="PLANO_SAUDE_PARCELA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!----------------------------------------------------------->

            <div class="mb-3">
                <label for="INSS">Valor parcela INSS</label>
                <input type="text" name=INSS id="INSS" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="GASTOS_LAZER">Gastos com lazer</label>
                <input type="text" id="GASTOS_LAZER" name="GASTOS_LAZER" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00"
                    class="required">
            </div>

            <div class="mb-3">
                <label for="GASTOS_COMBUSTIVEL">Gasto com combustivél</label>
                <input type="text" id="GASTOS_COMBUSTIVEL" name="GASTOS_COMBUSTIVEL" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="GASTOS_CARTAO">Gastos com cartao de crédito - Fatura</label>
                <input type="text" id="GASTOS_CARTAO" name="GASTOS_CARTAO" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>


            <!--------------------ALUGUEL DOS VEICULOS------------------------->
            <div class="mb-3">

                <label for="ALUCAR-OP">Usa veículos alugados ?</label>
                <select name="ALUCAR-OP" id="ALUCAR-OP" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="ALUGUEL_VEICULO">
                <label for="ALUGUEL_VEICULO">Valor do Aluguel dos veículos</label>
                <input type="text" id="ALUGUEL_VEICULO" name="ALUGUEL_VEICULO" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!---------------------------------------------------------------------->

            <div class="mb-3">
                <label for="SEGURO_VEICULO">Mensalidade do seguro dos veículos</label>
                <input type="text" id="SEGURO_VEICULO" name="SEGURO_VEICULO" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">

                <label for="SEGURO_VIDA_OP">Tem seguro de vida ?</label>
                <select name="SEGURO_VIDA_OP" id="SEGURO_VIDA_OP" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

                </div>

                <div class="mb-3" id="SEGURO_VIDA">
                <label for="SEGURO_VIDA">Mensalidade do seguro de vida</label>
                <input type="text" id="SEGURO_VIDA" name="SEGURO_VIDA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
                </div>


            <!--------------------------------CONDOMINIO-------------------------------------->

            <div class="mb-3">

                <label for="CONDO-OP">Mora em Condominio ?</label>
                <select name="CONDO-OP" id="CONDO-OP" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="MENSALIDADE_CONDOMINIO">
                <label for="MENSALIDADE_CONDOMINIO">Mensalidade do Condominio</label>
                <input type="text" id="MENSALIDADE_CONDOMINIO" name="CONDO_V" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!---------------------------------------------------------------------->

            <div class="mb-3">
                <label for="MENSALIDADE_SINDICATO">Contribuição Sindical</label>
                <input type="text" id="MENSALIDADE_SINDICATO" name="MENSALIDADE_SINDICATO" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="MENSALIDADE_ESCOLA">
                <label for="MENSALIDADE_ESCOLA">Mensalidade Escolar</label>
                <input type="text" id="MENSALIDADE_ESCOLA" name="MENSALIDADE_ESCOLA" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="MENSALIDADE_UNIVERSIDADE">
                <label for="MENSALIDADE_UNIVERSIDADE">Mensalidade Universidade</label>
                <input type="text" id="MENSALIDADE_UNIVERSIDADE" name="MENSALIDADE_UNIVERSIDADE" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!--------------------------------Clube-------------------------------------->

            <div class="mb-3">

                <label for="CLUBE-OP">Freequenta algum clube?</label>
                <select name="CLUBE-OP" id="CLUBE-OP" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="SIM">Sim</option>
                </select>

            </div>

            <div class="mb-3" id="MENSALIDADE_CLUBE">
                <label for="MENSALIDADE_CLUBE">Mensalidade do Clube</label>
                <input type="text" id="MENSALIDADE_CLUBE" name="MENSALIDADE_CLUBE" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
            </div>

            <!---------------------------------------------------------------------->


            <p class="mb-3">Gastos Personalizados</p>
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
                <label for="VALOR_MERCADO_IMOVEL">Imoveis residenciais - Valor de Mercado</label>
                <input type="text" id="VALOR_MERCADO_IMOVEL" name="VALOR_MERCADO_IMOVEL" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">

                <label for="CASA-VOP">Possui casa de veraneio ou alugadas ?</label>
                <select name="CASA-VOP" id="CASA-VOP" class="form-control required">
                    <option value="Não">Não</option>
                    <option value="VERA">Veraneio</option>
                    <option value="ALU">Alugadas</option>
                    <option value="SIM">AMBAS</option>
                </select>

                </div>

                <div class="mb-3" id="VALOR_MERCADO_IMOVEL_VERAO">
                <label for="VALOR_MERCADO_IMOVEL_VERAO">Imovéis de veraneio - Valor de mercado</label>
                <input type="text" id="VALOR_MERCADO_IMOVEL_VERAO" name="VALOR_MERCADO_IMOVEL_VERAO" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
                </div>

                <div class="mb-3" id="VALOR_MERCADO_IMOVEL_ALUGADO">
                <label for="VALOR_MERCADO_IMOVEL_ALUGADO">Imovéis alugados - Valor de mercado</label>
                <input type="text" id="VALOR_MERCADO_IMOVEL_ALUGADO" name="VALOR_MERCADO_IMOVEL_ALUGADO" oninput="handleCurrencyInput(this)"
                    placeholder="R$ 0,00">
                </div>

                             
                <div class="mb-3">
                    <label for="VALOR_MERCADO_VEICULOS">Veiculos - Valor de mercado</label>
                    <input type="text" id="VALOR_MERCADO_VEICULOS" name="VALOR_MERCADO_VEICULOS" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
                </div>

                
                <div class="mb-3">
                    <label for="VALOR_MERCADO_EMPRESAS">Empresas - Valor de mercado</label>
                    <input type="text" id="EMPRESA" name="VALOR_MERCADO_EMPRESAS" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
                </div>
            
            </div>

            

        </div>

        <!-- PROTEÇÃO -->
        <div class="step">

            <p class="text-center mb-4">Proteção</p>

            <div class="mb-3">

                <label for="SEGURO_VIDA_OPCAO">Possui cobertura de seguro de vida?</label>

                <select id="SEGURO_VIDA_OPCAO" name="SEGURO_VIDA_OPCAO" class="form-control required">

                    <option value="">Selecione</option>
                    <option value="SIM">Sim</option>
                    <option value="NAO">Não</option>

                </select>
            </div>

            <div class="mb-3" id="SEGURO_VIDA_APOLICE">
                <label for="SEGURO_VIDA_APOLICE">Anexar apólice de seguro</label><br>
                <input type="file" id="SEGURO_VIDA_APOLICE" name="SEGURO_VIDA_APOLICE">
            </div>

            <div class="mb-3">
                <label for="INSS_CONTRIBUICAO">Contribui para o INSS? Se sim, informar o valor:</label>
                <input type="text" placeholder="Informe o Valor" oninput="handleCurrencyInput(this)" name="INSS_CONTRIBUICAO" id="INSS_CONTRIBUICAO" placeholder="R$ 0,00">                
            </div>

            <div class="mb-3">
                <label for="EXTRATO_PLANO_PREVIDENCIA">Anexar extrato planos da previdência</label><br>
                <input type="file" id="EXTRATO_PLANO_PREVIDENCIA" name="EXTRATO_PLANO_PREVIDENCIA">
            </div>

            <div class="mb-3">
                <label for="PREVIDENCIA_PRIVADA_OPCAO">Possui previdência privada ?</label>
                <select name="PREVIDENCIA_PRIVADA_OPCAO" id="PREVIDENCIA_PRIVADA_OPCAO" class="form-control required">
                    <option value="NAO">Não</option>
                    <option value="SIM">Sim</option>
                </select>
            </div>

            <div class="mb-3" id="PREVIDENCIA_PRIVADA_PARCELA">
                <label for="PREVIDENCIA_PRIVADA_PARCELA">Previdencia privada - Valor da Parcela</label>
                <input type="text" name="PREVA-VALOR" oninput="hanldeCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3" id="PREVIDENCIA_PRIVADA_MONTANTE">
                <label for="PREVIDENCIA_PRIVADA_MONTANTE">Montante acumulado</label>
                <input type="text" name="PREVIDENCIA_PRIVADA_MONTANTE" oninput="handleCurrencyInput(this)" placeholder="R$ 0,00">
            </div>

            <div class="mb-3">
                <label for="FGTS">Valor do fundo de garantia</label>
                <input type="text" name="FGTS" id="FGTS" oninput="handleCurrencyInput(this)" placeholder="0,00">
            </div>


        </div>


        <!---- OBJETIVOS ---->
        <div class="step">
            <p class="text-center mb-4"> Objetivos</p>
            <div class="mb-3">
                <label for="APOSENTADORIA_RENDA_MENSAL">Renda mensal pretendida na aposentadoria:</label>
                <input type="number" placeholder="R$ 0,00" oninput="handleCurrencyInput()" name="APOSENTADORIA_RENDA_MENSAL" id="APOSENTADORIA_RENDA_MENSAL">
            </div>

            <div class="mb-3">
                <label for="APOSENT">Idade pretendida para aposentadoria:</label>
                <input type="number" oninput="this.className = ''" name="APOSENT" id="APOSENT">
            </div>

            <br>
            <div class="mb-3">
                <p>Além da aposentadoria, você possui algum outro objetivo/sonho que requer uma meta de acúmulo
                    financeiro? Se sim, informar o horizonte de tempo e o valor requerido para essas realizações.</p>
                <label for="SONHO_ANOS_RESTANTES">Quanto tempo?</label>
                <input type="date" oninput="this.className = ''" name="SONHO_ANOS_RESTANTES" id="SONHO_ANOS_RESTANTES">
                <label for="SONHO_SALDO">Valor requerido?</label>
                <input type="number" placeholder="R$ 0,00" oninput="handleCurrencyInput()" name="SONHO_SALDO" id="SONHO_SALDO">
            </div>


        </div>


        <!-- start previous / next buttons -->
        <div class="form-footer d-flex">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->
    </form>
</body>

</html>



<script>
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

        setupLinkedField("#APLICACAO-OP", "#APLICACAOT", "SIM")
        setupLinkedField("#APLICACAO-OP", "#APLICACAO_SIM", "SIM")
        setupLinkedField("#FILHOS","#ESCOLA-MENSAL", "SIM");
        setupLinkedField("#FILHOS", "#ESCOLA-UNI", "SIM");
        setupLinkedField("#FILHOS", "#FILHOS-QNT", "SIM");
        setupLinkedField("#PRE-OP", "#PREV-VALOR","SIM");
        setupLinkedField("#PRE-OP", "#MONT-VALOR","SIM");
        setupLinkedField("#SEG_VIDA", "#SEG_VIDA_SIM", "SIM");
        setupLinkedField("#LIFE-OP", "#LIFE-VALOR", "SIM");
        setupLinkedField("#CASA-VOP", "#CASA-ALU", "ALU","SIM");
        setupLinkedField("#CASA-VOP", "#CASA-VERA", "VERA","SIM");
        setupLinkedField("#CLUBE-OP", "#CLUBE-V", "SIM");
        setupLinkedField("#CONDO-OP", "#CONDO-V", "SIM");
        setupLinkedField("#ALUCAR-OP", "#ALUGUEL-CAR", "SIM");
        setupLinkedField("#PLANO-OP", "#PLANO-SAUDE", "SIM");
        setupLinkedField("#FINANCIAMENTO-OP", "#FINA-CASA", "CASA", "AMBOS");
        setupLinkedField("#FINANCIAMENTO-OP", "#FINA-CASA-RES", "CASA", "AMBOS");
        setupLinkedField("#FINANCIAMENTO-OP", "#FINA-VEI", "CARRO", "AMBOS");
        setupLinkedField("#FINANCIAMENTO-OP", "#FINA-VEI-RES", "CARRO", "AMBOS");
        setupLinkedField("#EMPRESTIMO-OP", "#EMPRESTIMOS", "SIM");
        setupLinkedField("#EMPRESTIMO-OP", "#EMPRESTIMO-SALDO", "SIM");
        setupLinkedField("#CIVIL", "#CIVIL_SIM", "Casado", "Uniao Estável");
        setupLinkedField("#ALUGUEL-OP", "#ALUGUEL", "SIM");

        // Chame setupLinkedField para outros pares de campos conforme necessário
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
        //if (n == 1 && !validateForm()) return false;
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
    

    function validateCurrency(input) {
        var value = input.value.replace(/\D/g, ""); // Remove tudo que não for número
        var floatValue = parseFloat(value);

        if (floatValue === 0) {
            input.setCustomValidity("O valor não pode ser 0,00");
        } else {
            input.setCustomValidity(""); // Campo é válido
        }
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

    function formatCurrencyValue(value) {
        var formattedValue = new Intl.NumberFormat("pt-br", {
            style: "currency",
            currency: "BRL",
            minimumFractionDigits: 2,
        }).format(value / 100); // Dividir por 100 para ajustar para centavos

        return formattedValue;
    }

    function convertToNumber(textValue) {
        // Remove caracteres não numéricos e substitui vírgulas por pontos para transformar em número
        return parseFloat(textValue.replace(/[^\d,]/g, "").replace(",", "."));
    }

    document.addEventListener("DOMContentLoaded", function () {
        var luzInput = document.getElementById("LUZ");

        luzInput.addEventListener("change", function () {
            var numericValue = convertToNumber(luzInput.value);
            console.log("Valor numérico: " + numericValue);
        });
    });

    //ADICIONAR OPÇÔES DE GASTOS

    document.addEventListener("DOMContentLoaded", function () {
    var customExpensesContainer = document.getElementById("customExpenses");
    var addExpenseButton = document.getElementById("addExpense");

    var expenseIndex = 1;

    addExpenseButton.addEventListener("click", function () {
        var expenseDiv = document.createElement("div");
        expenseDiv.classList.add("mb-3");

        var nameLabel = document.createElement("label");
        nameLabel.textContent = "Nome do Gasto " + expenseIndex;
        var nameInput = document.createElement("input");
        nameInput.type = "text";
        nameInput.name = "EXPENSE_" + expenseIndex + "_NAME";
        expenseDiv.appendChild(nameLabel);
        expenseDiv.appendChild(nameInput);

        var valueLabel = document.createElement("label");
        valueLabel.textContent = "Valor do Gasto " + expenseIndex;
        var valueInput = document.createElement("input");
        valueInput.type = "number";
        valueInput.name = "EXPENSE_" + expenseIndex + "_VALUE";
        expenseDiv.appendChild(valueLabel);
        expenseDiv.appendChild(valueInput);

        customExpensesContainer.appendChild(expenseDiv);

        expenseIndex++;
    });
});

  
</script>
