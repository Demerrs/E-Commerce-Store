<?php $__env->startSection('title', 'Create Product'); ?>
<?php $__env->startSection('data-page-id', 'adminProduct'); ?>

<?php $__env->startSection('content'); ?>
    <div class="add-product">
        <div class="grid-padding-x">
            <div class="cell medium-11">
                <h2>Add Inventory Item</h2> <hr />
            </div>
        </div>

        <?php echo $__env->make('includes.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <form method="post" action="/admin/product/create">
            <div class="small-12 medium-11">
                <div class="grid-x grid-padding-x">
                    <div class="small-12 medium-5 cell">
                        <label>Product Name:
                        <input type="text" name="name" placeholder="Product name"
                               value="<?php echo e(\App\classes\Request::old('post', 'name')); ?>">
                        </label>
                    </div>

                    <div class="small-12 medium-5 cell">
                        <label>Product Price:
                            <input type="text" name="price" placeholder="Product price"
                                   value="<?php echo e(\App\classes\Request::old('post', 'price')); ?>">
                        </label>
                    </div>

                    <div class="small-12 medium-5 cell">
                        <label>Product Category:
                            <select name="category" id="product-category">
                                <option value="<?php echo e(\App\classes\Request::old('post', 'category')?:""); ?>">
                                    <?php echo e(\App\classes\Request::old('post', 'category')?:"Select Category"); ?>

                                </option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>">
                                        <?php echo e($category->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </label>
                    </div>

                    <div class="small-12 medium-5 cell">
                        <label>Product Subcategory:
                            <select name="subcategory" id="product-subcategory">
                                <option value="<?php echo e(\App\classes\Request::old('post', 'subcategory')?:""); ?>">
                                    <?php echo e(\App\classes\Request::old('post', 'subcategory')?:"Select Subcategory"); ?>

                                </option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php echo $__env->make('includes.delete-modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>