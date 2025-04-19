<?php $__env->startSection('content'); ?>
<main class="flex flex-col items-center justify-center flex-grow">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-center text-xl font-bold mb-6">Màn hình đăng
            ký</h2>
        <form method="POST" action="<?php echo e(route('user.postUser')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" placeholder="Name" id="name" class="w-full px-3 py-2 border rounded" name="name" required
                    autofocus>
                <?php if($errors->has('name')): ?>
                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="Email" placeholder="Email" id="email" class="w-full px-3 py-2 border rounded" name="email" required
                    autofocus>
                <?php if($errors->has('email')): ?>
                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Mật khẩu</label>
                <input type="password" placeholder="Password" id="password" class="w-full px-3 py-2 border rounded" name="password" required>
                <?php if($errors->has('password')): ?>
                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
            </div>
            <div class="mb-4 text-right">
                <a href="<?php echo e(route('login')); ?>" class="text-blue-500">Đã có tài khoản</a>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded">Đăng
                    ký</button>
            </div>
        </form>
    </div>
</main>

<footer class="w-full bg-white py-4 border-t">
    <div class="text-center text-gray-700">Nhom D</div>
</footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BE2\ontap\resources\views/crud_user/create.blade.php ENDPATH**/ ?>