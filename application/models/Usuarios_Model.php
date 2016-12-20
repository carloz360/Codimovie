<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Usuarios_Model extends CI_Model
{
    public function login_user($username, $password)
    {
        $this->db->where('usuario_usuario', $username);
        $this->db->where('usuario_password', $password);

        $query = $this->db->get('usuarios');

        return $query->first_row('array');
    }
}
