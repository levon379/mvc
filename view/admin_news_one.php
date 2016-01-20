<?php
$data = $params['news']['data'];
//var_dump($params);die;
//require_once  'header.php';
?>
<?php // foreach($params['news']['data'] as $data){
?>
<form action="http://localhost/mvc/index.php/admin/news_one_edit" method="post" enctype="multipart/form-data">
<div style="margin-left:100px;">
    <input type="text" value="<?= $data['news_title']; ?>" name="news_title"/>
    
    <div style="width:140px;height:140px">
        <img width="140" height="140" src="<?php echo MVC_BASE_PATH . 'view/img/' . $data['news_photo_name']; ?>"/>
    </div> <br>
    <input type ="file" name="file"><br />
    <div><textarea cols ="30" rows="10" name="news_text"><?= $data['news_text']; ?></textarea></div>
    <div style="clear:both"></div>
</div>
<input  style="float:left;margin-top:30px;margin-left: 20px;" type="submit" value="Send mail"/>
</form>
<?php // } ?>
<?php // require_once  'footer.php'; ?>



<!--<form action="/" method="post">
<textarea cols ="30" rows="10" name="send_text">  </textarea><br />
    <input  style="float:left;margin-top:30px" type="text" name="author_name" size="21"/>
    <input  style="float:left;margin-top:30px;margin-left: 20px;" type="submit" value="Send mail"/>
</form>-->