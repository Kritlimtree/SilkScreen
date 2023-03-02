function toMudjum(){
    document.getElementById("money123").innerHTML = 200;
}
function toFull(){
    document.getElementById("money123").innerHTML = 500;
}
function loadImage() {
    document.getElementById("img").innerHTML = "<img src='images/ShowWhite.jpg' />";
}
function color(){
    document.getElementById("color").innerHTML = 1;
}
function morecolor(){
    document.getElementById("color").innerHTML = 2;
}
function slider(){
    var output = document.getElementById("demo");
    var slider = document.getElementById("myRange").oninput = function(){
        var value = (this.value-this.min)/(this.max-this.min)*100;
        output.innerHTML =this.value;
    }

}