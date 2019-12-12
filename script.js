var modal = document.getElementById('modal');

// del modal de inicio de sesion 
var closeButton = document.getElementById('closeButton');
var cancelButton = document.getElementById('cancelButton');
var changeModal = document.getElementById('changeModal');

// botones de activacion para el modal de recuperacion de contraseña
var closeButtonR = document.getElementById('closeButtonR');
var cancelButtonR = document.getElementById('cancelButtonR');
var modalSUP = document.getElementById('modalSUP');

// para el modal de registro
var closeButtonSUP = document.getElementById('closeButtonSUP');
var cancelButtonSUP = document.getElementById('cancelButtonSUP');
var changeModalSUP = document.getElementById('changeModalSUP');
var modalR = document.getElementById('modal-pass-r');

// variables del sidebar


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// -------------------- botones de cambio de modal ------------------


changeModal.addEventListener('click', (event)=> {
	// modal.animation = 'close-modal';
	modal.style.display = "none";
	
})

changeModalSUP.addEventListener('click', (event)=> {
	modal.style.display = "none";
})

// -------------------- botones de cierre de modal--------------

// del modal de recuperacion de contraseña 

closeButtonR.addEventListener('click', (event)=> {
	modalR.animation = 'close-modal';
	console.log(event);
});

cancelButtonR.addEventListener('click', (event)=> {
	modalR.animation = 'close-modal';
	console.log(event);

});

// del modal de inicio de sesion 

closeButton.addEventListener('click', (event)=> {
	modalR.animation = 'close-modal';
	console.log(event);
});

cancelButton.addEventListener('click', (event)=> {
	modalR.animation = 'close-modal';
	console.log(event);

});

// del registro

cancelButtonSUP.addEventListener('click', (event)=> {
	modalSUP.animation = 'close-modal';
})

closeButtonSUP.addEventListener('click', (event)=> {
	modalSUP.animation = 'close-modal';
})

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
