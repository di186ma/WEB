
document.addEventListener("DOMContentLoaded", ready);

function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}

function ready() {
    alert('DOM готов');
}

window.onload = function() {
    alert('Страница загружена');
  };