<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    public function index()
    {
        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();

        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        $query = $this->Blog_model->getBlog('url', $url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data['title'] = $this->input->post('title');
            $data['url'] = $this->input->post('url');
            $data['content'] = $this->input->post('content');

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('cover')) {
                echo $this->upload->display_errors();
            } else {
                $data['cover'] = $this->upload->data('file_name');
            }

            $id = $this->Blog_model->insertBlog($data);

            if ($id) {
                echo "Data berhasil disimpan";
                redirect('/');
            } else {
                echo "Data gagal disimpan";
            }
        }

        $this->load->view('form_add');
    }

    public function edit($id)
    {
        $query = $this->Blog_model->getBlog('id', $id);
        $data['blog'] = $query->row_array();

        if ($this->input->post()) {
            $post['title'] = $this->input->post('title');
            $post['url'] = $this->input->post('url');
            $post['content'] = $this->input->post('content');
            $id = $this->Blog_model->updateBlog($id, $post);

            if ($id) {
                echo "Data berhasil disimpan";
            } else {
                echo "Data gagal disimpan";
            }
        }

        $this->load->view('form_edit', $data);
    }

    public function delete($id)
    {
        $this->Blog_model->deleteBlog($id);
        redirect('/');
    }
}
