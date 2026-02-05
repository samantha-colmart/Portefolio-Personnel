<?php
$projects = [
    [
        'title' => 'FanSite Musique',
        'desc' => 'Site de présentation de groupes musicaux créé avec HTML et CSS.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/fansite/',
        'img' => 'images/musicland.png'
    ],
    [
        'title' => 'Guestbook Restaurant',
        'desc' => 'Livre d’or d’un restaurant développé en PHP, HTML, CSS et SQL.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/guestbook/pages/accueil.php',
        'img' => 'images/bistrot.png'
    ],
    [
        'title' => 'Présentation de Dramas',
        'desc' => 'Site de présentation de dramas réalisé en PHP, HTML et CSS.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/module_connexion/',
        'img' => 'images/dramas.png'
    ],
    [
        'title' => 'Pendu Harry Potter',
        'desc' => 'Jeu du pendu sur le thème Harry Potter réalisé en PHP.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/pendu_HP/',
        'img' => 'images/hp.png'
    ],
    [
        'title' => 'Réservation Massage',
        'desc' => 'Site de réservation pour un salon de massage (PHP, CSS, SQL).',
        'link' => '',
        'img' => 'images/A VENIR.png'
    ],
    [
        'title' => 'Projet à venir',
        'desc' => 'Nouveau projet en cours de développement.',
        'link' => '',
        'img' => 'images/A VENIR.png'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Portfolio – Samantha | Développeuse Web</title>
  <meta name="description" content="Portfolio de Samantha, développeuse web junior en recherche d’alternance">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- ===== HERO ===== -->
<header class="hero">
  <div class="container">
    <h1>Bonjour, moi c’est <span>Samantha</span></h1>
    <p>Développeuse web junior — en recherche d’alternance</p>
    <a href="#projects" class="btn">Voir mes projets</a>
  </div>
</header>

<!-- ===== À PROPOS ===== -->
<section class="about">
  <div class="container">
    <h2>À propos de moi</h2>
    <p>
      Anciennement secrétaire médicale, je me reconvertis aujourd’hui dans le développement web.
      J’aime créer des sites clairs, structurés et fonctionnels, avec une attention particulière à l’organisation du code.
    </p>
  </div>
</section>

<!-- ===== COMPÉTENCES ===== -->
<section class="skills">
  <div class="container">
    <h2>Compétences</h2>

    <div class="skills-grid">

      <!-- HARD SKILLS -->
      <div class="skills-group">
        <h3>Hard skills</h3>
        <div class="skills-list">
          <div class="card">HTML / CSS</div>
          <div class="card">PHP</div>
          <div class="card">SQL</div>
          <div class="card">Git / GitHub</div>
        </div>
      </div>

      <!-- SOFT SKILLS -->
      <div class="skills-group">
        <h3>Soft skills</h3>
        <div class="skills-list">
          <div class="card">Autonomie</div>
          <div class="card">Organisation</div>
          <div class="card">Rigueur</div>
          <div class="card">Capacité d’apprentissage</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== PROJETS ===== -->
<section id="projects" class="projects">
  <div class="container">
    <h2>Projets</h2>

    <div class="grid">
      <?php foreach ($projects as $project): ?>
        <div class="project">
          <img src="<?= $project['img'] ?>" alt="<?= htmlspecialchars($project['title']) ?>">
          <h3><?= htmlspecialchars($project['title']) ?></h3>
          <p><?= htmlspecialchars($project['desc']) ?></p>

          <?php if (!empty($project['link'])): ?>
            <a href="<?= $project['link'] ?>" target="_blank">Voir le projet</a>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="contact">
  <div class="container">
    <h2>Contact</h2>
<p>
  <a href="https://www.linkedin.com/in/samantha-colmart-069359283/" target="_blank">LinkedIn</a> |
  <a href="https://github.com/samantha-colmart" target="_blank">GitHub</a> |
  <a href="https://samantha-colmart.students-laplateforme.io/" target="_blank">Plesk</a> |
  Téléphone : 06 20 50 39 43 |
  Email : samantha0608@hotmail.fr
</p>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <p>© 2026 — Samantha</p>
</footer>

</body>
</html>
