 jQuery(document).ready(function($) {
 
    $(".scroll a, .navbar-brand, .gototop").click(function(event){   
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600,'swing');
    $(".scroll li").removeClass('active');
    $(this).parents('li').toggleClass('active');
    });
    });






var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();




$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });



	$(document).ready(function(){
	getProfile();
/*	$('#product-table').DataTable({
		responsive: true,
		autoWidth: false,
		searching:false,
		paging:false,*/
	});
	$('#submit').click(function(event){
		event.preventDefault();
		// var formData = $("#add-product-form").serialize();
		// console.log(formData);
		var productform = document.querySelector("#add-product-form");
		$.ajax({
			method :"POST",
			processData:false,
			contentType: false,
			dataType:'json',
			url: "upload.php",
			data: new FormData(productform),
		}).done(function(data){
			console.log(data);
			//Doc l?i danh sách s?n ph?m
			//Ðóng modal
			//$('#myModal').modal('toggle');

			//Xóa tr?ng input
			//$('#myModal input').val('');
			//$('#myModal #description').html('');
			getProfile();
			

		}).fail(function(jqXHR, statusText, errorThrown){
			console.log("Fail :"+jqXHR.responseText);
			console.log(errorThrown);
		})
	})
	
	// ---------------------------------test upload picture----------------------------------
	function loadImage(input){
	if (input.file && input.file[0]) {
		var reader = new FileReader();
		reader.onload = function(e){
			$("#image-input").attr("src",e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}

$("#image-input").change(function(){
	loadImage(this);
})
	// ---------------------------------test upload picture----------------------------------

// -----------------------------timeline-----------------------------

// -----------------------------timeline-----------------------------


