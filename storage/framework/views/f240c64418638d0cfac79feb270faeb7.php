<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div>
        <form action="<?php echo e(route('logincheck')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <input type="text" name="username" id="" placeholder="Username"> <br>
            <input type="password" name="password" id="" placeholder="Password"> <br>
            <input type="submit" name="login" id="" value="login">
            

        </form>
    </div>
</body>
</html><?php /**PATH D:\xampp\htdocs\hardware\resources\views/login/login.blade.php ENDPATH**/ ?>