
<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div  class="list list-row block <?php echo e($class); ?>">


      <div class="list-item" data-id="17">

        <div><a href="#" data-abc="true"><span class="w-48 avatar gd-warning"><?php echo e($thread->creator()->name[0]); ?></span>
        </a></div>

<h4 class="media-heading">
    <a href="<?php echo e(route('messages.show', $thread->id)); ?>">
   <?php echo e($thread->subject); ?>

   </a>
    (<?php echo e($thread->userUnreadMessagesCount(Auth::id())); ?>)</h4>

        <div class="flex">
            <div>
            <span> Last Message: <?php echo e($thread->latestMessage->body); ?></span>
            <div class="item-except">
               <p>  Creator:  <?php echo e($thread->creator()->name); ?> - Participant:  <?php echo e($thread->participantsString(Auth::id())); ?></p>
            </div>
            </div>
        </div>

    </div>

</div>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/partials/thread.blade.php ENDPATH**/ ?>