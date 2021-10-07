<!-- jQuery -->
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../assets/js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    $('#accordionEx').on('shown.bs.collapse', function () {
        console.log("shown");
        divheader = document.getElementsByClassName("show")[0].parentNode.children[0];
        divheader.style.background = '#FFC700';
    });
    $('#accordionEx').on('hidden.bs.collapse', function () {
        console.log("hidden");
        divheader.style.background = 'white';
    });

    $(document).ready(function () {
        // SideNav Button Initialization
        $(".button-collapse").sideNav({
            slim: true,
            edge: 'right',
        });
    });

    // gesture banner
    $('.carousel').carousel({
        touch: true // default
    })

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').materialSelect();
    });
    //toastr
    // contact form
    function validateForm() {
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
        var website = $('input:checkbox[name=website]').is(':checked');
        var android = $('input:checkbox[name=android]').is(':checked');
        var ios = $('input:checkbox[name=ios]').is(':checked');
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
        var amount = document.getElementById('amount').value;
        //   document.querySelector('.status').innerHTML = "Sending...";
        document.getElementById('status').innerHTML = "Sending...";
        formData = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'mobilenumber': $('input[name=mobilenumber]').val(),
            'companyname': $('input[name=companyname]').val(),
            'industry': industry,
            'country': country,
            'amount': $('input[name=amount]').val(),
            'website': $('input:checkbox[name=website]').is(':checked'),
            'android': $('input:checkbox[name=android]').is(':checked'),
            'ios': $('input:checkbox[name=ios]').is(':checked'),
            'subject': "CO2 Project",
            'message': $('textarea[name=message]').val()
        };


        $.ajax({
            url: "../services/mail.php",
            type: "POST",
            data: formData,
            success: function (data, textStatus, jqXHR) {
                //$('#status').text("Email sent!");
                toastr["success"]("Email sent", "coddingcollective.com", {
                    'positionClass': "md-toast-top-center",
                    "timeOut": "1500"
                });
                setTimeout(function () {
                    location.reload(); //Refresh page
                }, 100);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#status').text(jqXHR);
            }
        });

        formData2 = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'mobilenumber': $('input[name=mobilenumber]').val(),
            'position': $('input[name=position]').val(),
            'file': $('input[name=file]').val(),
        };


        $.ajax({
            url: "../services/mail-job.php",
            type: "POST",
            data: formData2,
            success: function (data, textStatus, jqXHR) {
                $('#status').text("Email sent!");
                //$('#status').text(data.message);
                //if (data.code) //If mail was sent successfully, reset the form.
                //$('#contact-form').closest('form').find("input[type=text], textarea").val("");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#status').text(jqXHR);
            }
        });
    }
</script>
<script type="text/javascript" src="../assets/js/main.js"></script>
</body>

</html>