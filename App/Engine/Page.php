<?php

class Page
{
    public string $title       = '';
    public string $description = '';
    public string $text        = '';
    public string $htmlTemplateName = '';

    public function renderHtml(): void
    {
        $page = $this;
        include_once('resources/html/pages/' . $this->htmlTemplateName . '.php');
    }
}