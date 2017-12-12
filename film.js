$(document).ready(function() {
	//$("#questions").hide();	



	// afficher/cacher images aside
	$('#hideAside').on('click', function(event) {
		console.log(event);
		$("#acteur").hide(2000).show(2000);
		$("#rea").hide(2000).show(2000);
	});


	// afficher/cacher menu
	$('#toggleMenu').on('click', function() {
		$(this).parent().slideToggle(1000).show(2000);
	});



	// afficher/cacher images 
	$('#FadeImg').on('click', function() {
		$("#nav2").fadeOut(1000).show(1000);
		$("#acteur").fadeOut(1000).show(1000);
		$("#rea").fadeOut(1000).show(1000);
		$("#Spiderman").fadeOut(1000).show(1000);
	});
/*

	// afficher/cacher questions
	$('#FAQ').on('mouseenter', function() {
	$("#questions").slideToggle();

	});
*/


	/*$('dt').on('mouseenter', function() {		
			$(this).next().slideToggle();

	});
*/
	//$('dt').on('click', function() {		
	//		$(this).next().show();


	$('dt').on('click', function() {
		
		if  (!$(this).data().state)
			{
				$(this).data({state: 'click'});
				$(this).next().show();
			}

		else if ($(this).data().state==='click')
			{
				$(this).data().state ='unclick'	;
				$(this).next().hide();				
			} 
		else 
			{
				$(this).data().state ='click';
				$(this).next().show();
			}
  		});



	$('dt').on('mouseenter', function() {
		
		
			$('dd.visible').removeClass('visible');

			console.log($(this).next())	;
			$(this).next().addClass('visible');
			$('dd:not(.visible)').hide(500);
			$('dd.visible').show(500);

			

	/*			if (!$(this).data().state)			
				{
				

				$(this).data({state: 'click'});
				$(this).next().show(2000);
			}

		else if ($(this).data().state==='click')
			{
				$(this).next().data().state ='unclick'	;
				$(this).next().hide();				
			} 
		else 
			{
				$(this).data().state ='click';
				$(this).next().show();
			}

*/

	});
/*		
	// afficher/cacher réponses
	$('dt').on('mouseenter', function() {
			$(this).next().slideToggle();

	});

	$('dd').on('mouseenter', function() {

			//$('#hiden').show(500);

	});
*/
});


