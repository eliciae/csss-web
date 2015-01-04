$(document).ready(function()
{

	//$('#header').remove();
	//$('#footer').remove();
	//$('style').remove();

	//for highlighting the navigation
	$('.hover-bar')
	.mouseover(function()
		{
			if (!$(this).attr('id'))
				$(this).addClass('nav-select');
		})
	.mouseout(function()
		{
			if (!$(this).attr('id'))
				$(this).removeClass('nav-select');
		});


});