<?php // echo '<pre>'; print_r($params);die; ?>

<table  border="1" style="float:left">
    <thead >
        <tr>
            <td> name </td>
            <td> description </td> 
            <td> date </td> 
            <td> delete </td> 
        </tr> 
    </thead>
    <tbody > 


        <?php
        if ($params['orders']['status']==1){ 
        foreach ($params['orders']['data'] as $orders) {
            //    print_r($prodct);
            ?>
            <tr>
                <td> <a href=" <?php // echo  MVC_BASE_URL . 'index.php?controller=orders&action=orders&id='.$orders['product_id'];   ?>"><?php echo $orders['name']; ?></a> </td>
                <td><?php echo $orders['description']; ?></td> 
                <td> <?php echo $orders['date']; ?>"  </td> 
                <td> <a href="<?php echo MVC_BASE_URL . 'order/order_remove/' . $orders['order_id']; ?>">delete</a>  </td> 
            </tr>
            <?php
        }} else{
            echo $params['orders']['status'];
             
        }
        ?>


        </tr> 
    </tbody>
</table>


</div>