
document.addEventListener("DOMContentLoaded", function() {
    document.body.classList.add('fade', 'in');
    
    document.querySelectorAll('.fade').forEach(el => {
        el.classList.add('in');
    });

    document.querySelectorAll('nav a').forEach(anchor => {
        anchor.addEventListener('click', function(event) {
            event.preventDefault();
            const target = this.getAttribute('href');

            document.body.classList.remove('in');

            setTimeout(() => {
                window.location.href = target;
            }, 500); 
        });
    });
});
