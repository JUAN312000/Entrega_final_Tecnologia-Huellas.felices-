function init(){

	getAnimales();

}

function enviaradopcion() {
    formData = new FormData($("#formulario-adopcion")[0]);
    $.ajax({
        type: "POST",
        url: "ajax/ajadopciones.php?op=enviaradopcion",
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            $("#formulario-adopcion")[0].reset();
            alertify.set('notifier','position', 'bootom-right');
alertify.success('Mensaje recibido',4, null);
        }
    });
}

function soloNumeros(e){
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}


function verificar_datos() {
    var nomb = $("#nombre").val();
    var apel = $("#apellidos").val();
    var emai = $("#email").val();
    var tele = $("#telefono").val();
    var mens = $("#mensaje").val();
    var idan = $("#idanimalito").val();
    
    

    if (nomb == "") {
        var msg = alertify.error('Escriba su nombre', 4);
        msg.callback = function (isClicked) {
         if(isClicked)
             $("#nombre").focus();
         else
             $("#nombre").focus();
};
        return;
}

    if (apel == "") {
        var msg = alertify.error('Escriba su apellido', 4);
        msg.callback = function (isClicked) {
         if(isClicked)
             $("#apellidos").focus();
         else
             $("#apellidos").focus();
};
        return;
}


    if (emai == "") {
        var msg = alertify.error('Escriba su email', 4);
        msg.callback = function (isClicked) {
         if(isClicked)
             $("#email").focus();
         else
             $("#email").focus();
};
        return;
    } else {
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!expr.test(emai)) {

            var msg = alertify.error('Escriba un email valido', 4);
        msg.callback = function (isClicked) {
         if(isClicked)
             $("#email").focus();
         else
             $("#email").focus();
};
        return;
        }
    }
        if (idan == "") {
         var msg = alertify.error('Seleccione un animalito', 4);
        msg.callback = function (isClicked) {
         if(isClicked)
             $("#idanimalito").focus();
         else
             $("#idanimalito").focus();
};
        return;
    }


    if (mens == "") {
         var msg = alertify.error('Escriba un mensaje', 4);
        msg.callback = function (isClicked) {
         if(isClicked)
             $("#mensaje").focus();
         else
             $("#mensaje").focus();
};
        return;
    }
    

    
            enviaradopcion();
        }

function getAnimales() {
	$.post("ajax/ajadopciones.php?op=getAnimales",
        function (data) {
            data = JSON.parse(data);
            let html = '<option value="">Seleccione el Perro/Gato</option>';
            for(let myData in data) {
                html += `<option value="${data[myData].idadopcion}">${data[myData].nombre}</option>`;
            }
            $("#idanimalito").html(html);
          //  $("#idanimalito").select("refresh")
        }
    );
	
}

init();