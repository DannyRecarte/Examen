<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Asientos</title>
</head>
<body>
    <div class="container">        
    <h1>Mantenimiento Asientos</h1>
    <br>
    <a href="<?php echo e(route('agregarTiposAsientos')); ?>" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Tipo Asiento</th>
                <th>Descripci&oacute;n</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            
                <?php $__currentLoopData = $tipoAsientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipoAsiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tipoAsiento->idTipoAsiento); ?></td>
                        <td><?php echo e($tipoAsiento->descripcion); ?></td>
                        <td><?php echo e($tipoAsiento->precio); ?></td>
                        <td><?php echo e($tipoAsiento->estado); ?></td>
                        <td><a href="<?php echo e(route('eliminarTiposAsientos',$tipoAsiento->idTipoAsiento)); ?>">Eliminar</a></td>
                        <td><a href="<?php echo e(route('editarAsientos',$tipoAsiento->idTipoAsiento)); ?>">Editar</a></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
             
            
            
        </tbody>

    </table>
    </div>
</body>
</html><?php /**PATH C:\wamp64\www\Examen\resources\views/tiposAsientos.blade.php ENDPATH**/ ?>