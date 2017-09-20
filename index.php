<?php
spl_autoload_register(function ($class_name) {
    include $_SERVER['DOCUMENT_ROOT'].'/class/'.$class_name.'.php';
});

//$page_header=new PageHeader('Проект Автолоад');
$arr_top_menu=['#'=>'Ссылка 1','##'=>'Ссылка 2','###'=>'Ссылка 3'];
$page_header=new PageHeaderDashboard('Проект Автолоад',$arr_top_menu);
echo $page_header;

//$a=new Hello('Timrrrrr');
//$a->getName();
//echo $a;
//var_dump($a);

  $b=new GenerateFindForm([1,2,2,3,4,3.4,]);
  $b->set(['url_action'=>'###']);
  $b->get();


//$f=new Finish();
//echo $f->finish();

//new HtmlSimpleClosedTag('p','kcnmxmcmnx','h1 text-center');
//echo $h;
//$page_footer=new PageFooter();
$page_footer=new PageFooterDashboard();
