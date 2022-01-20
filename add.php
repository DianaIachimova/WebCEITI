<link rel="stylesheet" href="./css/edit.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="./css/catalog.css">


<header class="main__header">
<?php
    include "navbar.php";
?>
<header>

<section class="title section">
        <div class="container">
            <h2>Adăugare</h2>
            <p>Aici poți posta un nou produs pe site!</p>
        </div>
    </section>



   
    <form action="insert.php" method="post" class='edit-form'>
                    <h1 class='form-title'>Introdu datele</h1>
                    <div class='form-group'>
                        <label for='name'>Numele cărții</label>
                        <input type='text' class='form-control' id='product-name' name="book" placeholder='Book Name'>
                    </div>
                    <div class='form-group'>
                        <label for='url'>Link la imagine</label>
                        <input type='text' class='form-control' id='url' name='url' placeholder='Link'>
                    </div>
                    <div class='form-group'>
                        <label for='brand'>Autor</label>
                        <input type='text' class='form-control' id='brand' name='autor' placeholder='Autor'>
                    </div>
                    <div class='form-group'>
                        <label for='price'>Price</label>
                        <input type='number' class='form-control' id='price' name='price' placeholder='Price' min='10' max='2000'>
                    </div>
                    <div class='text-center'>
                    <button class='btn btn-success update-btn' type="submit">Adaugă</button>
                    </div>
                </form>
      