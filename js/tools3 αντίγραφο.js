var clicks = 0;
var map;
var circles = [];
var lines = [];
var lines2 = [];
var distancesCircle = [];
var distancesVer = [];
var distancesHor = [];

function initialize3() {

	document.getElementById('ver3').style.backgroundColor='#0c3ddc';
	document.getElementById('hor3').style.backgroundColor='#fff2c5';
	document.getElementById('cir3').style.backgroundColor='#0a9206';
	
	getDistancesCircle();
	getDistancesVer();
	getDistancesHor();
	$('#fibCircle').keyup(function (event) {
		getDistancesCircle();
	});
	$('#fibVer').keyup(function (event) {
		getDistancesVer();
	});
	$('#fibHor').keyup(function (event) {
		getDistancesHor();
	});
	$(".markerTip1").hide();
	$(".markerTip2").hide();
	$(".markerDrag").hide();
}

function selectTool(id) {

	$(".markerTip1").show();
	google.maps.event.clearListeners(map, 'click');
	var coordinates = [];
	switch(id) {
		case 1:
			clearTool(circles);
			$(".markerTip1").show();
			$(".markerTip2").hide();
			$(".markerDrag").hide();
			document.getElementById('distCircle').value = "";
			if(clicks == 1)
				clicks = 0;
			break;
		case 2:
			clearTool(lines);
			$(".markerTip1").show();
			$(".markerTip2").hide();
			$(".markerDrag").hide();
			document.getElementById('distVer').value = "";
			if(clicks == 1)
				clicks = 0;
			break;
		case 3:
			clearTool(lines2);
			$(".markerTip1").show();
			$(".markerTip2").hide();
			$(".markerDrag").hide();
			document.getElementById('distHor').value = "";
			if(clicks == 1)
				clicks = 0;
			break;
		case 4:
			clearTool(circles);
			clearTool(lines);
			clearTool(lines2);
			document.getElementById('distCircle').value = "";
			document.getElementById('distVer').value = "";
			document.getElementById('distHor').value = "";
			if(clicks == 1)
					clicks = 0;
			$(".markerTip1").hide();
			$(".markerTip2").hide();
			$(".markerDrag").hide();
			return;
	}
	
	var listen = google.maps.event.addListener(map, 'click', function (event) {
		coordinates.push(new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()));
		clicks++;

		if(clicks == 2) {
			$(".markerTip1").hide();
			$(".markerTip2").hide();
			$(".markerDrag").show();
			clicks = 0;
			google.maps.event.removeListener(listen);
			switch(id) {
			case 1: //call Circles
				document.getElementById('distCircle').value = distance( coordinates[0].lat(), coordinates[0].lng(), coordinates[1].lat(), coordinates[1].lng(), 0);
				fib_circles(coordinates);
				break;
			case 2: //call vertical lines
				document.getElementById('distVer').value = distance( coordinates[0].lat(), coordinates[0].lng(), coordinates[1].lat(), coordinates[1].lng(), 1 );
				fib_lines(coordinates);
				break;
			case 3: //call horizontal lines
				document.getElementById('distHor').value = distance( coordinates[0].lat(), coordinates[0].lng(), coordinates[1].lat(), coordinates[1].lng(), 2 );
				fib_lines2(coordinates);
				break;
			}
		}
		if(clicks == 1) {
			$(".markerTip1").hide();
			$(".markerTip2").show();
			$(".markerDrag").hide();
		}
	});
	
}

function fib_circles(coordinates) {
	// Get the center point
	var x1 = coordinates[0].lat();
	var y1 = coordinates[0].lng();

	//add the center marker
	var markerc1 = new google.maps.Marker({
		position: coordinates[0],
		map: map,
		title: "Center point",
		draggable: true
	});
	circles.push(markerc1);

	//radius marker
	markerc2 = new google.maps.Marker({
		position: coordinates[1],
		map: map,
		title: "First radius",
		draggable: true
	});
	circles.push(markerc2);
	  
	google.maps.event.addListener(markerc1, 'dragend', function () {
		coordinates[0] = markerc1.getPosition();
		clearTool(circles);
		fib_circles(coordinates);
	});
  
	google.maps.event.addListener(markerc2, 'dragend', function () {
		coordinates[1] = markerc2.getPosition();
		clearTool(circles);
		fib_circles(coordinates);
	});
	google.maps.event.addListener(markerc1, 'drag', function () {
		document.getElementById('distCircle').value = distance( markerc1.getPosition().lat(), markerc1.getPosition().lng(), markerc2.getPosition().lat(), markerc2.getPosition().lng(), 0 );
	});
	google.maps.event.addListener(markerc2, 'drag', function () {
		document.getElementById('distCircle').value = distance( markerc1.getPosition().lat(), markerc1.getPosition().lng(), markerc2.getPosition().lat(), markerc2.getPosition().lng(), 0 );
	});
	//calculate radius    
	var d = Math.round( google.maps.geometry.spherical.computeDistanceBetween(coordinates[1], coordinates[0]) );
	var i = 0;
	var dis = -1;
	while( (dis = custom_distanceCircle(d, i++)) < 10000e3 ){
		circles.push(drawCircle(x1, y1, dis));
		if( dis==-1 )
			break;
	}
}

function drawCircle(x, y, radius) {
	var options = {
		strokeColor: "#0000ff",
		strokeOpacity: 0.8,
		strokeWeight: 2,
		fillOpacity: 0.0,
		map: map,
		center: new google.maps.LatLng(x, y),
		radius: radius
	};
	return new google.maps.Circle(options);
}

function fib_lines(coordinates) {
	var y1 = coordinates[0].lng();
	var y2 = coordinates[1].lng();

	markerv1 = new google.maps.Marker({
		position: coordinates[0],
		map: map,
		title: "Click Point",
		draggable: true
	}); 
	lines.push(markerv1);

	markerv2 = new google.maps.Marker({
		position: coordinates[1],
		map: map,
		title: "Second Point",
		draggable: true
	});
	lines.push(markerv2); 
	
	google.maps.event.addListener(markerv1, 'dragend', function () {
		coordinates[0] = markerv1.getPosition();
		clearTool(lines);
		fib_lines(coordinates);
	});
	google.maps.event.addListener(markerv2, 'dragend', function () {
		coordinates[1] = markerv2.getPosition();
		clearTool(lines);
		fib_lines(coordinates);
	});
	
	google.maps.event.addListener(markerv1, 'drag', function () {
		document.getElementById('distVer').value = distance( markerv1.getPosition().lat(), markerv1.getPosition().lng(), markerv2.getPosition().lat(), markerv2.getPosition().lng(), 1 );
	});
	google.maps.event.addListener(markerv2, 'drag', function () {
		document.getElementById('distVer').value = distance( markerv1.getPosition().lat(), markerv1.getPosition().lng(), markerv2.getPosition().lat(), markerv2.getPosition().lng(), 1 );
	});
	var c = y2 - y1;
	var i = 0;
	while((dis = custom_distanceVer(c, i++)) != -1) {
		lines.push(drawLines(y1 + dis));
		lines.push(drawLines(y1 - dis));
	}
}
function drawLines(y1) {
	var LinesCoordinates = [
		new google.maps.LatLng(33.815666, y1),
		new google.maps.LatLng(41.828642, y1)
	];

	var linePath = new google.maps.Polyline({
		path: LinesCoordinates,
		strokeColor: "#0000ff",
		strokeOpacity: 0.8,
	//	geodesic: true,
		strokeWeight: 2
	});

	linePath.setMap(map);
	return linePath;
}

function fib_lines2(coordinates) {
	var y1 = coordinates[0].lat();
	var y2 = coordinates[1].lat();
	markerh1 = new google.maps.Marker({
		position: coordinates[0],
		map: map,
		title: "Click Point",
		draggable: true
	});
	lines2.push(markerh1);
	
	markerh2 = new google.maps.Marker({
		position: coordinates[1],
		map: map,
		title: "Second Point",
		draggable: true
	});
	lines2.push(markerh2);
    
	google.maps.event.addListener(markerh1, 'dragend', function () {
		coordinates[0] = markerh1.getPosition();
		clearTool(lines2);
		fib_lines2(coordinates);
	});
	google.maps.event.addListener(markerh2, 'dragend', function () {
		coordinates[1] = markerh2.getPosition();
		clearTool(lines2);
		fib_lines2(coordinates);
	});
	google.maps.event.addListener(markerh1, 'drag', function () {
		document.getElementById('distHor').value = distance( markerh1.getPosition().lat(), markerh1.getPosition().lng(), markerh2.getPosition().lat(), markerh2.getPosition().lng(), 2 );
	});
	google.maps.event.addListener(markerh2, 'drag', function () {
		document.getElementById('distHor').value = distance( markerh1.getPosition().lat(), markerh1.getPosition().lng(), markerh2.getPosition().lat(), markerh2.getPosition().lng(), 2 );
	});

	var c = y2 - y1;
	var i = 0;
	while((dis = custom_distanceHor(c, i++)) != -1) {
		lines2.push(drawLines2(y1 + dis));
		lines2.push(drawLines2(y1 - dis));
	}
}

function drawLines2(y1) {
	var LinesCoordinates = [
		new google.maps.LatLng(y1, 34.495),
		new google.maps.LatLng(y1, 18.30)
	];

	var linePath = new google.maps.Polyline({
		path: LinesCoordinates,
		strokeColor: "#0000ff",
		strokeOpacity: 0.8,
	//	geodesic: true,
		strokeWeight: 2
	});

	linePath.setMap(map);
	return linePath;
}

/* 
  Calculates the "num" fibonacci distance
*/
function custom_distanceCircle(initial, num) {
	if(distancesCircle[num] == undefined)
		return -1;
	return initial * distancesCircle[num];
}
function custom_distanceVer(initial, num) {
	if(distancesVer[num] == undefined)
		return -1;
	return initial * distancesVer[num];
}
function custom_distanceHor(initial, num) {
	if(distancesHor[num] == undefined)
		return -1;
	return initial * distancesHor[num];
}

/* 
  toggle all lines from maps
*/
function clearTool(tool) {
	for(var i = 0; i < tool.length; i++)
		tool[i].setMap(null);
}

function getDistancesCircle() {
	distancesCircle = ($("#fibCircle").val()).split(",");
}
function getDistancesVer() {
	distancesVer = ($("#fibVer").val()).split(",");
}
function getDistancesHor() {
	distancesHor = ($("#fibHor").val()).split(",");
}
google.maps.event.addDomListener(window, 'load', initialize3);