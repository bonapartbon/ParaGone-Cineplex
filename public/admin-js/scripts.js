/*!
 * Start Bootstrap - SB Admin v7.0.1 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2021 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
// 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

function calc() {
    var amount = document.getElementById("bookingType").value;
    if (amount == "2D") {
        amount = 3;
        console.log(amount);
    } else if (amount == "3D") {
        amount = 4;

        console.log(amount);
    } else if (amount == "4DX") {
        amount = 5;

        console.log(amount);
    }
    var quantity = document.getElementById("bookingTicket").value;

    var total = amount * quantity;
    document.getElementById("total").value = total;
    document.getElementById("bookingTotal").innerHTML = total;

}