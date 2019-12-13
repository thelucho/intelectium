<?php
/**
 * The template for displaying the footer.
 *
 * @package intelectium
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

        <footer class="footer">
            <div class="footer-container">
                <div class="footer-container">
					<p class="footer negrita">© 2004 </p>
                    <p class="footer negrita"> 2019 </p>

                    <?php
                    if(ICL_LANGUAGE_CODE=='es'){ ?>
                        <p class="footer">&nbsp;Todos los derechos reservados</p>
                    <?php }

                    if(ICL_LANGUAGE_CODE=='en'){ ?>
                        <p class="footer">&nbsp;All rights reserved</p>
                    <?php } ?>

				</div>

            </div>
            <!--p class="footer footer-derecha">BY AGENCIA BRAVO</p-->
        </footer>

        <?php wp_footer(); ?>


    </body>

</html>
