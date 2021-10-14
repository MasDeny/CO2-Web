var captcha = sliderCaptcha({
    height: 175,
    id: 'captcha',
    onSuccess: function () {
        console.log('success captcha');
        captcha.reset();
        window.location.href = '/thanks'
    }
});