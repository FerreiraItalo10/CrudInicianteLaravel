<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver um produto</title>
</head>
<body>
    <h1>Página de criar os produtos </h1>
    <form action="<?php echo e(route('alterar_produto', ['id' => $produto->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Nome</label><br/>
        <input type="text" name="nome" value="<?php echo e($produto->nome); ?>"></input><br/>
        <label for="">Custo</label><br/>
        <input type="text" name="custo" value="<?php echo e($produto->custo); ?>"></input><br/>
        <label for="">Preco</label><br/>
        <input type="text" name="preco" value="<?php echo e($produto->preco); ?>"></input><br/>
        <label for="">Quantidade</label><br/>
        <input type="text" name="quantidade" value="<?php echo e($produto->quantidade); ?>"></input><br/><br/>
        <button>Salvar</button>
    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/produtos/edit.blade.php ENDPATH**/ ?>