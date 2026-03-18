/* ============================================
   main.js — Portfolio Samantha
   - Particules canvas
   - Scroll reveal
   - Menu burger
============================================ */

/* ===== PARTICULES ===== */
(function () {
  const canvas = document.getElementById('particles');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let W, H, particles = [];

  const COLORS = ['rgba(107,33,168,', 'rgba(34,197,94,', 'rgba(147,51,234,'];

  function resize() {
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
  }

  function randomBetween(a, b) {
    return a + Math.random() * (b - a);
  }

  function createParticle() {
    const color = COLORS[Math.floor(Math.random() * COLORS.length)];
    return {
      x: randomBetween(0, W),
      y: randomBetween(0, H),
      r: randomBetween(0.5, 2),
      alpha: randomBetween(0.1, 0.5),
      vx: randomBetween(-0.15, 0.15),
      vy: randomBetween(-0.3, -0.05),
      color
    };
  }

  function init() {
    resize();
    particles = [];
    const count = Math.floor(W / 8);
    for (let i = 0; i < count; i++) particles.push(createParticle());
  }

  function draw() {
    ctx.clearRect(0, 0, W, H);
    for (let p of particles) {
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = p.color + p.alpha + ')';
      ctx.fill();

      p.x += p.vx;
      p.y += p.vy;

      if (p.y < -5) {
        p.y = H + 5;
        p.x = randomBetween(0, W);
      }
    }
    requestAnimationFrame(draw);
  }

  window.addEventListener('resize', init);
  init();
  draw();
})();

/* ===== SCROLL REVEAL ===== */
(function () {
  const els = document.querySelectorAll('.reveal');
  if (!els.length) return;

  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => io.observe(el));
})();

/* ===== MENU BURGER ===== */
(function () {
  const burger = document.getElementById('burger');
  const navLinks = document.querySelector('.nav-links');
  if (!burger || !navLinks) return;

  burger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
  });

  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => navLinks.classList.remove('open'));
  });
})();

/* ===== NAV SCROLL ===== */
(function () {
  const nav = document.querySelector('.nav');
  if (!nav) return;
  window.addEventListener('scroll', () => {
    nav.style.boxShadow = window.scrollY > 30
      ? '0 4px 30px rgba(0,0,0,0.4)'
      : 'none';
  });
})();