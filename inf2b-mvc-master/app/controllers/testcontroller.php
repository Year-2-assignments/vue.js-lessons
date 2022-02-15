<?php
namespace Controllers;

class TestController
{

    public function index()
    {
        echo "dit komt uit de testcontroller";
    }

    public function about()
    {
        require __DIR__ . '/../views/home/about.php';
    }
}
