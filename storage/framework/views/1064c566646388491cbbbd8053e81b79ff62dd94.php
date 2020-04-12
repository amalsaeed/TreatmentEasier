<?php $count = Auth::user()->newThreadsCount(); ?>
<?php if($count > 0): ?>
    <span class="label label-danger"><?php echo e($count); ?></span>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/unread-count.blade.php ENDPATH**/ ?>