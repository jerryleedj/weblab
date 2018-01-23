"use strict";
/*jslint browser: true*/
/*global $, setInterval, parseInt, document*/



/* Ex. 1~3 
function hello() {
    alert("Hello, world!");
} */

/* Ex. 4 
function bigger() {
    $("text").style.fontSize = "24pt";
} */

/* Ex. 5 */
function bling() {
    var body = document.getElementsByTagName("body")[0];
    if ($("bling").checked) {
        $("text").style.fontWeight = "bold";
        $("text").style.color = "green";
        $("text").style.textDecoration = "underline";
        body.style.backgroundImage = "url('hundred.jpg')";
    } else {
        $("text").style.fontWeight = "normal";
        $("text").style.color = "black";
        $("text").style.textDecoration = "none";
        body.style.backgroundImage = "none";
    }
}

/* Ex. 6 */
function snoopify() {
    $("text").value = $("text").value.toUpperCase();
    $("text").value = $("text").value.split(".").join("-izzle.");
}

/* Ex. 7 */
function increase() {
    if (!$("text").style.fontSize) {
        $("text").style.fontSize = "12pt";
    } else {
        $("text").style.fontSize = parseInt($("text").style.fontSize, [10]) + 2 + "pt";
    }
}

function pimp() {
    var pimpin = setInterval(increase, 500);
}