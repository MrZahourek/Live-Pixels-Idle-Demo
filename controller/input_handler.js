import {canvas} from "./canvas_manager";
import {currentTarget} from "./game_manager";

const targetChangeBtn = document.getElementById("change_target_btn");

canvas.addEventListener("click", (e) => {
    // pick new target
    // find cords on canvas
    const canvasBox = canvas.getBoundingClientRect();
    let newX = e.clientX - canvasBox.left;
    let newY = e.clientY - canvasBox.top;

    // hide effects
});

targetChangeBtn.addEventListener("click", (e) => {
    // change cursor

    // add following range showcase

    // add grid to show individual pixels

    // change value to give possibility to change target
})