<h1>Emergency Guidelines</h1>
<p>Safety Tips & Procedures</p>

<div class="card-grid">
    <?php
    $stmt = $pdo->query("SELECT * FROM guidelines");
    while ($row = $stmt->fetch()) {
        $title = htmlspecialchars($row['title']);
        $desc = htmlspecialchars($row['description']);
        $short = htmlspecialchars(substr($row['description'], 0, 120)) . '...';
    ?>
        <div class="card">
            <i class="<?= htmlspecialchars($row['icon_class'] ?? 'fas fa-info-circle') ?> fa-4x" style="color:#003087;"></i>
            <h3><?= $title ?></h3>
            <p><?= $short ?></p>
            <button class="btn btn-blue read-more-btn" data-title="<?= $title ?>" data-desc="<?= $desc ?>">
                Read Full Guide →
            </button>
        </div>
    <?php } ?>
</div>

<div id="guideModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">×</span>
        <h2 id="modalTitle"></h2>
        <div id="modalBody"></div>
    </div>
</div>