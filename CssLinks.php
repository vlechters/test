
	<title>Vlechters.nl</title>									<!-- FILE-LINKSSSSSS -->
<!-- CSS STYLE -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css"><!-- ICONSPACK FONT-AWESOME -->


	
									<!-- J-QUERY -->
	<script src="js/jquery-2.2.4.js" type="text/javascript"></script>	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){

			$('.hamburger,#sideMenuBar').click(function(){
					$('#sideMenu').toggleClass('open');
					$('#sideMenuBar').toggleClass('open');
					$('body').toggleClass('open');
			});

			$('.dropp1, .dropp2, .dropp3, .dropp4').click(function(){
				alert('worked!');
				/*$('.menu').animate({ 
					down: "100px",
				}, 1000 );

				// $('.basnner *').hide('500');*/
			});

			
	
		});
	
	</script>
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	<!--SPECIAL J-QUERY VOOR SLIDER-->
	<script src="js/jquery.cycle2.tile.min.js" type="text/javascript"></script>	<!--SPECIAL J-QUERY VOOR SLIDER-->