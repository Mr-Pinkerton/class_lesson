<?php

class Page
{
    public string $title       = '';
    public string $description = '';
    public string $text        = '';
    public string $htmlTemplateName = '';
    public array $templateData = [];
    public function renderHtml(): void
    {
        $page = $this;
        $templateData = $this->templateData;
        include_once('resources/html/pages/' . $this->htmlTemplateName . '.php');
    }
}