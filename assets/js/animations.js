/* ========================================
   ROCCA TILE & GRANITE — animations.js
   Scroll reveal + stat counter animations
   ======================================== */

(function () {
  'use strict';

  // --- Scroll Reveal (IntersectionObserver) ---
  const animatedElements = document.querySelectorAll('[data-animate]');

  if (animatedElements.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const el = entry.target;
            el.classList.add('in-view');

            // Stagger grid children
            const parent = el.closest('.grid-2, .grid-3, .grid-asym');
            if (parent) {
              const siblings = Array.from(parent.children);
              const index = siblings.indexOf(el);
              const delay = Math.min(index * 100, 400);
              el.style.transitionDelay = delay + 'ms';
            }

            observer.unobserve(el);
          }
        });
      },
      { threshold: 0.15 }
    );

    animatedElements.forEach((el) => observer.observe(el));
  } else {
    // Fallback: show everything if no IO support
    animatedElements.forEach((el) => el.classList.add('in-view'));
  }

  // --- Stat Counter Animation ---
  const statElements = document.querySelectorAll('[data-count]');

  if (statElements.length && 'IntersectionObserver' in window) {
    const countObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.getAttribute('data-count'), 10);
            const suffix = el.getAttribute('data-suffix') || '';
            const prefix = el.getAttribute('data-prefix') || '';
            const duration = 2000;
            const startTime = performance.now();

            function updateCount(currentTime) {
              const elapsed = currentTime - startTime;
              const progress = Math.min(elapsed / duration, 1);
              // Ease out cubic
              const eased = 1 - Math.pow(1 - progress, 3);
              const current = Math.round(eased * target);
              el.textContent = prefix + current.toLocaleString() + suffix;

              if (progress < 1) {
                requestAnimationFrame(updateCount);
              }
            }

            requestAnimationFrame(updateCount);
            countObserver.unobserve(el);
          }
        });
      },
      { threshold: 0.3 }
    );

    statElements.forEach((el) => countObserver.observe(el));
  }
})();
