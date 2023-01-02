<?php
class ArticleModel extends CI_Model
{
    private $_table = 'tb_article';

    public function getPublished($limit = null, $offset = null)
    {
        if (!$limit && $offset) {
            $query = $this->db->get_where($this->_table, ['draft' => 'false']);
        } else {
            $query = $this->db->get_where($this->_table, ['draft' => 'false'], $limit, $offset);
        }
        return $query->result();
    }

    public function findBySlug($slug)
    {
        if (!$slug) {
            return;
        }
        $query = $this->db->get_where($this->_table, ['slug' => $slug]);
        return $query->row();
    }
}
