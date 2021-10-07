function myFunction(x) {
    let section = document.getElementsByTagName("section")[1];
    let center = document.getElementById('make-center');
    if (x.matches) { // If media query matches
        section.classList.add('text-center');
        center.classList.add('text-center');
    }
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time