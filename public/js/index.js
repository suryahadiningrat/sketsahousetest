function submit() {
let qSelectName = el => document.querySelector(`input[name='${el}']`).value;
let qSelectGender = el => document.querySelector(`select[name='${el}']`).value;
let qSelectTextarea = el => document.querySelector(`textarea[name='${el}']`).value;

let data = {
    name: qSelectName("name"),
    email: qSelectName("email"),
    phone: qSelectName("phone"),
    gender: qSelectGender("gender"),
    address: qSelectTextarea("address")
};
fetch("/api/subscribers/store", {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    }, 
    body: JSON.stringify(data)
}).then(response => response.json())
    .then(response => {
    if (response.error) {
        let errors = response.error.message;

        let showError = err => {
            Swal.fire({
                title: 'Bad Request',
                text: err,
                icon: 'warning',
                confirmButtonText: 'OK'
            })
        }

        if (errors.gender) {
            showError(errors.gender[0]);
        }
        if (errors.address) {
            showError(errors.address[0]);
        }
        if (errors.phone) {
            showError(errors.phone[0]);
        }
        if (errors.email) {
            showError(errors.email[0]);
        }
        if (errors.name) {
            showError(errors.name[0]);
        }
    }
    
    if (response.status == 200) {
        Swal.fire({
            title: 'Success!',
            text: response.message,
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(isConfirm => {
            if (isConfirm) {
                window.location.reload();
            }
        });
    }
    });
}