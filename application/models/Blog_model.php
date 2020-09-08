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
}
