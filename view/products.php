<?php // echo '<pre>'; print_r($params);die;   ?>

<table  border="1" style="float:left">
    <thead >
        <tr>
            <td> name </td>
            <td> description </td> 
            <td> image </td> 
        </tr> 
    </thead>
    <tbody > 


        <?php
       if ($params['products']['status']==1){ 
        foreach ($params['products']['data'] as $product) {
            //    print_r($prodct);
            ?>
            <tr>
                <td> <a href=" <?php echo MVC_BASE_URL . 'product/product/' . $product['id']; ?>"><?php echo $product['name']; ?></a> </td>
                <td><?php echo $product['description']; ?></td> 
                <td> <img with="150" height="150"  src="<?php echo $product['image']; ?>" /> </td> 
            </tr>
            <?php
        }}else{
            echo $params['products']['status'];
            
        }
        ?>


        </tr> 
    </tbody>
</table>

<div style="float:right">
    <?php
  
        if ($params['categories']['status']==1){ 
    foreach ($params['categories']['data'] as $category) {
        //    print_r($prodct);
        ?>
        <div style="with:150px;height:20px"><a href="<?php echo MVC_BASE_URL . 'product/index/' . $category['id']; ?>"><?php echo $category['name']; ?></a></div>

        <?php
        }} else {
            echo $params['categories']['status'];
             
            
        }
    ?>
</div>
