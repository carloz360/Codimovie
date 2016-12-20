<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peliculas_Model extends CI_Model
{
    public function listar_peliculas($arg1, $offset)
    {
        $this->db->select();
        $this->db->join('categorias', 'categorias.categoria_id = peliculas.categoria_id');
        $this->db->from('peliculas');
        $this->db->limit($arg1, $offset);
        $this->db->order_by('peliculas.pelicula_id', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    }
    public function count_peliculas()
    {
        $this->db->select();
        $this->db->from('peliculas');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function limit_peliculas()
    {
        $this->db->select();
        $this->db->join('categorias', 'categorias.categoria_id = peliculas.categoria_id');
        $this->db->from('peliculas');
        $this->db->limit(4);
        $this->db->order_by('peliculas.pelicula_id', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_pelicula($id)
    {
        $this->db->select();
        $this->db->from('peliculas');
        $this->db->where('pelicula_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function funcionImportante()
    {
        $valor = '<p>Copyright (c) 2016 <a href="http://codigero.com"><strong>Carlos Gonzalez</strong></a> All Rights Reserved.</p>';
        $estructura = $valor;
        return $estructura;
    }
    public function insert_pelicula($pelicula_imagen)
    {
        $data = array(
            'pelicula_titulo' => $this->input->post('pelicula_titulo', true),
            'pelicula_sinopsis' => $this->input->post('pelicula_sinopsis', true),
            'pelicula_caratula' => $pelicula_imagen,
            'pelicula_estreno' => $this->input->post('pelicula_estreno', true),
            'pelicula_puntuacion' => $this->input->post('pelicula_puntuacion', true),
            'pelicula_director' => $this->input->post('pelicula_director', true),
            'pelicula_duracion' => $this->input->post('pelicula_duracion', true),
            'pelicula_pais' => $this->input->post('pelicula_pais', true),
            'categoria_id' => $this->input->post('categoria_id', true),
            'pelicula_enlace' => $this->input->post('pelicula_enlace', true),
        );
        return $this->db->insert('peliculas', $data);
    }

    public function update_pelicula($pelicula_imagen, $id)
    {
        $data = array(
            'pelicula_titulo' => $this->input->post('pelicula_titulo', true),
            'pelicula_caratula' => $pelicula_imagen,
            'pelicula_sinopsis' => $this->input->post('pelicula_sinopsis', true),
            'pelicula_estreno' => $this->input->post('pelicula_estreno', true),
            'pelicula_puntuacion' => $this->input->post('pelicula_puntuacion', true),
            'pelicula_director' => $this->input->post('pelicula_director', true),
            'pelicula_duracion' => $this->input->post('pelicula_duracion', true),
            'pelicula_pais' => $this->input->post('pelicula_pais', true),
            'categoria_id' => $this->input->post('categoria_id', true),
            'pelicula_enlace' => $this->input->post('pelicula_enlace', true),
        );

        $this->db->where('pelicula_id', $id);
        $this->db->update('peliculas', $data);
    }

    public function delete_pelicula($id)
    {
        $this->db->where('pelicula_id', $id);
        $this->db->delete('peliculas');
    }

    public function search_pelicula($query)
    {
        $this->db->select();
        $this->db->from('peliculas');
        $this->db->join('categorias', 'categorias.categoria_id = peliculas.categoria_id');
        $this->db->like("pelicula_titulo", $query, 'both');
        $this->db->order_by('peliculas.pelicula_id', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function peliculaPorCategoria($categoriaId)
    {
        $this->db->where('categoria_id', $categoriaId);
        //$this->db->join('categorias', 'categorias.categoria_id = peliculas.categoria_id');
        $query = $this->db->get('peliculas');
        return $query->result_array();
    }
}
