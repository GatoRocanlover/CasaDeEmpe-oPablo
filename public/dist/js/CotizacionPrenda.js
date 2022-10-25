  //FUNCION PARA SACAR EL PORCENTAJE DEL AVALUO:
  function formatear(dato) {
    return dato.replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
    });
}

function calcular() {
    var valor = document.getElementById("porcentaje_prestamo_sobre_avaluo").value;
    var valor2 = document.getElementById("avaluo_prenda").value;
    var porce = (parseFloat((valor2) * valor / 100)||0 );
    $("#prestamo_prenda").val(formatear(porce.toFixed(0)))
}
calcular();


//-----------------------------------------------------------------------------------------------

function cal() {
try {
    var a = parseFloat(document.getElementById("dato_1").value) || 0,
        b = parseFloat(document.getElementById("dato_2").value) || 0,
        c = parseFloat(document.getElementById("dato_3").value) || 0,
        d = parseFloat(document.getElementById("dato_4").value) || 0;

    var total2 = document.getElementById("promedio_prenda").value = ((a + b + c + d) / 4).toFixed(3);

    var total3 = document.getElementById("kilataje_prenda").value = Math.round(((a + b + c + d) / 4).toFixed(3));

} catch (e) {}
}

//-----------------------------------------------------------------------

function formatear1(dato1) {
return dato1.replace(/./g, function(c, i, a) {
    return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
});
}

function calcular1() {
var valor11 = document.getElementById("valor_oro_plata").value;
var valor22 = document.getElementById("gramaje_prenda").value;
var porce1 = parseFloat(valor11 * valor22);
$("#avaluo_prenda").val(formatear1(porce1.toFixed(0)))
}
calcular1();

//MENSAJE DE ALERTA BOTTON


function enviar() {
event.preventDefault();

Swal.fire({
title: '¿DESEA REGISTRAR COTIZACIÓN?',
text: "Esta seguro que desea realizar esta operación!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'SI, DESEO REGISTRAR LA COTIZACIÓN!',
cancelButtonText: "No"
}).then((result) => {
if (result.value) {
document.registroCotizacion.submit();
/* Swal.fire(
'Deleted!',
'Your file has been deleted.',
'success'
)
*/
}
})
}