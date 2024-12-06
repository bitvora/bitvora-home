<?php
include(__DIR__ . '/config.php');
?>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-F53PKPK28X"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'G-F53PKPK28X');
</script>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="bitvora" />
<meta name="robots" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') : 'index, follow'; ?>" />
<meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') : 'Bitcoin & Lightning API'; ?>" />
<meta property="og:url" content="<?php echo isset($pageURL) ? htmlspecialchars($pageURL, ENT_QUOTES, 'UTF-8') : $config['base_url']; ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo isset($pageImage) ? htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') : $config['base_url'] . '/assets/bitvora.png'; ?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') : 'Bitcoin & Lightning API'; ?>" />
<meta name="twitter:image" content="<?php echo isset($pageImage) ? htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') : $config['base_url'] . '/assets/bitvora.png'; ?>" />
<link rel="icon" href="/assets/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon" />
<link rel="canonical" href="<?php echo isset($pageURL) ? htmlspecialchars($pageURL, ENT_QUOTES, 'UTF-8') : $config['base_url']; ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="/styles/main.css" />
<title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') : 'Bitcoin & Lightning API'; ?></title>