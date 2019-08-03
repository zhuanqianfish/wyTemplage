<?php
    require 'wy\Template.php';
    
    $a = 'var a';
    $arr = ['a','b','c'];
    $t = new \wy\Template();

    $t->assign('a', $a);
    $t->assign('arr', $arr);
    $t->fetch('demoTpl.html');
?>