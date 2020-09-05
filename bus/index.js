var map = L.map('map').setView([54.3661612, 18.5893664], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var Bus = L.icon({
    iconUrl: 'https://www.nworegontransit.org/wp-content/themes/nwconnector/images/bus.png',

    iconSize:     [30, 30] // size of the icon
});


Autobusy();
async function Autobusy(){
    let response = await fetch('https://ckan2.multimediagdansk.pl/gpsPositions');
    let data = await response.json();
    console.log(data);
    function onClick(e) {
        this.openPopup();
    }
    data.Vehicles.forEach(element => {
        console.log("Linia"+element.Line+"LAT:"+element.Lat+"LON:"+element.Lon);
        L.marker([element.Lat, element.Lon], {icon: Bus, title: element.Line, customId: element.VehicleId, alt: element.Line, name: element.Line, })
        .addTo(map)
        .on('mouseover', onClick)
        .on('tooltipclose', onClick)
        .bindPopup(element.Line)
        //.openPopup()
        .bindTooltip(element.Line)
        .openTooltip();
    });
};
