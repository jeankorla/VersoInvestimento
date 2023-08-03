<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoria</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>
<style>
    body{
            font-family: 'Open Sans', sans-serif;
            background-color: #eeee;
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
            border: 1px solid #ffaba5;
        }
        #signUpForm .step {
          display: none;
        }
        #signUpForm .form-footer{
            overflow:auto;
            gap: 20px;
        }
        #signUpForm .form-footer button{
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
</style>
<body>
<h1 class="text-center fs-4">Mentoria Viver de Renda</h1>
<h1 class="text-center fs-4">Tenha um processo estruturado de crescimento financeiro e patrimonial feito sob medida para você saber exatamente o que fazer, como fazer e qual resultado esperar.</h1>
    <form id="signUpForm" method="POST" action="<?= base_url('Home/salvar') ?>">
        <!-- start step indicators -->
        <div class="form-header d-flex mb-4">
            <span class="stepIndicator">Cadastro</span>
            <span class="stepIndicator">Despesas</span>
            <span class="stepIndicator">Dívidas</span>
            <span class="stepIndicator">Bens</span>
            <span class="stepIndicator">Proteção</span>
        </div>
        <!-- end step indicators -->
    
        <!-- step one -->
        <div class="step">
            <p class="text-center mb-4">Create your account</p>
            <div class="mb-3">
                <label for="EMAIL">E-mail:</label>
                <input type="email" placeholder="Inserir seu E-mail" oninput="this.className = ''" name="EMAIL" id="EMAIL">
            </div>

            <div class="mb-3">
                <label for="NOME_COMPLETO">Nome Completo:</label>
                <input type="text" oninput="this.className = ''" name="NOME_COMPLETO" id="NOME_COMPLETO">
            </div>

            <div class="mb-3">
                <label for="DATA_NASCIMENTO">Data de nascimento:</label>
                <input type="date" placeholder="" oninput="this.className = ''" name="DATA_NASCIMENTO" id="DATA_NASCIMENTO">
            </div>

             <div class="mb-3">
                <label for="PROFISSAO">Profissão:</label>
                <input type="text" placeholder="Sua Profissão" oninput="this.className = ''" name="PROFISSAO" id="PROFISSAO">
            </div>

            <div class="mb-3">
                <label for="PROFISSAO_TIPO">Como exerce a sua profissão?</label>
                <select id="PROFISSAO_TIPO" name="PROFISSAO_TIPO" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Assalariado (carteira assinada)">Assalariado (carteira assinada)</option>
                    <option value="Assalariado (como PJ)">Assalariado (como PJ)</option>
                    <option value="Profissional Liberal (autônomo)">Profissional Liberal (autônomo)</option>
                    <option value="Empresario">Empresário</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ESTADO_CIVIL">Estado Civil:</label>
                <select id="ESTADO_CIVIL" name="ESTADO_CIVIL" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Viúvo">Viúvo(a)</option>
                    <option value="Uniao Estável">União Estável</option>
                </select>
            </div>

             <div class="mb-3">
                <label for="ESTADO_CIVIL_DETALHE">Se casado(a), qual é o regime?</label>
                <select id="ESTADO_CIVIL_DETALHE" name="ESTADO_CIVIL_DETALHE" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Viúvo">Viúvo(a)</option>
                    <option value="Uniao Estável">União Estável</option>
                </select>
            </div>

          <div class="mb-3">
            <label for="RENDA_MENSAL_LIQUIDA">Renda mensal líquida (já descontado o imposto de renda):</label>
            <input type="number" placeholder="Insira sua Renda" oninput="formatCurrency()" name="RENDA_MENSAL_LIQUIDA" id="RENDA_MENSAL_LIQUIDA">
            <p id="formattedCurrencyRENDA"></p>
            </div>

            <div class="mb-3">
            <label for="INSS_CONTRIBUICAO">Contribui para o INSS? Se sim, informar o valor:</label>
            <input type="number" placeholder="Informe o Valor" oninput="formatCurrency()" name="INSS_CONTRIBUICAO" id="INSS_CONTRIBUICAO">
            <p id="formattedCurrencyINSS"></p>
            </div>

            <div class="mb-3">
                <label for="APOSENTADORIA_IDADE">Idade pretendida para aposentadoria:</label>
                <input type="number" oninput="this.className = ''" name="APOSENTADORIA_IDADE" id="APOSENTADORIA_IDADE">
            </div>

            <div class="mb-3">
            <label for="APOSENTADORIA_RENDA_MENSAL">Renda mensal pretendida na aposentadoria:</label>
            <input type="number" placeholder="Informe o Valor" oninput="formatCurrency()" name="APOSENTADORIA_RENDA_MENSAL" id="APOSENTADORIA_RENDA_MENSAL">
            <p id="formattedCurrencyAPOSENT_RENDA"></p>
            </div>

            <br>
            <div class="mb-3">
            <p>Além da aposentadoria, você possui algum outro objetivo/sonho que requer uma meta de acúmulo financeiro? Se sim, informar o horizonte de tempo e o valor requerido para essas realizações.</p>
            <label for="SONHO_ANOS_RESTANTES">Quanto tempo?</label>
            <input type="date" oninput="this.className = ''" name="SONHO_ANOS_RESTANTES" id="SONHO_ANOS_RESTANTES">
            <label for="SONHO_SALDO">Valor requerido?</label>
            <input type="number" placeholder="Informe o Valor" oninput="formatCurrency()" name="SONHO_SALDO" id="SONHO_SALDO">
            <p id="formattedCurrencySONHO_RENDA"></p>            
            </div>

            <div class="mb-3">
                <label for="SEGURO_VIDA">Possui cobertura de seguro de vida?</label>
                <select id="SEGURO_VIDA" name="SEGURO_VIDA" class="form-control">
                    <option value="">Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="SEG_VIDA_SIM">Em caso positivo para a resposta anterior, anexar a apólice do seu seguro de vida</label><br>
                <input type="file" id="SEG_VIDA_SIM" name="SEG_VIDA_SIM">
            </div>

        </div>
    
        <!-- step two -->
        <div class="step">
            <p class="text-center mb-4">Your presence on the social network</p>
            <div class="mb-3">
                <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
            </div>
        </div>
    
        <!-- step three -->
        <div class="step">
            <p class="text-center mb-4">We will never sell it</p>
            <div class="mb-3">
                <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
            </div>
        </div>
    
        <!-- step four -->
        <div class="step">
            <p class="text-center mb-4">Seus bens</p>
            <div class="mb-3">
                <input type="text" placeholder="Casa" oninput="this.className = ''" name="casa">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Carro" oninput="this.className = ''" name="carro">
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Outros" oninput="this.className = ''" name="outros">
            </div>
        </div>

        <!-- step four (novo passo) -->
    <div class="step">
        <p class="text-center mb-4">Novo Passo</p>
        <div class="mb-3">
            <input type="text" placeholder="Novo Campo 1" oninput="this.className = ''" name="novocampo1">
        </div>
        <div class="mb-3">
            <input type="text" placeholder="Novo Campo 2" oninput="this.className = ''" name="novocampo2">
        </div>
        <div class="mb-3">
            <input type="text" placeholder="Novo Campo 3" oninput="this.className = ''" name="novocampo3">
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
          if (n == 1 && !validateForm()) return false;
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
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }


    function formatCurrency() {
    var ids = ["RENDA", "INSS", "APOSENT_RENDA"];
    var values = {};

    ids.forEach(function(id) {
        var value = document.getElementById(id).value;

        // Format to Brazilian currency for display
        var formatter = new Intl.NumberFormat("pt-br", {
            style: "currency",
            currency: "BRL",
            minimumFractionDigits: 2,
        });
        document.getElementById("formattedCurrency" + id).innerHTML = formatter.format(value);

        // Parse to float for server
        var floatForServer = parseFloat(value);

        // Add value to values object
        values[id] = floatForServer;

        // Send to server or store in a variable to use later
        // You can replace this with your own code to send the value to the server
        console.log(floatForServer);
    });

    // Now you have an object with all your values
    console.log(values);
}
</script>

