<?php /*a:1:{s:6:"a.html";i:1564820282;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>varable a: <?php echo htmlentities($a); ?></p>
    <ul>
        <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><a href="#"><?php echo htmlentities($vo); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

    <p>
        <?php if(1 == 1): ?>
        'if' tag is checked;
        <?php endif; ?>
    </p>
    
</body>
</html>