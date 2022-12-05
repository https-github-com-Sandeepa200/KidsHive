
const board = document.querySelector("#board");
const ctx = board.getContext("2d");
let color = "black";
let lineSize = 5;

window.addEventListener("load", () => {
    // resizing
    board.width = window.innerWidth;
    board.height = window.innerHeight;

    // variables and functions
    let drawing = false;

    const startDrawing = (e) => {
        drawing = true;
        draw(e);
    }
    const stopDrawing = () => {
        drawing = false;
        ctx.beginPath();
    }

    const draw = (e) => {
        if (!drawing) return;


        ctx.lineWidth = lineSize;
        ctx.lineCap = "round";
        ctx.strokeStyle = color;

        ctx.lineTo(e.clientX, e.clientY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.clientX, e.clientY);
    }


    // eventlisterners
    board.addEventListener("mousedown", startDrawing);
    board.addEventListener("mouseup", stopDrawing);
    board.addEventListener("mousemove", draw);

})

// show settings

const setBtn = document.querySelector(".show-settings");
const settings = document.querySelector(".settings");

setBtn.addEventListener("click" , () => {
    settings.classList.toggle("open-settings");
})

// brush colors

const colorBtn = document.querySelector("#color-btn");

colorBtn.addEventListener("click", () => {
    const clrCont = document.querySelector(".colors");
    clrCont.classList.toggle("colors-toggle");
})

const clrBtns = document.querySelectorAll(".clr");

for (btn of clrBtns) {
    btn.addEventListener("click", (e) => {
        color = e.target.getAttribute("data-color-name");
    })
}


// brushes

const brushBtn = document.querySelector("#brush-btn");

brushBtn.addEventListener("click", () => {
    const brushCont = document.querySelector(".brush");
    brushCont.classList.toggle("brush-toggle");
})

const brushBtns = document.querySelectorAll(".brush-size");

for (btn2 of brushBtns) {
    btn2.addEventListener("click", (e2) => {
        lineSize = e2.target.getAttribute("data-size");
    })
}

const eraser = document.querySelector("#eraser");

eraser.addEventListener("click" , () => {
    color = "white";
})