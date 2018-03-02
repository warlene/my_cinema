<h1>Hello World <?= htmlspecialchars($couleur)?></h1>
<?php if ($couleur == 'rose'): ?></h2>
      <h2>Color is Rose!
    <?php elseif ($couleur == 'bleu'): ?>
     <h2>Color is Blue!</h2>
    <?php else: ?>
    <h2>Color isn't Rose or Blue!</h2>
    <?php endif; ?>
    <?php if (isset($couleur)): ?>
      <h2><?= htmlspecialchars($couleur)?> is define!</h2>
    <?php endif; ?>
