<?php $__env->startSection('content'); ?>
    <main class="flex flex-col items-center justify-center flex-grow">

        <div class="w-full max-w-4xl bg-white shadow-md rounded-lg p-4">
            <h2 class="text-center text-xl font-bold mb-4">Danh sách
                user</h2>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Id</th>
                        <th class="border border-gray-300 px-4 py-2">Username</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Role</th>
                        <th class="border border-gray-300 px-4 py-2">Thao
                            tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo e($user->id); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo e($user->name); ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo e($user->email); ?></td>
                            <td>
                                <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('user.role', ['id' => $role->id])); ?>">
                                        <?php echo e($role->name . '-'); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>

                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="<?php echo e(route('user.updateUser', ['id' => $user->id])); ?>" class="text-blue-500">Edit</a> |
                                <a href="<?php echo e(route('user.readUser', ['id' => $user->id])); ?>" class="text-blue-500">View</a> |
                                <a href="<?php echo e(route('user.deleteUser', ['id' => $user->id])); ?>" class="text-blue-500">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($users->links()); ?>

        </div>
    </main>

    <footer class="w-full bg-white py-4 border-t">
        <div class="text-center text-gray-700">Nhom D</div>
    </footer>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BE2\ontap\resources\views/crud_user/list.blade.php ENDPATH**/ ?>