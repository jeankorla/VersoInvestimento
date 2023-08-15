<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\ClienteDespesaPersonalizadaModel;
use App\Models\ClienteFormularioModel;
use App\Models\ClienteResultadoModel;
use CodeIgniter\Controller;


class Login extends BaseController
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
            return redirect()->to('Login/admin');
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

        $clienteFormulario = new ClienteFormularioModel();
        $clienteResultado = new ClienteResultadoModel();

        $formularios = $clienteFormulario->findAll();
        $resultados = $clienteResultado->findAll();

         // Fazendo a mesclagem. Exemplo simplificado:
        $data = [];
        foreach ($formularios as $formulario) {
    foreach ($resultados as $resultado) {
       if ($formulario['PK'] == $resultado['CLIENTE_FORMULARIO_FK']) {
            $mergedData = array_merge($resultado, $formulario);
            $mergedData['PK'] = $formulario['PK']; // Garantindo que o 'PK' é o de CLIENTES_FORMULARIO
            $data[] = $mergedData;
        }
    }
}
        
        echo view('administrate.php', ['data' => $data]);
        
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

    private function mergeData()
    {
        $clienteFormulario = new ClienteFormularioModel();
        $clienteResultado = new ClienteResultadoModel();

        $formularios = $clienteFormulario->findAll();
        $resultados = $clienteResultado->findAll();

        $data = [];
        foreach ($formularios as $formulario) {
            foreach ($resultados as $resultado) {
                if ($formulario['PK'] == $resultado['CLIENTE_FORMULARIO_FK']) {
                    $mergedData = array_merge($resultado, $formulario);
                    $mergedData['PK'] = $formulario['PK'];
                    $data[] = $mergedData;
                }
            }
        }

        return $data;
    }
}
