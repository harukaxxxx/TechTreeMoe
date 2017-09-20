// ==UserScript==
// @name         gamemodels3d data downloader
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  try to take over the world!
// @author       You
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/japan
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/usa
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/germany
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/ussr
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/uk
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/poland
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/panasia
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/france
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/commonwealth
// @match        https://gamemodels3d.com/games/worldofwarships/vehicles/italy
// @grant        none
// ==/UserScript==

(function() {
    'use strict';

    // Function to download data to a file
    function download(data, filename, type) {
        var file = new Blob([data], { type: type });
        if (window.navigator.msSaveOrOpenBlob) // IE10+
            window.navigator.msSaveOrOpenBlob(file, filename);
        else { // Others
            var a = document.createElement("a"),
                url = URL.createObjectURL(file);
            a.href = url;
            a.download = filename;
            document.body.appendChild(a);
            a.click();
            setTimeout(function() {
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            }, 0);
        }
    }

    //collecting data
    var vehicle = document.getElementsByClassName('vehicle_button');

    var nation = location.href;
    var nation = nation.split("/");
    var nation = nation[nation.length - 1];

    var data = {};
    var json = {};

    for (var i = 0; i < vehicle.length; i++) {
        //id
        var id = vehicle[i].href;
        var id = id.split("/");
        var id = id[id.length - 1];

        //name
        var name = vehicle[i].title;

        //tier
        var tier = vehicle[i].getElementsByTagName('span');
        var tier = tier[0].textContent;

        //type
        var type = id.substring(3, 4);
        switch (type) {
            case 'a':
                var type = 'aircarrier';
                break;
            case 'b':
                var type = 'battleship';
                break;
            case 'c':
                var type = 'cruiser';
                break;
            case 'd':
                var type = 'destroyer';
                break;
        }

        if (type != 'x') {
            data[id] = { name, tier, type };
        }
    }
    json[nation] = data;
    var obj = JSON.stringify(json);


    //add download btn
    var btn = document.createElement("BUTTON");
    var t = document.createTextNode("Download Data");
    btn.appendChild(t);
    document.body.appendChild(btn);
    btn.onclick = function() {
        download(obj, nation + '.json');
    };

})();