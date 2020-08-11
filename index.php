<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('./components/banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('./components/top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
        include ('./components/special-price.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('./components/banner-ads.php');
    /*  include banner ads  */

    /*  include new phones section  */
        include ('./components/new-phones.php');
    /*  include new phones section  */

    /*  include blog area  */
         include ('./components/blogs.php');
    /*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>
