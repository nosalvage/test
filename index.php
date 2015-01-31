<!--\\\ Linc Company ///
*************************************************
*    @name           linc.company 	        *
*    @author         Linc Company               *
*    @copyright      © 2015 Linc Company        *
*    @version        ALISA                      *
*************************************************
\\\ Linc Company ///-->

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Linc | Веб-студия</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">
     <!-- init -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="home.css"> 
    <script src="js/jquery-2.1.1.js"></script>

    <!-- init colorbox -->
    <link rel="stylesheet" href="colorbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.colorbox.js"></script>
    <!-- colorbox ends -->

    <!--<link rel="stylesheet" href="animatron.css">-->
    <!-- init ends -->  
    
        <!-- preloader -->
    	<script type="text/javascript">
                $(window).on('load', function () {
                    var $Loader = $('#Loader'), $LoaderPic = $('#LoaderPic'), $LoaderCopyright = $('#LoaderCopyright');
                    	$LoaderPic.delay(100).fadeIn('slow');
                    	$LoaderCopyright.fadeIn('slow');
                    	$LoaderCopyright.fadeOut('normal');
                        $LoaderPic.fadeOut('normal');
                        $Loader.delay(1100).fadeOut('slow');
                        });
         </script>
    <!-- preloader ends -->
    <script type="text/javascript">
    	$(document).ready(function() {
    	$('#GO').click(function(){
    	$('#Overlay').fadeIn(500, function(){ 
    				$('#OrderForm') 
    					.fadeIn(600);
    		});
    	});
    	$('#Overlay').click( function(){
    				$('#OrderForm').fadeOut(300,
    				function(){
    					$(this).css('display','none');
    					$('#Overlay').fadeOut(400);
    				}
    			);
    		});
    	});
    </script>   

    <script>
            $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
                $(".portfolio").colorbox({rel:'group1'}),
                $(".price").colorbox({href:"prices.html div#prices"});
                
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });





        </script>


</head>
    
<body>
    <!-- loader -->
    <div id="Loader"></div><p id="LoaderPic"><img src="images/2391.gif"></p><p id="LoaderCopyright">© Linc company 2015</p>
	<!-- loader ends -->


    



    <div id="block" align="center">
		<div class="logo"></div>
		<h1 style="font-size:52pt"><span style="font-family: AlegreyaL; letter-spacing: 1px">Linc </span><span style="font-weight: 300; font-family: AlegreyaT">company</span></h1>
		<p class="string1">Разработка и редизайн сайтов на заказ</p>

        <div class="icon-divs">
            <a href="content/ohoopee1.jpg" class="portfolio"><i class="fa fa-briefcase fa-5x "></i></a>
            <a href="content/ohoopee2.jpg" class="portfolio"></a>
            <a href="content/ohoopee3.jpg" class="portfolio"></a>
            <a href="#" class="price"><i class="fa fa-cog fa-5x fa-spin"></i></a>

        </div>

		<p>8 707-952-59-55 | 8 747-763-82-27</p>
		<div class="button" id="GO">Заказать</div>
	</div>
     
    

    <!-- order dialog -->		
    <div id="OrderForm" class="container">
            <div class="top-border" style="margin:auto; ">
                <div align="center">
                    <img class="imag" src="logo.png">
                </div>
                <p class="top">
                    <span style="font-family: AlegreyaL;  color: #3d3d3d">Linc </span><span style="font-family: AlegreyaT; color: #3d3d3d">company</span>
                </p>
            </div>
            <p style="font-family: HelveticaL; font-size: 17pt; margin-bottom: 6%; color: #3d3d3d; margin-top: 1.5%;" class="top">
                Оформить заявку сейчас
            </p>
            
            <form action="email.php" name=mailer method=POST>
                <div class="group">      
                    <input style="font-family: HelveticaL; font-size: 19pt" placeholder="Имя Фамилия" type="text" name=name maxlength=50 required>
                </div>
                <div class="group">      
                    <input style="font-family: HelveticaL; font-size: 19pt" placeholder="Телефон" type="text" name=phone maxlength=50 required>
                </div>

                <div class="group">      
                    <input style="font-family: HelveticaL; font-size: 19pt" placeholder="Ссылка вконтакте" type="text" name=link maxlength=50 required>
                </div>

                <div class="group">      
                    <input style="font-family: HelveticaL; font-size: 19pt" placeholder="Почтовый адрес" type="email" name=email maxlength=50 required>
                </div>

                <div align="center">
                    <input type=submit value="Отправить"  class="button-send">
                </div>
            </form>
    </div>

    <!--order dialog ends-->   
  <div id="Overlay"></div>
</body>   
</html>