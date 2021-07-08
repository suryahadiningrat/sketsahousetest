function submit(){
    let qSelectName = el => document.querySelector(`input[name='${el}']`).value;

    data = {
        email: qSelectName('email'),
        password: qSelectName('password')
    }

    fetch('/api/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(response => response.json())
        .then(response => {
            if (response.error) {
                if (response.error == "invalid_credentials") {
                    Swal.fire({
                        title: 'Invalid Credentials',
                        text: "Invalid Email Or Password",
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    })
                }else{
                    let errors = response.error.message;

                    let showError = err => {
                        Swal.fire({
                            title: 'Bad Request',
                            text: err,
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        })
                    }
                    
                    if (errors.password) {
                        showError(errors.password[0]);
                    }
                    if (errors.email) {
                        showError(errors.email[0]);
                    }
                }
            }else{
                let data = {
                    'token': response.token,
                    '_token': qSelectName("_token")
                };

                //Store Token To Cookie
                fetch("store/token", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }).then(response => response.json())
                    .then(response => {
                        if (response == 200) {
                            window.location.replace("/home");
                        }
                    });
            }
        })
}