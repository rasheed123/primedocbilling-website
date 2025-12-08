/**
 * Modal and Table of Contents functionality
 * 
 * @package primedocbilling
 */

(function() {
  'use strict';

  // Demo Modal functionality
  document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.getElementById("openDemoModal");
    const closeBtn = document.getElementById("closeDemoModal");
    const modal = document.getElementById("demoModal");

    if (!modal) return;

    const closeModal = function() {
      modal.classList.remove("flex");
      modal.classList.add("hidden");
      document.body.classList.remove("overflow-hidden");
    };

    if (openBtn) {
      openBtn.addEventListener("click", function() {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.classList.add("overflow-hidden");
      });
    }

    if (closeBtn) {
      closeBtn.addEventListener("click", closeModal);
    }

    // Close when clicking outside modal box
    modal.addEventListener("click", function(e) {
      if (e.target === modal) {
        closeModal();
      }
    });

    // Close with Esc key
    document.addEventListener("keydown", function(e) {
      if (e.key === "Escape" && modal.classList.contains("flex")) {
        closeModal();
      }
    });
  });

  // Table of Contents toggle functionality
  document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('toc-toggle');
    const tocContent = document.getElementById('toc-content');

    if (!toggleBtn || !tocContent) return;

    tocContent.style.transition = 'max-height 0.5s ease, opacity 0.5s ease';
    tocContent.style.overflow = 'hidden';

    let isVisible = true;

    toggleBtn.addEventListener('click', function() {
      if (isVisible) {
        tocContent.style.maxHeight = '0';
        tocContent.style.opacity = '0';
        toggleBtn.textContent = "Show Table of Contents";
        isVisible = false;
      } else {
        tocContent.style.maxHeight = tocContent.scrollHeight + 'px';
        tocContent.style.opacity = '1';
        toggleBtn.textContent = "Hide Table of Contents";
        isVisible = true;
      }
    });

    // Set initial maxHeight
    tocContent.style.maxHeight = tocContent.scrollHeight + 'px';
  });

})();
