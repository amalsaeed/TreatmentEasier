<?php $__env->startSection('content'); ?>



<div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">

        </div>
    </div>
</div><!-- End -->


<div class="container">
    <?php if(Session::has('success')): ?>
    <div class="alert alert-dagger" role="alert">
       <h3 style="color:red;text-align:center"><?php echo e(Session::get('success')); ?></h3>
    </div>
    <?php endif; ?>
    <div class="row text-center">

<?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Team item -->
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4">
                <img src="http://placehold.it/50/55C1E7/fff&text=<?php echo e($doctor->name[0]); ?>" alt="<?php echo e($doctor->name[0]); ?>"
                   width="100"
                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">


                <h5 class="mb-0"><?php echo e($doctor->name); ?></h5><span class="small text-uppercase text-muted">
                  Clinic: <?php echo e($doctor->clinic->name); ?>

                </span>
                <ul class="social mb-0 list-inline mt-3">

                    <li class="list-inline-item"><a href="<?php echo e(route('messages.create',$doctor->user_id)); ?>" class="social-link">Send a Message</a>
                    </li>
                    <li class="list-inline-item"><a href="<?php echo e(route('reservations.create')); ?>" class="social-link">Make a Reservation</a></li>
                </ul>
            </div>
        </div><!-- End -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>




<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/doctors.blade.php ENDPATH**/ ?>