<?php
session_start();

$systemName = 'CAINTRACK';
$error      = '';
$username   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $error = 'Enter your username or email and your password.';
    } else {
        // TODO: check the username and password against the users table
        // (use password_verify() on a hashed password), then set the session
        // and redirect by role:
        //   DILG personnel  -> dashboard for all barangays
        //   Barangay user   -> dashboard for their own barangay
        $error = 'Login is not connected to the database yet.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in | <?= $systemName ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body class="login-page">

<main class="login-wrap">
    <div class="login-card">
        <a class="brand login-brand" href="index.php" aria-label="Back to <?= $systemName ?> home">
            <img src="../IMAGES/dilglogo.png" alt="DILG seal" class="logo">
            <img src="../IMAGES/caintalogo.png" alt="Municipality of Cainta, Rizal seal" class="logo">
            <span class="brand-name"><?= $systemName ?></span>
        </a>

        <h1>Log in</h1>
        <p class="login-sub">Use the account given to you by DILG Cainta.</p>

        <?php if ($error !== ''): ?>
            <p class="form-error" role="alert"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form method="post" action="login.php" novalidate>
            <div class="field">
                <label for="username">Username or email</label>
                <input type="text" id="username" name="username"
                       value="<?= htmlspecialchars($username) ?>"
                       autocomplete="username" required autofocus>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                       autocomplete="current-password" required>
            </div>

            <button type="submit" class="btn btn-dark btn-block">Log in</button>
        </form>

        <p class="login-help">
            Forgot your password or need an account? Contact your DILG administrator.
        </p>
        <p class="login-back"><a href="index.php">Back to home page</a></p>
    </div>
</main>

</body>
</html>
