<form
    action="src/save.php"
    method="post"
    id="registerForm"
>
    <legend>Cadastro de Produtos</legend>

    <fieldset>
        <label>Nome do produto</label>
        <input
            required
            name="nome_prod"
            type="text"
            placeholder="Digite o nome do produto"
        />
    </fieldset>

    <fieldset>
        <label>Selecione setor</label>
        <select required name="setor_prod">
            <?php
                try {
                    $sql = "SELECT * FROM setores";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    // Obtemos todos os resultados como um array associativo:
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    // Verificando se tem mais de um elemento no array:
                    if(count($results) > 0){
                        foreach ($results as $row) {
                            echo '<option value="' . $row['id_set'] . '">' . $row['nome_set'] . '</option>';
                        }
                    } else {
                        echo '<option value="">Sem resultados disponíveis</option>';
                    }
                } catch(PDOException $e) {
                    echo "Erro ao executar a consulta SQL: " . $e->getMessage();
                }
            ?>
        </select>
    </fieldset>

    <fieldset>
        <label>Preço de custo</label>
        <input
            required
            name="custo_prod"
            type="text"
            placeholder="0.0"
        />
    </fieldset>

    <fieldset>
        <label>Preço de venda</label>
        <input
            required
            name="venda_prod"
            type="text"
            placeholder="0.0"
        />
    </fieldset>

    <fieldset>
        <label>Quantidade de caixas de estoque</label>
        <input
            required
            name="estoque_prod"
            type="number"
            placeholder="Apenas números"
        />
    </fieldset>

    <button type="submit">Salvar produto</button>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        // Impedindo o envio padrão do formulário:
        event.preventDefault();

        var formData = new FormData(this);

        fetch('src/save.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('successModal').style.display = 'block';

            // Para depuração caso dê xabu:
            // console.log(data);
        })
        .catch(error => console.error('Erro:', error));
    });
});
</script>