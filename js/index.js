const bar = document.getElementById("bar");
const nav = document.getElementById("navbar");
const close = document.getElementById("close");

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

let dark = getCookie("dark")
if (dark === "true") {
    document.getElementById("stylesheet").href = "css/dark.css";
    document.cookie = "dark=true";
    document.getElementById('theme').checked = true
} else if (dark === "false") {
    document.getElementById("stylesheet").href = "css/light.css";
    document.cookie = "dark=false"
    document.getElementById('theme').checked = false

}


if (bar) {
    bar.addEventListener("click", () => {
        nav.classList.add("pressed");
    });
}

if (close) {
    close.addEventListener("click", () => {
        nav.classList.remove("pressed");
    });
}

function changeTheme() {
    const toggle = document.getElementById("theme");
    if (toggle.checked === true) {
        document.getElementById("stylesheet").href = "css/dark.css";
        document.cookie = "dark=true";
    } else if (toggle.checked === false) {
        document.getElementById("stylesheet").href = "css/light.css";
        document.cookie = "dark=false"
    }
}

function goToShop() {
    window.location = "shop.php"
}

function viewProduct(id) {
    let productID = id.getAttribute("data-product-id")
    window.location.href = "product?p=" + productID
}

let cart = []
cart = JSON.parse(getCookie("cart"));
calculateTotal()

function addToCart(id) {
    let productID = id.getAttribute("data-product-id")
    let productQuantity = document.getElementById('productQuantity').value
    let item = {
        productID: productID,
        productQuantity: productQuantity
    }
    if (!e) var e = window.event;
    e.cancelBubble = true;
    if (e.stopPropagation) e.stopPropagation();
    cart.push(item)
    let cookieCart = JSON.stringify(cart)
    document.cookie = "cart=" + cookieCart
}

function returnToShop() {
    window.location.href = "shop.php"
}

function removeItem(id) {
    let product = id.getAttribute("data-product-id")
    let cart = JSON.parse(getCookie("cart"))
    let rem = document.querySelector(`[data-product-row="${product}"]`);
    rem.remove()
    let update = document.querySelectorAll('[data-product-update]');
    cart = []
    update.forEach(function (item) {
        let updateProductID = item.getAttribute('data-product-update')
        let updateProductQuantity = item.getAttribute("value")
        let data = {
            productID: updateProductID,
            productQuantity: updateProductQuantity
        }
        cart.push(data)
    })
    let cookieCart = JSON.stringify(cart)
    document.cookie = "cart=" + cookieCart

    calculateTotal();
}

notifyPositionCalc = (notifyEl) => {
    let notiFyiers = $('.notify:not(.-hidden)')
    let notifyCounter = notiFyiers.length + 1.5;
    if (!notifyEl) {
        notiFyiers.map((i, v) => {
            $(v).css('top', (i + 1) * ($(v).outerHeight() + 10) + 'px');
        })
        return true;
    }

    if (notifyCounter >= 1) {
        notifyEl.css('top', (notifyCounter - 1) * (notifyEl.outerHeight() + 10) + 'px');
    }
}

$(document).ready(() => {
    $('.click-handler').on('click', () => {
        let newNotify = $('.notify.-hidden').clone().removeClass('-hidden').appendTo('body');

        notifyPositionCalc(newNotify);
        setTimeout(() => {
            newNotify.remove();
            notifyPositionCalc();
        }, 4000);
    });
});

function calculateTotal() {
    $.post("assets/parsers/price_parser.php", {
            change_price: true,
        },
        function (result) {
            console.log(result)
            document.getElementById('total').innerText = "₹" + result
            document.getElementById('grand_total').innerText = "₹" + Math.round(result).toString()
        });
}

function discount() {
    let coupon = document.getElementById('couponCode').value
    coupon = coupon.toUpperCase()
    $.ajax({
        type: "POST",
        url: "assets/parsers/price_parser.php",
        data: {
            couponAdded: true,
            coupon: coupon
        },
        dataType: 'JSON',
        success: function (response) {
            document.getElementById('total').innerText = "₹" + response.total
            document.getElementById('grand_total').innerText = "₹" + Math.round(response.total).toString()
            document.getElementById('coupon_message').innerHTML = response.message
        }
    });
}
