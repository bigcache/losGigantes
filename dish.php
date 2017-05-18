<?php
    define("TITLE", "Menu | Los Gigantes de la Pizza");
    include('includes/header.php');
    
    function strip_bad ($input){
        $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    if (isset($_GET['item'])) {
    $menuItem = strip_bad ($_GET['item']);
    $dish = $menuItems[$menuItem];
    }
?>
<hr>
<div id="dish">
    <h1><?php echo $dish['title'] ?> <span class='price'> <?php echo $dish['price'];?>$</span></h1>
    <p><?php echo $dish['blurb']?></p>
    <br>
    <p><strong>Bebida Sugerida: <?php  echo $dish['drink'];?></strong></p>

</div> <!--dish-->
<hr>

<?php
    include('includes/footer.php');
?>