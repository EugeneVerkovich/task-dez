jQuery('form').on('blur', 'input, textarea', function() {
    if (jQuery(this).val() == '') {
        jQuery(this).siblings('label.place').removeClass('fixed-label');
    }
});
jQuery('form').on('focus', 'input,textarea', function() {
    jQuery(this).siblings('label.place').addClass('fixed-label');
});
jQuery('.open-form').click(function(){
	jQuery('.form-beta').fadeIn();
});
jQuery('.close-form').click(function(){
	jQuery('.form-beta').fadeOut();
});
jQuery('.like-select').click(function(){
	jQuery(this).addClass('open-select');
	jQuery(this).siblings('.drop-option').addClass('droping');
});
jQuery('.like-option').click(function(){
	var platform = jQuery(this).attr('data-value');
	jQuery('input[name="platform"]').val(platform);
	jQuery(this).parent().siblings('.like-select').removeClass('open-select').text(platform).addClass('user-select');
	jQuery(this).parent().removeClass('droping');
});
jQuery('form.get-beta, .sub-form').on('submit', function() {
	var thisForm = jQuery(this);
	var msg = jQuery(this).serialize();
	var theme = thisForm.find('input[name="theme-url"]').val();
	jQuery.ajax({
		url: theme+'/form.php',
		type: "POST",
		dataType: "html",
		data: msg,
		 beforeSend:function(){
      thisForm.find('input[type="submit"]').val('Is sending...').attr('disabled','disabled');
    },
    complete:function(){
     thisForm.find('input[type="submit"]').val('Get Beta of Olynk').attr('disabled',false);
    },
		success: function(data) {
			thisForm.hide().siblings('.success').show();
		},
		error: function() {
			console.log('No');
		}
	});
	return false;
});