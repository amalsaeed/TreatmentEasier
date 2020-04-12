<?php if($message->user->id == Auth::user()->id): ?>
<li  class="right clearfix"><span class="chat-img pull-right">
<img src="http://placehold.it/50/55C1E7/fff&text=<?php echo e($message->user->name[0]); ?>" alt="<?php echo e($message->user->name); ?>" class="img-circle" />
</span>
    <div class="chat-body clearfix">
        <div class="header">
            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span><?php echo e($message->created_at->diffForHumans()); ?></small>
            <strong class="pull-right primary-font"><?php echo e($message->user->name); ?></strong>
        </div>
        <p>
           <?php echo e($message->body); ?>

        </p>
    </div>
</li>
<?php else: ?>
<li class="left clearfix"><span class="chat-img pull-left">
<img src="http://placehold.it/50/55C1E7/fff&text=<?php echo e($message->user->name[0]); ?>" alt="<?php echo e($message->user->name); ?>"
    class="img-circle" />
</span>
    <div class="chat-body clearfix">
        <div class="header">
            <strong class="primary-font"><?php echo e($message->user->name); ?></strong> <small class="pull-right text-muted">
                <span class="glyphicon glyphicon-time"></span><?php echo e($message->created_at->diffForHumans()); ?></small>
        </div>
        <p>
          <?php echo e($message->body); ?>

        </p>
    </div>
</li>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/partials/messages.blade.php ENDPATH**/ ?>