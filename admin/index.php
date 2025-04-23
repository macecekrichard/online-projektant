<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
$content = json_decode(file_get_contents('../content/homepage.json'), true);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Admin – Online Projektant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
  <h1>Editor obsahu</h1>
  <form action="save.php" method="POST">
    <div class="mb-3">
      <label for="heroTitle" class="form-label">Nadpis</label>
      <input type="text" class="form-control" id="heroTitle" name="heroTitle" value="<?php echo htmlspecialchars($content['heroTitle']); ?>">
    </div>
    <div class="mb-3">
      <label for="heroText" class="form-label">Text</label>
      <textarea class="form-control" id="heroText" name="heroText"><?php echo htmlspecialchars($content['heroText']); ?></textarea>
    </div>
    <div class="mb-3">
      <label for="ctaButton" class="form-label">Text tlačítka</label>
      <input type="text" class="form-control" id="ctaButton" name="ctaButton" value="<?php echo htmlspecialchars($content['ctaButton']); ?>">
    </div>
    <button type="submit" class="btn btn-primary">💾 Uložit</button>
    <a href="logout.php" class="btn btn-secondary">Odhlásit se</a>
  </form>
</body>
</html>
