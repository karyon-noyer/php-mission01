<?php $__env->startSection('title', 'テスト表示'); ?>
<?php $__env->startSection('content'); ?>
    <dir name="contents">
        <div>
            <div>
                <h2>絶対に喜ばれるおすすめランキング</h2>
            </div>
        </div>
        <h1></h1>
        <ul></ul>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </dir>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        alert('I\'m coming from child')
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        ul {
            display: flex;
        }

        li {
            list-style: none;
            margin-left: 10%;
            margin-right: 10%;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>