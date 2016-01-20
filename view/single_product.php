
<?php // var_dump($params['product']['status']);die;  ?>

<div style="margin-top:30px;margin-left:200px;">
    <div style="with:150px;height:100px;"></div>



    <?php if ($params['product']['status'] == 1) { ?>
    </div>
    <br>
    <div style="with:30px;height:20px;margin-left:500px;"><a href="<?php echo MVC_BASE_URL . 'order/add_order/' . $params['product']['data']['id']; ?>">add to order</a></div>
    <table  border="0" style="float:left">
        <thead >
            <tr>
                <td>  </td>
                <td>  </td> 
                <td>  </td> 
            </tr> 
        </thead>
        <tbody > 

            <tr>
                <td> <img src="<?php echo $params['product']['data']['image'] ?>" /> </td>
                <td><?php echo $params['product']['data']['name'] ?>
                    <br>
                    <?php echo $params['product']['data']['description'] ?>
                </td> 
                <td> </td> 
            </tr>
        <?php
        } else {
            echo $params['product']['status'] ;
            
        }
        ?>


        </tr> 
    </tbody>
</table>