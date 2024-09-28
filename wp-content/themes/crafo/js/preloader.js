document.addEventListener("DOMContentLoaded", function() {
    // Show the preloader for at least 3 seconds
    let preloaderDuration = 3000; // 3 seconds
    let preloaderElement = document.getElementById("preloader");

    // Wait for the window to load
    window.addEventListener("load", function() {
        setTimeout(function() {
            document.body.classList.add("loaded");
        }, preloaderDuration);
    });
});