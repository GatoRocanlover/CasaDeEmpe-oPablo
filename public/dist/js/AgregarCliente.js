   //MENSAJE DE ALERTA BOTTON


   function enviar() {
    event.preventDefault();

    Swal.fire({
title: '¿DESEA REGISTRAR EL CLIENTE?',
text: "Esta seguro que desea realizar esta operación!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'SI, DESEO REGISTRAR EL CLIENTE!',
cancelButtonText: "No"
}).then((result) => {
if (result.value) {
document.registroCliente.submit();
/* Swal.fire(
  'Deleted!',
  'Your file has been deleted.',
  'success'
)
 */
}
})
}

