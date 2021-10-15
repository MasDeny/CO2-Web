var captcha = sliderCaptcha({
    height: 175,
    id: 'captcha',
    onSuccess: function () {
        submitData()
    }
});

function submitData() {
    console.log(formData)
    $.ajax({
        url: "/sendEmail",
        type: "POST",
        data: formData,
        success: function (data, textStatus, jqXHR) {
            //$('#status').text("Email sent!");
            console.log(data)
            toastr["success"]("Success Sending Email. . .", {
                'positionClass': "md-toast-top-center",
                "timeOut": "3000"
            });
            captcha.reset();
            $('#captchaModal').modal('hide')
            // setTimeout(() => {
            //     window.location.href = '/thanks'
            // }, 4000);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            toastr["error"]("Failed Sending Email. . .", {
                'positionClass': "md-toast-top-center",
                "timeOut": "3000"
            });
        }
    });
}