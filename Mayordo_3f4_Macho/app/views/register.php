<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <?php flash_alert() ?>
        <h3 class="text-center mb-4">Register</h3>
        <form action="<?= site_url('/register') ?>" method="post">
          <!-- Username Field -->
          <div class="form-group mb-3">
            <label for="username" class="form-label">Username</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
          </div>

          <!-- Password Field -->
          <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-lock"></i>
              </span>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
          </div>

          <!-- Register Button -->
          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <!-- "Already have an account?" message -->
        <div class="text-center mt-3">
          <p>Already have an account? 
            <a href="<?= site_url('/login') ?>">Login here</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (for proper functioning of Bootstrap components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
