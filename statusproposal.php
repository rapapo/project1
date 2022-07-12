<!-- PHP code to establish connection with the localserver -->
<?php
 
include "config.php";
$user = 'root';
$password = '';
$database = 'project2';
$servername='localhost';
$sqlport = "3307";

$mysqli = new mysqli($servername, $user, $password, $database,$sqlport);
// Checking for connections
if ($mysqli->connect_error) 
{
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Favicons
    ================================================== -->
    
<title>RESULT TENDER &#8211; MYPROCUREMENT</title>
		
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://myprocurement.treasury.gov.my/wp-includes/css/dist/block-library/style.min.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/style.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='homePageStyle-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/myprocurment_borrow_child/homePageStyle.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='custom_footer-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/myprocurment_borrow_child/custom_footer.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='mpc_custom_icons-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/myprocurment_borrow_child/icons/style.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='robotoFont-css'  href='https://fonts.googleapis.com/css?family=Roboto&#038;display=swap&#038;ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-fonts-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600%2C700%7CMerriweather%3A300%2C300i%2C400%2C400i%2C700%2C700i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-bootstrap-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/bootstrap.min.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-font-awesome-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/font-awesome.min.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-flat-font-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/flat-font-icons/css/fontello.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-fontello-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/fontello/fontello.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-flaticon-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/flaticon.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-owl-carousel-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/owl.carousel.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-owl-theme-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/owl.theme.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-owl-transitions-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/owl.transitions.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-popup-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/magnific-popup.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-simple-slider-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/simple-slider.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-jquery-ui-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/borrow/css/jquery-ui.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='borrow-style-css'  href='https://myprocurement.treasury.gov.my/wp-content/themes/myprocurment_borrow_child/style.css?ver=5.3.12' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='vc_lte_ie9-css'  href='https://myprocurement.treasury.gov.my/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css?ver=6.0.5' type='text/css' media='screen' />
<![endif]-->
<link rel='stylesheet' id='plugin-style-css'  href='https://myprocurement.treasury.gov.my/wp-content/plugins/myprocurment-custom-search/web/style.css?ver=5.3.12' type='text/css' media='all' />
<link rel='stylesheet' id='icons-css'  href='https://myprocurement.treasury.gov.my/wp-content/plugins/myprocurment-custom-search/web/icons/style.css?ver=5.3.12' type='text/css' media='all' />
<script type='text/javascript' src='https://myprocurement.treasury.gov.my/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://myprocurement.treasury.gov.my/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://myprocurement.treasury.gov.my/wp-content/plugins/myprocurment-custom-search/web/advancedSearch.js?ver=5.3.12'></script>
<script type='text/javascript' src='https://unpkg.com/jspdf@1.5.3/dist/jspdf.min.js?ver=5.3.12'></script>
<script type='text/javascript' src='https://unpkg.com/jspdf-autotable@3.2.11/dist/jspdf.plugin.autotable.js?ver=5.3.12'></script>
<script type='text/javascript' src='https://myprocurement.treasury.gov.my/wp-content/plugins/myprocurment-custom-search/web/pdf-script.js?ver=5.3.12'></script>
<link rel='https://api.w.org/' href='https://myprocurement.treasury.gov.my/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://myprocurement.treasury.gov.my/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://myprocurement.treasury.gov.my/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.3.12" />
<link rel="canonical" href="https://myprocurement.treasury.gov.my/arkib/keputusan-tender/" />
<link rel='shortlink' href='https://myprocurement.treasury.gov.my/?p=201' />
<link rel="alternate" type="application/json+oembed" href="https://myprocurement.treasury.gov.my/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmyprocurement.treasury.gov.my%2Farkib%2Fkeputusan-tender%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://myprocurement.treasury.gov.my/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmyprocurement.treasury.gov.my%2Farkib%2Fkeputusan-tender%2F&#038;format=xml" />
        
    <style type="text/css">    	
		/* 01 MAIN STYLES
		****************************************************************************************************/
		::selection {
		  color: #fff;
		  background: #f51f8a;
		}
		::-moz-selection {
		  color: #fff;
		  background: #f51f8a;
		}
		/* default color: #00cb8b */

		

		a.expand:hover {color: #fff;}
		.btn-default, .cd-top, #service .owl-next:hover, #service .owl-prev:hover, #to-the-top,
		.slide-ranger .ui-widget-header, .widget_tag_cloud a:hover, .st-pagination .pagination>li:first-child>span,
		.st-pagination .pagination>li>a:focus, .st-pagination .pagination>li>a:hover, .st-pagination .pagination>li>span:focus,
		.st-pagination .pagination>li>span:hover, .slider > .dragger, #navigation.small-screen #menu-button:before,
 		#sub-nav.small-screen #menu-button:before, .customer-quote-circle

		{background-color:#f51f8a;}

		#service .owl-next:hover, #service .owl-prev:hover, 
		div.vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-controls-icon-position-left .vc_tta-controls-icon:before,
		.slide-ranger .ui-slider .ui-slider-handle, .slide-ranger .ui-widget.ui-widget-content, .widget_tag_cloud a:hover,
		.st-pagination .pagination>li:first-child>span, .st-pagination .pagination>li>a:focus, .st-pagination .pagination>li>a:hover,
		.st-pagination .pagination>li>span:focus, .st-pagination .pagination>li>span:hover, .slider > .dragger,
		#navigation.small-screen #menu-button:after, #sub-nav.small-screen #menu-button:after, .procwss-v2 .circle,
		.pink-circle.circle
		{border-color:#f51f8a;}

		.mfp-arrow-right:after, .mfp-arrow-right .mfp-a 
		{border-left-color:#f51f8a;}
		
		.border-top-default 
		{border-top-color:#f51f8a;}

		.btn-link:hover 
		{border-bottom-color:#f51f8a;}

		.slider > .dragger{
		background-image: -webkit-linear-gradient(top, #f51f8a, #f51f8a);
		}
		.btn-default:hover {
			background-color:#ff389c;
		}
		.btn-default:hover {
			border-color:#ff389c;
		}
		/* main color 2: #15549a */
		a:focus, a:hover, 
		.btn-link, .circle, .icon-primary,.testimonial-name-1, .big-title,
		.post-block .meta-comments a:hover, .post-related-content a:hover,
		.feature-left .feature-icon, .testimonial-name-inverse,
		div.vc_tta-color-white.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-title>a:hover,
		.page-breadcrumb .breadcrumb a span, .page-breadcrumb .breadcrumb, .meta-author a:hover

		{color:#15549a;}

		.bg-custom, .top-bar, .btn-primary

		{background-color:#15549a;}

		.circle 
			{border-color:#15549a;}

		.btn-primary, .btn-link
		{border-bottom-color:#15549a;}

		.mail-text
		{border-right-color:#15549a;}

		.btn-primary:hover {
			background-color:#2573cb;
		}
		.btn-primary:hover {
			border-color:#2573cb;
		}
		/* background color top header */

		div.top-bar

		{background-color:#15549a;}


		/* color text top header */

		.top-text a, .top-bar

		{color:#83bcfa;}

		/* bg color header static */

		.header, .header-2

		{background-color:rgba(255,255,255,1);}

		/* text color header static */

		#navigation > ul > li > a 

		{color:rgba(102,112,127,1);}


		/* bg color header sticky */

		.is-sticky .header, .is-sticky .header-2

		{background-color:rgba(255,255,255,1);}

		/* text color header sticky */

		.is-sticky #navigation > ul > li > a 
		{color:rgba(102,112,127,1);}

		/** Customize css code **/
		 
		<style type="text/css" title="dynamic-css" class="options-output">body.boxed-version{background-color:#ffffff;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>    
</head>
<body class="page-template page-template-pages page-template-arkib page-template-keputusan-tender-arkib-search-page page-template-pagesarkibkeputusan-tender-arkib-search-page-php page page-id-201 page-child parent-pageid-36 borrow-theme-ver-0.0.1 wordpress-version-5.3.12 animsition wpb-js-composer js-comp-ver-6.0.5 vc_responsive">


<div class="maindivcontain">
<!-- header close -->
<div class="collapse searchbar" id="searchbar">
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         
            <div class="input-group">
                <input type="text" class="search-query form-control" name="s" placeholder="Search for..." value="">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">Go!</button>
                </span> 
            </div>
            <!-- /input-group -->
          </form>
        </div>
            <!-- /.col-lg-6 -->
      </div>
    </div>
  </div>
  <a class="search-close" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="true"><i class="fa fa-close"></i></a>
</div>


<div class="header sticky-header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-12 col-xs-6">
        <!-- logo -->
        <div class="banner">
	<div><img  src="images/uitm.jpeg"></div><br><br>
    <div class="bannerText">
        <h1>MYPROCUREMENT</h1>

    </div>
</a>
</div>



      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
			<div id="navigation">
      </div>
<!--       <div class="col-md-1 hidden-sm"> -->
          <!-- search start-->
<!--           <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div> -->
<!--       </div> -->
    </div>
    
  </div>
</div>
<div class="container">
<section id="primary" class="content-area">
	<main id="main" class="site-main">
        <form id="searchFormGeneric" action="/arkib/keputusan-tender/" onsubmit="cleanUpParams()">
        	<div class="mcs_searchBar">
        		<div class="mcs_overlay"></div>
        	    <div class="mcs_searchHeading">List Proposal</div>
        		<div><input id="mcs_searchField" type="search" name="search" placeholder="Record Proposal " value=""/><div class="mpc_searchIcon"><button id="mpc_searchButton" type="submit" class="mpc_searchButton"><i class="mpc-search"></i></button></div></div>
            	<div><!-- <input type="submit" value="Cari" /> -->
            	<button class="mcs_advancedButton" type="button" onclick="mcs_advancedSearch(this)">Search </button>
            	</div>
            	<!--<button class="mcs_advancedButton" type="button" onclick="mcs_advancedSearch(this)"></button> -->
        	</div>
        </form>
        <form id="searchFormAdvanced" action="/arkib/keputusan-tender/" onsubmit="cleanUpParams()">
        <div class="mcs_advancedSearch" style="display: none">
    			<div class="mcs_advancedSearchTitle">Search</div>
    			<div class="mcs_advancedSearchControls">
                        				<div><div>Title of Acquisition</div><div><input type='text' name='tajuk_iklan' value=''/></div></div><div><div>Kategori Perolehan</div><div>
            <select name='kategori_perolehan' value=''><option value>-choice-</option><option value='Bekalan' >Supplier</option><option value='Perkhidmatan Bukan Perunding' >Perkhidmatan Bukan Perunding</option><option value='Kerja' >Kerja</option><option value='Perkhidmatan Perunding' >Perkhidmatan Perunding</option></select>
            </div></div><div><div>NO Price (RM)</div><div><input type='text' name='no_tender_sebutharga' value=''/></div></div><div><div>Kementerian</div><div>
        <select name='kementerian' value=''>
        <option value>select</option><option value='' >Record Proposal</option><option value='JABATAN PERDANA MENTERI' >JABATAN PERDANA MENTERI</option><option value='KEMENTERIAN ALAM SEKITAR DAN AIR' >KEMENTERIAN ALAM SEKITAR DAN AIR</option><option value='KEMENTERIAN BELIA DAN SUKAN' >KEMENTERIAN BELIA DAN SUKAN</option><option value='KEMENTERIAN DALAM NEGERI' >KEMENTERIAN DALAM NEGERI</option><option value='KEMENTERIAN KERJA RAYA' >KEMENTERIAN KERJA RAYA</option><option value='KEMENTERIAN KESIHATAN' >KEMENTERIAN KESIHATAN</option><option value='KEMENTERIAN KEWANGAN ' >KEMENTERIAN KEWANGAN </option><option value='KEMENTERIAN KOMUNIKASI DAN MULTIMEDIA' >KEMENTERIAN KOMUNIKASI DAN MULTIMEDIA</option><option value='KEMENTERIAN LUAR NEGERI' >KEMENTERIAN LUAR NEGERI</option><option value='KEMENTERIAN PELANCONGAN, SENI DAN BUDAYA' >KEMENTERIAN PELANCONGAN, SENI DAN BUDAYA</option><option value='KEMENTERIAN PEMBANGUNAN LUAR BANDAR' >KEMENTERIAN PEMBANGUNAN LUAR BANDAR</option><option value='KEMENTERIAN PEMBANGUNAN USAHAWAN DAN KOPERASI' >KEMENTERIAN PEMBANGUNAN USAHAWAN DAN KOPERASI</option><option value='KEMENTERIAN PEMBANGUNAN WANITA, KELUARGA DAN MASYARAKAT' >KEMENTERIAN PEMBANGUNAN WANITA, KELUARGA DAN MASYARAKAT</option><option value='KEMENTERIAN PENDIDIKAN' >KEMENTERIAN PENDIDIKAN</option><option value='KEMENTERIAN PENGAJIAN TINGGI' >KEMENTERIAN PENGAJIAN TINGGI</option><option value='KEMENTERIAN PENGANGKUTAN' >KEMENTERIAN PENGANGKUTAN</option><option value='KEMENTERIAN PERDAGANGAN ANTARABANGSA DAN INDUSTRI' >KEMENTERIAN PERDAGANGAN ANTARABANGSA DAN INDUSTRI</option><option value='KEMENTERIAN PERDAGANGAN DALAM NEGERI DAN HAL EHWAL PENGGUNA' >KEMENTERIAN PERDAGANGAN DALAM NEGERI DAN HAL EHWAL PENGGUNA</option><option value='KEMENTERIAN PERPADUAN NEGARA' >KEMENTERIAN PERPADUAN NEGARA</option><option value='KEMENTERIAN PERTAHANAN' >KEMENTERIAN PERTAHANAN</option><option value='KEMENTERIAN PERTANIAN DAN INDUSTRI MAKANAN' >KEMENTERIAN PERTANIAN DAN INDUSTRI MAKANAN</option><option value='KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN' >KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN</option><option value='KEMENTERIAN PERUSAHAAN PERLADANGAN DAN KOMODITI' >KEMENTERIAN PERUSAHAAN PERLADANGAN DAN KOMODITI</option><option value='KEMENTERIAN SAINS, TEKNOLOGI DAN INOVASI' >KEMENTERIAN SAINS, TEKNOLOGI DAN INOVASI</option><option value='KEMENTERIAN SUMBER MANUSIA' >KEMENTERIAN SUMBER MANUSIA</option><option value='KEMENTERIAN TENAGA DAN SUMBER ASLI' >KEMENTERIAN TENAGA DAN SUMBER ASLI</option><option value='KEMENTERIAN WILAYAH PERSEKUTUAN' >KEMENTERIAN WILAYAH PERSEKUTUAN</option></select>
        </div></div><div><div>Agensi</div><div><input type='text' name='agensi' value=''/></div></div><div><div>Petender Berjaya</div><div><input type='text' name='nama_pretender_berjaya' value=''/></div></div><div><div>Announce Date</div><div>Dari: <input name='tarikh_keputusan_tender_dari' type='date' value=''/> Hingga: <input name='tarikh_keputusan_tender_hingga' type='date' value=''/></div></div> 
    			</div>
        		<div class="mcs_advncedSearchButtons">
        			<button type="button" onclick="clearValues()">New Set</button>
        			<button type="submit">Search</button>
        		</div>
                        <p style="margin: 0;">&nbsp;</p>
                        <div class="clearfix"></div>
        	</div>
                    <a onclick="pdfheader('List Tender Record.pdf','SENARAI ARKIB KEPUTUSAN TENDER', '5855', 'keputusan')" class='pdficonhide'><img class="iconpdfcsvcls" src="https://myprocurement.treasury.gov.my/wp-content/plugins/myprocurment-custom-search/common/../web/images/pdf-icon.png" > </a>
                    <a onclick=exportTableToCSV('senarai_arkib_keputusantender.csv')><img class="iconpdfcsvcls" src="https://myprocurement.treasury.gov.my/wp-content/plugins/myprocurment-custom-search/common/../web/images/xls-icon.png" > </a>   
                 </div><div class='mcs_searchResultRecords'><div class='mcs_resultRecordContainer'>
        <div class='mcs_recordDecorator '>
            <div class='mcs_dateIndicatorContainer'><div class='mcs_dateIndicator'>Announce Date </br><span>01/06/2022</span></div></div>
            <div class='mcs_rowNumInd'>1</div>
        </div>
        <div class='mcs_recordInfoContainer'>
        <div class='mcs_resultRecord'>
		<?php
            $result= mysqli_query ($con,$sql="Select * from proposal where approved=0");
                while ($row = mysqli_fetch_assoc ($result)){
?>
            <div><span>No.Proposal </span><?php echo $row ['pro_id'] ?></div>
            <div><h4><center></span><?php echo $row ['subject'] ?></center></h4></a></div>
            <div class='mcs_resultRecordData'>
                <div class='mcs_resultRecordLeft'>
                    <div><div>Supplier Number</div></span><?php echo $row ['supp_num'] ?><div></div></div>
                    <div><div>Brand:</div><?php echo $row ['pro_brand'] ?><div></div></div>
                    <div><div>From:</div><?php echo $row ['supp_state'] ?><div></div></div>
                </div>
            </div>
           
             <table>
                <tr>
                    <th style='width: 65%'>Successfull</th>
					<th style='width: 65%'>Price</th>
                </tr>
            <tr>
             <td><center><?php echo $row ['supp_name'] ?></center></td>
			 <td><center><?php echo $row ['pro_price'] ?></center></td>
            </tr>
            </table>  
            <?php
            }
            ?>
        </div>
</body>
</html>