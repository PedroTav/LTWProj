var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
       x[myIndex-1].style.display = 'block';
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}

    setTimeout(carousel, 3000); // Change image every 2 seconds
}
