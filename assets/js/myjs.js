
$(function () {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
       
if($('#fun').val()){
	

   
}else{
    
    if (scroll >= 60) {
        $(".logowhite").hide();
        $(".logoblack").show();

    }
    if (scroll <= 60) {
        $(".logowhite").show();
		$('.text').css('background','transparent');

        $(".logoblack").hide();
    } else {
        $(".logoblack").show();
		$('.text').css('background','#f07c7c');

    }
}
		
	});
});


$(function () {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if($('#fun').val()){
			$('#header').addClass('transparent-nav');
		}else{
		if (scroll >= 50) {
			$(".mobwhitelogo").hide();
		}
		if (scroll <= 50) {
			$(".mobwhitelogo").show();

			$(".mobblacklogo").hide();
		} else {
			$(".mobblacklogo").show();
		}
	  }
	});
});

function drop() {
	$(".ulcls").toggle();
}
function dropwhat() {
	$(".ulclsw").toggle();
}


function getreview() {
	$(".review").slideToggle();
}

function getval(obj)
{
   var a=$(obj).attr('text');
   
    
   $('#keyval').val(a);

}
function getsublocval(obj){
  
     var a = $(obj).attr('value');
     $('#subloc').val(a);
}
function ques1(obj){
	var val = $(obj).attr('value');
	var ans = document.getElementById(val);
	$(ans).toggle('slow');
	
}
