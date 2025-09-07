<?php
if (!isset($pageTitle)) { $pageTitle = 'MEDIGAP Clinic'; }
if (!isset($pathToRoot)) { $pathToRoot = ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="<?php echo $pathToRoot; ?>assets/css/base.css" />
    
    <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="<?php echo $pathToRoot . $page_css; ?>">
    <?php endif; ?>
</head>
<body class="<?php echo $body_class ?? ''; ?>">

<?php
if (!isset($is_login_page) || $is_login_page === false): ?>
    <button id="menu-toggle">Menu</button>
<?php endif; ?>

<div class="page-wrapper">
    <div class="page-layout">