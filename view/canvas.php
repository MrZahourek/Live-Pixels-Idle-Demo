<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live pixels</title>

    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/popup.css">


</head>
<body>

<div id="money"></div>

<div id="buildings_wrapper"></div>

<div id="artefacts_wrapper"></div>

<button id="clicker">click me</button>

<!-- scripts -->
<script type="module" src="../controller/game_manager.js"></script>
<script type="module" src="../controller/canvas_manager.js"></script>

<!--<script>-->
<!--    // popup JS-->
<!--    function openModal() {-->
<!--        document.getElementById("createCanvasModal").style.display = "flex";-->
<!--    }-->
<!--    function closeModal() {-->
<!--        document.getElementById("createCanvasModal").style.display = "none";-->
<!--    }-->
<!--</script>-->

</body>
</html>
