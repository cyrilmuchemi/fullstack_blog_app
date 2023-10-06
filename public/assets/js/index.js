function display_image_edit(file){
    document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
}

const themeToggle = document.querySelector('.theme-toggle');
const slider = document.querySelector('.slider');
const sunIcon = document.querySelector('.bi-sun-fill');
const moonIcon = document.querySelector('.bi-moon-fill');

let isDarkMode = false;

themeToggle.addEventListener('click', () => {
    isDarkMode = !isDarkMode;
    const translateValue = isDarkMode ? 'translateX(60px)' : 'translateX(0)';
    slider.style.transform = translateValue;
    sunIcon.style.color = isDarkMode ? '#fff' : '#333';
    moonIcon.style.color = isDarkMode ? '#333' : '#fff';

    // additional logic to toggle website's theme.
});

