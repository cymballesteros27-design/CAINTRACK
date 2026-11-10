<?php

$systemName = 'CAINTRACK';
$fullTitle  = 'A Web-Based Barangay Document Monitoring and Tracking System for DILG Cainta, Rizal';

$features = [
    ['Centralized document management', 'Every barangay document is stored in one place and is easy to find.'],
    ['Online submission and tracking',  'Submit a document online and follow it from submission to approval.'],
    ['Status monitoring and notifications', 'See which documents are pending, incomplete, or for revision, and get notified of updates.'],
    ['Version control and submission history', 'Keep every revision and see who submitted what, and when.'],
    ['Compliance monitoring and dashboard', 'Check each barangay’s submissions and overdue documents at a glance.'],
    ['Automated report generation', 'Generate summary reports without compiling records by hand.'],
];

$sampleDocs = [
    ['Monthly Report',       'San Roque',      'approved',  'Approved'],
    ['Annual Accomplishment', 'Santo Niño',     'review',    'Under review'],
    ['Certification',        'San Isidro',     'revision',  'For revision'],
    ['Financial Statement',  'Santa Rosa',     'pending',   'Pending'],
];

$roles = [
    ['DILG personnel', 'Review submissions, return documents for revision, and monitor all seven barangays.'],
    ['Barangay Secretaries and authorized representatives', 'Submit required documents and check their status without follow-up visits.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $systemName ?> | DILG Cainta, Rizal</title>
    <meta name="description" content="<?= htmlspecialchars($fullTitle) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<header class="site-header">
    <div class="wrap header-inner">
        <a class="brand" href="index.php" aria-label="<?= $systemName ?> home">
            <img src="../IMAGES/dilglogo.png" alt="DILG seal" class="logo">
            <img src="../IMAGES/caintalogo.png" alt="Municipality of Cainta, Rizal seal" class="logo">
            <span class="brand-name"><?= $systemName ?></span>
        </a>
        <nav class="nav" aria-label="Main">
            <a href="#features">Features</a>
            <a href="#users">Who uses it</a>
            <a href="login.php" class="btn btn-dark">Log in</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="wrap hero-grid">
            <div class="hero-copy">
                <h1>Know where every barangay document stands.</h1>
                <p class="lead">
                    <?= $systemName ?> helps DILG Cainta and its seven barangays submit, track,
                    and monitor documents in one place.
                </p>
                <div class="actions">
                    <a href="login.php" class="btn btn-dark">Log in to <?= $systemName ?></a>
                    <a href="#features" class="btn btn-outline">See what it does</a>
                </div>
            </div>

            <aside class="tracker" aria-label="Sample document tracker">
                <h2 class="tracker-title">Document tracker</h2>
                <p class="tracker-note">Sample data</p>
                <ul class="tracker-list">
                    <?php foreach ($sampleDocs as [$doc, $brgy, $class, $label]): ?>
                    <li class="tracker-row">
                        <div>
                            <strong><?= htmlspecialchars($doc) ?></strong>
                            <span>Barangay <?= htmlspecialchars($brgy) ?></span>
                        </div>
                        <span class="status status-<?= $class ?>"><?= htmlspecialchars($label) ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </aside>
        </div>
    </section>

    <section id="features" class="section">
        <div class="wrap">
            <h2>What you can do with <?= $systemName ?></h2>
            <ul class="feature-list">
                <?php foreach ($features as [$title, $text]): ?>
                <li>
                    <h3><?= htmlspecialchars($title) ?></h3>
                    <p><?= htmlspecialchars($text) ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section id="users" class="section section-tint">
        <div class="wrap">
            <h2>Who uses it</h2>
            <div class="roles">
                <?php foreach ($roles as [$role, $text]): ?>
                <div class="role">
                    <h3><?= htmlspecialchars($role) ?></h3>
                    <p><?= htmlspecialchars($text) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="wrap">
        <p><strong><?= $systemName ?></strong>: <?= htmlspecialchars($fullTitle) ?></p>
        <p>&copy; <?= date('Y') ?> DILG Cainta, Rizal. Capstone project, Polytechnic University of the Philippines.</p>
    </div>
</footer>

</body>
</html>