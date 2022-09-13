 //FUNCION QUE DESABILITA LOS SELECT OPTION SIN MODIFICAR Y NO ENVIAR CAMPOS VACIOS:
    /*  $('select option:not(:selected)').each(function() {
         $(this).attr('disabled', 'disabled');
     }); */
    //--------

    

    //-------------------------------------------------------------

    function formatear(dato) {
        return dato.replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
        });
    }

    function calcular() {
        var valor = document.getElementById("socio").value;
        var datopres = document.getElementById("prestamo_inicial").value;
        var porce = parseFloat(1 * valor * datopres); //almacenaje
        var porce1 = parseInt(datopres) * 0.01 * 1; //interes
        var porce2 = parseFloat((porce + porce1) * 0.16); //iva
        var porce3 = parseFloat(porce + porce1 + porce2); //refrendo
        var porce4 = parseFloat(datopres) //datodesempe
        var porce5 = parseFloat(porce3 + porce4); // desempeño

        var inte2 = parseInt(datopres) * 0.01 * 2; //interes
        var alma2 = parseFloat(2 * valor * datopres); //almacenaje
        var iva2 = parseFloat((inte2 + alma2) * 0.16); //iva
        var refre2 = parseFloat(inte2 + alma2 + iva2); //refrendo
        var desem2 = parseFloat(refre2 + porce4); // desempeño
        
        var inte3 = parseInt(datopres) * 0.01 * 3; //interes
        var alma3 = parseFloat(3 * valor * datopres); //almacenaje
        var iva3 = parseFloat((inte3 + alma3) * 0.16); //iva
        var refre3 = parseFloat(inte3 + alma3 + iva3); //refrendo
        var desem3 = parseFloat(refre3 + porce4); // desempeñ3

        var inte4 = parseInt(datopres) * 0.01 * 4; //interes
        var alma4 = parseFloat(4 * valor * datopres); //almacenaje
        var iva4 = parseFloat((inte4 + alma4) * 0.16); //iva
        var refre4 = parseFloat(inte4 + alma4 + iva4); //refrendo
        var desem4 = parseFloat(refre4 + porce4); // desempeñ3

        var inte5 = parseInt(datopres) * 0.01 * 5; //interes
        var alma5 = parseFloat(5 * valor * datopres); //almacenaje
        var iva5 = parseFloat((inte5 + alma5) * 0.16); //iva
        var refre5 = parseFloat(inte5 + alma5 + iva5); //refrendo
        var desem5 = parseFloat(refre5 + porce4); // desempeñ3

        $("#almacenaje").val(formatear(porce.toFixed(2)))
        $("#iva").val(porce2.toFixed(2))
        $("#interes").val((porce1.toFixed(2)))
        $("#refrendo").val((porce3.toFixed(2)))
        $("#desempeño").val((porce5.toFixed(2)))

        $("#almacenaje2").val(formatear(alma2.toFixed(2)))
        $("#iva2").val(iva2.toFixed(2))
        $("#interes2").val((inte2.toFixed(2)))
        $("#refrendo2").val((refre2.toFixed(2)))
        $("#desempeño2").val((desem2.toFixed(2)))

        $("#almacenaje3").val(formatear(alma3.toFixed(2)))
        $("#iva3").val(iva3.toFixed(2))
        $("#interes3").val((inte3.toFixed(2)))
        $("#refrendo3").val((refre3.toFixed(2)))
        $("#desempeño3").val((desem3.toFixed(2)))

        $("#almacenaje4").val(formatear(alma4.toFixed(2)))
        $("#iva4").val(iva4.toFixed(2))
        $("#interes4").val((inte4.toFixed(2)))
        $("#refrendo4").val((refre4.toFixed(2)))
        $("#desempeño4").val((desem4.toFixed(2)))

        $("#almacenaje5").val(formatear(alma5.toFixed(2)))
        $("#iva5").val(iva5.toFixed(2))
        $("#interes5").val((inte5.toFixed(2)))
        $("#refrendo5").val((refre5.toFixed(2)))
        $("#desempeño5").val((desem5.toFixed(2)))
    }
    calcular();

    //-------------------------------------------------------

    //MENSAJE DE ALERTA BOTTON
    function enviar() {
        event.preventDefault();

        Swal.fire({
  title: '¿DESEA GENERAR LA BOLETA?',
  text: "Esta seguro que desea realizar esta operación!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI, DESEO GENERAR LA BOLETA!',
  cancelButtonText: "No"
}).then((result) => {
  if (result.value) {
    document.formulario_boleta.submit();
    /* Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
     */
  }
})
    }


//---------------ReafirmarsiesSocio------------------

$("#socio").change(function() {

  if( $("#socio").val()=="DISPONIBLE"){
      $( "#idBoton" ).prop( "disabled", true );    
  }else{
      $( "#idBoton" ).prop( "disabled", false );
  }    
  });
  $("#socio").trigger("change");