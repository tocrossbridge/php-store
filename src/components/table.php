<?php
    $products = $conn->query('SELECT * FROM produtos');
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
    <?php
        foreach($products as $product) {
            echo "<tr style='text-align: center'>";
                echo "<td>".$product["nome_prod"]."</td>";
                echo "<td>" . $product['setor_prod'] . "</td>";
                echo "<td>" . $product['custo_prod'] . "</td>";
                echo "<td>" . $product['venda_prod'] . "</td>";
                echo "<td>" . $product['estoque_prod'] . "</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>