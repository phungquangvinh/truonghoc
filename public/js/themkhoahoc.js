$(function() {
	$('#submitkh').click(function(e) {
		e.preventDefault();
		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		});

		var url = $('.hidden').val();
		var data = $(this).closest( "form" ).serializeArray();




		console.log(data);
		console.log('aaaa');
		$.ajax({
			url : url,
			data: data,
			type : 'post',
			success: function (data) {
				console.log(data);
				if (data.error == true) {
					$('.error').hide();
					if (data.message.name != undefined) {
						$('.errorName').show().text(data.message.name[0]);
					}
					// if (data.message.hinh_anh != undefined) {
					// 	$('.errorHinh_anh').show().text(data.message.hinh_anh[0]);
					// }
				}else{
					//swal("chúc mừng bạn đã thêm khóa học thành công");
					//setTimeout(function() { window.location.href = data.url; }, 3000);
					window.location.href = data.url;
				}
			}
		});
		});
});