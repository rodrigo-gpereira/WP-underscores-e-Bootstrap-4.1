<form role="search" method="get" action=" <?php echo home_url( '/' ); ?>" method="get">
<div class="form-group mb-0">
    <label for="search"><?php echo __( 'Search for:', 'bs4Base' ) ; ?></label>
    <input type="text" class="form-control mb-2" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="submit" class="btn btn-primary" value="Pesquisar">
    </div>
</form>