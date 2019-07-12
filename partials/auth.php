<?php if (session_status() == PHP_SESSION_ACTIVE): ?>
    <a href="logout.php"><?= t('LOGOUT', $_SESSION['lang']) ?></a>
<?php else: ?>
    <a href="login.php"><?= t('LOGIN', $_SESSION['lang']) ?></a>
<?php endif ?>