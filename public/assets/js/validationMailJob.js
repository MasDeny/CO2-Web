function validationEmailJob(data) {
    var name = document.getElementById('name').value;
    if (name == "") {
        //document.querySelector('.status').innerHTML = "Name cannot be empty";
        toastr["error"]("Name cannot be empty", "coddingcollective.com", {
            'positionClass': "md-toast-top-center",
            "timeOut": "1500"
        });
        return false;
    }
    var email = document.getElementById('email').value;
    if (email == "") {
        //document.querySelector('.status').innerHTML = "Email cannot be empty";
        toastr["warning"]("Email cannot be empty", "coddingcollective.com", {
            'positionClass': "md-toast-top-center",
            "timeOut": "1500"
        });
        return false;
    } else {
        var re =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(email)) {
            //document.querySelector('.status').innerHTML = "Email format invalid";
            toastr["error"]("Email format invalid", "coddingcollective.com", {
                'positionClass': "md-toast-top-center",
                "timeOut": "1500"
            });
            return false;
        }
    }
    var mobilenumber = document.getElementById('mobile-number').value;
    if (mobilenumber == "") {
        //document.querySelector('.status').innerHTML = "Mobile number cannot be empty";
        toastr["error"]("Mobile number cannot be empty", "coddingcollective.com", {
            'positionClass': "md-toast-top-center",
            "timeOut": "1500"
        });
        return false;
    }
    formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'mobilenumber': $('input[name=mobilenumber]').val(),
        'position': $('input[name=position]').val(),
        'file': $('input[name=file]').val(),
        'subject': "CO2 Job Apply",
        'project': false
    };
    submitData(formData)
    $('#captchaModal').modal('show')
}