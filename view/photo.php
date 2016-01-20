<?php 
//die('aa');
//var_dump($params['photo']['data']);
//$data =$params['photo']['data'];
//require_once  'header.php';
?>
<h1>Photo</h1>
<?php for($i=0;$i<count($params['photo']['data']);$i++): ?>
<div style="float:left;margin-left:30px;margin-top:30px;"> 
    <img src="<?php echo MVC_BASE_PATH.'/view/img/'.$params['photo']['data']['photo_name']; ?>" width="220" height="124" />
</div>

  

<?php endfor; ?>
                 <?php // require_once  'footer.php'; ?>