<!DOCTYPE html>
<html>
<head>
    <title>Associação dos Advogado de Moçambique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1><?php echo e($title); ?></h1>
    <p><?php echo e($date); ?></p>
    
    <div class="col-sm-12 col-xl-6">
        <div class="table-responsive">
            <p>Informações dos membros da AAM.</p>
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Morada</th>
        </tr>
    </thead>
        <?php $__currentLoopData = $layer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tbody>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->telefone); ?></td>
                <td><?php echo e($item->category); ?></td>
                <td><?php echo e($item->address); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\AAMs\resources\views/layers/myPDF.blade.php ENDPATH**/ ?>