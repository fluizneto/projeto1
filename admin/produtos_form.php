
  <h2>Cadastro de Produtos</h2>
  <form action="?pg=produtosCadastro" method="post">
    <label>Produto</label>
    <input type="text" name="produto" required><br>
    <label>Preço</label>
    <input type="number" id="preco" name="preco" step="any" lang="pt-BR"><br>
    <label>Estoque</label>
    <input type="number" name="estoque"><br>

    <input type="submit" value="Cadastrar Produtos">
  </form>
