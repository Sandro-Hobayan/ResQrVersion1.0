<section class="hero">
    <h1>Welcome to Barangay 176A<br>Emergency System</h1>
    <p>Quick access to hotlines and safety guidelines</p>
</section>

<h2>Emergency Hotlines</h2>
<div class="card-grid">
    <?php
    $stmt = $pdo->query("SELECT * FROM hotlines ORDER BY name");
    while ($row = $stmt->fetch()) {
        $cleanNum = preg_replace('/[^0-9]/', '', $row['number']);
    ?>
        <div class="hotline-item">
            <i class="<?= htmlspecialchars($row['icon_class'] ?? 'fas fa-phone') ?> fa-3x" style="color:<?= htmlspecialchars($row['color'] ?? '#c8102e') ?>;"></i>
            <div>
                <h4><?= htmlspecialchars($row['name']) ?></h4>
                <p><?= htmlspecialchars($row['number']) ?></p>
            </div>
            <a href="tel:<?= $cleanNum ?>" class="btn-call">
                <i class="fas fa-phone-alt"></i> Call
            </a>
        </div>
    <?php } ?>
</div>