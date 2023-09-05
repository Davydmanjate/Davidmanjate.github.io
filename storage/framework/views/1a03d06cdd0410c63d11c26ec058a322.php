
<?php $__env->startSection('content'); ?>
    
<!-- inicio da tabela funcionario -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4"> 
            <h4 class="mb-0">Tabela Clientes</h4>
            <a href="<?php echo e(url('layers.addic')); ?>"><button class="btn btn-primary btn-lg font-weight-medium auth-form-btn">Adicionar</button></a>
        </div>
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
            <tbody>
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">user_id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Morada</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($item->user_id); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->telefone); ?></td>
                <td><?php echo e($item->category); ?></td>
                <td><?php echo e($item->address); ?></td>
                <td>
                    
<a href="<?php echo e(url('layers.edit/'.$item->id)); ?>"><button class="btn btn-success btn-sm"><i class="fa-light fa-pen-to-square"></i>Editar</button></a>
<a href="<?php echo e(url('layers.delete/'.$item->id)); ?>"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
                </td>
                <tr>                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Fim da tabela funcionario -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AAMs\resources\views/foo.blade.php ENDPATH**/ ?>