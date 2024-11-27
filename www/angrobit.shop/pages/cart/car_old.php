<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../bdfunction.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <title>AngroBit Shop</title>
</head>
<body class="body">
<!-- HEADER -->
<header class="header">
    <span class="border border_t_left"></span>
    <span class="border border_t_right"></span>
    <span class="border border_b_left"></span>
    <span class="border border_b_right"></span>
    <nav class="nav">
        <div class="logo">
            <a href="/">
                <img src="../../assets/images/home/logo.svg" alt="AngroBit Logo">
            </a>
        </div>
        <button class="nav_search" id="button_nav_search">
          <span class="icon">
            <img src="../../assets/images/home/icon_search.svg" alt="Seach_Icon">
          </span>
            <span class="nav_title"> Search </span>
        </button>
        <div class="nav_line"></div>
        <ul class="nav_items">
            <li class="nav_item">
                <a href="/">
              <span class="icon">
                <img src="../../assets/images/home/icon_home.svg" alt="Home" class="normal">
                <img src="../../assets/images/home/icon_home_active.svg" alt="Home active" class="active">
              </span>
                    <span class="nav_title"> Home </span>
                </a>
            </li>
            <li class="nav_item activated">
                <a href="../../pages/catalog/catalog.php">
              <span class="icon">
                <img src="../../assets/images/home/icon_catalog.svg" alt="Catalog" class="normal">
                <img src="../../assets/images/home/icon_catalog_active.svg" alt="Catalog active" class="active">
              </span>
                    <span class="nav_title"> Catalog </span>
                </a>
            </li>
            <li class="nav_item">
                <a href="/">
              <span class="icon">
                <img src="../../assets/images/home/icon_collection.svg" alt="Collection" class="normal">
                <img src="../../assets/images/home/icon_collection_active.svg" alt="Collection active" class="active">
              </span>
                    <span class="nav_title"> Collection </span>
                </a>
            </li>
        </ul>
        <div class="nav_line"></div>
        <div class="game">
            <a href="#">
            <span class="icon_game">
              <img src="../../assets/images/home/icon_game.svg" alt="icon game">
            </span>
                <span class="nav_title">Coming soon</span>
            </a>
        </div>
    </nav>
</header>
<!-- POPUP SEARCH NAV -->
<div class="popup_search_nav">
    <span class="border border_t_left"></span>
    <span class="border border_t_right"></span>
    <span class="border border_b_left"></span>
    <span class="border border_b_right"></span>
    <button class="button_close" id="btn_popup_nav_search_close">
        <img src="../../assets/images/home/icon_close.svg" draggable="false" alt="close icon">
    </button>
    <div class="logo">
        <img src="../../assets/images/home/logo_2.svg" alt="Logo AngroBit">
    </div>
    <form action="#" class="search_nav_form">
        <span class="icon">
          <img src="../../assets/images/home/icon_search.svg" draggable="false" alt="search icon">
        </span>
        <input type="search" placeholder="Search">
        <span class="hidden_icon">
          <img src="../../assets/images/home/icon_close.svg" draggable="false" alt="close icon">
        </span>
    </form>
    <div class="last_viewed_container">
        <p class="title">Last viewed</p>
        <ul class="items">
            <li class="item">
                <img src="../../assets/images/home/shirt3.png" alt="T-shirt">
            </li>
            <li class="item">
                <img src="../../assets/images/home/shirt3.png" alt="T-shirt">
            </li>
            <li class="item">
                <img src="../../assets/images/home/shirt3.png" alt="T-shirt">
            </li>
        </ul>
        <div class="line"></div>
    </div>
    <div class="recommended_container">
        <p class="title">Recommended</p>
        <ul class="items">
            <li class="item">
                <a href="#">
              <span class="icon">
                <img src="../../assets/images/home/icon_sale.svg" alt="Icon sale">
              </span>
                    <span class="text">Sale</span>
                </a>
            </li>
            <li class="item">
                <a href="#">
              <span class="icon">
                <img src="../../assets/images/home/icon_populare.svg" alt="Icon populare">
              </span>
                    <span class="text">Populare</span>
                </a>
            </li>
            <li class="item">
                <a href="#">
              <span class="icon">
                <img src="../../assets/images/home/icon_exclusive.svg" alt="Icon exclusive">
              </span>
                    <span class="text">Exclusive</span>
                </a>
            </li>
            <li class="item">
                <a href="#">
              <span class="icon">
                <img src="../../assets/images/home/icon_t_shirt.svg" alt="Icon T-shirt">
              </span>
                    <span class="text">T-shirts</span>
                </a>
            </li>
            <li class="item">
                <a href="#">
              <span class="icon">
                <img src="../../assets/images/home/icon_caps.svg" alt="Icon Caps">
              </span>
                    <span class="text">Caps</span>
                </a>
            </li>
            <li class="item">
                <a href="#">
              <span class="icon">
                <img src="../../assets/images/home/icon_hoddie.svg" alt="Icon hoddie">
              </span>
                    <span class="text">Hoddie</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<main class="main main_cart">
    <!-- CART -->
    <section class="cart">
        <span class="border border_t_left"></span>
        <span class="border border_t_right"></span>
        <span class="border border_b_left"></span>
        <span class="border border_b_right"></span>
        <div class="header_cart">
            <p class="cart_title">
            <span class="icon">
              <img src="../../assets/images/home/icon_cart.svg" alt="cart icon">
            </span> Cart
            </p>
            <span class="line_cart_header"></span>
        </div>
        <div class="controlls_cart">
            <div class="left_controlls">
                <input class="input_checkbox" type="checkbox" name="select_all_cart_items">
                <span class="text"> All items</span>
            </div>
        </div>
        <div class="cart_content">
            <ul class="cart_items">
                <?php
                $cart = selectRecords('users_shop','*',"WHERE id_users = '".$_GET['userid']."'");
                foreach ($cart as $value):
                    $product = selectRecords('products','*',"WHERE randomn_id = '".$value['shop']."'");
                    $imgproduct = selectRecords('img_bd','*',"WHERE connect_id = '".$product[0]['randomn_id']."'");
                    if(count($cart) == 0) continue;

                ?>

                <li class="cart_item" id="row-<?=$value['id']?>">
                    <div class="select_cart_item">
                        <input type="checkbox" name="PRODUCT_ID_checbox">
                    </div>
                    <div class="product_cart_image">
                        <img src="https://angrobit.com/uploads/mini_<?=$imgproduct[0]['nameImg'];?>" alt="PRODUCT NAME">
                    </div>
                    <div class="product_cart_details_container">
                        <p class="product_cart_name"> <?=$product[0]['name']?> </p>
                        <p class="product_cart_description"><?=$product[0]['description']?> </p>
                        <div class="selected_product">
                            <span class="product_cart_color" style="background: #ffff;"></span>
                            <span> <?=$product[0]['color']?></span>
                            <span class="product_cart_size"><?=$product[0]['size']?></span>
                        </div>
                    </div>
                    <div class="product_cart_controlls_container">
                        <p class="product_cart_price"> $ <span class="price"><?=$product[0]['price']?></span>
                        </p>
                        <div class="product_cart_qty">
                            <button class="increment">+</button>
                            <span class="value_qty">1</span>
                            <button class="decrement">-</button>
                        </div>
                        <div class="product_cart_delete" onclick="delorder(<?=$value['id']?>);">
                            <button class="btn_cart_delete"> &#x1F5D1; </button>
                        </div>
                    </div>
                </li>
                <? endforeach;?>



            </ul>
            <div class="shipping_address">
                <article class="address_customer" >
<?
$infousers = selectRecords('users_info','*',"WHERE id_users = '".$_GET['userid']."'");
if(count($infousers) > 0){
    echo '   
                    <div class="header_customer">
                        <h2>'.$infousers[0]['fname'].$infousers[0]['lastname'].' </h2>
                        <p class="phone_custumer">'.$infousers[0]['tel'].'</p>
                    </div>
                    <div class="address_cutumer">
                        <p>'.$infousers[0]['adress'].'</p>

                    </div>
                    ';

}else{
    echo '   <div class="address_cutumer">
                        <p>Add to contact</p>

                    </div>';
}
?>
                <div class="edit_address">
                    <button class="btn_edit_address"><a href="https://angrobit.com/admin" style="color: white;">✏️ Edit</a></button>
                </div>
                </article>
                <!-- IF ADDRESS EXISTING -->

            </div>
        </div>
        </div>
    </section>
    <div class="section_billing">
        <div  class="apply_promocode" >
            <p class="title">Promocode</p>
            <div class="box_promocode" >
                <input type="text" placeholder="Promocode" id="numberInput">
                <button type="submit" class="send_promocode" onclick="promocode();">Add</button>
            </div>
        </div>
        <div class="order_summary">
            <div class="header_order_summarry">
                <p class="title">Order Summary</p>
            </div>
            <?php
            $cart = selectRecords('users_shop','*',"WHERE id_users = '".$_GET['userid']."'");
            if (count($cart)>0){
                $price = 0;
                $tax = 0;
                $randomid = '';
                foreach ($cart as $value_el){
                    $product = selectRecords('products','*',"WHERE randomn_id = '".$value_el['shop']."'");
                    $price = $price +$product[0]['price'];
                    $tax = $tax +$product[0]['tax'];
                    $randomid .= $product[0]['randomn_id'].',';
                }
                $total = $price+$tax;
                echo '';
            }else{
                $randomid = '';
                $price = '';
                $tax = '';
                $total = '';
            }



            ?>
            <ul class="items_total">
                <li class="item_total">
                    <span id="arrayprduct" hidden="hidden"><?=$randomid;?></span>
                    <span class="name_item_total">Item total</span>
                    <span class="value_item_total"><?=$price;?> $</span>
                </li>

                <li class="item_total">
                    <span class="name_item_total">Taxes and fees</span>
                    <span class="value_item_total">$<?=$tax;?></span>
                </li>
            </ul>
        </div>
        <div class="estimated_total">
            <span class="name_estimated_total">Estimated total </span>
            <span class="value_estimated_total" id="totalproduct"><?=$total;?> $</span>
        </div>
        <div class="button_container_order">
            <button class="button_order" onclick="sendordertelegram();">Place order</button>
        </div>
    </div>
</main>

<!-- POPUP ADDRESS -->
<div class="popup_address">
    <div class="mask" id="close_address"></div>
    <div class="content">
        <button class="button_close_address" id="button_close_address">
            <img src="../../assets/images/home/icon_close.svg" alt="close icon">
        </button>
        <div class="header_address"> Shipping Address <span class="line_address"></span>
        </div>
        <form class="form_send_address" action="#" method="POST">
            <!-- IF ACTVIE SPAN CHANGE CLASS "active" -->
            <label for="address_first_name">First name <span class="hidden">*</span>
            </label>
            <input type="text" id="address_first_name" required>
            <label for="address_second_name">Second name <span class="hidden">*</span>
            </label>
            <input type="text" id="address_second_name" name="address_second_name" required>
            <label for="address_street">Street address <span class="hidden">*</span>
            </label>
            <input type="text" id="address_street" name="address_street" required>
            <label for="address_phone">Phone <span class="hidden">*</span>
            </label>
            <input type="tel" id="address_phone" name="address_phone" required>
            <label for="address_city">City <span class="hidden">*</span>
            </label>
            <input type="text" id="address_city" name="address_city" required>
            <label for="address_postal_code">Postal code <span class="hidden">*</span>
            </label>
            <input type="text" id="address_postal_code" name="address_postal_code" required>
            <label for="address_country">Country <span class="hidden">*</span>
            </label>
            <select id="address_country" name="address_country" required>
                <option value="" disabled selected>Select your country</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
            </select>
            <button class="btn_add_address" >Add address</button>
        </form>
    </div>
</div>
<!-- PROFILE WIDGET -->
<?php
require_once '../../core/profile.php';
?>
<script type="module" src="../../assets/js/main.js"></script>
<script>
function promocode(){
    var promocode = document.getElementById('arrayprduct').textContent;
    const numbersArray = promocode.split(',');
    const inputValue = document.getElementById('numberInput').value;
    if (numbersArray.includes(inputValue)) {
        const cost = document.getElementById('totalproduct').textContent;
        var totalproduct = parseInt(cost) - (parseInt(cost) * 0.10); // Вычитаем 10% от стоимости
        document.getElementById('totalproduct').textContent = totalproduct.toFixed(2);
        alert('Promocode its OK');
    }
}
    function sendordertelegram(){
        const urlParams = new URLSearchParams(window.location.search);
        const param1 = urlParams.get('userid');
        // Preparing the form data
       var idproduct = document.getElementById('arrayprduct').textContent;
        var formData = 'type=telegramsend&id='+idproduct+'&user='+param1;

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Open a connection to the server
        xhr.open('POST', 'https://angrobit.com/api', true);

        // Set the request header for URL-encoded data
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Handle the server's response
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById(`row-${id}`).remove();
            }
        };

        // Send the request with the form data
        xhr.send(formData);

    }
    function delorder(id){
            // Preparing the form data
            var formData = 'type=delelement&id=' + encodeURIComponent(id)+'&user=';

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Open a connection to the server
            xhr.open('POST', 'https://angrobit.com/api', true);

            // Set the request header for URL-encoded data
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Handle the server's response
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                   document.getElementById(`row-${id}`).remove();
                }
            };

            // Send the request with the form data
            xhr.send(formData);

    }


    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.nav_item  a').forEach(function (e){
            const urlParams = new URLSearchParams(window.location.search);
            const param1 = urlParams.get('userid');
            if(param1){
                const content = e.getAttribute('href');
                e.setAttribute('href',`${content}?userid=${param1}`)
            }

        })
    });
    document.addEventListener('DOMContentLoaded', function() {
        const bntOpenPopupAddress = document.querySelector(".button_add_address");
        const popupAddress = document.querySelector(".popup_address");
        const closeAddress = document.getElementById("close_address");
        const closeAddressButton = document.getElementById("button_close_address");
        const editAddress = document.querySelector(".btn_edit_address");
        if (bntOpenPopupAddress && popupAddress && closeAddress && closeAddressButton) {
            bntOpenPopupAddress.addEventListener("click", function() {
                popupAddress.style.display = "flex";
            });
            closeAddress.addEventListener("click", function() {
                popupAddress.style.display = "none";
            });
            closeAddressButton.addEventListener("click", function() {
                popupAddress.style.display = "none";
            });
            editAddress.addEventListener("click", function() {
                popupAddress.style.display = "flex";
            });
        }
    });
</script>
</body>
</html>