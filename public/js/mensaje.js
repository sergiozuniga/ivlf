

$('.form_delete').submit(function(e){
    e.preventDefault();
    Swal.fire({
        title: 'Estás seguro de eliminar registro?',
        text: "¡Recuerda que esta acción no se puede revertir!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
    })    
});
