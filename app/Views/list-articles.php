<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
  <div class="container mt-5">
    <h3>List Artikel</h3>
    <div class="card mt-4 p-3">
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">Author</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            foreach ($articles as $key => $article) :
          ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $article['title']; ?></td>
            <td>Otto</td>
            <td>
              <a href="/edit/<?= $article['id']; ?>" class="btn btn-primary">Edit</a>
              <a href="/hapus/<?= $article['id']; ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <?php
            endforeach;
          ?>
        </tbody>
      </table>
    </div>
  </div>
<?= $this->endSection(); ?>