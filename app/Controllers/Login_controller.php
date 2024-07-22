<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class Login_controller extends BaseController
{
    public function index() {
        helper(['form', 'url']);
        
        $dato ['titulo'] = 'Login';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function auth() {
        $session = session();
        $model = new usuario_Model();

        // traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('login');
            }

            $verify_pass = password_verify($password, $pass);

            if($verify_pass){
                $ses_data = [
                    'id' => $data['id'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'], 
                    'perfil_id' => $data['perfil_id'], 
                    'logged_in' => TRUE 
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('panel');
            
            }
            else {
                $session->setFlashdata('msg','password incorrecta');
                return redirect()->to('login');
            }
        }
        else {
            $session->setFlashdata('msg','No existe el email o es incorrecto');
            return redirect()->to('login');
        }

    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}