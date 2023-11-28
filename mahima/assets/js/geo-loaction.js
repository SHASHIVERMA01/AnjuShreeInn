var allowGeoRecall = true;
function getLocation() {   

if(navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition, positionError);
} else {
hideLoadingDiv()

}
}

function positionError() {    


if(allowGeoRecall) getLocation()

}

function showPosition(){

allowGeoRecall = false


}

