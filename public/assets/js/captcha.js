var captcha = sliderCaptcha({
    height: 175,
    id: 'captcha',
    onSuccess: function () {
        submitData()
    }
});

function submitData() {
    $.ajax({
        url: "/sendEmail",
        type: "POST",
        data: formData,
        success: function (data, textStatus, jqXHR) {
            captcha.reset();
            $('#captchaModal').modal('hide')
            toastr["success"]("Success Sending Email. . .", {
                'positionClass': "md-toast-top-center",
                "timeOut": "3000"
            });
            setTimeout(() => {
                window.location.href = '/thanks'
            }, 2000);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR)
            captcha.reset();
            $('#captchaModal').modal('hide')
            toastr["error"]("Failed Sending Email. . .", {
                'positionClass': "md-toast-top-center",
                "timeOut": "3000"
            });
            
        }
    });
}