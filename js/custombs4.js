( function( $ ) {

    //Formulário

    $('#commentform').addClass('form-row')
    $('.comment-notes').addClass('col-12')

    // Navegação de post
    $('.post-navigation h2').removeClass('screen-reader-text').addClass('sr-only')
    $('.nav-links').wrapInner('<div class="card-body">').addClass('card mb-3')
    $('.nav-links .card-body').addClass('row')
    $('.nav-previous').addClass('col-md-6')
    $('.nav-next').addClass('col-md-6 text-right')

	// Widgets

	$('.widget').wrapInner('<div class="card-body">').addClass('bg-light mb-4') 

	$('.widget .widget-title').addClass('p-3 border rounded mb-2 bg-white ') 

	$('.widget ul').addClass('list-group') 
	$('.widget ul li').addClass('list-group-item')

	$('.widget select').addClass('form-control')
	
	$('.widget ul li.current_page_item').addClass('active') 
    $('.widget ul li.current_page_item a').addClass('text-light') 
    
    // Widgets Tag Cloud
    $('.tag-cloud-link').addClass('badge badge-secondary')

	//Post Footer

	$('.cat-links a').addClass('btn btn-primary btn-sm mr-3')
    $('.comments-link a').addClass('btn btn-primary btn-sm mr-3')
    $('.tags-links a').addClass('badge badge-secondary')

} )( jQuery );