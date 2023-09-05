
<?php $__env->startSection('content'); ?>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">Atribuição do Advogado</h4>
                    <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route ('avance.save')); ?>" class="row g-3">
                        <?php echo csrf_field(); ?>

                        <div class="col-md-6">
                            <label for="case_id" name="case_id" class="form-label">Nome do Cliente</label>
                            <select name="case_id" id="case_id" class="form-control" selected>
                                <option value="">Nome</option>
                                    <?php $__currentLoopData = $case; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($case->id); ?>"><?php echo e($case->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="message" name="message" class="form-label">Nº Processo</label>
                            <select name="custum_id" id="custum_id" class="form-control" selected>
                                <option value="">Nº Processo</option>
                                    <?php $__currentLoopData = $custum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($custum->id); ?>"><?php echo e($custum->id); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="message" name="message" class="form-label">Nome do Advogado</label>
                            <select name="layer_id" id="layer_id" class="form-control" selected>
                                <option value="">Selecione um Advogado</option>
                                    <?php $__currentLoopData = $layer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($layer->id); ?>"><?php echo e($layer->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

						<div class="col-md-6">
                            <label for="status" class="form-label">Estado</label>
                            <select id="status" name="status" class="form-select" value="<?php echo e(old('status')); ?>">
                                <option selected>Escolher ...</option>
                                <option>Pendente</option>
								<option>Em andamento</option>
                                <option>Concluído</option>
                                <option>Cancelado</option>
                            </select>
                            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                </div>
            </div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </form>
    </div>
    <!-- Form End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Vamos\AAMs\resources\views/avanco/add.blade.php ENDPATH**/ ?>