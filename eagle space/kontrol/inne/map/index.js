var map = L.map('map', {
    center: [10, 0],
    zoom: 2
});
var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
	maxZoom: 20,
	attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
}).addTo(map);
var s1 = L.marker([0, 0]).addTo(map);
var s2 = L.marker([0, 0]).addTo(map);
setInterval(function rack(){
    fetch('https://ciszek1.github.io/eagle space/kontrol/dan.txt')
  .then(response => response.json())
  .then(data => {
      console.log(data);
    s2.setLatLng([data.Stage2.lat,data.Stage2.lon]);
    s1.setLatLng([data.Stage1.lat,data.Stage1.lon]);
  });
  
}, 1000);

