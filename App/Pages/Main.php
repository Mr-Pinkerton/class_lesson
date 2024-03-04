<?php 

class Main extends Page
{
    public function __construct()
    {
        $this->title = 'Main Page';
        $this->description = 'Main Page descr';
        $this->text = '';
        $this->htmlTemplateName = 'main';
    }
}