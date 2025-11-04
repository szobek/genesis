const mapData = {
    center: { lat: 47.497913, lng: 19.040236 },
    zoom: 12,
};

const init = () => {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: mapData.zoom,
        center: mapData.center,
        gestureHandling: 'cooperative'
    });

};

window.initMap = init;