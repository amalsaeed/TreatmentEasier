<style>
    .chat {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li.left .chat-body {
        margin-left: 60px;
    }

    .chat li.right .chat-body {
        margin-right: 60px;
    }


    .chat li .chat-body p {
        margin: 0;
        color: #777777;
    }

    .panel .slidedown .glyphicon,
    .chat .glyphicon {
        margin-right: 5px;
    }

    .panel-body {
        height: 500px;
        overflow-y: auto;

    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }
</style>

<?php $__env->startSection('content'); ?>
<div style="width: 50%;position: absolute;left: 23%;right: 25%;padding-top: 30px;" class="panel-collapse"
    >
    <h1> Subject: <?php echo e($thread->subject); ?></h1>
    <div  id="panel-body" class="panel-body">
        <ul id="chat" class="chat">
           <?php echo $__env->renderEach('messenger.partials.messages', $thread->messages, 'message'); ?>

        </ul>
    </div>
    <div class="panel-footer">

            <?php echo $__env->make('messenger.partials.form-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<script>
    const messages = document.getElementById('panel-body');
    messages.scrollTop = messages.scrollHeight;
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/show.blade.php ENDPATH**/ ?>