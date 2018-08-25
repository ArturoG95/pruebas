<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
    	<title><?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    	<?php
            echo $this->Html->css(array(
                'bootstrap.min',
                'login',
                'datepicker/datepicker',
                'datepicker/datepicker-main',
            ));
        ?>
        <?php echo '<style type="text/css">'.$this->fetch('cssHead').'</style>'; ?>

    </head>
    <body>
    	<main>
    		<?php echo $this->Flash->render(); ?>
    		<?php echo $this->fetch('content'); ?>
    	</main>
    	<?php
            echo $this->Html->script(array(
                'jquery',
                'bootstrap.min',
                'datepicker/datepicker',
                'datepicker/datepicker-main',
            ));
        ?>
        <script><?php echo $this->fetch('scriptBody'); ?></script>
    </body>
</html>
