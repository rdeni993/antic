<?php 

 /**
 * =============================================================
 * =============================================================
 * Create Search Form Template. This is basic search form
 * and we have only fields like input and button
 * =============================================================
 * =============================================================
 * 
 */

?>

<form role="search" method="get" id="searchform" class="searchform hidden-md-down" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <input placeholder="Упиши појам" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <button><em class="fas fa-search"></em></button>
    </div>
</form>