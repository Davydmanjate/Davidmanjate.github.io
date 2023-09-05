
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-2 px-2">
    <div class="bg-secondary text-center rounded p-2">
        <div class="d-flex align-items-center justify-content-between mb-2"> 
            <h4 class="mb-0">Tabela Clientes</h4>
            <div class="btn-group" role="group">
                <a href="<?php echo e(route('avance.add')); ?>"><button class="btn btn-outline-warning m-2">Avanço</button></a>
            
            <a href="<?php echo e(route('case.generate-pdf')); ?>"><button class="btn btn-outline-info m-2">PDF</button></a>
        </div>
    </div>
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tbody>
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Data Audiência</th>
                        <th scope="col">Estado Civil</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Mensagem</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($item->custum_id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->province); ?></td>
                <td><?php echo e($item->audience); ?></td>
                <td><?php echo e($item->marital_status); ?></td>
                <td><?php echo e($item->age); ?></td>
                <td><?php echo e($item->subject); ?></td>
                <td><?php echo e($item->message); ?></td>
                <td>
<a href="<?php echo e(url('case.delete/'.$item->id)); ?>"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
<a href="<?php echo e(url('avance.adicione')); ?>"><button class="btn btn-success btn-sm"><i class="fa-solid fa-trash-can"></i>Avanço</button></a>
                </td>
                <tr>                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Vamos\AAMs\resources\views/case/index.blade.php ENDPATH**/ ?>