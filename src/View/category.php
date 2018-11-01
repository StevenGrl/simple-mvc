<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simple MVC</title>

  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="icon" href="/assets/images/favicon.png">
</head>
<body>
  <section>
    <h1>Categories</h1>
    <ul>
    <?php foreach ($categories as $category) : ?>
      <li><a href="category/<?php echo $category['id'] ?>"><?= $category['name'] ?></a></li>
    <?php endforeach ?>
    </ul>
  </section>
</body>
</html>
