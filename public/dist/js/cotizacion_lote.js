//FUNCION PARA SACAR EL PORCENTAJE DEL AVALUO:
function formatear(dato) {
    return dato.replace(/./g, function (c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
    });
}

function calcular() {
    var valor = document.getElementById("prestamo_por").value;
    var valor2 = document.getElementById("prestamo_ava").value;

    var valor_2 = document.getElementById("porcentaje_prestamo_sobre_avaluo_2").value;
    var valor2_2 = document.getElementById("avaluo_prenda_2").value;

    var valor_3 = document.getElementById("porcentaje_prestamo_sobre_avaluo_3").value;
    var valor2_3 = document.getElementById("avaluo_prenda_3").value;

    var valor_4 = document.getElementById("porcentaje_prestamo_sobre_avaluo_4").value;
    var valor2_4 = document.getElementById("avaluo_prenda_4").value;

    var valor_5 = document.getElementById("porcentaje_prestamo_sobre_avaluo_5").value;
    var valor2_5 = document.getElementById("avaluo_prenda_5").value;

    var valor_6 = document.getElementById("porcentaje_prestamo_sobre_avaluo_6").value;
    var valor2_6 = document.getElementById("avaluo_prenda_6").value;



    var valor11 = document.getElementById("valor_oro_plata").value;
    var valor22 = document.getElementById("gramaje_prenda").value;

    var valor11_2 = document.getElementById("valor_oro_plata_2").value;
    var valor22_2 = document.getElementById("gramaje_prenda_2").value;

    var valor11_3 = document.getElementById("valor_oro_plata_3").value;
    var valor22_3 = document.getElementById("gramaje_prenda_3").value;

    var valor11_4 = document.getElementById("valor_oro_plata_4").value;
    var valor22_4 = document.getElementById("gramaje_prenda_4").value;

    var valor11_5 = document.getElementById("valor_oro_plata_5").value;
    var valor22_5 = document.getElementById("gramaje_prenda_5").value;

    var valor11_6 = document.getElementById("valor_oro_plata_6").value;
    var valor22_6 = document.getElementById("gramaje_prenda_6").value;

    var porce = (parseFloat((valor2) * valor / 100) || 0);
    var porce_2 = (parseFloat((valor2_2) * valor_2 / 100) || 0);
    var porce_3 = (parseFloat((valor2_3) * valor_3 / 100) || 0);
    var porce_4 = (parseFloat((valor2_4) * valor_4 / 100) || 0);
    var porce_5 = (parseFloat((valor2_5) * valor_5 / 100) || 0);
    var porce_6 = (parseFloat((valor2_6) * valor_6 / 100) || 0);


    var porce1 = parseFloat(valor11 * valor22);
    var porce1_2 = parseFloat(valor11_2 * valor22_2);
    var porce1_3 = parseFloat(valor11_3 * valor22_3);
    var porce1_4 = parseFloat(valor11_4 * valor22_4);
    var porce1_5 = parseFloat(valor11_5 * valor22_5);
    var porce1_6 = parseFloat(valor11_6 * valor22_6);

    var avatotal = parseFloat(porce1+porce1_2+porce1_3+porce1_4+porce1_5+porce1_6)
    var ptotal = (parseFloat((porce + porce_2 + porce_3 + porce_4 + porce_5 + porce_6) || 0));

    var totalpor = (parseFloat((ptotal/avatotal) *100|| 0));

    $("#prestamo_lote ").val(formatear(porce.toFixed(0)))
    $("#prestamo_prenda_2").val(porce_2.toFixed(0))
    $("#prestamo_prenda_3").val(porce_3.toFixed(0))
    $("#prestamo_prenda_4").val(porce_4.toFixed(0))
    $("#prestamo_prenda_5").val(porce_5.toFixed(0))
    $("#prestamo_prenda_6").val(porce_6.toFixed(0))

    $("#prestamo_ava").val(formatear1(porce1.toFixed(0)))
    $("#avaluo_prenda_2").val(porce1_2.toFixed(0))
    $("#avaluo_prenda_3").val(porce1_3.toFixed(0))
    $("#avaluo_prenda_4").val(porce1_4.toFixed(0))
    $("#avaluo_prenda_5").val(porce1_5.toFixed(0))
    $("#avaluo_prenda_6").val(porce1_6.toFixed(0))
    $("#avaluo_prenda").val(avatotal.toFixed(0))

   
    $("#prestamo_prenda").val(ptotal.toFixed(0))
    $("#porcentaje_prestamo_sobre_avaluo").val(totalpor.toFixed(0))
}
calcular();


//-----------------------------------------------------------------------------------------------

function cal() {
    try {
        var a = parseFloat(document.getElementById("dato_1").value) || 0,
            b = parseFloat(document.getElementById("dato_2").value) || 0,
            c = parseFloat(document.getElementById("dato_3").value) || 0,
            d = parseFloat(document.getElementById("dato_4").value) || 0,

            a_2 = parseFloat(document.getElementById("dato_1_2").value) || 0,
            b_2 = parseFloat(document.getElementById("dato_2_2").value) || 0,
            c_2 = parseFloat(document.getElementById("dato_3_2").value) || 0,
            d_2 = parseFloat(document.getElementById("dato_4_2").value) || 0,

            a_3 = parseFloat(document.getElementById("dato_1_3").value) || 0,
            b_3 = parseFloat(document.getElementById("dato_2_3").value) || 0,
            c_3 = parseFloat(document.getElementById("dato_3_3").value) || 0,
            d_3 = parseFloat(document.getElementById("dato_4_3").value) || 0,

            a_4 = parseFloat(document.getElementById("dato_1_4").value) || 0,
            b_4 = parseFloat(document.getElementById("dato_2_4").value) || 0,
            c_4 = parseFloat(document.getElementById("dato_3_4").value) || 0,
            d_4 = parseFloat(document.getElementById("dato_4_4").value) || 0,

            a_5 = parseFloat(document.getElementById("dato_1_5").value) || 0,
            b_5 = parseFloat(document.getElementById("dato_2_5").value) || 0,
            c_5 = parseFloat(document.getElementById("dato_3_5").value) || 0,
            d_5 = parseFloat(document.getElementById("dato_4_5").value) || 0,

            a_6 = parseFloat(document.getElementById("dato_1_6").value) || 0,
            b_6 = parseFloat(document.getElementById("dato_2_6").value) || 0,
            c_6 = parseFloat(document.getElementById("dato_3_6").value) || 0,
            d_6 = parseFloat(document.getElementById("dato_4_6").value) || 0;

        var total2 = document.getElementById("promedio_prenda").value = ((a + b + c + d) / 4).toFixed(3);
        var total3 = document.getElementById("kilataje_prenda").value = Math.round(((a + b + c + d) / 4).toFixed(3));

        var total2_2 = document.getElementById("promedio_prenda_2").value = ((a_2 + b_2 + c_2 + d_2) / 4).toFixed(3);
        var total3_2 = document.getElementById("kilataje_prenda_2").value = Math.round(((a_2 + b_2 + c_2 + d_2) / 4).toFixed(3));

        var total2_3 = document.getElementById("promedio_prenda_3").value = ((a_3 + b_3 + c_3 + d_3) / 4).toFixed(3);
        var total3_3 = document.getElementById("kilataje_prenda_3").value = Math.round(((a_3 + b_3 + c_3 + d_3) / 4).toFixed(3));

        var total2_4 = document.getElementById("promedio_prenda_4").value = ((a_4 + b_4 + c_4 + d_4) / 4).toFixed(3);
        var total3_4 = document.getElementById("kilataje_prenda_4").value = Math.round(((a_4 + b_4 + c_4 + d_4) / 4).toFixed(3));

        var total2_5 = document.getElementById("promedio_prenda_5").value = ((a_5 + b_5 + c_5 + d_5) / 4).toFixed(3);
        var total3_5 = document.getElementById("kilataje_prenda_5").value = Math.round(((a_5 + b_5 + c_5 + d_5) / 4).toFixed(3));

        var total2_6 = document.getElementById("promedio_prenda_6").value = ((a_6 + b_6 + c_6 + d_6) / 4).toFixed(3);
        var total3_6 = document.getElementById("kilataje_prenda_6").value = Math.round(((a_6 + b_6 + c_6 + d_6) / 4).toFixed(3));

    } catch (e) { }
}

//-----------------------------------------------------------------------

function formatear1(dato1) {
    return dato1.replace(/./g, function (c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
    });
}
