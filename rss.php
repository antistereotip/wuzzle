var i = 0;

var timerid = 0;
var n;
var timequantum;
//var text="javascript je coool!";
var text="rss text";

function core(timequantum, n) {
    i = i + 1;
    if (i > n) {
        clearTimeout(timerid);
        return 0;
    } else {

        timerid = setTimeout(function () {
            document.getElementById("brojac").innerHTML += text.charAt(i);
            core(timequantum, n);
        }, timequantum);
        return 0;
    }
}

function main() {
    clearTimeout(timerid);
    i = -1;
    timequantum = 25;
    document.getElementById("brojac").innerHTML="";

    n = text.length;
    core(timequantum, n);
    return 0;
}
