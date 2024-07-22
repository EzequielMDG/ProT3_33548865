<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'email','usuario', 'pass', 'perfil_id', 'baja', 'created_at'];

    public function getUsuarios() {
        return $this->findAll();
    }

    public function crear($dato) {
        return $this->save($dato);
    }
}