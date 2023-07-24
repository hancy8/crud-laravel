<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    <table class="table">
        <thead>
          <tr>
            <th>Email</th>
            <th>Created at</th>
            <th>updated at</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
          
          <tr>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->created_at); ?></td>
            <td><?php echo e($data->updated_at); ?></td>
            <td>
              
            <a href="<?php echo e(url('/forms/update')); ?>/<?php echo e($data->id); ?>">
              <button class="btn btn-primary">Update</button>
            </a>
            <a href="<?php echo e(url('/forms/delete')); ?>/<?php echo e($data->id); ?>">
            <button class="btn btn-danger">Delete</button>
          </a>
            </td>
          </tr>    
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </tbody>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\crud\resources\views/welcome.blade.php ENDPATH**/ ?>