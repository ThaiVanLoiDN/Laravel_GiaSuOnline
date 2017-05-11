$(document).ready(function() {
	$("#addCat").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tencat": {
				required: true,
			}
		},
		messages: {
			"tencat": {
				required: "Vui lòng nhập vào đây",
			}
		}
	});
});	

$(document).ready(function() {
	$("#addslide").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tensl": {
				required: true,
			},
			"link_sl": {
				required: true,
			},
			"mota_sl": {
				required: true,
			},
		},
		messages: {
			"tensl": {
				required: "Vui lòng nhập vào đây",
			},
			"link_sl": {
				required: "Vui lòng nhập vào đây",
			},
			"mota_sl": {
				required: "Vui lòng nhập vào đây",
			},
		}
	});
});	

$(document).ready(function() {
	$("#add_news").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tenpost": {
				required: true,
			},
			"mota_post": {
				required: true,
			},
			"chitiet_post": {
				required: true,
			},
		},
		messages: {
			"tenpost": {
				required: "Vui lòng nhập vào đây",
			},
			"mota_post": {
				required: "Vui lòng nhập vào đây",
			},
			"chitiet_post": {
				required: "Vui lòng nhập vào đây",
			},
		}
	});
});	

$(document).ready(function() {
	$("#addquangcao").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tenqc": {
				required: true,
			},
			"link_qc": {
				required: true,
			},
		},
		messages: {
			"tenqc": {
				required: "Vui lòng nhập vào đây",
			},
			"link_qc": {
				required: "Vui lòng nhập vào đây",
			},
		}
	});
});	

$(document).ready(function() {
	$("#edit_gt").validate({
		ignore: [], 
		debug: false,
		rules: {
			"gt":{ 
				required: function() 
				{
					CKEDITOR.instances.cktext.updateElement(); 
				}, 
				minlength:1,
			}
		},
		messages: {
			"gt":{ 
				required:"Vui lòng nhập vào khung này", 
				minlength:"Bạn không được để trống khung này",
			} 
		}
	});
});	

$(document).ready(function() {
	$("#add_user").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username_qt": {
				required: true,
				minlength: 5,
			},
			"password_qt": {
				required: true,
				minlength: 6,
			},
			"repassword_qt": {
				required: true,
				equalTo: "#password_qt",
			},
			"fullname_qt": {
				required: true,
			},
			"mail_qt": {
				required: true,
				email: true,
			},
		},
		messages: {
			"username_qt": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password_qt": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
			"repassword_qt": {
				required: "Vui lòng nhập vào đây",
				equalTo: "Vui lòng nhập khớp với mật khẩu ở trên",
			},
			"fullname_qt": {
				required: "Vui lòng nhập vào đây",
			},
			"mail_qt": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
		}
	});
});	

$(document).ready(function() {
	$("#edit_user").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username_qt": {
				required: true,
				minlength: 5,
			},
			"password_qt": {
				minlength: 6,
			},
			"repassword_qt": {
				equalTo: "#password_qt2",
			},
			"fullname_qt": {
				required: true,
			},
			"mail_qt": {
				required: true,
				email: true,
			},
		},
		messages: {
			"username_qt": {
				required: "Vui lòng nhập vào đây",
				minlength: "Vui lòng nhập ít nhất 5 ký tự",
			},
			"password_qt": {
				minlength: "Vui lòng nhập ít nhất 6 ký tự",
			},
			"repassword_qt": {
				equalTo: "Vui lòng nhập khớp với mật khẩu ở trên",
			},
			"fullname_qt": {
				required: "Vui lòng nhập vào đây",
			},
			"mail_qt": {
				required: "Vui lòng nhập vào đây",
				email: "Vui lòng nhập đúng định dạng email",
			},
		}
	});
});	


$(document).ready(function() {
	$("#frmform").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tentin": {
				required: true,
			},
			"danhmuc": {
				required: true,
			},
			"mota": {
				required: true,
			},
			"cktext":{ 
				required: function() 
				{
					CKEDITOR.instances.cktext.updateElement(); 
				}, 
				minlength:1,
			}
		},
		messages: {
			"tentin": {
				required: "Vui lòng nhập Tên tin",
			},
			"danhmuc": {
				required: "Vui lòng nhập Tên tin",
			},
			"mota": {
				required: "Vui lòng nhập Mô tả",
			},
			"cktext":{ 
				required:"Vui lòng nhập vào khung này", 
				minlength:"Bạn không được để trống khung này",
			} 
		}
	});

});	

$(document).ready(function() {
	$("#formdanhngon").validate({
		ignore: [], 
		debug: false,
		rules: {
			"noidung": {
				required: true,
				minlength: 6,
			},
			"tacgia": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"noidung": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"tacgia": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
		}
	});
});	

$(document).ready(function() {
	$("#formduan").validate({
		ignore: [], 
		debug: false,
		rules: {
			"ten": {
				required: true,
				minlength: 6,
			},
			"link": {
				required: true,
				minlength: 6,
			},
			"mota": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"ten": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"link": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"mota": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
		}
	});
});	

$(document).ready(function() {
	$("#formaboutme").validate({
		ignore: [], 
		debug: false,
		rules: {
			"ten": {
				required: true,
				minlength: 6,
			},
			"cktext": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"ten": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"cktext": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
		}
	});
});	

$(document).ready(function() {
	$("#formquangcao").validate({
		ignore: [], 
		debug: false,
		rules: {
			"quangcao": {
				required: true,
				minlength: 6,
			},
			"linkqc": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"quangcao": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"linkqc": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
		}
	});
});	
$(document).ready(function() {
	$("#formdangnhap").validate({
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
				required: "",
				minlength: "",
			},
			"password": {
				required: "",
				minlength: "",
			},
		}
	});
});	

$(document).ready(function() {
	$("#formslider").validate({
		ignore: [], 
		debug: false,
		rules: {
			"slider": {
				required: true,
				minlength: 6,
			},
			"linksl": {
				required: true,
				minlength: 6,
			},
			"mota": {
				required: true,
				minlength: 6,
			},
		},
		messages: {
			"slider": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"linksl": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"mota": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
		}
	});
});	

$(document).ready(function() {
	$("#editgs").validate({
		ignore: [], 
		debug: false,
		rules: {
			"username_gs": {
				required: true,
				minlength: 6,
			},
			"fullname_gs": {
				required: true,
				minlength: 6,
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
		},
		messages: {
			"username_gs": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"fullname_gs": {
				required: "Vui lòng nhập vào đây",
				minlength: "Số kí tự tối thiểu là 6",
			},
			"password_gs": {
				minlength: "Số kí tự tối thiểu là 6",
			},
			"repassword_gs": {
				equalTo: "Vui lòng nhập khớp với mật khẩu bên",
			},
			"mail_gs": {
				required: "Vui lòng nhập vào đây",
				email: "Bạn cần nhập đúng email",
			},
		}
	});
});	
