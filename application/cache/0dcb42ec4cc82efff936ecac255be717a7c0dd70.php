<form class="form-horizontal" action="<?php echo e(base_url('crud/create/item')); ?>" method="post" enctype="multipart/form-data" id="form-create-item">
  <fieldset class="content-group">
    <legend class="text-bold">Add Item</legend>

    <div class="form-group">
      <label class="control-label col-lg-2">Item Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="c" required name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-lg-2">Item Category Type</label>
      <div class="col-lg-9">
        <select class="form-control category-type" required name="category-type">

        </select>
      </div>

      <div class="col-lg-1">
        <button type="button" class="btn btn-primary btn-icon"  data-toggle="modal" data-target="#modal_create_ctg_type">
          <i class="icon-add"></i>
        </button>
      </div>

      <div class="col-lg-9 col-lg-offset-2">
        <select class="form-control sub-category" required name="sub-category">

        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-lg-2">Item Category Color</label>
      <div class="col-lg-9">
        <select class="form-control category-color" required name="category-color">

        </select>
      </div>
      <div class="col-lg-1">
        <button type="button" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#modal_create_ctg_color">
          <i class="icon-add"></i>
        </button>
      </div>
    </div>

    <div class="form-group">
      <label class="display-block control-label col-lg-2">Item Status</label>
      <div class="col-lg-10">
        <select class="form-control" name="status" required>
          <option value="READY">Ready</option>
          <option value="EMPTY">Empty</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="display-block control-label col-lg-2">Item Price</label>
      <div class="col-lg-10 form-inline">
        <label>Rp. </label>
        <input type="number" class="form-control" name="price" value="">
      </div>
    </div>

    <div class="form-group">
      <label class="display-block control-label col-lg-2">Item Image Main</label>
      <div class="col-lg-10">
        <input class="form-control" type="file" name="img" required>
      </div>
    </div>

    <div class="form-group">
      <label class="display-block control-label col-lg-2">Item Image 2</label>
      <div class="col-lg-10">
        <input class="form-control" type="file" name="img2">
      </div>
    </div>

    <div class="form-group">
      <label class="display-block control-label col-lg-2">Item Image 3</label>
      <div class="col-lg-10">
        <input class="form-control" type="file" name="img3">
      </div>
    </div>

    <button type="submit" class="btn btn-success btn-block" id="btn-create-item">Save</button>
  </fieldset>
</form>
