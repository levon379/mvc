<?php 
//die('aa');
if(isset($_POST)){
    if(!empty($_POST['send_text'])&&!empty($_POST['author_name'])){
      $send_text =  $_POST['send_text'];
      $author_name =  $_POST['author_name'];
    }
}
$to = "levon37987@mail.ru";
$subject = "My subject";
$txt = "Hello world!";
$headers = 'From:' .$author_name.'com." . "\r\n" .
"CC: somebodyelse@example.com';

mail($to,$subject,$send_text,$headers);
$data = $params['contacts']['data'];
//var_dump($params['contacts']['data']);
//require_once  'header.php';
?>
<h1>Contacts</h1>

<button><a href ="http://facebook.com"> facebook</a></button>
<button><a href ="http://twitter.com"> twitter</a></button>
<div style="clear:both;margin-top:30px"></div>
<div style="float:left;"><img src="<?php echo MVC_BASE_PATH.'/img/'.$data['contacts_photo_name']; ?>" width="150" height="150"></div>
<div style="float:left;margin-left:30px;">
    phone :  <?php echo $data['phone']; ?> <br />
    mail :  <?php echo $data['contacts_mail']; ?> <br />
    addres :  <?php echo $data['addres']; ?> 
</div>
<div style="clear:both;margin-top:30px"></div>
<h1>uxxarkel namak</h1>
<form action="/" method="post">
<textarea cols ="30" rows="10" name="send_text">  </textarea><br />
<input  style="float:left;margin-top:30px" type="text" name="author_name" size="21"/>
<input  style="float:left;margin-top:30px;margin-left: 20px;" type="submit" value="Send mail"/>
</form>

                    <?php // require_once  'footer.php'; ?>