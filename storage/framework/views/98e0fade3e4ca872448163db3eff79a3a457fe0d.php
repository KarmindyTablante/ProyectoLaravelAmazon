<?php $__env->startSection('content'); ?>
<div class="container">

     <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-9">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>
                        <?php $users_count = DB::table('users')->count(); ?>
                        <?php echo e($users_count ?? '0'); ?>

                    </h3>

                    <p class="car-box">Usuarios  registrados</p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-users"></i>
                  </div>
                  <a href="<?php echo e(url('usuarios')); ?>" class="small-box-footer">Ver Mas<i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>

          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <div class="col-lg-6 col-9">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner cuadro">
                    <h3>
                        <?php $roles_count = DB::table('categorias73s')->count(); ?>
                        <?php echo e($roles_count ?? '0'); ?>

                    </h3>

                    <p class="car-box">Mis Compras </p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-user-tag"></i>
                  </div>
                  <a href="<?php echo e(url('detallado/create')); ?>" class="small-box-footer abajo" style=" background: #17202A;">Ver Mas <i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
    
<!-- --------- -->
<!--     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio</div>
              
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
     
                    
                </div>
               
            </div>
        </div>
    </div> -->


     <div class="alert  alert-success alert-dismissible fade show" role="alert" style="height: 174px;">

                  <p style="margin-top: 9%;"><span class="badge badge-pill badge-success">¡Estás conectado!</span>&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido Al Escritorio .</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
<!-- --------- -->
      


<!--  -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi-proyecto-laravel\resources\views/home.blade.php ENDPATH**/ ?>