<?php
require_once __DIR__ . "/config.php";
try {
    $stmt = $conn->prepare("INSERT INTO produtos (nome_prod, setor_prod, custo_prod, venda_prod, estoque_prod) VALUES (:nome, :setor, :custo, :venda, :estoque)");

    $nome = $_POST['nome_prod'];
    $setor = $_POST['setor_prod'];
    $custo = $_POST['custo_prod'];
    $venda = $_POST['venda_prod'];
    $estoque = $_POST['estoque_prod'];

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':setor', $setor);
    $stmt->bindParam(':custo', $custo);
    $stmt->bindParam(':venda', $venda);
    $stmt->bindParam(':estoque', $estoque);

    $stmt->execute();
    $stmt->closeCursor();

} catch (PDOException $e) {
    echo "Erro ao salvar produto: " . $e->getMessage();
}
?>