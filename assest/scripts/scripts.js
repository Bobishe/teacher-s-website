
/*--------Появление header-----------*/
const header = document.querySelector('.header');
const container = document.querySelector('.container');
const headerColor = document.querySelector('.header-color');

let headerVisible = false;

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > 1000) {
        header.classList.add('sticky');
        container.classList.add('sticky');
        headerColor.classList.add('sticky');
        if (!headerVisible) {
            headerVisible = true;
            fadeInHeader();
        }
    } else {
        header.classList.remove('sticky');
        header.classList.remove('visible');
        container.classList.remove('sticky');
        headerColor.classList.remove('sticky');
        headerVisible = false;
    }
});


/*----------Появление видео------------*/
function fadeInHeader() {
    let opacity = 0;
    const animationDuration = 300; // Длительность анимации в миллисекундах
    const step = 16.67; // Частота обновления анимации (приблизительно 60 кадров в секунду)
    const increment = step / animationDuration;

    const fadeIn = setInterval(() => {
        opacity += increment;
        header.style.opacity = opacity;
        if (opacity >= 1) {
            clearInterval(fadeIn);
        }
    }, step);
}


document.addEventListener('DOMContentLoaded', () => {
    const videoButton = document.getElementById('videoButton');
    const overlay = document.getElementById('overlay');
    const video = document.getElementById('video');

    videoButton.addEventListener('click', () => {
        overlay.style.opacity = '1';
        overlay.style.visibility = 'visible';
        video.src = 'https://www.youtube.com/embed/mAbGMqc0-sQ&autoplay=1';
        video.width = 560;
        video.height = 315;
        video.title = "YouTube video player";
    });

    overlay.addEventListener('click', () => {
        overlay.style.opacity = '0';
        overlay.style.visibility = 'hidden';
        video.src = '';
    });
});

/*-----------Отображение сообщение Email----------*/
function showPopup() {
    var popup = document.getElementById("popup");
    popup.classList.add("hidden");

    setTimeout(function() {
        popup.classList.remove("hidden");
    }, 5000);
}

// Вызовите эту функцию, когда хотите показать всплывающее окно
showPopup();