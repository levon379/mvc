<?php 
//die('aa');
//var_dump($params['bio']['data']);
//require_once  'header.php';
$data =$params['bio']['data'];
?>
<h1>Biography</h1>


<div style="clear:both;margin-top:30px"></div>
<div style="float:left;"><img src="<?php echo MVC_BASE_PATH.'/img/'.$data['bio_photo_name']; ?>" width="150" height="150"></div>
<div style="float:left;margin-left:30px;">
   <?php echo $data['bio_text']; ?> 
  
</div>
<div style="clear:both;margin-top:30px"></div>

                    <?php // require_once  'footer.php'; ?>