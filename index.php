<?php
	if (!isset($_GET['page']))
		$page="home.php";
	else
		$page=$_GET['page'].".php";
?>
<?php
$tabTitle = array(
	'home.php'    => 'Homepage - Cassandra',
    'school.php'  => 'Academia - Cassandra',
    'work.php'    => 'Work - Cassandra',
    'hobbies.php' => 'Hobbies - Cassandra',
    'contact.php' => 'Contact - Cassandra'
);

$title = isset($tabTitle[$page]) ? $tabTitle[$page] : 'My Website';

?>


<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>


<body id="top">


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


      <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                
				<div class="s-header__block">
					
                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
						<?php
							include("navigation.php");
						?>
                    </ul> <!-- s-header__menu-links -->

                    
					<div class="s-header__contact">
						<a href="index.php?page=contact" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>                      
                    </div> <!-- s-header__contact --> 
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">
			<section class="s-pageheader pageheader">
                    <div class="row">
                      <div class="column xl-12">
                      		<h1 class="page-title">
                                CKG
                            </h1>
                            
                        </div>
                    </div> 
               </section> <!-- end pageheader --> 
			<section class="s-pagecontent pagecontent">
				<?php
				
				include($page);
				?>
			</section>
        </section> <!-- s-content-->


         <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">
                <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">                    
                    <h3>About Cassandra</h3>
                    <p>
                    Cassandra is a first-gen student studying CS with a concertration in Data Science at UTSA. She plans to start her MBA with a concentration in Buisness Analytics early 2026. She loves video games, literature, music by Laufey, and above all her family. Go Runners!
                    </p>               
                </div>                
                <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                    <h3>Site Links</h3>
                    <ul class="link-list">
                        <?php
							include("navigation.php");
						?>
                    </ul>
                </div>
            </div>    
            
            <div class="row s-footer__bottom">
     

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div>
            
        </footer> <!-- end s-footer -->
    </div> <!-- end page-wrap -->
</body>
</html>