<?php
$projects = [
    [
        'title' => 'FanSite Musique',
        'desc' => 'Site de présentation de groupes musicaux créé avec HTML et CSS.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/fansite/',
        'img' => 'images/musicland.png',
        'tag' => 'HTML / CSS / JS'
    ],
    [
        'title' => 'Guestbook Restaurant',
        'desc' => 'Livre d\'or d\'un restaurant développé en PHP, HTML, CSS et SQL.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/guestbook/pages/accueil.php',
        'img' => 'images/bistrot.png',
        'tag' => 'PHP / SQL'
    ],
    [
        'title' => 'Présentation de Dramas',
        'desc' => 'Site de présentation de dramas réalisé en PHP, HTML et CSS.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/module_connexion/',
        'img' => 'images/dramas.png',
        'tag' => 'PHP / CSS'
    ],
    [
        'title' => 'Pendu Harry Potter',
        'desc' => 'Jeu du pendu sur le thème Harry Potter réalisé en PHP.',
        'link' => 'https://samantha-colmart.students-laplateforme.io/pendu_HP/',
        'img' => 'images/hp.png',
        'tag' => 'PHP'
    ],
    [
        'title' => 'Réservation Massage',
        'desc' => 'Site de réservation pour un salon de massage (PHP, CSS, SQL).',
        'link' => 'https://samantha-colmart.students-laplateforme.io/r%c3%a9servation_massage/pages/accueil.php',
        'img' => 'images/salonmassage.png',
        'tag' => 'PHP / SQL'
    ],
    [
        'title' => 'QuizNight',
        'desc' => 'Site de quiz spécial mangas (PHP, HTML / CSS, SQL).',
        'link' => 'https://samantha-colmart.students-laplateforme.io/quiznight/pages/accueil.php',
        'img' => 'images/quiznight.png',
        'tag' => 'PHP / SQL / CSS'
    ]
];

$hard_skills = ['HTML / CSS', 'PHP', 'SQL', 'GitHub', 'JavaScript', 'Python', 'Figma'];
$soft_skills = ['Autonomie', 'Organisation', 'Rigueur', 'Curiosité', 'Travail en équipe'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Samantha — Développeuse Web</title>
  <meta name="description" content="Portfolio de Samantha, développeuse web junior en reconversion">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ===== CANVAS PARTICULES ===== -->
<canvas id="particles"></canvas>

<!-- ===== NAV ===== -->
<nav class="nav">
  <div class="nav-logo">S<span>.</span></div>
  <ul class="nav-links">
    <li><a href="#about">À propos</a></li>
    <li><a href="#skills">Compétences</a></li>
    <li><a href="#projects">Projets</a></li>
    <li><a href="#contact" class="nav-cta">Contact</a></li>
  </ul>
  <button class="burger" id="burger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- ===== HERO ===== -->
<header class="hero" id="home">
  <div class="hero-content">
    <p class="hero-pre">Développeuse Web Junior</p>
    <h1 class="hero-title">
      <span class="glitch" data-text="Samantha">Samantha</span>
    </h1>
    <p class="hero-sub">En reconversion · En recherche d'alternance</p>
    <div class="hero-actions">
      <a href="#projects" class="btn btn-primary">Voir mes projets</a>
      <a href="#contact" class="btn btn-outline">Me contacter</a>
    </div>
  </div>
  <div class="hero-deco">
    <div class="deco-ring ring-1"></div>
    <div class="deco-ring ring-2"></div>
    <div class="deco-ring ring-3"></div>
  </div>
  <div class="scroll-hint">
    <span>Scroll</span>
    <div class="scroll-line"></div>
  </div>
</header>

<!-- ===== À PROPOS ===== -->
<section class="about reveal" id="about">
  <div class="container">
    <div class="section-label">01 — À propos</div>
    <div class="about-grid">
      <div class="about-text">
        <h2>Un parcours <em>atypique</em>,<br>une passion <em>authentique</em>.</h2>
        <p>
          Anciennement secrétaire médicale, je me reconvertis dans le développement web
          avec méthode et enthousiasme. J'aime créer des sites clairs, structurés et
          fonctionnels — avec une attention particulière à l'organisation du code et à
          l'expérience utilisateur.
        </p>
        <p>
          Chaque projet est pour moi une nouvelle opportunité d'apprendre et de progresser.
        </p>
      </div>
      <div class="about-card">
        <div class="about-stat">
          <span class="stat-num">10<span class="accent">+</span></span>
          <span class="stat-label">Projets réalisés</span>
        </div>
        <div class="about-stat">
          <span class="stat-num">5<span class="accent">+</span></span>
          <span class="stat-label">Langages maîtrisés</span>
        </div>
        <div class="about-stat">
          <span class="stat-num">100<span class="accent">%</span></span>
          <span class="stat-label">Motivée</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== COMPÉTENCES ===== -->
<section class="skills reveal" id="skills">
  <div class="container">
    <div class="section-label">02 — Compétences</div>
    <h2>Ce que je <em>sais faire</em></h2>
    <div class="skills-wrap">
      <div class="skills-col">
        <h3><span class="tag-dot"></span> Hard skills</h3>
        <div class="pills">
          <?php foreach ($hard_skills as $s): ?>
            <span class="pill pill-hard"><?= htmlspecialchars($s) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="skills-divider"></div>
      <div class="skills-col">
        <h3><span class="tag-dot tag-dot-soft"></span> Soft skills</h3>
        <div class="pills">
          <?php foreach ($soft_skills as $s): ?>
            <span class="pill pill-soft"><?= htmlspecialchars($s) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PROJETS ===== -->
<section class="projects reveal" id="projects">
  <div class="container">
    <div class="section-label">03 — Projets</div>
    <h2>Mes <em>réalisations</em></h2>
    <div class="projects-grid">
      <?php foreach ($projects as $i => $p): ?>
        <article class="project-card <?= empty($p['link']) ? 'project-soon' : '' ?>">
          <div class="project-img-wrap">
            <img src="<?= htmlspecialchars($p['img']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
            <div class="project-overlay">
              <?php if (!empty($p['link'])): ?>
                <a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" class="overlay-btn">
                  Voir le projet ↗
                </a>
              <?php else: ?>
                <span class="overlay-soon">Bientôt disponible</span>
              <?php endif; ?>
            </div>
          </div>
          <div class="project-body">
            <span class="project-tag"><?= htmlspecialchars($p['tag']) ?></span>
            <h3><?= htmlspecialchars($p['title']) ?></h3>
            <p><?= htmlspecialchars($p['desc']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="contact reveal" id="contact">
  <div class="container">
    <div class="section-label">04 — Contact</div>
    <h2>Travaillons <em>ensemble</em></h2>
    <p class="contact-sub">Je suis disponible pour une alternance — n'hésitez pas à me contacter.</p>
    <div class="contact-links">
      <a href="https://www.linkedin.com/in/samantha-colmart-069359283/" target="_blank" class="contact-link">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.554v-5.569c0-1.328-.024-3.037-1.85-3.037-1.851 0-2.134 1.445-2.134 2.939v5.667H9.358V9h3.414v1.561h.047c.476-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.284zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        LinkedIn
      </a>
      <a href="https://github.com/samantha-colmart" target="_blank" class="contact-link">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
        GitHub
      </a>
      <a href="mailto:samantha0608@hotmail.fr" class="contact-link">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        Email : samantha0608@hotmail.fr
      </a>
      <a href="tel:0620503943" class="contact-link">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
        Tél : 06.20.50.39.43
      </a>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
  <div class="container">
    <p>© 2026 — Samantha Colmart · Développeuse Web Junior</p>
    <p class="footer-made">Fait avec <span class="accent">♥</span></p>
  </div>
</footer>

<script src="main.js"></script>
</body>
</html>