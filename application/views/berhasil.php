<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <style>
        body {
            background-color: wheat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <h1>Terimakasih <?php echo $this->session->userdata('email'); ?> sudah mengisi survei kami</h1>
            <p id="info"></p>
        </div>
    </div>
</body>

<script>
    setTimeout(function() {
        window.location.href = '<?php echo site_url() ?>/Welcome/index';
    }, 5000);
    document.getElementById('info').innerHTML='Redirecting in 5 seconds...';
</script>

</html>