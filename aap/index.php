<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <script src="hijtwit.js"></script>
        <link rel="stylesheet" type="text/css" href="hijtwit.css">
    </head>
    <body onload="createBoxes()">

        height:<input id="height" type="text" onchange="divChange()"/>
        <br>
        width:<input id="width" type="text" onchange="divChange()"/>
        <br>
        <select id="color" onchange="divChange()">
            <option>Yellow</option>
            <option>Blue</option>
            <option>Red</option>
        </select>
        <br>
        <button onclick="defDiv();">Default</button>
        <br><br>

    </body>
</html>