$(function(){
	var $checkAddress = $('#checkaddress');
	var $addressName = $('#addresstable td');
	$checkAddress.hover(function(){
		$(this).css({
			background: '#fff'
		});
		$('#topsprite1').hide();
		$('#topsprite2').show();
		$('#blank').show();
		$('#moreaddress').show();
	},function(){
		$(this).css({
			background: '#f5f5f5'
		});
		$('#topsprite1').show();
		$('#topsprite2').hide();
		$('#blank').hide();
		$('#moreaddress').hide();
	});
	$addressName.not('.word').on('click',function(){
		var $value = $(this).html();
		$('#defaultaddress').html("<div>" + $value + "</div>");
	});
	$('#topli2').hover(function(){
		$('#topli2 #phone1').hide();
		$('#topli2 #pnone').show();
		$('#blankphone').show();
		$('#wrapcode').show();
		$(this).css({
			background: '#fff',
			color: '#f10582'
		});
	},function(){
		$('#topli2 #phone').hide();
		$('#topli2 #phone1').show();
		$('#blankphone').hide();
		$('#wrapcode').hide();
		$(this).css({
			background: '#f5f5f5',
			color: '#777'
		});
	});
	$('#mainnav li').on('click',function(){
		$(this).addClass('selected2').siblings().removeClass('selected2');
		$('#navlast').removeClass('selected2');
	});
	$('#navlast').on('click',function(){
		$(this).addClass('selected2');
		$('#mainnav li').removeClass('selected2');
	});
	$('#imghint li').hover(function(){
		$(this).addClass('selected-imghint').siblings().removeClass('selected-imghint');
		$('#imgtwo').animate({
			opacity: 1
		},500);
		$('#imgone').animate({
			opacity: 0
		},500);
	},function(){});

});





















