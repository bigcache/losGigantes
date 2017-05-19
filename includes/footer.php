
            <div id="footer" class="cf">
                <div class="column three">
                    <strong>Telefono</strong>
                    4862-7323/7354
                </div> <!-- column -->

                <div class="column three">
                    <strong>Location</strong>
                    Tucuman 3600 esq Mario Bravo<br>
                    Almagro, Buenos Aires.
                </div><!-- column -->

                <div class="column three last">
                    <strong>Horario</strong>
                    <em>Lunes a Sabados</em><br>
                    08:00 a 0:00 hrs.<br><br>
                    <em>Domingo</em><br>
                    17:00 a 0:00 hrs.<br><br>
               <?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                    // Include the store hours class
                    require __DIR__ . '/StoreHours.class.php';
                    // REQUIRED
                    // Define daily open hours
                    // Must be in 24-hour format, separated by dash
                    // If closed for the day, leave blank (ex. sunday)
                    // If open multiple times in one day, enter time ranges separated by a comma
                    $hours = array(
                        'mon' => array('08:00-24:00'),
                        'tue' => array('08:00-24:00'),
                        'wed' => array('08:00-24:00'),
                        'thu' => array('08:00-24:00'), // Open late
                        'fri' => array('08:00-24:00'),
                        'sat' => array('08:00-24:00'),
                        'sun' => array('17:00-24:00')
                    );
                    // OPTIONAL
                    // Add exceptions (great for holidays etc.)
                    // MUST be in a format month/day[/year] or [year-]month-day
                    // Do not include the year if the exception repeats annually
                    $exceptions = array();
                     /*   '2/24'  => array('11:00-18:00'),
                        '10/18' => array('11:00-16:00', '18:00-20:30') */

                    $config = array(
                        'separator'      => ' - ',
                        'join'           => ' and ',
                        'format'         => 'g:ia',
                        'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
                    );
                    // Instantiate class
                    $store_hours = new StoreHours($hours,$exceptions,$config);

                    // Display open / closed message
                    if($store_hours->is_open()) {
                        echo "<strong class='open'>Abierto, Estamos Atendiendo! </strong>"; // . $store_hours->hours_today() . ".";
                    } else {
                        echo "<strong class='closed'>Cerrado, Te esperamos mañana! </strong>" ; // . $store_hours->hours_today() . ".";
                    }
                ?>

                </div> <!-- column -->

            </div> <!-- footer -->
            <small>&copy;<?php echo date('Y'); ?> <?php echo $companyName;?></small>
        </div> <!-- content -->

    </div><!--wrapper-->
    <div class="copyright-info">
        <?php include('copyright.php'); ?>

    </div>
</body>

</html>
