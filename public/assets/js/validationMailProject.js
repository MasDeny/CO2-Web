var formData;
function validateForm(type) {
    captcha.reset()
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
    var companyname = document.getElementById('company-name').value;
    if (companyname == "") {
        //document.querySelector('.status').innerHTML = "Company name cannot be empty";
        toastr["error"]("Company name cannot be empty", "coddingcollective.com", {
            'positionClass': "md-toast-top-center",
            "timeOut": "1500"
        });
        return false;
    }
    if (type === 'project') {
        var website = $('input:checkbox[name=website]').is(':checked');
        var android = $('input:checkbox[name=android]').is(':checked');
        var ios = $('input:checkbox[name=ios]').is(':checked');
        if (!(website || android || ios)) {
            toastr["error"]("Empty type development", "coddingcollective.com", {
                'positionClass': "md-toast-top-center",
                "timeOut": "1500"
            });
            return false;
        }
        var amount = document.getElementById('amount').value;
        if (amount === 0) {
            toastr["error"]("Please input amount", "coddingcollective.com", {
                'positionClass': "md-toast-top-center",
                "timeOut": "1500"
            });
        }
    }
    var message = document.getElementById('message').value;
    if (message == "") {
        //document.querySelector('.status').innerHTML = "Message cannot be empty";
        toastr["error"]("Message cannot be empty", "coddingcollective.com", {
            'positionClass': "md-toast-top-center",
            "timeOut": "1500"
        });
        return false;
    }
    var industry = document.getElementById('industry').value;
    var country = document.getElementById('country').value;
    //   document.querySelector('.status').innerHTML = "Sending...";
    formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'mobilenumber': $('input[name=mobile-number]').val(),
        'companyname': $('input[name=company-name]').val(),
        'industry': industry,
        'country': country,
        'amount': $('input[name=amount]').val(),
        'website': $('input:checkbox[name=website]').is(':checked'),
        'android': $('input:checkbox[name=android]').is(':checked'),
        'ios': $('input:checkbox[name=ios]').is(':checked'),
        'subject': "CO2 Project",
        'message': $('textarea[name=message]').val(),
        'project': true
    };
    $('#captchaModal').modal('show')
}