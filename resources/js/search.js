const search = document.getElementById('search');
const container = document.getElementById('search-container');
const input = document.getElementById('search-input')

search.addEventListener('click', () => {
    if (container.classList.contains('d-none')) {
        container.classList.remove('d-none')
        input.focus()
    }
});

input.addEventListener('blur', () => {
    container.classList.add('d-none')
});