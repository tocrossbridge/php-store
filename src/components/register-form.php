<div>
    <form action="src\save.php" method="post">
        <h2 style="margin: 0">Cadastro de Produto</h2>

        <div class="form-group">
            <label>Nome do produto</label>
            <input
                required
                name="nome_prod"
                type="text"
                placeholder="Nome do produto"
            />
        </div>

        <div class="form-group">
            <label>Selecione setor</label>
            <select
                required
                name="setor"
            >
                <option>Blabla</option>
            </select>
        </div>

        <div class="form-group">
            <label>Preço de custo</label>
            <input
                required
                name="preco_custo"
                type="text"
                placeholder="0.0"
            />
        </div>

        <div class="form-group">
            <label>Preço de venda</label>
            <input
                required
                name="preco_venda"
                type="text"
                placeholder="0.0"
            />
        </div>

        <div class="form-group">
            <label>Quantidade de caixas de estoque</label>
            <input
                required
                name="quantidade_estoque"
                type="number"
                placeholder="Apenas números"
            />
        </div>

        <button
            type="submit"
        >
            Salvar produto
        </button>
    </form>
</div>