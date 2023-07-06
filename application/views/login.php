<style>
    body {
        background-color: wheat;
        background-size: cover;
    }
</style>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Login</h2>
      <?php echo validation_errors(); ?>
      <?php if (isset($error)) echo $error; ?>
      <?php echo form_open('welcome/login2'); ?>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input title="email" type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" autocomplete="email" placeholder="Example@mail.com" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input title="password" type="password" name="password" class="form-control" autocomplete="current-password" placeholder="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <p class="mt-3">Don't have an account? <a href="<?php echo site_url('welcome/signupview'); ?>">Signup</a></p>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<hr>