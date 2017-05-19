<?php
    define("TITLE", "Menu | Los Gigantes de la Pizza");
    include('includes/header.php');
?>
<div id="menu-items">
    <h1>Nuestro "Menu del Dia"</h1>
    <p><strong>Todos los dias distintos platos a un precio especial!</strong></p>
    <p><small><em>Cliquea en cualquiera de los platos para conocer mas acerca de el</em></small></p>

<hr>

<ul>
    <?php foreach ($menuItems as $dish => $item) {?>
    <li><a href= "dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> <?php echo $item['price']?>$ </li>


    <?php } ?>
</ul>
</div> <!--menu-items-->
<hr>

<?php
    include('includes/footer.php');
?>
