<?php 
//$data = $params['news']['data'][0];
//var_dump($params);die;
//require_once  'header.php';
?>
<?php foreach($params['news']['data'] as $data){
     
    ?>

<div>
    <h2><a href="<?php echo MVC_BASE_URL.'/news/news_one/'.$data['id'] ?>"><?=$data['news_title'];?></a></h2>
    <div style="float:left;width:40px;height:40px"> <img width="40" height="40" src="<?php echo MVC_BASE_PATH.'view/img/'.$data['news_photo_name'];?>"/></div>
    <div style="float:left;width:50%;height50px"><span><?=$data['news_text'];?></span></div>
    <div style="clear:both"></div>
</div>
<?php } ?>
                    <?php // require_once  'footer.php'; ?>