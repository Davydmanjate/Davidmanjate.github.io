  
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
            <p>Informações dos Clientes que solicitam o apoio tecnico da nossa equipa.</p>
            <table  class="table table-bordered">
                <thead>
        <tr>
            <th>Nome</th>
            <th>Provincia</th>
            <th>Data Audiência</th>
            <th>Assunto</th>
            <th>Mensagem</th>
        </tr>
    </thead>
        <?php $__currentLoopData = $case; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tbody>
            <tr>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->province); ?></td>
                <td><?php echo e($item->audience); ?></td>
                <td><?php echo e($item->subject); ?></td>
                <td><?php echo e($item->message); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\AAMs\resources\views/case/myPDF.blade.php ENDPATH**/ ?>