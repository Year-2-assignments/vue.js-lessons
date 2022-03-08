<?php

namespace Controllers;

use Exception;
use Services\ProductService;

class ProductController extends Controller
{
    private $service;

    // initialize services
    function __construct()
    {
        $this->service = new ProductService();
    }

    public function getAll()
    {
        $offset = $_GET['offset'] ?? null;
        $limit = $_GET['limit'] ?? null;
        $products= $this->service->getAll($offset,$limit);
       
        $this->respond($products);
    }

    public function getOne($id)
    {
        $product = $this->service->getOne($id);

        // we might need some kind of error checking that returns a 404 if the product is not found in the DB
        $product 
            ? $this->respond($product) 
            : $this->respondWithError(404,"not found");
        // if(!$product)
        // {
        //     $this->respondWithError(404,"not found");
        // }
        // else{
        //     $this->respond($product);
        // }

        //$this->respond($product);
    }

    public function create()
    {
        try {
            $product = $this->createObjectFromPostedJson("Models\Product");

            //  update the product in the DB?
            $this->service->insert($product);

        } catch (Exception $e) {
            $this->respondWithError(500, $e->getMessage());
        }

        $this->respond($product);
    }

    public function update($id)
    {
        try {
            $product = $this->createObjectFromPostedJson("Models\Product");
            //  update the product in the DB?
            $this->service->update($product,$id);

        } catch (Exception $e) {
            $this->respondWithError(500, $e->getMessage());
        }

        $this->respond($product);
    } 

    public function delete($id)
    {
        try{
            $this->service->delete($id);
            

        } catch (Exception $e){
            
            $this->respondWithError(404, $e->getMessage());

        }
        
        
    }
}
