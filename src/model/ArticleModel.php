<?php

namespace Model;

use Entity\Article;

class ArticleModel extends Model
{
    public function getAll()
    {
        $sql = 'SELECT * FROM article';
        $query = $this->db->getConnection()->query($sql);
        $articlesArray = $query->fetchAll();

        return Article::hydrateAll($articlesArray);
    }
}