jQuery(document).ready( function($) {
	$(document).on('change', 'input:radio', function(){
		$(this).val() == 2 ? $('.specialty_content').hide() : $('.specialty_content').show();
	})
});
