<?php 
//var_dump($params['video']['data']);
//require_once  'header.php';
?>
<h1>Video</h1>
<?php foreach($params['video']['data'] as $data){ ?>

<div style="float:left;margin-left:30px;margin-top:30px;"> 
    <a href="<?php echo $data['url']; ?>">
    <img src="<?php echo $data['url_photo']; ?>" width="220" height="124" border="0">
</a>
    
<br>
<div style="float:left;margin-left:30px;margin-top:30px;"> 
    <a href="<?php echo $data['url']; ?>"> <?php echo $data['title']; ?>
       </a>
</div>
</div>

  

<?php } ?>
                    <?php // require_once  'footer.php'; ?>
