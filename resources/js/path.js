const buttons = document.querySelectorAll('button.nav-link')
const path = document.getElementById('path')

buttons.forEach(button => {
    button.addEventListener('click', function () {
        path.textContent = button.textContent; 
    });
});