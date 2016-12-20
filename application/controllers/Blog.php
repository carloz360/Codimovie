<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peliculas_Model');
        $this->load->model('Categorias_Model');
    }

    public function index($offset=0)
    {
        $data['page_title'] = "Cineplus";
        $data['categorias'] = $this->Categorias_Model->pelicula_categoria();

        $por_pagina = 12;
        $total_rows = $this->Peliculas_Model->count_peliculas();

        $config['base_url'] = base_url() . 'blog/index';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $por_pagina;

        $config['attributes'] = array('class' => 'page-link');
        $config['first_link'] = 'primero';
        $config['next_link'] = 'siguiente';
        $config['prev_link'] = 'anterior';
        $config['last_link'] = 'ultimo';

        $config['full_tag_open'] = '<u class="pagination ci-p">';

        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link"><strong>';
        $config['cur_tag_close'] = '</li></strong></a>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';


        $config['full_tag_close'] = '</u>';

        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links();

        $data['peliculas'] = $this->Peliculas_Model->listar_peliculas($config['per_page'], $offset);

        $this->load->view('blog/layouts/header', $data);
        $this->load->view('blog/modules/home', $data);
        $this->load->view('blog/layouts/footer');
    }

    public function pelicula($id=null)
    {
        $data['categorias'] = $this->Categorias_Model->pelicula_categoria();
        $data['page_title'] = 'Pelicula';
        $data['pelicula'] = $this->Peliculas_Model->get_pelicula($id);
        if (sizeof($data['pelicula']) == 0) {
            show_404();
        }
        $this->load->view('blog/layouts/header', $data);
        $this->load->view('blog/modules/pelicula', $data);
        $this->load->view('blog/layouts/footer');
    }

    public function buscar($query=null)
    {
        $query = trim($this->input->get('query', true));
        if (!$query) {
            show_404();
        }
        $data['page_title'] = 'Buscar';
        $data['query'] = $query;
        $data['peliculas'] = $this->Peliculas_Model->search_pelicula($query);
        $data['categorias'] = $this->Categorias_Model->pelicula_categoria();

        $this->load->view('blog/layouts/header', $data);
        $this->load->view('blog/modules/buscar', $data);
        $this->load->view('blog/layouts/footer');
    }

    public function categoria($id)
    {
        $data['page_title'] = 'Categoria';
        $data['page'] = 'Pelicula/Categoria';
        $data['tag'] = $this->Categorias_Model->categoriaId($id);
        $data['categorias'] = $this->Categorias_Model->pelicula_categoria();
        $data['peliculas'] = $this->Peliculas_Model->peliculaPorCategoria($id);

        $this->load->view('blog/layouts/header', $data);
        $this->load->view('blog/modules/categoria', $data);
        $this->load->view('blog/layouts/footer');
    }
}
