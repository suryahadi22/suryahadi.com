<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

    private $db_table = 'category';
    
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->helper('slug_helper');
        $this->load->model('Master_model', 'master');
    }

    public function index()
    {
        $this->load->library('pagination');
        
        $config['base_url'] = base_url('admin/category/');
        $config['total_rows'] = $this->master->get($this->db_table)->num_rows();
        $config['per_page'] = 10;
        $config['offset'] = $this->uri->segment(3);
        
        $config['first_link'] = false;
        $config['last_link'] = false;
        
        $config['attributes'] = array('class' => 'page-link');
        
        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] = '</ul>';
        
        $config['num_tag_open'] = '<ul class="pagination pagination-sm m-0 float-right">';
        $config['num_tag_close'] = '</ul>';
        
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        
        $this->pagination->initialize($config);

        $category = $this->master->get_pagination($this->db_table, $config['per_page'], $config['offset'], 'id_category')->result();
        
        $data['title'] = 'Kategori';
        $data['category'] = $category;
        
        $data['content'] = $this->load->view('admin/content/category/index', $data, true);
        
        $this->load->view('admin/layout', $data);
    }

    public function add()
    {
        if ($this->input->post('submit') == 'addCategory') {
            $this->form_validation->set_rules('category_name', 'Nama Kategori', 'required');
            $this->form_validation->set_rules('category_description', 'Deskripsi', 'required');
            $this->form_validation->set_message('required', "
                <script>
                    Swal.fire({
                    title: 'Gagal!',
                    text: '%s harus diisi',
                    type: 'warning',
                    confirmButtonText: 'Oke'
                    })
                </script>
            ");

            if ($this->form_validation->run() === true) {
                $data = array (
                    'category_name' => $this->input->post('category_name'),
                    'category_slug' => slug($this->input->post('category_name')),
                    'category_description' => $this->input->post('category_description'),
                    'created_at' => now()
                );

                $query = $this->master->insert($this->db_table, $data);

                if ($query) $message = array('status' => true, 'message' => "
                <script>
                    Swal.fire({
                    title: 'Sukses!',
                    text: 'Kategori berhasil ditambahkan',
                    type: 'success',
                    confirmButtonText: 'Oke'
                    })
                </script>
                ");
                else $message = array('status' => true, 'message' => "
                <script>
                    Swal.fire({
                    title: 'Gagal!',
                    text: 'Kategori gagal ditambahkan',
                    type: 'error',
                    confirmButtonText: 'Oke'
                    })
                </script>
                ");

                $this->session->set_flashdata('message', $message['message']);

                redirect('admin/category');
            }
        }

        $data['title'] = 'Tambah Kategori';
        $data['content'] = $this->load->view('admin/content/category/add', $data, true);

        $this->load->view('admin/layout', $data);
    }

    public function edit()
    {
        $id = $this->encryption->decrypt($this->input->get('data-id'));

        if (!$id) die('data apa yang ingin anda ubah?');

        $category = $this->master->get_where($this->db_table, array('id_category' => $id))->row();

        if (!$category) show_404();

        if ($this->input->post('submit') == 'editCategory') {
            $this->form_validation->set_rules('category_name', 'Nama Kategori', 'required');
            $this->form_validation->set_rules('category_description', 'Deskripsi', 'required');
            $this->form_validation->set_message('required', "
                <script>
                    Swal.fire({
                    title: 'Gagal!',
                    text: '%s harus diisi',
                    type: 'warning',
                    confirmButtonText: 'Oke'
                    })
                </script>
            ");

            if ($this->form_validation->run() === true) {
                $data = array (
                    'category_name' => $this->input->post('category_name'),
                    'category_description' => $this->input->post('category_description'),
                    'updated_at' => now()
                );

                $query = $this->master->update($this->db_table, array('id_category' => $id), $data);

                if ($query) $message = array('status' => true, 'message' => "
                <script>
                    Swal.fire({
                    title: 'Sukses!',
                    text: 'Kategori berhasil diupdate',
                    type: 'success',
                    confirmButtonText: 'Oke'
                    })
                </script>
                ");
                else $message = array('status' => true, 'message' => "
                <script>
                    Swal.fire({
                    title: 'Gagal!',
                    text: 'Kategori gagal diupdate',
                    type: 'error',
                    confirmButtonText: 'Oke'
                    })
                </script>
                ");

                $this->session->set_flashdata('message', $message['message']);

                redirect('admin/category');
            }
        }

        $data['title'] = 'Edit Kategori';
        $data['category'] = $category;
        $data['content'] = $this->load->view('admin/content/category/edit', $data, true);

        $this->load->view('admin/layout', $data);
    }

    public function delete()
    {
        $id = $this->encryption->decrypt($this->input->get('data-id'));

        if (!$id) die('data apa yang ingin anda ubah?');

        $category = $this->master->get_where($this->db_table, array('id_category' => $id))->row();
        if (!$category) show_404();

        $query = $this->master->delete($this->db_table, array('id_category' => $id));

        if ($query) {
            $message = array('status' => true, 'message' => "
                <script>
                    Swal.fire({
                    title: 'Sukses!',
                    text: 'kategori berhasil dihapus',
                    type: 'success',
                    confirmButtonText: 'Oke'
                    })
                </script>
            ");
        } else {
            $message = array('status' => true, 'message' => "
                <script>
                    Swal.fire({
                    title: 'Gagal!',
                    text: 'kategori gagal dihapus',
                    type: 'error',
                    confirmButtonText: 'Oke'
                    })
                </script>
            ");
        }

        $this->session->set_flashdata('message', $message['message']);

        redirect('admin/category');
    }
}