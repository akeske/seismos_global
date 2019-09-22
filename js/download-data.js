
function getCurrentDate() {
    let today = new Date();
    let dd = today.getDate();

    let mm = today.getMonth()+1;
    let yyyy = today.getFullYear();
    if(dd<10)
    {
        dd='0'+dd;
    }

    if(mm<10)
    {
        mm='0'+mm;
    }

    return yyyy  + "-" + mm + "-" + dd;
}

function getAllInputsDataInElement(elementId) {
    let elem = document.getElementById(elementId);
    let inputElements = elem.querySelectorAll("input, select, checkbox, textarea");
    let data = {};
    inputElements.forEach(elem=>{
        if(elem.value){
            data[elem.id] = elem.value;
        }
    });

    return data;
}


function postAllInputsInElement(elementId) {
    let data = getAllInputsDataInElement(elementId);

    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };

    xhttp.open("POST", "download-data-service.php", true);
    xhttp.setRequestHeader("Content-type", "application/application/json");
    xhttp.send(JSON.stringify(data));
}

function loadDoc() {


}

