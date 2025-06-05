<?php
require 'inc/db.php';
$stmt = $pdo->query("SELECT * FROM articles ORDER BY created_at DESC");
$articles = $stmt->fetchAll();
?><!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Rumah Koding</title><link rel="stylesheet" href="style.css"></head>
<body><header><h1>Blog Rumah Koding</h1></header>
<main class="container"><h2>Artikel Terbaru</h2><ul>
<?php foreach ($articles as $a): ?>
  <li><a href="article.php?id=<?= $a['id'] ?>"><?= htmlspecialchars($a['title']) ?></a>
    <small><?= date('d M Y', strtotime($a['created_at'])) ?></small></li>
<?php endforeach; ?></ul></main><footer><p>&copy; 2025 Blog Rumah Koding</p></footer></body></html>