<?php
    define("TITLE", "Team | Los Gigantes de la Pizza");
    include('includes/header.php');
?>
    <div id="team-members" class="cf">
        <h1>Nuestro Equipo</h1>
        <p>Los gigantes de la pizza es una casa de comidas familiar con mas de 20 años en Almagro y estamos orgullosos de eso! <br> <Strong> Nos enorgullecemos de nuestra insuperable pizza a la piedra</Strong></p>
    
        <hr>
        <?php
        foreach ($teamMembers as $member) {
        ?>
            <div class="member">
                <img src="img/<?php echo $member['name']; ?>.jpg" alt="<?php echo $member['name'];?>">
                <h2><?php echo $member['name']; ?></h2>
                <p><?php echo $member['bio']; ?></p>
                
            </div> <!--member-->
        <?php
        }
        ?>
        
    </div><!-- team-members-->
    <hr>
    
<?php
    include('includes/footer.php');
?>