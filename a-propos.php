<!doctype html>
<html lang="fr" class="no-js" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="description professionnelle de william servenay" />
    <meta name="description" content="La description professionnelle de William Servenay" />

	<link href='http://fonts.googleapis.com/css?family=Merriweather|Merriweather+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="css/animate.min.css">
	<script src="js/modernizr.custom.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
    <script src="js/jquery.knob.min.js"></script>
<script>
            $(function($) {

                $(".knob").knob({
                    change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        //console.log(this.$.attr('value'));
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : ", this);
                    },
                    /*format : function (value) {
                        return value + '%';
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            this.cursorExt = 0.3;

                            var a = this.arc(this.cv)  // Arc
                                , pa                   // Previous arc
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            if (this.o.displayPrevious) {
                                pa = this.arc(this.v);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>
        <style>
            
            div.demo p{text-align: center; font-size: 20px}
			div.demo .comp1 {border: solid black}

        </style>
  	
	<title>William Servenay | A Propos</title>

</head>


<body>
<?php include('frags/header.php'); ?> 
<ul class="cd-container">	

<h2> A Propos </h2>
<div class="row">
	<div class="w-3"> <img src="/img/portraitws.png" alt="Photo Portrait de William Servenay"></div>
	<div class="w-9"><p class="mddle"> Un étudiant fraîchement diplômé à la recherche d'une équipe stimulante pour de nouvelles expériences professionnelles ! Accessible, ce portfolio a été créé afin que vous puissiez en apprendre un peu plus sur moi. De mon parcours à mes différentes expériences en entreprise. Ici vous pourrez voir mes idées, mes projets et bien d'autres choses...  </p></div>
	<p class="clear"></p>
</div>

<h2> Compétences </h2>
<div class="demo" >
<div class="row">
			<div class="w-4">
				<div class="HTML5"> </div>
				<input class="knob" data-width="45%" data-min="0" data-displayPrevious=true value="80" data-fgColor="#F06529" readonly> 
			</div>
			
			<div class="w-4">
				<div class="CSS3"> </div>
				<input class="knob" data-width="45%" data-min="0" data-displayPrevious=true value="75" data-fgColor="#33a9dc" readonly> 
			</div>

			<div class="w-4">
				<div class="Javascript"> </div>
				<input class="knob" data-width="45%" data-min="0" data-displayPrevious=true value="55" data-fgColor="#ffda3e" readonly> 
			</div>
			<p class="clear"></p>
	</div>
	<div class="row">
		<div class="w-4">
            <div class="PHP"> </div>
            <input class="knob" data-width="45%" data-min="0" data-displayPrevious=true value="40" data-fgColor="#96a4d2" readonly> 
		</div>

		<div class="w-4">
            <div class="FLASH"> </div>
            <input class="knob" data-width="45%" data-min="0" data-displayPrevious=true value="30" data-fgColor="#e6360b" readonly> 
		</div>
	
		<div class="w-4">
            <div class="COOK"> </div>
            <input class="knob" data-width="45%" data-min="0" data-displayPrevious=true value="5" data-fgColor="#000000" readonly> 
		</div>
        <p class="clear"></p>	

</div>
</div>

</ul>

<?php include('frags/footer.php'); ?>



