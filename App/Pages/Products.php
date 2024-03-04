<?php

class Products extends Page
{
    public function __construct()
    {
        $this->title = 'Products Page';
        $this->description = 'Products Page descr';
        $this->text = '';
        $this->htmlTemplateName = 'products';

        include_once('App/Models/ProductModel.php');
        $productModel = new ProductModel();

        $this->templateData['products'] = $productModel->getAllProducts();

    }
}