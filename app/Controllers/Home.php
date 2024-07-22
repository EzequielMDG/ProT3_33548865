<?php

namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;


class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Página Principal';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }
    public function quienes_somos()
    {
        $data['titulo']='Quienes Somos';
        echo view('front/head', $data); 
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    public function acerca_de()
    {
        $data['titulo']='Acerca de';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('front/acerca_de');
        echo view('front/footer');
    }
    public function catalogo()
    {
        $data['titulo']='Acerca de';
        echo view('front/head', $data);
        echo view('front/navbar');
        echo view('front/catalogo');
        echo view('front/footer');
    }   
   
}
