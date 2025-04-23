<?php
session_start();
define('PASSWORD', 'projektant123');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['password'] === PASSWORD) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Nesprávné heslo.';
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Přihlášení – Online Projektant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <h1>Přihlášení do administrace</h1>
  <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
  <form method="POST">
    <div class="mb-3">
      <label for="password" class="form-label">Heslo</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Přihlásit se</button>
  </form>
</body>
</html>
