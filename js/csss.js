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

	//for switching the div on career fair companies
	$('.show-company').click(function(e){
		e.preventDefault();
		$('.company').addClass('hidden');
		var name = $(this).parent().parent().prop('className');
		var id = name.substr(0, name.indexOf(' ')); 
		if (id === "" || id === null)
			id = name;
		$('#'+id).removeClass('hidden');
		window.location = $(this).attr('href');
	});


});