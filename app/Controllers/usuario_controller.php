<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller {
    public function __construct(){
        helper(['form','url']);
    }

    public function formValidation()
    {   
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]max_length[10]',
        ],
    );
    $formModel = new usuario_Model();
        if ($input) {
            $data['titulo']='Registro';
            echo view('front/head',$data);
            echo view('front/navbar');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer');
        }else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('success', 'Usuario registrado con éxito');
            return $this->response->redirect('login');
        }

    } 

    public function usuarios()
    {
        $model = new usuario_Model();
        $datos = $model->getUsuarios();

        $data['titulo']='Usuarios';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('back/usuario/usuarios', compact('datos'));
        echo view('front/footer');
    }

    public function registro()
    { 
        $data['titulo']='Registro';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }

    public function store()
    {
        if($_POST) {
            // print_r($_POST);exit;

            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'email' => $_POST['email'], 
                'usuario' => $_POST['usuario'], 
                'pass' => $_POST['pass'], 
            ];

            $model = new usuario_Model();
            $model->crear($datos);
        }  
    }
 
}