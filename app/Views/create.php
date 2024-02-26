<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<div class="container">

  <h3 class="mt-5"><?= lang('App.add'); ?></h3>
  <div class="card p-4 mt-3">
    <form action="/create" method="post" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><?= lang('App.title'); ?></label>
        <input type="text" name="title" value="<?= old('title'); ?>" class="form-control <?= ($validate->hasError('title')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="">
        <div class="invalid-feedback">
          <?= $validate->showError('title'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><?= lang('App.content'); ?></label>
        <textarea name="content" value="<?= old('content'); ?>" class="form-control <?= ($validate->hasError('content')) ? 'is-invalid' : ''; ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="invalid-feedback">
          <?= $validate->showError('content'); ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><?= lang('App.image'); ?></label>
        <input type="file" name="image" value="<?= old('image'); ?>" class="form-control <?= ($validate->hasError('image')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" placeholder="">
        <div class="invalid-feedback">
          <?= $validate->showError('image'); ?>
        </div>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>