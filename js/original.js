var iconR1 = new GIcon();
iconR1.image = 'images/iconr1.png';
iconR1.shadow = '';
iconR1.iconSize = new GSize(3, 3);
iconR1.shadowSize = new GSize(0, 0);
iconR1.iconAnchor = new GPoint(3, 3);
iconR1.infoWindowAnchor = new GPoint(0, 0);
var iconR2 = new GIcon();
iconR2.image = 'images/iconr2.png';
iconR2.shadow = '';
iconR2.iconSize = new GSize(3, 3);
iconR2.shadowSize = new GSize(0, 0);
iconR2.iconAnchor = new GPoint(3, 3);
iconR2.infoWindowAnchor = new GPoint(0, 0);
var iconR3 = new GIcon();
iconR3.image = 'images/iconr3.png';
iconR3.shadow = '';
iconR3.iconSize = new GSize(4, 4);
iconR3.shadowSize = new GSize(0, 0);
iconR3.iconAnchor = new GPoint(4, 4);
iconR3.infoWindowAnchor = new GPoint(0, 0);
var iconR4 = new GIcon();
iconR4.image = 'images/iconr4.png';
iconR4.shadow = '';
iconR4.iconSize = new GSize(5, 5);
iconR4.shadowSize = new GSize(0, 0);
iconR4.iconAnchor = new GPoint(5, 5);
iconR4.infoWindowAnchor = new GPoint(0, 0);
var iconR5 = new GIcon();
iconR5.image = 'images/iconr5.png';
iconR5.shadow = '';
iconR5.iconSize = new GSize(6, 6);
iconR5.shadowSize = new GSize(0, 0);
iconR5.iconAnchor = new GPoint(6, 6);
iconR5.infoWindowAnchor = new GPoint(0, 0);
var iconR6 = new GIcon();
iconR6.image = 'images/iconr6.png';
iconR6.shadow = '';
iconR6.iconSize = new GSize(6, 6);
iconR6.shadowSize = new GSize(0, 0);
iconR6.iconAnchor = new GPoint(6, 6);
iconR6.infoWindowAnchor = new GPoint(0, 0);
var iconR7 = new GIcon();
iconR7.image = 'images/iconr7.png';
iconR7.shadow = '';
iconR7.iconSize = new GSize(7, 7);
iconR7.shadowSize = new GSize(0, 0);
iconR7.iconAnchor = new GPoint(7, 7);
iconR7.infoWindowAnchor = new GPoint(0, 0);
var customIcons = [];
customIcons["1"] = iconR1;
customIcons["2"] = iconR2;
customIcons["3"] = iconR3;
customIcons["4"] = iconR4;
customIcons["5"] = iconR5;
customIcons["6"] = iconR6;
customIcons["7"] = iconR7;
var markerGroups1 = {
	"1": [],
	"2": [],
	"3": [],
	"4": [],
	"5": [],
	"6": [],
	"7": []
};
var markerGroups2 = {
	"1": [],
	"2": [],
	"3": [],
	"4": [],
	"5": [],
	"6": [],
	"7": []
};
var markerGroups3 = {
	"1": [],
	"2": [],
	"3": [],
	"4": [],
	"5": [],
	"6": [],
	"7": []
};
var polyline = {
	"1": [],
	"2": [],
	"3": []
};
var polylinemarkers1 = [];
var polylinemarkers2 = [];
var polylinemarkers3 = [];

var size;
var markers1 = {
	"1": [],
	"2": [],
	"3": []
};
var marker;
var line = [];
var latlng = [];
var l;
var i;
var j;

var colorIndex_ = 0;
var COLORS = [
	["red", "#ff0000"],
	["orange", "#ff8800"],
	["green", "#008000"],
	["blue", "#000080"],
	["purple", "#800080"]
];

function getColor(named) {
	return COLORS[(colorIndex_++) % COLORS.length][named ? 0 : 1];
}

function getIcon(color) {
	var icon = new GIcon();
	icon.image = "http://google.com/mapfiles/ms/micons/" + color + ".png";
	icon.iconSize = new GSize(32, 32);
	icon.iconAnchor = new GPoint(15, 32);
	return icon;
}

function check() {
	var Alat = parseFloat(document.getElementById('fromlat').value);
	var Blat = parseFloat(document.getElementById('tolat').value);
	var Alng = parseFloat(document.getElementById("fromlng").value);
	var Blng = parseFloat(document.getElementById("tolng").value);
	if (Alat > Blat) {
		document.getElementById('fromlat').value = Blat;
		document.getElementById('tolat').value = Alat;
	}
	if (Alng > Blng) {
		document.getElementById('fromlng').value = Blng;
		document.getElementById('tolng').value = Alng;
	}
	var Amagn = parseFloat(document.getElementById('frommagn').value);
	var Bmagn = parseFloat(document.getElementById('tomagn').value);
	if (Amagn > Bmagn) {
		document.getElementById('frommagn').value = Bmagn;
		document.getElementById('tomagn').value = Amagn;
	}
	var Adepth = parseFloat(document.getElementById("fromdpth").value);
	var Bdepth = parseFloat(document.getElementById("todpth").value);
	if (Adepth > Bdepth) {
		document.getElementById('fromdpth').value = Bdepth;
		document.getElementById('todpth').value = Adepth;
	}
}

function updateMarkerfrom(marker) {
	latlng = marker.getPoint();
	document.getElementById("fromlat").value = latlng.lat();
	document.getElementById("fromlng").value = latlng.lng();
}

function updateMarkerto(marker) {
	latlng = marker.getPoint();
	document.getElementById("tolat").value = latlng.lat();
	document.getElementById("tolng").value = latlng.lng();
}

function load() {
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
		map.setMapType(G_SATELLITE_MAP);
		map.addControl(new GLargeMapControl3D());
		//	map.enableDoubleClickZoom();
		//	map.enableScrollWheelZoom();
		map.setCenter(new GLatLng(37.887571, 26.037598), 6);
		var color;
		var markerstart;
		var markerfin;
		var point1 = new GLatLng(41.40, 18.8);
		var point2 = new GLatLng(33.98, 34.82);
		latlng;
		color = getColor(true);
		markerstart = new GMarker(point1, {
			icon: getIcon(color),
			draggable: true
		});
		map.addOverlay(markerstart);
		color = getColor(true);
		markerfin = new GMarker(point2, {
			icon: getIcon(color),
			draggable: true
		});
		map.addOverlay(markerfin);

		GEvent.addListener(markerstart, "dragend", function () {
			updateMarkerfrom(markerstart);
		});
		GEvent.addListener(markerfin, "dragend", function () {
			updateMarkerto(markerfin);
		});

		GDownloadUrl("phpsqlajax_xmlD1.php", function (data) {
			l = 1;
			var k = 0;
			var xml = GXml.parse(data);
			size = xml.documentElement.getElementsByTagName("size");
			size = parseFloat(size[0].getAttribute("size"));
			for ( j = 0; j < size * size; j++) {
				var markers = xml.documentElement.getElementsByTagName("marker" + j);
				for ( i = 0; i < markers.length; i++) {
					var name = markers[i].getAttribute("name");
					var info = markers[i].getAttribute("info");
					var type = markers[i].getAttribute("type");
					var date = markers[i].getAttribute("date");
					var megethos = markers[i].getAttribute("megethos");
					var vathos = markers[i].getAttribute("vathos");
					var lat = parseFloat(markers[i].getAttribute("lat"));
					var lng = parseFloat(markers[i].getAttribute("lng"));
					var point = new GLatLng(lat, lng);
					marker = createMarker(point, name, info, megethos, vathos, type, date, l);
					markers1[1].push(marker);
					map.addOverlay(marker);
					markers1[1][k].hide();
					k++;
				}

				for (var i = 0; i < markers.length; i++) {
					var lat1 = parseFloat(markers[i].getAttribute("lat"));
					var lng1 = parseFloat(markers[i].getAttribute("lng"));
					latlng = new GLatLng(lat1, lng1);
					line.push(latlng);
				}
				polylinemarkers1[j] = new GPolyline(line, "#E62020", 1, 0.8);
				map.addOverlay(polylinemarkers1[j]);
				polylinemarkers1[j].hide();
				line = [];
			}
		});

		GDownloadUrl("phpsqlajax_xmlD2.php", function (data) {
			var k = 0;
			l = 2;
			var xml = GXml.parse(data);
			size = xml.documentElement.getElementsByTagName("size");
			size = parseFloat(size[0].getAttribute("size"));
			for ( j = 0; j < size * size; j++) {
				var markers = xml.documentElement.getElementsByTagName("marker" + j);
				for ( i = 0; i < markers.length; i++) {
					var name = markers[i].getAttribute("name");
					var info = markers[i].getAttribute("info");
					var type = markers[i].getAttribute("type");
					var date = markers[i].getAttribute("date");
					var megethos = markers[i].getAttribute("megethos");
					var vathos = markers[i].getAttribute("vathos");
					var lat = parseFloat(markers[i].getAttribute("lat"));
					var lng = parseFloat(markers[i].getAttribute("lng"));
					var point = new GLatLng(lat, lng);
					marker = createMarker(point, name, info, megethos, vathos, type, date, l);
					markers1[2].push(marker);
					map.addOverlay(marker);
					markers1[2][k].hide();
					k++;
				}

				for ( i = 0; i < markers.length; i++) {
					var lat1 = parseFloat(markers[i].getAttribute("lat"));
					var lng1 = parseFloat(markers[i].getAttribute("lng"));
					latlng = new GLatLng(lat1, lng1);
					line.push(latlng);
				}
				polylinemarkers2[j] = new GPolyline(line, "#ED9121", 1, 0.8);
				map.addOverlay(polylinemarkers2[j]);
				polylinemarkers2[j].hide();
				line = [];
			}
		});

		GDownloadUrl("phpsqlajax_xmlD3.php", function (data) {
			var k = 0;
			l = 3;
			var xml = GXml.parse(data);
			size = xml.documentElement.getElementsByTagName("size");
			size = parseFloat(size[0].getAttribute("size"));
			for ( j = 0; j < size * size; j++) {
				var markers = xml.documentElement.getElementsByTagName("marker" + j);
				for ( i = 0; i < markers.length; i++) {
					var name = markers[i].getAttribute("name");
					var info = markers[i].getAttribute("info");
					var type = markers[i].getAttribute("type");
					var date = markers[i].getAttribute("date");
					var megethos = markers[i].getAttribute("megethos");
					var vathos = markers[i].getAttribute("vathos");
					var lat = parseFloat(markers[i].getAttribute("lat"));
					var lng = parseFloat(markers[i].getAttribute("lng"));
					var point = new GLatLng(lat, lng);
					marker = createMarker(point, name, info, megethos, vathos, type, date, l);
					markers1[3].push(marker);
					map.addOverlay(marker);
					markers1[3][k].hide();
					k++;
				}

				for ( i = 0; i < markers.length; i++) {
					var lat1 = parseFloat(markers[i].getAttribute("lat"));
					var lng1 = parseFloat(markers[i].getAttribute("lng"));
					latlng = new GLatLng(lat1, lng1);
					line.push(latlng);
				}
				polylinemarkers3[j] = new GPolyline(line, "#FFEF00", 1, 0.8);
				map.addOverlay(polylinemarkers3[j]);
				polylinemarkers3[j].hide();
				line = [];
			}
			//	polyOptionsmarker = {geodesic:true};
		});

		GDownloadUrl("phpsqlajax_xmlD1.php", function (data) {
			var latchess = [];
			var lngchess = [];
			var line1 = [];
			var line2 = [];
			var polyline1 = {
				"1": []
			};
			var polyline2 = {
				"1": []
			};
			var xml = GXml.parse(data);
			size = xml.documentElement.getElementsByTagName("size");
			size = parseFloat(size[0].getAttribute("size"));

			lat = xml.documentElement.getElementsByTagName("lat");
			for ( i = 0; i < lat.length; i++) {
				latchess[i] = lat[i].getAttribute("lat");
			}
			lng = xml.documentElement.getElementsByTagName("lng");
			for ( i = 0; i < lng.length; i++) {
				lngchess[i] = lng[i].getAttribute("lng");
			}
			for ( j = 0; j < lng.length + 1; j++) {
				for (var i = 0; i < 2; i++) {
					if (i == 0) {
						var latlng1 = new GLatLng(latchess[0], lngchess[j]);
						var latlng2 = new GLatLng(latchess[j], lngchess[0]);
					}
					else {
						latlng1 = new GLatLng(latchess[size], lngchess[j]);
						latlng2 = new GLatLng(latchess[j], lngchess[size]);
					}
					line1.push(latlng1);
					line2.push(latlng2);
				}
				polyline1 = new GPolyline(line1, "#CC0000", 2, 1);
				map.addOverlay(polyline1);
				line1 = [];
				polyline2 = new GPolyline(line2, "#CC0000", 2, 1);
				map.addOverlay(polyline2);
				line2 = [];
			}
		});
	}
}

function createMarker(point, name, info, megethos, vathos, type, date, l) {
	var marker = new GMarker(point, customIcons[type]);
	if (l == 1) {
		markerGroups1[type].push(marker);
	}
	else if (l == 2) {
		markerGroups2[type].push(marker);
	}
	else {
		markerGroups3[type].push(marker);
	}
	var html = "<b>" + name + "</b> <br/>Megethos seismou: " + megethos + "<br/>Vathos seismou: " + vathos + "<br/>Date: " + date;
	GEvent.addListener(marker, 'click', function () {
		marker.openInfoWindowHtml(html);
	});
	return marker;
}

function markerdisp1(type) {
	for ( i = 0; i < markerGroups1[type].length; i++) {
		if (markerGroups1[type][i].isHidden()) {
			markerGroups1[type][i].show();
			markerGroups1[type][i].hidden = false;
		}
		else {
			markerGroups1[type][i].hide();
			markerGroups1[type][i].hidden = true;
		}
	}
}

function markerdisp2(type) {
	for ( i = 0; i < markerGroups2[type].length; i++) {
		if (markerGroups2[type][i].isHidden()) {
			markerGroups2[type][i].show();
			markerGroups2[type][i].hidden = false;
		}
		else {
			markerGroups2[type][i].hide();
			markerGroups2[type][i].hidden = true;
		}
	}
}

function markerdisp3(type) {
	for ( i = 0; i < markerGroups3[type].length; i++) {
		if (markerGroups3[type][i].isHidden()) {
			markerGroups3[type][i].show();
			markerGroups3[type][i].hidden = false;
		}
		else {
			markerGroups3[type][i].hide();
			markerGroups3[type][i].hidden = true;
		}
	}
}

function datedisp(type) {
	for ( i = 0; i < markers1[type].length; i++) {
		if (markers1[type][i].isHidden()) {
			markers1[type][i].show();
			markers1[type][i].hidden = false;
		}
		else {
			markers1[type][i].hide();
			markers1[type][i].hidden = true;
		}
	}
}

function polylinedisp(pertype) {
	var pertyp = parseInt(pertype);
	if (pertype == 1) {
		for ( j = 0; j < size * size; j++) {
			if (polylinemarkers1[j].isHidden()) {
				polylinemarkers1[j].show();
			}
			else {
				polylinemarkers1[j].hide();
			}
		}
	}
	if (pertype == 2) {
		for ( j = 0; j < size * size; j++) {
			if (polylinemarkers2[j].isHidden()) {
				polylinemarkers2[j].show();
			}
			else {
				polylinemarkers2[j].hide();
			}
		}
	}
	if (pertype == 3) {
		for ( j = 0; j < size * size; j++) {
			if (polylinemarkers3[j].isHidden()) {
				polylinemarkers3[j].show();
			}
			else {
				polylinemarkers3[j].hide();
			}
		}
	}
}

function dat1() {
	if (document.getElementById('fromdate1').value == "") {
		var month = "01";
		var day = "01";
		var year = "1964";
		var d = year + "/" + month + "/" + day;
		document.getElementById('fromdate1').value = d;
	}
}

function dat2() {
	if (document.getElementById('todate1').value == "") {
		var currentTime = new Date();
		var month = currentTime.getMonth() + 1;
		var day = currentTime.getDate();
		if (month <= 9) {
			month = '0' + month;
		}
		if (day <= 9) {
			day = '0' + day;
		}
		var year = currentTime.getFullYear();
		var d = year + "/" + month + "/" + day;
		document.getElementById('todate1').value = d;
	}
}

function dat3() {
	if (document.getElementById('fromdate1').value != "") {
		var d = document.getElementById('fromdate1').value;
		var dArray = d.split('/');
		var year = parseFloat(dArray[0]) + 10;
		var month = dArray[1];
		var day = dArray[2];
		var df = year + "/" + month + "/" + day;
		document.getElementById('fromdate2').value = df;
	}
}

function dat4() {
	if (document.getElementById('todate1').value != "") {
		var d = document.getElementById('todate1').value;
		var dArray = d.split('/');
		var year = parseFloat(dArray[0]) + 10;
		var month = dArray[1];
		var day = dArray[2];
		var df = year + "/" + month + "/" + day;
		document.getElementById('todate2').value = df;
	}
}

function dat5() {
	if (document.getElementById('fromdate2').value != "") {
		var d = document.getElementById('fromdate2').value;
		var dArray = d.split('/');
		var year = parseFloat(dArray[0]) + 10;
		var month = dArray[1];
		var day = dArray[2];
		var df = year + "/" + month + "/" + day;
		document.getElementById('fromdate3').value = df;
	}
}

function dat6() {
	if (document.getElementById('todate2').value != "") {
		var d = document.getElementById('todate2').value;
		var dArray = d.split('/');
		var year = parseFloat(dArray[0]) + 10;
		var month = dArray[1];
		var day = dArray[2];
		var df = year + "/" + month + "/" + day;
		document.getElementById('todate3').value = df;
	}
}

function diastaseisfun() {
	var A = document.getElementById('diastaseis').value;
	document.getElementById('diastaseis2').value = A;
}

function latitude() {
	var a = parseFloat(document.getElementById('fromlat').value);
	var b = parseFloat(document.getElementById('tolat').value);
	if (a > b) {
		document.getElementById('fromlat').style.backgroundColor = "#FED1D1";
		document.getElementById('tolat').style.backgroundColor = "#FED1D1";
	}
	if (a < b) {
		document.getElementById('fromlat').style.backgroundColor = "#D1D6FE";
		document.getElementById('tolat').style.backgroundColor = "#D1D6FE";
	}
}

function longitude() {
	var a = parseFloat(document.getElementById('fromlng').value);
	var b = parseFloat(document.getElementById('tolng').value);
	if (a > b) {
		document.getElementById('fromlng').style.backgroundColor = "#FED1D1";
		document.getElementById('tolng').style.backgroundColor = "#FED1D1";
	}
	else {
		document.getElementById('fromlng').style.backgroundColor = "#D1D6FE";
		document.getElementById('tolng').style.backgroundColor = "#D1D6FE";
	}
}

function depth() {
	var a = parseFloat(document.getElementById('fromdpth').value);
	var b = parseFloat(document.getElementById('todpth').value);
	if (a > b) {
		document.getElementById('fromdpth').style.backgroundColor = "#FED1D1";
		document.getElementById('todpth').style.backgroundColor = "#FED1D1";
	}
	else {
		document.getElementById('fromdpth').style.backgroundColor = "#D1D6FE";
		document.getElementById('todpth').style.backgroundColor = "#D1D6FE";
	}
}

function magnitude() {
	var a = parseFloat(document.getElementById('frommagn').value);
	var b = parseFloat(document.getElementById('tomagn').value);
	if (a > b) {
		document.getElementById('frommagn').style.backgroundColor = "#FED1D1";
		document.getElementById('tomagn').style.backgroundColor = "#FED1D1";
	}
	else {
		document.getElementById('frommagn').style.backgroundColor = "#D1D6FE";
		document.getElementById('tomagn').style.backgroundColor = "#D1D6FE";
	}
}