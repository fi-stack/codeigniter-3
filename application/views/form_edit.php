<?php $this->load->view('partials/header'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Edit Artikel</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1>Edit Artikel</h1>
            <form method="POST">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="title" value="<?= $blog['title']; ?>">
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input class="form-control" type="text" name="url" value="<?= $blog['url']; ?>">
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <textarea class="form-control" name="content" id="" cols="30" rows="10"><?= $blog['content']; ?></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Edit Artikel</button>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>