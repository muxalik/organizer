[...document.querySelectorAll('.menu-item')].forEach(item => {
    item.addEventListener('click', () => {
        item.classList.add('menu-item-animating')
        if (item.classList.contains('open')) {
            item.classList.add('menu-item-closing')
            item.classList.remove('open')
            item.classList.remove('menu-item-animating')
            item.classList.remove('menu-item-closing')
        } else {
            item.classList.add('open')
            item.classList.remove('menu-item-animating')
        }
    });
});