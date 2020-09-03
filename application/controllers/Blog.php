<?php

class Blog extends CI_Controller
{
    public function index()
    {
        $this->load->database();

        $query = $this->db->query("SELECT * FROM blog");
        $data['blogs'] = $query->result_array();

        // $data['blogs'] = [
        //     [
        //         'title' => 'Artikel Pertama',
        //         'content' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, modi dicta aperiam dignissimos consequatur placeat impedit est libero minus asperiores fugiat quibusdam. Praesentium corporis eos adipisci quos sed doloribus porro.</p>'
        //     ],
        //     [
        //         'title' => 'Artikel Kedua',
        //         'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, tempora rem! Dolore modi magni, velit, maxime minus ipsum sit quisquam magnam non, at odio! Officia culpa cupiditate iusto. Quos, est?.</p>'
        //     ],
        //     [
        //         'title' => 'Artikel Ketiga',
        //         'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore magni expedita delectus esse, molestias explicabo sed officia quis placeat praesentium beatae natus quod dolor quibusdam, illo aut voluptatum sit consectetur?.</p>'
        //     ]
        // ];

        $this->load->view('blog', $data);
    }
}
