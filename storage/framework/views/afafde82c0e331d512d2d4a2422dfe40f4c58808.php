<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página de criar os produtos </h1>
    <form action="<?php echo e(route('registrar_produto')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">Nome</label><br/>
        <input type="text" name="nome"></input><br/>
        <label for="">Custo</label><br/>
        <input type="text" name="custo"></input><br/>
        <label for="">Preco</label><br/>
        <input type="text" name="preco"></input><br/>
        <label for="">Quantidade</label><br/>
        <input type="text" name="quantidade"></input><br/><br/>
        <button>Salvar</button>
    </form>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/produtos/create.blade.php ENDPATH**/ ?>