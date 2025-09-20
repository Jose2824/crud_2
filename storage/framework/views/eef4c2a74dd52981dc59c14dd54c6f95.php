

<?php $__env->startSection('content'); ?>
<h1 class="mb-3">Cadastrar Carro</h1>

<form action="<?php echo e(route('carros.store')); ?>" method="POST" class="card p-3 shadow-sm">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" value="<?php echo e(old('modelo')); ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Placa</label>
        <input type="text" name="placa" class="form-control" value="<?php echo e(old('placa')); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="<?php echo e(route('carros.index')); ?>" class="btn btn-secondary">Cancelar</a>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\MajorBuggy\resources\views/carros/create.blade.php ENDPATH**/ ?>