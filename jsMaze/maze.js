"use strict";
/*jslint browser: true*/
/*global window, $, $$*/

var loser = null;  // whether the user has hit a wall



window.onload = function() {
	$("start").onclick = startClick;
	$("start").onmouseover = startHover;
	$("end").onmouseover = overEnd;
	
	var bound = $$("div#maze div.boundary");
	for (var i = 0; i < bound.length; i++) {
		bound[i].onmouseover = overBody;
	}

};


function startClick() {
	loser = false;
	$("status").textContent = "Find the right way!";
	
	var bound = $$("div#maze div.boundary");
	for (var i = 0; i < bound.length; i++) {
		bound[i].removeClassName("youlose");
	}
}

function startHover() {
	if(loser === null) {
		loser = false;
	}
}

function overEnd() {
	if(loser === false) {
		$("status").textContent = "You win!";
		loser = null; // Ex 8: Proper maze completion
	}
}

function overBody(event) {
	if (loser === false) {
		loser = true;
		$("status").textContent = "You lose!";
		
		var bound = $$("div#maze div.boundary");
		for (var i = 0 ; i < bound.length; i++) {
			bound[i].addClassName("youlose");
		}
	}
}