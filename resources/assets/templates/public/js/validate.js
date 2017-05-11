$(document).ready(function() {
	$("#signupForm1").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username": {
				required: true,
				minlength: 5,
			},
			"password": {
				required: true,
				minlength: 6,
			},
			"repassword": {
				equalTo: "#password",
			},
			"fullname": {
				required: true,
			},
			"email": {
				required: true,
				email: true,
			},
			"reemail": {
				required: true,
				equalTo: "#email",
			},
			"phone": {
				required: true,
				maxlength: 11,
				minlength: 8,
				number: true,
			},
			"address": {
				required: true,
				maxlength: 90,
			},
		},
		messages: {
			"username": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
			"repassword": {
				equalTo: "Vui lòng nhập khớp với mật khẩu ở trên",
			},
			"fullname": {
				required: "Vui lòng nhập vào đây",
			},
			"email": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
			"reemail": {
				required: "Vui lòng nhập vào đây",
				equalTo: "Vui lòng nhập khớp với mật khẩu ở trên",
			},
			"phone": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 11 ký tự",
				minlength: "Vui lòng nhập tối thiểu 8 ký tự",
				number: "Chỉ nhập chữ số",
			},
			"address": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 90 ký tự",
			},
		}
	});

	$("#dangnhapph").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username": {
				required: true,
				minlength: 5,
			},
			"password": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"username": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
		}
	});

	$("#dangnhapgs").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username": {
				required: true,
				minlength: 5,
			},
			"password": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"username": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
		}
	});

	$("#formlienhe").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username": {
				required: true,
				minlength: 5,
			},
			"email": {
				required: true,
				email: true,
			},
			"phone": {
				required: true,
				maxlength: 11,
				minlength: 8,
				number: true,
			},
			"noidung": {
				required: true,
				maxlength: 90,
			},
		},
		messages: {
			"username": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"email": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
			"phone": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 11 ký tự",
				minlength: "Vui lòng nhập tối thiểu 8 ký tự",
				number: "Chỉ nhập chữ số",
			},
			"noidung": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 90 ký tự",
			},
		}
	});

	$("#comment").validate({
		ignore: [], 
		debug: false,
		rules: {
			"fullname": {
				required: true,
				minlength: 5,
			},
			"emailcmt": {
				required: true,
				email: true,
			},
			"binhluanbv": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"fullname": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"emailcmt": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
			"binhluanbv": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
		}
	});

	$("#commentgs").validate({
		ignore: [], 
		debug: false,
		rules: {
			"binhluan_gs": {
				required: true,
			},
		},
		messages: {
			"binhluan_gs": {
				required: "",
			},
		}
	});

	$("#sendMessage").validate({
		ignore: [], 
		debug: false,
		rules: {
			"noidung_chat": {
				required: true,
			},
		},
		messages: {
			"noidung_chat": {
				required: "",
			},
		}
	});

	$("#editinfo").validate({
		ignore: [], 
		debug: false,
		rules: {
			"fullname_ph": {
				required: true,
				minlength: 5,
			},
			"password_ph": {
				minlength: 6,
			},
			"repassword_ph": {
				equalTo: "#password_ph",
			},
			"mail_ph": {
				required: true,
				email: true,
			},
			"phone_ph": {
				required: true,
				maxlength: 11,
				minlength: 8,
				number: true,
			},
			"diachi_ph": {
				required: true,
				maxlength: 90,
			},
		},
		messages: {
			"fullname_ph": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password_ph": {
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
			"repassword_ph": {
				equalTo: "Vui lòng nhập khớp với mật khẩu ở trên",
			},
			"fullname": {
				required: "Vui lòng nhập vào đây",
			},
			"mail_ph": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
			"phone_ph": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 11 ký tự",
				minlength: "Vui lòng nhập tối thiểu 8 ký tự",
				number: "Chỉ nhập chữ số",
			},
			"diachi_ph": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 90 ký tự",
			},
		}
	});

	$("#editprofile").validate({
		ignore: [], 
		debug: false,
		rules: {
			"fullname_gs": {
				required: true,
				minlength: 5,
			},
			"password_gs": {
				minlength: 6,
			},
			"repassword_gs": {
				equalTo: "#password_gs",
			},
			"mail_gs": {
				required: true,
				email: true,
			},
			"phone_gs": {
				required: true,
				maxlength: 11,
				minlength: 8,
				number: true,
			},
			"diachi_gs": {
				required: true,
				maxlength: 90,
			},
		},
		messages: {
			"fullname_gs": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password_gs": {
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
			"repassword_gs": {
				equalTo: "Vui lòng nhập khớp với mật khẩu ở trên",
			},
			"fullname": {
				required: "Vui lòng nhập vào đây",
			},
			"mail_gs": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
			"phone_gs": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 11 ký tự",
				minlength: "Vui lòng nhập tối thiểu 8 ký tự",
				number: "Chỉ nhập chữ số",
			},
			"diachi_gs": {
				required: "Vui lòng nhập vào đây",
				maxlength: "Vui lòng nhập tối đa 90 ký tự",
			},
		}
	});
});	

