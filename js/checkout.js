function checkout() {
    let grandTotal = document.getElementById('grand_total').innerText
    grandTotal = grandTotal.slice(1)
    grandTotal = parseInt(grandTotal)

    if (grandTotal < 200) {
        document.getElementById('checkoutError').innerText = "Minimum cart Value is ₹200"
    } else {
        document.getElementById('checkoutError').innerText = ""
        console.log("Proceed")

        $.ajax({
            type: "POST",
            url: "assets/parsers/checkout_parser.php",
            data: {
                checkout : true
            },
            dataType: 'JSON',
            success: function (response) {
                if (response.setPrice === true) {
                    window.location.href = "checkout.php"
                } else if (response.setPrice === false) {
                    alert("Please Enable Your Cookies to Proceed")
                } else {
                   alert("Something Went Wrong")
                }
            }
        });
    }
}

function first() {
    $('#1').fadeIn();
    $('#2').hide();
    $('#3').hide();
}

function goToSecond() {
    event.preventDefault()
    $('#1').fadeOut();
    $('#2').delay(500).fadeIn();
}

function goToThird() {
    event.preventDefault()
    $('#2').fadeOut();
    $('#3').delay(500).fadeIn();

    setTimeout(function() {
        window.location.href = "index.php";
    }, 3000);
}