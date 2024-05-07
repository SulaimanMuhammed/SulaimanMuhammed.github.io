let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}


const product = [
    {
        id: 0,
        image: 'img/pic3.jpg',
        title: 'Dreamcatcher',
        price: 4,
    },
    {
        id: 1,
        image: 'img/pic5.jpg',
        title: 'Scarf',
        price: 5,
    },
    {
        id: 2,
        image: 'img/pic12.jfif',
        title: 'Woolen Handmade Bag',
        price: 15,
    },
    {
        id: 3,
        image: 'img/pic9.jpg',
        title: 'Bunny Bag',
        price: 10,
    }
,
    {
        id: 4,
        image: 'img/pic11.jfif',
        title: 'Woolen Cap',
        price: 7,
    }
    ,
    {
        id: 5,
        image: 'img/pic1.jpg',
        title: 'Macrame Wall Hanging',
        price: 3,
    }
    ,
    {
        id: 6,
        image: 'img/pic4.jfif',
        title: 'Woolen Handmade Socks',
        price: 4,
    }
    ,
    {
        id: 7,
        image: 'img/pic10.jfif',
        title: 'Finger Woolen Gloves',
        price: 4,
    } 
];

const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='cart-box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')




var cart = [];

function addtocart(a) {
    // Check if the product is already in the cart
    let index = cart.findIndex(item => item.id === categories[a].id);
    
    if (index !== -1) {
        // If the product is already in the cart, increase its quantity
        cart[index].quantity++;
    } else {
        // If the product is not in the cart, add it with quantity 1
        cart.push({...categories[a], quantity: 1});
    }
    
    displaycart();
}

function delElement(a) {
    if (cart[a].quantity > 1) {
        // If the quantity is greater than 1, decrease the quantity
        cart[a].quantity--;
    } else {
        // If the quantity is 1, remove the item from the cart
        cart.splice(a, 1);
    }
    displaycart();
}

function displaycart() {
    let total = 0;
    document.getElementById("count").innerHTML = cart.length;
    if (cart.length == 0) {
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ " + 0 + ".00";
    } else {
        document.getElementById("cartItem").innerHTML = cart.map((item, index) => {
            var {image, title, price, quantity} = item;
            total += price * quantity;
            document.getElementById("total").innerHTML = "$ " + total + ".00";
            return (
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title} (${quantity}x)</p>
                <h2 style='font-size: 15px;'>$ ${price * quantity}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement(" + index + ")'></i></div>"
            );
        }).join('');
    }
}















function addtocart(a) {
    let index = cart.findIndex(item => item.id === categories[a].id);
    if (index !== -1) {
        cart[index].quantity++;
    } else {
        cart.push({...categories[a], quantity: 1});
    }
    
    // Store cart data in local storage
    localStorage.setItem('cart', JSON.stringify(cart));
    
    displaycart();
}

function redirectToCheckout() {
    // Redirect to checkout page with selected products
    window.location.href = "checkout.php";
}
