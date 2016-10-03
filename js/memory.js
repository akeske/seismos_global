function load1(val) {
	var link;
	if(val == 1)
		link = "memory1.php";
	else if(val == 2)
		link = "memory2.php";
	else if(val == 3)
		link = "memory3.php";
	else
		link = "memory4.php";
	downloadUrl(link, function (data) {
		var lat1;
		var lng1;
		var la2;
		var lng2;
		var type;
		var coor = [];
		var tools = data.documentElement.getElementsByTagName("tool");
		for(i = 0; i < tools.length; i++) {
			lat1 = tools[i].getAttribute("lat1");
			lng1 = tools[i].getAttribute("lng1");
			lat2 = tools[i].getAttribute("lat2");
			lng2 = tools[i].getAttribute("lng2");
			type = tools[i].getAttribute("type");
			coor = [
				new google.maps.LatLng(lat1, lng1),
				new google.maps.LatLng(lat2, lng2)
			];
			if(type == 1) {
				fib_circles1(coor);
			} else if(type == 2) {
				fib_lines1(coor);
			} else if(type == 3) {
				fib_lines12(coor);
			} else if(type == 4) {
				lin1(coor);
			} else if(type == 5) {
				fib_circles2(coor);
			} else if(type == 6) {
				fib_lines2(coor);
			} else if(type == 7) {
				fib_lines22(coor);
			} else if(type == 8) {
				lin2(coor);
			} else if(type == 9) {
				fib_circles3(coor);
			} else if(type == 10) {
				fib_lines3(coor);
			} else if(type == 11) {
				fib_lines32(coor);
			} else if(type == 12) {
				lin3(coor);
			} else if(type == 13) {
				lin11(coor);
			} else if(type == 14) {
				lin21(coor);
			} else if(type == 15) {
				lin31(coor);
			} else if(type == 16) {
				lin41(coor);
			}else if(type == 17) {
				fib_circles4(coor);
			} else if(type == 18) {
				fib_lines4(coor);
			} else if(type == 19) {
				fib_lines42(coor);
			} else if(type == 20) {
				lin4(coor);
			}
		}
	});
}

function save(val) {
	var lat1;
	var lat2;
	var lng1;
	var lng2;
	var type;
	//tools 1
	if(markerc11 != undefined) {
		lat1 = markerc11.getPosition().lat().toFixed(6);
		lng1 = markerc11.getPosition().lng().toFixed(6);
	}
	if(markerc12 != undefined) {
		lat2 = markerc12.getPosition().lat().toFixed(6);
		lng2 = markerc12.getPosition().lng().toFixed(6);
		type = 1;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerv11 != undefined) {
		lat1 = markerv11.getPosition().lat().toFixed(6);
		lng1 = markerv11.getPosition().lng().toFixed(6);
	}
	if(markerv12 != undefined) {
		lat2 = markerv12.getPosition().lat().toFixed(6);
		lng2 = markerv12.getPosition().lng().toFixed(6);
		type = 2;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerh11 != undefined) {
		lat1 = markerh11.getPosition().lat().toFixed(6);
		lng1 = markerh11.getPosition().lng().toFixed(6);
	}
	if(markerh12 != undefined) {
		lat2 = markerh12.getPosition().lat().toFixed(6);
		lng2 = markerh12.getPosition().lng().toFixed(6);
		type = 3;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl11 != undefined) {
		lat1 = markerl11.getPosition().lat().toFixed(6);
		lng1 = markerl11.getPosition().lng().toFixed(6);
	}
	if(markerl12 != undefined) {
		lat2 = markerl12.getPosition().lat().toFixed(6);
		lng2 = markerl12.getPosition().lng().toFixed(6);
		type = 4;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl111 != undefined) {
		lat1 = markerl111.getPosition().lat().toFixed(6);
		lng1 = markerl111.getPosition().lng().toFixed(6);
	}
	if(markerl121 != undefined) {
		lat2 = markerl121.getPosition().lat().toFixed(6);
		lng2 = markerl121.getPosition().lng().toFixed(6);
		type = 13;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	//tools2
	if(markerc21 != undefined) {
		lat1 = markerc21.getPosition().lat().toFixed(6);
		lng1 = markerc21.getPosition().lng().toFixed(6);
	}
	if(markerc22 != undefined) {
		lat2 = markerc22.getPosition().lat().toFixed(6);
		lng2 = markerc22.getPosition().lng().toFixed(6);
		type = 5;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerv21 != undefined) {
		lat1 = markerv21.getPosition().lat().toFixed(6);
		lng1 = markerv21.getPosition().lng().toFixed(6);
	}
	if(markerv22 != undefined) {
		lat2 = markerv22.getPosition().lat().toFixed(6);
		lng2 = markerv22.getPosition().lng().toFixed(6);
		type = 6;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerh21 != undefined) {
		lat1 = markerh21.getPosition().lat().toFixed(6);
		lng1 = markerh21.getPosition().lng().toFixed(6);
	}
	if(markerh22 != undefined) {
		lat2 = markerh22.getPosition().lat().toFixed(6);
		lng2 = markerh22.getPosition().lng().toFixed(6);
		type = 7;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl21 != undefined) {
		lat1 = markerl21.getPosition().lat().toFixed(6);
		lng1 = markerl21.getPosition().lng().toFixed(6);
	}
	if(markerl22 != undefined) {
		lat2 = markerl22.getPosition().lat().toFixed(6);
		lng2 = markerl22.getPosition().lng().toFixed(6);
		type = 8;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl211 != undefined) {
		lat1 = markerl211.getPosition().lat().toFixed(6);
		lng1 = markerl211.getPosition().lng().toFixed(6);
	}
	if(markerl221 != undefined) {
		lat2 = markerl221.getPosition().lat().toFixed(6);
		lng2 = markerl221.getPosition().lng().toFixed(6);
		type = 14;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	//tools3
	if(markerc31 != undefined) {
		lat1 = markerc31.getPosition().lat().toFixed(6);
		lng1 = markerc31.getPosition().lng().toFixed(6);
	}
	if(markerc32 != undefined) {
		lat2 = markerc32.getPosition().lat().toFixed(6);
		lng2 = markerc32.getPosition().lng().toFixed(6);
		type = 9;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerv31 != undefined) {
		lat1 = markerv31.getPosition().lat().toFixed(6);
		lng1 = markerv31.getPosition().lng().toFixed(6);
	}
	if(markerv32 != undefined) {
		lat2 = markerv32.getPosition().lat().toFixed(6);
		lng2 = markerv32.getPosition().lng().toFixed(6);
		type = 10;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerh31 != undefined) {
		lat1 = markerh31.getPosition().lat().toFixed(6);
		lng1 = markerh31.getPosition().lng().toFixed(6);
	}
	if(markerh32 != undefined) {
		lat2 = markerh32.getPosition().lat().toFixed(6);
		lng2 = markerh32.getPosition().lng().toFixed(6);
		type = 11;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl31 != undefined) {
		lat1 = markerl31.getPosition().lat().toFixed(6);
		lng1 = markerl31.getPosition().lng().toFixed(6);
	}
	if(markerl32 != undefined) {
		lat2 = markerl32.getPosition().lat().toFixed(6);
		lng2 = markerl32.getPosition().lng().toFixed(6);
		type = 12;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl311 != undefined) {
		lat1 = markerl311.getPosition().lat().toFixed(6);
		lng1 = markerl311.getPosition().lng().toFixed(6);
	}
	if(markerl321 != undefined) {
		lat2 = markerl321.getPosition().lat().toFixed(6);
		lng2 = markerl321.getPosition().lng().toFixed(6);
		type = 15;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	//tools4
	if(markerc41 != undefined) {
		lat1 = markerc41.getPosition().lat().toFixed(6);
		lng1 = markerc41.getPosition().lng().toFixed(6);
	}
	if(markerc42 != undefined) {
		lat2 = markerc42.getPosition().lat().toFixed(6);
		lng2 = markerc42.getPosition().lng().toFixed(6);
		type = 17;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerv41 != undefined) {
		lat1 = markerv41.getPosition().lat().toFixed(6);
		lng1 = markerv41.getPosition().lng().toFixed(6);
	}
	if(markerv42 != undefined) {
		lat2 = markerv42.getPosition().lat().toFixed(6);
		lng2 = markerv42.getPosition().lng().toFixed(6);
		type = 18;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerh41 != undefined) {
		lat1 = markerh41.getPosition().lat().toFixed(6);
		lng1 = markerh41.getPosition().lng().toFixed(6);
	}
	if(markerh42 != undefined) {
		lat2 = markerh42.getPosition().lat().toFixed(6);
		lng2 = markerh42.getPosition().lng().toFixed(6);
		type = 19;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl41 != undefined) {
		lat1 = markerl41.getPosition().lat().toFixed(6);
		lng1 = markerl41.getPosition().lng().toFixed(6);
	}
	if(markerl42 != undefined) {
		lat2 = markerl42.getPosition().lat().toFixed(6);
		lng2 = markerl42.getPosition().lng().toFixed(6);
		type = 20;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(markerl411 != undefined) {
		lat1 = markerl411.getPosition().lat().toFixed(6);
		lng1 = markerl411.getPosition().lng().toFixed(6);
	}
	if(markerl421 != undefined) {
		lat2 = markerl421.getPosition().lat().toFixed(6);
		lng2 = markerl421.getPosition().lng().toFixed(6);
		type = 16;
		writeElements(lat1, lng1, lat2, lng2, type, val);
		insertdb();
	}
	if(val == 1)
		document.getElementById("load1").style.color = "green";
	else if(val == 2)
		document.getElementById("load2").style.color = "green";
	else
		document.getElementById("load3").style.color = "green";
}

function writeElements(lat1, lng1, lat2, lng2, type, memory) {
	document.getElementById("memory").value = memory;
	document.getElementById("lat1").value = lat1;
	document.getElementById("lng1").value = lng1;
	document.getElementById("lat2").value = lat2;
	document.getElementById("lng2").value = lng2;
	document.getElementById("type").value = type;
}

function insertdb() {
	if(window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function () {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//   alert(xmlhttp.responseText);
		}
	};
	xmlhttp.open("GET", "memoryInsert.php?lat1=" + document.getElementById("lat1").value + "&lat2=" + document.getElementById("lat2").value + "&lng1=" + document.getElementById("lng1").value + "&lng2=" + document.getElementById("lng2").value + "&type=" + document.getElementById("type").value + "&memory=" + document.getElementById("memory").value, true);
	xmlhttp.send();
}

function delete1(val) {
	if(window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function () {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//alert(xmlhttp.responseText);
		}
	};
	xmlhttp.open("GET", "memoryDelete.php?memory=" + val, true);
	xmlhttp.send();
	// alert("Memory was deleted");
	if(val == 1)
		document.getElementById("load1").style.color = "#666666";
	else if(val == 2)
		document.getElementById("load2").style.color = "#666666";
	else
		document.getElementById("load3").style.color = "#666666";
}