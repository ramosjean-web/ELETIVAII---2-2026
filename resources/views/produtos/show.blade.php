<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Novo Produto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Dados do Produto</h1>
<form method="post" action='/produto/{{$produto->id}}'>
    @CSRF
    @method('DELETE')
            <div class="mb-3">
              <label for="nome" class="form-label">Nome do Produto</label>
              <input type="text" id="nome" name="nome" class="form-control" disable=""value="{{$produto->nome}}"> 
            </div><div class="mb-3">
              <label for="descricao" class="form-label">Descrição do Produto</label>
              <input type="text" id="descricao" name="descricao" class="form-control" disable=""value="{{$produto->descricao}}">
            </div>
            <div class="mb-3">
              <label for="preco_base" class="form-label">Preço do produto</label>
              <input type="text" id="preco_base" name="preco_base" class="form-control" required=""value="{{$produto->preco_base}}">
            </div>
            <a href="/produtos" class="btn btn-secondary">Voltar</a>
            <p>Deseja Excluir o regitstro?</p>
            <button type="submit"class="btn btn-danger">Excluir</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>