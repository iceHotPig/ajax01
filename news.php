
<?php

  header('content-type:text/html;charset="utf-8"');
  error_reporting(0);

  $news = array(
   array('titile' => '小偷凌晨撬开彩票店门“顺走”两万多元彩票' , 'data' => '2017-6-29' ),
   array('titile' => '
小伙被火车撞成重伤寻亲后续 父亲曾到过医院' , 'data' => '2017-6-29' ),
   array('titile' => '七旬大爷不满小孩占＂爱心专座＂ 骂停地铁' , 'data' => '2017-6-29' ),
   array('titile' => '茅台酒厂招300人引30万人报名 热度堪比国考' , 'data' => '2017-6-29' ),
  );


  echo json_encode($news);