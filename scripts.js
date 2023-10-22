document.addEventListener('DOMContentLoaded', () => {
    const videoButton = document.getElementById('videoButton');
    const overlay = document.getElementById('overlay');
    const video = document.getElementById('video');

    videoButton.addEventListener('click', () => {
        overlay.style.opacity = '1';
        overlay.style.visibility = 'visible';
        video.src = 'https://www.youtube.com/embed/Xu82EWVHoQY?start=21&autoplay=1';
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