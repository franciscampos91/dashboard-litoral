/**
 * LEAFLET
 */

var map = L.map("map").setView([-23.894114, -46.313646], 8); // Coordenadas centrais

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);
