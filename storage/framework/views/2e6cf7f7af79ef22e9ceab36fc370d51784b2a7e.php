<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a href="/">
        <img src="<?php echo e(asset('dist/images/logo.png')); ?>" alt="" width="80" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>

            </li>
            <li class="nav-item active">

                <a class="nav-link" href="<?php echo e(route('about')); ?>">About Us</a>
            </li>

            <a class="nav-link" href="<?php echo e(route('doctors')); ?>">Doctors</a>

             <?php if(auth()->guard()->check()): ?>

             <?php if(\Auth::user()->user_type == 1): ?>
             <li class="nav-item"><a class="nav-link" href="/doctor/dashboard">Dashboard</a></li>
             <?php else: ?>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profile</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('reservations')); ?>">Reservations</a>
    </li>

             <?php endif; ?>
<li class="nav-item"><a class="nav-link" href="/messages">Messages ( <span style="color:red;">
                    <?php echo $__env->make('messenger.unread-count', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>)</a></li>
        <?php endif; ?>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medical Service</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?php echo e(route('dentistry')); ?>">Dentistry Clinic </a>
                    <a class="dropdown-item" href="<?php echo e(route('Throat')); ?>">Ear And Throat Clinic</a>
                    <a class="dropdown-item" href="<?php echo e(route('Internist')); ?>">Internist Clinic</a>
                    <a class="dropdown-item" href="<?php echo e(route('Children')); ?>">Children Clinic</a>
                    <a class="dropdown-item" href="<?php echo e(route('Orthopedic')); ?>">Orthopedic Clinic</a>
                    <a class="dropdown-item" href="<?php echo e(route('Ophthalmology')); ?>">Ophthalmology Clinic</a>
                    <a class="dropdown-item" href="<?php echo e(route('Heart')); ?>">Heart Clinic</a>
                    <a class="dropdown-item" href="<?php echo e(route('Gynecology')); ?>">Obstetrics and Gynecology Clinic</a>
                </div>
            </li>
        </ul>
        <?php if(auth()->guard()->check()): ?>
            <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        <?php else: ?>
            <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="<?php echo e(route('login')); ?>">Login</a>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/partials/header.blade.php ENDPATH**/ ?>