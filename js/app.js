// Menu

$menu = $('#menu');

$menu.hide();

function openMenu() {
	$menu.fadeIn();
}
function closeMenu() {
	$menu.fadeOut();
}

// Agregar actividad

$addActivity = $('#addActivity');

$addActivity.hide();

function openActivity() {
	event.preventDefault();
	$addActivity.fadeIn();
}
function closeActivity() {
	$addActivity.fadeOut();
}


// Agregar entregable

$addEntregable = $('#addEntregable');

$addEntregable.hide();

function openEntregable() {
	event.preventDefault();
	$addEntregable.fadeIn();
}
function closeEntregable() {
	$addEntregable.fadeOut();
}

//Loadder
$loadder = $('#loader');

function loading() {
	$loadder.fadeIn();
}
function loaded() {
	$loadder.fadeOut();
}
$(document).ready(function() {
	// Fade Loading
	setTimeout(loaded, 1);
});