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
            <div class="alert alert-warning"><?= validation_errors(); ?></div>
            <?= form_open_multipart(); ?>
            <div class="form-group">
                <label>Judul</label>
                <?= form_input('title', set_value('title', $blog['title']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>URL</label>
                <?= form_input('url', set_value('url', $blog['url']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>Konten</label>
                <?= form_textarea('content', set_value('content', $blog['content']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>cover</label>
                <?= form_upload('cover', set_value('cover', $blog['cover']), 'class="form-control"'); ?>
            </div>
            <button class="btn btn-primary" type="submit">Edit Artikel</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>