// password validation colors on 'account aanmaken'
$(function() {
  $(".add_passw_confirm").hide();
  //$(".no_match").hide();
  $('input').on('input',function() {
    var pass = $('input[name=wachtwoord]'),
    reps = $('input[name=wachtwoord_confirm]'),
    pass_cont = $('#passw'),
    reps_cont = $('#passw_confirm');
    !$(this).is( '[name=wachtwoord]' ) || $(function() {
     pass_cont.addClass( pass.val().length === 0 ? 'no_match' : 'match' )
     .removeClass( pass.val().length === 0 ? 'match' : 'no_match' );
   })();
   !$(this).is( '[name=wachtwoord_confirm]' ) || $(function() {
     reps_cont.addClass( reps.val() === pass.val() ? 'match' : 'no_match' )
     .removeClass( reps.val() === pass.val() ? 'no_match' : 'match' );
   })();
 });
});


// if focus on 'password', show 'bevestiging' on 'account aanmaken'
$(function() {
 $("#passw").focus(function () {
  $(".add_passw_confirm").fadeIn(500);
});
});


// password validation colors on 'accountbeheer'
$(function() {
  $(".match").hide();
  $(".no_match").hide();
  $('input').on('input',function() {
    var pass = $('input[name=password]'),
    reps = $('input[name=confirm_password]'),
    pass_cont = $('#password'),
    reps_cont = $('#confirm_password');
    !$(this).is( '[name=password]' ) || $(function() {
     pass_cont.addClass( pass.val().length === 0 ? 'no_match' : 'match' )
     .removeClass( pass.val().length === 0 ? 'match' : 'no_match' );
   })();
   !$(this).is( '[name=confirm_password]' ) || $(function() {
     reps_cont.addClass( reps.val() === pass.val() ? 'match' : 'no_match' )
     .removeClass( reps.val() === pass.val() ? 'no_match' : 'match' );
   })();
 });
});


// password validation colors on 'accountbeheer' (admin)
$(function() {
  $(".match").hide();
  $(".no_match").hide();
  $('input').on('input',function() {
    var pass = $('input[name=admin_password]'),
    reps = $('input[name=admin_confirm_password]'),
    pass_cont = $('#admin_password'),
    reps_cont = $('#admin_confirm_password');
    !$(this).is( '[name=admin_password]' ) || $(function() {
     pass_cont.addClass( pass.val().length === 0 ? 'no_match' : 'match' )
     .removeClass( pass.val().length === 0 ? 'match' : 'no_match' );
   })();
   !$(this).is( '[name=admin_confirm_password]' ) || $(function() {
     reps_cont.addClass( reps.val() === pass.val() ? 'match' : 'no_match' )
     .removeClass( reps.val() === pass.val() ? 'no_match' : 'match' );
   })();
 });
});

// on page load, hide 'bevestiging' 
$(function() {
 $(".admin_confirm_password").fadeOut();
});

// if focus on 'gebruikersnaam', hide 'bevestiging'
$(function() {
 $(".usrn").focus(function () {
  $(".confirm_password").fadeOut(500);
});
});

// if focus on 'gebruikersnaam(admin)', hide 'bevestiging(admin)'
$(function() {
 $(".admin_usrn").focus(function () {
  $(".admin_confirm_password").fadeOut(500);
});
});

// if focus on 'password', show 'bevestiging'
$(function() {
 $(".password").focus(function () {
  $(".confirm_password").fadeIn(500);
});
});

// if focus on 'password(admin)', show 'bevestiging(admin)'
$(function() {
 $(".admin_password").focus(function () {
  $(".admin_confirm_password").fadeIn(500);
});
});


$(function() {
  $("#pssw").click(function () {
    $("button").addClass("active");
  });
});


$(function() {
  $('#knoppen').hide();
  $('#sld-up').show();
  $('#sld-down').hide();
  $('#sld-up').click(function(){
   $('#knoppen').slideUp(950);	
   $('#sld-up').hide();
   $('#sld-down').show();
 });
});

$(function() {
  $('#knoppen').hide();

  $('#sld-down').click(function(){
   $('#knoppen').slideDown(950);	
   $('#sld-up').show();
   $('#sld-down').hide();
 });
});


$('html').keydown(function(e){
  if(e.which == 38) {
    $('#knoppen').slideUp(950);
    $('#sld-down').show();
    $('#sld-up').hide();
  }
});

$('html').keydown(function(e){
  if(e.which == 40) {
    $('#knoppen').slideDown(950);
    $('#sld-down').hide();
    $('#sld-up').show();
  }
});

$(document).ready(function() {
  $('#sld-up').hide();
  $('#sld-down').show();
  $(".expand1").show();
  $(".expand4").hide();
  $(".expand3").hide();
  $(".expand2").hide();
  $(".expand0").hide();
  $(".expand5").hide();
  $(".expand6").hide();
  $(".expand7").hide();
  $(".expand8").hide();
  $(".expand9").hide();
  $(".expand10").hide();
  $(".expand11").hide();
  $(".expand12").hide();
  $(".expand13").hide();
  $(".expand14").hide();
  $(".expand15").hide();
  $(".expand16").hide();
  $(".expand17").hide();
  $(".expand18").hide();
  $(".expand19").hide();
  $(".expand20").hide();
  $(".expand21").hide();
  $(".expand22").hide();
  $(".expand23").hide();
  $(".expand24").hide();
  $(".expand25").hide();
  $(".expand26").hide();
  $(".expand27").hide();
  $(".expand28").hide();
});


$(document).ready(function(){
	$('button').click(function(){
		$("th,td").siblings().hide();
		$(".geb").show();
	});

	$('#_naamapp').click(function(){
		$(".expand1").show();
	});

	$('#_url').click(function(){
		$(".expand2").show();
	});

	$('#_gaccount').click(function(){
		$(".expand3").show();
	});

	$('#_ios').click(function(){
		$(".expand4").show();
	});

	$('#_android').click(function(){
		$(".expand5").show();
	});

	$('#_windows').click(function(){
		$(".expand6").show();
	});

	$('#_supportemail').click(function(){
		$(".expand7").show();
	});

	$('#_weergavenaam').click(function(){
		$(".expand8").show();
	});

	$('#_emailonthouden').click(function(){
		$(".expand9").show();
	});

	$('#_wwonthouden').click(function(){
		$(".expand10").show();
	});

	$('#_appactivatie').click(function(){
		$(".expand11").show();
	});

	$('#_inc1').click(function(){
		$(".expand12").show();
	});

	$('#_inc2').click(function(){
		$(".expand13").show();
	});

	$('#_inc3').click(function(){
		$(".expand14").show();
	});

	$('#_inc4').click(function(){
		$(".expand15").show();
	});

	$('#_inc5').click(function(){
		$(".expand16").show();
	});

	$('#ong_berichten').click(function(){
		$(".expand17").show();
	});

	$('#_rol1').click(function(){
		$(".expand18").show();
	});

	$('#_email1').click(function(){
		$(".expand19").show();
	});

	$('#_rol2').click(function(){
		$(".expand20").show();
	});

	$('#_email2').click(function(){
		$(".expand21").show();
	});

	$('#_rol3').click(function(){
		$(".expand22").show();
	});

	$('#_email3').click(function(){
		$(".expand23").show();
	});

	$('#_bijlage1').click(function(){
		$(".expand24").show();
	});

	$('#_bijlage2').click(function(){
		$(".expand25").show();
	});

	$('#_bijlage3').click(function(){
		$(".expand26").show();
	});

	$('#_ip').click(function(){
		$(".expand27").show();
	});

	$('#_browser').click(function(){
		$(".expand28").show();
	});
});



// Functie enter-toets ( safari )
$('html').keydown(function(e){
  if(e.which == 13) {
    $('#submit_form').trigger('click');
  }
});



// Functie keypresses SlideUp & SlideDown ( Up-arrow & Down-arrow )
// Up-Arrow
$('html').keydown(function(e){
  if(e.which == 38) {
    $('#top-navigation').slideUp(950);
    $('#bottom-navigation').slideDown(950);
    $("#admn").css("color", "#ed0f84");
    $("#gebr").css("color", "#607D8B");
    $('#sliding_down').show();
    $('#sliding_down_admin').hide();
    $('#sliding_up').hide();
    $('#sliding_up_admin').show();
  }
});

// Down-Arrow
$('html').keydown(function(e){
  if(e.which == 40) {
    $('#top-navigation').slideDown(950);
    $('#bottom-navigation').slideUp(950);
    $("#admn").css("color", "#607D8B");
    $("#gebr").css("color", "#ed0f84");
    $('#sliding_down').hide();
    $('#sliding_down_admin').show();
    $('#sliding_up').show();
    $('#sliding_up_admin').hide();

  }
});

// slide up & down voor account_verwijderen.php
$(function() {
  $('#top-navigation').show();
  $("#gebr").css("color", "#ed0f84");
  $('#sliding_down').hide();
  $('#sliding_up').click(function(){
   $("#gebr").css("color", "#607D8B");
   $('#top-navigation').slideUp(950);	
   $('#sliding_up').hide();
   $('#sliding_down').show();
 });
});


$(function() {
  $('#sliding_down').click(function(){
   $("#gebr").css("color", "#DC327B");
   $('#top-navigation').slideDown(950); 
   $('#sliding_down').hide();
   $('#sliding_up').show();
 });
});


$(function() {
  $('#bottom-navigation').hide();
  $('#sliding_up_admin').hide();
  $('#sliding_up_admin').click(function(){
   $("#admn").css("color", "#607D8B");
   $('#bottom-navigation').slideUp(950); 	
   $('#sliding_up_admin').hide();
   $('#sliding_down_admin').show();

 });
});


$(function() {
  $('#sliding_down_admin').click(function(){
   $("#admn").css("color", "#DC327B");
   $('#bottom-navigation').slideDown(950);
   $('#sliding_down_admin').hide();
   $('#sliding_up_admin').show();
 });
});



// Countdown op welkom.php
var interval;
var minuten = 14;
var seconden = 59;
window.onload = function() {
  countdown('countdown');
}

function countdown(element) {
  interval = setInterval(function() {
    var el = document.getElementById(element);
    if(seconden == 0) {
      if(minuten == 0) {                 
        clearInterval(interval);
        alert("Uit beveiligingsoverwegingen wordt u uitgelogd en dient u opnieuw in te loggen.");
        window.location.replace("logout.php");
        return;

      } else {
        minuten--;
        seconden = 60;
      }
    }
    if(minuten > 0) {
      var minute_text = minuten + (minuten > 1 ? ':' : ' minuten');
    } else {
      var minute_text = '';
    }
    var second_text = seconden > 01 ? '' :'';
    el.innerHTML ='<p style="font-size:12px; color:#800000; display:block; margin-top:-10px;">U wordt over ' + minute_text+seconden+second_text+'<br> automatisch uitgelogd'; 
    seconden--;
  }, 1000);
}


// mouse hover/click effects

$(function() {
  $('#usern').focus(function(){
   $(".add_usern").css("color", "#DC327B");
 });
});


$(function() {
  $('#usern').focusout(function(){
   $(".add_usern").css("color", "#607D8B");
 });
});


$(function() {
  $('#passw').focus(function(){
   $(".add_passw").css("color", "#DC327B");
 });
});


$(function() {
  $('#passw').focusout(function(){
   $(".add_passw").css("color", "#607D8B");
 });
});


$(function() {
  $("#sliding_up").hover(function() {
   $("#sliding_up").attr("src", "images/omhoog2.png");
 },
 function() {
   $("#sliding_up").attr("src", "images/omhoog.png"); 
 });
});





$(function() {
  $("#sliding_down").hover(function() {
   $("#sliding_down").attr("src", "images/omlaag2.png");
 },
 function() {
   $("#sliding_down").attr("src", "images/omlaag.png"); 
 });
});


$(function() {
  $("#sliding_up_admin").hover(function() {
   $("img", this).attr("src", "images/omhoog2.png");
 },
 function() {
   $("img", this).attr("src", "images/omhoog.png"); 
 });
});

$(function() {
  $("#sliding_down_admin").hover(function() {
   $("img", this).attr("src", "images/omlaag2.png"); 
 },
 function() { 
   $("img", this).attr("src", "images/omlaag.png"); 
 });
});





$(function() {
  $(".intake").hover(function() {
   $("img", this).attr("src", "images/form2.png");
   $("#p1").css("color","#810000");
 },
 function() {
   $("img", this).attr("src", "images/form.png");
   $("#p1").css("color","#fe6300")
 });
});


$(function() {
  $(".content_beheer").hover(function() {
   $("img", this).attr("src", "images/content_beheer2.png");
   $("#intakes_img").css("color","#810000");
 },
 function() {
   $("img", this).attr("src", "images/content_beheer.png");
   $("#intakes_img").css("color","#fe6300")
 });
});


$(function() {
  $(".acc_add").hover(function() {
   $("img", this).attr("src", "images/acc_toevoegen2.png");
   $("#acc_aanmaken").css("color","#95a100");
 }, function() {
   $("img", this).attr("src", "images/add156.png");
   $("#acc_aanmaken").css("color","#750403");
 });
});



$(function() {
  $(".acc_delete").hover(function() {
   $("img", this).attr("src", "images/acc_verwijder2.png");
   $("#acc_del").css("color","#E20363");
 }, function() {
   $("img", this).attr("src", "images/acc_verwijder.png");
   $("#acc_del").css("color","#607D8B");
 });
});




$(function() {
  $(".terug").hover(function() {
   $("img", this).attr("src", "images/terug.png");
 }, function() {
   $("img", this).attr("src", "images/terug.png");
 });
});



$(function(){
  $(window).load(function(){
    $("#top-navigation, #check").css('visibility','hidden').slideUp(1000);
  });
});


// Functie slide up/down op 'Home'
$(function(){
  $("#toggle").click(function(){
    $("#top-navigation").css('visibility','visible').slideToggle(1000);
  });
});




// Functie voor show/hide van inputfields d.m.v. van aanvinken van checkbox
$(function () {
  $('input[name="showthis"]').hide();

        //show als checkbox aangevinkt is
        $('input[name="checkbox"]').on('click', function () {
          if ($(this).prop('checked')) {
            $('input[name="showthis"]').fadeIn();
          } else {
            $('input[name="showthis"]').hide();
          }
        });
      });

//Sisyphus.js om User Input lokaal op te slaan 
$(window).load(function() {
  $('form').sisyphus();
});



//SweetAlert.js - Alert box bij window load (intakeformulier)

$(window).load(function() {
  swal({
    title: "- LET OP -", 
    text: "Voor uw eigen gemak worden uw ingevoerde gegevens lokaal opgeslagen zodat u later gewoon weer verder kunt gaan. \n \n Hierdoor is het mogelijk om halverwege het invullen het venster te sluiten en op een latere tijdstip weer terugkomen om het formulier te versturen!", 
    type: "warning",
  });
});

