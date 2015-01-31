jQuery(document).ready(function($){
	//open the lateral panel
	$('.portfolio').on('click', function(event){
		event.preventDefault();
		$('#foto').addClass('is-visible');
	});

	$('.price').on('click', function(event){
		event.preventDefault();
		$('.cd-panel.from-right').addClass('is-visible');
	});

	//clode the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) { 
			$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
		}
	});

	$('#foto').on('click', function(event){
		if( $(event.target).is('#foto') || $(event.target).is('.foto-close') ) { 
			$('#foto').removeClass('is-visible');
			event.preventDefault();
		}
	});


});