const CSRF = document.querySelector("meta[name='csrf-token']").getAttribute("content");

function goodJob(title = null, msj = null) {
    Swal.fire(
        title ? title : 'Well done!',
        msj ? msj : 'Your changes were made successfully.',
        'success'
    )
}

function processing(setTitle = null, setHtml = null) {
    Swal.fire({
        title: setTitle ? setTitle : 'Processing...',
        html: setHtml ? setHtml : 'Wait a moment, we are processing the order',
        iconColor: '#28a745',
        showConfirmButton: false,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
        }
    })
}

function hideProcessing() {
    for (var i=0; i < document.getElementsByClassName('swal2-container').length; i++)
        document.getElementsByClassName('swal2-container')[i].style.display = "none"
}

function somethingIsWrong(msj = null, detail = null) {
    let html;
    if (detail) {
        let data = detail.name ? `<li style="color: red;">${detail.name}</li>` : '';
        data += detail.price ? `<li style="color: red;">${detail.price}</li>` : '';

        html = data;
    }
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: msj ? msj : 'Something went wrong',
        html: html ? html : ''
    })
}

function youSure(element, message = null) {
    event.preventDefault();

    Swal.fire({
        title: `Are you sure you want to delete ${element.name}?`,
        text: message ? message : "You cannot undo this action!",
        icon: 'warning',
        showCancelButton: true,
        // confirmButtonColor: '#3085d6',
        // cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete!'
    }).then((result) => {
        if (result.isConfirmed) {
            deleteProduct(element);
            Swal.fire(
                'Deleted!',
                `The product ${element.name} was successfuly deleted.`,
                'success'
            )
        }
    });
}
