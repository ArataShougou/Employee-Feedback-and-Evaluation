<style>
    body {
        background: url("<?php echo base_url('assets/asset/bg3.jpg'); ?>") no-repeat center center fixed;
        background-size: cover;
    }
</style>
<div class="container">
    <h1>Daftar Assessment</h1>
    <div class="list-group">
        <?php foreach ($links as $link) : ?>
            <a class="list-group-item list-group-item-action" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
        <?php endforeach; ?>
        </div>
</div>
