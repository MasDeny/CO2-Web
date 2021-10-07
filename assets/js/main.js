function myFunction(x) {
    let center = document.getElementById('make-center');
    if (x.matches) { // If media query matches
        center.classList.add('text-center');
    }
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time