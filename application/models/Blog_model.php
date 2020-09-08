<?php

class Blog_model extends CI_Model
{
    public function getBlogs()
    {
        return $this->db->get('blog');
    }

    public function getBlog($url)
    {
        $this->db->WHERE('url', $url);
        return $this->db->get('blog');
    }

    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }
}
