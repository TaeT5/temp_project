<?php
class PageHeader{
  public $title_site='Тестовый сайт';
  public function __construct($title_site)
  {
    $this->title_site=$title_site;
  }
  public function __toString(){
    return '<!DOCTYPE html>
      <html lang="ru">
      <head>
      <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="/favicon.ico" />

    <title>'.$this->title_site.'</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet" />



    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!--<link rel="shortcut icon" href="assets/ico/favicon.ico" />-->
</head>
<body>
  <div class="container">
  <div class="row">
        <div class="col-lg-10 col-lg-offset-1">';
}
}
