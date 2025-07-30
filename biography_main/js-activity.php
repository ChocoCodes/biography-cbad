<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="assets/pic_bulboff.gif" alt="Bulb Off" id="bulb"/>
    </br>
    <button id="toggle" onclick="toggleSwitch()">Turn On</button>

    <script>

        let bulb = document.getElementById('bulb')
        let toggle = document.getElementById('toggle')
        let isOn = false;
        const toggleSwitch = () => {
            isOn = !isOn;
            bulb.src = isOn ? "assets/pic_bulbon.gif" : "assets/pic_bulboff.gif";
            toggle.innerHTML = isOn ? 'Turn On' : 'Turn Off';
        }
    </script>
</body>
</html>