<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <script data-require="jquery" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    
    
    <link rel="stylesheet" href="./css/account.css">
    <title>Cont</title>
</head>
<body>

    <!-- Header -->
    <header class="main__header">
    <?php
    include "navbar.php";
    ?>
    </header>

    <!-- Title -->
    <section class="title section">
        <div class="container">
            <h2>CONT</h2>
            <p>Cu libertate, cărți și luna, cine nu ar fi fericit?</p>
        </div>
    </section>

    <!-- Account -->
    <section class="account section">
        <div class="container">
            <div class="account__content">
                <div class="account__img" style="background-image: url('img/author3.png');" ></div>
                <div class="account_info">
                    <h2>Jim Smith<i class="far fa-heart"></i><i class="fas fa-shopping-basket"></i></h2>
                    <p>activ(ă) cu 8 minute în urmă</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart -->
    <section class="cart section">
        <div class="container">
            <div class="cart__content grid">
                <div class="cart__products grid">
                    <div class="coloumn first">
                        <h1>Produs</h1>
                        <h1></h1>
                        <h1>Preț</h1>
                        <h1>Cantitate</h1>
                        <h1>Total</h1>
                        <h1></h1>
                    </div>


                    <?php
                    include ("conexiune.php");
                    $pret=0;
                    $sql=mysqli_query($conexiune, "SELECT * FROM cart");

                    while ($row=mysqli_fetch_row($sql)) {
                    
                    echo "<div class='coloumn second'>";
                    ?>
                    <img class='first_img' src="<?php echo $row[2];?>">
                    <?php
                    echo "<div class='title_c'>$row[1]
                    <p class='author_c'>$row[3]</p>
                    </div>
                    <p class='price_c'><span id='price_nr' class='price_nr'>$row[4]</span> MDL</p>
                    <div id='product_B_form' class='input-group'>
                        
                        <span class='input-group-btn'>
                          <button class='btn btn-default btn-subtract' type='button'>-</button>
                        </span>
                      
                        <input type='number' id='quantity' class='form-control no-padding text-center item-quantity' min='0' value='1'>
                      
                        <span class='input-group-btn'>
                          <button class='btn btn-default btn-add' type='button'>+</button>
                        </span>
                      </div>
                        <p class='total_c'><span id='subTotal' class='subtotal_nr' >$row[4]</span> MDL</p>
                       
                       
                       
                        <div class='remove'>
                        <form action='deletec.php' method='post'>
                        <input type='hidden' name='id' value='$row[0]'>
                        <button type='submit' style='background-color:transparent; border:0; cursor:pointer;'><i class='fas fa-times'></i></button>
                        </form>
                         </div>

                     </div> 
                    ";
                   
               
                    
                   
                    
                        $pret=$pret+$row[4];

                    
                    
                
                    }
                    ?>
                     

                    <!-- <div class="coloumn third">
                        <img class="first_img" src="img/limited1.jpg" >
                        <div class="title_c">The Push
                            <p  class="author_c">Ashley Audrain</p>
                            </div>
                            <p class="price_c"><span id="price_nr" class="price_nr">245.00</span> MDL</p>
                            <div id="product_B_form" class="input-group">
                            
                                <span class="input-group-btn">
                                  <button class="btn btn-default btn-subtract" type="button">-</button>
                                </span>
                              
                                <input type="number" class="form-control no-padding text-center item-quantity" min="0" value="1">
                              
                                <span class="input-group-btn">
                                  <button class="btn btn-default btn-add" type="button">+</button>
                                </span>
                              </div>
                            
                              <p class="total_c"><span id="subTotal" class="subtotal_nr" >245.00</span> MDL</p>
                            <div class="remove">
                                <i class="fas fa-times"></i>
                            </div>
                            

                    </div>
 
                    <div class="coloumn four">
                        <img class="first_img" src="img/popular3.jpeg" >
                    <div class="title_c">Arta subtilă a nepăsării
                            <p  class="author_c">Mark Manson</p>
                            </div>
                            <p class="price_c"><span id="price_nr" class="price_nr" >180.00</span> MDL</p>

                            <div id="product_B_form" class="input-group">
                            
                                <span class="input-group-btn">
                                  <button class="btn btn-default btn-subtract" type="button">-</button>
                                </span>
                              
                                <input type="number" class="form-control no-padding text-center item-quantity" min="0" value="1">
                              
                                <span class="input-group-btn">
                                  <button class="btn btn-default btn-add" type="button">+</button>
                                </span>
                              </div>
                              <p class="total_c"><span id="subTotal" class="subtotal_nr" >180.00</span> MDL</p>
                            <div class="remove">
                                <i class="fas fa-times"></i>
                            </div>
                      

                    </div>

                    <div class="coloumn five">
                        <img class="first_img" src="img/popular4.jpg" >
                        <div  class="title_c">Institutul
                            <p  class="author_c">Stephen King</p>
                            </div>
                            <p class="price_c"><span id="price_nr" class="price_nr">100.00</span> MDL</p>

                        <div id="product_B_form" class="input-group">
                            
                            <span class="input-group-btn">
                              <button class="btn btn-default btn-subtract" type="button">-</button>
                            </span>
                          
                            <input type="number" class="form-control no-padding text-center item-quantity" min="0" value="1">
                          
                            <span class="input-group-btn">
                              <button class="btn btn-default btn-add" type="button">+</button>
                            </span>
                          </div>
                        <p class="total_c"><span id="subTotal" class="subtotal_nr" >100.00</span> MDL</p>
                        <div class="remove">
                            <i class="fas fa-times"></i>
                        </div>
                        
                      

                    </div> -->
                  
                    
                </div>

        
                
                <div class="cart__filters">
                    <div class="filter">
                        <div class="filter_back">
                            <div class="filter_header">
                                TOTALUL COȘULUI<i class="fas fa-caret-down cursor"></i>
                            </div>

                  

                        <div class="filter_content unu">
                            <div class="general">
                                <div class="subtotal general">Subtotal</div>
                                <div class="subtotal general doi" id="subtotal"><span id="total_cos"><?php echo number_format($pret,2)?></span>&nbspMDL</div>
                                <div class="livrare general">Livrare</div>
                                <div class="livrare general doi">Gratis</div>
                            </div>


                        </div>

                    </div>
                 

                

                <div class="border"></div>

                    <div class="filter_back">
                        <div class="filter_header">
                            LIVRARE<i class="fas fa-caret-down cursor"></i>
                        </div>

                        <div class="filter_cotent third">
                            <label class="b-contain">
                            <span >Gratis </span>
                            <input type="radio" name="livrare" value="gratis" id="livrare_input"  onclick="calculeaza_total()">
                            <div class="b-input"></div>
                        </label>
                
                            <label class="b-contain">
                            <span >Preț local 20.00 MDL</span>
                            <input type="radio" name="livrare" value="local" id="livrare_input" onclick="calculeaza_total()">
                            <div class="b-input"></div>
                        </label>
                    
                            <label class="b-contain">
                            <span >Preț global 50.00 MDL</span>
                            <input type="radio"  name="livrare" value="global"  id="livrare_input" onclick="calculeaza_total()">
                            <div class="b-input"></div>
                            </label>
                    </div>

            </div>
            <div class="border"></div>
            <div class="filter_back">
                <div class="filter_header">
                    CUPON<i class="fas fa-caret-down cursor"></i>
                </div>

                <div class="filter_cotent four">
                    <div class="btn-group">
                        <input type="text" class="inp_cupon button" placeholder="Codul cuponului">
                        <button class="button apply">Aplică</button>
                    </div>
            </div>

    </div>
    <div class="border"></div>
    <div class="filter_back im">
        <div class="im">
        
        <div class="filter_header im">TOTAL</div>
        <div class="filter_header im doi" id="cart-total"><span id="total_total_cos">0</span>&nbspMDL</div>
    </div>
</div> 


</div>
<div class="filter change">
    <button type="submit" class="cumpara">CUMPĂRĂ</button>
</div>
        </div>
        </div>
        <div class="slide_box">
        <div class="slide_circles">
            <span class="circle cursor active">1</span>
            <span class="circle cursor">2</span>
            <span class="circle cursor">3</span>
        </div>
        </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner grid">
                <div class="footer__block">
                    <h4 class="footer__title">ADRESĂ</h4>
                    <address class="footer__address">
                        <div>str. Ion Creangă 13/12</div>
                        <div>mun. Chiținău, R.Moldova</div>
                    </address>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title">Share with Love</h4>
                    <div class="footer_social">
                        <a class="footer_social__item" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a class="footer_social__item" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a class="footer_social__item" href="https://mobile.twitter.com/" target="_blank"><i class="fab fa-twitter-square"></i></a>
                        
                    </div>
                </div>
                <div class="footer__block">
                    <h4 class="footer__title">DESPRE NOI</h4>
                    <div class="footer__text">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright__text">
                    <div>Copyright © 2021 Bado<span style="color: #1e6f5c;">oom</span> All Rights Reserved</div>
                    <div>Made <span>by Iachimova Diana</span></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="account.js"> </script>
</body>
</html>