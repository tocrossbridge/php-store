<?php
    include "src/config.php";
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
                echo "<td>";
                    print_r($product[1]);
                echo "</td>";
                echo "<td>";
                    print_r($product[2]);
                echo "</td>";
                echo "<td>";
                    print_r($product[3]);
                echo "</td>";
                echo "<td>";
                    print_r($product[4]);
                echo "</td>";
                echo "<td>";
                    print_r($product[5]);
                echo "</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>