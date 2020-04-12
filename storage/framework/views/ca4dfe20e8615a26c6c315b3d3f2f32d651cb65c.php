<?php $__env->startSection('content'); ?>
    <main role="main" class="container" style="margin-top: 100px;">
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success" style="font-size: 14px">
                <?php echo \Session::get('success'); ?>

            </div>
        <?php endif; ?>
        <?php if(\Session::has('error')): ?>
        <div class="alert alert-danger" style="font-size: 14px">
            <?php echo \Session::get('error'); ?>

        </div>
        <?php endif; ?>
        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="m-3">
                <img class="mb-4" src="<?php echo e(asset('dist/images/user.png')); ?>" alt="" width="60" height="60">
                <h6 class="mb-0 lh-100"><?php echo e(Auth()->user()->name); ?></h6>
                <small><?php echo e(\App\Model\User::find(auth()->user()->id)->profile->profile_number); ?></small>
            </div>
            <div class="m-3 float-right">
                <a class="btn btn-primary" href="<?php echo e(route('reservations.create')); ?>">New Reservation</a>
            </div>
        </div>

        <div class="bordered my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Reservations</h6>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="<?php if($reservation->state == 'new'): ?> #52FF33 <?php else: ?> #FF3333 <?php endif; ?>"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em"></text></svg>
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">
                            <?php echo e($reservation->clinic()->first()->name); ?>

                        </strong>
                        <?php echo e($reservation->date); ?>

                    </p>




                    <small class="d-block text-right mt-3">
                        <?php if($reservation->state == 'new'): ?>
                        <a href="<?php echo e(route('prescription.show',$reservation->prescription->id)); ?>">View Prescription</a>
                        |
                            <a href="<?php echo e(route('messages.create',$reservation->doctor_id)); ?>">Send a Message</a>
                          |  <a class="text-primary" href="<?php echo e(route('reservations.edit', $reservation->id)); ?>">Update</a>
                            <button class="text-danger" type="submit" onclick="event.preventDefault(); document.getElementById('cancel-form').submit();">Cancel</button>
                            <form id="cancel-form" action="<?php echo e(route('reservations.cancel', $reservation->id)); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        <?php else: ?>
                            <p>Canceled</p>
                        <?php endif; ?>
                    </small>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/reservations/index.blade.php ENDPATH**/ ?>