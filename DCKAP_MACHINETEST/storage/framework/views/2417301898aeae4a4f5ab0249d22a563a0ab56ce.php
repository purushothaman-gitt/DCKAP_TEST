<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">DCKAP TEST</span>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3  d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-4">
        <ul id="myUL">
         <li class="nav-item ">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD CATEGORY
          </button>
        </li>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorydetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><span class="caret"><?php echo e($categorydetails->category_name); ?></span>
          <ul class="nested">
           <?php if(count($categorydetails->subcategory)): ?>
           <?php echo $__env->make('subcategory',['subcategories' =>$categorydetails->subcategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           <?php endif; ?> 
         </ul>
       </li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
   </div>
 </nav>
 <main class="col-md-8 ms-sm-auto">
  <h3 align="center">Subcategory Testcases List</h3><br />
  <div class="panel panel-default">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Test Case Summary</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody id="fetch">
      </tbody>
    </table>
  </main>
</div>
</div>

<!-- Modal for category -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD SUBCATEGORY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/category/create" method="post">
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Category</label>
              
              <select class="form-control" name="parentcate_id" id="exampleFormControlSelect1">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorydetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($categorydetails['id']); ?>"><?php echo e($categorydetails['category_name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" name="category_name"  placeholder="Enter Subcategory Name" required>
          </div>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for category-Testcases -->
<div class="modal fade" id="exampleModalsubcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD SUBCATEGORY</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/testcases/store" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="mb-3 modal-body2">
            <input type="hidden" name="taskcat_id" id="categoryid" value=""/>
          </div>
          <div class="mb-3">
            <div class="form-group modal-bodycat2">
              <label for="exampleFormControl">Category Name</label>
              <input type="text" class="form-control" name="categoryname" id="tastcaseval" readonly>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Textcase Summary</label>
            <textarea class="form-control" name="testcasesum" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <div class="form-group">
              <label for="exampleFormControl">Description</label>
              <input type="text" class="form-control" name="description" id="tastcaseval">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControl">Upload image file</label>
            <input type="file" class="form-control" name="photo" required>
          </div>

          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DCKAP_MACHINETEST\resources\views/index.blade.php ENDPATH**/ ?>