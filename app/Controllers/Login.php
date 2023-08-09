<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\ClienteDespesaPersonalizadaModel;
use App\Models\ClienteFormularioModel;
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
        
        echo view('administrate.php');
        
    }
}