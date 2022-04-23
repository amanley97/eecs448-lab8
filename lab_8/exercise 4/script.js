let border = {};
let background = {};

window.onload = () => {
    border = {
        red: document.getElementById("borderRed"),
        green: document.getElementById("borderGreen"),
        blue: document.getElementById("borderBlue"),
        width: document.getElementById("borderWidth"),
    }

    background = {
        red: document.getElementById("backgroundRed"),
        green: document.getElementById("backgroundGreen"),
        blue: document.getElementById("backgroundBlue")
    }
}

function makeChange(){
    let temp = document.getElementById("text");
    temp.style.borderColor = `rgb(${border.red.value}, ${border.green.value}, ${border.blue.value})`;
    console.log(border);
    temp.style.borderWidth = border.width.value;
    temp.style.backgroundColor = `rgb(${background.red.value}, ${background.green.value}, ${background.blue.value})`;
    console.log(background);
}
