<?php

class Product extends Page
{
    public function __construct()
    {
        $this->title = 'Product Page';
        $this->description = 'Product Page descr';
        $this->text = '';
        $this->htmlTemplateName = 'product';
    }
}