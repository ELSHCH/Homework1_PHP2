<?php
  require __DIR__ './../functions/file.php';
  require __DIR__ './../functions/numbnews.php';
  require __DIR__ './models/changedb.php';
  $ind_news=0;
   if (!empty($_POST)) {
       $data =[];
       if (!empty($_POST['title'])){
           $data['title']=$_POST['title'];
       }
       if (!empty($_POST['newscontent'])){
           $data['newscontent']=$_POST['newscontent'];
       }
       $data['datenews']=date('Y.m.d');
       $data['timecreate']=time();
       $ind_news=numnews('./news');
       $data['path']='./../news/news'+'$ind_news'+'.html';
       add_news($data);
       get_news();
   }
?>