/**
 * Returns an XMLHttp instance to use for asynchronous
 * downloading. This method will never throw an exception, but will
 * return NULL if the browser does not support XmlHttp for any reason.
 * @return {XMLHttpRequest|Null}
 */
function createXmlHttpRequest() {
	try {
		if(typeof ActiveXObject != 'undefined') {
			return new ActiveXObject('Microsoft.XMLHTTP');
		} else if(window["XMLHttpRequest"]) {
			return new XMLHttpRequest();
		}
	} catch(e) {
		changeStatus(e);
	}
	return null;
};
/**
 * This functions wraps XMLHttpRequest open/send function.
 * It lets you specify a URL and will call the callback if
 * it gets a status code of 200.
 * @param {String} url The URL to retrieve
 * @param {Function} callback The function to call once retrieved.
 */
function downloadUrl(url, callback) {
	var status = -1;
	var request = createXmlHttpRequest();
	if(!request) {
		return false;
	}
	request.onreadystatechange = function () {
		if(request.readyState == 4) {
			try {
				status = request.status;
			} catch(e) {
				// Usually indicates request timed out in FF.
			}
			if(status == 200) {
				callback(request.responseXML, request.status);
				request.onreadystatechange = function () {};
			}
		}
	}
	request.open('GET', url, true);
	try {
		request.send(null);
	} catch(e) {
		changeStatus(e);
	}
};
/**
 * Parses the given XML string and returns the parsed document in a
 * DOM data structure. This function will return an empty DOM node if
 * XML parsing is not supported in this browser.
 * @param {string} str XML string.
 * @return {Element|Document} DOM.
 */
function xmlParse(str) {
	if(typeof ActiveXObject != 'undefined' && typeof GetObject != 'undefined') {
		var doc = new ActiveXObject('Microsoft.XMLDOM');
		doc.loadXML(str);
		return doc;
	}
	if(typeof DOMParser != 'undefined') {
		return(new DOMParser()).parseFromString(str, 'text/xml');
	}
	return createElement('div', null);
}
/**
 * Appends a JavaScript file to the page.
 * @param {string} url
 */
function downloadScript(url) {
	var script = document.createElement('script');
	script.src = url;
	document.body.appendChild(script);
}

function distance(lat1, lon1, lat2, lon2, type) {
	var R = 6371.16;
	/*
	var dLat = (lat2-lat1) * Math.PI / 180;
	var dLon = (lon2-lon1) * Math.PI / 180; 
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
		Math.cos(lat1 * Math.PI / 180 ) * Math.cos(lat2 * Math.PI / 180 ) * 
		Math.sin(dLon/2) * Math.sin(dLon/2); 
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R *c;
	*/
	if(type == 1) {
		var dLon = Math.abs(lon2 - lon1);
		var d = 2 * Math.PI * R * dLon / 360;
	} else if(type == 2) {
		var dLat = Math.abs(lat2 - lat1);
		var d = 2 * Math.PI * R * dLat / 360;
	} else {
		var dLat = (lat2 - lat1) * Math.PI / 180;
		var dLon = (lon2 - lon1) * Math.PI / 180;
		var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
			Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
			Math.sin(dLon / 2) * Math.sin(dLon / 2);
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
		var d = R * c;
	}
	if(d > 1) return Math.round(d) + " km";
	else if(d <= 1) return Math.round(d * 1000) + " m";
	return d;
}