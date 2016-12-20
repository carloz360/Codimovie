<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Categorias_Model extends CI_model
{
    public function count_categorias()
    {
        $this->db->select();
        $this->db->from('categorias');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function listar_categorias($por_paginas, $offset)
    {
        $this->db->select();
        $this->db->from('categorias');
        $this->db->limit($por_paginas, $offset);
        $this->db->order_by('categoria_id', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_categorias()
    {
        $this->db->select();
        $this->db->from('categorias');
        $this->db->limit(4);
        $this->db->order_by('categoria_id', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_categoria()
    {
        $data = array(
            'categoria_nombre' => $this->input->post('categoria_nombre', true),
            'categoria_descripcion' => $this->input->post('categoria_descripcion', true),
        );
        return $this->db->insert('categorias', $data);
    }

    public function search_categoria($query)
    {
        $this->db->select();
        $this->db->from('categorias');
        $this->db->like('categoria_nombre', $query);
        $this->db->order_by('categoria_id', 'desc');

        $result = $this->db->get();
        return $result->result_array();
    }

    public function get_categoria_por_id($id)
    {
        $this->db->select();
        $this->db->from('categorias');
        $this->db->where('categoria_id', $id);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_categoria($id)
    {
        $data = array(
            'categoria_nombre' => $this->input->post('categoria_nombre', true),
            'categoria_descripcion' => $this->input->post('categoria_descripcion', true),
        );
        $this->db->where('categoria_id', $id);
        $this->db->update('categorias', $data);
    }

    public function delete_categoria($id)
    {
        $this->db->where('categoria_id', $id);
        $this->db->delete('categorias');
    }

    public function pelicula_categoria()
    {
        $this->db->order_by('categoria_nombre');
        $query = $this->db->get('categorias');
        return $query->result_array();
    }

    public function categoriaId($id)
    {
        $this->db->select();
        $this->db->from('categorias');
        $this->db->where('categoria_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }


}
