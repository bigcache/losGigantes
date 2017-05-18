<?php
    define("TITLE", "Menu | Los Gigantes de la Pizza");
    include('includes/header.php');
?>
<div id="menu-items">
    <h1>Nuestro delicioso "Menu del Dia"</h1>
    <p>Todos los dias nuevos platos a un precio especial!</p>
    <p><em>Cliquea en cualquiera de los platos para conocer mas acerca de el</em></p>

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