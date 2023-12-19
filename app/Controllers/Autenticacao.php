<?php

namespace App\Controllers;

use App\Models\ClienteBemsPersonalizadaModel;
use App\Models\ClienteDividaPersonalizadaModel;
use App\Models\ClienteProtecaoPersonalizadaModel;
use App\Models\ClienteReceitaPersonalizadaModel;
use App\Models\UsuarioModel;
use App\Models\ClienteDespesaPersonalizadaModel;
use App\Models\ClienteFormularioModel;
use App\Models\ClienteResultadoModel;


class Autenticacao extends BaseController
{   
     public function index()
    {   
       
        echo view('login');
        
    }
    public function login()
    {
        $username = $this->request->getPost('NAME');
        $password = $this->request->getPost('PASSWORD');

        $model = new UsuarioModel();

        $user = $model->getUser($username, $password);

        if ($user) {
            // Define a variável de sessão 'isLoggedIn' como true
            session()->set('isLoggedIn', true);
            // Limpa todas as outras variáveis de sessão
            session()->remove(['otherSessionVariable1', 'otherSessionVariable2']);
            // Redireciona para a tela "index"
            return redirect()->to('Autenticacao/admin');
        } else {
            // Caso o login falhe, redireciona de volta para a tela de login
            return redirect()->back()->with('error', 'Credenciais inválidas.')->withInput();
        }
    }

     public function admin()
    {
        // Verifica se o usuário está autenticado
        if (!session()->get('isLoggedIn')) {
            // Caso não esteja autenticado, redireciona para a tela de login
            return redirect()->back()->with('error', 'Credenciais inválidas.')->withInput();
        }

        
        //dd($data);
        $data = $this->mergeData();

        echo view('administrate.php', ['data' => $data]);
    
    }

    private function mergeData(){

        $db = \Config\Database::connect();

        // db build -- 
        $builder = $db -> table('CLIENTES_FORMULARIO');
        //select da table
        $builder->select('*');
        //join das duas table
        $builder->join('CLIENTES_RESULTADOS', 'CLIENTES_FORMULARIO.PK = CLIENTES_RESULTADOS.CLIENTE_FORMULARIO_FK');
        // qauery recebendo a data'
        $query = $builder->get();

        return $query->getResult();


    }

    public function gerar($pk = null)
    {
        if (!$pk) {
            return redirect()->back()->with('error', 'ID inválido.');
        }

        $clienteFormulario  = new ClienteFormularioModel();
        $clienteResultado = new ClienteResultadoModel();

        $formulario = $clienteFormulario->where('PK', $pk)->first();
        $resultado = $clienteResultado->where('CLIENTE_FORMULARIO_FK', $pk)->first();

        if (!$formulario || !$resultado) {
            return redirect()->back()->with('error', 'Dados não encontrados.');
        }

        $data = array_merge($formulario, $resultado);        
        $data['PK'] = $pk;
        

        return view('relatorio_view.php', ['data' => $data]);
    }

    public function edit($pk = null)
    {
        if (!$pk) {
            return redirect()->back()->with('error', 'ID inválido.');
        }

    
        $clienteFormulario      =                   new ClienteFormularioModel();
        $clienteDespesas        =                   new ClienteDespesaPersonalizadaModel();
        $clienteResultados      =                   new ClienteResultadoModel();
        $clienteBems            =                   new ClienteBemsPersonalizadaModel();
        $clienteProtecao        =                   new ClienteProtecaoPersonalizadaModel();
        $clienteDivida          =                   new ClienteDividaPersonalizadaModel();
        $clienteReceita         =                   new ClienteReceitaPersonalizadaModel();

        $resultado              =                   $clienteResultados->where('PK', $pk)->first();
        
       $cliente_pk = $resultado['CLIENTE_FORMULARIO_FK'];

        $formulario             =                   $clienteFormulario->find($cliente_pk); 
        $despesas               =                   $clienteDespesas->where('CLIENTE_FORMULARIO_FK', $cliente_pk)->findAll();
        $bems                   =                   $clienteBems->where('CLIENTE_FORMULARIO_FK', $cliente_pk)->findAll();
        $protecao               =                   $clienteProtecao->where('CLIENTE_FORMULARIO_FK', $cliente_pk)->findAll();
        $divida                 =                   $clienteDivida->where('CLIENTE_FORMULARIO_FK', $cliente_pk)->findAll();
        $receita                =                   $clienteReceita->where('CLIENTE_FORMULARIO_FK', $cliente_pk)->findAll();
        
    
        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulário não encontrado.');
        }
        
        
        return view('edit.php', ['formulario' => $formulario, 'despesas' => $despesas, 'resultado' =>$resultado, 'bems' => $bems,'protecao'=> $protecao, 'divida' => $divida, 'receita' =>$receita]);

        
        
    }

    public function despesasUpdate() {
        $clienteDespesas = new ClienteDespesaPersonalizadaModel();
        $despesasData = $this->request->getVar('DESPESA');
        
        if (is_array($despesasData) || is_object($despesasData)) {
            foreach ($despesasData as $despesaId => $valor) {
                $data = [
                    'VALOR' => $valor,
                    'CATEGORIA' => $this->request->getVar("CATEGORIA[$despesaId]")
                ]; 
                $clienteDespesas->update($despesaId, $data);
            }
        }
        return true;
    }    

    public function bemsUpdate(){
        // Atualizar as despesas      
        $clienteBems = new ClienteBemsPersonalizadaModel();
        $bemsData = $this->request->getVar('BEMS');

        
        if (is_array($bemsData) || is_object($bemsData)) {
            foreach ($bemsData as $bemsId => $valor) {
                $data = ['VALOR' => $valor]; 

                $clienteBems->update($bemsId, $data);

            }
        }
        return true;
    }

    public function protecaoUpdated(){
        // Atualizar as despesas      
        $clienteProtecao = new ClienteProtecaoPersonalizadaModel();
        $protecaoData = $this->request->getVar('PROTECAO');

        
        if (is_array($protecaoData) || is_object($protecaoData)) {
            foreach ($protecaoData as $protecaoId => $valor) {
                $data = ['VALOR' => $valor]; 
                
                $clienteProtecao->update($protecaoId, $data);

            }
        }
        return true;
    }

    public function dividaUpdated(){

        $clienteDivida = new ClienteDividaPersonalizadaModel();
        $dividaData = $this->request->getVar('DIVIDA');

        if (is_array($dividaData) || is_object($dividaData)) {
            foreach($dividaData as $dividaId => $valor){
                $data = ['VALOR' =>$valor];

                $clienteDivida->update($dividaId, $data);
            }
        }

    }

    public function receitaUpdated(){
        $clienteReceita = new ClienteReceitaPersonalizadaModel();
        $receitaData = $this->request->getVar('RECEITA');

        if (is_array($receitaData) || is_object($receitaData)){
            foreach($receitaData as $receitaId => $valor){
                $data = ['VALOR' => $valor];

                $clienteReceita->update($receitaId, $data);
            }
        }

    }

    public function updateAll() {
        if (!$this->despesasUpdate()) {
            throw new \Exception('Erro ao atualizar despesas.');
        }
    
        if (!$this->bemsUpdate()) {
            throw new \Exception('Erro ao atualizar bens.');
        }
    
        if (!$this->protecaoUpdated()) {
            throw new \Exception('Erro ao atualizar proteção.');
        }

        if (!$this->dividaUpdated()){
            throw new \Exception('Erro ao atualizar dividas.');
        }

        if (!$this->receitaUpdated()){
            throw new \Exception('Erro ao atualizar as receitas.');
        }
    }
    

    public function update($pk = null)
    {

        if (!$pk) {

            return redirect()->back()->with('error', 'ID inválido.');
        }

        $formData = [

            'SOBRE_EMAIL'                                       => $this->request->getPost('SOBRE_EMAIL'),
            'SOBRE_NOME'                                        => $this->request->getPost('SOBRE_NOME'),
            'SOBRE_NOME_SOBRENOME'                              => $this->request->getPost('SOBRE_NOME_SOBRENOME'),
            'SOBRE_PROFISSAO'                                   => $this->request->getPost('SOBRE_PROFISSAO'),

            'RECEITA_RENDA_MENSAL_LIQUIDA'                      => $this->request->getPost('RECEITA_RENDA_MENSAL_LIQUIDA'),
            'RECEITA_APLICACOES_VALOR_TOTAL'                    => $this->request->getPost('RECEITA_APLICACOES_VALOR_TOTAL'),
            'RECEITA_PROLABORE'                                 => $this->request->getPost('RECEITA_PROLABORE'),
            'RECEITA_DIVIDENDOS'                                => $this->request->getPost('RECEITA_DIVIDENDOS'),
            'RECEITA_ALUGUEL'                                   => $this->request->getPost('RECEITA_ALUGUEL'),
            'RECEITA_PARTICIPACAO_LUCROS'                       => $this->request->getPost('RECEITA_PARTICIPACAO_LUCROS'),
            'RECEITA_INSS'                                      => $this->request->getPost('RECEITA_INSS'),
            'RECEITA_PREVIDENCIA_PRIVADA'                       => $this->request->getPost('RECEITA_PREVIDENCIA_PRIVADA'),

            'DESPESA_LUZ_MEDIA_MENSAL'                          => $this->request->getPost('DESPESA_LUZ_MEDIA_MENSAL'),
            'DESPESA_AGUA_MEDIA_MENSAL'                         => $this->request->getPost('DESPESA_AGUA_MEDIA_MENSAL'),
            'DESPESA_GAS_MEDIA_MENSAL'                          => $this->request->getPost('DESPESA_GAS_MEDIA_MENSAL'),
            'DESPESA_ALUGUEL'                                   => $this->request->getPost('DESPESA_ALUGUEL'),
            'DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA'         => $this->request->getPost('DESPESA_FINANCIAMENTO_RESIDENCIAL_PARCELA'),            
            'DESPESA_FINANCIAMENTO_VEICULO_PARCELA'             => $this->request->getPost('DESPESA_FINANCIAMENTO_VEICULO_PARCELA'), 
            'DESPESA_IPTU'                                      => $this->request->getPost('DESPESA_IPTU'),
            'DESPESA_IPVA'                                      => $this->request->getPost('DESPESA_IPVA'),
            'DESPESA_EMPRESTIMO_PARCELA'                        => $this->request->getPost('DESPESA_EMPRESTIMO_PARCELA'),
            'DESPESA_INTERNET_TELEVISAO'                        => $this->request->getPost('DESPESA_INTERNET_TELEVISAO'),
            'DESPESA_CELULAR'                                   => $this->request->getPost('DESPESA_CELULAR'),
            'DESPESA_MEDIA_MERCADO'                             => $this->request->getPost('DESPESA_MEDIA_MERCADO'),
            'DESPESA_MEDICAMENTOS'                              => $this->request->getPost('DESPESA_MEDICAMENTOS'),
            'DESPESA_PLANO_SAUDE_MENSAL'                        => $this->request->getPost('DESPESA_PLANO_SAUDE_MENSAL'),
            'DESPESA_INSS'                                      => $this->request->getPost('DESPESA_INSS'),
            'DESPESA_LAZER'                                     => $this->request->getPost('DESPESA_LAZER'),
            'DESPESA_COMBUSTIVEL'                               => $this->request->getPost('DESPESA_COMBUSTIVEL'),
            'DESPESA_CARTAO_FATURA'                             => $this->request->getPost('DESPESA_CARTAO_FATURA'),
            'DESPESA_VEICULO_ALUGADO_MENSALIDADE'               => $this->request->getPost('DESPESA_VEICULO_ALUGADO_MENSALIDADE'),
            'DESPESA_VEICULO_SEGURO'                            => $this->request->getPost('DESPESA_VEICULO_SEGURO'),
            'DESPESA_SEGURO_VIDA_MENSAL'                        => $this->request->getPost('DESPESA_SEGURO_VIDA_MENSAL'),
            'DESPESA_CONDOMINIO_MENSAL'                         => $this->request->getPost('DESPESA_CONDOMINIO_MENSAL'),
            'DESPESA_CONTRIBUICAO_SINDICAL'                     => $this->request->getPost('DESPESA_CONTRIBUICAO_SINDICAL'),
            'DESPESA_ESCOLA_MENSAL'                             => $this->request->getPost('DESPESA_ESCOLA_MENSAL'),
            'DESPESA_UNIVERSIDADE_MENSAL'                       => $this->request->getPost('DESPESA_UNIVERSIDADE_MENSAL'),
            'DESPESA_CLUBE_MENSALIDADE'                         => $this->request->getPost('DESPESA_CLUBE_MENSALIDADE'),
            'DESPESA_ACADEMIA'                                  => $this->request->getPost('DESPESA_ACADEMIA'),
            'DESPESA_FAXINEIRO'                                 => $this->request->getPost('DESPESA_FAXINEIRO'),
            'DESPESA_BELEZA'                                    => $this->request->getPost('DESPESA_BELEZA'),

            'DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'    => $this->request->getPost('DIVIDA_FINANCIAMENTO_RESIDENCIAL_SALDO_DEVEDOR'),
            'DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'        => $this->request->getPost('DIVIDA_FINANCIAMENTO_VEICULO_SALDO_DEVEDOR'), 
            'DIVIDA_EMPRESTIMO_SALDO_DEVEDOR'                   => $this->request->getPost('DIVIDA_EMPRESTIMO_SALDO_DEVEDOR'),
            'DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR'                => $this->request->getPost('DIVIDA_CARTAO_FATURA_SALDO_DEVEDOR'),            

            'BENS_VALOR_MERCADO_IMOVEL'                         => $this->request->getPost('BENS_VALOR_MERCADO_IMOVEL'),
            'BENS_VALOR_MERCADO_IMOVEL_ALUGADO'                 => $this->request->getPost('BENS_VALOR_MERCADO_IMOVEL_ALUGADO'),
            'BENS_VALOR_MERCADO_IMOVEL_VERAO'                   => $this->request->getPost('BENS_VALOR_MERCADO_IMOVEL_VERAO'),
            'BENS_VALOR_MERCADO_VEICULOS'                       => $this->request->getPost('BENS_VALOR_MERCADO_VEICULOS'),
            'BENS_VALOR_MERCADO_EMPRESAS'                       => $this->request->getPost('BENS_VALOR_MERCADO_EMPRESAS'),

            'PROTECAO_PREVIDENCIA_PRIVADA_MENSAL'               => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_MENSAL'),
            'PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO'      => $this->request->getPost('PROTECAO_PREVIDENCIA_PRIVADA_SALDO_ACUMULADO'),
            'PROTECAO_FUNDO_GARANTIA_VALOR'                     => $this->request->getPost('PROTECAO_FUNDO_GARANTIA_VALOR'),

            'OBJETIVO_RENDA_MENSAL'                             => $this->request->getPost('OBJETIVO_RENDA_MENSAL'),
            'OBJETIVO_IDADE_PRETENDIDA'                         => $this->request->getPost('OBJETIVO_IDADE_PRETENDIDA'),
            'OBJETIVO_ANO_REALIZACAO'                           => $this->request->getPost('OBJETIVO_ANO_REALIZACAO'),
            'OBJETIVO_VALOR'                                    => $this->request->getPost('OBJETIVO_VALOR'),
             
            
        ];        
    
        $clienteFormulario = new ClienteFormularioModel();
    
        // Atualizar os dados do formulário ...
        $clienteFormulario->update($pk, $formData);        
    
        try {
            $this->updateAll();
            return redirect()->to('Autenticacao/admin')->with('success', 'Todos os dados foram atualizados com sucesso.');
        } catch (\Exception $e) {
            return redirect()->to('Autenticacao/admin')->with('error', 'Ocorreu um erro ao atualizar os dados: ' . $e->getMessage());
        }
    }

        
    

    public function updateResultado($pk = null){
    if (!$pk) {

        return redirect()->back()->with('error', 'ID inválido.');
    }

    $resultadoData = [ 
 
        'INDICE_POUPANCA'                                   => $this->request->getPost('INDICE_POUPANCA'),
        'INDICE_LIQUIDEZ_CORRENTE'                          => $this->request->getPost('INDICE_LIQUIDEZ_CORRENTE'),
        'INDICE_ENDIVIDAMENTO'                              => $this->request->getPost('INDICE_ENDIVIDAMENTO'),
        'INDICE_COBERTURA'                                  => $this->request->getPost('INDICE_COBERTURA'),
        'PATRIMONIO_LIQUIDO'                                => $this->request->getPost('PATRIMONIO_LIQUIDO'),
        'DIVIDAS_TOTAIS'                                    => $this->request->getPost('DIVIDAS_TOTAIS'),
        'DESPESA_TOTAL'                                     => $this->request->getPost('DESPESA_TOTAL'),
        'PATRIMONIO_IMOBILIZADO'                            => $this->request->getPost('PATRIMONIO_IMOBILIZADO'),   
    
    ];

    $clienteResultado = new ClienteResultadoModel();
    $clienteResultado->update($pk, $resultadoData);

    return redirect()->to('Autenticacao/admin')->with('success', 'Dados de despesas atualizados com sucesso.');
    

    }

    public function excluir($pk = null)
    {
        $db = \Config\Database::connect();

        $query = $db->table('CLIENTES_RESULTADOS')->select('CLIENTE_FORMULARIO_FK')->where('PK', $pk)->get();
        $result = $query->getRow();

        if ($result) {
            $cliente_formulario_fk = $result->CLIENTE_FORMULARIO_FK;

            $db->table('CLIENTES_FORMULARIO')->where('PK', $cliente_formulario_fk)->delete();    

            if ($db->affectedRows() > 0) {
                echo "<script>
                        alert('Registro com PK = $cliente_formulario_fk deletado com sucesso!');
                        window.history.back(); // Isso retorna o usuário para a página anterior.
                      </script>";
            } else {
                echo "<script>
                        alert('Erro: Não foi possível deletar o registro com PK = $cliente_formulario_fk. Erro detalhado: " . $db->error() . "');
                        window.history.back(); // Isso retorna o usuário para a página anterior.
                      </script>";
            }
            
        
        }
    }   
    
    public function downloadReceita($pk = null)
{
    if (!$pk) {
        return redirect()->back()->with('error', 'ID inválido.');
    }

    $clienteFormulario = new ClienteFormularioModel();
    $formulario = $clienteFormulario->find($pk);

    if (!$formulario) {
        return redirect()->back()->with('error', 'Formulário não encontrado.');
    }

    // Construa o caminho absoluto
    $filePath = WRITEPATH . $formulario['RECEITA_APLICACOES_ARQUIVO'];

    // Verifica se o arquivo existe
    if (file_exists($filePath)) {
        // Força o download do arquivo
        return $this->response->download($filePath, null);
    } else {
        // Exibe uma mensagem de erro ou redireciona se o arquivo não existir
        return redirect()->to('/erro');
    }
}
    
    public function downloadApolice($pk = null)
    {
        if (!$pk) {
            return redirect()->back()->with('error', 'ID inválido.');
        }

        $clienteFormulario = new ClienteFormularioModel();
        $formulario = $clienteFormulario->find($pk);

        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulário não encontrado.');
        }

        // Construa o caminho absoluto
        $filePath = WRITEPATH . $formulario['PROTECAO_APOLICE_SEGURO_ARQUIVO'];

        // Verifica se o arquivo existe
        if (file_exists($filePath)) {
            // Força o download do arquivo
            return $this->response->download($filePath, null);
        } else {
            // Exibe uma mensagem de erro ou redireciona se o arquivo não existir
            return redirect()->to('/erro');
        }
    }
    
    public function downloadPrevidencia($pk = null)
    {
        if (!$pk) {
            return redirect()->back()->with('error', 'ID inválido.');
        }
    
        $clienteFormulario = new ClienteFormularioModel();
        $formulario = $clienteFormulario->find($pk);
    
        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulário não encontrado.');
        }
    
        // Construa o caminho absoluto
        $filePath = WRITEPATH . $formulario['PROTECAO_PREVIDENCIA_EXTRATO_ARQUIVO'];
    
        // Verifica se o arquivo existe
        if (file_exists($filePath)) {
            // Força o download do arquivo
            return $this->response->download($filePath, null);
        } else {
            // Exibe uma mensagem de erro ou redireciona se o arquivo não existir
            return redirect()->to('/erro');
        }
    }
    
}


