<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view('header');?>
</head>

<body>
    <div><?php $this->load->view('navbar'); ?></div>
    <div class="main"><?php $this->load->view($body) ?></div>
</body>

</html>