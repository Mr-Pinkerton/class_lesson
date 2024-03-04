<?php

class AboutUs extends Page
{
    public function __construct()
    {
        $this->title = 'About Us Page';
        $this->description = 'About Us Page descr';
        $this->text = '';
        $this->htmlTemplateName = 'about_us';
    }
}