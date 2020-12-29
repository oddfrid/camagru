// CSS часть кнопок

const Buttons = document.querySelectorAll('button');

Buttons.forEach(button => button.addEventListener('mouseover', () => {
    // TODO подумать, мб подсвечивать
    if (button.getAttribute('id') !== "profile-btn") {
        const icons = button.querySelectorAll("path");
        icons.forEach(icon =>  icon.classList.add('icon-hovered'));
    }
}))
Buttons.forEach(button => button.addEventListener('mouseout', () => {
    const icons = button.querySelectorAll("path");
    icons.forEach(icon => icon.classList.remove('icon-hovered'));
}))
Buttons.forEach(button => button.removeEventListener('mouseover', () => {
    const icons = button.querySelectorAll("path");
    icons.forEach(icon =>  icon.classList.add('icon-hovered'));
}))
Buttons.forEach(button => button.removeEventListener('mouseout', () => {
    const icons = button.querySelectorAll("path");
    icons.forEach(icon => icon.classList.remove('icon-hovered'));
}))
