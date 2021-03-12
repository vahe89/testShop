<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
include('header_in.php');
include('data.php');

?>

<table border='3'>
    <tr>
        <th>Product</th>
        <th>Code</th>
        <th>Price</th>
<!--        <th>Quantity</th>-->
        <th>Actions</th>
    </tr>
    <?php
    foreach ($products as $key => $product) {
        ?>
        <tr>
            <td><?php echo $product['product'] ?></td>
            <td><?php echo $key ?></td>
            <td><?php echo $product['price'] ?></td>
            <td>
                <button class="add" data-code="<?= $key ?>" data-action="add" type="button">Add to cart</button>
            </td>
        </tr>

        <?php
    }

    ?>
</table>
<form method="post" action=""></form>
<button class="add"  data-action="clear" type="button">Clear Cart</button>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add").click(function(){

            let code = $(this).data('code');
            $.ajax({
                url: 'add_to_cart.php',
                type:'post',
                data:{
                    code :code,
                    action: $(this).data('action'),
                },
            })
        })
    })

</script>
