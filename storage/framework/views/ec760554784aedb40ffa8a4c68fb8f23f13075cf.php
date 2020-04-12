<?php $__env->startSection('content'); ?>
    <div class="chat-history">
        <ul id="talkMessages">

            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($message->sender->id == auth()->user()->id): ?>
                    <li class="clearfix" id="message-<?php echo e($message->id); ?>">
                        <div class="message-data align-right">
                            <span class="message-data-time" ><?php echo e($message->humans_time); ?> ago</span> &nbsp; &nbsp;
                            <span class="message-data-name" ><?php echo e($message->sender->name); ?></span>
                            <a href="#" class="talkDeleteMessage" data-message-id="<?php echo e($message->id); ?>" title="Delete Message"><i class="fa fa-close"></i></a>
                        </div>
                        <div class="message other-message float-right">
                            <?php echo e($message->message); ?>

                        </div>
                    </li>
                <?php else: ?>

                    <li id="message-<?php echo e($message->id); ?>">
                        <div class="message-data">
                            <span class="message-data-name"> <a href="#" class="talkDeleteMessage" data-message-id="<?php echo e($message->id); ?>" title="Delete Messag"><i class="fa fa-close" style="margin-right: 3px;"></i></a><?php echo e($message->sender->name); ?></span>
                            <span class="message-data-time"><?php echo e($message->humans_time); ?> ago</span>
                        </div>
                        <div class="message my-message">
                            <?php echo e($message->toHtmlString()); ?>

                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>

    </div> <!-- end chat-history -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messages/conversations.blade.php ENDPATH**/ ?>