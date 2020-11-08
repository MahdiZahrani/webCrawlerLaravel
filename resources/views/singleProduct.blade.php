<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>webCrawlerLaravel</title>
    </head>
    <style>
        @font-face {
            font-family: 'Yekan';
            font-style: normal;
            font-weight: normal;
            src: local('Yekan'), url('./fonts/yekan.woff') format('woff');
        }
    </style>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-white d-flex justify-content-between">
                    <div>
                       <a class="navbar-brand" href="#">Mahdi-Zahrani</a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse"
                               data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                               aria-expanded="false" aria-label="Toggle navigation"

                       >
                           <span class="navbar-toggler-icon"></span>
                       </button>
                    </div>
                <div>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                       <form class="form-inline my-2 my-lg-0">
                           <input class="form-control mr-sm-2" id="searchInput" type="search" placeholder="Search product Id like dkp-90825">
                           <button class="btn btn-outline-success my-2 my-sm-0 " id="searchSubmit">
                              Search
                           </button>
                       </form>
                   </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb yekan-font">
                        <li class="breadcrumb-item"><a href="#">دیجی کالا</a></li>
                        <li class="breadcrumb-item"><a href="#">کالای دیجیتال</a></li>
                        <li class="breadcrumb-item active"><a href="#">لپ تاب</a></li>
                    </ol>
                </nav>

                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <div class="product d-flex">
                        <section class="product_picture">
                            <div class="text-center">
                                <img  alt="" id="pro_image">
                            </div>
                        </section>
                        <section class="content d-flex justify-content-between w-100">
                           <div class="content-title">
                               <h4 class="h4 mr-2 yekan-font font-weight-bold" id="title">

                               </h4>
                           </div>
                            <div class="content-price ">
                                <div class="price">
                                    <p class="label yekan-font h6 text-right mr-3 mt-3">قیمت فروشنده</p>
                                    <p class="seller text-danger yekan-font h3 mt-5 ml-3" id="price"></p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>

    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/store.js') }}" ></script>
    </body>
</html>
