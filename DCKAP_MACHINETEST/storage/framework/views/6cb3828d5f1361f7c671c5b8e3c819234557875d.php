<?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
	<button type="button" class="btn btn-outline-secondary subcatebutton" name="<?php echo e($subcategory->category_name); ?>" value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->category_name); ?></button>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\DCKAP_MACHINETEST\resources\views/subcategory.blade.php ENDPATH**/ ?>