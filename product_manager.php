<!DOCTYPE html>
<html>

<head>
    <title>GGWP | Product Manager</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="scripts/header_footer.js"></script>
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/product_manager.js"></script>
    <link rel="stylesheet" href="styles/product_manager.css">
</head>

<body>
    <div id="header"></div>
    <div class="container">
        <a href="product_manager_add.html">
            <button class="btn btn-primary">+ Add Product</button>
        </a>
        <div class="row" id="productListing">
            <div class="col-sm-4 col-xs-12 mb-3">
                <div class="list-group" id="productCategories">
                    <button type="button" class="list-group-item list-group-item-action active" id="catAllBtn">All</button>
                    <button type="button" class="list-group-item list-group-item-action" id="catKeyboardBtn">Keyboard</button>
                    <button type="button" class="list-group-item list-group-item-action" id="catMouseBtn">Mouse</button>
                    <button type="button" class="list-group-item list-group-item-action" id="catGamepadBtn">Gamepad</button>
                    <button type="button" class="list-group-item list-group-item-action" id="catHeadsetBtn">Headset</button>
                    <button type="button" class="list-group-item list-group-item-action" id="catAccessoriesBtn">Accessories</button>
                    <button type="button" class="list-group-item list-group-item-action" id="catMiscellaneousBtn">Miscellaneous</button>
                </div>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="list-group" id="productList">
                    <!--
                    <a href="#" class="list-group-item list-group-item-action">Headset Meka</a>
                    <a href="#" class="list-group-item list-group-item-action">Fidget Spinner</a>
                    <a href="#" class="list-group-item list-group-item-action">Maicih level 3</a>
                    <a href="#" class="list-group-item list-group-item-action">Bumi itu bulat</a> 
                    -->
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
</body>

</html>