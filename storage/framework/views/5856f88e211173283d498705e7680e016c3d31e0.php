<style>
    a {
        color: #448bff;
        text-decoration: none;
        background-color: transparent
    }

    a:hover {
        color: #005ef7;
        text-decoration: underline
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0
    }



    .text-muted {
        color: #99a0ac !important
    }

    .block,
    .card {
        background: #fff;
        border-width: 0;
        border-radius: .25rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
        margin-bottom: 1.5rem
    }

    .avatar {
        position: relative;
        line-height: 1;
        border-radius: 500px;
        white-space: nowrap;
        font-weight: 700;
        border-radius: 100%;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: center;
        justify-content: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        border-radius: 500px;
        box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
    }

    .avatar img {
        border-radius: inherit;
        width: 100%
    }

    .gd-primary {
        color: #fff;
        border: none;
        background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
    }

    .gd-success {
        color: #fff;
        border: none;
        background: #31c971 linear-gradient(45deg, #31c971, #3dc931)
    }

    .gd-info {
        color: #fff;
        border: none;
        background: #14bae4 linear-gradient(45deg, #14bae4, #14e4a6)
    }

    .gd-warning {
        color: #fff;
        border: none;
        background: #f4c414 linear-gradient(45deg, #f4c414, #f45414)
    }



    .list {
        padding-left: 0;
        padding-right: 0
    }

    .list-item {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;


        word-wrap: break-word
    }

    .list-row .list-item {
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-align: center;
        align-items: center;

    }

    .list-row .list-item>* {
        padding-left: .625rem;
        padding-right: .625rem
    }

    .no-wrap {
        white-space: nowrap
    }

    .text-color {
        color: #5e676f
    }

    .text-gd {
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
        text-fill-color: transparent
    }

    .text-sm {
        font-size: 12px;
    }

    .h-1x {
        height: 1.25rem;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical
    }

    .w-48 {
        width: 48px !important;
        height: 48px !important
    }

    a:link {
        text-decoration: none
    }
    }
</style>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('messenger.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->renderEach('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/treatment_easier/resources/views/messenger/index.blade.php ENDPATH**/ ?>