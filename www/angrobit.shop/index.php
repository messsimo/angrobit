<?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   require_once 'bdfunction.php';
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/assets/css/global.css">
      <link rel="stylesheet" href="/assets/css/main.css">
      <link rel="stylesheet" href="/assets/css/reset.css">
      <link rel="stylesheet" href="/assets/css/responsive.css">
      <title>AngroBit Shop</title>

      <style>      
         .scene_3d {
            perspective: 1000px;
            overflow: hidden;
            position: relative;
         }

         .carousel {
            display: flex;
            transform: translateX(0);
            transition: transform 0.5s ease-in-out;
         }

         .carousel_slide {
            position: absolute;
            width: 200px;
            height: 200px;
            text-align: center;
            transition: transform 1s ease-in-out;
         }
      </style>
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
               <img src="./assets/images/home/logo.svg" alt="AngroBit Logo">
               </a>
            </div>
            <button class="nav_search" id="button_nav_search">
            <span class="icon">
            <img src="./assets/images/home/icon_search.svg" alt="Seach_Icon">
            </span>
            <span class="nav_title">
            Search
            </span>
            </button>
            <div class="nav_line"></div>
            <ul class="nav_items">
               <li class="nav_item activated">
                  <a href="/">
                  <span class="icon">
                  <img src="./assets/images/home/icon_home.svg" alt="Home" class="normal">
                  <img src="./assets/images/home/icon_home_active.svg" alt="Home active" class="active">
                  </span>
                  <span class="nav_title">
                  Home
                  </span>
                  </a>
               </li>
               <li class="nav_item">
                  <a href="./pages/catalog/catalog.php">
                  <span class="icon">
                  <img src="./assets/images/home/icon_catalog.svg" alt="Catalog" class="normal">
                  <img src="./assets/images/home/icon_catalog_active.svg" alt="Catalog active" class="active">
                  </span>
                  <span class="nav_title">
                  Catalog
                  </span>
                  </a>
               </li>
               <li class="nav_item">
                  <a href="./pages/collection/collection.php">
                  <span class="icon">
                  <img src="./assets/images/home/icon_collection.svg" alt="Collection" class="normal">
                  <img src="./assets/images/home/icon_collection_active.svg" alt="Collection active" class="active">
                  </span>
                  <span class="nav_title">
                  Collection
                  </span>
                  </a>
               </li>
            </ul>
            <div class="nav_line"></div>
            <div class="game">
               <a href="#">
               <span class="icon_game">
               <img src="./assets/images/home/icon_game.svg" alt="icon game">
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
         <img src="./assets/images/home/icon_close.svg" draggable="false" alt="close icon">
         </button>
         <div class="logo">
            <img src="./assets/images/home/logo_2.svg" alt="Logo AngroBit">
         </div>
         <form action="#" class="search_nav_form" >
            <span class="icon">
            <img src="./assets/images/home/icon_search.svg" draggable="false" alt="search icon">
            </span>
            <input type="search" placeholder="Search" id="search_nav_term">
            <span class="hidden_icon">
            <img src="./assets/images/home/icon_close.svg" draggable="false" alt="close icon">
            </span>
         </form>
         <div class="last_viewed_container" id="last_viewed_search_nav">
            <p class="title">Last viewed</p>
            <ul class="items" id="last_viewed_search_items_nav">
            </ul>
            <div class="line"></div>
         </div>
         <div class="recommended_container">
            <p class="title">Recommended</p>
            <ul class="items">
               <li class="item">
                  <a href="/pages/catalog/catalog.php?category=sale">
                  <span class="icon">
                  <img src="./assets/images/home/icon_sale.svg" alt="Icon sale">
                  </span>
                  <span class="text">Sale</span>
                  </a>
               </li>
               <li class="item">
                  <a href="/pages/catalog/catalog.php?category=populare">
                  <span class="icon">
                  <img src="./assets/images/home/icon_populare.svg" alt="Icon populare">
                  </span>
                  <span class="text">Populare</span>
                  </a>
               </li>
               <li class="item">
                  <a href="/pages/catalog/catalog.php?category=exclusive">
                  <span class="icon">
                  <img src="./assets/images/home/icon_exclusive.svg" alt="Icon exclusive">
                  </span>
                  <span class="text">Exclusive</span>
                  </a>
               </li>
               <li class="item">
                  <a href="/pages/catalog/catalog.php?category=t-shirt">
                  <span class="icon">
                  <img src="./assets/images/home/icon_t_shirt.svg" alt="Icon T-shirt">
                  </span>
                  <span class="text">T-shirts</span>
                  </a>
               </li>
               <li class="item">
                  <a href="/pages/catalog/catalog.php?category=caps">
                  <span class="icon">
                  <img src="./assets/images/home/icon_caps.svg" alt="Icon Caps">
                  </span>
                  <span class="text">Caps</span>
                  </a>
               </li>
               <li class="item">
                  <a href="/pages/catalog/catalog.php?category=hoddie">
                  <span class="icon">
                  <img src="./assets/images/home/icon_hoddie.svg" alt="Icon hoddie">
                  </span>
                  <span class="text">Hoddie</span>
                  </a>
               </li>
            </ul>
         </div>
         <div class="search_container">
            <p class="title">Search</p>
            <ul class="items" id="search_items_container">
            </ul>
         </div>
      </div>

      <main class="main">
    <section class="scene">
        <div class="top_platform">
            <img src="./assets/images/home/platform_top.png" alt="platform">
        </div>
        <div class="bottom_platform">
            <img src="./assets/images/home/platform_bottom.png" alt="platform">
        </div>
        <!-- 3D SCENE -->
        <div class="scene_3d" data-scene>
            <div class="carousel">
                <!-- Элементы будут созданы динамически -->
            </div>
        </div>
    </section>

    <div class="preview_slider_box">
        <div class="preview_slider">
            <div class="container">
                <span class="border border_t_left"></span>
                <span class="border border_t_right"></span>
                <span class="border border_b_left"></span>
                <span class="border border_b_right"></span>
                <p class="name_product" id="active_product_name">T-shirt </p>
                <div class="preview_line"></div>
                <div class="container_carousel">
                    <img id="active_product_image" src="" alt="Active product image" draggable="false">
                    <div class="carousel">
                        <!-- Слайды карусели будут добавляться динамически -->
                    </div>
                </div>
                <button class="button" id="preview_carousel_btn">
                    <span class="text">PREVIEW</span>
                    <span class="icon">
                        <img src="./assets/images/home/icon_arrow.svg" alt="Arrow">
                    </span>
                </button>
            </div>
        </div>
    </div>

    <script type="module">
        import Carousel3D from '/assets/js/Carousel3D.js';

        const apiResponse = {
            products: [
               {
                           name: "T-shirt",
                           price: 191,
                           size: "S",
                           color: "white",
                           description: "Descroptiodsand dadaskd jadj ajds",
                           material: "COTTON",
                           benefici: "dsad asdadk aosd aosdjaidja",
                           type: "upper",
                           imageUrl: "./assets/images/home/shirt1.png",
                           model: "t_shirt.gltf",
                       },
                       {
                           name: "Hoody",
                           price: 192,
                           size: "S",
                           color: "black",
                           description: "Descroptiodsand dadaskd jadj ajds",
                           material: "COTTON",
                           benefici: "dsad asdadk aosd aosdjaidja",
                           type: "upper",
                           imageUrl: "./assets/images/home/shirt2.png",
                           model: "hoody.gltf",
                       },
                       {
                           name: "T-shirt",
                           price: 193,
                           size: "S",
                           color: "yellow",
                           description: "Descroptiodsand dadaskd jadj ajds",
                           material: "COTTON",
                           benefici: "dsad asdadk aosd aosdjaidja",
                           type: "upper",
                           imageUrl: "./assets/images/home/shirt3.png",
                           model: "t_shirt.gltf",
                       },
                       {
                           name: "Hoody",
                           price: 194,
                           size: "S",
                           color: "green",
                           description: "Descroptiodsand dadaskd jadj ajds",
                           material: "COTTON",
                           benefici: "dsad asdadk aosd aosdjaidja",
                           type: "upper",
                           imageUrl: "./assets/images/home/shirt4.png",
                           model: "hoody.gltf",
                       },
                       {
                           name: "T-shirt",
                           price: 195,
                           size: "S",
                           color: "purple",
                           description: "Descroptiodsand dadaskd jadj ajds",
                           material: "COTTON",
                           benefici: "dsad asdadk aosd aosdjaidja",
                           type: "upper",
                           imageUrl: "./assets/images/home/shirt5.png",
                           model: "t_shirt.gltf",
               
                           
                       },
                       {
                           name: "Hoody",
                           price: 196,
                           size: "S",
                           color: "burlywood",
                           description: "Descroptiodsand dadaskd jadj ajds",
                           material: "COTTON",
                           benefici: "dsad asdadk aosd aosdjaidja",
                           type: "upper",
                           imageUrl: "./assets/images/home/shirt6.png",
                           model: "hoody.gltf",
                       }
            ]
        };

        function createCarouselSlides(products) {
            const carousel = document.querySelector('.carousel');
            products.forEach((product, index) => {
                const slide = document.createElement('div');
                slide.classList.add('carousel_slide');
                slide.setAttribute('data-index', index);
                slide.setAttribute('data-name', product.name);
                slide.setAttribute('data-type', product.type);
                slide.setAttribute('data-color', product.color);
                slide.setAttribute('data-model', product.model);
                slide.setAttribute('data-image', product.imageUrl); // Добавляем атрибут с изображением

                const circleImage = document.createElement('img');
                circleImage.classList.add('circle_image');
                circleImage.src = './assets/images/home/circle.png';
                circleImage.alt = 'circle';

                const productImage = document.createElement('img');
                productImage.classList.add('circle_image_product');
                productImage.src = product.imageUrl;
                productImage.alt = product.name;

                slide.appendChild(circleImage);
                slide.appendChild(productImage);
                carousel.appendChild(slide);

                // Добавляем обработчик клика для центрального элемента
                slide.addEventListener('click', () => {
                    const selectedProduct = {
                        name: product.name,
                        price: product.price,
                        size: product.size,
                        color: product.color,
                        description: product.description,
                        material: product.material,
                        benefici: product.benefici,
                        type: product.type,
                        imageUrl: product.imageUrl,
                        model: product.model,
                    };

                    // Сохраняем выбранный продукт в локальное хранилище
                    localStorage.setItem('selectedProduct', JSON.stringify(selectedProduct));

                    // Обновляем отображение активного элемента в карусели
                    updateActiveSlide(index);
                    updateCarouselImage(product.imageUrl, product.name);
                });
            });
        }

        createCarouselSlides(apiResponse.products);

        const sceneMock = {
            putOnclothes: (modelUrl, category, name, color, callback) => {
                console.log(`Loaded: ${modelUrl} (Category: ${category}, Name: ${name}, Color: ${color})`);
                callback({ traverse: () => {} }); // Mock object for 3D model
            },
        };

        const carousel3D = new Carousel3D(
            '.carousel',
            sceneMock,
            '.carousel_slide',
            '.scene_3d'
        );

        // Обновление активного слайда при клике на элемент
        const carouselSlides = document.querySelectorAll('.carousel_slide');
        const productImageElement = document.getElementById('active_product_image');
        const productNameElement = document.getElementById('active_product_name');

        function updateActiveSlide(activeIndex = 0) {
            carouselSlides.forEach(slide => slide.classList.remove('active'));
            const activeSlide = carouselSlides[activeIndex];
            if (activeSlide) {
                activeSlide.classList.add('active');
                const imageUrl = activeSlide.getAttribute('data-image');
                const name = activeSlide.getAttribute('data-name');
                const color = activeSlide.getAttribute('data-color');
                
                productImageElement.src = imageUrl;
                productImageElement.alt = `${name} ${color}`;
                productNameElement.textContent = name;
            }
        }

        // Функция для обновления изображения в карусели
        function updateCarouselImage(imageUrl, name) {
            productImageElement.src = imageUrl;
            productImageElement.alt = name;
        }

        // Изначально показываем первый элемент
        updateActiveSlide();

        // Обработчик клика по карусели для переключения слайдов
        document.querySelector('.carousel').addEventListener('click', () => {
            const currentActive = Array.from(carouselSlides).findIndex(slide => slide.classList.contains('active'));
            const nextActive = (currentActive + 1) % carouselSlides.length;
            updateActiveSlide(nextActive);
        });
    </script>

</main>




                   
      <!-- PROFILE WIDGET -->
      <?php
         require_once 'core/profile.php';
         ?>
      <!-- CART -->
      <?php
         require_once 'core/cart.php';
         ?>
      <div class="grid_floor"></div>
      <!-- POPUP PREVIEW DETAILS PRODUCT -->
      <div class="popup_preview" id="preview_product_description">
         <div id="preview_product_close" class="mask"></div>
         <div class="content">
            <span class="border border_t_left"></span>
            <span class="border border_b_left"></span>
            <span class="border border_b_right"></span>
            <button class="botton_close" id="preview_product_close_btn">
            <img src="../../assets/images/home/close_icon_2.svg" alt="close">
            </button>
            <div class="left_content">
               <canvas class="model2"></canvas>
               <span class="platform_bottom_preview"></span>
               <span class="bg"></span>
               <span class="floor"></span>
               <button class="button_buy" id="btn_add_to_cart_preview" onclick="addtocard();">
               <span class="text">ADD TO CART</span>
               <span class="arrow">
               <img src="../../assets/images/home/icon_arrow.svg" alt="arrow">
               </span>
               </button>
            </div>
            <div class="right_content">
               <div class="inner_container">
                  <div class="product_header">
                     <div class="container_image_product">
                        <img src="../../assets/images/home/shirt1.png" alt="title" id="desc_image">
                     </div>
                     <p class="name" id="name_product_preview">
                     </p>
                     <p class="price">
                        <span>$</span> <span id="price_product_price"></span>
                     </p>
                  </div>
                  <div class="line"></div>
                  <div class="product_description">
                     <div class="product_sizing">
                        <p class="title_selector">Size
                           <button class="size_chart">
                           Size chart
                           </button>
                        </p>
                        <div class="sizes_box" id="sizes_box">
                           <!-- size -->
                        </div>
                     </div>
                     <div class="product_colors">
                        <p class="title_selector">Color</p>
                        <div class="colors_box" id="colordesc">
                           <label>
                           <input type="radio" name="color_preview" value="white">
                           <span class="color white"></span>
                           </label>
                           <label>
                           <input type="radio" name="color_preview" value="black">
                           <span class="color black" styl></span>
                           </label>
                           <label>
                           <input type="radio" name="color_preview" value="yellow">
                           <span class="color yellow"></span>
                           </label>
                           <label>
                           <input type="radio" name="color_preview" value="green">
                           <span class="color green"></span>
                           </label>
                           <label>
                           <input type="radio" name="color_preview" value="orange">
                           <span class="color orange"></span>
                           </label>
                           <label>
                           <input type="radio" name="color_preview" value="purple">
                           <span class="color purple"></span>
                           </label>
                        </div>
                     </div>
                     <div class="line"></div>
                     <div class="product_description">
                        <p class="title">
                           Description
                        </p>
                        <p class="desc_product" id="descproduct"></p>
                     </div>
                     <div class="product_material">
                        <p class="title_selector">Material</p>
                        <div class="material_box" id="material">
                           <span class="material_bg"></span>
                           <p class="name_material">100% Pure Cotton</p>
                        </div>
                     </div>
                     <div class="product_benefis">
                        <p class="title_selector">Benefits</p>
                        <ul class="items" id="benefici">
                        </ul>
                        <div class="line"></div>
                     </div>
                     <div class="designer_signature">
                        <p class="text">Art & Graphic Design: Musteață Anastasia</p>
                        <div class="signature">
                           <img src="../../assets/images/home/signature.svg" alt="signature">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="module" src="./assets/js/main.js"></script>
      <script type="module">
         import { addtocard } from './assets/js/main.js';
         window.addtocard = addtocard;
         
      </script>
      <script>
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
      </script>
   </body>
</html>