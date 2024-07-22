<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Panel_controller extends Controller 
{
    public function index () {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('id_perfiles');

        $data['id_perfiles']=$perfil;

        $dato ['titulo'] = 'Panel del usuario';
        echo view('front/head',$dato);
        echo view('front/navbar');
        echo view('back/usuario/usuario_logueado',$data);
        echo view('front/footer');
    }
}