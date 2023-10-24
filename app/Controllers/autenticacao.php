<?php

namespace App\Controllers;

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
            return redirect()->to('/admin');
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
        $builder->join('CLIENTES_RESULTADOS', 'CLIENTES_FORMULARIO.PK = CLIENTES_RESULTADOS.PK');
        // qauery recebendo a data'
        $query = $builder->get();

        return $query->getResult();


    }

    public function gerar($pk = null)
    {
        if (!$pk) {
            return redirect()->back()->with('error', 'ID inválido.');
        }

        $clienteFormulario = new ClienteFormularioModel();
        $clienteResultado = new ClienteResultadoModel();

        $formulario = $clienteFormulario->where('PK', $pk)->first();
        $resultado = $clienteResultado->where('CLIENTE_FORMULARIO_FK', $pk)->first();

        if (!$formulario || !$resultado) {
            return redirect()->back()->with('error', 'Dados não encontrados.');
        }

        $data = array_merge($resultado, $formulario);
        $data['PK'] = $pk;

        return view('relatorio_view.php', ['data' => $data]);
    }

    public function edit($pk = null)
    {
        if (!$pk) {
            return redirect()->back()->with('error', 'ID inválido.');
        }
    
        $clienteFormulario = new ClienteFormularioModel();
        $clienteDespesas = new ClienteDespesaPersonalizadaModel();
    
        $formulario = $clienteFormulario->find($pk); 
        $despesas = $clienteDespesas->where('CLIENTE_FORMULARIO_FK', $pk)->findAll();
    
        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulário não encontrado.');
        }
    
        return view('edit.php', ['formulario' => $formulario, 'despesas' => $despesas]);
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
    
        // Atualizar as despesas      
        $clienteDespesas = new ClienteDespesaPersonalizadaModel();
        $despesasData = $this->request->getVar('DESPESA');

        
        if (is_array($despesasData) || is_object($despesasData)) {
            foreach ($despesasData as $despesaId => $valor) {
                $data = ['VALOR' => $valor]; 
                
                // Atualize a despesa
                $updated = $clienteDespesas->update($despesaId, $data);
                
                // echo "Nova despesa (ID: $despesaId) atualizada para: $valor<br>";

                $categoria = $this->request->getVar("CATEGORIA[$despesaId]");

                $categoriaData = ['CATEGORIA' => $categoria];

                $clienteDespesas->update($despesaId, $categoriaData);

                if (!$updated) {
                    // caso erro
                    $errorMessage = $clienteDespesas->error();

                    return redirect()->to('autenticacao/admin')->with('error', 'Erro ao atualizar despesas: ' . $errorMessage);
                }
            }

            return redirect()->to('autenticacao/admin')->with('success', 'Dados de despesas atualizados com sucesso.');

        } else {

            return redirect()->to('autenticacao/admin')->with('error', 'Nenhum dado de despesa foi enviado.');
            
        }
    }

   public function excluir($pk = null)
    {

        $clienteFormulario = new ClienteFormularioModel();
        $clienteDespesas = new ClienteDespesaPersonalizadaModel();


        // VERIFICACAO SE O FORMS EXISTE
        $formulario = $clienteFormulario->find($pk);

        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulário não encontrado.');
        }

        // DELETAR DESPESA
        $clienteDespesas->where('CLIENTE_FORMULARIO_FK', $pk)->delete();

        // EXCLUIR FORM
        $clienteFormulario->delete($pk);

        return redirect()->to('autenticacao/admin')->with('success', 'Formulário excluído com sucesso.');
    }
    
}