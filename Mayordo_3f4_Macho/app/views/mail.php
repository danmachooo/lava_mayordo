<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send Email</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
      <?php flash_alert(); ?>
      
      <?php foreach($errors as $error) { echo $error; };?>


        <h3 class="text-center mb-4">Send Email</h3>
        <form action=<?= site_url("/send-mail") ?> method="post" enctype="multipart/form-data">
          
          <!-- Sender Name -->
          <div class="form-group mb-3">
            <label for="sender-name" class="form-label">Sender Name</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
              <input type="text" class="form-control" id="sender-name" name="sender-name" placeholder="Enter your name">
            </div>
          </div>

          <!-- Sender Email -->
          <div class="form-group mb-3">
            <label for="sender-email" class="form-label">Sender Email</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
              <input type="email" class="form-control" id="sender-email" name="sender-email" placeholder="Enter your email">
            </div>
          </div>

          <!-- Recipient Email -->
          <div class="form-group mb-3">
            <label for="recipient-email" class="form-label">Recipient Email</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-user-plus"></i>
              </span>
              <input type="email" class="form-control" id="recipient-email" name="recipient-email" placeholder="Enter recipient's email">
            </div>
          </div>

          <!-- Subject -->
          <div class="form-group mb-3">
            <label for="subject" class="form-label">Subject</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-heading"></i>
              </span>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter email subject">
            </div>
          </div>

          <!-- Email Content -->
          <div class="form-group mb-3">
            <label for="email-content" class="form-label">Email Content</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-edit"></i>
              </span>
              <textarea class="form-control" id="email-content" name="email-content" rows="5" placeholder="Enter your message"></textarea>
            </div>
          </div>

          <!-- Attachment -->
          <div class="form-group mb-3">
            <label for="attachment" class="form-label">Attachment</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="fas fa-paperclip"></i>
              </span>
              <input type="file" class="form-control" id="attachment" name="attachment" size="20">
            </div>
          </div>

          <!-- Send Button -->
          <button type="submit" class="btn btn-primary w-100">Send Email</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (for proper functioning of Bootstrap components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
