<?php $this->load->view('partials/header'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Welcome</h1>
                    <span class="subheading">Hello World!</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <form>
                <input type="text" name="find">
                <button type="submit">Cari</button>
            </form>

            <?php foreach ($blogs as $key => $blog) : ?>
                <div class="post-preview">
                    <a href="<?= site_url('blog/detail/' . $blog['url']); ?>">
                        <h2 class="post-title">
                            <?= $blog['title']; ?>
                        </h2>
                    </a>
                    <p class="post-meta">Posted on <?= $blog['date']; ?> <a href="<?= site_url('blog/edit/' . $blog['id']); ?>">Edit</a>
                        <a href="<?= site_url('blog/delete/' . $blog['id']); ?>">Delete</a></p>
                    <p><?= $blog['content']; ?></p>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<hr>

<?php $this->load->view('partials/footer'); ?>