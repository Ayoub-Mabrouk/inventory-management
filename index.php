<?php
session_start();
if (!$_SESSION['logged']) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Electro Store | Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <div id="container">
        <div id="title">
            <h1>Electro Store</h1>
        </div>
        <div id="nav-bar-container">
            <h1>Electro Store</h1>
            <div id="nav">
                <div class="Ico-p">
                    <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h48v48h-48z" fill="none" />
                        <path d="M6 26h16v-20h-16v20zm0 16h16v-12h-16v12zm20 0h16v-20h-16v20zm0-36v12h16v-12h-16z" />
                    </svg>
                    <p>Manage Products</p>
                </div>
                <div class="Ico-p">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51.615" height="51.226" viewBox="0 0 51.615 51.226">
                        <path id="Icon_metro-users" data-name="Icon metro-users" d="M36.981,43.693V41.051a14.8,14.8,0,0,0,5.741-11.9c0-7.957,0-14.408-8.612-14.408S25.5,21.2,25.5,29.154a14.8,14.8,0,0,0,5.741,11.9v2.642c-9.727.887-17.205,6.224-17.205,12.677H54.186C54.186,49.919,46.708,44.582,36.981,43.693ZM17.233,44.93a25.7,25.7,0,0,1,8.952-4.023,18.278,18.278,0,0,1-1.813-2.952,20.019,20.019,0,0,1-2.084-8.8,31.517,31.517,0,0,1,1.371-11.694,9.518,9.518,0,0,1,7.134-5.978c-.758-3.825-2.775-6.341-8.146-6.341-8.612,0-8.612,6.451-8.612,14.408a14.8,14.8,0,0,0,5.741,11.9V34.09c-9.727.887-17.205,6.224-17.205,12.677H15.08a18.745,18.745,0,0,1,2.153-1.838Z" transform="translate(-2.571 -5.144)" fill="#9b9b9b" />
                    </svg>
                    <p>Manage Users</p>
                </div>

            </div>
        </div>
        <div id="right-container">
            <div id="search-bar">
                <div id="search-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.512" height="21.516" viewBox="0 0 21.512 21.516">
                        <path id="Icon_awesome-search" data-name="Icon awesome-search" d="M21.22,18.6,17.03,14.412a1.008,1.008,0,0,0-.714-.294h-.685a8.736,8.736,0,1,0-1.513,1.513v.685a1.008,1.008,0,0,0,.294.714L18.6,21.22a1,1,0,0,0,1.424,0l1.189-1.189a1.013,1.013,0,0,0,0-1.429ZM8.74,14.118A5.378,5.378,0,1,1,14.118,8.74,5.375,5.375,0,0,1,8.74,14.118Z" fill="#9b9b9b" />
                    </svg>
                    <input type="text" placeholder="Search Product">
                </div>
                <button onclick="addproduct()" id="add-button">ADD PRODUCT</button>
                <div id="user">
                    <div id="user-img">
                        <img src="<?php echo $_SESSION['profile_img']; ?>">
                    </div>
                    <p> <?php echo $_SESSION['name']; ?> </p>
                    <form id="logout-form" action="php/logout.php" method="POST">

                        <svg id="log-out" xmlns="http://www.w3.org/2000/svg" width="36" height="31.5" viewBox="0 0 36 31.5">
                            <path id="Icon_open-account-logout" data-name="Icon open-account-logout" d="M13.5,0V4.5h18V27h-18v4.5H36V0ZM9,9,0,15.75,9,22.5V18H27V13.5H9Z" fill="#9b9b9b" />
                        </svg>
                    </form>


                </div>

            </div>
            <div id="main-container">
                <div id="products-title">
                    <p>ID</p>
                    <p>Barcode</p>
                    <p>Name</p>
                    <p>Quantity</p>
                    <p>Brand</p>
                    <p>Price</p>
                    <p>Owner</p>
                </div>
                <div class="data-container">
                    <?php include 'php/read.php'; ?>
                    <!-- <div class="data">
                        <p class="id">7</p>
                        <p class="barcode">7869</p>
                        <p class="name">Samsung s20</p>
                        <p class="quantity">39</p>
                        <p class="brand">Samsung</p>
                        <p class="price">30$</p>
                        <p class="owner">Zineb</p>
                        <div class="edit-delete">
                            <svg class="edit_button" xmlns="http://www.w3.org/2000/svg" width="30.302" height="26.93" viewBox="0 0 30.302 26.93">
                                <path id="Icon_awesome-edit" data-name="Icon awesome-edit" d="M21.18,4.379l4.745,4.745a.514.514,0,0,1,0,.726l-11.49,11.49-4.882.542A1.023,1.023,0,0,1,8.422,20.75l.542-4.882,11.49-11.49A.514.514,0,0,1,21.18,4.379Zm8.522-1.2L27.135.607a2.058,2.058,0,0,0-2.9,0L22.369,2.469a.514.514,0,0,0,0,.726L27.114,7.94a.514.514,0,0,0,.726,0L29.7,6.078A2.058,2.058,0,0,0,29.7,3.174ZM20.2,18.215V23.57H3.367V6.736H15.456a.647.647,0,0,0,.447-.184l2.1-2.1a.631.631,0,0,0-.447-1.078H2.525A2.526,2.526,0,0,0,0,5.894V24.412a2.526,2.526,0,0,0,2.525,2.525H21.043a2.526,2.526,0,0,0,2.525-2.525v-8.3a.632.632,0,0,0-1.078-.447l-2.1,2.1A.647.647,0,0,0,20.2,18.215Z" transform="translate(0 -0.007)" fill="#9b9b9b" />
                            </svg>


                            <svg class="delete" xmlns="http://www.w3.org/2000/svg" width="20.945" height="26.93" viewBox="0 0 20.945 26.93">
                                <path id="Icon_material-delete-forever" data-name="Icon material-delete-forever" d="M9,28.438a3,3,0,0,0,2.992,2.992H23.957a3,3,0,0,0,2.992-2.992V10.484H9Zm3.68-10.652,2.11-2.11,3.187,3.172,3.172-3.172,2.11,2.11-3.172,3.172,3.172,3.172-2.11,2.11-3.172-3.172L14.8,26.238l-2.11-2.11,3.172-3.172ZM23.209,6l-1.5-1.5H14.232L12.736,6H7.5V8.988H28.445V6Z" transform="translate(-7.5 -4.5)" fill="#9b9b9b" />
                            </svg>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div id="addproduct_popup" class="popup container add">

        <form id="add_form" action="php/add_product.php" method="POST" enctype="multipart/form-data">
            <div class="title">
                <p>Add new product</p>
            </div>
            <div class="content">
                <div class="inputs">
                    <div class="input-line">
                        <p>ID</p><span>: <input name="id" class="id add" type="text" readonly></span>
                    </div>
                    <div class="input-line">
                        <p>Name</p><span>: <input name="name" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Price</p><span>: <input name="price" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Quantity</p><span>: <input name="quantity" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Barre code</p><span>: <input name="bc" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Brand</p><span>: <input name="brand" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Owner</p><span>: <input name="owner" class="owner" value="<?php echo $_SESSION['name']; ?>" type="text"></span>
                    </div>
                </div>
                <div class="upload-image">
                    <img id="product_image_add" src="icons/insert photo.svg" alt="">
                    <label for="fileupload_add">UPLOAD PHOTO</label>
                    <input id="fileupload_add" name="image" type="file">
                </div>

            </div>
            <div class="two-buttons">
                <button id="close-add" onclick="close_add_pop(event)">CLOSE</button>
                <button type="submit" name="add" id="add-button2">ADD PRODUCT</button>
            </div>
        </form>
    </div>
    <div id="editproduct_popup" class="popup container edit">
        <form id="edit_form" action="php/edit.php" method="POST" enctype="multipart/form-data">
            <div class="title">
                <p>Edit product</p>
            </div>
            <div class="content">
                <div class="inputs">
                    <div class="input-line">
                        <p>ID</p><span>: <input name="id" class="id edit" type="text" readonly></span>
                    </div>
                    <div class="input-line">
                        <p>Name</p><span>: <input name="name" class="name" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Price</p><span>: <input name="price" class="price" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Quantity</p><span>: <input name="quantity" class="quantity" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Barre code</p><span>: <input name="bc" class="bc" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Brand</p><span>: <input name="brand" class="brand" type="text"></span>
                    </div>
                    <div class="input-line">
                        <p>Owner</p><span>: <input name="owner" class="owner" value="<?php echo $_SESSION['name']; ?>" type="text" readonly></span>
                    </div>
                </div>
                <div class="upload-image">

                    <img id="product_image_edit" src="icons/insert photo.svg" alt="">
                    <label for="fileupload_edit">UPLOAD PHOTO</label>
                    <input id="fileupload_edit" type="file" name="image">
                </div>

            </div>
            <div class="two-buttons">
                <button id="close-edit" onclick="close_edit_pop(event)">CLOSE</button>
                <button id="edit-button">CONFIRM EDIT</button>
            </div>
        </form>
    </div>
    <div class="delete-pop">
        <form action="php/delete.php" method="POST">
            <div class="title">
                <p>DELETE PRODUCT</p>
            </div>
            <input type="hidden" id="delete_hidden_input" name="id">
            <div id="message">
                <p>Do you really want to delete this product?</p>
            </div>
            <div class="two-buttons">
                <button id="close-delete" onclick="close_delete_pop(event)">CLOSE</button>
                <button onclick="" id="confirm-delete">DELETE</button>
            </div>
        </form>
    </div>
    <div id="product-pop-up">
        <div class="product-image">
            <img id="image_popup" src="product_images/samsung.jpg" alt="">
        </div>
        <div class="product-info">
            <div class="product-titles">
                <p>Name :</p>
                <p>Quantity :</p>
                <p>Brand :</p>
                <p>Price :</p>
                <p>Owner :</p>
            </div>
            <div class="product-content">
                <p class="name">Samsung s20</p>
                <p class="quantity">39</p>
                <p class="brand">Samsung</p>
                <p class="price">30$</p>
                <p class="owner">Zineb</p>
            </div>
        </div>
        <div class="close-info-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.25" height="29.25" viewBox="0 0 29.25 29.25">
                <path id="Icon_ionic-ios-close-circle" data-name="Icon ionic-ios-close-circle" d="M18,3.375A14.625,14.625,0,1,0,32.625,18,14.623,14.623,0,0,0,18,3.375Zm3.705,19.92L18,19.589l-3.705,3.705a1.124,1.124,0,1,1-1.589-1.589L16.411,18l-3.705-3.705a1.124,1.124,0,0,1,1.589-1.589L18,16.411l3.705-3.705a1.124,1.124,0,1,1,1.589,1.589L19.589,18l3.705,3.705a1.129,1.129,0,0,1,0,1.589A1.116,1.116,0,0,1,21.705,23.295Z" transform="translate(-3.375 -3.375)" fill="#9b9b9b" />
            </svg>

        </div>
    </div>
    <div id="navigation">
        <div class="dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" width="26.76" height="26.76" viewBox="0 0 26.76 26.76">
                <path id="Icon_material-dashboard" data-name="Icon material-dashboard" d="M4.5,19.367H16.394V4.5H4.5Zm0,11.894H16.394V22.34H4.5Zm14.867,0H31.26V16.394H19.367Zm0-26.76v8.92H31.26V4.5Z" transform="translate(-4.5 -4.5)" fill="#9b9b9b" />
            </svg>

        </div>
        <div class="search-it">
            <svg xmlns="http://www.w3.org/2000/svg" width="21.512" height="21.516" viewBox="0 0 21.512 21.516">
                <path id="Icon_awesome-search" data-name="Icon awesome-search" d="M21.22,18.6,17.03,14.412a1.008,1.008,0,0,0-.714-.294h-.685a8.736,8.736,0,1,0-1.513,1.513v.685a1.008,1.008,0,0,0,.294.714L18.6,21.22a1,1,0,0,0,1.424,0l1.189-1.189a1.013,1.013,0,0,0,0-1.429ZM8.74,14.118A5.378,5.378,0,1,1,14.118,8.74,5.375,5.375,0,0,1,8.74,14.118Z" fill="#9b9b9b" />
            </svg>
        </div>
        <div class="add-prod">
            <svg xmlns="http://www.w3.org/2000/svg" width="26.76" height="26.76" viewBox="0 0 26.76 26.76">
                <path id="Icon_material-add-circle-outline" data-name="Icon material-add-circle-outline" d="M17.718,9.69H15.042v5.352H9.69v2.676h5.352V23.07h2.676V17.718H23.07V15.042H17.718ZM16.38,3A13.38,13.38,0,1,0,29.76,16.38,13.385,13.385,0,0,0,16.38,3Zm0,24.084a10.7,10.7,0,1,1,10.7-10.7A10.718,10.718,0,0,1,16.38,27.084Z" transform="translate(-3 -3)" fill="#9b9b9b" />
            </svg>

        </div>
        <div class="profile-mobile">
            <svg xmlns="http://www.w3.org/2000/svg" width="26.76" height="26.76" viewBox="0 0 26.76 26.76">
                <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt" d="M13.38,15.053A7.526,7.526,0,1,0,5.854,7.526,7.528,7.528,0,0,0,13.38,15.053Zm6.69,1.673H17.19a9.1,9.1,0,0,1-7.62,0H6.69A6.69,6.69,0,0,0,0,23.415v.836A2.509,2.509,0,0,0,2.509,26.76H24.252a2.509,2.509,0,0,0,2.509-2.509v-.836A6.69,6.69,0,0,0,20.07,16.725Z" fill="#9b9b9b" />
            </svg>
        </div>
    </div>
    <script src="js/index.js">

    </script>
</body>

</html>