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
    	<?php
            echo $this->Html->css(array(
                'bootstrap.min',
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
            ));
        ?>
        <script><?php echo $this->fetch('scriptBody'); ?></script>
    </body>
</html>
