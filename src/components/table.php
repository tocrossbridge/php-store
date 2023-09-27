<?php
    // $products = $_REQUEST['products'];
    $products = [];
?>

<table>
    <thead>
        <th>Nome</th>
        <th>Setor</th>
        <th>Custo</th>
        <th>Venda</th>
        <th>Estoque</th>
    </thead>
    <tbody>

    <?php foreach($products as $product): ?>
        <tr>
            <td>NaN</td>
            <td>NaN</td>
            <td>NaN</td>
            <td>NaN</td>
            <td>NaN</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>