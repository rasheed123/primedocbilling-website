    document.querySelectorAll('.accordion__item button').forEach(button => {
        button.addEventListener('click', () => {
            const expanded = button.getAttribute('aria-expanded') === 'true';
            
            // Collapse all items
            document.querySelectorAll('.accordion__item button').forEach(btn => {
                btn.setAttribute('aria-expanded', 'false');
                btn.nextElementSibling.classList.add('hidden');
            });

            // Expand clicked item if it wasn't already expanded
            if (!expanded) {
                button.setAttribute('aria-expanded', 'true');
                button.nextElementSibling.classList.remove('hidden');
            }
        });
    });