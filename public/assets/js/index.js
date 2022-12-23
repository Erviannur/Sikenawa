var map = L.map('map').setView([23.6850, 90.3563], 7.4);

var OSM = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
});

OSM.addTo(map)

googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

googleStreets.addTo(map)

googleHybrid = L.tileLayer('htpp://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

googleHybrid.addTo(map)

googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

googleSat.addTo(map)
googleTerrain.addTo(map)

var myIcon = L.icon({
    iconUrl: 'assets/image/lokasi.png',
    iconSize: [50,60],
});

var Dhaka = L.marker([23.8103, 90.4125], {icon: myIcon}).bindPopup("Dhaka")
var Rangpur = L.marker([25.8483, 88.9414], {icon: myIcon}).bindPopup("Rangpur")

var cities = L.layerGroup([Dhaka, Rangpur])
var basemaps = {
    "OSM" : OSM,
    "Google Streets" : googleStreets,
    "Google Hybrid" : googleHybrid,
    "Google Sattelite" : googleSat,
    "Google Terrain" : googleTerrain
}

var overlayMaps = {
    "Divission": cities
};

L.control.layers(basemaps, overlayMaps).addTo(map);