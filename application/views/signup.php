<style>
    body {
        background-color: wheat;
        background-size: cover;
    }
</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Signup</h2>
            <?php echo validation_errors(); ?>
            <?php echo form_open('welcome/signup2'); ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
            <p class="mt-3">Already have an account? <a href="<?php echo site_url('welcome/loginview'); ?>">Login</a></p>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>