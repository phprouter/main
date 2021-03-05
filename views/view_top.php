<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/media.css">
  <title>
    <?php out($top_title) ?>
  </title>
</head>
<body>

  <nav>
    <a href="/" class="font_weight_400 <?= $top_active=='index'?'active':''; ?>">
      PHP ROUTER
    </a>
    <div>
      <a href="/routing" <?= $top_active=='router'?'class="active"':''; ?>>
        Routing
      </a>
      <a href="/xss" <?= $top_active=='xss'?'class="active"':''; ?>>
        XSS
      </a>
      <a href="/csrf" <?= $top_active=='csrf'?'class="active"':''; ?>>
        CSRF
      </a>
    </div>
  </nav>