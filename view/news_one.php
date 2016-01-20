<?php 
$data = $params['news']['data'];
//var_dump($params);die;
//require_once  'header.php';
?>
<?php // foreach($params['news']['data'] as $data){
     
    ?>

<div style="margin-left:100px;">
    <h2><?=$data['news_title'];?></h2>
    <div style="float:left;width:140px;height:140px"> <img width="140" height="140" src="<?php echo MVC_BASE_PATH.'view/img/'.$data['news_photo_name'];?>"/></div>
    <div style="float:left;width:50%;height50px"><span><?=$data['news_text'];?></span></div>
    <div style="clear:both"></div>
</div>
<?php // } ?>
                    <?php // require_once  'footer.php'; ?>