    $('#accordionEx').on('shown.bs.collapse', function () {
        divheader = document.getElementsByClassName("show")[0].parentNode.children[0];
        divheader.style.background = '#FFC700';
    });
    $('#accordionEx').on('hidden.bs.collapse', function () {
        divheader.style.background = 'white';
    });

    $(document).ready(function () {
        // SideNav Button Initialization
        $(window).on("resize", () => {
            const x = window.matchMedia("(max-width: 768px)")
            console.log("resize change");
            if (x.matches) { // If media query matches
                $("#make-center").addClass("text-center");
                $("#mobile-shown").css("display", "block")
                $("#mobile-hidden").css("display", "none")
            } else {
                $("#make-center").removeClass("text-center");
                $("#mobile-shown").css("display", "none")
                $("#mobile-hidden").css("display", "block")

            }
        });
        $('.mdb-select').materialSelect();
        $(".button-collapse").sideNav({
            slim: true,
            edge: 'right',
        });
    });


    // gesture banner
    $('.carousel').carousel({
        touch: true // default
    })

    $('#amount').focusout(function (e) {
        var reg = /^\d+$/;
        if (reg.test(this.value)) {
            const USD = value => currency(value, {
                symbol: "",
                precision: 2
            });
            let num = USD(this.value).format();
            $('#amount').val(num)
        } else {
            toastr["error"]("Please input amount with number", "coddingcollective.com", {
                'positionClass': "md-toast-top-center",
                "timeOut": "1500"
            });
            $('#amount').val(0)
        }
    })

    