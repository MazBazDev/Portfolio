new Sortable(document.querySelector(".cards"), {
    animation: 200,
    easing: "cubic-bezier(1, 0, 0, 1)",
    ghostClass: "sortable-ghost", // drop placeholder
    chosenClass: "sortable-chosen", // chosen item
    dragClass: "sortable-drag", // dragging item
    filter: ".content",
});


const map = new mapboxgl.Map({
    container: "map",
    dragPan: false,
    scrollZoom: false,
    style: "mapbox://styles/mapbox/streets-v12",
    center: [4.83345, 45.747899],
    zoom: 12,
});

document.getElementById("scaleUp").addEventListener("click", function () {
    map.zoomTo(map.getZoom() + 1);
});

document.getElementById("scaleDown").addEventListener("click", function () {
    map.zoomTo(map.getZoom() - 1);
});

// Récupération de l'élément checkbox et de la balise body
const checkbox = document.getElementById("check-theme");
const body = document.querySelector("body");

ScrollReveal().reveal(".card", {
    delay: 200,
    reset: true,
    origin: "bottom",
    duration: 1000,
});
