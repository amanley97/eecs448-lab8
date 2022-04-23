let imgNum = 0;

function nextImg(num){
    imgNum = (5 + imgNum + num) % 5;
    document.getElementById("image").src = `assets/${imgNum}.jpg`;
}

let previous = () => nextImg(-1);
let next = () => nextImg(1);