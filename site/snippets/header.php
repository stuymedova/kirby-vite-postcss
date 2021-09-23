<!DOCTYPE html>
<html>
<head>
  <meta httpEquiv='Content-Type' content='text/html; charset=UTF-8' />
  <!-- <link rel='canonical' href='' /> -->
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <!-- <link rel='shortcut icon' href='' /> -->
  
  <?php if ($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $page->title() . ' | ' . $site->title() ?></title>
  <?php endif ?>

  <!-- <meta property='og:url' content='' />
  <meta property='og:title' content='' />
  <meta property='og:description' content='' />
  <meta property='og:image' content='' />
  <meta property='og:site_name' content='' />
  <meta name='twitter:card' content='summary_large_image' />
  <meta name='twitter:site' content='' /> -->
  
  <!-- <meta name='description' content=''/> -->

  <!-- <meta name='theme-color' content='#ffffff'> -->
  
  <?= vite()->css() ?>
</head>

<body>