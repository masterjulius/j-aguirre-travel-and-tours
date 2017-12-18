var httpLocation = window.location;
var base_url = httpLocation.protocol + "//" + httpLocation.host + "/" + httpLocation.pathname.split('/')[1] + '/' + httpLocation.pathname.split('/')[2] + '/' + httpLocation.pathname.split('/')[3] + '/';
var third_party = httpLocation.protocol + "//" + httpLocation.host + "/" + httpLocation.pathname.split('/')[1] + '/' + httpLocation.pathname.split('/')[2] + '/public/';
(function($){
	$(function(e){
		app.initialize();
	});
})(jQuery);

var app = {
	initialize: function() {
		upload.initialize();
		this.image_select();
	},
	image_select: function() {
		$(document).on('click', '.media-img-selection', function(e){
			var $this = $(this);
			var img_id = $this.attr('data-id'),
				img_src = $this.attr('src');
			app.uncolor_images('.media-img-selection');
			$this.addClass('bg-danger');
			// Set it on the image
			$('#thumbnail_id').val( img_id );
			var img_container = $('.img-uploaded-container img');
			if (img_container.length > 0) {
				img_container.attr('src', img_src);
			} else {
				$('.img-uploaded-container').html('<img src="'+ img_src +'" height="200" width="200" class="img-thumbnail" alt="">')
			}
			// $('.img-uploaded-container img').attr('src', img_src);
		});
	},
	uncolor_images: function( class_name ) {
		$(class_name).each(function(e) {
			$(this).removeClass('bg-danger');
		});
	}
}

var upload = {
	initialize: function() {
		this.on_click_submit();
		this.form_submit();
	},
	on_click_submit: function() {
		$('#btn_click_upload_media').on('click', function(e) {
			e.preventDefault();
			$('#btn_upload_media').click();
		});
	},
	form_submit: function() {
		$('#btn_upload_media').on('change', function(e) {
			if ( $(this).val() != '' ) {
				upload.asynch_upload();
			}
		});
	},
	asynch_upload: function() {
		var request_url = base_url + 'upload/do_upload/';
		var postData = new FormData();
		$.each($('#btn_upload_media')[0].files, function(i, file){
			postData.append('file_lists',file);
		});
		$.ajax({
			url: request_url,
			type: 'POST',
			data:postData,
			async: false,
			processData: false,
			contentType: false,
			beforeSend: function(xhr) {
				$('#thumbnail_id').val( '' );
				var imgProgress = '<img src="'+ third_party + 'img/gif/dual-ring.svg" height="200" width="200" class="img-thumbnail" alt="" />';
				$('.img-uploaded-container').html(imgProgress);
			},
			complete: function(xhr, status) {
				console.log(xhr);
			},
			success: function(result,status,xhr) {
				console.log(result);
				var imgSuccess = '<img src="'+ third_party + 'img/media/' + (result.upload_data.file_name) +'" height="200" width="200" class="img-thumbnail" alt="" />';
				$('.img-uploaded-container').html(imgSuccess);
				$('#thumbnail_id').val( result.upload_data.file_id );
			},
			error: function(xhr,status,error) {
				console.log(status);
				console.log(error);
			}
		});
	}
}