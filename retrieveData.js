function getXMLData(attribute, textbetween) {
    document.getElementById("content").innerHTML = "Loading...";
    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onload = function () {
        if (xmlHttp.status == 200) {

            var xmlDoc = xmlHttp.responseXML;

            var output = '';

            var names = xmlDoc.getElementsByTagName('name');
            var data = xmlDoc.getElementsByTagName(attribute);

            console.dir(names);
            console.dir(data);
            output += "<ul>\n";
            for (i = 0; i < names.length; i++) {
                output += "<li>" + names[i].textContent + textbetween + data[i].textContent + "</li>\n";
            }
            output += "</ul>";

            var divObj = document.getElementById('content');

            divObj.innerHTML = output;
        }
    }

    xmlHttp.open("GET", "http://www.professorwergeles.com/CS2830/webService.php?content=data&format=xml", true);
    xmlHttp.send();
}

function getMarvelPowers() {
    getXMLData("power", "'s super power is: ");
}

function getMarvelDefeats() {
    getXMLData("defeat", " defeats ");
}

function getJSONData(attribute, textbetween) {
    document.getElementById("content").innerHTML = "Loading...";

    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onload = function () {
        if (xmlHttp.status == 200) {
            var content = document.getElementById("content");

            var output = '';
            var response = xmlHttp.responseText;

            console.dir(response);

            response = JSON.parse(response);
            output += "<ul>\n";
            for (i = 0; i < response.dc.length; i++) {
                var element = response.dc[i];
                console.dir(element);
                if (attribute == "power") {
                    output += "<li>" + element.nm + textbetween + element.pwr + "</li>\n";
                }
                else if (attribute == "defeat") {
                    output += "<li>" + element.nm + textbetween + element.dft + "</li>\n";
                }
            }
            output += "</ul>";

            console.dir(response);

            content.innerHTML = output;
        }
    };

    xmlHttp.open("GET", "http://www.professorwergeles.com/CS2830/webService.php?content=data&format=json", true);
    xmlHttp.send();
}

function getDCPowers() {
    getJSONData("power", "'s super power is: ");
}

function getDCDefeats() {
    getJSONData("defeat", " defeats ");
}

function getHomeData() {
    document.getElementById("content").innerHTML = "Loading...";

    var xmlHttp = new XMLHttpRequest();

    xmlHttp.onload = function () {
        if (xmlHttp.status == 200) {
            var content = document.getElementById("content");

            var response = xmlHttp.responseText;

            console.dir(response);

            content.innerHTML = response;
        }
    };

    xmlHttp.open("GET", "http://www.professorwergeles.com/CS2830/webService.php?content=home", true);
    xmlHttp.send();
}