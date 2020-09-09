<?php $this->load->view('partials/header'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?= base_url(); ?>assets/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?= $blog['title']; ?></h1>
                    <span class="meta">Posted on <?= $blog['date']; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?= $blog['content']; ?>
            </div>
        </div>
    </div>
</article>

<hr>

<body>
    <h1></h1>
    <p></p>
</body>

<?php $this->load->view('partials/footer'); ?>