<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peliculas_Model');
        $this->load->model('Categorias_Model');
        $this->load->model('Usuarios_Model');
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['page_title'] = "admin";
        $data['peliculas'] = $this->Peliculas_Model->limit_peliculas();
        $data['categorias'] = $this->Categorias_Model->get_categorias();
        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/home', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function agregar_pelicula()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['error'] = null;
        $data['page_title'] = 'Agregar pelicula';
        $data['categorias'] = $this->Categorias_Model->pelicula_categoria();
        if ($this->input->post()) {
            $this->form_validation->set_rules('pelicula_titulo', 'Titulo', 'required');
            $this->form_validation->set_rules('pelicula_sinopsis', 'Sinopsis', 'required');
            $this->form_validation->set_rules('pelicula_estreno', 'Estreno', 'required');
            $this->form_validation->set_rules('pelicula_puntuacion', 'Puntuacion', 'required');
            $this->form_validation->set_rules('pelicula_director', 'Director', 'required');
            $this->form_validation->set_rules('pelicula_duracion', 'Duracion', 'required');
            $this->form_validation->set_rules('pelicula_pais', '', 'required');
            $this->form_validation->set_rules('categoria_id', 'Categoria', 'required');

            if ($this->form_validation->run() == false) {
                $data['error'] = "Todos los campos son requeridos! exepto el campo de enlace";
            } else {
                $config['upload_path'] = './public/img';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 20485;
                $config['max-width'] = 900;
                $config['max_height'] = 900;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $errors = array('error' => $this->upload->display_errors());
                    $pelicula_imagen = 'noimage.png';
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $pelicula_imagen = $_FILES['userfile']['name'];
                }


                $this->Peliculas_Model->insert_pelicula($pelicula_imagen);
                $this->session->set_flashdata('mensaje', 'Pelicula agregada correctamente');
                redirect(base_url() . 'admin');
            }
        }
        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/agregar_pelicula', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function peliculas($offset=0)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['page_title'] = "Peliculas";

        $por_pagina = 8;
        $total_rows = $this->Peliculas_Model->count_peliculas();

        $config['base_url'] = base_url() . 'admin/peliculas';
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



        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/peliculas', $data);
        $this->load->view('admin/layouts/footer');
    }
    //Estas son los metodos para las categorias :-)
    public function agregar_categoria()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['page_title'] = "Agregar categoria";
        $data['error'] = null;

        if ($this->input->post()) {
            $this->form_validation->set_rules('categoria_nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('categoria_descripcion', 'Descripcion', 'required');

            if ($this->form_validation->run() == false) {
                $data['error'] = "Todos los campos son requeridos";
            } else {
                $this->Categorias_Model->insert_categoria();
                $this->session->set_flashdata('mensaje', 'Categoria agregada correctamente');
                redirect(base_url() . 'admin');
            }
        }

        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/agregar_categoria', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function categorias($offset=0)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['page_title'] = 'Categorias';

        $por_paginas = 8;
        $total_rows = $this->Categorias_Model->count_categorias();

        $config['base_url'] = base_url() . 'admin/categorias';
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $por_paginas;

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

        $data['categorias'] = $this->Categorias_Model->listar_categorias($config['per_page'], $offset);

        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/categorias', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function buscar_pelicula($query='')
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['page_title'] = 'Buscar pelicula';

        $query = $query != '' ? $query :$this->input->get('query', true);

        if (sizeof($query) == 0) {
            show_404();
        } elseif ($query == '') {
            show_404();
        }

        $data['peliculas'] = $this->Peliculas_Model->search_pelicula($query);

        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/buscar_pelicula', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function buscar_categoria($query='')
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $data['page_title'] = 'Buscar categoria';

        $query = $query != '' ? $query :$this->input->get('query', true);

        if (sizeof($query) == 0) {
            show_404();
        } elseif ($query == '') {
            show_404();
        }

        $data['categorias'] = $this->Categorias_Model->search_categoria($query);

        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/buscar_categoria', $data);
        $this->load->view('admin/layouts/footer');
    }


    public function actualizar_pelicula($id=null)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }

        if (!$id) {
            show_404();
        }
        $data['page_title'] = 'actualizar pelicula';
        $datos['categorias'] = $this->Categorias_Model->pelicula_categoria();
        $datos['pelicula'] = $this->Peliculas_Model->get_pelicula($id);
        if (sizeof($datos['pelicula']) == 0) {
            show_404();
        }

        if ($this->input->post()) {
            $config['upload_path'] = './public/img';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 20485;
            $config['max-width'] = 900;
            $config['max_height'] = 900;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                $errors = array('error' => $this->upload->display_errors());
                $pelicula_imagen = 'noimage.png';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $pelicula_imagen = $_FILES['userfile']['name'];
            }

            $this->Peliculas_Model->update_pelicula($pelicula_imagen, $id);
            $this->session->set_flashdata('mensaje', 'La pelicula fue actualizada con exito');
            redirect(base_url() . 'admin');
        }
        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/actualizar_pelicula', $datos);
        $this->load->view('admin/layouts/footer');
    }

    public function eliminar_pelicula($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $this->Peliculas_Model->delete_pelicula($id);
        $this->session->set_flashdata('mensaje', 'Pelicula eliminada con exito');
        redirect(base_url() . 'admin');
    }

    public function actualizar_categoria($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        if (!$id) {
            show_404();
        }
        $data['page_title'] = 'Actualizar categoria';
        $datos['categoria'] = $this->Categorias_Model->get_categoria_por_id($id);
        if (sizeof($datos['categoria']) == 0) {
            show_404();
        }

        if ($this->input->post()) {
            $this->session->set_flashdata('mensaje', 'Categoria actualizada con exito');
            $this->Categorias_Model->update_categoria($id);
            redirect(base_url() . 'admin');
        }

        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/actualizar_categoria', $datos);
        $this->load->view('admin/layouts/footer');
    }

    public function eliminar_categoria($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url().'admin/login');
        }
        $this->Categorias_Model->delete_categoria($id);
        $this->session->set_flashdata('mensaje', 'Categoria eliminada con exito');
        redirect(base_url() . 'admin');
    }
    //Users_Model
    public function registro()
    {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'admin');
        }
        $data['page_title'] = 'Pagina registro';
        if ($this->input->post()) {
            # code...
        }
        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/registro');
        $this->load->view('admin/layouts/footer');
    }

    public function login()
    {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url().'admin');
        }
        $data['page_title'] = 'Pagina login';
        $data['error'] = '';
        if ($this->input->post()) {
            $username = $this->input->post('usuario_usuario', true);
            $password = $this->input->post('usuario_password', true);

            $user = $this->Usuarios_Model->login_user($username, $password);

            if (!$user) {
                $data['error'] = 'Mmm! username o password incorrectos';
            } else {
                $username_datos = array(
                    'usuario_id' => $username,
                    'usuario_usuario' => $username,
                    'logged_in' => true,
                );

                $this->session->set_userdata($username_datos);
                redirect(base_url()."admin");
            }
        }
        $this->load->view('admin/layouts/header', $data);
        $this->load->view('admin/modules/login', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function salir()
    {
        $this->session->sess_destroy();
        redirect(base_url().'admin/login');
    }
}
