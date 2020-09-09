<?php

class Blog_model extends CI_Model
{
    public function getBlogs()
    {
        $filter = $this->input->get('find');
        $this->db->LIKE('title', $filter);
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
        $this->db->WHERE('id', $id);
        $this->db->update('blog', $post);
        return $this->db->affected_rows();
    }

    public function deleteBlog($id)
    {
        $this->db->WHERE('id', $id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }
}
