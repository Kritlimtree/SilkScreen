function changeColor(){
    let box = document.getElementById('box');
    let color = document.getElementById('colorInputColor').value;
    box.style.backgroundColor = color;
    document.getElementById('colorInputText').value = color;
}