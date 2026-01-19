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


</head>
<body>

<div id="desktop">
    <div id="top_bar">
        <div class="system-time">31 May 1984</div>
        <div class="nav-segment">NODE: <span id="display_username">AGENT_STUB</span></div>
        <div class="nav-segment">FREQ: <input type="text" id="room_id_input" maxlength="6"></div>
        <div class="nav-controls">
            <button onclick="switchCanvas()" class="system-btn">TUNE</button>
            <button onclick="openModal()" class="system-btn">NEW</button>
        </div>
    </div>

    <div class="window" id="win_canvas" style="top: 80px; left: 50px; width: 550px;">
        <div class="window-header">
            <span class="window-title">LIVE_SIGNAL.EXE</span>
            <button class="win-close">X</button>
        </div>
        <div class="window-content" id="signal_center">
            <div id="canvas_placeholder" class="vhs-static">
                <span class="center-text">SEARCHING...</span>
            </div>
            <div class="crt-overlay"></div>
        </div>
    </div>

    <div class="window" id="win_assets" style="top: 80px; left: 630px; width: 300px;">
        <div class="window-header">
            <span class="window-title">ASSETS.LOG</span>
            <button class="win-close">X</button>
        </div>
        <div class="window-content" id="building_showcase">
            <div id="visual_agents"></div>
        </div>
    </div>

    <div class="window" id="win_shop" style="top: 350px; left: 630px; width: 300px;">
        <div class="window-header">
            <span class="window-title">SHOP.CMD</span>
            <button class="win-close">X</button>
        </div>
        <div class="window-content" id="agent_shop">
            <div id="shop_items"></div>
        </div>
    </div>

    <div id="bottom_bar">
        <div class="stat-group">
            <span>ENTROPY: <span id="entropy_balance">0000</span></span>
            <span>UPLINK: <span id="pps_display">0.0</span> B/s</span>
        </div>
        <div class="progress-group">
            <div id="cooldown_container">
                <div id="cooldown_bar" style="width: 45%"></div>
                <span id="cooldown_text">INJECTING...</span>
            </div>
            <button id="change_target_btn" class="system-btn">MANUAL_OVERRIDE</button>
        </div>
    </div>
</div>

<!-- scripts -->
<script type="module" src="../controller/game_manager.js"></script>
<script type="module" src="../controller/input_handler.js"></script>
<script type="module" src="../controller/canvas_manager.js"></script>

</body>
</html>
