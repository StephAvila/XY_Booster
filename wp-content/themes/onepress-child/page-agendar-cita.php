<?php
//Get the code into header.php
get_header();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create header.php
 */
?>
<?php onepress_breadcrumb(); ?>
 

<section>
    <!-- Principio del widget integrado de Calendly -->
    <div class="calendly-inline-widget" data-url="https://calendly.com/xybooster-rodrigo/citas-sitio-web?a3=2" 
    style="min-width:320px;height:630px;">
        
    </div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <!-- Final del widget integrado de Calendly -->
</section>


<?php

get_footer();

/**
 * Site without header.php it's consider deprecated, it's obligatory to create footer.php
 */
?>