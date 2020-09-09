<?php

class Blog_model extends CI_Model
{
    public function getBlogs()
    {
        return $this->db->get('blog');
    }

    public function getBlog($field, $value)
    {
        $this->db->WHERE($field, $value);
        return $this->db->get('blog');
    }

    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }

    public function updateBlog($id, $post)
    {
        $this->db->where('id', $id);
        $this->db->update('blog', $post);
        return $this->db->affected_rows();
    }
}
