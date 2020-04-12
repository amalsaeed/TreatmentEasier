<?php $__env->startSection('title', 'My Profile'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        html,
        body {
            height: 100%;
        }
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        label {
            margin-top: 5px;
        }

        select {
            width: 250px !important;
            max-width: 500px;
        }

        textarea {
            width: 500px !important;
            max-width: 900px;
        }

        .form-signin {
            width: 100%;
            max-width: 1000px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
            max-width: 250px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .datepicker {
            padding: 20px;
            border-radius: 5px;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-signin" role="form" method="POST" action="<?php echo e(route('reservations.store')); ?>" style="margin-top: 50px" autocomplete="off">
        <?php echo e(csrf_field()); ?>


        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success" style="font-size: 14px">
                <?php echo \Session::get('success'); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <h1 class="h3 mb-5 font-weight-normal">New Reservation</h1>
        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="d-flex flex-column">
                <div class="m-3">
                    <label for="inputName">Patient Name</label>
                    <input type="text" value="<?php echo e($profile->name); ?>" disabled id="inputName" class="form-control" placeholder="Name" required="" name="name">
                </div>
                <div class="m-3">
                    <label for="inputEmail">Email address</label>
                    <input type="email" value="<?php echo e(auth()->user()->email); ?>" disabled id="inputEmail" class="form-control" placeholder="Email address" required="" name="email">
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="m-3">
                    <label for="inputProfile">Profile Number</label>
                    <input type="text" value="<?php echo e($profile->profile_number); ?>" disabled id="inputProfile" class="form-control" placeholder="Profile Number" required="" name="profile">
                </div>
                <div class="m-3">
                    <label for="inputMobile">Mobile Number</label>
                    <input type="text" value="<?php echo e($profile->mobile); ?>" disabled id="inputMobile" class="form-control" placeholder="Mobile Number" required="" name="mobile">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="m-3">
                <label for="clinic">Clinic Name</label>
                <select class="custom-select d-block" id="clinic" required="" name="clinic">
                    <?php $__currentLoopData = $clinics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($clinic->id); ?>"><?php echo e($clinic->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="m-3">
                <label for="doctor">Doctor Name</label>
                <select class="custom-select d-block" id="doctor" required="" name="doctor">
                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($doc->id); ?>"><?php echo e($doc->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
            <div class="m-3 date" data-provide="datepicker">
                <label for="date">Appointment Date</label>
                <input type="text" class="form-control" name="date" id="date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <div class="m-3">
                <label for="notes">Notes</label>
                <textarea type="text"  id="notes" class="form-control" placeholder="Notes" name="notes"> <?php echo e(old('notes')); ?></textarea>
            </div>
        </div>

        <div class="mb-3 mt-5">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Confirm</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/reservations/create.blade.php ENDPATH**/ ?>