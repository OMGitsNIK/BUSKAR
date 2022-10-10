const button = document.querySelector("button");

function showLoc(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    alert("Latitude : " + latitude + " Longitude: " + longitude);
    initMap(latitude, longitude);
}

function err(error) {
    if (error.code == 1) {
        alert("Something went wrong/ Permission Not Granted");
    }
    else if (error.code == 2) {
        alert("Position Unavailable / Internal Error");
    }
    else if (error.code == 3) {
        alert("Timeout Error");
    }
}

button.addEventListener("click", () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLoc, err);
    }
});