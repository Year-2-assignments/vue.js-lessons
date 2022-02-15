<?php
namespace Services;

use Repositories\ArticleRepository;

class ArticleService {
    public function getAll() {
        $repository = new ArticleRepository();
        return $repository->getAll();
    }
}