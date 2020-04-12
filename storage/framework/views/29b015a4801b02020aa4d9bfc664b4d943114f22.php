<?php if(Session::has('error_message')): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(Session::get('error_message')); ?>

    </div>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/partials/flash.blade.php ENDPATH**/ ?>