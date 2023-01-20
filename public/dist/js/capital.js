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
         let mycamb = ventacambio.toFixed(2);
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
    $("#cantidad_pago_capi",).val(value.replace(/\s/g, '').toLowerCase()); 
}
//---------------


/**FUNCTION QUE ME PERMITE REALIZAR EL CALCULO DEL CAMBIO DE LA CANTIDAD QUE SE ENTREGO MODAAAAAALLLLLLLLL*/
const pcantidadv2 = document.querySelector("#cantidad_pago1");
pcantidadv.addEventListener("keyup", event => {
    //console.log("exit");
    //pcantidadv.style.fontSize="23px";
    const vcambio = document.querySelector("#cambio_boleta_capi");
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
        let mycamb = ventacambio.toFixed(2);
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


 //FUNCION PARA SACAR EL PORCENTAJE DEL AVALUO:
 function formatear(dato) {
    return dato.replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
    });
}





function calcular() {
    var valor = document.getElementById("interesrefre").value;
    var valor1 = document.getElementById("capital").value;

   
    var porce = parseFloat(valor);
   
   /*  var porce1 = parseFloat(valor1 || 0)   es de capital */
    /*         var porce2 = parseFloat(porce + porce1) */
    $("#prestamo4").val(formatear(porce.toFixed(2)))
    $("#totalpago1").val(porce.toFixed(2))
   /*  $("#multa2").val((porce/30).toFixed(2)) */
    $("#total_capi").val(porce.toFixed(2))
    $("#refrendo_anterior_capi").val(porce.toFixed(2))

    /*    $("#totalpago1").val(formatear(porce2.toFixed(2))) */

    $("#interes_anterior_capi").val($("#interesrefre option:selected").data("interes"));
    $("#almacenaje_anterior_capi").val($("#interesrefre option:selected").data("almacenaje"));
    $("#iva_anterior_capi").val($("#interesrefre option:selected").data("iva"));
    $("#sub_capital").val((($("#interesrefre option:selected").data("interes")) + ($("#interesrefre option:selected").data("almacenaje"))).toFixed(2));
    $("#multa2").val(($("#interesrefre option:selected").data("refrendo_r")/30).toFixed(2));
    
       }
calcular();



function calcular2() {
    var valor = document.getElementById("prestamo4").value;
    var valor1 = document.getElementById("capital").value;
    var valor2 = document.getElementById("pago6").value;
    var valor3 = document.getElementById("interesrefre").value;
    var valor4 = document.getElementById("refrendos22").value;
    var valor44 = document.getElementById("refrendos44").value;

    var valor333 = document.getElementById("multa").value;
    var valor444 = document.getElementById("multa2").value;
    var valor555 = document.getElementById("multa3").value;

    var porce444 = parseFloat(valor333);
    var porce333 = parseFloat(valor444);
    var porce555 = parseFloat(valor555);
    var porce444 = parseFloat((porce444*porce333)||0);
 
    

    var porce = parseFloat(valor);
    var porce1 = parseFloat(valor1 ||0)


    var porce2 = parseFloat(porce + porce1 + porce444)
    var porce3 = parseFloat(valor2)
    var porce4 = parseFloat(valor4)
    var porce44 = parseFloat(valor44)

    var porce6 = parseFloat(porce4+porce44)
    

    
    var porce5 = (parseFloat(porce3 - porce1))
   /*  var porce5 = (parseFloat(porce3 - porce1) || valor) */
   /* var porce5 = (parseFloat(porce3 - porce1)) */

/*      $("#totalpago1").val(formatear(porce2.toFixed(2)))
    $("#total").val(formatear(porce2.toFixed(2))) */
    $("#totalpago1").val(porce2.toFixed(2))
    $("#total_capi").val(porce2.toFixed(2))
    $("#abono_capital_capi").val(porce1.toFixed(2))
    $("#sub_capital").val(((($("#interesrefre option:selected").data("interes")) + ($("#interesrefre option:selected").data("almacenaje"))) + (porce1) || 0).toFixed(2));
    $("#prestamo_prenda").val(porce5.toFixed(0))

    $("#prestamo_prenda1").val(porce5.toFixed(2))
    $("#prestamo_prenda2").val(porce5.toFixed(2))
    $("#prestamo_prenda3").val(porce5.toFixed(2))
    $("#prestamo_prenda4").val(porce5.toFixed(2))
    $("#prestamo_prenda5").val(porce5.toFixed(2))
    
    $("#importe_actual_capi").val(porce5.toFixed(0))
    $("#numeros_capital").val(porce6.toFixed(0))
    $("#multa3").val(porce444.toFixed(2))
    $("#recargo_des_capi").val(porce444.toFixed(2))

}
calcular2();




/*     window.onload = function() {
        imprimirValor();
    }

    function imprimirValor() {
        var select = document.getElementById("interesrefre");
        $("#totalpago1").val(select.value)

    } */
/*  usar en donde va a poner la funcion de arriba ----> onChange="imprimirValor()" */


function calcular3() {
    var valor = document.getElementById("socio").value;
    var datopres = document.getElementById("prestamo_prenda").value;
    var porce = parseFloat(1 * valor * datopres); //almacenaje
    var porce1 = parseFloat(datopres) * 0.01 * 1; //interes
    var porce2 = parseFloat((porce + porce1) * 0.16); //iva
    var porce3 = parseFloat(porce + porce1 + porce2); //refrendo
    var porce4 = parseFloat(datopres) //datodesempe
    var porce5 = parseFloat(porce3 + porce4); // desempeño
    var porce6 = parseFloat(porce4 + porce1 + porce); //subtotal

    var inte2 = parseFloat(datopres) * 0.01 * 2; //interes
    var alma2 = parseFloat(2 * valor * datopres); //almacenaje
    var iva2 = parseFloat((inte2 + alma2) * 0.16); //iva
    var refre2 = parseFloat(inte2 + alma2 + iva2); //refrendo
    var desem2 = parseFloat(refre2 + porce4); // desempeño
    var sub2 = parseFloat(porce4 + inte2 + alma2); // subtotal

    var inte3 = parseFloat(datopres) * 0.01 * 3; //interes
    var alma3 = parseFloat(3 * valor * datopres); //almacenaje
    var iva3 = parseFloat((inte3 + alma3) * 0.16); //iva
    var refre3 = parseFloat(inte3 + alma3 + iva3); //refrendo
    var desem3 = parseFloat(refre3 + porce4); // desempeñ3
    var sub3 = parseFloat(porce4 + inte3 + alma3); // subtotal

    var inte4 = parseFloat(datopres) * 0.01 * 4; //interes
    var alma4 = parseFloat(4 * valor * datopres); //almacenaje
    var iva4 = parseFloat((inte4 + alma4) * 0.16); //iva
    var refre4 = parseFloat(inte4 + alma4 + iva4); //refrendo
    var desem4 = parseFloat(refre4 + porce4); // desempeñ3
    var sub4 = parseFloat(porce4 + inte4 + alma4); // subtotal

    var inte5 = parseFloat(datopres) * 0.01 * 5; //interes
    var alma5 = parseFloat(5 * valor * datopres); //almacenaje
    var iva5 = parseFloat((inte5 + alma5) * 0.16); //iva
    var refre5 = parseFloat(inte5 + alma5 + iva5); //refrendo
    var desem5 = parseFloat(refre5 + porce4); // desempeñ3
    var sub5 = parseFloat(porce4 + inte5 + alma5); // subtotal


    $("#almacenaje").val(porce.toFixed(2))
    $("#iva").val(porce2.toFixed(2))
    $("#interes").val((porce1.toFixed(2)))
    $("#refrendo").val((porce3.toFixed(2)))
    $("#desempeño").val((porce5.toFixed(2)))
    $("#subtotal").val((porce6.toFixed(2)))

    $("#almacenaje2").val(alma2.toFixed(2))
    $("#iva2").val(iva2.toFixed(2))
    $("#interes2").val((inte2.toFixed(2)))
    $("#refrendo2").val((refre2.toFixed(2)))
    $("#desempeño2").val((desem2.toFixed(2)))
    $("#subtotal2").val((sub2.toFixed(2)))

    $("#almacenaje3").val(formatear(alma3.toFixed(2)))
    $("#iva3").val(iva3.toFixed(2))
    $("#interes3").val((inte3.toFixed(2)))
    $("#refrendo3").val((refre3.toFixed(2)))
    $("#desempeño3").val((desem3.toFixed(2)))
    $("#subtotal3").val((sub3.toFixed(2)))

    $("#almacenaje4").val(formatear(alma4.toFixed(2)))
    $("#iva4").val(iva4.toFixed(2))
    $("#interes4").val((inte4.toFixed(2)))
    $("#refrendo4").val((refre4.toFixed(2)))
    $("#desempeño4").val((desem4.toFixed(2)))
    $("#subtotal4").val((sub4.toFixed(2)))

    $("#almacenaje5").val(formatear(alma5.toFixed(2)))
    $("#iva5").val(iva5.toFixed(2))
    $("#interes5").val((inte5.toFixed(2)))
    $("#refrendo5").val((refre5.toFixed(2)))
    $("#desempeño5").val((desem5.toFixed(2)))
    $("#subtotal5").val((sub5.toFixed(2)))
}
calcular3();




/*     function calcular4() {

}
calcular4();
*/


$( function() {
$("#interesrefre").change( function() {
    if ($(this).val() === "") {
        $("#capital").prop("disabled", true);
    } else {
        $("#capital").prop("disabled", false);
    }
});
});


$( function() {
$("#capital").change( function() {
    if ($(this).val() == "") {
        $("#cantidad_pago1").prop("disabled", true);
    }if ($(this).val() == 0) {
        $("#cantidad_pago1").prop("disabled", true);
    }
     else {
        $("#cantidad_pago1").prop("disabled", false);
    }

});
});
