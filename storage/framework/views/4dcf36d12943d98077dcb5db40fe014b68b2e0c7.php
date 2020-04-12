<form action="<?php echo e(route('messages.update', $thread->id)); ?>" method="post">
    <?php echo e(method_field('put')); ?>

    <?php echo e(csrf_field()); ?>


    <!-- Message Form Input -->

<center>
        <textarea style="width:80%;display: inline-block;" id="btn-input" name="message" type="text" class="form-control input-sm"><?php echo e(old('message')); ?></textarea>
    <!-- Submit Form Input -->
        <button style="display: inline-block;padding: 12px;margin-top: -38px;width: 100px;"  type="submit" class="btn btn-warning btn-sm" id="btn-chat">Send</button>

</center>

</form>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/partials/form-message.blade.php ENDPATH**/ ?>