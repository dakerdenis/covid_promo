<?php
session_start();

if($_SESSION['user']){
    header('Location: ./admin.php');
}
?>
<!DOCTYPE html>


<html>
    <head>
        <!--Meta connect-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widt">
        <!--Style connect-->
        <link rel="stylesheet" type="text/css" href="../style/index.css">
        <link rel="shortcut icon" type="image/png" href="../style/icons/logo.png">
        <!--Title connect-->
        <title>Administrator Panel</title>
        <!--Script preconnect-->
        <link>
        <!--Script connect-->
        <script></script>
        <style>
            .maximum_pdf{
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <!--Wrapper container-->
        <div class="wrapper">
            <!--Header container-->
            <header class="header">
                <!--Header wrapper container-->
                <div class="header_wrapper">
                    <!--Logo container-->
                    <div class="logo">
                        <a href="https://www.referansclc.com/"><img class="image" src="../style/icons/ref_logo.png"></a>
                    </div>
                    <!--Name container-->
                    <div class="name">
                        <p class="name_p">Referans Klinik Laboratoriya Mərkəzi</p>
                    </div>
                    <!--Link container-->
                    <div class="link">
                        <a href="http://www.fonetbt.com/"><img class="image" src="../style/icons/link.png"></a>
                    </div>
                </div>
            </header>
            <!--Main container-->
            <main class="main">
                <!--Main wrapper container-->
                <div class="main_wrapper">
                    <!--Main Header-->
                    <div class="main_header">
                        <!--Main Title-->
                        <div class="main_title">
                            <p class="main_title_p">Administrator Panel</p>
                        </div>
                    </div>
                    <div class="line">
                        
                    </div>
                    <!--Form container-->
                    <div class="main_form">
                        <!--Form name-->
                        <div class="form_post">
                            <p class="form_post_p">Ad:</p>
                            <p class="form_post_p">Soyad:</p>
                            <p class="form_post_p">Doğum ili:</p>
                            <p class="form_post_p">FİN kodu:</p>
                            <p class="form_post_p">Test date:</p>  <br>
                        </div>
                        <!--Form-->
                        <!--Input Form-->
                        <div class="form_input">
                            <form method="post" enctype="multipart/form-data" class="form_input_f" action="../vendor/upload.php">
                                <input class="inpute_p" type="text" name="name" value=""><br>
                                <input class="inpute_p" type="text" name="surname" value=""><br>
                                <input class="inpute_p" type="number" name="date" value=""><br>
                                <input class="inpute_p" type="text" name="fincode" value=""><br>

                                
                               
<br>
                                <input type="file" placeholder="upload" name="upload_file"><br>                                
                                <button class="inpute_b" name="button" type="submit">Göndər</button>
                            </form>    
                        </div>     
                    </div>
                
                </div>
                
            </main>
            
            <!--Footer container-->
            <footer class="footer">
                <div class="footer_img">
                    <img class="footer_img_img" src="../style/icons/footer.jpeg">
                </div>
            </footer>
        </div>
    </body>
    <!--- Backend Created by DAKER Creative Studio Baku 2022--->
</html>