<?php $__env->startSection('content'); ?>
    <form class="form-signin" role="form" method="POST" action="<?php echo e(route('register')); ?>" >
        <?php echo e(csrf_field()); ?>

        <img class="mb-4" src="<?php echo e(asset('dist/images/logo.png')); ?>" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Name" required="" autofocus="" name="name" value="<?php echo e(old('name')); ?>">
        <?php if($errors->has('name')): ?>
            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
        <?php endif; ?>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email" value="<?php echo e(old('email')); ?>">
        <?php if($errors->has('email')): ?>
            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
        <?php endif; ?>


        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        <?php if($errors->has('password')): ?>
            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
        <?php endif; ?>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password Confirmation" required="" name="password_confirmation">
        <?php if($errors->has('password_confirmation')): ?>
            <span class="text-danger"><?php echo e($errors->first('password_confirmation')); ?></span>
        <?php endif; ?>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="mb-3">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </div>
        <p>Already have accout? </p><a class="mt-5 mb-3" href="<?php echo e(route('login')); ?>">Login</a>
        <p class="mt-5 mb-3 text-muted">©2020</p>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/auth/register.blade.php ENDPATH**/ ?>