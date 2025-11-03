const mapData = {
    center: { lat: 47.497913, lng: 19.040236 },
    zoom: 12,
    mapId: '2f700634b4971079111895e5'
};

window.initMap = async function () {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: mapData.zoom,
        center: mapData.center,
        mapId: mapData.mapId,
    });
};
