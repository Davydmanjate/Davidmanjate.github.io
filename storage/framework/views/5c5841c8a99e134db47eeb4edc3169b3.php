
<?php $__env->startSection('content'); ?>
    
<!-- inicio da tabela funcionario -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4"> 
            <h4 class="mb-0">Atribuição do Processo</h4>
            <div class="btn-group" role="group">
            
            <a href="#"><button class="btn btn-outline-info m-2">PDF</button></a>
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
                        <th scope="col">Nome</th>
                        <th scope="col">Nº Processo</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Advogado</th>
                        <th scope="col">Estado</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($item->case->name); ?></td>
                <td class="text-center"><?php echo e($item->custum_id); ?></td>
                <td><?php echo e($item->case->subject); ?></td>
                <td><?php echo e($item->layer->name); ?></td>
                <td><?php echo e($item->status); ?></td>
                <td>
                    
<a href="<?php echo e(url('avanco.edit/'.$item->id)); ?>"><button class="btn btn-warning btn-sm"><i class="fa-light fa-pen-to-square"></i>Editar</button></a>
<a href="<?php echo e(url('layers.delete/'.$item->id)); ?>"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
<a href="<?php echo e(route('layer.resume')); ?>"><button class="btn btn-success btn-sm"><i class="fa-solid fa-trash-can"></i>Resumo</button></a>
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
<?php echo $__env->make('base.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Vamos\AAMs\resources\views/avanco/index.blade.php ENDPATH**/ ?>