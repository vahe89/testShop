<?php
include('header_in.php');
session_start();
?>
<table border="3">
    <thead>
        <tr>
            <th>Products</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
    <?php if (!empty($_SESSION) && $_SESSION['products'] && $_SESSION['total']): ?>
        <tr>
            <td><?= $_SESSION['products'] ?></td>
            <td><?= $_SESSION['total'] ?></td>
        </tr>


    <?php endif; ?>
    </tbody>
</table>

