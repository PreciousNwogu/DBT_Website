
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreLinks = document.querySelectorAll('.see-more');

    seeMoreLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const fullText = this.previousElementSibling;
            if (fullText.style.display === 'none') {
                fullText.style.display = 'inline';
                this.textContent = 'See Less';
            } else {
                fullText.style.display = 'none';
                this.textContent = 'See More';
            }

        });
    });
});

