<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir um produto</title>
</head>
<body>
    <h1>Página de criar os produtos </h1>
    <form action="<?php echo e(route('excluir_produto', ['id' => $produto->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Tem certeza que deseja excluir esse produto?</label><br/>
        <input type="text" name="nome" value="<?php echo e($produto->nome); ?>"><br/><br/>
        <button>Sim</button>
    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/produtos/delete.blade.php ENDPATH**/ ?>