<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="/CSS/entete.css" />
    <link rel="stylesheet" href="/CSS/corps.css" />
    <link rel="stylesheet" href="/CSS/nav.css" />
    <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {echo '<link rel="stylesheet" href="/CSS/accueil.css" />';}?>
</head>