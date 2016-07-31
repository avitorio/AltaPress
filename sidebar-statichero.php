<?php if ( is_active_sidebar( 'statichero' ) ): ?>

    <!-- ******************* The Hero Widget Area ******************* -->
    
    <div class="hero wrapper" id="wrapper-static-hero">
    	<div class="container">
    		<div class="row-flex text-center">     
          		<?php dynamic_sidebar( 'statichero' ); ?>
          	</div>
        </div>

    </div><!-- #wrapper-static-hero -->

<?php endif; ?>
