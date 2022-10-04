 /**FUNCTION QUE ME PERMITE REALIZAR EL CALCULO DEL CAMBIO DE LA CANTIDAD QUE SE ENTREGO*/
 const pcantidadv = document.querySelector("#cantidad_pago1");
 pcantidadv.addEventListener("keyup", event => {
     //console.log("exit");
     //pcantidadv.style.fontSize="23px";
     const vcambio = document.querySelector("#cambio_boleta1");
     const ventventa = document.querySelector("#totalpago1  ");
     const vcantidad = Number(pcantidadv.value);
     const totalreplace = ventventa.value.replace(/\s+/g, '');
     const vtotal = Number.parseFloat(totalreplace);
     const tt = ventventa.value;
     //console.log(tt)
     if (tt === '0.00') {
         //console.log("no se genero con exito");
         return false;
     }
     //console.log("se formateo "+tt);
     //console.log('cantidad :'+ vcantidad+ 'total : '+vtotal);
     if (vcantidad < vtotal) {
         //console.log("la cantidad es menor");
         vcambio.value = "";
     } else if (vcantidad >= vtotal) {
         const ventacambio = vcantidad - vtotal;
         //vcambio.style.fontSize="23px";
         let mycamb = truncateDecimals(ventacambio, 2);
         //vcambio.value=ventacambio;
         ////console.log("EL CAMBIO :"+ ventacambio);
         vcambio.value = mycamb;
         //console.log("EL CAMBIO :"+ mycamb);
     }
 });
 /**fUNCION QUE PARSEA EL CAMBIO A 2 DECIMALES */
 function truncateDecimals(num, digits) {
     var numS = num.toString();
     var decPos = numS.indexOf('.');
     var substrLength = decPos == -1 ? numS.length : 1 + decPos + digits;
     var trimmedResult = numS.substr(0, substrLength);
     var finalResult = isNaN(trimmedResult) ? 0 : trimmedResult;

     // adds leading zeros to the right
     if (decPos != -1) {
         var s = trimmedResult + "";
         decPos = s.indexOf('.');
         var decLength = s.length - decPos;

         while (decLength <= digits) {
             s = s + "0";
             decPos = s.indexOf('.');
             decLength = s.length - decPos;
             substrLength = decPos == -1 ? s.length : 1 + decPos + digits;
         };
         finalResult = s;
     }
     return finalResult;
 };

 //FUNCION QUE DESABILITA LOS SELECT OPTION SIN MODIFICAR Y NO ENVIAR CAMPOS VACIOS:
 /* $('select option:not(:selected)').each(function() {
     $(this).attr('disabled', 'disabled');
 }); */
 //--------


 function enviar() {
    event.preventDefault();

    Swal.fire({
title: '¿SEGURO DE REALIZAR EL PAGO?',
text: "Esta seguro que desea realizar esta operación!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'SI, DESEO REALIZAR EL PAGO!',
cancelButtonText: "No"
}).then((result) => {
if (result.value) {
document.formulario_pago.submit();
/* Swal.fire(
  'Deleted!',
  'Your file has been deleted.',
  'success'
)
 */
}
})
}


//--------------


//PASAR VARIABLES AL MODAL funciones
/* $(document).on("click", ".modal55", function () {
 var foroId= $(this).attr('data-item-prestamo');
 $("#foro_id").val(foroId);
}); */
//


//FUNCION QUE PERMITE COMPIAR EL INPUT DE PAGO CLIENTE
document.getElementById("cantidad_pago1",).addEventListener('keyup', autoCompleteNew);
function autoCompleteNew(e) {            
    var value = $(this).val();         
    $("#cantidad_pago",).val(value.replace(/\s/g, '').toLowerCase()); 
}
//---------------


/**FUNCTION QUE ME PERMITE REALIZAR EL CALCULO DEL CAMBIO DE LA CANTIDAD QUE SE ENTREGO MODAAAAAALLLLLLLLL*/
const pcantidadv2 = document.querySelector("#cantidad_pago1");
pcantidadv.addEventListener("keyup", event => {
    //console.log("exit");
    //pcantidadv.style.fontSize="23px";
    const vcambio = document.querySelector("#cambio_boleta");
    const ventventa = document.querySelector("#totalpago1");
    const vcantidad = Number(pcantidadv2.value);
    const totalreplace = ventventa.value.replace(/\s+/g, '');
    const vtotal = Number.parseFloat(totalreplace);
    const tt = ventventa.value;
    //console.log(tt)
    if (tt === '0.00') {
        //console.log("no se genero con exito");
        return false;
    }
    //console.log("se formateo "+tt);
    //console.log('cantidad :'+ vcantidad+ 'total : '+vtotal);
    if (vcantidad < vtotal) {
        //console.log("la cantidad es menor");
        vcambio.value = "";
    } else if (vcantidad >= vtotal) {
        const ventacambio = vcantidad - vtotal;
        //vcambio.style.fontSize="23px";
        let mycamb = truncateDecimals(ventacambio, 2);
        //vcambio.value=ventacambio;
        ////console.log("EL CAMBIO :"+ ventacambio);
        vcambio.value = mycamb;
        //console.log("EL CAMBIO :"+ mycamb);
    }
});
/**fUNCION QUE PARSEA EL CAMBIO A 2 DECIMALES */
function truncateDecimals(num, digits) {
    var numS = num.toString();
    var decPos = numS.indexOf('.');
    var substrLength = decPos == -1 ? numS.length : 1 + decPos + digits;
    var trimmedResult = numS.substr(0, substrLength);
    var finalResult = isNaN(trimmedResult) ? 0 : trimmedResult;

    // adds leading zeros to the right
    if (decPos != -1) {
        var s = trimmedResult + "";
        decPos = s.indexOf('.');
        var decLength = s.length - decPos;

        while (decLength <= digits) {
            s = s + "0";
            decPos = s.indexOf('.');
            decLength = s.length - decPos;
            substrLength = decPos == -1 ? s.length : 1 + decPos + digits;
        };
        finalResult = s;
    }
    return finalResult;
    //-----------------------------------------------------------------------
};


function formatear(dato) {
    return dato.replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
    });
}



$("#socio").change(function() {

    if ($("#socio").val() == "DISPONIBLE") {
        $("#idBoton").prop("disabled", true);
    } else {
        $("#idBoton").prop("disabled", false);
    }
});
$("#socio").trigger("change");


