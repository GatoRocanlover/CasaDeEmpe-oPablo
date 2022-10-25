    //MENSAJE DE ALERTA BOTTON


    function enviar() {
        event.preventDefault();
     
        Swal.fire({
     title: '¿DESEA TERMINAR DE EDITAR LOS DATOS DEL CLIENTE?',
     text: "Esta seguro que desea realizar esta operación!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'SI, DESEO TERMINAR DE ACTUALIZAR LOS DATOS!',
     cancelButtonText: "No"
     }).then((result) => {
     if (result.value) {
     document.editarCliente.submit();
     /* Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
     )
     */
     }
     })
     }