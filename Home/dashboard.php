		<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content>
<meta name="author" content>
<meta name="keyword" content>
<link rel="shortcut icon" href="img/favicon.png">
<title>FlexiSCHED v12.5</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha256-j+P6EZJVrbXgwSR5Mx+eCS6FvP9Wq27MBRC/ogVriY0=" crossorigin="anonymous" />

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap-notify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/fc-4.2.2/fh-3.3.2/r-2.4.1/sl-1.6.2/sr-1.2.2/datatables.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/fc-4.2.2/fh-3.3.2/r-2.4.1/sl-1.6.2/sr-1.2.2/datatables.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.13.4/pagination/select.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.js"></script>
<script src="js/common.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="css/app.css?v=12.5.0" rel="stylesheet">
<script type="text/javascript" language="javascript">
		//Checking timeout
				var lastAction = 1704926480;
		var timeout = setInterval(sessionTimeout, 60000);
		function sessionTimeout() {
			  var d = new Date();
			  var time = d.getTime()/1000;
			  var remaining = Math.floor((3600-(time-lastAction))/60);
			  if (remaining <=0)
			  {
				window.location.href = "includes/logout.php"
			  }
			  else if (remaining <= 1)
			  {
				  if (confirm("Your session will expire in 1 minute or less. Would you like to continue?"))
				  {
					location.reload();
				  }else{
					window.location.href = "includes/logout.php";
				  }
			  }
		}
		//fetching flex colors
		function fetchColor(period,day,flex)
			{
				//Find type for given Flex for given period and given day
				var flexColors = [{"0":"1","period":"1","1":"1","day":"1","2":"Library","name":"Library","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"College Pathways Meeting","name":"College Pathways Meeting","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Counseling - Chavez","name":"Counseling - Chavez","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Counseling - Bueno","name":"Counseling - Bueno","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Counseling - Dickson","name":"Counseling - Dickson","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Counseling - Johanson","name":"Counseling - Johanson","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Counseling - Ross","name":"Counseling - Ross","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"College & Career","name":"College & Career","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Durquet, Marie","name":"Durquet, Marie","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Eggert, Chris","name":"Eggert, Chris","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Florea, Cristina","name":"Florea, Cristina","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Ja, Katherine","name":"Ja, Katherine","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Kaci, Rachael","name":"Kaci, Rachael","3":"alert-key11","color":"alert-key11"},{"0":"1","period":"1","1":"1","day":"1","2":"Matta, Nora","name":"Matta, Nora","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Miller, Greg","name":"Miller, Greg","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Arteaga, Arlena","name":"Arteaga, Arlena","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Barrios, Ana","name":"Barrios, Ana","3":"","color":""},{"0":"1","period":"1","1":"1","day":"1","2":"Blackburn, Kristy","name":"Blackburn, Kristy","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Brassey, Mark","name":"Brassey, Mark","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Brown, Justin","name":"Brown, Justin","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Carroll, Tracie","name":"Carroll, Tracie","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Choi, Julia","name":"Choi, Julia","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Clark, Monica","name":"Clark, Monica","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Collier, Warren","name":"Collier, Warren","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Congress, Rachel","name":"Congress, Rachel","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Corpuz, Ed","name":"Corpuz, Ed","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Dunlap, Paul","name":"Dunlap, Paul","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Friedland, Scott","name":"Friedland, Scott","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Gleason, Mark","name":"Gleason, Mark","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Granlund-Moyer, Kristina","name":"Granlund-Moyer, Kristina","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hawes, Kathy","name":"Hawes, Kathy","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"McDonnell, Savannah","name":"McDonnell, Savannah","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hlasek, Misha","name":"Hlasek, Misha","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Holmes, Patricia","name":"Holmes, Patricia","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Ichikawa, Diane","name":"Ichikawa, Diane","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Johnson, Christopher","name":"Johnson, Christopher","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Kaneko, Takeshi","name":"Kaneko, Takeshi","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Kinyanjui, Arthur","name":"Kinyanjui, Arthur","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Lee, Jena","name":"Lee, Jena","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Lewis, Sandra","name":"Lewis, Sandra","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Liberatore, Bill","name":"Liberatore, Bill","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Linsdell, Dawna","name":"Linsdell, Dawna","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Little, Joshua","name":"Little, Joshua","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Lizundia, Laura","name":"Lizundia, Laura","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Lyons, Philip","name":"Lyons, Philip","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Mellows, Heather","name":"Mellows, Heather","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Menache, Nicole","name":"Menache, Nicole","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Merchant, Angela","name":"Merchant, Angela","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Nino Oliva, Teresa","name":"Nino Oliva, Teresa","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"O'Connell, Casey","name":"O'Connell, Casey","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Ou-Ponticelli, Tiffany","name":"Ou-Ponticelli, Tiffany","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Owen, Kristen","name":"Owen, Kristen","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Paley, Joshua","name":"Paley, Joshua","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Pennington, Laurie","name":"Pennington, Laurie","3":"","color":""},{"0":"1","period":"1","1":"1","day":"1","2":"Powell, Maria","name":"Powell, Maria","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Schroeppel, Claudia","name":"Schroeppel, Claudia","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Shinh, Arshdeep","name":"Shinh, Arshdeep","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Su, Anita","name":"Su, Anita","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Summers, Todd","name":"Summers, Todd","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Tabares Ruiz, Daissy","name":"Tabares Ruiz, Daissy","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Tucker, Jeanette","name":"Tucker, Jeanette","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Vrudny, Yanan","name":"Vrudny, Yanan","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Weisman, Mark","name":"Weisman, Mark","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Wells, Jordan","name":"Wells, Jordan","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Weymouth, Kate","name":"Weymouth, Kate","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Yun, Emily","name":"Yun, Emily","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Zizmor, Elana","name":"Zizmor, Elana","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Silverbush, Jacquelyn","name":"Silverbush, Jacquelyn","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Sabbag, Kim","name":"Sabbag, Kim","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Wellness Center","name":"Wellness Center","3":"alert-key10","color":"alert-key10"},{"0":"1","period":"1","1":"1","day":"1","2":"Creighton, Braumon","name":"Creighton, Braumon","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Deggeller, David","name":"Deggeller, David","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Gonzalez, Briana","name":"Gonzalez, Briana","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hahn, Daniel","name":"Hahn, Daniel","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hall, Matt","name":"Hall, Matt","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Kitada, Terence","name":"Kitada, Terence","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Munger, Julie","name":"Munger, Julie","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Saxena, Karen","name":"Saxena, Karen","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Schworetzky, Neeti","name":"Schworetzky, Neeti","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Zipperstein, Max","name":"Zipperstein, Max","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Absent\/Field Trip Students","name":"Absent\/Field Trip Students","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Matchett, Liz","name":"Matchett, Liz","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Sheth, Shilpan","name":"Sheth, Shilpan","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Cassel, Jennifer","name":"Cassel, Jennifer","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Xu, Ning","name":"Xu, Ning","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Buck, Victoria","name":"Buck, Victoria","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Jacoubowsky, Bryce","name":"Jacoubowsky, Bryce","3":"","color":""},{"0":"1","period":"1","1":"1","day":"1","2":"Modica, Diana","name":"Modica, Diana","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Rode, Patrick","name":"Rode, Patrick","3":null,"color":null},{"0":"1","period":"1","1":"1","day":"1","2":"Grim, Tomas","name":"Grim, Tomas","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Paronable, Marjorie","name":"Paronable, Marjorie","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Conklin, Sandra","name":"Conklin, Sandra","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Park, Grace","name":"Park, Grace","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Norberg, Christina","name":"Norberg, Christina","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hall, Lisa","name":"Hall, Lisa","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Bautista, Michael","name":"Bautista, Michael","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Whichard, Danielle","name":"Whichard, Danielle","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Young, Tim","name":"Young, Tim","3":"alert-key11","color":"alert-key11"},{"0":"1","period":"1","1":"1","day":"1","2":"Halter, Ethan","name":"Halter, Ethan","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Gleeson, Clare","name":"Gleeson, Clare","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hernandez, Mark","name":"Hernandez, Mark","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Patrick, Jeffrey","name":"Patrick, Jeffrey","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Tantod, Gopi","name":"Tantod, Gopi","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Limburg, Florina","name":"Limburg, Florina","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Peters, Cindy","name":"Peters, Cindy","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Slocum, Dethrick","name":"Slocum, Dethrick","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Hanie, TK","name":"Hanie, TK","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Siu, Danning","name":"Siu, Danning","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Bisbee, David","name":"Bisbee, David","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Howard, Laurel","name":"Howard, Laurel","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Garger, Gabriela","name":"Garger, Gabriela","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"McGinn, Matt","name":"McGinn, Matt","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Ames, Steve","name":"Ames, Steve","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Beresford, Ben","name":"Beresford, Ben","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Firenzi, Tara","name":"Firenzi, Tara","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Lo, Kristen","name":"Lo, Kristen","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Barba-Medina, Norma","name":"Barba-Medina, Norma","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Anderson, Amy","name":"Anderson, Amy","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Letner, Alexis","name":"Letner, Alexis","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"ITP Workshop","name":"ITP Workshop","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"TRC","name":"TRC","3":"alert-key12","color":"alert-key12"},{"0":"1","period":"1","1":"1","day":"1","2":"MVC Meeting","name":"MVC Meeting","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Academic Center","name":"Academic Center","3":"alert-key4","color":"alert-key4"},{"0":"1","period":"1","1":"1","day":"1","2":"Min, Arya","name":"Min, Arya","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Kofman, Stacey","name":"Kofman, Stacey","3":"alert-key5","color":"alert-key5"},{"0":"1","period":"1","1":"1","day":"1","2":"Redfield, Chris","name":"Redfield, Chris","3":"0","color":"0"},{"0":"1","period":"1","1":"1","day":"1","2":"Larson, Abby","name":"Larson, Abby","3":null,"color":null}];
				flex = flex.substring(flex.indexOf("<b>"),flex.indexOf("</b>"));
				if (flex!="")
				{
					for(var colorLoop=0; colorLoop <= flexColors.length-1; colorLoop++)
					{
						if(flex!=null && flexColors[colorLoop][0] == period && flexColors[colorLoop][1] == day && flex.includes(flexColors[colorLoop][2]))
						{
							var color = flexColors[colorLoop]["color"];
						}
					}
				}else{
					var color="bg-light";
				}
				return color;
			}
		function updateFlexes(dayPeriod, studentID, day, period)
			{
				var xmlhttp= new XMLHttpRequest();
				var cat = dayPeriod+'cat';
				var desc = period+"day"+day+"Desc";
				var comment = period+"day"+day+"Comment";
				var category=document.getElementById(cat).value;
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById(dayPeriod).innerHTML=xmlhttp.responseText;
						document.getElementById(desc).value="";
						document.getElementById(comment).value="";
					}
				}
				xmlhttp.open("POST","fillFlex.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("cat="+category+"&studentID="+studentID+"&day="+day+"&period="+period+"&plan=0");
			}
		function updateFlexesPlan(dayPeriod, studentID, day, period)
			{
				var xmlhttp= new XMLHttpRequest();
				var cat = dayPeriod+'catPlan';
				var dayPeriod = dayPeriod+"Plan";
				var desc = period+"day"+day+"DescPlan";
				var comment = period+"day"+day+"CommentPlan";
				var category=document.getElementById(cat).value;
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById(dayPeriod).innerHTML=xmlhttp.responseText;
						document.getElementById(desc).value="";
						document.getElementById(comment).value="";
					}
				}
				xmlhttp.open("POST","fillFlex.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("cat="+category+"&studentID="+studentID+"&day="+day+"&period="+period+"&plan=1");
			}
		function updateMassFlexes()
			{
				var xmlhttp= new XMLHttpRequest();

				// initialize variables
				var numOfDays = 1;
				var numOfPeriods = 1;

				// get the day(s) selected
				let days = [];
				for (let d = 1; d <= 1; d++) { if ($("#"+d).val() == 1) { days.push(d); } }

				// get the period(s) selected
				let periods = [];
				if (numOfPeriods > 1) { for (let p = 1; p <= numOfPeriods; p++) { if ($("#period"+p).val() == 1) { periods.push(p) }; } }
				else { periods.push($("#period").val()); }

				// get the planning type
				var plan = 0;
				if (1 == 1) 
				{ 
					if ($("#MS_liveBtn").val() == 1) { plan = 0; }
					else if ($("#MS_planBtn").val() == 1) { plan = 1; }
					else if ($("#MS_planLockBtn").val() == 1) { plan = 2; }
				} 
				else { plan = document.getElementById("plan").value; }

				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("flexToSched").innerHTML=xmlhttp.responseText;
					}
				}
				xmlhttp.open("POST","fillMassFlex.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				var sendString = "periods="+JSON.stringify(periods)+"&days="+JSON.stringify(days)+"&plan="+plan;
				xmlhttp.send(sendString);
			}
		function updateDesc(dayPeriod, day, period, plan)
			{
				var xmlhttp= new XMLHttpRequest();
				var flex=encodeURIComponent(document.getElementById(dayPeriod).value);
				var desc = period+"day"+day+"Desc";
				var comment = period+"day"+day+"Comment";
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById(desc).value=xmlhttp.responseText;
						document.getElementById(comment).value='';
					}
				}
				xmlhttp.open("POST","fillDesc.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("day="+day+"&period="+period+"&flex="+flex+"&plan="+plan);
			}
		function updatePlanDesc(dayPeriod, day, period, plan)
			{
				var xmlhttp= new XMLHttpRequest();
				var flex=encodeURIComponent(document.getElementById(dayPeriod).value);
				var desc = period+"day"+day+"DescPlan";
				var comment = period+"day"+day+"CommentPlan";
				xmlhttp.onreadystatechange=function()
				{
					if(xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById(desc).value=xmlhttp.responseText;
						document.getElementById(comment).value='';
					}
				}
				xmlhttp.open("POST","fillDesc.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("day="+day+"&period="+period+"&flex="+flex+"&plan="+plan);
			}
		function editSchedModal(id,origin)
			{
				var xmlhttp;
				if (origin=='')
				{
					origin='masterSchedule';
				}
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				   {
				   if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("main").innerHTML="";
					 if(document.getElementById("masterSched")) {
						document.getElementById("masterSched").innerHTML="";
					 }
					 if(document.getElementById("schedButtons")) {
						document.getElementById("schedButtons").innerHTML="";
					 }
					 document.getElementById("main").innerHTML=xmlhttp.responseText;

					 // hide datatables buttons
					 document.getElementById("datatableButtons").innerHTML = "";
					 }
				  }
				xmlhttp.open("POST","getEditScheduleModal.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("id="+id+"&origin="+origin);
			}
		function saveEditSched(id)
		{
			var sessionType = 'Student';
			if (sessionType == 'Student')
			{
				id = '95040925';
			}
			var numOfDays = 1;
			var numOfPeriods = 1;
			var sendString = 'id='+id;
			var requested = "0";

			// check if planning is allowed based on session type
			// if "Allow Teacher" or "Allow Student" planning is enabled, but "Planning to Live" is disabled, set allowPlan to 0
			var allowPlan = 0;
			if (sessionType == "Admin") { allowPlan = 1; }
			else if (sessionType == "Teacher") 
			{ 
				if (1 == 1) { allowPlan = 0; }
				else { allowPlan = 0; }
			} 
			else if (sessionType == "Student") 
			{
				if (1 == 1) { allowPlan = 0; } 
				else { allowPlan = 0; }
			}

			var requestedPlan = "0";
			var lockedPlan = "0";
			var name = "";
			for (var i = 1; i <= numOfDays ; i++)
			{
				for (var j = 1; j <= numOfPeriods ; j++)
				{
					requested = "0";
					requestedPlan = "0";
					lockedPlan = "0";
					namePlan = "0";
					//Check that Live week teacher requests have flex selected
					if(document.getElementById(j+'day'+i+'Requested').value=="locked")
					{
						requested = "1";
					}
					name = encodeURIComponent($('#'+j+"day"+i).val());
					if(requested == "1" && name == "")
					{
						createStatusModal("error", "Scheduling Error", "You have not chosen an offering for the teacher request on day " + i + ", period " + j + ". In order to save this schedule, you must either remove the teacher request, or select a flex offering for the teacher request.");
						return;
					}
					//Check that Plan week teacher requests have flex selected
					if(allowPlan == 1 && document.getElementById(j+'day'+i+'RequestedPlan').value=="locked")
					{
						requestedPlan = "1";
					}
					if(allowPlan == 1 && document.getElementById(j+'day'+i+'LockedPlan').value=="locked")
					{
						lockedPlan = "1";
					}
					if(allowPlan == 1)
					{
					    namePlan = encodeURIComponent($('#'+j+"day"+i+"Plan").val());
					}
					if(requestedPlan == "1" && namePlan == "")
					{
						createStatusModal("error", "Scheduling Error", "You have not chosen an offering for the teacher request on planning day " + i + ", period " + j + ". In order to save this schedule, you must either remove the teacher request, or select a flex offering for the teacher request.");
						return;
					}
					//Get Default Flex value						
					defaultFlex = encodeURIComponent($('#'+j+"day"+i+"Default").val());
					//Get the rest of the data
					if (sessionType=="Admin")
					{
						sendString += "&"+j+"day"+i+"="+name+"&"+j+"day"+i+"Default="+defaultFlex+"&"+j+'day'+i+'Requested'+"="+requested+"&"+j+'day'+i+'Comment'+"="+encodeURIComponent($('#'+j+'day'+i+'Comment').val());
					}else{
						sendString += "&"+j+"day"+i+"="+name+"&"+j+'day'+i+'Requested'+"="+requested+"&"+j+'day'+i+'Comment'+"="+encodeURIComponent($('#'+j+'day'+i+'Comment').val());
					}
					if (sessionType=="Admin" || allowPlan==1)
					{
					 	sendString += "&"+j+"day"+i+"Plan="+namePlan+"&"+j+'day'+i+'RequestedPlan'+"="+requestedPlan+"&"+j+'day'+i+'CommentPlan'+"="+encodeURIComponent($('#'+j+'day'+i+'CommentPlan').val())+"&"+j+"day"+i+"LockedPlan="+lockedPlan;
					}
				}
			}
			var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			   {
			   if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			 {
    				if (xmlhttp.responseText!="")
    				{
    					alert(xmlhttp.responseText);
    				}
    				window.location.reload(false);
    			 }
			  }
			xmlhttp.open("POST","editSchedule.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(sendString);
		}
		function saveAndEmailEditSched(id)
		{
			var sessionType = 'Student';
			if (sessionType == 'Student')
			{
				id = '95040925';
			}
			var numOfDays = 1;
			var numOfPeriods = 1;
			var sendString = 'id='+id;
			var requested = "0";

			// check if planning is allowed based on session type
			// if "Allow Teacher" or "Allow Student" planning is enabled, but "Planning to Live" is disabled, set allowPlan to 0
			var allowPlan = 0;
			if (sessionType == "Admin") { allowPlan = 1; }
			else if (sessionType == "Teacher") 
			{ 
				if (1 == 1) { allowPlan = 0; }
				else { allowPlan = 0; }
			} 
			else if (sessionType == "Student") 
			{
				if (1 == 1) { allowPlan = 0; } 
				else { allowPlan = 0; }
			}

			var requestedPlan = "0";
			var lockedPlan = "0";
			var name = "";
			for (var i = 1; i <= numOfDays ; i++)
			{
				for (var j = 1; j <= numOfPeriods ; j++)
				{
					requested = "0";
					requestedPlan = "0";
					lockedPlan = "0";
					//Check that Live week teacher requests have flex selected
					if(document.getElementById(j+'day'+i+'Requested').value=="locked")
					{
						requested = "1";
					}
					name = encodeURIComponent($('#'+j+"day"+i).val());
					if(requested == "1" && name == "")
					{
						createStatusModal("error", "Scheduling Error", "You have not chosen an offering for the teacher request on day " + i + ", period " + j + ". In order to save this schedule, you must either remove the teacher request, or select a flex offering for the teacher request.");
						return;
					}
					//Check that Plan week teacher requests have flex selected
					if(allowPlan == 1 && document.getElementById(j+'day'+i+'RequestedPlan').value=="locked")
					{
						requestedPlan = "1";
					}
					if(allowPlan == 1 && document.getElementById(j+'day'+i+'LockedPlan').value=="locked")
					{
						lockedPlan = "1";
					}
					if(allowPlan == 1)
					{
					    namePlan = encodeURIComponent($('#'+j+"day"+i+"Plan").val());
					}
					if(requestedPlan == "1" && namePlan == "")
					{
						createStatusModal("error", "Scheduling Error", "You have not chosen an offering for the teacher request on planning day " + i + ", period " + j + ". In order to save this schedule, you must either remove the teacher request, or select a flex offering for the teacher request.");
						return;
					}
					//Get Default Flex value						
					defaultFlex = encodeURIComponent($('#'+j+"day"+i+"Default").val());
					//Get the rest of the data
					if (sessionType=="Admin")
					{
						sendString += "&"+j+"day"+i+"="+name+"&"+j+"day"+i+"Default="+defaultFlex+"&"+j+'day'+i+'Requested'+"="+requested+"&"+j+'day'+i+'Comment'+"="+encodeURIComponent($('#'+j+'day'+i+'Comment').val());
					}else{
						sendString += "&"+j+"day"+i+"="+name+"&"+j+'day'+i+'Requested'+"="+requested+"&"+j+'day'+i+'Comment'+"="+encodeURIComponent($('#'+j+'day'+i+'Comment').val());
					}
					if (sessionType=="Admin" || allowPlan==1)
					{
					 	sendString += "&"+j+"day"+i+"Plan="+namePlan+"&"+j+'day'+i+'RequestedPlan'+"="+requestedPlan+"&"+j+'day'+i+'CommentPlan'+"="+encodeURIComponent($('#'+j+'day'+i+'CommentPlan').val())+"&"+j+"day"+i+"LockedPlan="+lockedPlan;
					}
				}
			}
			var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			   {
			   if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
					if (xmlhttp.responseText!="")
					{
						alert(xmlhttp.responseText);
					}
					else
					{
						emailStudent(id);
					}
					window.location.reload(false);
				 }
			  }
			xmlhttp.open("POST","editSchedule.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(sendString);
		}
		
		function searchMain(xmlhttp) {
			if(document.getElementById("masterSched"))
			{
				document.getElementById("masterSched").innerHTML = "";
			}
			document.getElementById("main").innerHTML = xmlhttp.responseText;
		};	
		
		function StudentSearch (e) {
			if (e.which == 13 || e.keyCode == 13) {
				var StudentSearch = document.getElementById("searchStudent");
				if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				}
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("main").innerHTML = "";
						if(document.getElementById("teacherDashboard")) {
							document.getElementById("teacherDashboard").innerHTML = "";
						}
						searchMain(this);
						var results = $('#results').DataTable( {
							rowCallback: function( row, data, index ) {
								var numOfDays = 1;
								var cell = 0;
																	for (i=1;i<=numOfDays;i++)
									{
										if ( data[i+2] != "" ) {
											$('td:eq('+(i+1)+')', row).addClass(fetchColor(1,i,data[i+2]));
										}
									}
															},
							scrollX: true,
							renderer: 'bootstrap',
							destroy: true,
							ajax: 'getMasterSchedule.php',
							pageLength: 25,
														dom: "<'row'<'col-sm-3'l><'col-sm-3'><'col-sm-6'f>>" +
								"<'col-sm-12'tr>" +
								"<'row'<'col-sm-3'i><'col-sm-9'<'pull-right'B>>>"+
								"<'row'<'col-sm-12'<'pull-right'p>>>",
							language: {
								search: '<i class="fa fa-search"></i>',
								lengthMenu: '<div class="input-group hidden-md-down"><span class="input-group-addon" id="basic-addon1">Display</span>_MENU_<span class="input-group-addon" id="basic-addon3">Entries</span></div>',
								aria: {
									"sortAscending":  ": activate to sort column ascending",
									"sortDescending": ": activate to sort column descending"
								}
							},
							buttons: [
								{
									extend:	'copy',
									text: 	'<i class="fa fa-files-o"></i>',
									titleAttr: 'Copy to Clipboard'	
								},
								{
									extend:    'excel',
									text:      '<i class="fa fa-file-excel-o"></i>',
									title: 	 'FlexiSCHED - Master Schedule', // Filename
									exportOptions: {
										columns: [ ':visible' ] // All visible (colVis) or specific 0,1,2,...
									},
									titleAttr: 'Download as Excel'
								},
								{
									extend:    'pdf',
									text:      '<i class="fa fa-file-pdf-o"></i>',
									title: 	 'FlexiSCHED - Master Schedule',
									exportOptions: {
										columns: [ ':visible' ]
									},
									titleAttr: 'Download as PDF'
								},
								{
									extend:    'print',
									text:      '<i class="fa fa-print"></i>',
									title: 	 'FlexiSCHED - Master Schedule',
									exportOptions: {
										columns: [ ':visible' ],
									},
									titleAttr: 'Print'
								},
								{
									extend:    'colvis',
									text:      '<i class="fa fa-columns"></i>',
									titleAttr: 'Column Visibility'
								}
							],
							lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']]
						} );
					}
				};
				xmlhttp.open("POST","getScheduleSearch.php",true);
				xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xmlhttp.send();
				return false;
			}
			return true;
		};
		function emailModal(id)
		{
			var sessionType = 'Student';
			if (sessionType == 'Student')
			{
				id = '95040925';
			}
			var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			   {
			   if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
				 document.getElementById("emailModal").innerHTML=xmlhttp.responseText;
				 }
			  }
			xmlhttp.open("POST","getEmailModal.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("id="+id);
			$('#emailModal').modal('show');
		};
		function emailStudent(id)
		{
			var sessionType = 'Student';
			if (sessionType == 'Student')
			{
				id = '95040925';
			}
			var xmlhttp;
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.open("POST","emailStudent.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("id="+id);
			$('#emailModal').modal('hide');
		}
		function emailRoster()
		{
			var xmlhttp;
			var body=encodeURIComponent(document.getElementById("emailText").value);
			var day = $("#day").val();
			var flex = encodeURIComponent($("#flex").val());
			var flexName = $("#flex option:selected").text();
			var period = $("#period").val();	
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("msgModal").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","emailRoster.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("body="+body+"&day="+day+"&flex="+flex+"&period="+period);
		}
		function resetMsgModal()
		{
			var contents="<div class=\"modal-dialog\">";
			contents += "<div class=\"modal-content\">";
			contents += "<div class=\"modal-header\">";
			contents += "<h4 class=\"modal-title\">Email Students</h4>";
			contents += "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
			contents += "</div>";
			contents += "<div class=\"modal-body\">";
			contents += "<h6 class=\"modal-title\">Email Body</h6>";
			contents += "<p><textarea name=\"emailText\" id=\"emailText\" cols=\"50\" rows=\"10\"></textarea></p>";
			contents += "</div>";
			contents += "<div class=\"modal-footer\">";
			contents += "<button type=\"button\" class=\"btn btn-secondary\" onclick=\"emailRoster()\"><span class=\"fa fa-envelope-o\" aria-hidden=\"true\"></span> Email </button>";
			contents += "<button type=\"button\" class=\"btn btn-secondary\" onclick=\"resetMsgModal()\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span> Close </button>";
			contents += "</div>";
			contents += "</div>";
			contents += "</div>";
			document.getElementById("msgModal").innerHTML=contents;
			$('#msgModal').modal('hide');
		}
		function getWidth() {
		  return Math.max(
			document.body.scrollWidth,
			document.documentElement.scrollWidth,
			document.body.offsetWidth,
			document.documentElement.offsetWidth,
			document.documentElement.clientWidth
		  );
		}

		function getHeight() {
		  return Math.max(
			document.body.scrollHeight,
			document.documentElement.scrollHeight,
			document.body.offsetHeight,
			document.documentElement.offsetHeight,
			document.documentElement.clientHeight
		  );
		}

		$(function(){
		  $('#mainMenu').on('hide.bs.collapse', function () {
			$('#showMain').html('<span style="color:white;font-style:bold" class="fa fa-angle-down"></span>');
			sessionStorage.menu = "";
		  })
		  $('#mainMenu').on('show.bs.collapse', function () {
			$('#showMain').html('<span style="color:white;font-style:bold" class="fa fa-angle-up"></span>');
			sessionStorage.menu = "show";
		  })
		})
		function trClick(id)
		{
			let button = document.getElementById(id);
			if(button.value=="unlocked")
			{
				button.value="locked";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-danger");
				button.innerHTML="<i class=\"fa fa-check\" aria-hidden=\"true\"></i> Teacher Request";
			}else{
				button.value="unlocked";
				button.classList.remove("btn-danger");
				button.classList.add("btn-secondary");
				button.innerHTML="Teacher Reqest";
			}
		}
		
		function dayClick(id,numOfDays)
		{
			let button = document.getElementById(id);
			if (button.value=="0" && button.id=="allDays") // all days selected
			{
				button.value="1";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-primary");
				for(var i=1;i<=numOfDays;i++)
				{
					button = document.getElementById(i);
					button.value="1";
					button.classList.remove("btn-secondary");
					button.classList.add("btn-primary");
				}
			}
			else if (button.value=="1" && button.id=="allDays") // all days unselected
			{
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
				for(var i=1;i<=numOfDays;i++)
				{
					button = document.getElementById(i);
					button.value="0";
					button.classList.remove("btn-primary");
					button.classList.add("btn-secondary");
				}
			}
			else if (button.value=="1" && button.id!="allDays") // day unselected
			{
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
				button = document.getElementById("allDays");
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
			}
			else if (button.value=="0" && button.id!="allDays") // day selected
			{
				button.value="1";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-primary");
				button = document.getElementById("allDays");
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");

				// if all days are selected, select the "All Days" option as well
				let all = true;
				for (let d = 1; d <= numOfDays; d++) { if ($("#"+d).val() != 1) { all = false; } }
				if (all === true) // all days are selected
				{ 
					$("#allDays").removeClass("btn-secondary");
					$("#allDays").addClass("btn-primary");
					$("#allDays").val(1);
				}
			}
		}

		function cycleClick(id, numOfCycles)
		{
			let button = document.getElementById(id);
			if (button.value=="0" && button.id=="allCycles") // all cycles selected
			{
				button.value="1";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-primary");
				for (let c = 1; c <= numOfCycles; c++)
				{
					button = document.getElementById("cycle"+c);
					button.value="1";
					button.classList.remove("btn-secondary");
					button.classList.add("btn-primary");
				}
			}
			else if (button.value=="1" && button.id=="allCycles") // all cycles unselected
			{
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
				for (let c = 1; c <= numOfCycles; c++)
				{
					button = document.getElementById("cycle"+c);
					button.value="0";
					button.classList.remove("btn-primary");
					button.classList.add("btn-secondary");
				}
			}
			else if (button.value=="1" && button.id!="allCycles") // cycle unselected
			{
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
				button = document.getElementById("allCycles");
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
			}
			else if (button.value=="0" && button.id!="allCycles") // cycle selected
			{
				button.value="1";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-primary");
				button = document.getElementById("allCycles");
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");

				// if all days are selected, select the "All Cycles" option as well
				let all = true;
				for (let c = 1; c <= numOfCycles; c++) 
				{ 
					if ($("#cycle"+c).val() != 1)  
					{ 
						all = false; 
					} 
				}
				if (all === true) // all cycles are selected
				{ 
					$("#allCycles").removeClass("btn-secondary");
					$("#allCycles").addClass("btn-primary");
					$("#allCycles").val(1);
				}
			}
		}

		function periodClick(id, numOfPeriods, multiple)
		{
			let button = document.getElementById(id);
			
			// if multiple is 0; do not allow multi-period selection
			if (multiple == 0)
			{
				for (let p = 1; p <= numOfPeriods; p++)
				{
					$("#period"+p).removeClass("btn-primary");
					$("#period"+p).addClass("btn-secondary");
					$("#period"+p).val(0);
				}
			}
			
			if (button.value=="0" && button.id=="allPeriods") // all periods selected
			{
				button.value="1";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-primary");
				for (let p = 1; p <= numOfPeriods; p++)
				{
					button = document.getElementById("period"+p);
					button.value="1";
					button.classList.remove("btn-secondary");
					button.classList.add("btn-primary");
				}
			}
			else if (button.value=="1" && button.id=="allPeriods") // all periods unselected
			{
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
				for (let p = 1; p <= numOfPeriods; p++)
				{
					button = document.getElementById("period"+p);
					button.value="0";
					button.classList.remove("btn-primary");
					button.classList.add("btn-secondary");
				}
			}
			else if (button.value=="1" && button.id!="allPeriods") // period unselected
			{
				button.value="0";
				button.classList.remove("btn-primary");
				button.classList.add("btn-secondary");
				
				if (multiple == 1)
				{
					button = document.getElementById("allPeriods");
					button.value="0";
					button.classList.remove("btn-primary");
					button.classList.add("btn-secondary");
				}
			}
			else if (button.value=="0" && button.id!="allPeriods") // period selected
			{
				button.value="1";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-primary");
				
				if (multiple == 1)
				{
					button = document.getElementById("allPeriods");
					button.value="0";
					button.classList.remove("btn-primary");
					button.classList.add("btn-secondary");

					// if all days are selected, select the "All Periods" option as well
					let all = true;
					for (let p = 1; p <= numOfPeriods; p++) { if ($("#period"+p).val() != 1) { all = false; } }
					if (all === true) // all periods are selected
					{ 
						$("#allPeriods").removeClass("btn-secondary");
						$("#allPeriods").addClass("btn-primary");
						$("#allPeriods").val(1);
					}
				}
			}
		}

		/** function to change the status of the ON/OFF switch for the given option */
		function toggleSwitch(option)
		{
			let element = document.getElementById(option);
			let status = element.value;

			// if current status is off, switch to on
			if (status == "off" || status == 0)
			{
				element.value = "on";
				element.classList.remove("btn-secondary");
				element.classList.add("btn-primary");
				element.innerHTML = "<i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>&nbsp;ON";
			}
			// if current status is on, switch to off
			else
			{
				element.value = "off";
				element.classList.remove("btn-primary");
				element.classList.add("btn-secondary");
				element.innerHTML = "<i class=\"fa fa-power-off\" aria-hidden=\"true\"></i>&nbsp;OFF";
			}
		}
		
		function showSwitch(option)
		{
			let element = document.getElementById(option);
			let status = element.value;

			// if current status is off, switch to on
			if (status == "0")
			{
				element.value = "1";
				element.classList.remove("btn-secondary");
				element.classList.add("btn-success");
			}
			// if current status is on, switch to off
			else
			{
				element.value = "0";
				element.classList.remove("btn-success");
				element.classList.add("btn-secondary");
			}
		}

		/** function to toggle the scheduling lock based on the given element ID */
		function lockClick(id)
		{
			let button = document.getElementById(id);
			if(button.value=="unlocked") // button was unlocked, set to locked
			{
				button.value="locked";
				button.classList.remove("btn-secondary");
				button.classList.add("btn-danger");
				button.innerHTML="<i class='fa fa-lock' aria-hidden='true'></i> Locked";
			} else { // button was locked, set to unlocked
				button.value="unlocked";
				button.classList.remove("btn-danger");
				button.classList.add("btn-secondary");
				button.innerHTML="<i class='fa fa-unlock' aria-hidden='true'></i> Unlocked";
			}
		}

		function scheduleSwitchSingle(suffix, type, prefix)
		{
			let element = $("#"+prefix+suffix);
			let current = element.val();

			// uncheck select all elements
			$("#"+prefix+"liveBtn").removeClass("btn-success");
			$("#"+prefix+"planBtn").removeClass("btn-primary");
			if ($("#"+prefix+"planLockBtn").length > 0) { $("#"+prefix+"planLockBtn").removeClass("btn-danger"); }
			$("#"+prefix+"liveBtn").addClass("btn-secondary");
			$("#"+prefix+"planBtn").addClass("btn-secondary");
			if ($("#"+prefix+"planLockBtn").length > 0) { $("#"+prefix+"planLockBtn").addClass("btn-secondary"); }
			$("#"+prefix+"liveBtn").val(0);
			$("#"+prefix+"planBtn").val(0);
			if ($("#"+prefix+"planLockBtn").length > 0) { $("#"+prefix+"planLockBtn").val(0); }

			if (current == 1)
			{
				if (type == "live") { element.removeClass("btn-success"); }
				else if (type == "plan") { element.removeClass("btn-primary"); }
				else if (type == "planLock") { element.removeClass("btn-danger"); }
				element.addClass("btn-secondary");
				element.val(0);
			}
			else if (current == 0)
			{
				element.removeClass("btn-secondary");
				if (type == "live") { element.addClass("btn-success"); }
				else if (type == "plan") { element.addClass("btn-primary"); }
				else if (type == "planLock") { element.addClass("btn-danger"); }
				element.val(1);
			}
		}

		
				
				
		</script>
</head>

<style>
		div.topSticky{
			position:-webkit-sticky; position:sticky; top:0; z-index: 999;
		}
		div.botSticky{
			position:-webkit-sticky; position:sticky; bottom:0; z-index: 999; background: white;
		}
		.datetimepicker{ z-index:99999 !important; }
		.page-item.active .page-link, .pagination-datatables li.active .page-link, .pagination li.active .page-link, .page-item.active .pagination-datatables li a, .pagination-datatables li .page-item.active a, .pagination-datatables li.active a, .page-item.active .pagination li a, .pagination li .page-item.active a, .pagination li.active a, .page-item.active .page-link:focus, .pagination-datatables li.active .page-link:focus, .pagination li.active .page-link:focus, .page-item.active .pagination-datatables li a:focus, .pagination-datatables li .page-item.active a:focus, .pagination-datatables li.active a:focus, .page-item.active .pagination li a:focus, .pagination li .page-item.active a:focus, .pagination li.active a:focus, .page-item.active .page-link:hover, .pagination-datatables li.active .page-link:hover, .pagination li.active .page-link:hover, .page-item.active .pagination-datatables li a:hover, .pagination-datatables li .page-item.active a:hover, .pagination-datatables li.active a:hover, .page-item.active .pagination li a:hover, .pagination li .page-item.active a:hover, .pagination li.active a:hover {
			color: #fff !important;
			background-color: #1590CA !important;
			border-color: #1590CA !important;
		}
		.page-item.disabled .page-link, .pagination-datatables li.disabled .page-link, .pagination li.disabled .page-link, .page-item.disabled .pagination-datatables li a, .pagination-datatables li .page-item.disabled a, .pagination-datatables li.disabled a, .page-item.disabled .pagination li a, .pagination li .page-item.disabled a, .pagination li.disabled a, .page-item.disabled .page-link:focus, .pagination-datatables li.disabled .page-link:focus, .pagination li.disabled .page-link:focus, .page-item.disabled .pagination-datatables li a:focus, .pagination-datatables li .page-item.disabled a:focus, .pagination-datatables li.disabled a:focus, .page-item.disabled .pagination li a:focus, .pagination li .page-item.disabled a:focus, .pagination li.disabled a:focus, .page-item.disabled .page-link:hover, .pagination-datatables li.disabled .page-link:hover, .pagination li.disabled .page-link:hover, .page-item.disabled .pagination-datatables li a:hover, .pagination-datatables li .page-item.disabled a:hover, .pagination-datatables li.disabled a:hover, .page-item.disabled .pagination li a:hover, .pagination li .page-item.disabled a:hover, .pagination li.disabled a:hover {
			color: #1590CA !important;
			background-color: #fff !important;
			border-color: #ddd !important;
		}
		.page-link, .pagination-datatables li a, .pagination li a {
			color: #1590CA !important;
			background-color: #fff !important;
			border: 1px solid #ddd !important;
		}
		.page-link:focus, .pagination-datatables li a:focus, .pagination li a:focus, .page-link:hover, .pagination-datatables li a:hover, .pagination li a:hover {
			color: #1590CA !important;
			background-color: #fff !important;
			border-color: #ddd !important;
		}
		.form-control, .daterangepicker .input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
			color: #333 !important;
		}
		.form-control:focus, .daterangepicker .input-mini:focus, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:focus {
			color: #333 !important;
			background-color: #fff !important;
			border-color: #66afe9 !important;
			outline: none;
		}
		.form-control::placeholder, .daterangepicker .input-mini::placeholder, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control::placeholder, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up::placeholder {
		 color: #333 !important;
		 opacity: 1 !important;
		}
		.form-control, .daterangepicker .input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
			border: 1px solid #333 !important;
		}
		.switch-secondary > .switch-input:checked ~ .switch-label {
			background: #e6e6e6 !important;
			border-color: #333 !important;
		}
		.switch.switch-text .switch-label::before {
			color: #aaa !important;
		}
		.switch.switch-text .switch-label::after {
			color: #333 !important;
		}
		/* DataTables Responsive With FontAwesome */

		table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty{cursor:default !important}table.dataTable.dtr-inline.collapsed>tbody>tr>td.child:before,table.dataTable.dtr-inline.collapsed>tbody>tr>th.child:before,table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty:before{display:none !important}table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child,table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child{position:relative;padding-left:30px;cursor:pointer}table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before{top:12px;left:4px;height:14px;width:14px;display:block;position:absolute;text-align:center;font-family:'FontAwesome';line-height:14px;content:'\f055';}table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td:first-child:before,table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th:first-child:before{top:12px;left:4px;height:14px;width:14px;display:block;position:absolute;text-align:center;font-family:'FontAwesome';line-height:14px;content:'\f056';}table.dataTable.dtr-inline.collapsed>tbody>tr.child td:before{display:none}table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td:first-child,table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th:first-child{padding-left:27px}table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td:first-child:before,table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th:first-child:before{top:5px;left:4px;height:14px;width:14px;border-radius:14px;line-height:14px;text-indent:3px}table.dataTable.dtr-column>tbody>tr>td.control,table.dataTable.dtr-column>tbody>tr>th.control{position:relative;cursor:pointer}table.dataTable.dtr-column>tbody>tr>td.control:before,table.dataTable.dtr-column>tbody>tr>th.control:before{top:50%;left:50%;height:16px;width:16px;margin-top:-10px;margin-left:-10px;display:block;position:absolute;text-align:center;font-family:'FontAwesome';line-height:14px;content:'\f055';}table.dataTable.dtr-column>tbody>tr.parent td.control:before,table.dataTable.dtr-column>tbody>tr.parent th.control:before{content:'\f056';}table.dataTable>tbody>tr.child{padding:0.5em 1em}table.dataTable>tbody>tr.child:hover{background:transparent !important}table.dataTable>tbody>tr.child ul.dtr-details{display:inline-block;list-style-type:none;margin:0;padding:0}table.dataTable>tbody>tr.child ul.dtr-details li{border-bottom:1px solid #efefef;padding:0.5em 0}table.dataTable>tbody>tr.child ul.dtr-details li:first-child{padding-top:0}table.dataTable>tbody>tr.child ul.dtr-details li:last-child{border-bottom:none}table.dataTable>tbody>tr.child span.dtr-title{display:inline-block;min-width:75px;font-weight:bold}div.dtr-modal{position:fixed;box-sizing:border-box;top:0;left:0;height:100%;width:100%;z-index:100;padding:10em 1em}div.dtr-modal div.dtr-modal-display{position:absolute;top:0;left:0;bottom:0;right:0;width:50%;height:50%;overflow:auto;margin:auto;z-index:102;overflow:auto;background-color:#f5f5f7;border:1px solid black;border-radius:0.5em;box-shadow:0 12px 30px rgba(0,0,0,0.6)}div.dtr-modal div.dtr-modal-content{position:relative;padding:1em}div.dtr-modal div.dtr-modal-close{position:absolute;top:6px;right:6px;width:22px;height:22px;border:1px solid #eaeaea;background-color:#f9f9f9;text-align:center;border-radius:3px;cursor:pointer;z-index:12}div.dtr-modal div.dtr-modal-close:hover{background-color:#eaeaea}div.dtr-modal div.dtr-modal-background{position:fixed;top:0;left:0;right:0;bottom:0;z-index:101;background:rgba(0,0,0,0.6)}@media screen and (max-width: 767px){div.dtr-modal div.dtr-modal-display{width:95%}}div.dtr-bs-modal table.table tr:first-child td{border-top:none}
		.scrollwrapper{
			overflow-x: auto;
		}
		.hscroll > .row {
		  overflow-x: scroll;
		  white-space: nowrap;
		}
		.dropdown-item {
			color: white;
		}
		div.dataTables_wrapper div.dataTables_length label {
		  font-weight: normal;
		  text-align: left;
		  white-space: nowrap;
		}
		div.dataTables_wrapper div.dataTables_length select {
		  width: 50px;
		  display: inline-block;
		}
		div.dataTables_wrapper div.dataTables_length {
			text-align: left;
		}
		div.dt-bootstrap4 div.dataTables_length {
			text-align: left;
		}
		.page_heading
		{
			font-size: 24px;
		}
		.page_subheading
		{
			font-size: 20px;
		}
		.accessible_table_heading
		{
			visibility: hidden;
			display: none;
		}
		.accessible_switch_text
		{
			visibility: hidden;
			display: none;
		}
		.tooltip 
		{
			position: relative;
			display: inline-block;
		}
		.tooltip .tooltip-text 
		{
			visibility: hidden;
			width: 96px;
			background-color: black;
			color: white;
			text-align: center;
			border-radius: 8px;
			position: absolute;
			z-index: 1;
		}
		.tooltip:hover .tooltip-text 
		{
			visibility: visible;
		}
		.dt-button.buttons-columnVisibility {
			color: black;
			padding: 10px;
			border-style: groove solid groove solid;
			border-color: #c0cadd;
			border-width: 1px 2px 1px 2px;
		}
		.dt-button.buttons-columnVisibility.active {
			color: white;
			padding: 10px;
			border-style: groove solid groove solid;
			border-color: #188fba;
			border-width: 1px 2px 1px 2px;
			background-color: #20a8d8;
		}
		.dt-button-collection{
			padding: 0px !important;
		}
		.dropdown-menu{
			padding: 0px !important;
		}
		</style>
<body>
<div class="container-fluid" style="background-color: #0990c9; margin-top: -20px;">
<nav class="navbar navbar-fixed-top navbar-light" style="background-color: #0990c9">
<a class="navbar-brand" href="dashboard.php">
<img src="img/FullSCHED_clock_notag_WHITE.png" alt="FlexiSCHED logo" style="max-height: 50px;">
</a>
<button id="showMain" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-label="Toggle navigation"><span style="color:white;font-style:bold" class="servicedrop fa fa-angle-down"></span></button>
<div class="ml-auto">
<ul class="nav align-items-center">

<div id="activeOfficeReferral"></div>
<a class="nav-item" style="color:white;">
<div style="padding-right: 15px; display: inline-block; float: none;">
<h5 class="m-0">01/10/2024</h5>
</div>
</a>
<a class="nav-item">
<div class="dropdown" style="padding-right: 15px;">
<a data-toggle="dropdown" style="color: white; cursor: pointer;" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-info-circle fa-lg" aria-hidden="true"></span><span class="tag tag-success"></span></a>
<div class="dropdown-menu" style="background-color: #0990c9;right: 0; left: auto;">
<a class="dropdown-item" href="https://docs.google.com/document/d/1q1fGntHsuuA5rmhhpswULCXc7jh3tGIJFJV2GU_19ak" target="_blank"><i class="fa fa-ticket" aria-hidden="true"></i> Support</a>
</div>
</div>
</a>
</div>
</nav>
</div>
<div class="navbar-default col-12 p-l-0 p-r-0 collapse in" id="mainMenu" name="mainMenu" style="background-color: #0990c9;">
<ul class="nav nav-fill" style="background-color: #0990c9;">
<li class="nav-item">
<a class="nav-link" style="color:white" href="dashboard.php"><span class="fa fa-dashboard fa-white" aria-hidden="true"></span> <span class="__cf_email__" data-cfemail="b1d9c28581888384f1c1d0c4c2d59fc4c2">[email&#160;protected]</span></a>
</li>
<li class="nav-item">
<a class="nav-link" style="color:white" href="includes/logout.php" onclick="signOut()"><span class="fa fa-sign-out" aria-hidden="true"></span> Logout</a> </li>
</li>
<li class="nav-item" style="color:white" style="position: fixed; bottom: 0px; height: 60px; width: 250px; background-color: #384042; background-repeat: no-repeat; background-image: url('img/FlexiSched_PoweredBY_tiny.png'); background-position: center;"></li>
</ul>
</div>

<div id="editSchedModal" class="modal" role="dialog">
<div class="modal-dialog">

</div>
</div>

<div id="emailModal" class="modal" role="dialog">
<div class="modal-dialog modal-md">

</div>
</div>

<div id="serviceAgreementModalContainer"></div>

<div id="Error_Modal" class="modal" role="dialog" style="z-index: 1051;">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="Error_Modal_Title"></h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> An error has occurred:</p>
<p id="Error_Modal_Body"></p>
</div>
<div class="modal-footer">
<button class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times" aria-hidden="true"></span> OK</button>
</div>
</div>
</div>
</div>


<div id="Success_Modal" class="modal" role="dialog" style="z-index: 1051;">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="Success_Modal_Title"></h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p id="Success_Modal_Body"></p>
</div>
<div class="modal-footer">
<button class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times" aria-hidden="true"></span> OK</button>
</div>
</div>
</div>
</div>


<div id="Status_Modal" class="modal" role="dialog" style="z-index: 1051;">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="Status_Modal_Title"></h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<p id="Status_Modal_Body"></p>
</div>
<div class="modal-footer">
<button class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times" aria-hidden="true"></span> OK</button>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
				function createStatusModal(type, title, body)
				{
					if (type == "error") // error status modal
					{
						$("#Error_Modal_Title").html(title);
						$("#Error_Modal_Body").html(body);
						$("#Error_Modal").modal("show");
					}
					else if (type == "success") // success status modal
					{
						$("#Success_Modal_Title").html(title);
						$("#Success_Modal_Body").html(body);
						$("#Success_Modal").modal("show");
					}
					else if (type == "status") // generic status modal
					{
						$("#Status_Modal_Title").html(title);
						$("#Status_Modal_Body").html(body);
						$("#Status_Modal").modal("show");
					}
				}

									var menu = sessionStorage.getItem("menu");
					if(menu && menu === 'show'){
						document.getElementById("mainMenu").classList.add("show");
						document.getElementById("showMain").innerHTML = '<span style="color:white;font-style:bold" class="fa fa-angle-up"></span>';
					}
					else{
						document.getElementById("mainMenu").classList.remove("show");
						document.getElementById("showMain").innerHTML = '<span style="color:white;font-style:bold" class="fa fa-angle-down"></span>';
					}
								</script>
<script>
window.onload = function alertAutoClose(){
  setTimeout(function(){
    $(".message").hide(); 
  }, 4000);
}

if ('Student' == "Student" && 0 == 1)
{
	getMyCurrentPass();
	checkRequestStatus();
	setInterval(() => 
	{
		getMyCurrentPass();
		var table = $('#myPasses').DataTable();
		table.ajax.reload();
		checkRequestStatus();
	}, 5000);

	function disableTakePass()
	{
		var takePassButton = document.getElementById("takeHallPassButton");
		if (document.getElementById("activePass").innerHTML != "")
		{
			takePassButton.disabled = true;
		}
		else
		{
			takePassButton.disabled = false;
		}
	}
	function checkRequestStatus()
	{
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("mainCard").innerHTML=xmlhttp.responseText;
				addVariablesForTakingPass();
			}
		}
		xmlhttp.open("POST","checkPassRequestStatus.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send();
	}

	$(document).ready(function() {
		$('#myPasses thead tr').clone(true).appendTo( '#myPasses thead' );
		$('#myPasses thead tr:eq(1) th').each( function (i) {
			var title = $(this).text();
			if(title.includes("Actions"))
			{
				$(this).html( '<center><span class="accessible_table_heading">' + title + '</span></center>' );
			}else{
				$(this).html( '<center><span class="accessible_table_heading">' + title + '</span><input type="text" size="10" aria-label="Search column ' + title + '"/></center>' );
			}
			$( 'input', this ).on( 'keyup change', function () {
				if ( table.column(i).search() !== this.value ) 
				{
					table
						.column(i)
						.search( this.value )
						.draw();
				}
			} );
		} )
		var table = new DataTable('#myPasses', {
		ajax: {
			url: '/me/passes/get',
			type:"POST",
			data: {
				user_id: 95040925			}
		}, 
		orderCellsTop: true,
		responsive: true,
		renderer: 'bootstrap',
		pagingType: 'listbox',
		columns: [
			{ data: "Teacher", orderable: true},
			{ data: "Reason", orderable: true},
			{ data: "Pass Date", orderable: true},
			{ data: "Start Time", orderable: true},
			{ data: "End Time", orderable: true},
			{ data: "Time Needed", orderable: true}
		],
		buttons: [],
		language: {
			search: '<i class="fa fa-search" aria-label="Search student list"></i><span class="accessible_table_heading">Search student list:</span>',
			lengthMenu: '<div class="input-group input-group-sm"><span class="input-group-addon" id="basic-addon1">Display</span>_MENU_<span class="input-group-addon" id="basic-addon3">Entries</span></div>',
			aria: {
				"sortAscending":  ": activate to sort column ascending",
				"sortDescending": ": activate to sort column descending"
			}
		},
		columnDefs: [
						{targets: '_all',className: 'px-0 pt-1 pb-1 dt-head-center'},
					],
		order: [
			
		],
		dom: "<'row'<'col-sm-4'l><'col-sm-2'><'col-sm-6'f>>" +
				"<'col-sm-12'tr>" +
				"<'row'<'col-sm-3'i><'col-sm-9'<'pull-right'B>>>"+
				"<'row'<'col-sm-12'<'pull-right'p>>>",
		});
		$( table.table().container() ).on( 'keyup', 'tfoot input', function () {
			table
				.column( $(this).parent().index()+':visible' )
				.search( this.value )
				.draw();
		} );
	});
}
function getMyCurrentPass()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4)
		{
			if (xmlhttp.responseText == 200)
			{
				disableTakePass();
				document.getElementById("activePass").innerHTML = "";
			}
			else
			{
				document.getElementById("activePass").innerHTML = JSON.parse(xmlhttp.responseText);
				disableTakePass();
			}
		}
	}
	xmlhttp.open("POST","/me/passes/current/get",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send();
}
// function for students to take a hall pass
function takeHallpass()
{
	if ('Student' == "Student")
	{
		if (document.getElementById("reason").value == "" || document.getElementById("neededSlider").value == 0 || document.getElementById("Teachers").value == "" || document.getElementById("Teachers").value == " " || document.getElementById("Teachers").value == null || document.getElementById("destinations").value == "")
		{
			createStatusModal("error", "Input Needed!", "Must enter reason for taking hall pass, select a teacher, a destination, and the time that you need!");
			return;
		}
		var teacherId = document.getElementById("Teachers").value;
		var timeNeeded = document.getElementById("neededSlider").value;
		var reason = document.getElementById("reason").value;
		var destination = document.getElementById("destinations").value;
		var destinationType = document.getElementById("destinations").options[document.getElementById("destinations").selectedIndex].getAttribute("data-type");
		var username = 95040925;
		// restrictions have all been checked now we can send the hall pass request
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.responseText==200)
			{
				checkRequestStatus();
				getMyCurrentPass();
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 490)
			{
				createStatusModal("status", "Max Passes Reached", "The max amount of hall passes has been reached! Please wait and try again.");
				return;
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 491)
			{
				createStatusModal("status", "Restriction Found", "Someone you are restricted with currently has a hall pass! Wait and try again.");
				return;
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 492)
			{
				createStatusModal("status", "Pass Limit Reached", "You have already taken the max amount of passes for the day.");
				return;
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 493)
			{
				createStatusModal("status", "Pass Limit Reached", "Reason cannot be left blank to take a hall pass.");
				return;
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 494)
			{
				createStatusModal("status", "Restriction Found", "You are trying to request a pass during a restricted time!");
				return;
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 262)
			{
				createStatusModal("status", "Pre-approved pass interference", "A hall pass can't interfere with a pre-approved pass!");
				return;
			}
			else if (xmlhttp.readyState==4 && xmlhttp.responseText == 495)
			{
				createStatusModal("status", "FlexiPASS Locked", "All passes are locked at the moment!");
				return;
			}
		}
		xmlhttp.open("POST","/createHallPass",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("time="+timeNeeded+"&reason="+reason+"&user_id="+username+"&teacher="+teacherId+"&request=takeHallPass&destination="+destination+"&destinationType="+destinationType);
		document.getElementById("neededSlider").value = "";
		document.getElementById("reason").value = "";
		document.getElementById("teacherName").innerHTML = "";
		$('.selectpicker').selectpicker('val', "");
	}
}
// function for a student to return a hall pass
function returnHallPass(recordId)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("mainCard").innerHTML=xmlhttp.responseText;
			document.getElementById("activePass").innerHTML="";
			disableTakePass();
		}
	}
	xmlhttp.open("POST","returnHallPass.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var user_id = 95040925;
	xmlhttp.send("type=student&recordId="+recordId);
}

function requestPass()
{
	var reason = document.getElementById("requestReason").value;
	var startTime = document.getElementById("startTime").value;
	var endTime = document.getElementById("endTime").value;
	var teacherId = document.getElementById("teachers").value;
	var date = document.getElementById("date").value;
	var destinationID = document.getElementById("requestDestination").value;
	var destinationType = document.getElementById("requestDestination").options[document.getElementById("requestDestination").selectedIndex].getAttribute("data-type");

	if (reason == "" || startTime == "" || endTime == "" || teacherId == "" || date == "" || destinationID == "")
	{
		createStatusModal("status", "Missing Input", "All inputs must be provided to request a pass!");
		return;
	}
	var sendString = "reason="+reason+"&start="+startTime+"&end="+endTime+"&date="+date+"&teacherId="+teacherId+"&destinationID="+destinationID+"&destinationType="+destinationType;
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if (xmlhttp.responseText == "success")
			{
				createStatusModal("status", "Request Sent", "You have successfully requested a pass from " + startTime + " - " + endTime + ".");
				document.getElementById("requestReason").value = "";
				document.getElementById("startTime").value = "";
				document.getElementById("endTime").value = "";
				document.getElementById("teachers").value = "";
				document.getElementById("date").value = "";
				$('.selectpicker').selectpicker('val', "");
				$("#newPassModal").modal("hide");
			}
			else
			{
				createStatusModal("status", "Request Not Sent", xmlhttp.responseText);
			}
		}
		else if (xmlhttp.readyState==4 && xmlhttp.status==495)
		{
			createStatusModal("status", "Passes Locked", xmlhttp.responseText);
		}
	}
	xmlhttp.open("POST","requestPass.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(sendString);
}

// function that adds the teacher name to the section above the take hall pass button 
function addVariablesForTakingPass(username = null)
{
	if (document.getElementById("mainButton").innerHTML == "Take Hall Pass")
	{
		if (username != null)
		{
			document.getElementById("teacherName").innerHTML = "Request hall pass from " + username;
		}
		if (document.getElementById("Teachers").value != "" && document.getElementById("Teachers").value != null && document.getElementById("reason").value != "" && document.getElementById("reason").value != null && document.getElementById("neededSlider").value != 0 && document.getElementById("destinations").value != "")
		{
			document.getElementById("mainButton").className = "btn-dash bg-success d-flex w-100 h-100 justify-content-center align-items-center p-5 rounded border-0";
		}
	}
}

function showCard() {
	if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("displayCard").innerHTML = this.responseText;
			}
		};

		xmlhttp.open("GET","ajax/dash_cardTooltip.php",true);
		xmlhttp.send();
	
}

function updateRange(num)
{
	document.getElementById("rangeNum").innerHTML = num + " Minutes";
}

function incrementRange(option)
{
	if (option == "plus")
	{
		document.getElementById("neededSlider").value++;
		document.getElementById("rangeNum").innerHTML = document.getElementById("neededSlider").value + " Minutes";
	}
	else if (option == "minus")
	{
		document.getElementById("neededSlider").value--;
		document.getElementById("rangeNum").innerHTML = document.getElementById("neededSlider").value + " Minutes";
	}
}
</script>
<style>
	.message{
		z-index: 1;
		position: absolute;
		top: 75px;
		right: 20%;
		width: 60%;
	}
</style>



<main class="main" onload="alertAutoClose()">
<section class="default-layout">
<div class="default-layout-caption">
<div class="container-fluid" id="main">

<div class="default-layout-page-title">
</div>

<div class="row">
<div class="col">

<div id="studentDashboard">
<script type="text/javascript" language="javascript">
function clickToSched(flex,day,period)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	   {
	   if (xmlhttp.readyState==4 && xmlhttp.status==200)
		 {
			alert(xmlhttp.responseText);
			location.reload();
		 }
	  }
	xmlhttp.open("POST","clickToSched.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("flex="+flex+"&day="+day+"&period="+period);
}
$(document).ready(function() {
	$('#results thead tr').clone(true).appendTo( '#results thead' );
	$('#results thead tr:eq(1) th').each( function (i) {
		var title = $(this).text();
		if(title.includes("Default"))
		{
			$(this).html( '<input type="text"/>' );	
		}else if(title.includes("Actions"))
		{
			$(this).html( '' );
		}else if(title.includes("Flex Name"))
		{
			$(this).html( '<span class=\"accessible_table_heading\" aria-hidden=\"true\">' + title + '</span><i class="fa fa-search" style="color:gray"></i><input type="text" size="10" aria-label="Search column ' + title + '"/>' );
		}else{
			$(this).html( '<span class=\"accessible_table_heading\" aria-hidden=\"true\">' + title + '</span><input type="text" size="10" aria-label="Search column ' + title + '"/>' );
		}
		$( 'input', this ).on( 'keyup change', function () {
			if ( table.column(i).search() !== this.value ) {
				table
					.column(i)
					.search( this.value )
					.draw();
			}
		} );
	} );
	var table = $('#results').DataTable ( {
		columnDefs: [
			{
				targets: [1],
				visible: false,
				searchable: false
			}],
		scrollX: true,
		orderCellsTop: true,
		fixedHeader: true,
		pagingType: 'listbox',
		renderer: 'bootstrap',
		language: {
			search: '<i class="fa fa-search"></i>',
			lengthMenu: '<div class="input-group input-group-sm"><span class="input-group-addon" id="basic-addon1">Display</span>_MENU_<span class="input-group-addon" id="basic-addon3">Entries</span></div>',
			aria: {
				"sortAscending":  ": activate to sort column ascending",
				"sortDescending": ": activate to sort column descending"
			}
		},
		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']]
	} );
	$('.dataTable').on('click', 'tbody td', function() {
		var numOfPeriods=1;
		if (numOfPeriods==1)
		{
			var period = 1;
		}else{
			var period = table.cell(table.cell(this).index().row,3).data();
		}
		if (table.cell(this).index().column<3 && numOfPeriods>1)
		{
			//Display error message
			alert("You must click on a flex offering.");
		}else if(table.cell(this).index().column<2 && numOfPeriods==1)
		{
			//Display error message
			alert("You must click on a flex offering.");
		}else
		{
			//Display error message
			//alert("Click to schedule is temporarily disabled. Please use the edit button to the right of you schedule.");
			var day = table.column( table.cell(this).index().column ).header();
			day = $(day).text();
			var flex = encodeURIComponent(table.cell(table.cell(this).index().row,0).data());
			flex=flex.replace("%26amp%3B","%26");
			var con = confirm("You are attempting to schedule " + decodeURIComponent(flex) + " for " + day + " period " + period);
			if (con == true)
			{
				//Attempt to schedule the student to given flex
			    if(numOfPeriods==1)
			    {
				    clickToSched(flex,(table.cell(this).index().column - 2),period);
			    }else{
					clickToSched(flex,(table.cell(this).index().column - 3),period);
			    }
			}
		}
    });
	$('#studentResults').DataTable( {
		rowCallback: function( row, data, index ) {
			var numOfDays = 1;
			var cell = 0;
							for (i=0;i<numOfDays;i++)
				{
					if ( data[i] != "" ) {
						$('td:eq('+(i)+')', row).addClass(fetchColor(1,i+1,data[i]));
					}
				}
					},
				scrollX: true,
		renderer: 'bootstrap',
		destroy: true,
		bFilter: false,
		bPaginate: false,
		order: [[1, 'asc']],
		ajax: 'getMasterSchedule.php'
	})
});
</script>
<div class="card">
<div class="card-header">
<div class="h4 col-12 m-0"><h1 class="page_heading m-0">Student Schedule for Holden Seidel</h1></div>
</div>
<div class="card-block">
<div class="card">
<table id="studentResults" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%"><thead>
<tr><th style="text-align: center !important;">Wed PRIME<br \>01/10/2024</th><th style="text-align: center !important;" data-priority="1">Actions</th></tr></thead><tbody></tbody></table> </div>
</div>
</div>
<div class="card">
<div class="card-block">
<div class="card">
<div class="card-header">
<div class="h4 col-12 m-0">
<button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-target="#collapseTwo" aria-label="Show/hide flex list."><i class="fa fa-minus"></i></button>
Full Schedule </div>
</div>
<div id="collapseTwo" class="collapse show">
<div class="col">
<div class="card-block">
<div class="row">
<div class="col alert-key5"><b>Tutorial</b></div><div class="col alert-key12"><b>Quiz/Test Make-Up</b></div><div class="col alert-key2"><b>School/Club Event</b></div><div class="col alert-key11"><b>Check-In</b></div><div class="col alert-key10"><b>Wellness Activity</b></div><div class="col alert-key4"><b>Intervention</b></div> </div>
</div>
</div> <table id="results" class="table table-striped table-hover table-bordered" cellspacing="0"><thead><tr><th style="text-align: center !important;">Flex Name</th><th style="text-align: center !important;">Email</th><th style="text-align: center !important;">Category</th><th style="text-align: center !important;">Wed PRIME<br \>01/10/2024</th></tr></thead><tbody><tr><td>Absent/Field Trip Students</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7812191f0d1114190a3808190d0b1c56170a1f">[email&#160;protected]</a></td><td>Gen Ed</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Academic Center</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbaba8afbeacbaa9bf9babbaaea8bff5b4a9bc">[email&#160;protected]</a></td><td>Gen Ed</td><td class="alert-key4"><b>Type: Intervention<br>Room: D-2<br>Restriction: None<br>10 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Previously matched tutor pairs may meet in the Academic Center in D-2 during PRIME">Previously match...</span></b><br></tr><tr><td>Ames, Steve</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d2e3c30382e1d2d3c282e3973322f3a">[email&#160;protected]</a></td><td>PE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: PE Classroom<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Anderson, Amy</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ffef2fef1fbfaedecf0f1dfeffeeaecfbb1f0edf8">[email&#160;protected]</a></td><td>PE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-1<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Arteaga, Arlena</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f1e1e0d0b1a1e181e3f0f1e0a0c1b51100d18">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: G-6<br>Restriction: None<br>25 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="**NO GAMING
**NO FRIENDS OF FRIENDS
***QUIET SPACE">**NO GAMING
**NO...</span></b><br></tr><tr><td>Barba-Medina, Norma</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff91929a9b96919ebf8f9e8a8c9bd1908d98">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: G-2<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Barrios, Ana</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b5b6b5a6a6bdbba794a4b5a1a7b0fabba6b3">[email&#160;protected]</a></td><td>WL</td><td class>Room: K-2<br>Restriction: None<br>0 - </b><br></tr><tr><td>Bautista, Michael</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bad7d8dbcfced3c9cedbfacadbcfc9de94d5c8dd">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-203<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Beresford, Ben</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="61030304130412070e13052111001412054f0e1306">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: C-3<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Bisbee, David</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89edebe0faebececc9f9e8fcfaeda7e6fbee">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-25<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Blackburn, Kristy</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="016a636d60626a6374736f4171607472652f6e7366">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: P-115<br>Restriction: None<br>28 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Production time for The Oracle or The Olympian (interviews/spread design, etc). and help for MAC English 9A or Blackburn World Lit.">Production time ...</span></b><br></tr><tr><td>Brassey, Mark</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e030c1c0f1d1d0b172e1e0f1b1d0a40011c09">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-3<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Brown, Justin</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f69c929484998198b68697838592d8998491">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-106<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Buck, Victoria</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e0968295838ba09081959384ce8f9287">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: M-3<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Carroll, Tracie</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8bffe8eaf9f9e4e7e7cbfbeafef8efa5e4f9ec">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-1<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Cassel, Jennifer</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cea4adafbdbdaba28ebeafbbbdaae0a1bca9">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-103<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Choi, Julia</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741e171c1b1d3404150107105a1b0613">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-212<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Clark, Monica</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c31333f303d2e371c2c3d292f3872332e3b">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-9<br>Restriction: None<br>20 - Tutorial support</b><br></tr><tr><td>College & Career</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="204a464944414e496050415553440e4f5247">[email&#160;protected]</a></td><td>Counseling</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>College Pathways Meeting</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8be7ece4e6eef1cbfbeafef8efa5e4f9ec">[email&#160;protected]</a></td><td>Counseling</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Collier, Warren</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="483f2b272424212d3a0838293d3b2c66273a2f">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: C-2<br>Restriction: None<br>32 - Tutorial support</b><br></tr><tr><td>Congress, Rachel</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef9d8c8081889d8a9c9caf9f8e9a9c8bc1809d88">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-201<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Conklin, Sandra</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="56253539383d3a3f3816263723253278392431">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: F-2<br>Restriction: None<br>0 - </b><br></tr><tr><td>Corpuz, Ed</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec898f839e9c9996ac9c8d999f88c2839e8b">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: L-6<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Counseling - Bueno</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d9dacdddd6d7f8c8d9cdcbdc96d7cadf">[email&#160;protected]</a></td><td>Counseling</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Counseling - Chavez</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86ece5eee7f0e3fcc6f6e7f3f5e2a8e9f4e1">[email&#160;protected]</a></td><td>Counseling</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Counseling - Dickson</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6bbb2bfb5bda5b9b896a6b7a3a5b2f8b9a4b1">[email&#160;protected]</a></td><td>Counseling</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Counseling - Johanson</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb8f8184838a85988485ab9b8a9e988fc584998c">[email&#160;protected]</a></td><td>Counseling</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Counseling - Ross</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0c3d2cfd3d3e0d0c1d5d3c48ecfd2c7">[email&#160;protected]</a></td><td>Counseling</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Creighton, Braumon</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="791b1a0b1c101e110d16173909180c0a1d57160b1e">[email&#160;protected]</a></td><td>PE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: Bow Gym<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Deggeller, David</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f1b1b1a18181a13131a0d3f0f1e0a0c1b51100d18">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-208<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Dunlap, Paul</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="641400110a0805142414051117004a0b1603">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-114<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Durquet, Marie</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fa979e8f888b8f9f8eba8a9b8f899ed495889d">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: M-1<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Eggert, Chris</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9c9a98989a8d8bbf8f9e8a8c9bd1908d98">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Firenzi, Tara</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0c4d6d9c2d5decad9f0c0d1c5c3d49edfc2d7">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: C-8<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Florea, Cristina</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5734343e243a362417273622243379382530">[email&#160;protected]</a></td><td>Math</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Friedland, Scott</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93e0f5e1faf6f7fff2fdf7d3e3f2e6e0f7bdfce1f4">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-204<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Garger, Gabriela</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e88f8f899a8f8d9aa898899d9b8cc6879a8f">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: G-4<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Gleason, Mark</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e58882898084968a8ba59584909681cb8a9782">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: P-117<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Gleeson, Clare</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5c58535a5a4c50517f4f5e4a4c5b11504d58">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-111<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Gonzalez, Briana</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4527222a2b3f2429203f0535243036216b2a3722">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-10<br>Restriction: None<br>20 - Tutorial support</b><br></tr><tr><td>Granlund-Moyer, Kristina</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="066d617467686a73686246766773756228697461">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: F-4<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Grim, Tomas</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9adbeabb0b499a9b8acaabdf7b6abbe">[email&#160;protected]</a></td><td>CTE</td><td class="0">Room: 0<br>Restriction: None<br>0 - </b><br></tr><tr><td>Hahn, Daniel</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a1ada4adab85b5a4b0b6a1ebaab7a2">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-214<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Hall, Lisa</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f43474e43436f5f4e5a5c4b01405d48">[email&#160;protected]</a></td><td></td><td class="alert-key5"><b>Type: Tutorial<br>Room: P-115<br>Restriction: None<br>30 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="For Mrs. Hall's 9th Grade English Class and for SEC work time, For students who need to see Mrs. Hall or SEC Officers for Student Activities/ Club Work">For Mrs. Hall's ...</span></b><br></tr><tr><td>Hall, Matt</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="066b6e676a6a46766773756228697461">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: H-3<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Halter, Ethan</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="debbb6bfb2aabbac9eaebfabadbaf0b1acb9">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-107<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Hanie, TK</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e0a161f10171b3e0e1f0b0d1a50110c19">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: L-1<br>Restriction: None<br>25 - Tutorial support</b><br></tr><tr><td>Hawes, Kathy</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f2999a93859781b28293878196dc9d8095">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-209<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Hernandez, Mark</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="375a5f524559565953524d77475642445319584550">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-105<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Hlasek, Misha</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90fdf8fcf1e3f5fbd0e0f1e5e3f4beffe2f7">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-205<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Holmes, Patricia</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0a0b8bfbcbdb5a390a0b1a5a3b4febfa2b7">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: F-6<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Howard, Laurel</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb878a83849c8a998fab9b8a9e988fc584998c">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: C-4<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Ichikawa, Diane</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="16727f757e7f7d77617756667763657238796471">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-112<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>ITP Workshop</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7bbb3b8a5a4b2ae97a7b6a2a4b3f9b8a5b0">[email&#160;protected]</a></td><td>SpEd</td><td class="0">Room: 0<br>Restriction: None<br>0 - </b><br></tr><tr><td>Ja, Katherine</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e25242f0e3e2f3b3d2a60213c29">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-113<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Jacoubowsky, Bryce</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="42202823212d37202d3531293b0232233731266c2d3025">[email&#160;protected]</a></td><td>Science</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Johnson, Christopher</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a6afaaadabb6aaab85b5a4b0b6a1ebaab7a2">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: C-1<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Kaci, Rachael</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deacb5bfbdb79eaebfabadbaf0b1acb9">[email&#160;protected]</a></td><td>Work Experience</td><td class="alert-key11"><b>Type: Check-In<br>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Kaneko, Takeshi</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1c5dad0dfd4dadef1c1d0c4c2d59fdec3d6">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-115<br>Restriction: None<br>28 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Support with AP CSP, FOOP, Alg2/Trig (A or H).
NO ELECTRONIC GAMES; BOARD GAMES OK.">Support with AP ...</span></b><br></tr><tr><td>Kinyanjui, Arthur</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4223292b2c3b232c28372b0232233731266c2d3025">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-6<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Kitada, Terence</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d594644594c494c6d5d4c585e4903425f4a">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-108<br>Restriction: None<br>32 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Mr. Kitada's Office Hours (N108): Come in for help on assignments in English 9A, English 10, or Visual Storytelling.">Mr. Kitada's Off...</span></b><br></tr><tr><td>Kofman, Stacey</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2c5f47434a414d426c5c4d595f4802435e4b">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-1<br>Restriction: None<br>5 - </b><br></tr><tr><td>Larson, Abby</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="71101d1003021e1f3101100402155f1e0316">[email&#160;protected]</a></td><td>SpEd</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Lee, Jena</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a40464f4f6a5a4b5f594e0445584d">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-2<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Letner, Alexis</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e1f121b0a101b0c3e0e1f0b0d1a50110c19">[email&#160;protected]</a></td><td>ELL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-4<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Lewis, Sandra</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d3e21283a243e0d3d2c383e2963223f2a">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: S-102<br>Restriction: None<br>20 - Tutorial support</b><br></tr><tr><td>Liberatore, Bill</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d2dcd9d2d5c2d1c4dfc2d5f0c0d1c5c3d49edfc2d7">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: S-121<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Library</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="600407090c0c2010011513044e0f1207">[email&#160;protected]</a></td><td>Gen Ed</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Limburg, Florina</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82e4eeebefe0f7f0e5c2f2e3f7f1e6acedf0e5">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-207<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Linsdell, Dawna</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5a5257504d5a5b52527e4e5f4b4d5a10514c59">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-5<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Little, Joshua</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6cccacfd2d2cac3e6d6c7d3d5c288c9d4c1">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-4<br>Restriction: None<br>29 - Tutorial support</b><br></tr><tr><td>Lizundia, Laura</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a565653404f545e535b7a4a5b4f495e1455485d">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: H-1<br>Restriction: None<br>20 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Priority will be given to French Students">Priority will be...</span></b><br></tr><tr><td>Lo, Kristen</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c2c5c6e9d9c8dcdacd87c6dbce">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: Little Theater<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Lyons, Philip</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f3839f8a9c9d80b38392868097dd9c8194">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: F-1<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Matchett, Liz</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="197574786d7a717c6d6d5969786c6a7d37766b7e">[email&#160;protected]</a></td><td>WL</td><td class="0">Room: H5<br>Restriction: None<br>20 - </b><br></tr><tr><td>Matta, Nora</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8c6c5c9dcdcc9e8d8c9dddbcc86c7dacf">[email&#160;protected]</a></td><td>History/Social Studies</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>McDonnell, Savannah</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e1928c82858e8f8f848d8da19180949285cf8e9386">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-202<br>Restriction: None<br>32 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Help with Geometry and/or AP Computer Science Principles">Help with Geomet...</span></b><br></tr><tr><td>McGinn, Matt</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc0c0cecac4c3c3edddccd8dec983c2dfca">[email&#160;protected]</a></td><td>PE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: Titan Gym<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Mellows, Heather</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a8ada5acacafb7b380b0a1b5b3a4eeafb2a7">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-8<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Menache, Nicole</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="244a49414a45474c416454455157400a4b5643">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-14<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Merchant, Angela</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6908040c1b0a0108071d2919081c1a0d47061b0e">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: L-2<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Miller, Greg</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1473797d787871665464756167703a7b6673">[email&#160;protected]</a></td><td>VAPA</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Min, Arya</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e2838f8b8ca29283979186cc8d9085">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: English Office<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Modica, Diana</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef8b82808b868c8eaf9f8e9a9c8bc1809d88">[email&#160;protected]</a></td><td>WL</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Munger, Julie</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="43292e362d2426310333223630276d2c3124">[email&#160;protected]</a></td><td>English</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>MVC Meeting</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a40455d4f446a5a4b5f594e0445584d">[email&#160;protected]</a></td><td>Gen Ed</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Nino Oliva, Teresa</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="62160c0b0c0d0d0e0b14032212031711064c0d1005">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: G-1<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Norberg, Christina</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6d5d8d9c4d4d3c4d1f6c6d7c3c5d298d9c4d1">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-10<br>Restriction: None<br>30 - Tutorial support</b><br></tr><tr><td>O'Connell, Casey</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d7dbd7dbdadad1d8d8f4c4d5c1c7d09adbc6d3">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-6<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Ou-Ponticelli, Tiffany</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1c5dec4c1dedfc5d8d2d4ddddd8f1c1d0c4c2d59fdec3d6">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: S-102<br>Restriction: Gunn Music<br>4 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Individual Practice Room Use only - one person per practice space, for active practicing only (not studying). These spaces are reserved for Gunn Instrumental Music students">Individual Pract...</span></b><br></tr><tr><td>Owen, Kristen</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a31352d3f341a2a3b2f293e7435283d">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-102<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Paley, Joshua</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cda7bdaca1a8b48dbdacb8bea9e3a2bfaa">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-215<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Park, Grace</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5334233221381323322620377d3c2134">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-12<br>Restriction: None<br>0 - </b><br></tr><tr><td>Paronable, Marjorie</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="432e3322312c2d22212f260333223630276d2c3124">[email&#160;protected]</a></td><td>Counseling</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-104<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Patrick, Jeffrey</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="274d574653554e444c67574652544309485540">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-8<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Pennington, Laurie</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="117d61747f7f787f76657e7f5161706462753f7e6376">[email&#160;protected]</a></td><td>Science</td><td class>Room: L1<br>Restriction: None<br>1 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Support with classwork">Support with cla...</span></b><br></tr><tr><td>Peters, Cindy</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="32514257465740417242534741561c5d4055">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-5<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Powell, Maria</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4d9c4dbc3d1d8d8f4c4d5c1c7d09adbc6d3">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-1<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Redfield, Chris</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe9d8c9b9a98979b929abe8e9f8b8d9ad0918c99">[email&#160;protected]</a></td><td>Math</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Rode, Patrick</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f68684999293b68697838592d8998491">[email&#160;protected]</a></td><td>History/SS</td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Sabbag, Kim</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6bda5b7b4b4b7b196a6b7a3a5b2f8b9a4b1">[email&#160;protected]</a></td><td>PE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-2<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Saxena, Karen</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="036870627b666d624373627670672d6c7164">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N213<br>Restriction: None<br>16 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Review for A2TA final">Review for A2TA ...</span></b><br></tr><tr><td>Schroeppel, Claudia</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f89b8b9b908a979d88889d94b888998d8b9cd6978a9f">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: H-2<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Schworetzky, Neeti</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d3bda0b0bba4bca1b6a7a9b8aa93a3b2a6a0b7fdbca1b4">[email&#160;protected]</a></td><td>Science</td><td class="0">Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Sheth, Shilpan</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d2a1a1bab7a6ba92a2b3a7a1b6fcbda0b5">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-9<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Shinh, Arshdeep</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b0a2b9b8bfb991a1b0a4a2b5ffbea3b6">[email&#160;protected]</a></td><td></td><td class>Room: None<br>Restriction: None<br>0 - </b><br></tr><tr><td>Silverbush, Jacquelyn</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="254f564c495340574750564d6555445056410b4a5742">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-210<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Siu, Danning</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9b8c968abf8f9e8a8c9bd1908d98">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-211<br>Restriction: None<br>25 - Tutorial support</b><br></tr><tr><td>Slocum, Dethrick</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed899e81828e9880ad9d8c989e89c3829f8a">[email&#160;protected]</a></td><td>SpEd</td><td class="alert-key5"><b>Type: Tutorial<br>Room: K-15<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Su, Anita</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d6c7e784d7d6c787e6923627f6a">[email&#160;protected]</a></td><td>Art</td><td class="alert-key5"><b>Type: Tutorial<br>Room: M-4<br>Restriction: None<br>30 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="For students to catch up with studio art. Only current art students may enroll during this time.">For students to ...</span></b><br></tr><tr><td>Summers, Todd</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea9e999f87878f9899aa9a8b9f998ec485988d">[email&#160;protected]</a></td><td>VAPA</td><td class="alert-key5"><b>Type: Tutorial<br>Room: S-102<br>Restriction: None<br>20 - Tutorial support</b><br></tr><tr><td>Tabares Ruiz, Daissy</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="47233326252635223407372632342369283520">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: G-7<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Tantod, Gopi</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="127566737c667d765262736761763c7d6075">[email&#160;protected]</a></td><td>Math</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-206<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>TRC</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b7a4b5a7b7b5b8b194a4b5a1a7b0fabba6b3">[email&#160;protected]</a></td><td>Gen Ed</td><td class="alert-key12"><b>Type: <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Quiz/Test Make-Up">Quiz/Test Make-U...</span><br>Room: TRC<br>Restriction: None<br>20 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Please ALSO sign up for testing at http://www.tinyurl.com/GunnStudentTRC">Please ALSO sign...</span></b><br></tr><tr><td>Tucker, Jeanette</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="244e5051474f41566454455157400a4b5643">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-3<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Vrudny, Yanan</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="69101f1b1c0d07102919081c1a0d47061b0e">[email&#160;protected]</a></td><td>WL</td><td class="alert-key5"><b>Type: Tutorial<br>Room: H-4<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Weisman, Mark</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="432e34262a302e222d0333223630276d2c3124">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: V-26<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Wellness Center</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="611302001215080d0d0e2111001412054f0e1306">[email&#160;protected]</a></td><td>Wellness</td><td class="alert-key10"><b>Type: <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Wellness Activity">Wellness Activit...</span><br>Room: P-231<br>Restriction: None<br>20 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Come join us in the Wellness
Center to write inspirational
notes to students! These notes
will be provided to students at
the end of the semester.
Service Hours can be Earned!">Come join us in ...</span></b><br></tr><tr><td>Wells, Jordan</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdd7cad8d1d1cefdcddcc8ced993d2cfda">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-101<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Weymouth, Kate</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce7fbe9f5e1e3f9f8e4ccfcedf9ffe8a2e3feeb">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-110<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Whichard, Danielle</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddb9aab5b4beb5bcafb99dadbca8aeb9f3b2afba">[email&#160;protected]</a></td><td>English</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-109<br>Restriction: None<br>0 - Tutorial support</b><br></tr><tr><td>Xu, Ning</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2ccdad7e2d2c3d7d1c68ccdd0c5">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-5<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Young, Tim</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="15616c7a607b725565746066713b7a6772">[email&#160;protected]</a></td><td></td><td class="alert-key11"><b>Type: Check-In<br>Room: G-3<br>Restriction: None<br>20 - <span data-toggle="tooltip" data-bs-toggle="tooltip" data-placement="bottom" title="Homeroom + Biology + Social Science + Math">Homeroom + Biolo...</span></b><br></tr><tr><td>Yun, Emily</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0f6a767a614f7f6e7a7c6b21607d68">[email&#160;protected]</a></td><td>CTE</td><td class="alert-key5"><b>Type: Tutorial<br>Room: N-213<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Zipperstein, Max</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="177a6d7e676772656463727e7957677662647339786570">[email&#160;protected]</a></td><td>History/Social Studies</td><td class="alert-key5"><b>Type: Tutorial<br>Room: C-7<br>Restriction: None<br>28 - Tutorial support</b><br></tr><tr><td>Zizmor, Elana</td><td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="197c63706374766b5969786c6a7d37766b7e">[email&#160;protected]</a></td><td>Science</td><td class="alert-key5"><b>Type: Tutorial<br>Room: J-7<br>Restriction: None<br>28 - Tutorial support</b><br></tr></tbody></table> </div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
	// initialize all tooltips on the page
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script> </div>

</div>
</div>
<div class="row">


<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
<div class="card card-default">
<div class="card-header h4 m-0">My Groups
<div class="float-xs-left"></div>
</div>
<div class="card-block">
<table id="myGroups" class="table table-striped table-hover table-bordered w-100" cellspacing="0">
<thead>
<tr>
<th style="width: 100%; text-align: center !important;">Group</th>
</tr>
</thead>
<tbody>
<tr><td>10</td></tr><tr><td>Gunn Music</td></tr><tr><td>Peters 10th SELF</td></tr><tr><td>PM Walks</td></tr><tr><td>Gunn Orch Rehearsal</td></tr> </tbody>
</table>
</div>
</div>
</div>
<script>
			var myGroupsTable = $("#myGroups").DataTable({
				scrollX: true,
				orderCellsTop: true,
				fixedHeader: true,
				pagingType: 'listbox',
				renderer: 'bootstrap',
				language: {
					search: '<i class="fa fa-search"></i>',
					lengthMenu: '<div class="input-group input-group-sm"><span class="input-group-addon" id="basic-addon1">Display</span>_MENU_<span class="input-group-addon" id="basic-addon3">Entries</span></div>',
					aria: {
						"sortAscending":  ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					}
				},
				lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']]
			});
		</script>
<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
<div class="card card-default">
<div class="card-header h4 m-0">My Attendance</div>
<div class="card-body">
<table id="myAttendance" class="table table-striped table-hover table-bordered w-100" cellspacing="0">
<thead>
<tr>
<th style="width: 30%; text-align: center !important;">FLEX Offering</th>
<th style="width: 17.5%; text-align: center !important;">Present</th>
<th style="width: 17.5%; text-align: center !important;">Absent</th>
<th style="width: 17.5%; text-align: center !important;">Tardy</th>
<th style="width: 17.5%; text-align: center !important;">Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>Granlund-Moyer, Kristina</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>
<tr>
<td>Hawes, Kathy</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>
<tr>
<td>Ja, Katherine</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>3</td>
</tr>
<tr>
<td>Ou-Ponticelli, Tiffany</td>
<td>2</td>
<td>0</td>
<td>0</td>
<td>2</td>
</tr>
<tr>
<td>Schroeppel, Claudia</td>
<td>12</td>
<td>0</td>
<td>0</td>
<td>12</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div id="checkin-div"></div>

<script>
			var myAttendanceTable = $("#myAttendance").DataTable({
				scrollX: true,
				orderCellsTop: true,
				fixedHeader: true,
				pagingType: 'listbox',
				renderer: 'bootstrap',
				language: {
					search: '<i class="fa fa-search"></i>',
					lengthMenu: '<div class="input-group input-group-sm"><span class="input-group-addon" id="basic-addon1">Display</span>_MENU_<span class="input-group-addon" id="basic-addon3">Entries</span></div>',
					aria: {
						"sortAscending":  ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					}
				},
				lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']]
			});

			/** function to get the attendance check-in modal */
			function getCheckInModal(day, period, flex)
			{
				// create the string of data to send
				var sendString = "day="+day+"&period="+period+"&flex="+flex;

				var xmlhttp;
				if (window.XMLHttpRequest) { xmlhttp=new XMLHttpRequest(); } // code for IE7+, Firefox, Chrome, Opera, Safari
				else { xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); } // code for IE6, IE5
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						$("#checkin-div").html(xmlhttp.responseText);
						$("#checkinModal").modal("show");
					}
				}
				xmlhttp.open("POST","getStudentCheckInModal.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send(sendString);
			}

			/** function to jump to next code after input */
			function focusCodeInput(index)
			{
				// verify input is a number; if so, jump to next box
				if (isNumber($("#code"+index).val()))
				{
					$("#code"+(index + 1)).focus();
				}
			}

			/** 
			 * 	function to check if input is a number 
			 * 	source: https://stackoverflow.com/questions/9716468/pure-javascript-a-function-like-jquerys-isnumeric
			*/
			function isNumber(value)
			{
				return !isNaN(parseFloat(value)) && isFinite(value);
			}

			/** function to let student check-in to their flex offering */
			function checkIn(day, period, flex)
			{
				// get the code ints
				let code = "";
				code += $("#code1").val();
				code += $("#code2").val();
				code += $("#code3").val();
				code += $("#code4").val();
				code += $("#code5").val();
				code += $("#code6").val();

				// create the string of data to send
				var sendString = "day="+day+"&period="+period+"&flex="+flex+"&code="+code;

				// send the request to submit attendance
				var xmlhttp;
				if (window.XMLHttpRequest) { xmlhttp=new XMLHttpRequest(); } // code for IE7+, Firefox, Chrome, Opera, Safari
				else { xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); } // code for IE6, IE5
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						// display the response
						response = JSON.parse(this.responseText);
						createStatusModal("status", "Attendance Check-In Status", response.response);

						// hide the check-in code modal
						$("#checkinModal").modal("hide");
					}
				}
				xmlhttp.open("POST","studentCheckIn.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send(sendString);
			}

			/** function to look for closing/hiding of assembly schedule status modal */
			$(document).on("hide.bs.modal", "#Status_Modal", function() {
				// refresh the page upon status modal close
				window.location.reload();
			});
		</script>
</div>
<div class="row">


<div id="helpModal" class="modal" role="dialog">
<div class="modal-dialog">

<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Help Text Title</h4>
</div>
<div class="modal-body">
<p>No help available on this subject.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-times" aria-hidden="true"></span> Close </button>
</div>
</div>
</div>
</div>


</div>
</section>
</main>

<div id="newPassModal" class="modal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Request Pass For Later</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<div class="row">
<label class="col-4 col-form-label" for="requestReason">Reason: </label>
<div class="form-group col-8">
<input type="text" class="form-control" autocomplete="off" id="requestReason" maxlength="128" />
</div>
</div>
<div class="row">
<label class="col-4 col-form-label" for="startTime">Start Time: </label>
<div class="form-group col-8 input-group date">
<input type="text" class="form-control" id="startTime" />
</div>
</div>
<div class="row">
<label class="col-4 col-form-label" for="endTime">End Time: </label>
<div class="form-group col-8 input-group date">
<input type="text" class="form-control" id="endTime" />
</div>
</div>
<div class="row">
<label class="col-4 col-form-label" for="date">Date: </label>
<div class="form-group col-8">
<div class="input-group">
<input type="date" class="form-control" id="date">
</input>
</div>
</div>
</div>
<div class="row">
<label class="col-4 col-form-label" for="teachers">Request from: </label>
<div class="form-group col-8">
<select id="teachers" class="selectpicker form-control" title="Select a teacher to request a pass from" data-live-search="true" data-size="8">
<option class="bg-muted text-dark" value="IT005.decrecate">Acob, Erwin</option><option class="bg-muted text-dark" value="802888">Aguilar, Jessica</option><option class="bg-muted text-dark" value="807995">Aguirre Aguirre, Julio</option><option class="bg-muted text-dark" value="800043">Ames, Steven</option><option class="bg-muted text-dark" value="804090">Anderson, Amy</option><option class="bg-muted text-dark" value="S0776">Angotti, Tatum</option><option class="bg-muted text-dark" value="800070">Arteaga, Arlena</option><option class="bg-muted text-dark" value="12953">Balas, Gabriela</option><option class="bg-muted text-dark" value="800116">Barana, Neil</option><option class="bg-muted text-dark" value="800117">Barba-Medina, Norma</option><option class="bg-muted text-dark" value="804354">Bautista, Michael</option><option class="bg-muted text-dark" value="808148">Benelli, Jennifer</option><option class="bg-muted text-dark" value="807339">Beresford, Benjamin</option><option class="bg-muted text-dark" value="805565">Bisbee, David</option><option class="bg-muted text-dark" value="800766">Blackburn, Kristy</option><option class="bg-muted text-dark" value="805645">Boyd, Brandon</option><option class="bg-muted text-dark" value="807341">Brassey, Mark</option><option class="bg-muted text-dark" value="800267">Brown, Justin</option><option class="bg-muted text-dark" value="808160">Buck, Victoria</option><option class="bg-muted text-dark" value="806382">Bueno, Andrea</option><option class="bg-muted text-dark" value="807508">Camacho, Maria</option><option class="bg-muted text-dark" value="803714">Carlomagno, Courtney</option><option class="bg-muted text-dark" value="807342">Carroll, Tracie</option><option class="bg-muted text-dark" value="807762">Carter, Eric</option><option class="bg-muted text-dark" value="808190">Cassel, Jennifer</option><option class="bg-muted text-dark" value="806824">Castillo, Rossana</option><option class="bg-muted text-dark" value="806004">Catalano, Kathryn</option><option class="bg-muted text-dark" value="802728">Celis, Olga</option><option class="bg-muted text-dark" value="806383">Chavez, Jorge</option><option class="bg-muted text-dark" value="805636">Cheema, Gagan</option><option class="bg-muted text-dark" value="807344">Choi, Julia</option><option class="bg-muted text-dark" value="800406">Cismas Florea, Cristina</option><option class="bg-muted text-dark" value="804360">Clark, Melissa</option><option class="bg-muted text-dark" value="805124">Clark, Monica</option><option class="bg-muted text-dark" value="805572">Cohn, Catherine</option><option class="bg-muted text-dark" value="806485">Collart, Lisa</option><option class="bg-muted text-dark" value="802708">Collier, Warren</option><option class="bg-muted text-dark" value="800432">Congress, Rachel</option><option class="bg-muted text-dark" value="805573">Conklin, Sandra</option><option class="bg-muted text-dark" value="20688">Cornett, Patricia</option><option class="bg-muted text-dark" value="800450">Corpuz, Edward</option><option class="bg-muted text-dark" value="800469">Creighton, Braumon</option><option class="bg-muted text-dark" value="808151">Cuevas, Cristal</option><option class="bg-muted text-dark" value="800532">Deggeller, David</option><option class="bg-muted text-dark" value="S0794">Desulme, Handell</option><option class="bg-muted text-dark" value="800549">Dias, Christina</option><option class="bg-muted text-dark" value="800550">Dickson, Myesha</option><option class="bg-muted text-dark" value="806226">Dixon, Genavae</option><option class="bg-muted text-dark" value="800001">Dorsey, Latisha</option><option class="bg-muted text-dark" value="800603">Dunlap, Paul</option><option class="bg-muted text-dark" value="804347">Durquet, Marie</option><option class="bg-muted text-dark" value="803420">Eggert, Christopher</option><option class="bg-muted text-dark" value="803621">Ellington, Jennifer</option><option class="bg-muted text-dark" value="805578">Fidani, Jonathan</option><option class="bg-muted text-dark" value="805579">Firenzi, Tara</option><option class="bg-muted text-dark" value="800692">Fitzhugh, Angelina</option><option class="bg-muted text-dark" value="806828">Fontes, Wade</option><option class="bg-muted text-dark" value="806504">Ford, Christopher</option><option class="bg-muted text-dark" value="806921">Francis, Makiya</option><option class="bg-muted text-dark" value="800734">Friedland, Scott</option><option class="bg-muted text-dark" value="805184">Garcia, Megan</option><option class="bg-muted text-dark" value="800772">Garger, Gabriela</option><option class="bg-muted text-dark" value="805554">Garibay Diaz, Erika</option><option class="bg-muted text-dark" value="805158">Gill, Daljeet</option><option class="bg-muted text-dark" value="800818">Gleason, Mark</option><option class="bg-muted text-dark" value="805034">Gleeson, Clare</option><option class="bg-muted text-dark" value="800820">Glover, Lynn</option><option class="bg-muted text-dark" value="807356">Gomez, Lorenzo</option><option class="bg-muted text-dark" value="803619">Gonzalez Barrios, Ana Maria</option><option class="bg-muted text-dark" value="807357">Gonzalez, Briana</option><option class="bg-muted text-dark" value="804031">Granlund-Moyer, Kristina</option><option class="bg-muted text-dark" value="808183">Grim, Tomas</option><option class="bg-muted text-dark" value="804179">Griswold, Silvia</option><option class="bg-muted text-dark" value="803017">Hahn, Daniel</option><option class="bg-muted text-dark" value="800890">Hall, Lisa</option><option class="bg-muted text-dark" value="803607">Hall, Matthew</option><option class="bg-muted text-dark" value="804195">Halter, Ethan</option><option class="bg-muted text-dark" value="807363">Hanie, TK</option><option class="bg-muted text-dark" value="800935">Hawes, Kathy</option><option class="bg-muted text-dark" value="800967">Hernandez, Luciano</option><option class="bg-muted text-dark" value="800968">Hernandez, Mark</option><option class="bg-muted text-dark" value="800975">Hesterman, Norma</option><option class="bg-muted text-dark" value="808152">Hickey, Paul</option><option class="bg-muted text-dark" value="808089">Hixon, Mycal</option><option class="bg-muted text-dark" value="807744">Hlasek, Michaela</option><option class="bg-muted text-dark" value="804371">Holdener, Shaina</option><option class="bg-muted text-dark" value="800276">Holmes, Patricia</option><option class="bg-muted text-dark" value="808206">Hong, Jason</option><option class="bg-muted text-dark" value="805592">Howard, Laurel</option><option class="bg-muted text-dark" value="801040">Ichikawa, Diane</option><option class="bg-muted text-dark" value="806016">Ja, Katherine</option><option class="bg-muted text-dark" value="S0742">Jackson, Michelle</option><option class="bg-muted text-dark" value="807881">Jacoubowsky, Bryce</option><option class="bg-muted text-dark" value="805639">Jamison, Marcus</option><option class="bg-muted text-dark" value="805199">Johansen, Curtis</option><option class="bg-muted text-dark" value="804373">Johanson, Derek</option><option class="bg-muted text-dark" value="801080">Johnson, Christopher</option><option class="bg-muted text-dark" value="802034">Kaci, Rachael</option><option class="bg-muted text-dark" value="805597">Kaneko, Takeshi</option><option class="bg-muted text-dark" value="S0759">Kaur, Sukhwinder</option><option class="bg-muted text-dark" value="807164">Keinath, Andrea</option><option class="bg-muted text-dark" value="807471">Kelly, Camille</option><option class="bg-muted text-dark" value="805438">Kibler, Austin</option><option class="bg-muted text-dark" value="806732">Kim, Susan</option><option class="bg-muted text-dark" value="801171">Kinyanjui, Arthur</option><option class="bg-muted text-dark" value="804376">Kitada, Terence</option><option class="bg-muted text-dark" value="801185">Knaack, Kim</option><option class="bg-muted text-dark" value="807694">Kochenderfer, Mary Anne</option><option class="bg-muted text-dark" value="801194">Kofman, Stacey</option><option class="bg-muted text-dark" value="801202">Kousnetz, Leslie</option><option class="bg-muted text-dark" value="801236">Lang, Leighton</option><option class="bg-muted text-dark" value="808181">Larson, Abby</option><option class="bg-muted text-dark" value="804400">Lee, Danny</option><option class="bg-muted text-dark" value="803611">Lee, Jena</option><option class="bg-muted text-dark" value="807747">Lefevre, Laura</option><option class="bg-muted text-dark" value="805217">Leftwich, David</option><option class="bg-muted text-dark" value="808157">Letner, Alexis</option><option class="bg-muted text-dark" value="801309">Lewis, Sandra</option><option class="bg-muted text-dark" value="S0500">Li, Calvin</option><option class="bg-muted text-dark" value="806649">Libbey, Liz</option><option class="bg-muted text-dark" value="801313">Liberatore, William</option><option class="bg-muted text-dark" value="801327">Limburg, Florina</option><option class="bg-muted text-dark" value="801333">Linsdell, Dawna</option><option class="bg-muted text-dark" value="806025">Little, Joshua</option><option class="bg-muted text-dark" value="805159">Lizundia, Laura</option><option class="bg-muted text-dark" value="801342">Lo, Kristen</option><option class="bg-muted text-dark" value="804737">Lo, Tzuhuei</option><option class="bg-muted text-dark" value="807442">Loomis, Audrey</option><option class="bg-muted text-dark" value="801375">Lyons, Philip</option><option class="bg-muted text-dark" value="801386">Magid-Gutkin, Sophie</option><option class="bg-muted text-dark" value="80443">Mahbuba, Tahsina</option><option class="bg-muted text-dark" value="803610">Mahle, Christopher</option><option class="bg-muted text-dark" value="12659">Mahpour, Lisa</option><option class="bg-muted text-dark" value="801393">Main, Carole</option><option class="bg-muted text-dark" value="806026">Malatesta, Bridgette</option><option class="bg-muted text-dark" value="807323">Martinez, Jon</option><option class="bg-muted text-dark" value="807681">Martinez, Keanna</option><option class="bg-muted text-dark" value="801429">Matchett, Elizabeth</option><option class="bg-muted text-dark" value="800272">Matta, Nora</option><option class="bg-muted text-dark" value="807364">McDonnell, Savannah</option><option class="bg-muted text-dark" value="801476">McGinn, Matthew</option><option class="bg-muted text-dark" value="806400">McGinn, Shawn</option><option class="bg-muted text-dark" value="801502">Mellows, Heather</option><option class="bg-muted text-dark" value="805843">Melvin, Christopher</option><option class="bg-muted text-dark" value="800424">Menache, Nicole</option><option class="bg-muted text-dark" value="20498">Mendoza, Mayra</option><option class="bg-muted text-dark" value="801510">Merchant, Angela</option><option class="bg-muted text-dark" value="803315">Miller, Gregory</option><option class="bg-muted text-dark" value="808131">Min, Yujin</option><option class="bg-muted text-dark" value="804001">Modica, Diana</option><option class="bg-muted text-dark" value="808192">Montalvo-Torres, Joyce</option><option class="bg-muted text-dark" value="801572">Moyer, Virginia</option><option class="bg-muted text-dark" value="807573">Mulingtapang, Bjorn</option><option class="bg-muted text-dark" value="801570">Munger, Julie</option><option class="bg-muted text-dark" value="805358">Munoz, Chris</option><option class="bg-muted text-dark" value="805543">Nelson, Adam</option><option class="bg-muted text-dark" value="806370">Newland, Harvey</option><option class="bg-muted text-dark" value="803310">Nino Oliva, Teresa</option><option class="bg-muted text-dark" value="807796">Norberg, Christina</option><option class="bg-muted text-dark" value="801650">O'Connell, Casey</option><option class="bg-muted text-dark" value="12725">Ochoa, Dennis</option><option class="bg-muted text-dark" value="806510">Olson, James</option><option class="bg-muted text-dark" value="807055">Ordonez, Jose</option><option class="bg-muted text-dark" value="804024">Ou-Ponticelli, Tiffany</option><option class="bg-muted text-dark" value="807193">Owen, Janet</option><option class="bg-muted text-dark" value="800946">Owen, Kristen</option><option class="bg-muted text-dark" value="801690">Paley, Joshua</option><option class="bg-muted text-dark" value="801698">Park, Grace</option><option class="bg-muted text-dark" value="805608">Paronable, Marjorie</option><option class="bg-muted text-dark" value="800009">Pascale, Carli</option><option class="bg-muted text-dark" value="807679">Pascucci, Myriam</option><option class="bg-muted text-dark" value="805165">Patrick, Jeffrey</option><option class="bg-muted text-dark" value="S0804">Pelayo, Vanessa</option><option class="bg-muted text-dark" value="807217">Pena, Rosanna</option><option class="bg-muted text-dark" value="801724">Pennington, Laurie</option><option class="bg-muted text-dark" value="806040">Perkins, Haley</option><option class="bg-muted text-dark" value="801736">Peters, Cindy</option><option class="bg-muted text-dark" value="806563">Phu, Julius</option><option class="bg-muted text-dark" value="801789">Powell, Maria</option><option class="bg-muted text-dark" value="807856">Ramirez, Luzviminda</option><option class="bg-muted text-dark" value="807429">Ramos, Michelle</option><option class="bg-muted text-dark" value="805819">Raptis, Sofia</option><option class="bg-muted text-dark" value="801833">Redfield, Christopher</option><option class="bg-muted text-dark" value="801847">Renazco, Daisy</option><option class="bg-muted text-dark" value="S0651">Rippey, Kiana</option><option class="bg-muted text-dark" value="805907">Robinson, Rodney</option><option class="bg-muted text-dark" value="806252">Rode, Patrick</option><option class="bg-muted text-dark" value="805282">Rodriguez, Brandymae</option><option class="bg-muted text-dark" value="805166">Ross, Cora</option><option class="bg-muted text-dark" value="807802">Rossillon, Matthew</option><option class="bg-muted text-dark" value="S0711">Runser, Skyles</option><option class="bg-muted text-dark" value="807862">Rupe, Kelly</option><option class="bg-muted text-dark" value="801928">Sabbag, Kimberly</option><option class="bg-muted text-dark" value="803034">Salcedo Aguirre, Ernesto</option><option class="bg-muted text-dark" value="802642">Sanchez Barrera, Jorge</option><option class="bg-muted text-dark" value="808050">Sanchez de Ortega, Adriana</option><option class="bg-muted text-dark" value="S0780">Sani, Sofia</option><option class="bg-muted text-dark" value="801973">Saxena, Karen</option><option class="bg-muted text-dark" value="804635">Schroeppel, Claudia</option><option class="bg-muted text-dark" value="804343">Schworetzky, Navneet</option><option class="bg-muted text-dark" value="802014">Selznick, Howard</option><option class="bg-muted text-dark" value="805471">Seoane, Marta</option><option class="bg-muted text-dark" value="801601">Sharma, Ambika</option><option class="bg-muted text-dark" value="804791">Shen Lorenson, Rebecca</option><option class="bg-muted text-dark" value="803986">Sheridan, Angeline</option><option class="bg-muted text-dark" value="808110">Sheth, Shilpan</option><option class="bg-muted text-dark" value="804755">Shinh, Arshdeep</option><option class="bg-muted text-dark" value="807746">Silverbush, Jacquelyn</option><option class="bg-muted text-dark" value="806865">Siu, Danning</option><option class="bg-muted text-dark" value="807711">Slocum, Dethrick</option><option class="bg-muted text-dark" value="800375">Smith, Ofelia</option><option class="bg-muted text-dark" value="802111">Srinivasan, Florence</option><option class="bg-muted text-dark" value="801829">Steward, Pam</option><option class="bg-muted text-dark" value="21598">Stoneham, Michael</option><option class="bg-muted text-dark" value="806799">Stratton, Wendy</option><option class="bg-muted text-dark" value="807801">Su, Anita</option><option class="bg-muted text-dark" value="802158">Summers, Todd</option><option class="bg-muted text-dark" value="805742">Swauger, Ryan</option><option class="bg-muted text-dark" value="804804">Tabares Ruiz, Daissy</option><option class="bg-muted text-dark" value="807942">Tabel, Brittney</option><option class="bg-muted text-dark" value="805262">Talbot, Katherine</option><option class="bg-muted text-dark" value="803297">Tantod, Gopi</option><option class="bg-muted text-dark" value="807326">Thampuran, Radhika</option><option class="bg-muted text-dark" value="803602">Tucker, Jeanette</option><option class="bg-muted text-dark" value="808295">Velazquez-Mendoza, Stephanie</option><option class="bg-muted text-dark" value="804730">Vidonia, Nestor</option><option class="bg-muted text-dark" value="802310">Vrudny, Yanan</option><option class="bg-muted text-dark" value="S0720">Wang, Fei</option><option class="bg-muted text-dark" value="808059">Warren, Danielle</option><option class="bg-muted text-dark" value="808180">Warren, Jennifer</option><option class="bg-muted text-dark" value="807707">Watanabe, Evan</option><option class="bg-muted text-dark" value="802339">Weisman, Mark</option><option class="bg-muted text-dark" value="806913">Wells Akis, Jennifer</option><option class="bg-muted text-dark" value="801030">Wells, Jordan</option><option class="bg-muted text-dark" value="808225">Wentworth, Dimitri</option><option class="bg-muted text-dark" value="806049">Weymouth, Kate</option><option class="bg-muted text-dark" value="804786">Whichard, Danielle</option><option class="bg-muted text-dark" value="802381">Wilson, Melinda</option><option class="bg-muted text-dark" value="805717">Wong, Alli</option><option class="bg-muted text-dark" value="808111">Xu, Ning</option><option class="bg-muted text-dark" value="806626">Young Nicholson, Alana</option><option class="bg-muted text-dark" value="807394">Young, Timothy</option><option class="bg-muted text-dark" value="804395">Yun, Emily</option><option class="bg-muted text-dark" value="802592">Zaidi, Syedali</option><option class="bg-muted text-dark" value="806442">Zake, Baiba</option><option class="bg-muted text-dark" value="803784">Zipperstein, Max</option><option class="bg-muted text-dark" value="803630">Zizmor, Elana</option> </select>
</div>
</div>
<div class="row">
<label class="col-4 col-form-label" for="teachers">Destination: </label>
<div class="form-group col-8">
<select id="requestDestination" class="selectpicker form-control" title="Select a destination" data-live-search="true" data-size="8">
<optgroup class="text-dark" label="Recents">
</optgroup>
<optgroup class="text-dark" label="Hall">
<option class="text-dark" value="1" data-type="Hall">Bathroom</option><option class="text-dark" value="2" data-type="Hall">Locker</option><option class="text-dark" value="3" data-type="Hall">Office</option><option class="text-dark" value="4" data-type="Hall">Water Fountain</option> <option class="text-dark" value="other" data-type="Other">Other</option>
</optgroup>
<optgroup class="text-dark" label="Teachers">
<option class="text-dark" value="95044396" data-type="Teacher">Aarhus, Amee</option><option class="text-dark" value="95031193" data-type="Teacher">Abilock, Remi</option><option class="text-dark" value="95033003" data-type="Teacher">Abraham, Jess</option><option class="text-dark" value="95031381" data-type="Teacher">Abramitzky, Ido</option><option class="text-dark" value="95051050" data-type="Teacher">Abran, Isabelle</option><option class="text-dark" value="95045711" data-type="Teacher">Abu-Dayeh, Deena</option><option class="text-dark" value="95043910" data-type="Teacher">Acosta Perez, Juan</option><option class="text-dark" value="95030776" data-type="Teacher">Adams, Felix</option><option class="text-dark" value="95030438" data-type="Teacher">Adelman, Avery</option><option class="text-dark" value="95030439" data-type="Teacher">Adelman, Ben</option><option class="text-dark" value="95034833" data-type="Teacher">Adle, Miles</option><option class="text-dark" value="95037135" data-type="Teacher">Afar, Talya</option><option class="text-dark" value="95047872" data-type="Teacher">Agarwal, Ayush</option><option class="text-dark" value="95046399" data-type="Teacher">Aggarwal, Tanush</option><option class="text-dark" value="95035230" data-type="Teacher">Agrawal, Anika</option><option class="text-dark" value="95046023" data-type="Teacher">Agro, Francesca</option><option class="text-dark" value="95043561" data-type="Teacher">Aguilar Romero, Bethzy</option><option class="text-dark" value="95038407" data-type="Teacher">Aguirre Tapia, Joshua</option><option class="text-dark" value="95044290" data-type="Teacher">Ahmad, Tanveer</option><option class="text-dark" value="95051961" data-type="Teacher">Ahmed, Inaaya</option><option class="text-dark" value="95034314" data-type="Teacher">Ahmed, Jenna</option><option class="text-dark" value="95052272" data-type="Teacher">Akahori, Keigo</option><option class="text-dark" value="95032149" data-type="Teacher">Akhlaq, Madeena</option><option class="text-dark" value="95035276" data-type="Teacher">Akhlaq, Omar</option><option class="text-dark" value="95051198" data-type="Teacher">Akin, Cole</option><option class="text-dark" value="95043912" data-type="Teacher">Alam, Daniel</option><option class="text-dark" value="95036145" data-type="Teacher">Alam, Jasmine</option><option class="text-dark" value="95031014" data-type="Teacher">Albers, Nina</option><option class="text-dark" value="95033311" data-type="Teacher">Albrecht, Evangeline</option><option class="text-dark" value="95048291" data-type="Teacher">Alimi, Tajudeen</option><option class="text-dark" value="95053408" data-type="Teacher">Alishahian, Lilia</option><option class="text-dark" value="95030779" data-type="Teacher">Alvidrez, Ari</option><option class="text-dark" value="95055456" data-type="Teacher">Amgalan, Anun</option><option class="text-dark" value="95051229" data-type="Teacher">An, Hyunchan</option><option class="text-dark" value="95036847" data-type="Teacher">Anand, Adi</option><option class="text-dark" value="95047477" data-type="Teacher">Anand, Rrishi</option><option class="text-dark" value="95032785" data-type="Teacher">Andrews, Anthony</option><option class="text-dark" value="95053940" data-type="Teacher">Anisimov, Demian</option><option class="text-dark" value="95034344" data-type="Teacher">Antonov, Konstantin</option><option class="text-dark" value="95032935" data-type="Teacher">Arad, Tamara</option><option class="text-dark" value="95054000" data-type="Teacher">Araque Suarez, Yeferxon</option><option class="text-dark" value="95036104" data-type="Teacher">Araya, Yeabsera</option><option class="text-dark" value="95035036" data-type="Teacher">Arditi, Lia</option><option class="text-dark" value="95036659" data-type="Teacher">Armel, Leonardo</option><option class="text-dark" value="95053501" data-type="Teacher">Armstrong, Richard</option><option class="text-dark" value="95037473" data-type="Teacher">Arocha, Elena</option><option class="text-dark" value="95037054" data-type="Teacher">Asay, Jayden</option><option class="text-dark" value="95035901" data-type="Teacher">Ashley, Katryn</option><option class="text-dark" value="95047773" data-type="Teacher">Ashour, Omar</option><option class="text-dark" value="95038627" data-type="Teacher">Ashworth, Alexander</option><option class="text-dark" value="95029546" data-type="Teacher">Asmat, Benjamin</option><option class="text-dark" value="95030823" data-type="Teacher">Assimes, Christina</option><option class="text-dark" value="95055922" data-type="Teacher">Ayres, Atticus</option><option class="text-dark" value="95037965" data-type="Teacher">Azab, Omar</option><option class="text-dark" value="95051871" data-type="Teacher">Bach, Julius</option><option class="text-dark" value="95043528" data-type="Teacher">Baday, Yusuf</option><option class="text-dark" value="95045523" data-type="Teacher">Bae, Alex</option><option class="text-dark" value="95035689" data-type="Teacher">Bae, Hana</option><option class="text-dark" value="95034927" data-type="Teacher">Baek, Ryan</option><option class="text-dark" value="95040302" data-type="Teacher">Bai, Xiangxiang</option><option class="text-dark" value="95034980" data-type="Teacher">Ballew, Parker</option><option class="text-dark" value="95037007" data-type="Teacher">Barbier, Claire</option><option class="text-dark" value="95030453" data-type="Teacher">Barbier, Raphael</option><option class="text-dark" value="95037056" data-type="Teacher">Barczynska, Lena</option><option class="text-dark" value="95042459" data-type="Teacher">Barlev, Ilai</option><option class="text-dark" value="95053312" data-type="Teacher">Barros, Kepler Dionisio</option><option class="text-dark" value="95051922" data-type="Teacher">Basil, Shane</option><option class="text-dark" value="95043913" data-type="Teacher">Bassey, Logan</option><option class="text-dark" value="95038204" data-type="Teacher">Battulga, Aminjin</option><option class="text-dark" value="95047950" data-type="Teacher">Baugh, Joshua</option><option class="text-dark" value="95034878" data-type="Teacher">Baum, Hannah</option><option class="text-dark" value="95053283" data-type="Teacher">Beahn, Ethan</option><option class="text-dark" value="95035383" data-type="Teacher">Becker, Raymond</option><option class="text-dark" value="95042166" data-type="Teacher">Beery, Margaret</option><option class="text-dark" value="95030975" data-type="Teacher">Bejerano, Omry</option><option class="text-dark" value="95033359" data-type="Teacher">Bekkers, Luke</option><option class="text-dark" value="95037475" data-type="Teacher">Bell, Catherine</option><option class="text-dark" value="95046067" data-type="Teacher">Bellot, Brando</option><option class="text-dark" value="95032588" data-type="Teacher">Belwal, Aadi</option><option class="text-dark" value="95043040" data-type="Teacher">Ben Tovim, Emmi</option><option class="text-dark" value="95036666" data-type="Teacher">Berger, Audrey</option><option class="text-dark" value="95051479" data-type="Teacher">Bergeson, Winona</option><option class="text-dark" value="95034865" data-type="Teacher">Besprosvan, Alma Mia</option><option class="text-dark" value="95053828" data-type="Teacher">Betancur-Arroyave, Juan-Manuel</option><option class="text-dark" value="95036867" data-type="Teacher">Bhalla, Rania</option><option class="text-dark" value="95036548" data-type="Teacher">Bhalla, Zain</option><option class="text-dark" value="95045321" data-type="Teacher">Bharadwaj, Om</option><option class="text-dark" value="95032744" data-type="Teacher">Bhargava, Alexander</option><option class="text-dark" value="95048159" data-type="Teacher">Bhargava, Rhea</option><option class="text-dark" value="95036773" data-type="Teacher">Bhat, Vinayak</option><option class="text-dark" value="95034780" data-type="Teacher">Bhatia, Anoushka</option><option class="text-dark" value="95052148" data-type="Teacher">Bhattacharya, Ujaani</option><option class="text-dark" value="95036748" data-type="Teacher">Bhave, Varun</option><option class="text-dark" value="95032594" data-type="Teacher">Bhushan, Aarya</option><option class="text-dark" value="95036093" data-type="Teacher">Bhushan, Tara</option><option class="text-dark" value="95053959" data-type="Teacher">Biadglegne, Solyana</option><option class="text-dark" value="95032781" data-type="Teacher">Bian, Sophia</option><option class="text-dark" value="95053417" data-type="Teacher">Bianka, Aurona</option><option class="text-dark" value="95048888" data-type="Teacher">Bibo, Katelyn</option><option class="text-dark" value="95041976" data-type="Teacher">Bisbee, Taylor</option><option class="text-dark" value="95033353" data-type="Teacher">Bite, Amelie</option><option class="text-dark" value="95051265" data-type="Teacher">Biyikoglu, Lara</option><option class="text-dark" value="95042536" data-type="Teacher">Blanchet, Martin</option><option class="text-dark" value="95036898" data-type="Teacher">Bogart, Samuel</option><option class="text-dark" value="95033030" data-type="Teacher">Bogart, Tessa</option><option class="text-dark" value="95030704" data-type="Teacher">Boling, Vincent</option><option class="text-dark" value="95033048" data-type="Teacher">Bopitiya, Kalmith</option><option class="text-dark" value="95036110" data-type="Teacher">Borthakur, Triveni</option><option class="text-dark" value="95031352" data-type="Teacher">Bose-Malakar, Diya</option><option class="text-dark" value="95034840" data-type="Teacher">Bouguet, Giselle</option><option class="text-dark" value="95036879" data-type="Teacher">Boyce, Elliot</option><option class="text-dark" value="95030858" data-type="Teacher">Bracamontes, Andre-xavier</option><option class="text-dark" value="95052557" data-type="Teacher">Bransi, Zoe</option><option class="text-dark" value="95034880" data-type="Teacher">Brants, Niklas</option><option class="text-dark" value="95037293" data-type="Teacher">Brembilla, Elisa</option><option class="text-dark" value="95040459" data-type="Teacher">Brest, Joshua</option><option class="text-dark" value="95039566" data-type="Teacher">Briones, Amiel</option><option class="text-dark" value="95052199" data-type="Teacher">Bronstein, Eliot</option><option class="text-dark" value="95039811" data-type="Teacher">Brouchoud, Anthony</option><option class="text-dark" value="95031161" data-type="Teacher">Brougham, Elise</option><option class="text-dark" value="95035480" data-type="Teacher">Brown, Anna</option><option class="text-dark" value="95030242" data-type="Teacher">Brown, Sophie</option><option class="text-dark" value="95047847" data-type="Teacher">Bryant, Gwen</option><option class="text-dark" value="95040489" data-type="Teacher">Bucio Hernandez, Omar</option><option class="text-dark" value="95040488" data-type="Teacher">Bucio-Hernandez, Giesel</option><option class="text-dark" value="95037973" data-type="Teacher">Budas, Callum</option><option class="text-dark" value="95033527" data-type="Teacher">Buka, Sofia</option><option class="text-dark" value="95033466" data-type="Teacher">Bukchin, Jennifer</option><option class="text-dark" value="95037703" data-type="Teacher">Bukowski, Richard</option><option class="text-dark" value="95032901" data-type="Teacher">Burton, Griffin</option><option class="text-dark" value="95036667" data-type="Teacher">Bush, Nikolai</option><option class="text-dark" value="95055142" data-type="Teacher">Caal Ortega, Yankee</option><option class="text-dark" value="95040956" data-type="Teacher">Cai, Caitlin</option><option class="text-dark" value="95030977" data-type="Teacher">Caldera, Natalia</option><option class="text-dark" value="95050000" data-type="Teacher">Calundan, Mark</option><option class="text-dark" value="95040642" data-type="Teacher">Calvert, William</option><option class="text-dark" value="95030657" data-type="Teacher">Cammack, Catherine</option><option class="text-dark" value="95045667" data-type="Teacher">Cantrell, Kelson</option><option class="text-dark" value="95030831" data-type="Teacher">Cao, Emma</option><option class="text-dark" value="95040615" data-type="Teacher">Cao, Orlando</option><option class="text-dark" value="95043618" data-type="Teacher">Cappella-Pimor, Paul</option><option class="text-dark" value="95043619" data-type="Teacher">Cappella-Pimor, Timon</option><option class="text-dark" value="95038268" data-type="Teacher">Carbone, Matteo</option><option class="text-dark" value="95044614" data-type="Teacher">Carlson, Donovan</option><option class="text-dark" value="95035385" data-type="Teacher">Carlsson, Linus</option><option class="text-dark" value="95033585" data-type="Teacher">Caroselli, Riku</option><option class="text-dark" value="95034883" data-type="Teacher">Carragee, Clara</option><option class="text-dark" value="95033318" data-type="Teacher">Carranza Garcia, Valentin</option><option class="text-dark" value="95031019" data-type="Teacher">Carrillo, Daisy</option><option class="text-dark" value="95031051" data-type="Teacher">Casale, Ethan</option><option class="text-dark" value="95035436" data-type="Teacher">Casale, Hannah</option><option class="text-dark" value="95031235" data-type="Teacher">Castillo Baltazar, Stephanie</option><option class="text-dark" value="95031119" data-type="Teacher">Castillo-Denker, Yara</option><option class="text-dark" value="95051398" data-type="Teacher">Castro, Jaslene</option><option class="text-dark" value="95053683" data-type="Teacher">Cawley Morris, Ani</option><option class="text-dark" value="95043795" data-type="Teacher">Cendon Rodriguez, Ines</option><option class="text-dark" value="95030524" data-type="Teacher">Ceniceros, Sergio</option><option class="text-dark" value="95039753" data-type="Teacher">Cha, Hamin</option><option class="text-dark" value="95036926" data-type="Teacher">Chakos-Mitchell, Sophia</option><option class="text-dark" value="95030523" data-type="Teacher">Chakraborty, Ciara</option><option class="text-dark" value="95032622" data-type="Teacher">Chan, Chloe</option><option class="text-dark" value="95030541" data-type="Teacher">Chan, Kaia</option><option class="text-dark" value="95032770" data-type="Teacher">Chan, Keiss</option><option class="text-dark" value="95034694" data-type="Teacher">Chan, Leia</option><option class="text-dark" value="95034609" data-type="Teacher">Chan, Natalie</option><option class="text-dark" value="95034785" data-type="Teacher">Chan, Ryker</option><option class="text-dark" value="95048894" data-type="Teacher">Chan, Tse-Wei</option><option class="text-dark" value="95030455" data-type="Teacher">Chang, Alexander</option><option class="text-dark" value="95034610" data-type="Teacher">Chang, Angelise</option><option class="text-dark" value="95033211" data-type="Teacher">Chang, Antonio</option><option class="text-dark" value="95036851" data-type="Teacher">Chang, Claire</option><option class="text-dark" value="95042545" data-type="Teacher">Chang, Elise</option><option class="text-dark" value="95034982" data-type="Teacher">Chang, Emerson</option><option class="text-dark" value="95036673" data-type="Teacher">Chang, Ethan</option><option class="text-dark" value="95052800" data-type="Teacher">Chang, Hsuan Yu</option><option class="text-dark" value="95031302" data-type="Teacher">Chang, Marcello</option><option class="text-dark" value="95039409" data-type="Teacher">Chang, McKenna</option><option class="text-dark" value="95032967" data-type="Teacher">Chang, Riley</option><option class="text-dark" value="95036675" data-type="Teacher">Chang, Tristan</option><option class="text-dark" value="95055307" data-type="Teacher">Chanthery, An</option><option class="text-dark" value="95055306" data-type="Teacher">Chanthery, Uyen</option><option class="text-dark" value="95038719" data-type="Teacher">Chau, Chilton</option><option class="text-dark" value="95035736" data-type="Teacher">Chaube, Yash</option><option class="text-dark" value="95052209" data-type="Teacher">Chaudhary, Riya</option><option class="text-dark" value="95030285" data-type="Teacher">Chaudhry, Kaamil</option><option class="text-dark" value="95048169" data-type="Teacher">Chauhan, Ahaana</option><option class="text-dark" value="95032554" data-type="Teacher">Chee, Aiden</option><option class="text-dark" value="95045609" data-type="Teacher">Chen, Angus</option><option class="text-dark" value="95032931" data-type="Teacher">Chen, Aydan</option><option class="text-dark" value="95042303" data-type="Teacher">Chen, Cindy</option><option class="text-dark" value="95031357" data-type="Teacher">Chen, Dave</option><option class="text-dark" value="95031098" data-type="Teacher">Chen, Ethan</option><option class="text-dark" value="95028413" data-type="Teacher">Chen, Ethan</option><option class="text-dark" value="95044299" data-type="Teacher">Chen, Fengshuangze</option><option class="text-dark" value="95041167" data-type="Teacher">Chen, Hanxi</option><option class="text-dark" value="95054157" data-type="Teacher">Chen, Hongming</option><option class="text-dark" value="95034933" data-type="Teacher">Chen, Jason</option><option class="text-dark" value="95038016" data-type="Teacher">Chen, Jianan</option><option class="text-dark" value="95030352" data-type="Teacher">Chen, Joel</option><option class="text-dark" value="95045372" data-type="Teacher">Chen, Kaila</option><option class="text-dark" value="95030457" data-type="Teacher">Chen, Kaitlyn</option><option class="text-dark" value="95046426" data-type="Teacher">Chen, Kevan</option><option class="text-dark" value="95044638" data-type="Teacher">Chen, Lukas</option><option class="text-dark" value="95035159" data-type="Teacher">Chen, Miles</option><option class="text-dark" value="95027392" data-type="Teacher">Chen, Peyton</option><option class="text-dark" value="95040998" data-type="Teacher">Chen, Tingrun</option><option class="text-dark" value="95030505" data-type="Teacher">Chen, Vivien</option><option class="text-dark" value="95046340" data-type="Teacher">Chen, Yiyang</option><option class="text-dark" value="95034935" data-type="Teacher">Cheng, Andrew</option><option class="text-dark" value="95037171" data-type="Teacher">Cheng, Justin</option><option class="text-dark" value="95041273" data-type="Teacher">Cheng, Kaylee</option><option class="text-dark" value="95037228" data-type="Teacher">Cheng, Noah</option><option class="text-dark" value="95032798" data-type="Teacher">Cheng, Noah</option><option class="text-dark" value="95053284" data-type="Teacher">Cherukumilli, Misha</option><option class="text-dark" value="95053658" data-type="Teacher">Cheung, Ian</option><option class="text-dark" value="95053659" data-type="Teacher">Cheung, Jamie</option><option class="text-dark" value="95030593" data-type="Teacher">Cheung, Madeline</option><option class="text-dark" value="95037282" data-type="Teacher">Cheung, Serena</option><option class="text-dark" value="95037283" data-type="Teacher">Cheung, Vallerie</option><option class="text-dark" value="95033072" data-type="Teacher">Cheunkarndee, Laura</option><option class="text-dark" value="95035120" data-type="Teacher">Chi, Katie</option><option class="text-dark" value="95043943" data-type="Teacher">Chi, Patrick</option><option class="text-dark" value="95044091" data-type="Teacher">Chiang, Caroline</option><option class="text-dark" value="95031021" data-type="Teacher">Chiang, Jacquelyn</option><option class="text-dark" value="95044092" data-type="Teacher">Chiang, John</option><option class="text-dark" value="95031022" data-type="Teacher">Chiang, Julia</option><option class="text-dark" value="95037250" data-type="Teacher">Chin, Connor</option><option class="text-dark" value="95033025" data-type="Teacher">Chin, Justin</option><option class="text-dark" value="95036681" data-type="Teacher">Chin, Lauren</option><option class="text-dark" value="95033698" data-type="Teacher">Chin, Zachary</option><option class="text-dark" value="95036683" data-type="Teacher">Chiu, Aiden</option><option class="text-dark" value="95037917" data-type="Teacher">Chiu, Jacob</option><option class="text-dark" value="95038309" data-type="Teacher">Chlala-Lubbe, Hanako</option><option class="text-dark" value="95030594" data-type="Teacher">Cho, Kaden</option><option class="text-dark" value="95038157" data-type="Teacher">Cho, Woojin</option><option class="text-dark" value="95051435" data-type="Teacher">Choi, Elliot</option><option class="text-dark" value="95045934" data-type="Teacher">Choi, Eunho</option><option class="text-dark" value="95049565" data-type="Teacher">Choi, Hongsuk</option><option class="text-dark" value="95051201" data-type="Teacher">Choi, Juhyuk</option><option class="text-dark" value="95052915" data-type="Teacher">Choi, Wonho</option><option class="text-dark" value="95030939" data-type="Teacher">Chong, Hayden</option><option class="text-dark" value="95035076" data-type="Teacher">Chow, Evelyn</option><option class="text-dark" value="95030860" data-type="Teacher">Chow, Michael</option><option class="text-dark" value="95039802" data-type="Teacher">Chow, Nikolaos</option><option class="text-dark" value="95037425" data-type="Teacher">Chow, Taiga</option><option class="text-dark" value="95030458" data-type="Teacher">Chowdhury, Aiden</option><option class="text-dark" value="95051388" data-type="Teacher">Chowdhury, Haridas</option><option class="text-dark" value="95052082" data-type="Teacher">Chu, Alison</option><option class="text-dark" value="95053652" data-type="Teacher">Chu, Jiyang</option><option class="text-dark" value="95032858" data-type="Teacher">Chumakov, Gene</option><option class="text-dark" value="95047495" data-type="Teacher">Chung, Dante</option><option class="text-dark" value="95046295" data-type="Teacher">Chung, Ian</option><option class="text-dark" value="95035711" data-type="Teacher">Chung, Jaein</option><option class="text-dark" value="95025757" data-type="Teacher">Clark, Elijah</option><option class="text-dark" value="95036168" data-type="Teacher">Cong, Maggie</option><option class="text-dark" value="95033545" data-type="Teacher">Contreras, Jaden</option><option class="text-dark" value="95036836" data-type="Teacher">Coponen, Chloe</option><option class="text-dark" value="95054904" data-type="Teacher">Council, Reianna</option><option class="text-dark" value="95030596" data-type="Teacher">Cox, Daniel</option><option class="text-dark" value="95025759" data-type="Teacher">Cox, Emanuel</option><option class="text-dark" value="95032756" data-type="Teacher">Crane, Noah</option><option class="text-dark" value="95037400" data-type="Teacher">Creighton, Jett</option><option class="text-dark" value="95034842" data-type="Teacher">Crespo, Jade</option><option class="text-dark" value="95035121" data-type="Teacher">Crider, Lillian</option><option class="text-dark" value="95034618" data-type="Teacher">Crothers-Wheelock, Matthew</option><option class="text-dark" value="95041252" data-type="Teacher">Cruz, Isabella</option><option class="text-dark" value="95037665" data-type="Teacher">Cruz-Farias, Marvin</option><option class="text-dark" value="95030357" data-type="Teacher">Cui, Andy</option><option class="text-dark" value="95037753" data-type="Teacher">Cui, Ethan</option><option class="text-dark" value="95032878" data-type="Teacher">Cui, Tony</option><option class="text-dark" value="95034844" data-type="Teacher">Dadon, Jonathan</option><option class="text-dark" value="95037902" data-type="Teacher">Dahl, Owen</option><option class="text-dark" value="95037903" data-type="Teacher">Dahl, Vanessa</option><option class="text-dark" value="95047703" data-type="Teacher">Dai, Ankang</option><option class="text-dark" value="95036905" data-type="Teacher">Dai, Isaiah</option><option class="text-dark" value="95055797" data-type="Teacher">Dai, Jin</option><option class="text-dark" value="95034786" data-type="Teacher">Dai, Serena</option><option class="text-dark" value="95037916" data-type="Teacher">Dal Fuoco-Dal Cero, Clea</option><option class="text-dark" value="95049602" data-type="Teacher">Daneilas, Andonis</option><option class="text-dark" value="95030359" data-type="Teacher">Dang, Victor</option><option class="text-dark" value="95053804" data-type="Teacher">Daricek, Hayle</option><option class="text-dark" value="95030707" data-type="Teacher">Das, Arya</option><option class="text-dark" value="95039407" data-type="Teacher">Das, Sana</option><option class="text-dark" value="95033407" data-type="Teacher">Davisson, Elle</option><option class="text-dark" value="95055040" data-type="Teacher">Dayanov, Alexander</option><option class="text-dark" value="95037173" data-type="Teacher">De Giere, Linnea</option><option class="text-dark" value="95041553" data-type="Teacher">de la Garza, Richard</option><option class="text-dark" value="95031158" data-type="Teacher">Decrem, Jasmine</option><option class="text-dark" value="95033519" data-type="Teacher">Delgado, Matthew</option><option class="text-dark" value="95037551" data-type="Teacher">Dellenbach, Lily</option><option class="text-dark" value="95033403" data-type="Teacher">Dellenbach, Samuel</option><option class="text-dark" value="95030461" data-type="Teacher">Delvaux, Andre</option><option class="text-dark" value="95053796" data-type="Teacher">Demianenko, Polina</option><option class="text-dark" value="95030983" data-type="Teacher">Deprey, Evariste</option><option class="text-dark" value="95034629" data-type="Teacher">Derilo, Moses</option><option class="text-dark" value="95033162" data-type="Teacher">Desikan, Nithya</option><option class="text-dark" value="95048879" data-type="Teacher">Desveaux, Lise</option><option class="text-dark" value="95031258" data-type="Teacher">Detering, Julian</option><option class="text-dark" value="95034887" data-type="Teacher">Devereaux, Adrian</option><option class="text-dark" value="95033078" data-type="Teacher">DeVincentis, Nicolas</option><option class="text-dark" value="95037552" data-type="Teacher">Dhabolt, Romero</option><option class="text-dark" value="95034788" data-type="Teacher">Dharmawan, Amanda</option><option class="text-dark" value="95033007" data-type="Teacher">Dhillon, Zeenat</option><option class="text-dark" value="95036623" data-type="Teacher">Dhingra, Siyona</option><option class="text-dark" value="95032625" data-type="Teacher">Dhir, Sonali</option><option class="text-dark" value="95053553" data-type="Teacher">Diaz, Giovanni</option><option class="text-dark" value="95055261" data-type="Teacher">Diaz, Issaic</option><option class="text-dark" value="95031262" data-type="Teacher">Diaz, Julia</option><option class="text-dark" value="95040443" data-type="Teacher">Dietrich, Tiffany</option><option class="text-dark" value="95032829" data-type="Teacher">Ding, Christina</option><option class="text-dark" value="95037302" data-type="Teacher">Ding, Connor</option><option class="text-dark" value="95032826" data-type="Teacher">Ding, Iris</option><option class="text-dark" value="95038643" data-type="Teacher">Ding, Kaiyuan</option><option class="text-dark" value="95048935" data-type="Teacher">Ding, Patrick</option><option class="text-dark" value="95037119" data-type="Teacher">Dinneny, Samuel</option><option class="text-dark" value="95031095" data-type="Teacher">Divekar, Rohit</option><option class="text-dark" value="95055650" data-type="Teacher">Dixit, Neil</option><option class="text-dark" value="95035079" data-type="Teacher">Doke, Ranvir</option><option class="text-dark" value="95030361" data-type="Teacher">Doke, Saara</option><option class="text-dark" value="95035286" data-type="Teacher">Domine, Gwendolyn</option><option class="text-dark" value="95051430" data-type="Teacher">Dominik, Henry</option><option class="text-dark" value="95032542" data-type="Teacher">Dominik, Maxwell</option><option class="text-dark" value="95034888" data-type="Teacher">Dong, Anne</option><option class="text-dark" value="95055581" data-type="Teacher">Dong, Peter</option><option class="text-dark" value="95040333" data-type="Teacher">Dorai, Jonathan Sujay</option><option class="text-dark" value="95040617" data-type="Teacher">Dorofeev, Lev</option><option class="text-dark" value="95054907" data-type="Teacher">Doty, Alexander</option><option class="text-dark" value="95032231" data-type="Teacher">Doufas, George</option><option class="text-dark" value="95031167" data-type="Teacher">Dougherty, Moemi</option><option class="text-dark" value="95035415" data-type="Teacher">Drews, Maya</option><option class="text-dark" value="95046186" data-type="Teacher">Drori Retvizer, Nitzan</option><option class="text-dark" value="95032048" data-type="Teacher">Duff, Steven</option><option class="text-dark" value="95037889" data-type="Teacher">Duggan, Lena</option><option class="text-dark" value="95055602" data-type="Teacher">Dulani, Sophie</option><option class="text-dark" value="95037070" data-type="Teacher">Dungan, Lucas</option><option class="text-dark" value="95036697" data-type="Teacher">Dunham, Andrew</option><option class="text-dark" value="95055280" data-type="Teacher">Dusane, Abigail</option><option class="text-dark" value="95053009" data-type="Teacher">Ebrat, Eman</option><option class="text-dark" value="95053999" data-type="Teacher">Echavarria, Tomas</option><option class="text-dark" value="95041876" data-type="Teacher">Efrat, Nadav</option><option class="text-dark" value="95053079" data-type="Teacher">Efremova, Elizaveta</option><option class="text-dark" value="95055073" data-type="Teacher">Eghdami, Parsa</option><option class="text-dark" value="95030868" data-type="Teacher">Eide, Julia</option><option class="text-dark" value="95031396" data-type="Teacher">Elazar, Dror</option><option class="text-dark" value="95038048" data-type="Teacher">Elbaz, Maya</option><option class="text-dark" value="95037729" data-type="Teacher">Elgierari, Mei</option><option class="text-dark" value="95032607" data-type="Teacher">Ellis, Matthew</option><option class="text-dark" value="95037015" data-type="Teacher">Ellis, Owen</option><option class="text-dark" value="95041551" data-type="Teacher">Elnekave, Barr</option><option class="text-dark" value="95052042" data-type="Teacher">Enderes, Sarah</option><option class="text-dark" value="95032932" data-type="Teacher">Engstrom, Connor</option><option class="text-dark" value="95037079" data-type="Teacher">Engstrom, Elliot</option><option class="text-dark" value="95045845" data-type="Teacher">Ennis, Cameron</option><option class="text-dark" value="95051266" data-type="Teacher">Ercal, Yunus</option><option class="text-dark" value="95051360" data-type="Teacher">Ercal, Yusuf</option><option class="text-dark" value="95037905" data-type="Teacher">Eron, Shina</option><option class="text-dark" value="95034632" data-type="Teacher">Ertas, Eda</option><option class="text-dark" value="95036835" data-type="Teacher">Escobar, Edriane Chance</option><option class="text-dark" value="95031686" data-type="Teacher">Esparza, Andrea</option><option class="text-dark" value="95035080" data-type="Teacher">Espinoza, Gabriel</option><option class="text-dark" value="95030599" data-type="Teacher">Espinoza, Mateo</option><option class="text-dark" value="95034634" data-type="Teacher">Estrada Nakamatsu, Megumi</option><option class="text-dark" value="95035175" data-type="Teacher">Evans, Summer</option><option class="text-dark" value="95030544" data-type="Teacher">Everett, Madelyn</option><option class="text-dark" value="95035361" data-type="Teacher">Ezakadan, Kaenna</option><option class="text-dark" value="95033923" data-type="Teacher">Falcon, Andrew</option><option class="text-dark" value="95032868" data-type="Teacher">Fallows, Luke</option><option class="text-dark" value="95039870" data-type="Teacher">Fan, Colette</option><option class="text-dark" value="95030364" data-type="Teacher">Fan, Roger</option><option class="text-dark" value="95032834" data-type="Teacher">Fan, Yonhao</option><option class="text-dark" value="95043624" data-type="Teacher">Fancher, William</option><option class="text-dark" value="95037933" data-type="Teacher">Faraboschi, Alessandro</option><option class="text-dark" value="95040110" data-type="Teacher">Fathzadeh, Armita</option><option class="text-dark" value="95033971" data-type="Teacher">Featherman, Tyler</option><option class="text-dark" value="95050695" data-type="Teacher">Fein, Ashley</option><option class="text-dark" value="95031192" data-type="Teacher">Feng, Casey</option><option class="text-dark" value="95035082" data-type="Teacher">Fidanboylu, Celine</option><option class="text-dark" value="95034893" data-type="Teacher">Fiedel, Jack</option><option class="text-dark" value="95034894" data-type="Teacher">Fiedel, Leo</option><option class="text-dark" value="95032969" data-type="Teacher">Fiedel, Samuel</option><option class="text-dark" value="95049917" data-type="Teacher">Fiegl, Wolfgang</option><option class="text-dark" value="95051128" data-type="Teacher">Firsov, Nikolay</option><option class="text-dark" value="95032913" data-type="Teacher">Fischl, Hanna</option><option class="text-dark" value="95032912" data-type="Teacher">Fischl, Louis</option><option class="text-dark" value="95038676" data-type="Teacher">Fisher, Alex</option><option class="text-dark" value="95038677" data-type="Teacher">Fisher, Claire</option><option class="text-dark" value="95037426" data-type="Teacher">Fishler, Ben</option><option class="text-dark" value="95034345" data-type="Teacher">Fisiiahi, TuUta</option><option class="text-dark" value="95037306" data-type="Teacher">Fitzhugh, Katherine</option><option class="text-dark" value="95032845" data-type="Teacher">Fitzhugh, Ryan</option><option class="text-dark" value="95033429" data-type="Teacher">Fitzpatrick, Madeline</option><option class="text-dark" value="95035083" data-type="Teacher">Fitzwilliam, Mateas</option><option class="text-dark" value="95035125" data-type="Teacher">Fleischmann, Alina</option><option class="text-dark" value="95037080" data-type="Teacher">Flemish, Kamran</option><option class="text-dark" value="95038076" data-type="Teacher">Flinchbaugh, Reed</option><option class="text-dark" value="95035666" data-type="Teacher">Florian Godinez, Christopher</option><option class="text-dark" value="95035241" data-type="Teacher">Fong, Oliver</option><option class="text-dark" value="95032900" data-type="Teacher">Fong, Scott</option><option class="text-dark" value="95030366" data-type="Teacher">Fong, Theodore</option><option class="text-dark" value="95028215" data-type="Teacher">Ford, James</option><option class="text-dark" value="95049610" data-type="Teacher">Forres, Clouie Mae</option><option class="text-dark" value="95031073" data-type="Teacher">Fort, Kaden</option><option class="text-dark" value="95033663" data-type="Teacher">Fortune, Matthew</option><option class="text-dark" value="95032427" data-type="Teacher">Fox-Diallo, Abigail</option><option class="text-dark" value="95030535" data-type="Teacher">Frank, Gabriela</option><option class="text-dark" value="95048679" data-type="Teacher">Fredericson, Isaac</option><option class="text-dark" value="95040058" data-type="Teacher">Friedland, Anna</option><option class="text-dark" value="95034557" data-type="Teacher">Friedman, Jake</option><option class="text-dark" value="95030771" data-type="Teacher">Fu, Ethan</option><option class="text-dark" value="95039924" data-type="Teacher">Fuller, Henry</option><option class="text-dark" value="95030369" data-type="Teacher">Furtado-Tiwari, Ezra</option><option class="text-dark" value="95042237" data-type="Teacher">G Davis, Jeremiah</option><option class="text-dark" value="95035394" data-type="Teacher">Gabareen Mokhtar, Abd El Kareem</option><option class="text-dark" value="95034558" data-type="Teacher">Gabay, Liri</option><option class="text-dark" value="95044729" data-type="Teacher">Gadiraju, Samhita</option><option class="text-dark" value="95036736" data-type="Teacher">Gafton, Andrew</option><option class="text-dark" value="95052815" data-type="Teacher">Galindo Mendoza, Andrea</option><option class="text-dark" value="95047251" data-type="Teacher">Gall, Liam</option><option class="text-dark" value="95034849" data-type="Teacher">Gama-Vazquez, Fernando</option><option class="text-dark" value="95034640" data-type="Teacher">Gamage, Savin</option><option class="text-dark" value="95054162" data-type="Teacher">Gan, Alex</option><option class="text-dark" value="95031162" data-type="Teacher">Gandhe, Eva</option><option class="text-dark" value="95030372" data-type="Teacher">Gangolli, Aneisha</option><option class="text-dark" value="95051007" data-type="Teacher">Gao, David</option><option class="text-dark" value="95041973" data-type="Teacher">Gao, Grace</option><option class="text-dark" value="95036739" data-type="Teacher">Garber, Jonah</option><option class="text-dark" value="95055319" data-type="Teacher">Garcia Escobar, Fabiana</option><option class="text-dark" value="95037125" data-type="Teacher">Garcia Gutierrez, Jeronimo</option><option class="text-dark" value="95030712" data-type="Teacher">Garcia Gutierrez, Maximiliano</option><option class="text-dark" value="95031375" data-type="Teacher">Garcia, Alfredo</option><option class="text-dark" value="95034207" data-type="Teacher">Garcia, Luis</option><option class="text-dark" value="95037127" data-type="Teacher">Gardner, Sola</option><option class="text-dark" value="95033713" data-type="Teacher">Garrido Gomez, Arturo</option><option class="text-dark" value="95031029" data-type="Teacher">Gaskin, Elijah</option><option class="text-dark" value="95030666" data-type="Teacher">Gehring, Elizabeth</option><option class="text-dark" value="95033360" data-type="Teacher">Germanow, Morgan</option><option class="text-dark" value="95050764" data-type="Teacher">Gheorghe, Huga</option><option class="text-dark" value="95032923" data-type="Teacher">Gibbons, Charles</option><option class="text-dark" value="95030987" data-type="Teacher">Giesing, Lorelei</option><option class="text-dark" value="95036484" data-type="Teacher">Giesing, Miles</option><option class="text-dark" value="95032696" data-type="Teacher">Gilbert, Jillian</option><option class="text-dark" value="95031924" data-type="Teacher">Ginn, Caitlin</option><option class="text-dark" value="95034793" data-type="Teacher">Giresi, Reece</option><option class="text-dark" value="95040612" data-type="Teacher">Godoy, Esteban</option><option class="text-dark" value="95033073" data-type="Teacher">Goel, Agastya</option><option class="text-dark" value="95051012" data-type="Teacher">Goel, Prisha</option><option class="text-dark" value="95037177" data-type="Teacher">Golbus, Toby</option><option class="text-dark" value="95030745" data-type="Teacher">Gold, Rachael</option><option class="text-dark" value="95046857" data-type="Teacher">Goldberg-Vardi, Alma</option><option class="text-dark" value="95053413" data-type="Teacher">Golnabi, Saba</option><option class="text-dark" value="95049484" data-type="Teacher">Golub, Mason</option><option class="text-dark" value="95055762" data-type="Teacher">Gomez Molina, Diana</option><option class="text-dark" value="95030374" data-type="Teacher">Gomez, Aaron</option><option class="text-dark" value="95030715" data-type="Teacher">Gonzales, Kaitlyn</option><option class="text-dark" value="95053228" data-type="Teacher">Gonzalez Sonderhoff, Lola</option><option class="text-dark" value="95028752" data-type="Teacher">Gonzalez-Ramirez, Jose Miguel</option><option class="text-dark" value="95031279" data-type="Teacher">Goodwin, Anna-Lisa</option><option class="text-dark" value="95032987" data-type="Teacher">Gopinath, Ajay</option><option class="text-dark" value="95037081" data-type="Teacher">Gotlieb, Naama</option><option class="text-dark" value="95045460" data-type="Teacher">Gottesman, Meni</option><option class="text-dark" value="95047349" data-type="Teacher">Gottesman, Yael</option><option class="text-dark" value="95047483" data-type="Teacher">Gottipati, Anjali</option><option class="text-dark" value="95039682" data-type="Teacher">Govindarajan, Ananth</option><option class="text-dark" value="95031113" data-type="Teacher">Goyal, Nishi</option><option class="text-dark" value="95055605" data-type="Teacher">Grant, Ori</option><option class="text-dark" value="95032284" data-type="Teacher">Green, Harrison</option><option class="text-dark" value="95032957" data-type="Teacher">Green, Keegan</option><option class="text-dark" value="95037178" data-type="Teacher">Greffen, Clara</option><option class="text-dark" value="95030606" data-type="Teacher">Griffin, Leilani</option><option class="text-dark" value="95034794" data-type="Teacher">Grimmer, Isabella</option><option class="text-dark" value="95035326" data-type="Teacher">Gross, Carina</option><option class="text-dark" value="95035434" data-type="Teacher">Grupenhoff, Sarah</option><option class="text-dark" value="95049458" data-type="Teacher">Gu, Ava</option><option class="text-dark" value="95049655" data-type="Teacher">Gu, Danny</option><option class="text-dark" value="95053429" data-type="Teacher">Gu, Jingzhi</option><option class="text-dark" value="95031087" data-type="Teacher">Guevara Cabrera, Jeremiah</option><option class="text-dark" value="95032548" data-type="Teacher">Guibas, Sophia</option><option class="text-dark" value="95042147" data-type="Teacher">Guloz, Sevde Defne</option><option class="text-dark" value="95035396" data-type="Teacher">Gummalam, Neeraj</option><option class="text-dark" value="95053642" data-type="Teacher">Gunturkun, Artun</option><option class="text-dark" value="95040157" data-type="Teacher">Guo, Jerry</option><option class="text-dark" value="95034897" data-type="Teacher">Gupta, Bani</option><option class="text-dark" value="95043120" data-type="Teacher">Gupta, Devin</option><option class="text-dark" value="95043121" data-type="Teacher">Gupta, Dylan</option><option class="text-dark" value="95045732" data-type="Teacher">Gupta, Rohan</option><option class="text-dark" value="95042001" data-type="Teacher">Gupta, Ruddhra</option><option class="text-dark" value="95045731" data-type="Teacher">Gupta, Saira</option><option class="text-dark" value="95036734" data-type="Teacher">Gupta, Siddharth</option><option class="text-dark" value="95038017" data-type="Teacher">Gurevich, Aya</option><option class="text-dark" value="95049517" data-type="Teacher">Gurevich, Gregory</option><option class="text-dark" value="95051267" data-type="Teacher">Gutierrez, Alexis</option><option class="text-dark" value="95030670" data-type="Teacher">Guzman, Elissa</option><option class="text-dark" value="95033645" data-type="Teacher">Hafoka, Finau</option><option class="text-dark" value="95035446" data-type="Teacher">Hahn, Siena</option><option class="text-dark" value="95034383" data-type="Teacher">Hahn, Sophia</option><option class="text-dark" value="95051068" data-type="Teacher">Halas, Charles</option><option class="text-dark" value="95051067" data-type="Teacher">Halas, Matej</option><option class="text-dark" value="95043611" data-type="Teacher">Halder, Upasana</option><option class="text-dark" value="95032838" data-type="Teacher">Hallada, Tyler</option><option class="text-dark" value="95047884" data-type="Teacher">Halliburton-Qwan, Andrew</option><option class="text-dark" value="95055457" data-type="Teacher">Hallinan, Arielle</option><option class="text-dark" value="95051395" data-type="Teacher">Hallinan, Trevor</option><option class="text-dark" value="95042425" data-type="Teacher">Hamilton, Kate</option><option class="text-dark" value="95036732" data-type="Teacher">Han, Alvin</option><option class="text-dark" value="95040634" data-type="Teacher">Han, Jessie</option><option class="text-dark" value="95032663" data-type="Teacher">Han, Rebecca</option><option class="text-dark" value="95032664" data-type="Teacher">Han, Sabrina</option><option class="text-dark" value="95053849" data-type="Teacher">Handoyo, Daniel</option><option class="text-dark" value="95053850" data-type="Teacher">Handoyo, Stephany</option><option class="text-dark" value="95048932" data-type="Teacher">Hansen, MeiLin</option><option class="text-dark" value="95032693" data-type="Teacher">Hariharan, Rishi</option><option class="text-dark" value="95037484" data-type="Teacher">Harrington, Connor</option><option class="text-dark" value="95030824" data-type="Teacher">Harrington, Parker</option><option class="text-dark" value="95034850" data-type="Teacher">Harrison, Henry</option><option class="text-dark" value="95055504" data-type="Teacher">Harstad, Ildri</option><option class="text-dark" value="95040508" data-type="Teacher">Hashimoto, Kai</option><option class="text-dark" value="95028538" data-type="Teacher">Hayes, Samuel</option><option class="text-dark" value="95040246" data-type="Teacher">Hayes, Violet</option><option class="text-dark" value="95032730" data-type="Teacher">He, Sophia</option><option class="text-dark" value="95033090" data-type="Teacher">Heifets, Zoe</option><option class="text-dark" value="95033029" data-type="Teacher">Heilman, Miles</option><option class="text-dark" value="95041871" data-type="Teacher">Henrich, Noelle</option><option class="text-dark" value="95033209" data-type="Teacher">Henriquez, Brandon</option><option class="text-dark" value="95054960" data-type="Teacher">Hernandez Banegas, Dara</option><option class="text-dark" value="95055143" data-type="Teacher">Hernandez Chavez, Eliel</option><option class="text-dark" value="95037561" data-type="Teacher">Hernandez Lopez, Nicolas</option><option class="text-dark" value="95035084" data-type="Teacher">Hernandez Saldana, Liliana</option><option class="text-dark" value="95035418" data-type="Teacher">Hernandez, Avimel</option><option class="text-dark" value="95049641" data-type="Teacher">Hernandez, Bryan</option><option class="text-dark" value="95053822" data-type="Teacher">Hernandez, Eduardo</option><option class="text-dark" value="95031992" data-type="Teacher">Hernandez-Lu, Alexander</option><option class="text-dark" value="95031329" data-type="Teacher">Hershowitz, Liel</option><option class="text-dark" value="95033504" data-type="Teacher">Hervy, David</option><option class="text-dark" value="95037381" data-type="Teacher">Hervy, Elizabeth</option><option class="text-dark" value="95034122" data-type="Teacher">Higgins, Tripp</option><option class="text-dark" value="95031346" data-type="Teacher">Hilbert, Jacob</option><option class="text-dark" value="95031847" data-type="Teacher">Hilding, Julia</option><option class="text-dark" value="95032825" data-type="Teacher">Hill, Riley</option><option class="text-dark" value="95034797" data-type="Teacher">Himmelbauer, Alexander</option><option class="text-dark" value="95033226" data-type="Teacher">Hines, Luke</option><option class="text-dark" value="95035510" data-type="Teacher">Hisatomi, Khloe</option><option class="text-dark" value="95030794" data-type="Teacher">Ho, Anthony</option><option class="text-dark" value="95031033" data-type="Teacher">Ho, Bertina</option><option class="text-dark" value="95030718" data-type="Teacher">Ho, Megan</option><option class="text-dark" value="95042939" data-type="Teacher">Hogben, Serena</option><option class="text-dark" value="95042940" data-type="Teacher">Hogben, Theo</option><option class="text-dark" value="95031164" data-type="Teacher">Hoke, Margaret</option><option class="text-dark" value="95055687" data-type="Teacher">Holcova, Ela</option><option class="text-dark" value="95038460" data-type="Teacher">Holtman, Evan</option><option class="text-dark" value="95031156" data-type="Teacher">Holtz, Heather</option><option class="text-dark" value="95042043" data-type="Teacher">Hong, Chia-En</option><option class="text-dark" value="95032589" data-type="Teacher">Hong, Ethan</option><option class="text-dark" value="95040301" data-type="Teacher">Hong, Irene</option><option class="text-dark" value="95046055" data-type="Teacher">Hong, Jinu</option><option class="text-dark" value="95040300" data-type="Teacher">Hong, Yueun</option><option class="text-dark" value="95048880" data-type="Teacher">Honigstein, Annabel</option><option class="text-dark" value="95048881" data-type="Teacher">Honigstein, Dan</option><option class="text-dark" value="95045491" data-type="Teacher">Horowitz, Omer</option><option class="text-dark" value="95045492" data-type="Teacher">Horowitz, Ronnie</option><option class="text-dark" value="95044213" data-type="Teacher">Howell, Bridget</option><option class="text-dark" value="95030902" data-type="Teacher">Howell, Sophia</option><option class="text-dark" value="95028161" data-type="Teacher">Hsieh, Eugene</option><option class="text-dark" value="95031922" data-type="Teacher">Hu, Angeline</option><option class="text-dark" value="95033041" data-type="Teacher">Hu, Elise</option><option class="text-dark" value="95047464" data-type="Teacher">Hu, Naomi</option><option class="text-dark" value="95028145" data-type="Teacher">Huang, Allen</option><option class="text-dark" value="95047850" data-type="Teacher">Huang, Junwen</option><option class="text-dark" value="95029033" data-type="Teacher">Huang, Maryanne</option><option class="text-dark" value="95049516" data-type="Teacher">Huang, Melinda</option><option class="text-dark" value="95035247" data-type="Teacher">Hubenthal, Connor</option><option class="text-dark" value="95045401" data-type="Teacher">Huber, Dylan</option><option class="text-dark" value="95051271" data-type="Teacher">Huerta, Noah</option><option class="text-dark" value="95051270" data-type="Teacher">Huerta, Vincent</option><option class="text-dark" value="95048301" data-type="Teacher">Huh, Jungin</option><option class="text-dark" value="95055607" data-type="Teacher">Huidobro, Maria Gracia</option><option class="text-dark" value="95036272" data-type="Teacher">Humphreys, Lionel</option><option class="text-dark" value="95036273" data-type="Teacher">Humphreys, Owen</option><option class="text-dark" value="95040116" data-type="Teacher">Hussain, Asad</option><option class="text-dark" value="95030381" data-type="Teacher">Hussain, Sofia</option><option class="text-dark" value="95041857" data-type="Teacher">Huuse, Ida</option><option class="text-dark" value="95037342" data-type="Teacher">Huynh, Mathilde</option><option class="text-dark" value="95037838" data-type="Teacher">Hwang, Andrew</option><option class="text-dark" value="95045617" data-type="Teacher">Hwang, Sam-Erik</option><option class="text-dark" value="95041525" data-type="Teacher">Hwangbo, Sophia</option><option class="text-dark" value="95036177" data-type="Teacher">Ibrahim, Andrew</option><option class="text-dark" value="95036178" data-type="Teacher">Ibrahim, Michael</option><option class="text-dark" value="95036790" data-type="Teacher">Iglesias, Gustavo</option><option class="text-dark" value="95035299" data-type="Teacher">Illouz, Davide</option><option class="text-dark" value="95037290" data-type="Teacher">Inan, Ayla</option><option class="text-dark" value="95039836" data-type="Teacher">Innamaa, Kalle</option><option class="text-dark" value="95049495" data-type="Teacher">Inoc, Anton</option><option class="text-dark" value="95044045" data-type="Teacher"><template class="__cf_email__" data-cfemail="86eff4b2b2b6b2b3c6f6e7f3f5e2a8f3f5">[email&#160;protected]</template></option><option class="text-dark" value="95035491" data-type="Teacher">Iranmanesh, Sara</option><option class="text-dark" value="95034851" data-type="Teacher">Ishihara, Jayden</option><option class="text-dark" value="95033622" data-type="Teacher">Iyer, Abhivir</option><option class="text-dark" value="95040630" data-type="Teacher">Iyer, Anirudh</option><option class="text-dark" value="95038766" data-type="Teacher">Iyer-Schulz, Asha</option><option class="text-dark" value="95056041" data-type="Teacher"><template class="__cf_email__" data-cfemail="214b4014171115106151405452450f5452">[email&#160;protected]</template></option><option class="text-dark" value="95040442" data-type="Teacher">Jackson, Akire</option><option class="text-dark" value="95034900" data-type="Teacher">Jackson, Anthony</option><option class="text-dark" value="95030952" data-type="Teacher">Jackson, Elizabeth</option><option class="text-dark" value="95033229" data-type="Teacher">Jackson, Hugh</option><option class="text-dark" value="95030953" data-type="Teacher">Jackson, Katherine</option><option class="text-dark" value="95049452" data-type="Teacher">Jacobs, Jaiden</option><option class="text-dark" value="95049482" data-type="Teacher">Jacobs, Lucca</option><option class="text-dark" value="95030925" data-type="Teacher">Jacobsen, Robin</option><option class="text-dark" value="95043633" data-type="Teacher">Jaime, Jesus</option><option class="text-dark" value="95034577" data-type="Teacher">Jain, Rishay</option><option class="text-dark" value="95030473" data-type="Teacher">Jaquette, Ruth</option><option class="text-dark" value="95052851" data-type="Teacher">Jarosz, Justin</option><option class="text-dark" value="95040569" data-type="Teacher">Jaura, Sumeet</option><option class="text-dark" value="95045606" data-type="Teacher">Jayanth, Anika</option><option class="text-dark" value="95039585" data-type="Teacher">Jayaprakash, Anushree</option><option class="text-dark" value="95036837" data-type="Teacher">Jayaraman, Rithvik</option><option class="text-dark" value="95028612" data-type="Teacher"><template class="__cf_email__" data-cfemail="0e646a3c36383f3c4e7e6f7b7d6a207b7d">[email&#160;protected]</template></option><option class="text-dark" value="95037085" data-type="Teacher">Jeong, Heehyeon</option><option class="text-dark" value="95034434" data-type="Teacher">Jeong, Heeseo</option><option class="text-dark" value="95034430" data-type="Teacher">Jeong, Jaehyun</option><option class="text-dark" value="95035131" data-type="Teacher">Jeong, Jana</option><option class="text-dark" value="95030474" data-type="Teacher">Jeong, Jordan</option><option class="text-dark" value="95033807" data-type="Teacher">Jhaveri, Kiyan</option><option class="text-dark" value="95032792" data-type="Teacher">Ji, HanLee</option><option class="text-dark" value="95036991" data-type="Teacher">Ji, LeeAh</option><option class="text-dark" value="95037180" data-type="Teacher">Jia, William</option><option class="text-dark" value="95043822" data-type="Teacher">Jiang, Alan</option><option class="text-dark" value="95030475" data-type="Teacher">Jiang, Allan</option><option class="text-dark" value="95032642" data-type="Teacher">Jiang, Angelina</option><option class="text-dark" value="95033468" data-type="Teacher">Jiang, Guangjie</option><option class="text-dark" value="95043601" data-type="Teacher">Jiang, Lixing</option><option class="text-dark" value="95034646" data-type="Teacher">Jiang, Peter</option><option class="text-dark" value="95031593" data-type="Teacher">Jiang, Shengkai</option><option class="text-dark" value="95036884" data-type="Teacher">Jiang, Shinher</option><option class="text-dark" value="95032789" data-type="Teacher">Jiang, Shinyew</option><option class="text-dark" value="95044483" data-type="Teacher">Jin, Lei</option><option class="text-dark" value="95043433" data-type="Teacher">Jin, Samuel</option><option class="text-dark" value="95036402" data-type="Teacher">Jin, Ziqi</option><option class="text-dark" value="95040204" data-type="Teacher">Jittipun, Claire</option><option class="text-dark" value="95037817" data-type="Teacher">Jo, Minwoo</option><option class="text-dark" value="95053678" data-type="Teacher">Jo, Shua</option><option class="text-dark" value="95043742" data-type="Teacher">Jog, Shreya</option><option class="text-dark" value="95031308" data-type="Teacher">Johnson, Axel</option><option class="text-dark" value="95036791" data-type="Teacher">Johnson, Nathaniel</option><option class="text-dark" value="95030874" data-type="Teacher">Joshi, Amrit</option><option class="text-dark" value="95053975" data-type="Teacher">Joshi, Ishan</option><option class="text-dark" value="95035164" data-type="Teacher">Joshi, Sanjan</option><option class="text-dark" value="95043923" data-type="Teacher">Josyula, Rhea</option><option class="text-dark" value="95051379" data-type="Teacher">Julajuj Cruz, Wilfred</option><option class="text-dark" value="95032887" data-type="Teacher">Jung, Hahn</option><option class="text-dark" value="95034901" data-type="Teacher">Jung, Hyunhwa</option><option class="text-dark" value="95038714" data-type="Teacher">Jung, Kyuho</option><option class="text-dark" value="95035002" data-type="Teacher">Kaleba, Tove</option><option class="text-dark" value="95038508" data-type="Teacher">Kallahalla, Smriti</option><option class="text-dark" value="95035250" data-type="Teacher">Kalra, Kamya</option><option class="text-dark" value="95037386" data-type="Teacher">Kamphuis, Maxwell</option><option class="text-dark" value="95036405" data-type="Teacher">Kamphuis, Zoe</option><option class="text-dark" value="95037291" data-type="Teacher">Kancherla, Ayan</option><option class="text-dark" value="95035804" data-type="Teacher">Kancherla, Rohan</option><option class="text-dark" value="95048892" data-type="Teacher">Kandogan, Eren</option><option class="text-dark" value="95037345" data-type="Teacher">Kane, Lauren</option><option class="text-dark" value="95030248" data-type="Teacher">Kanegan, Jackson</option><option class="text-dark" value="95041560" data-type="Teacher">Kang, Alexander</option><option class="text-dark" value="95040070" data-type="Teacher">Kang, Brandon</option><option class="text-dark" value="95028228" data-type="Teacher">Kang, Jeffrey</option><option class="text-dark" value="95041561" data-type="Teacher">Kang, Julia</option><option class="text-dark" value="95036855" data-type="Teacher">Kang, Madeleine</option><option class="text-dark" value="95040069" data-type="Teacher">Kang, Seohyeong</option><option class="text-dark" value="95053544" data-type="Teacher">Kang, Urim</option><option class="text-dark" value="95053123" data-type="Teacher">Kanungo, Shihan</option><option class="text-dark" value="95040901" data-type="Teacher">Kaplan, Audrey</option><option class="text-dark" value="95050763" data-type="Teacher">Karamibekr, Mohammadsaleh</option><option class="text-dark" value="95031409" data-type="Teacher">Karnik, Rajeev</option><option class="text-dark" value="95033040" data-type="Teacher">Kass, David</option><option class="text-dark" value="95033518" data-type="Teacher">Kasturi, Namya</option><option class="text-dark" value="95034049" data-type="Teacher">Kathuria, Karan</option><option class="text-dark" value="95029494" data-type="Teacher">Katila, Sophie</option><option class="text-dark" value="95031166" data-type="Teacher">Katzir, Ella</option><option class="text-dark" value="95041090" data-type="Teacher">Ke, Allen</option><option class="text-dark" value="95041505" data-type="Teacher">Ke, Audrey</option><option class="text-dark" value="95051365" data-type="Teacher">Keehn, Daniel</option><option class="text-dark" value="95053431" data-type="Teacher">Keehn, David</option><option class="text-dark" value="95035837" data-type="Teacher">Kember, Carter</option><option class="text-dark" value="95034518" data-type="Teacher">Khaladkar, Chinmay</option><option class="text-dark" value="95054911" data-type="Teacher">Khan, Ariana</option><option class="text-dark" value="95050010" data-type="Teacher">Khan, Ibrahim</option><option class="text-dark" value="95033803" data-type="Teacher">Khan, Kamran</option><option class="text-dark" value="95038577" data-type="Teacher">Khan, Shaheer</option><option class="text-dark" value="95035658" data-type="Teacher">Khan, Zayn</option><option class="text-dark" value="95038092" data-type="Teacher">Khanna, Krish</option><option class="text-dark" value="95038562" data-type="Teacher">Kharis, Daniil</option><option class="text-dark" value="95030798" data-type="Teacher">Khurgin, Ariel</option><option class="text-dark" value="95032632" data-type="Teacher">Khurgin, Eli</option><option class="text-dark" value="95036761" data-type="Teacher">Kibardina, Iana</option><option class="text-dark" value="95034853" data-type="Teacher">Kibardina, Kristina</option><option class="text-dark" value="95030476" data-type="Teacher">Kilgore, Jason</option><option class="text-dark" value="95051417" data-type="Teacher">Kim, Aidan</option><option class="text-dark" value="95047843" data-type="Teacher">Kim, Chanew</option><option class="text-dark" value="95040068" data-type="Teacher">Kim, Dana</option><option class="text-dark" value="95040428" data-type="Teacher">Kim, David</option><option class="text-dark" value="95045795" data-type="Teacher">Kim, Doyoon</option><option class="text-dark" value="95034902" data-type="Teacher">Kim, Ellen</option><option class="text-dark" value="95032633" data-type="Teacher">Kim, Hannah</option><option class="text-dark" value="95030955" data-type="Teacher">Kim, Joshua</option><option class="text-dark" value="95037237" data-type="Teacher">Kim, JuYoung</option><option class="text-dark" value="95037382" data-type="Teacher">Kim, Kyuhyun</option><option class="text-dark" value="95035252" data-type="Teacher">Kim, Min Jae</option><option class="text-dark" value="95033823" data-type="Teacher">Kim, Oren</option><option class="text-dark" value="95028292" data-type="Teacher">Kim, Ryan</option><option class="text-dark" value="95041593" data-type="Teacher">Kim, Seongju</option><option class="text-dark" value="95035044" data-type="Teacher">Kim, Sophia</option><option class="text-dark" value="95055625" data-type="Teacher">Kim, Surin</option><option class="text-dark" value="95043747" data-type="Teacher">Kim, Yehbeen</option><option class="text-dark" value="95038126" data-type="Teacher">Kimble, Robert</option><option class="text-dark" value="95052670" data-type="Teacher">Kimhi, Liam</option><option class="text-dark" value="95037830" data-type="Teacher">Kimura, Mia-Katie</option><option class="text-dark" value="95035088" data-type="Teacher">Kirner, Julia</option><option class="text-dark" value="95028367" data-type="Teacher">Kirner, Nathan</option><option class="text-dark" value="95035308" data-type="Teacher">Kissiov, Thea</option><option class="text-dark" value="95031034" data-type="Teacher">Kitch, Ethan</option><option class="text-dark" value="95055872" data-type="Teacher"><template class="__cf_email__" data-cfemail="076c6b32323f3035477766727463297274">[email&#160;protected]</template></option><option class="text-dark" value="95037182" data-type="Teacher">Klets, Caroline</option><option class="text-dark" value="95036215" data-type="Teacher">Klinger, Harel</option><option class="text-dark" value="95036994" data-type="Teacher">Klinger, Ohad</option><option class="text-dark" value="95055603" data-type="Teacher">Knudson, Samantha</option><option class="text-dark" value="95032668" data-type="Teacher">Knutson, Mei</option><option class="text-dark" value="95047951" data-type="Teacher">Ko, Yuri</option><option class="text-dark" value="95055628" data-type="Teacher">Koay, Elie</option><option class="text-dark" value="95055627" data-type="Teacher">Koay, Felix</option><option class="text-dark" value="95050019" data-type="Teacher">Kobayashi, Elena</option><option class="text-dark" value="95036428" data-type="Teacher">Kochenderfer, Emma</option><option class="text-dark" value="95036429" data-type="Teacher">Kochenderfer, John</option><option class="text-dark" value="95037257" data-type="Teacher">Kochenderfer, Lily</option><option class="text-dark" value="95046199" data-type="Teacher">Kochkarova, Almira</option><option class="text-dark" value="95034077" data-type="Teacher">Kodama, Reina</option><option class="text-dark" value="95031412" data-type="Teacher">Koehler, Owen</option><option class="text-dark" value="95036795" data-type="Teacher">Kohn, Benjamin</option><option class="text-dark" value="95034655" data-type="Teacher">Kollu, Siddhartha</option><option class="text-dark" value="95030677" data-type="Teacher">Komarov, Antony</option><option class="text-dark" value="95041755" data-type="Teacher">Komban, Beyza</option><option class="text-dark" value="95031407" data-type="Teacher">Kondekar, Ved</option><option class="text-dark" value="95045479" data-type="Teacher">Koneru, Aakash</option><option class="text-dark" value="95042877" data-type="Teacher">Konforty, Noya</option><option class="text-dark" value="95025725" data-type="Teacher">Kong, Adrian</option><option class="text-dark" value="95030557" data-type="Teacher">Koo, Michelle</option><option class="text-dark" value="95038024" data-type="Teacher">Koshibu, Ruka</option><option class="text-dark" value="95045601" data-type="Teacher">Kostic, Teodor</option><option class="text-dark" value="95044263" data-type="Teacher">Kou, Daniel</option><option class="text-dark" value="95044507" data-type="Teacher">Kou, Ethan</option><option class="text-dark" value="95044509" data-type="Teacher">Kou, Sophia</option><option class="text-dark" value="95036838" data-type="Teacher">Kranz, Ofer</option><option class="text-dark" value="95042354" data-type="Teacher">Krishnan, Advaith</option><option class="text-dark" value="95042356" data-type="Teacher">Krishnan, Samhita</option><option class="text-dark" value="95038442" data-type="Teacher">Krishnaswamy, Vinay</option><option class="text-dark" value="95032774" data-type="Teacher">Kuartei, Kanaan</option><option class="text-dark" value="95032773" data-type="Teacher">Kuartei, Kira</option><option class="text-dark" value="95031512" data-type="Teacher">Kubursi, Mariam</option><option class="text-dark" value="95049389" data-type="Teacher">Kubursi, Mia</option><option class="text-dark" value="95035942" data-type="Teacher">Kulawik, Annika</option><option class="text-dark" value="95035643" data-type="Teacher">Kumar Alonso, Alonso Abhinav</option><option class="text-dark" value="95038066" data-type="Teacher">Kumar, Aarushi</option><option class="text-dark" value="95035927" data-type="Teacher">Kumar, Anika</option><option class="text-dark" value="95036698" data-type="Teacher">Kuo, David</option><option class="text-dark" value="95034769" data-type="Teacher">Kuo, Ethan</option><option class="text-dark" value="95048180" data-type="Teacher">Kuria, Lawrence</option><option class="text-dark" value="95038341" data-type="Teacher">Kuusela, Niklas</option><option class="text-dark" value="95047346" data-type="Teacher">Kuwata, Hiroto</option><option class="text-dark" value="95047347" data-type="Teacher">Kuwata, Yui</option><option class="text-dark" value="95049505" data-type="Teacher">Kwan, Jeffrey</option><option class="text-dark" value="95044337" data-type="Teacher">Kwon, Kyuhyo</option><option class="text-dark" value="95042711" data-type="Teacher">Kwon, Sean</option><option class="text-dark" value="95032634" data-type="Teacher">Kwon, Sevin</option><option class="text-dark" value="95030802" data-type="Teacher">Lafler-Austern, Alice</option><option class="text-dark" value="95036798" data-type="Teacher">Lakhani, Anaya</option><option class="text-dark" value="95030803" data-type="Teacher">Lam, Natalie</option><option class="text-dark" value="95033327" data-type="Teacher">Lamis, Beverly</option><option class="text-dark" value="95033326" data-type="Teacher">Lamis, Jackson</option><option class="text-dark" value="95036801" data-type="Teacher">Landt, Timothy</option><option class="text-dark" value="95030946" data-type="Teacher">Lane, Mahavir</option><option class="text-dark" value="95048975" data-type="Teacher">Langner, Maksymilian</option><option class="text-dark" value="95034677" data-type="Teacher">Lao, Roy</option><option class="text-dark" value="95030839" data-type="Teacher">Lari, Alina</option><option class="text-dark" value="95030479" data-type="Teacher">Lau, Karis</option><option class="text-dark" value="95054187" data-type="Teacher">Lau, Shan Wa</option><option class="text-dark" value="95037348" data-type="Teacher">Law, Jonathan</option><option class="text-dark" value="95030907" data-type="Teacher">Lawer, Katherine</option><option class="text-dark" value="95031299" data-type="Teacher">Lawrence, Matthew</option><option class="text-dark" value="95045902" data-type="Teacher">Laxman, Samhita</option><option class="text-dark" value="95050837" data-type="Teacher">Le, Anh</option><option class="text-dark" value="95051052" data-type="Teacher">Le, Anh</option><option class="text-dark" value="95054112" data-type="Teacher">Le, Caitrin</option><option class="text-dark" value="95037209" data-type="Teacher">Lee Liphardt, Samuel</option><option class="text-dark" value="95033553" data-type="Teacher">Lee, Adrian</option><option class="text-dark" value="95032884" data-type="Teacher">Lee, Aidan</option><option class="text-dark" value="95034773" data-type="Teacher">Lee, Albert</option><option class="text-dark" value="95043412" data-type="Teacher">Lee, Alyssa</option><option class="text-dark" value="95055651" data-type="Teacher">Lee, Andre</option><option class="text-dark" value="95036147" data-type="Teacher">Lee, Arden</option><option class="text-dark" value="95051208" data-type="Teacher">Lee, Chaewon</option><option class="text-dark" value="95036018" data-type="Teacher">Lee, Christine</option><option class="text-dark" value="95049412" data-type="Teacher">Lee, Christopher</option><option class="text-dark" value="95053438" data-type="Teacher">Lee, Eamon</option><option class="text-dark" value="95042447" data-type="Teacher">Lee, Edison</option><option class="text-dark" value="95053439" data-type="Teacher">Lee, Enoch</option><option class="text-dark" value="95053470" data-type="Teacher">Lee, Ethan</option><option class="text-dark" value="95030938" data-type="Teacher">Lee, Gene</option><option class="text-dark" value="95052947" data-type="Teacher">Lee, Hajin</option><option class="text-dark" value="95048413" data-type="Teacher">Lee, Hanna</option><option class="text-dark" value="95049397" data-type="Teacher">Lee, Isabella</option><option class="text-dark" value="95053790" data-type="Teacher">Lee, Jooah</option><option class="text-dark" value="95053791" data-type="Teacher">Lee, Joowon</option><option class="text-dark" value="95032709" data-type="Teacher">Lee, Julian</option><option class="text-dark" value="95044093" data-type="Teacher">Lee, Kai</option><option class="text-dark" value="95033091" data-type="Teacher">Lee, Lauren</option><option class="text-dark" value="95048681" data-type="Teacher">Lee, Mason</option><option class="text-dark" value="95042448" data-type="Teacher">Lee, Megan</option><option class="text-dark" value="95034541" data-type="Teacher">Lee, Michelle</option><option class="text-dark" value="95035138" data-type="Teacher">Lee, Olivia</option><option class="text-dark" value="95031758" data-type="Teacher">Lee, Royce</option><option class="text-dark" value="95030480" data-type="Teacher">Lee, Ryan</option><option class="text-dark" value="95053471" data-type="Teacher">Lee, Sean</option><option class="text-dark" value="95046901" data-type="Teacher">Lee, Sean</option><option class="text-dark" value="95051487" data-type="Teacher">Lee, Siena</option><option class="text-dark" value="95037090" data-type="Teacher">Lee, Tabitha</option><option class="text-dark" value="95034668" data-type="Teacher">Lee, Theo</option><option class="text-dark" value="95045776" data-type="Teacher">Lee, Yeondoo</option><option class="text-dark" value="95045980" data-type="Teacher">Lee, Yoonseo</option><option class="text-dark" value="95031147" data-type="Teacher">Leontis, Zoe</option><option class="text-dark" value="95031093" data-type="Teacher">Leppert, Ella</option><option class="text-dark" value="95034761" data-type="Teacher">Leppert, John</option><option class="text-dark" value="95034855" data-type="Teacher">Leung, Hayden</option><option class="text-dark" value="95053440" data-type="Teacher">Levy, Benjamin</option><option class="text-dark" value="95037051" data-type="Teacher">Levy, Eli</option><option class="text-dark" value="95053519" data-type="Teacher">Levy, Isaac</option><option class="text-dark" value="95031075" data-type="Teacher">Levy, Nathan</option><option class="text-dark" value="95053324" data-type="Teacher">Li, Cheng</option><option class="text-dark" value="95035207" data-type="Teacher">Li, Daniel</option><option class="text-dark" value="95031596" data-type="Teacher">Li, David</option><option class="text-dark" value="95049835" data-type="Teacher">Li, Dingyi</option><option class="text-dark" value="95035826" data-type="Teacher">Li, Elva</option><option class="text-dark" value="95034696" data-type="Teacher">Li, Eric</option><option class="text-dark" value="95034698" data-type="Teacher">Li, Fiona</option><option class="text-dark" value="95038764" data-type="Teacher">Li, Iok Kuok</option><option class="text-dark" value="95032635" data-type="Teacher">Li, Jennifer</option><option class="text-dark" value="95033092" data-type="Teacher">Li, Jesse</option><option class="text-dark" value="95037349" data-type="Teacher">Li, Kaden</option><option class="text-dark" value="95055156" data-type="Teacher">Li, Ma Sui Lai</option><option class="text-dark" value="95045944" data-type="Teacher">Li, Sean</option><option class="text-dark" value="95053644" data-type="Teacher">Li, Seth</option><option class="text-dark" value="95045957" data-type="Teacher">Li, Sophia</option><option class="text-dark" value="95036809" data-type="Teacher">Li, Tianyi</option><option class="text-dark" value="95032850" data-type="Teacher">Li, Winston</option><option class="text-dark" value="95055157" data-type="Teacher">Li, Zhenxi</option><option class="text-dark" value="95053204" data-type="Teacher">Liang, Cera</option><option class="text-dark" value="95047718" data-type="Teacher">Liang, Xiwen</option><option class="text-dark" value="95031274" data-type="Teacher">Lieberman-Evans, Erin</option><option class="text-dark" value="95038324" data-type="Teacher">Lifshitz, Roni</option><option class="text-dark" value="95036705" data-type="Teacher">Lik, Ellison</option><option class="text-dark" value="95045544" data-type="Teacher">Lin, Jason</option><option class="text-dark" value="95037210" data-type="Teacher">Lincoln, Valentina</option><option class="text-dark" value="95034505" data-type="Teacher">Linder, Emily</option><option class="text-dark" value="95044162" data-type="Teacher">Lipp, Emma</option><option class="text-dark" value="95037692" data-type="Teacher">Little, Alexandra</option><option class="text-dark" value="95033313" data-type="Teacher">Little, Samuel</option><option class="text-dark" value="95031111" data-type="Teacher">Liu, Alexander</option><option class="text-dark" value="95040798" data-type="Teacher">Liu, Audrey</option><option class="text-dark" value="95032879" data-type="Teacher">Liu, Benjamin</option><option class="text-dark" value="95030536" data-type="Teacher">Liu, Galen</option><option class="text-dark" value="95053517" data-type="Teacher">Liu, Grace</option><option class="text-dark" value="95046352" data-type="Teacher">Liu, Hanting</option><option class="text-dark" value="95035046" data-type="Teacher">Liu, Jaden</option><option class="text-dark" value="95053968" data-type="Teacher">Liu, Jinjia</option><option class="text-dark" value="95048079" data-type="Teacher">Liu, Joanna</option><option class="text-dark" value="95030483" data-type="Teacher">Liu, Richard</option><option class="text-dark" value="95043645" data-type="Teacher">Liu, Siqi</option><option class="text-dark" value="95041928" data-type="Teacher">Liu, Xinran</option><option class="text-dark" value="95035367" data-type="Teacher">Liu, Yu-Ming</option><option class="text-dark" value="95051057" data-type="Teacher">Liu, Yuexuan</option><option class="text-dark" value="95049393" data-type="Teacher">Liu, Zidan</option><option class="text-dark" value="95053745" data-type="Teacher">Liu, Ziyu</option><option class="text-dark" value="95032728" data-type="Teacher">Livera, Natthaly</option><option class="text-dark" value="95035208" data-type="Teacher">Lo, Anders</option><option class="text-dark" value="95035339" data-type="Teacher">Lo, Warren</option><option class="text-dark" value="95055585" data-type="Teacher">Lobanets, Dmytro</option><option class="text-dark" value="95030401" data-type="Teacher">Lobell, Kai</option><option class="text-dark" value="95037188" data-type="Teacher">Lobell, Tobias</option><option class="text-dark" value="95037871" data-type="Teacher">Lochan, Avni</option><option class="text-dark" value="95037870" data-type="Teacher">Lochan, Sidhant</option><option class="text-dark" value="95029121" data-type="Teacher">Loeb, Joseph</option><option class="text-dark" value="95042073" data-type="Teacher">Lombera, Denise</option><option class="text-dark" value="95030761" data-type="Teacher">Lopez Pedraza, Giovanni</option><option class="text-dark" value="95039832" data-type="Teacher">Lopez, Maya</option><option class="text-dark" value="95045780" data-type="Teacher">Lopez, Miguel</option><option class="text-dark" value="95038376" data-type="Teacher">Lorenson, Preston</option><option class="text-dark" value="95051275" data-type="Teacher">Lou, Anthoney</option><option class="text-dark" value="95033726" data-type="Teacher">Low, Sean</option><option class="text-dark" value="95028559" data-type="Teacher">Lowenthal, Naomi</option><option class="text-dark" value="95051823" data-type="Teacher">Lozada Rojas, Marie</option><option class="text-dark" value="95030486" data-type="Teacher">Lu, Dylan</option><option class="text-dark" value="95049604" data-type="Teacher">Lu, Ian</option><option class="text-dark" value="95033408" data-type="Teacher">Lu, Jocelyn</option><option class="text-dark" value="95039731" data-type="Teacher">Lu, Maggie</option><option class="text-dark" value="95046210" data-type="Teacher">Lu, Michael</option><option class="text-dark" value="95033389" data-type="Teacher">Lu, Olivia</option><option class="text-dark" value="95050020" data-type="Teacher">Lu, Yicheng</option><option class="text-dark" value="95030389" data-type="Teacher">Lu-Liang, Sarah</option><option class="text-dark" value="95033269" data-type="Teacher">Lum, Brian</option><option class="text-dark" value="95033950" data-type="Teacher">Luo, Jason</option><option class="text-dark" value="95048963" data-type="Teacher">Luo, Kaicheng</option><option class="text-dark" value="95030805" data-type="Teacher">Luo, Kyle</option><option class="text-dark" value="95052095" data-type="Teacher">Luo, Songrui</option><option class="text-dark" value="95034904" data-type="Teacher">Luong, Audrey</option><option class="text-dark" value="95038561" data-type="Teacher">Luthy, Michael</option><option class="text-dark" value="95045389" data-type="Teacher">Lvov, Gleb</option><option class="text-dark" value="95048009" data-type="Teacher">Lyu, Jiaqi</option><option class="text-dark" value="95035866" data-type="Teacher">Ma, Andrew</option><option class="text-dark" value="95033706" data-type="Teacher">Ma, James</option><option class="text-dark" value="95035740" data-type="Teacher">Ma, Philip</option><option class="text-dark" value="95049886" data-type="Teacher">Ma, Yushang</option><option class="text-dark" value="95044346" data-type="Teacher">Maartensson, Lisa</option><option class="text-dark" value="95036052" data-type="Teacher">Macskassy, Pernille</option><option class="text-dark" value="95031215" data-type="Teacher">Madriz-Rodrigues, Iris</option><option class="text-dark" value="95031486" data-type="Teacher">Maecker, Julia</option><option class="text-dark" value="95047097" data-type="Teacher">Magnani, Edo</option><option class="text-dark" value="95046244" data-type="Teacher">Mahadevan, Sahana</option><option class="text-dark" value="95030943" data-type="Teacher">Mahajan, Amann</option><option class="text-dark" value="95035047" data-type="Teacher">Mahajan, Kabir</option><option class="text-dark" value="95043830" data-type="Teacher">Mahesh, Om</option><option class="text-dark" value="95035210" data-type="Teacher">Maldonado Acevedo, Yovon</option><option class="text-dark" value="95034570" data-type="Teacher">Maldonado, Jacob</option><option class="text-dark" value="95035181" data-type="Teacher">Malhotra, Rian</option><option class="text-dark" value="95035048" data-type="Teacher">Maliuanag, Aerin Myles</option><option class="text-dark" value="95030632" data-type="Teacher">Maliuanag, Audrey Marie</option><option class="text-dark" value="95032748" data-type="Teacher">Mallik, Saanvi</option><option class="text-dark" value="95036769" data-type="Teacher">Malova, Sonya</option><option class="text-dark" value="95054912" data-type="Teacher">Mamnani, Ashia</option><option class="text-dark" value="95027807" data-type="Teacher">Man, Aeron</option><option class="text-dark" value="95035093" data-type="Teacher">Man, Aevin</option><option class="text-dark" value="95052804" data-type="Teacher">Maness, Zaddik</option><option class="text-dark" value="95052050" data-type="Teacher">Mang, Kwan Ming</option><option class="text-dark" value="95055604" data-type="Teacher">Manning, Paxton</option><option class="text-dark" value="95048884" data-type="Teacher">Manning, Stella</option><option class="text-dark" value="95030994" data-type="Teacher">Manou, Alexander</option><option class="text-dark" value="95033102" data-type="Teacher">Mao, Caroline</option><option class="text-dark" value="95054105" data-type="Teacher">Mao, Siyuan</option><option class="text-dark" value="95036228" data-type="Teacher">Maor, Naama</option><option class="text-dark" value="95030487" data-type="Teacher">Mar, McKayla</option><option class="text-dark" value="95031282" data-type="Teacher">Marcacci, Samuel</option><option class="text-dark" value="95031356" data-type="Teacher">Marin Covarrubias, Danna-Paola</option><option class="text-dark" value="95049399" data-type="Teacher">Marin, Anthony</option><option class="text-dark" value="95031062" data-type="Teacher">Martin, Alexandra</option><option class="text-dark" value="95040002" data-type="Teacher">Martin, Liam</option><option class="text-dark" value="95040142" data-type="Teacher">Martin, Serena</option><option class="text-dark" value="95037191" data-type="Teacher">Martin, Sofia</option><option class="text-dark" value="95037190" data-type="Teacher">Martin, Vanessa</option><option class="text-dark" value="95037260" data-type="Teacher">Martinez Castillo, Maria</option><option class="text-dark" value="95035009" data-type="Teacher">Martinez Lopez, Natalia</option><option class="text-dark" value="95030723" data-type="Teacher">Martinez Ramirez, Angel</option><option class="text-dark" value="95051367" data-type="Teacher">Martinez, Mateo</option><option class="text-dark" value="95035815" data-type="Teacher">Maskatia, Maryam</option><option class="text-dark" value="95035142" data-type="Teacher">Masoch, Ethan</option><option class="text-dark" value="95038630" data-type="Teacher">Massarweh, Dani</option><option class="text-dark" value="95038629" data-type="Teacher">Massarweh, Yazan</option><option class="text-dark" value="95033043" data-type="Teacher">Masuda, Midori</option><option class="text-dark" value="95036943" data-type="Teacher">Mathan, Anish</option><option class="text-dark" value="95049922" data-type="Teacher">Mathur, Tanmay</option><option class="text-dark" value="95034856" data-type="Teacher">Matta, Michael</option><option class="text-dark" value="95034686" data-type="Teacher">Mayor, Zara</option><option class="text-dark" value="95032669" data-type="Teacher">Mazzeo, Sophie</option><option class="text-dark" value="95033542" data-type="Teacher">McBurney, Paul</option><option class="text-dark" value="95035346" data-type="Teacher">McCalister, Christina</option><option class="text-dark" value="95037096" data-type="Teacher">McCloskey, Meridian</option><option class="text-dark" value="95035183" data-type="Teacher">McIver, Esher</option><option class="text-dark" value="95030490" data-type="Teacher">McPhillips, Christine</option><option class="text-dark" value="95034809" data-type="Teacher">Medina, Ian</option><option class="text-dark" value="95034810" data-type="Teacher">Meduri, Bharat</option><option class="text-dark" value="95032722" data-type="Teacher">Meduri, Sri</option><option class="text-dark" value="95032796" data-type="Teacher">Mehndiratta, Siddh</option><option class="text-dark" value="95049914" data-type="Teacher">Mei, Hannah</option><option class="text-dark" value="95049916" data-type="Teacher">Mei, Wayne</option><option class="text-dark" value="95037970" data-type="Teacher">Mendez, David</option><option class="text-dark" value="95030828" data-type="Teacher">Mendoza, Jorge</option><option class="text-dark" value="95030996" data-type="Teacher">Mendoza, Xitlali</option><option class="text-dark" value="95053614" data-type="Teacher">Meng, Fanqin</option><option class="text-dark" value="95055530" data-type="Teacher">Mengarelli, Ellen</option><option class="text-dark" value="95030491" data-type="Teacher">Menon, Rahil</option><option class="text-dark" value="95049493" data-type="Teacher">Mercea, Sarah</option><option class="text-dark" value="95055533" data-type="Teacher">Mermod, Auriane</option><option class="text-dark" value="95037452" data-type="Teacher">Messerian, Kai</option><option class="text-dark" value="95054920" data-type="Teacher">Metzenberg, Yuuki</option><option class="text-dark" value="95042157" data-type="Teacher">Meyers, Samuel</option><option class="text-dark" value="95035282" data-type="Teacher">Michelson, Zachary</option><option class="text-dark" value="95055725" data-type="Teacher">Middleton, Rhianna</option><option class="text-dark" value="95054972" data-type="Teacher">Middleton, Rian</option><option class="text-dark" value="95035148" data-type="Teacher">Milivojevic, Noelle</option><option class="text-dark" value="95039833" data-type="Teacher">Millard, Tristyn</option><option class="text-dark" value="95032747" data-type="Teacher">Miller, Lev</option><option class="text-dark" value="95035256" data-type="Teacher">Minion, Antonia</option><option class="text-dark" value="95030998" data-type="Teacher">Miradi, Hannah</option><option class="text-dark" value="95031914" data-type="Teacher">Miramontes, Maria</option><option class="text-dark" value="95030560" data-type="Teacher">Miri, Isabelle</option><option class="text-dark" value="95041971" data-type="Teacher">Mirza, Yahya</option><option class="text-dark" value="95041818" data-type="Teacher">Misra, Alexander</option><option class="text-dark" value="95033069" data-type="Teacher">Missett, Grace</option><option class="text-dark" value="95036338" data-type="Teacher">Mission, Cassandra</option><option class="text-dark" value="95041610" data-type="Teacher">Moeljo, Abigail</option><option class="text-dark" value="95055458" data-type="Teacher">Moey, Hadyn</option><option class="text-dark" value="95037569" data-type="Teacher">Mok, Nicole</option><option class="text-dark" value="95037389" data-type="Teacher">Molina, Haley</option><option class="text-dark" value="95037097" data-type="Teacher">Montano, Giselle</option><option class="text-dark" value="95033281" data-type="Teacher">Montegut, Claire</option><option class="text-dark" value="95043937" data-type="Teacher">Moo Vazquez, Jakelin</option><option class="text-dark" value="95027131" data-type="Teacher">Morales, Jose Guadalupe</option><option class="text-dark" value="95032688" data-type="Teacher">Morris, Noam</option><option class="text-dark" value="95053523" data-type="Teacher">Morrison, Milcah</option><option class="text-dark" value="95032793" data-type="Teacher">Moshfeghi, Martin</option><option class="text-dark" value="95030393" data-type="Teacher">Moss, Maya</option><option class="text-dark" value="95030392" data-type="Teacher">Moss, Ruth</option><option class="text-dark" value="95052055" data-type="Teacher">Mota-Judges, Chloe</option><option class="text-dark" value="95051209" data-type="Teacher">Mota-Judges, Phoebe</option><option class="text-dark" value="95030854" data-type="Teacher">Mou, Huining</option><option class="text-dark" value="95030561" data-type="Teacher">Mount, Thomas</option><option class="text-dark" value="95035150" data-type="Teacher">Mukamal, Zoe</option><option class="text-dark" value="95049670" data-type="Teacher">Mukhtar, Zara</option><option class="text-dark" value="95032918" data-type="Teacher">Munkhtur, Anoujin</option><option class="text-dark" value="95033498" data-type="Teacher">Murakami, Lauren</option><option class="text-dark" value="95030724" data-type="Teacher">Murase, Noah</option><option class="text-dark" value="95048842" data-type="Teacher">Musabaeva, Nazira</option><option class="text-dark" value="95045558" data-type="Teacher">Muthiah, Nikhil</option><option class="text-dark" value="95041631" data-type="Teacher">Na, Geonwoo</option><option class="text-dark" value="95054137" data-type="Teacher">Nadberezhnyi, David</option><option class="text-dark" value="95051277" data-type="Teacher">Nag, Aritra</option><option class="text-dark" value="95034942" data-type="Teacher">Nagayama, Julian</option><option class="text-dark" value="95031267" data-type="Teacher">Nakamura, Devin</option><option class="text-dark" value="95031180" data-type="Teacher">Nakayama, Taita</option><option class="text-dark" value="95039392" data-type="Teacher">Nam, Sophie</option><option class="text-dark" value="95051243" data-type="Teacher">Nambiar, Arihaan</option><option class="text-dark" value="95051244" data-type="Teacher">Nambiar, Arjun</option><option class="text-dark" value="95028535" data-type="Teacher">Nanevicz, Alexandra</option><option class="text-dark" value="95033391" data-type="Teacher">Nanevicz, Joseph</option><option class="text-dark" value="95044339" data-type="Teacher">Narcisse, Marcellus</option><option class="text-dark" value="95035098" data-type="Teacher">Nasser, Reza</option><option class="text-dark" value="95030532" data-type="Teacher">Nath, Ravina</option><option class="text-dark" value="95053265" data-type="Teacher">Navarro Medina, Natalie</option><option class="text-dark" value="95035258" data-type="Teacher">Naveh, Naomi</option><option class="text-dark" value="95032235" data-type="Teacher">Naveh, Yonatan</option><option class="text-dark" value="95030503" data-type="Teacher">Nazarenko, Anton</option><option class="text-dark" value="95031230" data-type="Teacher">Nebriaga, Naya</option><option class="text-dark" value="95033725" data-type="Teacher">Neesen, Floyd</option><option class="text-dark" value="95036310" data-type="Teacher">Nelson, Austin</option><option class="text-dark" value="95034376" data-type="Teacher">Neufeld, Daniel</option><option class="text-dark" value="95038438" data-type="Teacher">Nevels, William</option><option class="text-dark" value="95048254" data-type="Teacher">Ng, Chloe</option><option class="text-dark" value="95044465" data-type="Teacher">Ng, Enzo</option><option class="text-dark" value="95034755" data-type="Teacher">Ng, James</option><option class="text-dark" value="95049556" data-type="Teacher">Ng, Jed</option><option class="text-dark" value="95030217" data-type="Teacher">Ng, Kaishu</option><option class="text-dark" value="95032760" data-type="Teacher">Ng, Yuna</option><option class="text-dark" value="95036930" data-type="Teacher">Nguyen, Lucile</option><option class="text-dark" value="95035133" data-type="Teacher">Nguyen, Sylvie</option><option class="text-dark" value="95034674" data-type="Teacher">Nguyen, Vin</option><option class="text-dark" value="95036439" data-type="Teacher">Ni, Eric</option><option class="text-dark" value="95034491" data-type="Teacher">Ni, Luke</option><option class="text-dark" value="95031259" data-type="Teacher">Nicola, Zora</option><option class="text-dark" value="95041884" data-type="Teacher">Nieman, Maya</option><option class="text-dark" value="95055459" data-type="Teacher">Nim, Arnav</option><option class="text-dark" value="95047877" data-type="Teacher">Niwa, Yumeka</option><option class="text-dark" value="95043401" data-type="Teacher">Noble, Joaquin</option><option class="text-dark" value="95036670" data-type="Teacher">Noh, Saxon</option><option class="text-dark" value="95030865" data-type="Teacher">Norton, Audrey</option><option class="text-dark" value="95035507" data-type="Teacher">Novick, Allison</option><option class="text-dark" value="95038182" data-type="Teacher">Novikova, Veronica</option><option class="text-dark" value="95050980" data-type="Teacher">Novitskaya, Alisa</option><option class="text-dark" value="95045535" data-type="Teacher">O'Connell, Evelyne</option><option class="text-dark" value="95036166" data-type="Teacher">O'Donovan, Jack</option><option class="text-dark" value="95036167" data-type="Teacher">O'Donovan, Lia</option><option class="text-dark" value="95051211" data-type="Teacher">Ogawa, Lily</option><option class="text-dark" value="95051210" data-type="Teacher">Ogawa, Ray</option><option class="text-dark" value="95032555" data-type="Teacher">Oh, Justin</option><option class="text-dark" value="95036931" data-type="Teacher">Oh, Kristen</option><option class="text-dark" value="95055507" data-type="Teacher">Oh, Yejin</option><option class="text-dark" value="95031085" data-type="Teacher">Olbrich, Axel</option><option class="text-dark" value="95031238" data-type="Teacher">Olshen, Jacob</option><option class="text-dark" value="95033329" data-type="Teacher">Olvera, Lorenzo</option><option class="text-dark" value="95045534" data-type="Teacher">Oppenheim, Mikhael</option><option class="text-dark" value="95038486" data-type="Teacher">Orozco Solorio, Alexander</option><option class="text-dark" value="95035449" data-type="Teacher">Ortiz Millan, Severiano</option><option class="text-dark" value="95053639" data-type="Teacher">Ortiz, Belizia</option><option class="text-dark" value="95045801" data-type="Teacher">Ott, Charles</option><option class="text-dark" value="95045800" data-type="Teacher">Ott, Veronica</option><option class="text-dark" value="95051231" data-type="Teacher">Ou, Eric</option><option class="text-dark" value="95037899" data-type="Teacher">Ouellette, Alice</option><option class="text-dark" value="95037242" data-type="Teacher">Ouissal, Raheem</option><option class="text-dark" value="95030336" data-type="Teacher">Owen, Cameron</option><option class="text-dark" value="95034909" data-type="Teacher">Owen, Cooper</option><option class="text-dark" value="95047456" data-type="Teacher">Pabba, Pranav</option><option class="text-dark" value="95050734" data-type="Teacher">Pacheco Cotos, Fernando</option><option class="text-dark" value="95050735" data-type="Teacher">Pacheco Cotos, Flavio</option><option class="text-dark" value="95031348" data-type="Teacher">Padilla, Miguel</option><option class="text-dark" value="95031146" data-type="Teacher">Padilla, Valeria</option><option class="text-dark" value="95042325" data-type="Teacher">Pal, Rudra</option><option class="text-dark" value="95043014" data-type="Teacher">Pan, Shao Yu</option><option class="text-dark" value="95039649" data-type="Teacher">Panda, Aareev</option><option class="text-dark" value="95040017" data-type="Teacher">Panepucci, Ryan</option><option class="text-dark" value="95055281" data-type="Teacher">Papageorgiou, Zoe</option><option class="text-dark" value="95033562" data-type="Teacher">Parada Lopez, Queila</option><option class="text-dark" value="95036812" data-type="Teacher">Parang, Sophia</option><option class="text-dark" value="95049988" data-type="Teacher">Park, Chloe</option><option class="text-dark" value="95044398" data-type="Teacher">Park, Jaehyoung</option><option class="text-dark" value="95051422" data-type="Teacher">Park, Tae Hwan</option><option class="text-dark" value="95037115" data-type="Teacher">Park, Yoonsa</option><option class="text-dark" value="95032689" data-type="Teacher">Park, Yoonu</option><option class="text-dark" value="95052700" data-type="Teacher">Parker, Tobin</option><option class="text-dark" value="95034966" data-type="Teacher">Parth, Tanav</option><option class="text-dark" value="95055586" data-type="Teacher">Pasparakis, Emil</option><option class="text-dark" value="95030877" data-type="Teacher">Patterson, Emily</option><option class="text-dark" value="95053827" data-type="Teacher">Pauliac-Vaujour, Lou</option><option class="text-dark" value="95034776" data-type="Teacher">Payne, Veronica</option><option class="text-dark" value="95047774" data-type="Teacher">Pei, Ziwen</option><option class="text-dark" value="95035675" data-type="Teacher">Pellizzari, Albert</option><option class="text-dark" value="95042158" data-type="Teacher">Peng, Aidan</option><option class="text-dark" value="95036677" data-type="Teacher">Peng, Alex</option><option class="text-dark" value="95053548" data-type="Teacher">Peng, Biyao</option><option class="text-dark" value="95049560" data-type="Teacher">Peng, Harry</option><option class="text-dark" value="95049557" data-type="Teacher">Peng, Melody</option><option class="text-dark" value="95037200" data-type="Teacher">Peng, Victor</option><option class="text-dark" value="95035314" data-type="Teacher">Perez Navarrete, Elizabeth</option><option class="text-dark" value="95033590" data-type="Teacher">Perez-Gutierrez, Jocelyn</option><option class="text-dark" value="95031265" data-type="Teacher">Perkash, Maya</option><option class="text-dark" value="95032550" data-type="Teacher">Perry, Amelia</option><option class="text-dark" value="95033109" data-type="Teacher">Peterson, Dominic</option><option class="text-dark" value="95042965" data-type="Teacher">Petlur, Vineet</option><option class="text-dark" value="95040133" data-type="Teacher">Petridis, Marcus</option><option class="text-dark" value="95043898" data-type="Teacher">Petty, Nicholas</option><option class="text-dark" value="95053367" data-type="Teacher">Pham, Joseph</option><option class="text-dark" value="95033750" data-type="Teacher">Pheng, Adam</option><option class="text-dark" value="95037901" data-type="Teacher">Piedrahita, Joaquin</option><option class="text-dark" value="95035476" data-type="Teacher">Pieper, Jazmine</option><option class="text-dark" value="95037536" data-type="Teacher">Pilat, Samuel</option><option class="text-dark" value="95050721" data-type="Teacher">Pinto, Shira</option><option class="text-dark" value="95033049" data-type="Teacher">Pistaferri, Antonio</option><option class="text-dark" value="95026691" data-type="Teacher">Platti, Corbin</option><option class="text-dark" value="95032056" data-type="Teacher">Podulka, Ryan</option><option class="text-dark" value="95037465" data-type="Teacher">Polak, Gal</option><option class="text-dark" value="95033057" data-type="Teacher">Polak, Tomer</option><option class="text-dark" value="95031141" data-type="Teacher">Ponleithner, Kristen</option><option class="text-dark" value="95051381" data-type="Teacher">Poot Arcos, Zairy</option><option class="text-dark" value="95053568" data-type="Teacher">Popova, Aleksandra</option><option class="text-dark" value="95033355" data-type="Teacher">Porter, Nia</option><option class="text-dark" value="95035313" data-type="Teacher">Potashnik, Gregory</option><option class="text-dark" value="95055460" data-type="Teacher">Prado, Adrian</option><option class="text-dark" value="95055461" data-type="Teacher">Prado, Fabian</option><option class="text-dark" value="95032929" data-type="Teacher">Prior, Jameson</option><option class="text-dark" value="95035702" data-type="Teacher">Pritchard, Lucy</option><option class="text-dark" value="95034679" data-type="Teacher">Punzalan, Keefe Aiden</option><option class="text-dark" value="95033118" data-type="Teacher">Purba, Jasmine</option><option class="text-dark" value="95045060" data-type="Teacher">Purnama, Ilona</option><option class="text-dark" value="95035106" data-type="Teacher">Qi, Andrew</option><option class="text-dark" value="95051146" data-type="Teacher">Qi, Daxin</option><option class="text-dark" value="95035681" data-type="Teacher">Qian, Benjamin</option><option class="text-dark" value="95034156" data-type="Teacher">Qian, Charlotte</option><option class="text-dark" value="95034816" data-type="Teacher">Qin, Catherine</option><option class="text-dark" value="95031826" data-type="Teacher">Qin, Youyang</option><option class="text-dark" value="95048012" data-type="Teacher">Qiu, Liming</option><option class="text-dark" value="95028561" data-type="Teacher">Qu, Dylan</option><option class="text-dark" value="95035395" data-type="Teacher">Quan, Maxwell</option><option class="text-dark" value="95055699" data-type="Teacher">Quettawala, Khadija</option><option class="text-dark" value="95030859" data-type="Teacher">Quinonez, Mya</option><option class="text-dark" value="95030683" data-type="Teacher">Qureshi, Khalil</option><option class="text-dark" value="95036816" data-type="Teacher">Qureshi, Sahil</option><option class="text-dark" value="95032812" data-type="Teacher">Racz, James</option><option class="text-dark" value="95055718" data-type="Teacher">Rada-Coronel, Matias</option><option class="text-dark" value="95055126" data-type="Teacher">Rada-Coronel, Sebastian Rodrigo</option><option class="text-dark" value="95055715" data-type="Teacher">Radhakrishnan, Azuki</option><option class="text-dark" value="95045881" data-type="Teacher">Rahim, Inaaya</option><option class="text-dark" value="95042014" data-type="Teacher">Rahim, Sami</option><option class="text-dark" value="95042015" data-type="Teacher">Rahim, Zakaria</option><option class="text-dark" value="95031280" data-type="Teacher">Rahimtoola, Gibran</option><option class="text-dark" value="95043602" data-type="Teacher">Raja Vignesh, Vyasraj</option><option class="text-dark" value="95043656" data-type="Teacher">Raja, Indira</option><option class="text-dark" value="95053531" data-type="Teacher">Raja, Surya</option><option class="text-dark" value="95053532" data-type="Teacher">Raja, Vijay</option><option class="text-dark" value="95046866" data-type="Teacher">Rajan, Kunal</option><option class="text-dark" value="95036992" data-type="Teacher">Rajan, Nalan</option><option class="text-dark" value="95033606" data-type="Teacher">Rajan, Oviya</option><option class="text-dark" value="95049483" data-type="Teacher">Rajwar, Anjali</option><option class="text-dark" value="95049453" data-type="Teacher">Rajwar, Nina</option><option class="text-dark" value="95035016" data-type="Teacher">Ram, Avanti</option><option class="text-dark" value="95030639" data-type="Teacher">Raman, Antara</option><option class="text-dark" value="95033873" data-type="Teacher">Rana, Anaya</option><option class="text-dark" value="95033671" data-type="Teacher">Rande, Vello</option><option class="text-dark" value="95038585" data-type="Teacher">Rangan, Neel</option><option class="text-dark" value="95053077" data-type="Teacher">Ranyushkin, Timofey</option><option class="text-dark" value="95030334" data-type="Teacher">Rao, Arjun</option><option class="text-dark" value="95037818" data-type="Teacher">Rao, Muhammad Arez Amir</option><option class="text-dark" value="95030335" data-type="Teacher">Rao, Rohan</option><option class="text-dark" value="95046034" data-type="Teacher">Rao, Sahar</option><option class="text-dark" value="95042057" data-type="Teacher">Rao-Mruthyunjaya, Prianka</option><option class="text-dark" value="95031130" data-type="Teacher">Rashid, Etta</option><option class="text-dark" value="95037509" data-type="Teacher">Rashid, Nola</option><option class="text-dark" value="95034205" data-type="Teacher">Ravi, Vandana</option><option class="text-dark" value="95030920" data-type="Teacher">Rayner, Andre</option><option class="text-dark" value="95032091" data-type="Teacher">Raza, Zara</option><option class="text-dark" value="95034913" data-type="Teacher">Raza, Zoya</option><option class="text-dark" value="95034011" data-type="Teacher">Reed, Sarina</option><option class="text-dark" value="95051054" data-type="Teacher">Reeder Jr, John</option><option class="text-dark" value="95047651" data-type="Teacher">Ren, Evelyn</option><option class="text-dark" value="95047650" data-type="Teacher">Ren, Lillian</option><option class="text-dark" value="95037705" data-type="Teacher">Ren, Samuel</option><option class="text-dark" value="95044044" data-type="Teacher">Ren, Yuchen</option><option class="text-dark" value="95035464" data-type="Teacher">Renauld, Chilperic</option><option class="text-dark" value="95047693" data-type="Teacher">Rene-Corail, Chania</option><option class="text-dark" value="95047694" data-type="Teacher">Rene-Corail, Joshua</option><option class="text-dark" value="95034819" data-type="Teacher">Resina, Eliana</option><option class="text-dark" value="95037510" data-type="Teacher">Reyes, Isaac</option><option class="text-dark" value="95033723" data-type="Teacher">Reyes, Trevor</option><option class="text-dark" value="95036682" data-type="Teacher">Richardson, Atlas</option><option class="text-dark" value="95034680" data-type="Teacher">Rickling, Rachael</option><option class="text-dark" value="95051372" data-type="Teacher">Rigel, Grant</option><option class="text-dark" value="95037265" data-type="Teacher">Rios, Kirsten</option><option class="text-dark" value="95033013" data-type="Teacher">Rios, Natalie</option><option class="text-dark" value="95032886" data-type="Teacher">Rischmoller, Giovanni</option><option class="text-dark" value="95051250" data-type="Teacher">Rivera, Helen</option><option class="text-dark" value="95055606" data-type="Teacher">Rivett, Thomas</option><option class="text-dark" value="95044444" data-type="Teacher">Rivlin, Yuval</option><option class="text-dark" value="95041122" data-type="Teacher">Rizzi, Jillian</option><option class="text-dark" value="95030640" data-type="Teacher">Robinson, Botan</option><option class="text-dark" value="95044506" data-type="Teacher">Robison, Nikki</option><option class="text-dark" value="95033304" data-type="Teacher">Rodarte Diaz, Sophia</option><option class="text-dark" value="95030403" data-type="Teacher">Rodden, Anna</option><option class="text-dark" value="95036874" data-type="Teacher">Rodden, Evelyn</option><option class="text-dark" value="95045882" data-type="Teacher">Rodrigo, Jazmin</option><option class="text-dark" value="95055462" data-type="Teacher">Rodrigues, Priyanka</option><option class="text-dark" value="95032758" data-type="Teacher">Rodriguez-Dominguez, Andrea</option><option class="text-dark" value="95033632" data-type="Teacher">Rodwell, Helena</option><option class="text-dark" value="95038056" data-type="Teacher">Rogers, Ramona</option><option class="text-dark" value="95037035" data-type="Teacher">Rohatgi, Mira</option><option class="text-dark" value="95037036" data-type="Teacher">Rohatgi, Uma</option><option class="text-dark" value="95036772" data-type="Teacher">Roldan Cisneros, Angel</option><option class="text-dark" value="95036817" data-type="Teacher">Romero, Deborah</option><option class="text-dark" value="95034726" data-type="Teacher">Romero, Isaac</option><option class="text-dark" value="95036236" data-type="Teacher">Rong, Sophie</option><option class="text-dark" value="95055675" data-type="Teacher">Rosales Garcia, Santiago</option><option class="text-dark" value="95049605" data-type="Teacher">Rosales, Marissa</option><option class="text-dark" value="95054919" data-type="Teacher">Rose, Daniel</option><option class="text-dark" value="95037266" data-type="Teacher">Rosenberg, Ezra</option><option class="text-dark" value="95031178" data-type="Teacher">Rosenzweig, Alexander</option><option class="text-dark" value="95047699" data-type="Teacher">Rosh, Angelina</option><option class="text-dark" value="95032985" data-type="Teacher">Ross, Nathan</option><option class="text-dark" value="95045783" data-type="Teacher">Rowe, William</option><option class="text-dark" value="95030880" data-type="Teacher">Rueff, Joseph</option><option class="text-dark" value="95030881" data-type="Teacher">Rueff, Kristina</option><option class="text-dark" value="95032982" data-type="Teacher">Ruelas Martinez, Joseph</option><option class="text-dark" value="95044522" data-type="Teacher">Ruiz Garcia, Yaretzi</option><option class="text-dark" value="95047151" data-type="Teacher">Ruparel, Jia</option><option class="text-dark" value="95032989" data-type="Teacher"><template class="__cf_email__" data-cfemail="285a521b1a1110116858495d5b4c065d5b">[email&#160;protected]</template></option><option class="text-dark" value="95028175" data-type="Teacher">Sa, Ethan</option><option class="text-dark" value="95034859" data-type="Teacher">Sa, Kiana</option><option class="text-dark" value="95037005" data-type="Teacher">Saab-Sunden, Alexander</option><option class="text-dark" value="95052040" data-type="Teacher">Saad, Mia</option><option class="text-dark" value="95047442" data-type="Teacher">Sabbat, Thierry</option><option class="text-dark" value="95037099" data-type="Teacher">Sachs, Caitlyn</option><option class="text-dark" value="95037300" data-type="Teacher">Sachs, Oliver</option><option class="text-dark" value="95043860" data-type="Teacher">Sadyk Erlan, Mansur</option><option class="text-dark" value="95033800" data-type="Teacher">Safa, Celine</option><option class="text-dark" value="95053384" data-type="Teacher">Saffer, Carmen</option><option class="text-dark" value="95034921" data-type="Teacher">Sahami, Neil</option><option class="text-dark" value="95030410" data-type="Teacher">Sahami, William</option><option class="text-dark" value="95047807" data-type="Teacher">Sajith, Saniya</option><option class="text-dark" value="95050415" data-type="Teacher">Sakre, Perissa</option><option class="text-dark" value="95037038" data-type="Teacher">Saksena, Sahil</option><option class="text-dark" value="95038062" data-type="Teacher">Salcman, Olivia</option><option class="text-dark" value="95030961" data-type="Teacher">Samsonov, Polina</option><option class="text-dark" value="95033159" data-type="Teacher">Sanami, Rin</option><option class="text-dark" value="95035110" data-type="Teacher">Sanami, Shu</option><option class="text-dark" value="95055011" data-type="Teacher">Sanchez, Camila</option><option class="text-dark" value="95036607" data-type="Teacher">Sandhuja, Agastya</option><option class="text-dark" value="95040191" data-type="Teacher">Sandilya, Shreevatsa</option><option class="text-dark" value="95034916" data-type="Teacher">Sandomire, Rosalind</option><option class="text-dark" value="95035554" data-type="Teacher">Sandoval Aquino, Elias</option><option class="text-dark" value="95031920" data-type="Teacher">Sandoval, Joshua</option><option class="text-dark" value="95042577" data-type="Teacher">Sandoval, Luis</option><option class="text-dark" value="95030962" data-type="Teacher">Sandoval, Melissa</option><option class="text-dark" value="95035022" data-type="Teacher">Sandoval-Romero, Marlin</option><option class="text-dark" value="95032924" data-type="Teacher">Sane, Nikita</option><option class="text-dark" value="95037653" data-type="Teacher">Sangalang, Keira</option><option class="text-dark" value="95037006" data-type="Teacher">Sarkosh, Alex</option><option class="text-dark" value="95030405" data-type="Teacher">Sarkosh, Ashley</option><option class="text-dark" value="95041571" data-type="Teacher">Sarrazin, Amelie</option><option class="text-dark" value="95054961" data-type="Teacher">Satheesh, Sherlin</option><option class="text-dark" value="95033707" data-type="Teacher">Sato, Kameron</option><option class="text-dark" value="95036498" data-type="Teacher">Satpathy, Sangeet</option><option class="text-dark" value="95038928" data-type="Teacher">Saxena, Vaani</option><option class="text-dark" value="95045110" data-type="Teacher">Scheib, Julia</option><option class="text-dark" value="95045111" data-type="Teacher">Scheib, Thomas</option><option class="text-dark" value="95048885" data-type="Teacher">Scheinman, Joshua</option><option class="text-dark" value="95033982" data-type="Teacher">Schettino Gonzalez, Pablo</option><option class="text-dark" value="95055999" data-type="Teacher">Schmedders, Jakob</option><option class="text-dark" value="95031839" data-type="Teacher">Schoenen, Analiesse</option><option class="text-dark" value="95051625" data-type="Teacher">Schreiber, Mia</option><option class="text-dark" value="95033413" data-type="Teacher">Schroeder, Owen</option><option class="text-dark" value="95049456" data-type="Teacher">Schube, Orly</option><option class="text-dark" value="95049460" data-type="Teacher">Schube, Talya</option><option class="text-dark" value="95031359" data-type="Teacher">Schultz, Julian</option><option class="text-dark" value="95033227" data-type="Teacher">Schwab, Tara</option><option class="text-dark" value="95035297" data-type="Teacher">Schwartz, Daniel</option><option class="text-dark" value="95036948" data-type="Teacher">Schwartz, Sarai</option><option class="text-dark" value="95032708" data-type="Teacher">Schwartzman, Mark</option><option class="text-dark" value="95035710" data-type="Teacher">Secor, Leif</option><option class="text-dark" value="95033125" data-type="Teacher">Sedan, Eyal</option><option class="text-dark" value="95035192" data-type="Teacher">See, Rylan</option><option class="text-dark" value="95036951" data-type="Teacher">Seestone, Benjamin</option><option class="text-dark" value="95040925" data-type="Teacher">Seidel, Holden</option><option class="text-dark" value="95036840" data-type="Teacher">Seidel, Ronan</option><option class="text-dark" value="95030928" data-type="Teacher">Seley, Jake</option><option class="text-dark" value="95032881" data-type="Teacher">Seley, Luke</option><option class="text-dark" value="95036685" data-type="Teacher">Selker, Brooke</option><option class="text-dark" value="95030731" data-type="Teacher">Selvaraj, Lauryn</option><option class="text-dark" value="95037771" data-type="Teacher">Selvaretnam, Mihlaan</option><option class="text-dark" value="95035392" data-type="Teacher">Semeria, Matthias</option><option class="text-dark" value="95036687" data-type="Teacher">Sen, Maitreyee</option><option class="text-dark" value="95036962" data-type="Teacher">Seo, Grace</option><option class="text-dark" value="95036186" data-type="Teacher">Seo, Jiho</option><option class="text-dark" value="95047467" data-type="Teacher">Seow, Ashley</option><option class="text-dark" value="95047466" data-type="Teacher">Seow, Brandon</option><option class="text-dark" value="95041846" data-type="Teacher">Seru, Armand</option><option class="text-dark" value="95030407" data-type="Teacher">Seshadri, Archith</option><option class="text-dark" value="95048008" data-type="Teacher">Shaikh, Zara</option><option class="text-dark" value="95030411" data-type="Teacher">Shao, Chinyoung</option><option class="text-dark" value="95035136" data-type="Teacher">Shao, Tienming</option><option class="text-dark" value="95031236" data-type="Teacher">Shark, Lucille</option><option class="text-dark" value="95042398" data-type="Teacher">Sharma, Aditya</option><option class="text-dark" value="95037159" data-type="Teacher">Sharma, Deven</option><option class="text-dark" value="95055649" data-type="Teacher">Sharokhi, Faisal</option><option class="text-dark" value="95045121" data-type="Teacher">Sharon, Adi</option><option class="text-dark" value="95030412" data-type="Teacher">Shea, Justin</option><option class="text-dark" value="95037924" data-type="Teacher">Shen, Evelyn</option><option class="text-dark" value="95031008" data-type="Teacher">Shen, Suya</option><option class="text-dark" value="95043661" data-type="Teacher">Sheng, Cathy</option><option class="text-dark" value="95043662" data-type="Teacher">Sheng, Stephen</option><option class="text-dark" value="95028914" data-type="Teacher">Shetty, Amar</option><option class="text-dark" value="95032819" data-type="Teacher">Shi, Bingwu</option><option class="text-dark" value="95054915" data-type="Teacher">Shi, Emily</option><option class="text-dark" value="95033384" data-type="Teacher">Shi, HongYi</option><option class="text-dark" value="95053050" data-type="Teacher">Shih, Erin</option><option class="text-dark" value="95031239" data-type="Teacher">Shih, Ethan</option><option class="text-dark" value="95032358" data-type="Teacher">Shilov, Michael</option><option class="text-dark" value="95051232" data-type="Teacher">Shin, Dongyoon</option><option class="text-dark" value="95053372" data-type="Teacher">Shin, Jiwoo</option><option class="text-dark" value="95036694" data-type="Teacher">Shin, Joanna</option><option class="text-dark" value="95032152" data-type="Teacher">Shin, Zinna</option><option class="text-dark" value="95044122" data-type="Teacher">Shirvani, Zahra</option><option class="text-dark" value="95038108" data-type="Teacher">Shong, Ethan</option><option class="text-dark" value="95056015" data-type="Teacher">Shrimali, Swayam</option><option class="text-dark" value="95032828" data-type="Teacher">Shrivastava, Nikhil</option><option class="text-dark" value="95045918" data-type="Teacher">Shuler, River</option><option class="text-dark" value="95045919" data-type="Teacher">Shuler, Tiblet</option><option class="text-dark" value="95045591" data-type="Teacher">Siddeek, Hamza</option><option class="text-dark" value="95045585" data-type="Teacher">Siddeek, Hana</option><option class="text-dark" value="95035217" data-type="Teacher">Sidhu, Aliya</option><option class="text-dark" value="95030642" data-type="Teacher">Sidhu, Devin</option><option class="text-dark" value="95036563" data-type="Teacher">Silva Rezvani, Cyrus</option><option class="text-dark" value="95045884" data-type="Teacher">Silverman, Alexander</option><option class="text-dark" value="95038219" data-type="Teacher">Silverman, Zachary</option><option class="text-dark" value="95043935" data-type="Teacher">Simonowicz, Natalie</option><option class="text-dark" value="95047800" data-type="Teacher">Singal, Sera</option><option class="text-dark" value="95044458" data-type="Teacher">Singh, Arnav</option><option class="text-dark" value="95044459" data-type="Teacher">Singh, Raina</option><option class="text-dark" value="95047726" data-type="Teacher">Singh, Riya</option><option class="text-dark" value="95047725" data-type="Teacher">Singh, Shuban</option><option class="text-dark" value="95036364" data-type="Teacher">Singhal, Mira</option><option class="text-dark" value="95033265" data-type="Teacher">Sinha, Arjun</option><option class="text-dark" value="95042209" data-type="Teacher">Sinha, Isha</option><option class="text-dark" value="95055144" data-type="Teacher">Sinigaglia, Caterina</option><option class="text-dark" value="95054313" data-type="Teacher">Sinigaglia, Ludovico</option><option class="text-dark" value="95055636" data-type="Teacher">Sinsay, Claire</option><option class="text-dark" value="95039343" data-type="Teacher">Sivagar, Fiona</option><option class="text-dark" value="95033268" data-type="Teacher">Sivaraman, Satvik</option><option class="text-dark" value="95037801" data-type="Teacher">Skinner, Gabriella</option><option class="text-dark" value="95033042" data-type="Teacher">Skinner, George</option><option class="text-dark" value="95037802" data-type="Teacher">Skinner, Maximus</option><option class="text-dark" value="95040408" data-type="Teacher">Skogen, Arlo</option><option class="text-dark" value="95055194" data-type="Teacher">Slay Jr, Darryl</option><option class="text-dark" value="95051636" data-type="Teacher">Slyusar, Anastasia</option><option class="text-dark" value="95051635" data-type="Teacher">Slyusar, Elizabeth</option><option class="text-dark" value="95047716" data-type="Teacher">Smaaberg-Arnhoff, Mikkel</option><option class="text-dark" value="95047717" data-type="Teacher">Smaaberg-Arnhoff, Ulrik</option><option class="text-dark" value="95030513" data-type="Teacher">Smith, Emma</option><option class="text-dark" value="95034545" data-type="Teacher">Smith, Harrisen</option><option class="text-dark" value="95052576" data-type="Teacher">Smith, Makena</option><option class="text-dark" value="95037040" data-type="Teacher">Smith, Trinity</option><option class="text-dark" value="95045832" data-type="Teacher">Smolyar, Yonatan</option><option class="text-dark" value="95041604" data-type="Teacher">Snyder, Samantha</option><option class="text-dark" value="95034684" data-type="Teacher">Solanki, Aman</option><option class="text-dark" value="95030547" data-type="Teacher">Solloway, Bohdi</option><option class="text-dark" value="95037467" data-type="Teacher">Solloway, Neo</option><option class="text-dark" value="95037041" data-type="Teacher">Solorio Garrison, Sofia</option><option class="text-dark" value="95031143" data-type="Teacher">Somera, Nicole</option><option class="text-dark" value="95034707" data-type="Teacher">Sonehara, Alisa</option><option class="text-dark" value="95052687" data-type="Teacher">Song, Alexander</option><option class="text-dark" value="95033601" data-type="Teacher">Song, Jiyoon</option><option class="text-dark" value="95041596" data-type="Teacher">Song, Melody</option><option class="text-dark" value="95055282" data-type="Teacher">Song, Yujia</option><option class="text-dark" value="95035892" data-type="Teacher">Soo, Ethan</option><option class="text-dark" value="95045578" data-type="Teacher">Soria Salgado, Ricardo</option><option class="text-dark" value="95032895" data-type="Teacher">Souter, Olivia</option><option class="text-dark" value="95033446" data-type="Teacher">Spackman, Edwin</option><option class="text-dark" value="95032810" data-type="Teacher">Spasojevic, Nina</option><option class="text-dark" value="95035058" data-type="Teacher">Sperandio, Dylan</option><option class="text-dark" value="95038684" data-type="Teacher">Sperow, Lulu</option><option class="text-dark" value="95038685" data-type="Teacher">Sperow, Zsa Zsa</option><option class="text-dark" value="95038571" data-type="Teacher">Sriperumbudur, Haas</option><option class="text-dark" value="95031429" data-type="Teacher">Stanchev, Daniel</option><option class="text-dark" value="95034826" data-type="Teacher">Stauffer, Dilipp</option><option class="text-dark" value="95046429" data-type="Teacher">Steinwert-Arrowood, Grady</option><option class="text-dark" value="95042852" data-type="Teacher">Stepanova, Maya</option><option class="text-dark" value="95038295" data-type="Teacher">Stern, Eleanor</option><option class="text-dark" value="95036701" data-type="Teacher">Stevenson, Cole</option><option class="text-dark" value="95030693" data-type="Teacher">Stoltz, Myles</option><option class="text-dark" value="95055724" data-type="Teacher">Streeter Benjamin, Aliyah</option><option class="text-dark" value="95036437" data-type="Teacher">Studdert, Vivian</option><option class="text-dark" value="95032762" data-type="Teacher">Su, Stella</option><option class="text-dark" value="95044129" data-type="Teacher">Su, Yunru</option><option class="text-dark" value="95032571" data-type="Teacher">Subramanian, Nithilaambigai</option><option class="text-dark" value="95037108" data-type="Teacher">Subramanian, Sambavee</option><option class="text-dark" value="95041955" data-type="Teacher">Suh, Jacob</option><option class="text-dark" value="95032586" data-type="Teacher">Suh, Yuna</option><option class="text-dark" value="95036174" data-type="Teacher">Sullivan, Finnian</option><option class="text-dark" value="95045748" data-type="Teacher">Sun, Grace</option><option class="text-dark" value="95034661" data-type="Teacher">Sutherland, Meagan</option><option class="text-dark" value="95045890" data-type="Teacher">Swaminathan, Aditya</option><option class="text-dark" value="95035403" data-type="Teacher">Syed, Amarina</option><option class="text-dark" value="95041972" data-type="Teacher">Syed, Daanish</option><option class="text-dark" value="95030888" data-type="Teacher">Syed, Rania</option><option class="text-dark" value="95048891" data-type="Teacher">Tabares, Solimar</option><option class="text-dark" value="95050388" data-type="Teacher">Tachner, Samuel</option><option class="text-dark" value="95049518" data-type="Teacher">Tacy, Siena</option><option class="text-dark" value="95053012" data-type="Teacher">Tadipatri, Jaanvi</option><option class="text-dark" value="95040267" data-type="Teacher">Taheri Schierhuber, Azaadeh Hannah</option><option class="text-dark" value="95031857" data-type="Teacher">Tal, Noam</option><option class="text-dark" value="95034757" data-type="Teacher">Tambar, Arav</option><option class="text-dark" value="95053806" data-type="Teacher">Tamjeed, Ayyan</option><option class="text-dark" value="95047724" data-type="Teacher">Tan, Julius</option><option class="text-dark" value="95050737" data-type="Teacher">Tanaka, Michi</option><option class="text-dark" value="95033459" data-type="Teacher">Tang, Alyssa</option><option class="text-dark" value="95033112" data-type="Teacher">Tang, Karen</option><option class="text-dark" value="95030964" data-type="Teacher">Tang, Marissa</option><option class="text-dark" value="95054916" data-type="Teacher">Taniguchi, Kanami</option><option class="text-dark" value="95030645" data-type="Teacher">Tannenwald, Sarah</option><option class="text-dark" value="95040084" data-type="Teacher">Tanriverdi, Andersen</option><option class="text-dark" value="95030548" data-type="Teacher">Tapaskar, Mahadev</option><option class="text-dark" value="95053084" data-type="Teacher">Tatavarty, Kaavya</option><option class="text-dark" value="95037584" data-type="Teacher">Taylor, Eva</option><option class="text-dark" value="95031009" data-type="Teacher">Teare, Luke</option><option class="text-dark" value="95030734" data-type="Teacher">Tejeda, Angeles</option><option class="text-dark" value="95036744" data-type="Teacher">Thakkar, Neev</option><option class="text-dark" value="95030420" data-type="Teacher">Thakkar, Nilay</option><option class="text-dark" value="95053932" data-type="Teacher">Thangavelu, Sanjana</option><option class="text-dark" value="95030696" data-type="Teacher">Thapar, Anika</option><option class="text-dark" value="95032705" data-type="Teacher">Thapar, Jay</option><option class="text-dark" value="95054049" data-type="Teacher">Thirunagari, Meera</option><option class="text-dark" value="95035851" data-type="Teacher">Thiyagarajan, Tilak</option><option class="text-dark" value="95032990" data-type="Teacher">Thomas, Evan</option><option class="text-dark" value="95022238" data-type="Teacher">Thorjussen, Alexander</option><option class="text-dark" value="95035111" data-type="Teacher">Thrun, Jasper</option><option class="text-dark" value="95034827" data-type="Teacher">Thu, Alexander</option><option class="text-dark" value="95032672" data-type="Teacher">Tierney, Dennis</option><option class="text-dark" value="95030646" data-type="Teacher">Tilghman, Sophia</option><option class="text-dark" value="95054689" data-type="Teacher">Timokhin, Maxim</option><option class="text-dark" value="95054019" data-type="Teacher">Tinae, Devlin</option><option class="text-dark" value="95032835" data-type="Teacher">Tivol, Violet</option><option class="text-dark" value="95042912" data-type="Teacher">Tkach, Pavlo</option><option class="text-dark" value="95028721" data-type="Teacher">Tobar Campos, Millie</option><option class="text-dark" value="95030882" data-type="Teacher">Tok, Nolan</option><option class="text-dark" value="95040495" data-type="Teacher">Tomaszewski, Yayoi</option><option class="text-dark" value="95033136" data-type="Teacher">Tong, Kean</option><option class="text-dark" value="95053484" data-type="Teacher">Torres Juarez, Amy</option><option class="text-dark" value="95055534" data-type="Teacher">Torres Ocampo, Brandon</option><option class="text-dark" value="95055535" data-type="Teacher">Torres Ocampo, Brayan</option><option class="text-dark" value="95035750" data-type="Teacher">Torres Salgado, Chelsea</option><option class="text-dark" value="95033605" data-type="Teacher">Torres, Abigail</option><option class="text-dark" value="95053711" data-type="Teacher">Torres, Cristopher</option><option class="text-dark" value="95035450" data-type="Teacher">Torres-Lozano, Hector</option><option class="text-dark" value="95047801" data-type="Teacher">Trainor, Deegan</option><option class="text-dark" value="95039826" data-type="Teacher">Tran, Arthur Khang</option><option class="text-dark" value="95049884" data-type="Teacher">Tran, Minh</option><option class="text-dark" value="95050424" data-type="Teacher">Tran, Ruby</option><option class="text-dark" value="95043508" data-type="Teacher">Truesdale, Abigail</option><option class="text-dark" value="95047519" data-type="Teacher">Trujillo-Mata, Alexandra</option><option class="text-dark" value="95031844" data-type="Teacher"><template class="__cf_email__" data-cfemail="e99d9adad8d1dddda999889c9a8dc79c9a">[email&#160;protected]</template></option><option class="text-dark" value="95036723" data-type="Teacher">Tsai, David</option><option class="text-dark" value="95036724" data-type="Teacher">Tsai, Jonathan</option><option class="text-dark" value="95037366" data-type="Teacher">Tsai, Vincent</option><option class="text-dark" value="95032645" data-type="Teacher">Tsao, Tylor</option><option class="text-dark" value="95053807" data-type="Teacher">Tse, Ming</option><option class="text-dark" value="95032285" data-type="Teacher">Tse, Ryan</option><option class="text-dark" value="95045427" data-type="Teacher">Tsen, Irene Ling I</option><option class="text-dark" value="95045428" data-type="Teacher">Tsen, Janus Ling An</option><option class="text-dark" value="95035060" data-type="Teacher">Tseng, Carina</option><option class="text-dark" value="95032914" data-type="Teacher">Tsien, Matthew</option><option class="text-dark" value="95036434" data-type="Teacher">Tsin, Elizabeth</option><option class="text-dark" value="95037675" data-type="Teacher">Tudor, Vanessa</option><option class="text-dark" value="95052685" data-type="Teacher">Tuffley, Gianna</option><option class="text-dark" value="95042507" data-type="Teacher">Turean, Sophia</option><option class="text-dark" value="95036423" data-type="Teacher">Turgut, Arda</option><option class="text-dark" value="95044167" data-type="Teacher">Udayagiri, Akiro</option><option class="text-dark" value="95055686" data-type="Teacher">Uhlirova, Roza</option><option class="text-dark" value="95035363" data-type="Teacher">Ulfarsson, Haukur</option><option class="text-dark" value="95037109" data-type="Teacher">Upstill, Mirabelle</option><option class="text-dark" value="95046041" data-type="Teacher">Urrutia, Jaya</option><option class="text-dark" value="95030648" data-type="Teacher">Vakil, Benjamin</option><option class="text-dark" value="95041668" data-type="Teacher">Valame, Reshma</option><option class="text-dark" value="95043905" data-type="Teacher">Valdez, Isaac</option><option class="text-dark" value="95030817" data-type="Teacher">Vale, Parker</option><option class="text-dark" value="95033495" data-type="Teacher">Valle, Adriana</option><option class="text-dark" value="95037579" data-type="Teacher">van den Bedem, Jasper</option><option class="text-dark" value="95030423" data-type="Teacher">Van Gorden, Luce</option><option class="text-dark" value="95046220" data-type="Teacher">Van Roy, Mina</option><option class="text-dark" value="95050701" data-type="Teacher">van Schewick, Daniel</option><option class="text-dark" value="95037869" data-type="Teacher">Vartak, Sharvari</option><option class="text-dark" value="95032902" data-type="Teacher">Vasanawala, Sauram</option><option class="text-dark" value="95039686" data-type="Teacher">Vasilevskiy, Misha</option><option class="text-dark" value="95055808" data-type="Teacher">Vatankhah, Tine</option><option class="text-dark" value="95030898" data-type="Teacher">Vega, Andres</option><option class="text-dark" value="95029292" data-type="Teacher">Velasquez, Benjamin</option><option class="text-dark" value="95051971" data-type="Teacher">Velasquez, Narciso</option><option class="text-dark" value="95034051" data-type="Teacher">Velazquez Martinez, Juan</option><option class="text-dark" value="95032930" data-type="Teacher">Venkatraman, Matilda</option><option class="text-dark" value="95030649" data-type="Teacher">Verbeek, Chase</option><option class="text-dark" value="95055629" data-type="Teacher">Vig, Vanisha</option><option class="text-dark" value="95036307" data-type="Teacher">Villalobos Perez, Guadalupe</option><option class="text-dark" value="95050698" data-type="Teacher">Villanueva Dominguez, Keylee</option><option class="text-dark" value="95031374" data-type="Teacher">Villanueva, Larissa</option><option class="text-dark" value="95035151" data-type="Teacher">Virgen, Ruby</option><option class="text-dark" value="95040330" data-type="Teacher">Vivekanand, Zara</option><option class="text-dark" value="95030966" data-type="Teacher">Voltmer, Nicholas</option><option class="text-dark" value="95053065" data-type="Teacher">Voss, Annamaria</option><option class="text-dark" value="95030818" data-type="Teacher">Vossough, Ryan</option><option class="text-dark" value="95034728" data-type="Teacher">Vrudny, Natasha</option><option class="text-dark" value="95034831" data-type="Teacher">Vu, Hannah</option><option class="text-dark" value="95037654" data-type="Teacher">Wallach, Gia</option><option class="text-dark" value="95046860" data-type="Teacher">Waltuch, Thelonius</option><option class="text-dark" value="95037145" data-type="Teacher">Wang, Andrew</option><option class="text-dark" value="95050723" data-type="Teacher">Wang, Anriya</option><option class="text-dark" value="95050722" data-type="Teacher">Wang, Arihao</option><option class="text-dark" value="95032837" data-type="Teacher">Wang, Chloe</option><option class="text-dark" value="95040048" data-type="Teacher">Wang, Colby</option><option class="text-dark" value="95046209" data-type="Teacher">Wang, Daniel</option><option class="text-dark" value="95053499" data-type="Teacher">Wang, Daniel</option><option class="text-dark" value="95054452" data-type="Teacher">Wang, Eileen</option><option class="text-dark" value="95033116" data-type="Teacher">Wang, Irene</option><option class="text-dark" value="95043964" data-type="Teacher">Wang, Isaac</option><option class="text-dark" value="95030762" data-type="Teacher">Wang, Jerry</option><option class="text-dark" value="95051126" data-type="Teacher">Wang, Lucas</option><option class="text-dark" value="95030427" data-type="Teacher">Wang, Max</option><option class="text-dark" value="95044364" data-type="Teacher">Wang, Michael</option><option class="text-dark" value="95054981" data-type="Teacher">Wang, Mike</option><option class="text-dark" value="95033044" data-type="Teacher">Wang, Naomi</option><option class="text-dark" value="95036826" data-type="Teacher">Wang, Nyla</option><option class="text-dark" value="95034663" data-type="Teacher">Wang, Richard</option><option class="text-dark" value="95040481" data-type="Teacher">Wang, Rui</option><option class="text-dark" value="95030428" data-type="Teacher">Wang, Ryan</option><option class="text-dark" value="95051653" data-type="Teacher">Wang, Xin Tong</option><option class="text-dark" value="95044470" data-type="Teacher">Wang, Yaozhou</option><option class="text-dark" value="95030127" data-type="Teacher">Wangdi, Tobden</option><option class="text-dark" value="95033798" data-type="Teacher">Warfield, Keiondre</option><option class="text-dark" value="95033317" data-type="Teacher">Wedenig, Sophia</option><option class="text-dark" value="95050323" data-type="Teacher">Wei, Ru Rong</option><option class="text-dark" value="95032934" data-type="Teacher">Weinstein, Jonah</option><option class="text-dark" value="95036827" data-type="Teacher">Weissman, Hadar</option><option class="text-dark" value="95035413" data-type="Teacher">Weng, Nicholas</option><option class="text-dark" value="95031010" data-type="Teacher">White, Kaylee</option><option class="text-dark" value="95035302" data-type="Teacher">Wiener, Jacob</option><option class="text-dark" value="95033352" data-type="Teacher">Wiener, Zachary</option><option class="text-dark" value="95047900" data-type="Teacher">Williams, Airealana</option><option class="text-dark" value="95051475" data-type="Teacher">Williams, Elijah</option><option class="text-dark" value="95048384" data-type="Teacher">Willis, Zachary</option><option class="text-dark" value="95037581" data-type="Teacher">Wilson, Cody</option><option class="text-dark" value="95036832" data-type="Teacher">Winslow, Katelyn</option><option class="text-dark" value="95033516" data-type="Teacher">Wolff De Tourreil, Claudia</option><option class="text-dark" value="95039306" data-type="Teacher">Wong, Grace</option><option class="text-dark" value="95030543" data-type="Teacher">Wong, Jason</option><option class="text-dark" value="95034734" data-type="Teacher">Wong, Jaylen</option><option class="text-dark" value="95036089" data-type="Teacher">Wong, Joyce</option><option class="text-dark" value="95034733" data-type="Teacher">Wong, Liam</option><option class="text-dark" value="95035303" data-type="Teacher">Wong, Tobias</option><option class="text-dark" value="95044007" data-type="Teacher">Wood, Jake</option><option class="text-dark" value="95035204" data-type="Teacher">Woodley, Aurora</option><option class="text-dark" value="95028967" data-type="Teacher">Woodley, Troy</option><option class="text-dark" value="95050324" data-type="Teacher">Wright, Teague</option><option class="text-dark" value="95045482" data-type="Teacher">Wu, Caroline</option><option class="text-dark" value="95052370" data-type="Teacher">Wu, Chloe</option><option class="text-dark" value="95044350" data-type="Teacher">Wu, Chloe</option><option class="text-dark" value="95032295" data-type="Teacher">Wu, Edwin</option><option class="text-dark" value="95034666" data-type="Teacher">Wu, Erin</option><option class="text-dark" value="95035031" data-type="Teacher">Wu, Griffin</option><option class="text-dark" value="95036716" data-type="Teacher">Wu, Hannah</option><option class="text-dark" value="95032946" data-type="Teacher">Wu, Jade</option><option class="text-dark" value="95053497" data-type="Teacher">Wu, Kerui</option><option class="text-dark" value="95036486" data-type="Teacher">Wu, Landuoer</option><option class="text-dark" value="95054664" data-type="Teacher">Wu, Nancy</option><option class="text-dark" value="95033743" data-type="Teacher">Wu, Rebecca</option><option class="text-dark" value="95044439" data-type="Teacher">Wu, Serena</option><option class="text-dark" value="95037138" data-type="Teacher">Wu, Tony</option><option class="text-dark" value="95043415" data-type="Teacher">Wu, Wentao</option><option class="text-dark" value="95034973" data-type="Teacher">Xia, Aiden</option><option class="text-dark" value="95032647" data-type="Teacher">Xiao, Aleena</option><option class="text-dark" value="95028199" data-type="Teacher">Xiao, Bryan</option><option class="text-dark" value="95054918" data-type="Teacher">Xiao, Carolyn</option><option class="text-dark" value="95035199" data-type="Teacher">Xiao, James</option><option class="text-dark" value="95035824" data-type="Teacher">Xie, Nathan</option><option class="text-dark" value="95049634" data-type="Teacher">Xie, Sarah</option><option class="text-dark" value="95052043" data-type="Teacher">Xing, Stanley</option><option class="text-dark" value="95042108" data-type="Teacher">Xiong, Yingfei</option><option class="text-dark" value="95045730" data-type="Teacher">Xu, Eva</option><option class="text-dark" value="95048427" data-type="Teacher">Xu, JunLong</option><option class="text-dark" value="95050987" data-type="Teacher">Xu, Kaihua</option><option class="text-dark" value="95034834" data-type="Teacher">Xu, Kayla</option><option class="text-dark" value="95035307" data-type="Teacher">Xuan, Leo</option><option class="text-dark" value="95035457" data-type="Teacher">Xue, Stella</option><option class="text-dark" value="95034920" data-type="Teacher">Xue, Ya-An</option><option class="text-dark" value="95040666" data-type="Teacher">Yair, Mia</option><option class="text-dark" value="95051261" data-type="Teacher">Yamaguchi, Yusei</option><option class="text-dark" value="95045623" data-type="Teacher">Yanagihara, Rikako</option><option class="text-dark" value="95045621" data-type="Teacher">Yanagihara, Soichiro</option><option class="text-dark" value="95044467" data-type="Teacher">Yang, Albert</option><option class="text-dark" value="95051221" data-type="Teacher">Yang, Alexandra</option><option class="text-dark" value="95028083" data-type="Teacher">Yang, Alicia</option><option class="text-dark" value="95032782" data-type="Teacher">Yang, Benjamin</option><option class="text-dark" value="95030431" data-type="Teacher">Yang, Jonathan</option><option class="text-dark" value="95032865" data-type="Teacher">Yang, Justin</option><option class="text-dark" value="95051055" data-type="Teacher">Yang, Nereid</option><option class="text-dark" value="95036852" data-type="Teacher">Yang, Owen</option><option class="text-dark" value="95037110" data-type="Teacher">Yang, Skyla</option><option class="text-dark" value="95051078" data-type="Teacher">Yang, Sol</option><option class="text-dark" value="95035062" data-type="Teacher">Yang, Valerie</option><option class="text-dark" value="95053281" data-type="Teacher">Yang, Ziheng</option><option class="text-dark" value="95034167" data-type="Teacher">Yao, Kayla</option><option class="text-dark" value="95031090" data-type="Teacher">Yao, Leo</option><option class="text-dark" value="95037600" data-type="Teacher">Yao, Maile</option><option class="text-dark" value="95050838" data-type="Teacher">Yao, Yucheng</option><option class="text-dark" value="95049612" data-type="Teacher">Yazdavar, Tasnim</option><option class="text-dark" value="95049485" data-type="Teacher">Ye, Jiapeng</option><option class="text-dark" value="95043673" data-type="Teacher">Yea, Brandon</option><option class="text-dark" value="95049708" data-type="Teacher">Yee, Kingswell</option><option class="text-dark" value="95030697" data-type="Teacher">Yen, Alan</option><option class="text-dark" value="95030699" data-type="Teacher">Yen, Sophia</option><option class="text-dark" value="95033864" data-type="Teacher">Yepanechnikova, Kirsten</option><option class="text-dark" value="95034872" data-type="Teacher">Yeung, Gavin</option><option class="text-dark" value="95034974" data-type="Teacher">Yilmaz, Nadia</option><option class="text-dark" value="95032759" data-type="Teacher">Yip, Audrey</option><option class="text-dark" value="95034695" data-type="Teacher">Yoon, Eunji</option><option class="text-dark" value="95043195" data-type="Teacher">Yoon, Nathan</option><option class="text-dark" value="95035201" data-type="Teacher">Yoon, Nathaniel</option><option class="text-dark" value="95031250" data-type="Teacher">Yost, Nathan</option><option class="text-dark" value="95033378" data-type="Teacher">Younas, Alisha</option><option class="text-dark" value="95031338" data-type="Teacher">Young, Andre</option><option class="text-dark" value="95034975" data-type="Teacher">Young, Hannah</option><option class="text-dark" value="95034737" data-type="Teacher">Young, Joey</option><option class="text-dark" value="95036163" data-type="Teacher">Young, Juliet</option><option class="text-dark" value="95035202" data-type="Teacher">Yu, Albert</option><option class="text-dark" value="95043599" data-type="Teacher">Yu, Mary</option><option class="text-dark" value="95030433" data-type="Teacher">Yu, Melanie</option><option class="text-dark" value="95038615" data-type="Teacher">Yu, Tanya</option><option class="text-dark" value="95045849" data-type="Teacher">Yuan, Audra</option><option class="text-dark" value="95043196" data-type="Teacher">Yuan, Ellie</option><option class="text-dark" value="95039905" data-type="Teacher">Yue, Alan</option><option class="text-dark" value="95049883" data-type="Teacher">Zabadi, Talal</option><option class="text-dark" value="95032988" data-type="Teacher">Zable, M</option><option class="text-dark" value="95032864" data-type="Teacher">Zajmi, Dea</option><option class="text-dark" value="95042605" data-type="Teacher">Zamir, Ron</option><option class="text-dark" value="95036048" data-type="Teacher">Zarlengo, Fenton</option><option class="text-dark" value="95034058" data-type="Teacher">Zebarjadi, Kiyon</option><option class="text-dark" value="95033845" data-type="Teacher">Zeineh, Esme</option><option class="text-dark" value="95037365" data-type="Teacher">Zeineh, Penelope</option><option class="text-dark" value="95037272" data-type="Teacher">Zeitzer, Leah</option><option class="text-dark" value="95033273" data-type="Teacher">Zelkha, Margot</option><option class="text-dark" value="95032556" data-type="Teacher">Zeller, Maximilian</option><option class="text-dark" value="95034873" data-type="Teacher">Zepka, Katia</option><option class="text-dark" value="95034740" data-type="Teacher">Zerarka, Noah</option><option class="text-dark" value="95043068" data-type="Teacher">Zhang, Caden</option><option class="text-dark" value="95052101" data-type="Teacher">Zhang, Catherine</option><option class="text-dark" value="95055833" data-type="Teacher">Zhang, Chuhan</option><option class="text-dark" value="95033060" data-type="Teacher">Zhang, Daniel</option><option class="text-dark" value="95036363" data-type="Teacher">Zhang, Frank</option><option class="text-dark" value="95037979" data-type="Teacher">Zhang, Jasmine</option><option class="text-dark" value="95043069" data-type="Teacher">Zhang, Kevin</option><option class="text-dark" value="95053937" data-type="Teacher">Zhang, Liyuan</option><option class="text-dark" value="95043676" data-type="Teacher">Zhang, Maxwell</option><option class="text-dark" value="95047795" data-type="Teacher">Zhang, Ryan</option><option class="text-dark" value="95037357" data-type="Teacher">Zhang, Shengke</option><option class="text-dark" value="95037974" data-type="Teacher">Zhang, Stephen</option><option class="text-dark" value="95041670" data-type="Teacher">Zhang, Steve</option><option class="text-dark" value="95041671" data-type="Teacher">Zhang, Yuyou</option><option class="text-dark" value="95045599" data-type="Teacher">Zhang, Zhenghao</option><option class="text-dark" value="95034132" data-type="Teacher">Zhao, Chenxi</option><option class="text-dark" value="95036959" data-type="Teacher">Zhao, Ethan</option><option class="text-dark" value="95055635" data-type="Teacher">Zhao, Tiffany</option><option class="text-dark" value="95055018" data-type="Teacher">Zhao, Yihao</option><option class="text-dark" value="95030846" data-type="Teacher">Zheng, Helen</option><option class="text-dark" value="95040510" data-type="Teacher">Zhong, Owen</option><option class="text-dark" value="95050430" data-type="Teacher">Zhong, Randy</option><option class="text-dark" value="95030522" data-type="Teacher">Zhou, Angela</option><option class="text-dark" value="95031268" data-type="Teacher">Zhou, Emily</option><option class="text-dark" value="95031560" data-type="Teacher">Zhou, Ethan</option><option class="text-dark" value="95034875" data-type="Teacher">Zhou, Jolie</option><option class="text-dark" value="95031296" data-type="Teacher">Zhou, Luke</option><option class="text-dark" value="95042041" data-type="Teacher">Zhou, Runtong</option><option class="text-dark" value="95034976" data-type="Teacher">Zhu, Olivia</option><option class="text-dark" value="95053309" data-type="Teacher">Zhu, Victor</option><option class="text-dark" value="95045467" data-type="Teacher">Zhu, Yue</option><option class="text-dark" value="95050325" data-type="Teacher">Zhupanov, Alexandra</option><option class="text-dark" value="95055127" data-type="Teacher">Zimmermann, Hannes</option><option class="text-dark" value="95030573" data-type="Teacher">Zinn, Nicholas</option><option class="text-dark" value="95050326" data-type="Teacher">Zou, Yimiao</option> </optgroup>
<option class="text-dark bg-secondary" value="other" data-type="Other">Other</option>
</select>
</div>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" id="passType" value="Create New Pass" onclick="requestPass()"><i class="fa fa-id-badge" aria-hidden="true"></i> Request Pass</button>
<button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
</div>
</div>
</div>
</div>


<div id="takePassModal" class="modal" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Take Hall Pass</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">

<div class="row justify-content-center mt-3">
<div class="col-8">
<div class="form-group justify-content-center">
<label class="float-left h4" for="reason">Reason for taking pass</label>
<input type="text" autocomplete="off" class="form-control" title="reason input" aria-label="Reason for taking pass: " maxlength="128" oninput="addVariablesForTakingPass()" id="reason"></textarea>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-8">
<div class="form-group justify-content-center">
<label class="float-left h4" for="Teachers">Request from</label>
<select id="Teachers" class="selectpicker form-control" data-live-search="true" title="No teacher selected" onchange="addVariablesForTakingPass(this.options[this.selectedIndex].text)" data-header="Select a teacher" data-dropup-auto="false" data-size="6">
<optgroup class="text-dark" label="Recent Teachers">
</optgroup>
<optgroup class="text-dark" label="All Teachers">
<option class="text-dark" value="12659">Mahpour, Lisa</option><option class="text-dark" value="12725">Ochoa, Dennis</option><option class="text-dark" value="12953">Balas, Gabriela</option><option class="text-dark" value="20498">Mendoza, Mayra</option><option class="text-dark" value="20688">Cornett, Patricia</option><option class="text-dark" value="21598">Stoneham, Michael</option><option class="text-dark" value="22299">Jacobsen, Julia</option><option class="text-dark" value="800001">Dorsey, Latisha</option><option class="text-dark" value="800009">Pascale, Carli</option><option class="text-dark" value="800043">Ames, Steven</option><option class="text-dark" value="800070">Arteaga, Arlena</option><option class="text-dark" value="800116">Barana, Neil</option><option class="text-dark" value="800117">Barba-Medina, Norma</option><option class="text-dark" value="800267">Brown, Justin</option><option class="text-dark" value="800272">Matta, Nora</option><option class="text-dark" value="800276">Holmes, Patricia</option><option class="text-dark" value="800375">Smith, Ofelia</option><option class="text-dark" value="800406">Cismas Florea, Cristina</option><option class="text-dark" value="800424">Menache, Nicole</option><option class="text-dark" value="800432">Congress, Rachel</option><option class="text-dark" value="800450">Corpuz, Edward</option><option class="text-dark" value="800469">Creighton, Braumon</option><option class="text-dark" value="800532">Deggeller, David</option><option class="text-dark" value="800549">Dias, Christina</option><option class="text-dark" value="800550">Dickson, Myesha</option><option class="text-dark" value="800603">Dunlap, Paul</option><option class="text-dark" value="800692">Fitzhugh, Angelina</option><option class="text-dark" value="800734">Friedland, Scott</option><option class="text-dark" value="800766">Blackburn, Kristy</option><option class="text-dark" value="800772">Garger, Gabriela</option><option class="text-dark" value="800818">Gleason, Mark</option><option class="text-dark" value="800820">Glover, Lynn</option><option class="text-dark" value="800890">Hall, Lisa</option><option class="text-dark" value="800935">Hawes, Kathy</option><option class="text-dark" value="800946">Owen, Kristen</option><option class="text-dark" value="800967">Hernandez, Luciano</option><option class="text-dark" value="800968">Hernandez, Mark</option><option class="text-dark" value="800975">Hesterman, Norma</option><option class="text-dark" value="801030">Wells, Jordan</option><option class="text-dark" value="801040">Ichikawa, Diane</option><option class="text-dark" value="801080">Johnson, Christopher</option><option class="text-dark" value="801171">Kinyanjui, Arthur</option><option class="text-dark" value="801185">Knaack, Kim</option><option class="text-dark" value="801194">Kofman, Stacey</option><option class="text-dark" value="801202">Kousnetz, Leslie</option><option class="text-dark" value="801236">Lang, Leighton</option><option class="text-dark" value="801309">Lewis, Sandra</option><option class="text-dark" value="801313">Liberatore, William</option><option class="text-dark" value="801327">Limburg, Florina</option><option class="text-dark" value="801333">Linsdell, Dawna</option><option class="text-dark" value="801342">Lo, Kristen</option><option class="text-dark" value="801375">Lyons, Philip</option><option class="text-dark" value="801386">Magid-Gutkin, Sophie</option><option class="text-dark" value="801393">Main, Carole</option><option class="text-dark" value="801429">Matchett, Elizabeth</option><option class="text-dark" value="801476">McGinn, Matthew</option><option class="text-dark" value="801502">Mellows, Heather</option><option class="text-dark" value="801510">Merchant, Angela</option><option class="text-dark" value="801570">Munger, Julie</option><option class="text-dark" value="801572">Moyer, Virginia</option><option class="text-dark" value="801601">Sharma, Ambika</option><option class="text-dark" value="801650">O'Connell, Casey</option><option class="text-dark" value="801690">Paley, Joshua</option><option class="text-dark" value="801698">Park, Grace</option><option class="text-dark" value="801724">Pennington, Laurie</option><option class="text-dark" value="801736">Peters, Cindy</option><option class="text-dark" value="801789">Powell, Maria</option><option class="text-dark" value="801829">Steward, Pam</option><option class="text-dark" value="801833">Redfield, Christopher</option><option class="text-dark" value="801847">Renazco, Daisy</option><option class="text-dark" value="801928">Sabbag, Kimberly</option><option class="text-dark" value="801973">Saxena, Karen</option><option class="text-dark" value="802014">Selznick, Howard</option><option class="text-dark" value="802034">Kaci, Rachael</option><option class="text-dark" value="802111">Srinivasan, Florence</option><option class="text-dark" value="802158">Summers, Todd</option><option class="text-dark" value="802310">Vrudny, Yanan</option><option class="text-dark" value="802339">Weisman, Mark</option><option class="text-dark" value="802381">Wilson, Melinda</option><option class="text-dark" value="802592">Zaidi, Syedali</option><option class="text-dark" value="802642">Sanchez Barrera, Jorge</option><option class="text-dark" value="802708">Collier, Warren</option><option class="text-dark" value="802728">Celis, Olga</option><option class="text-dark" value="802888">Aguilar, Jessica</option><option class="text-dark" value="803017">Hahn, Daniel</option><option class="text-dark" value="803034">Salcedo Aguirre, Ernesto</option><option class="text-dark" value="803297">Tantod, Gopi</option><option class="text-dark" value="803310">Nino Oliva, Teresa</option><option class="text-dark" value="803315">Miller, Gregory</option><option class="text-dark" value="803420">Eggert, Christopher</option><option class="text-dark" value="803602">Tucker, Jeanette</option><option class="text-dark" value="803607">Hall, Matthew</option><option class="text-dark" value="803610">Mahle, Christopher</option><option class="text-dark" value="803611">Lee, Jena</option><option class="text-dark" value="803619">Gonzalez Barrios, Ana Maria</option><option class="text-dark" value="803621">Ellington, Jennifer</option><option class="text-dark" value="803630">Zizmor, Elana</option><option class="text-dark" value="803714">Carlomagno, Courtney</option><option class="text-dark" value="803784">Zipperstein, Max</option><option class="text-dark" value="803986">Sheridan, Angeline</option><option class="text-dark" value="804001">Modica, Diana</option><option class="text-dark" value="804024">Ou-Ponticelli, Tiffany</option><option class="text-dark" value="804031">Granlund-Moyer, Kristina</option><option class="text-dark" value="804090">Anderson, Amy</option><option class="text-dark" value="804179">Griswold, Silvia</option><option class="text-dark" value="804195">Halter, Ethan</option><option class="text-dark" value="804343">Schworetzky, Navneet</option><option class="text-dark" value="804347">Durquet, Marie</option><option class="text-dark" value="804354">Bautista, Michael</option><option class="text-dark" value="804360">Clark, Melissa</option><option class="text-dark" value="804371">Holdener, Shaina</option><option class="text-dark" value="804373">Johanson, Derek</option><option class="text-dark" value="804376">Kitada, Terence</option><option class="text-dark" value="804395">Yun, Emily</option><option class="text-dark" value="804400">Lee, Danny</option><option class="text-dark" value="80443">Mahbuba, Tahsina</option><option class="text-dark" value="804635">Schroeppel, Claudia</option><option class="text-dark" value="804730">Vidonia, Nestor</option><option class="text-dark" value="804737">Lo, Tzuhuei</option><option class="text-dark" value="804755">Shinh, Arshdeep</option><option class="text-dark" value="804786">Whichard, Danielle</option><option class="text-dark" value="804791">Shen Lorenson, Rebecca</option><option class="text-dark" value="804804">Tabares Ruiz, Daissy</option><option class="text-dark" value="805034">Gleeson, Clare</option><option class="text-dark" value="805124">Clark, Monica</option><option class="text-dark" value="805158">Gill, Daljeet</option><option class="text-dark" value="805159">Lizundia, Laura</option><option class="text-dark" value="805165">Patrick, Jeffrey</option><option class="text-dark" value="805166">Ross, Cora</option><option class="text-dark" value="805184">Garcia, Megan</option><option class="text-dark" value="805199">Johansen, Curtis</option><option class="text-dark" value="805217">Leftwich, David</option><option class="text-dark" value="805262">Talbot, Katherine</option><option class="text-dark" value="805282">Rodriguez, Brandymae</option><option class="text-dark" value="805358">Munoz, Chris</option><option class="text-dark" value="805438">Kibler, Austin</option><option class="text-dark" value="805471">Seoane, Marta</option><option class="text-dark" value="805543">Nelson, Adam</option><option class="text-dark" value="805554">Garibay Diaz, Erika</option><option class="text-dark" value="805565">Bisbee, David</option><option class="text-dark" value="805572">Cohn, Catherine</option><option class="text-dark" value="805573">Conklin, Sandra</option><option class="text-dark" value="805578">Fidani, Jonathan</option><option class="text-dark" value="805579">Firenzi, Tara</option><option class="text-dark" value="805592">Howard, Laurel</option><option class="text-dark" value="805597">Kaneko, Takeshi</option><option class="text-dark" value="805608">Paronable, Marjorie</option><option class="text-dark" value="805636">Cheema, Gagan</option><option class="text-dark" value="805639">Jamison, Marcus</option><option class="text-dark" value="805645">Boyd, Brandon</option><option class="text-dark" value="805717">Wong, Alli</option><option class="text-dark" value="805742">Swauger, Ryan</option><option class="text-dark" value="805819">Raptis, Sofia</option><option class="text-dark" value="805843">Melvin, Christopher</option><option class="text-dark" value="805907">Robinson, Rodney</option><option class="text-dark" value="806004">Catalano, Kathryn</option><option class="text-dark" value="806006">Daugherty, Ivette</option><option class="text-dark" value="806016">Ja, Katherine</option><option class="text-dark" value="806025">Little, Joshua</option><option class="text-dark" value="806026">Malatesta, Bridgette</option><option class="text-dark" value="806040">Perkins, Haley</option><option class="text-dark" value="806049">Weymouth, Kate</option><option class="text-dark" value="806226">Dixon, Genavae</option><option class="text-dark" value="806252">Rode, Patrick</option><option class="text-dark" value="806370">Newland, Harvey</option><option class="text-dark" value="806382">Bueno, Andrea</option><option class="text-dark" value="806383">Chavez, Jorge</option><option class="text-dark" value="806400">McGinn, Shawn</option><option class="text-dark" value="806442">Zake, Baiba</option><option class="text-dark" value="806485">Collart, Lisa</option><option class="text-dark" value="806504">Ford, Christopher</option><option class="text-dark" value="806510">Olson, James</option><option class="text-dark" value="806563">Phu, Julius</option><option class="text-dark" value="806626">Young Nicholson, Alana</option><option class="text-dark" value="806649">Libbey, Liz</option><option class="text-dark" value="806732">Kim, Susan</option><option class="text-dark" value="806799">Stratton, Wendy</option><option class="text-dark" value="806824">Castillo, Rossana</option><option class="text-dark" value="806828">Fontes, Wade</option><option class="text-dark" value="806865">Siu, Danning</option><option class="text-dark" value="806913">Wells Akis, Jennifer</option><option class="text-dark" value="806921">Francis, Makiya</option><option class="text-dark" value="807055">Ordonez, Jose</option><option class="text-dark" value="807164">Keinath, Andrea</option><option class="text-dark" value="807193">Owen, Janet</option><option class="text-dark" value="807217">Pena, Rosanna</option><option class="text-dark" value="807323">Martinez, Jon</option><option class="text-dark" value="807326">Thampuran, Radhika</option><option class="text-dark" value="807339">Beresford, Benjamin</option><option class="text-dark" value="807341">Brassey, Mark</option><option class="text-dark" value="807342">Carroll, Tracie</option><option class="text-dark" value="807344">Choi, Julia</option><option class="text-dark" value="807356">Gomez, Lorenzo</option><option class="text-dark" value="807357">Gonzalez, Briana</option><option class="text-dark" value="807363">Hanie, TK</option><option class="text-dark" value="807364">McDonnell, Savannah</option><option class="text-dark" value="807394">Young, Timothy</option><option class="text-dark" value="807429">Ramos, Michelle</option><option class="text-dark" value="807442">Loomis, Audrey</option><option class="text-dark" value="807471">Kelly, Camille</option><option class="text-dark" value="807508">Camacho, Maria</option><option class="text-dark" value="807552">Cortese, Tiffany</option><option class="text-dark" value="807573">Mulingtapang, Bjorn</option><option class="text-dark" value="807641">Pascale, Carla</option><option class="text-dark" value="807679">Pascucci, Myriam</option><option class="text-dark" value="807681">Martinez, Keanna</option><option class="text-dark" value="807694">Kochenderfer, Mary Anne</option><option class="text-dark" value="807707">Watanabe, Evan</option><option class="text-dark" value="807711">Slocum, Dethrick</option><option class="text-dark" value="807735">Dorsey, Latisha</option><option class="text-dark" value="807744">Hlasek, Michaela</option><option class="text-dark" value="807746">Silverbush, Jacquelyn</option><option class="text-dark" value="807747">Lefevre, Laura</option><option class="text-dark" value="807762">Carter, Eric</option><option class="text-dark" value="807796">Norberg, Christina</option><option class="text-dark" value="807801">Su, Anita</option><option class="text-dark" value="807802">Rossillon, Matthew</option><option class="text-dark" value="807856">Ramirez, Luzviminda</option><option class="text-dark" value="807862">Rupe, Kelly</option><option class="text-dark" value="807881">Jacoubowsky, Bryce</option><option class="text-dark" value="807942">Tabel, Brittney</option><option class="text-dark" value="807995">Aguirre Aguirre, Julio</option><option class="text-dark" value="808050">Sanchez de Ortega, Adriana</option><option class="text-dark" value="808059">Warren, Danielle</option><option class="text-dark" value="808089">Hixon, Mycal</option><option class="text-dark" value="808110">Sheth, Shilpan</option><option class="text-dark" value="808111">Xu, Ning</option><option class="text-dark" value="808131">Min, Yujin</option><option class="text-dark" value="808148">Benelli, Jennifer</option><option class="text-dark" value="808151">Cuevas, Cristal</option><option class="text-dark" value="808152">Hickey, Paul</option><option class="text-dark" value="808157">Letner, Alexis</option><option class="text-dark" value="808160">Buck, Victoria</option><option class="text-dark" value="808180">Warren, Jennifer</option><option class="text-dark" value="808181">Larson, Abby</option><option class="text-dark" value="808183">Grim, Tomas</option><option class="text-dark" value="808190">Cassel, Jennifer</option><option class="text-dark" value="808192">Montalvo-Torres, Joyce</option><option class="text-dark" value="808206">Hong, Jason</option><option class="text-dark" value="808225">Wentworth, Dimitri</option><option class="text-dark" value="808295">Velazquez-Mendoza, Stephanie</option><option class="text-dark" value="IT005.decrecate">Acob, Erwin</option><option class="text-dark" value="S0500">Li, Calvin</option><option class="text-dark" value="S0651">Rippey, Kiana</option><option class="text-dark" value="S0711">Runser, Skyles</option><option class="text-dark" value="S0720">Wang, Fei</option><option class="text-dark" value="S0742">Jackson, Michelle</option><option class="text-dark" value="S0759">Kaur, Sukhwinder</option><option class="text-dark" value="S0776">Angotti, Tatum</option><option class="text-dark" value="S0780">Sani, Sofia</option><option class="text-dark" value="S0794">Desulme, Handell</option><option class="text-dark" value="S0804">Pelayo, Vanessa</option> </optgroup>
</select>
</div>

</div>
</div>
<div class="row justify-content-center">
<div class="col-8">
<div class="form-group justify-content-center">
<label class="float-left h4" for="destinations">Select destination</label>
<select id="destinations" class="selectpicker form-control" data-live-search="true" title="No destination selected" onchange="addVariablesForTakingPass()" data-header="Select a destination" data-dropup-auto="false" data-size="6">
<optgroup class="text-dark" label="Recents">
</optgroup>
<optgroup class="text-dark" label="Hall">
<option class="text-dark" value="1" data-type="Hall">Bathroom</option><option class="text-dark" value="2" data-type="Hall">Locker</option><option class="text-dark" value="3" data-type="Hall">Office</option><option class="text-dark" value="4" data-type="Hall">Water Fountain</option> <option class="text-dark" value="other" data-type="Other">Other</option>
</optgroup>
<optgroup class="text-dark" label="Teachers">
<option class="text-dark" value="IT005.decrecate" data-type="Teacher">Acob, Erwin</option><option class="text-dark" value="807995" data-type="Teacher">Aguirre Aguirre, Julio</option><option class="text-dark" value="800043" data-type="Teacher">Ames, Steven</option><option class="text-dark" value="804090" data-type="Teacher">Anderson, Amy</option><option class="text-dark" value="S0776" data-type="Teacher">Angotti, Tatum</option><option class="text-dark" value="800070" data-type="Teacher">Arteaga, Arlena</option><option class="text-dark" value="12953" data-type="Teacher">Balas, Gabriela</option><option class="text-dark" value="800116" data-type="Teacher">Barana, Neil</option><option class="text-dark" value="800117" data-type="Teacher">Barba-Medina, Norma</option><option class="text-dark" value="804354" data-type="Teacher">Bautista, Michael</option><option class="text-dark" value="808148" data-type="Teacher">Benelli, Jennifer</option><option class="text-dark" value="807339" data-type="Teacher">Beresford, Benjamin</option><option class="text-dark" value="805565" data-type="Teacher">Bisbee, David</option><option class="text-dark" value="800766" data-type="Teacher">Blackburn, Kristy</option><option class="text-dark" value="805645" data-type="Teacher">Boyd, Brandon</option><option class="text-dark" value="807341" data-type="Teacher">Brassey, Mark</option><option class="text-dark" value="800267" data-type="Teacher">Brown, Justin</option><option class="text-dark" value="808160" data-type="Teacher">Buck, Victoria</option><option class="text-dark" value="807508" data-type="Teacher">Camacho, Maria</option><option class="text-dark" value="807342" data-type="Teacher">Carroll, Tracie</option><option class="text-dark" value="807762" data-type="Teacher">Carter, Eric</option><option class="text-dark" value="808190" data-type="Teacher">Cassel, Jennifer</option><option class="text-dark" value="806824" data-type="Teacher">Castillo, Rossana</option><option class="text-dark" value="805636" data-type="Teacher">Cheema, Gagan</option><option class="text-dark" value="807344" data-type="Teacher">Choi, Julia</option><option class="text-dark" value="800406" data-type="Teacher">Cismas Florea, Cristina</option><option class="text-dark" value="804360" data-type="Teacher">Clark, Melissa</option><option class="text-dark" value="805124" data-type="Teacher">Clark, Monica</option><option class="text-dark" value="805572" data-type="Teacher">Cohn, Catherine</option><option class="text-dark" value="806485" data-type="Teacher">Collart, Lisa</option><option class="text-dark" value="802708" data-type="Teacher">Collier, Warren</option><option class="text-dark" value="800432" data-type="Teacher">Congress, Rachel</option><option class="text-dark" value="805573" data-type="Teacher">Conklin, Sandra</option><option class="text-dark" value="20688" data-type="Teacher">Cornett, Patricia</option><option class="text-dark" value="800450" data-type="Teacher">Corpuz, Edward</option><option class="text-dark" value="807552" data-type="Teacher">Cortese, Tiffany</option><option class="text-dark" value="800469" data-type="Teacher">Creighton, Braumon</option><option class="text-dark" value="808151" data-type="Teacher">Cuevas, Cristal</option><option class="text-dark" value="806006" data-type="Teacher">Daugherty, Ivette</option><option class="text-dark" value="800532" data-type="Teacher">Deggeller, David</option><option class="text-dark" value="S0794" data-type="Teacher">Desulme, Handell</option><option class="text-dark" value="800549" data-type="Teacher">Dias, Christina</option><option class="text-dark" value="806226" data-type="Teacher">Dixon, Genavae</option><option class="text-dark" value="807735" data-type="Teacher">Dorsey, Latisha</option><option class="text-dark" value="800001" data-type="Teacher">Dorsey, Latisha</option><option class="text-dark" value="800603" data-type="Teacher">Dunlap, Paul</option><option class="text-dark" value="804347" data-type="Teacher">Durquet, Marie</option><option class="text-dark" value="803420" data-type="Teacher">Eggert, Christopher</option><option class="text-dark" value="803621" data-type="Teacher">Ellington, Jennifer</option><option class="text-dark" value="805578" data-type="Teacher">Fidani, Jonathan</option><option class="text-dark" value="805579" data-type="Teacher">Firenzi, Tara</option><option class="text-dark" value="800692" data-type="Teacher">Fitzhugh, Angelina</option><option class="text-dark" value="806828" data-type="Teacher">Fontes, Wade</option><option class="text-dark" value="806504" data-type="Teacher">Ford, Christopher</option><option class="text-dark" value="806921" data-type="Teacher">Francis, Makiya</option><option class="text-dark" value="800734" data-type="Teacher">Friedland, Scott</option><option class="text-dark" value="805184" data-type="Teacher">Garcia, Megan</option><option class="text-dark" value="800772" data-type="Teacher">Garger, Gabriela</option><option class="text-dark" value="805554" data-type="Teacher">Garibay Diaz, Erika</option><option class="text-dark" value="805158" data-type="Teacher">Gill, Daljeet</option><option class="text-dark" value="800818" data-type="Teacher">Gleason, Mark</option><option class="text-dark" value="805034" data-type="Teacher">Gleeson, Clare</option><option class="text-dark" value="800820" data-type="Teacher">Glover, Lynn</option><option class="text-dark" value="803619" data-type="Teacher">Gonzalez Barrios, Ana Maria</option><option class="text-dark" value="807357" data-type="Teacher">Gonzalez, Briana</option><option class="text-dark" value="804031" data-type="Teacher">Granlund-Moyer, Kristina</option><option class="text-dark" value="808183" data-type="Teacher">Grim, Tomas</option><option class="text-dark" value="804179" data-type="Teacher">Griswold, Silvia</option><option class="text-dark" value="803017" data-type="Teacher">Hahn, Daniel</option><option class="text-dark" value="800890" data-type="Teacher">Hall, Lisa</option><option class="text-dark" value="803607" data-type="Teacher">Hall, Matthew</option><option class="text-dark" value="804195" data-type="Teacher">Halter, Ethan</option><option class="text-dark" value="807363" data-type="Teacher">Hanie, TK</option><option class="text-dark" value="800935" data-type="Teacher">Hawes, Kathy</option><option class="text-dark" value="800967" data-type="Teacher">Hernandez, Luciano</option><option class="text-dark" value="800968" data-type="Teacher">Hernandez, Mark</option><option class="text-dark" value="800975" data-type="Teacher">Hesterman, Norma</option><option class="text-dark" value="808152" data-type="Teacher">Hickey, Paul</option><option class="text-dark" value="808089" data-type="Teacher">Hixon, Mycal</option><option class="text-dark" value="807744" data-type="Teacher">Hlasek, Michaela</option><option class="text-dark" value="804371" data-type="Teacher">Holdener, Shaina</option><option class="text-dark" value="800276" data-type="Teacher">Holmes, Patricia</option><option class="text-dark" value="808206" data-type="Teacher">Hong, Jason</option><option class="text-dark" value="805592" data-type="Teacher">Howard, Laurel</option><option class="text-dark" value="801040" data-type="Teacher">Ichikawa, Diane</option><option class="text-dark" value="806016" data-type="Teacher">Ja, Katherine</option><option class="text-dark" value="S0742" data-type="Teacher">Jackson, Michelle</option><option class="text-dark" value="22299" data-type="Teacher">Jacobsen, Julia</option><option class="text-dark" value="807881" data-type="Teacher">Jacoubowsky, Bryce</option><option class="text-dark" value="805639" data-type="Teacher">Jamison, Marcus</option><option class="text-dark" value="805199" data-type="Teacher">Johansen, Curtis</option><option class="text-dark" value="801080" data-type="Teacher">Johnson, Christopher</option><option class="text-dark" value="802034" data-type="Teacher">Kaci, Rachael</option><option class="text-dark" value="S0759" data-type="Teacher">Kaur, Sukhwinder</option><option class="text-dark" value="807164" data-type="Teacher">Keinath, Andrea</option><option class="text-dark" value="807471" data-type="Teacher">Kelly, Camille</option><option class="text-dark" value="805438" data-type="Teacher">Kibler, Austin</option><option class="text-dark" value="801171" data-type="Teacher">Kinyanjui, Arthur</option><option class="text-dark" value="804376" data-type="Teacher">Kitada, Terence</option><option class="text-dark" value="801185" data-type="Teacher">Knaack, Kim</option><option class="text-dark" value="807694" data-type="Teacher">Kochenderfer, Mary Anne</option><option class="text-dark" value="801194" data-type="Teacher">Kofman, Stacey</option><option class="text-dark" value="801202" data-type="Teacher">Kousnetz, Leslie</option><option class="text-dark" value="801236" data-type="Teacher">Lang, Leighton</option><option class="text-dark" value="808181" data-type="Teacher">Larson, Abby</option><option class="text-dark" value="804400" data-type="Teacher">Lee, Danny</option><option class="text-dark" value="803611" data-type="Teacher">Lee, Jena</option><option class="text-dark" value="807747" data-type="Teacher">Lefevre, Laura</option><option class="text-dark" value="808157" data-type="Teacher">Letner, Alexis</option><option class="text-dark" value="801309" data-type="Teacher">Lewis, Sandra</option><option class="text-dark" value="S0500" data-type="Teacher">Li, Calvin</option><option class="text-dark" value="806649" data-type="Teacher">Libbey, Liz</option><option class="text-dark" value="801313" data-type="Teacher">Liberatore, William</option><option class="text-dark" value="801327" data-type="Teacher">Limburg, Florina</option><option class="text-dark" value="801333" data-type="Teacher">Linsdell, Dawna</option><option class="text-dark" value="806025" data-type="Teacher">Little, Joshua</option><option class="text-dark" value="805159" data-type="Teacher">Lizundia, Laura</option><option class="text-dark" value="801342" data-type="Teacher">Lo, Kristen</option><option class="text-dark" value="804737" data-type="Teacher">Lo, Tzuhuei</option><option class="text-dark" value="807442" data-type="Teacher">Loomis, Audrey</option><option class="text-dark" value="801375" data-type="Teacher">Lyons, Philip</option><option class="text-dark" value="801386" data-type="Teacher">Magid-Gutkin, Sophie</option><option class="text-dark" value="80443" data-type="Teacher">Mahbuba, Tahsina</option><option class="text-dark" value="803610" data-type="Teacher">Mahle, Christopher</option><option class="text-dark" value="12659" data-type="Teacher">Mahpour, Lisa</option><option class="text-dark" value="801393" data-type="Teacher">Main, Carole</option><option class="text-dark" value="806026" data-type="Teacher">Malatesta, Bridgette</option><option class="text-dark" value="807323" data-type="Teacher">Martinez, Jon</option><option class="text-dark" value="807681" data-type="Teacher">Martinez, Keanna</option><option class="text-dark" value="801429" data-type="Teacher">Matchett, Elizabeth</option><option class="text-dark" value="800272" data-type="Teacher">Matta, Nora</option><option class="text-dark" value="807364" data-type="Teacher">McDonnell, Savannah</option><option class="text-dark" value="801476" data-type="Teacher">McGinn, Matthew</option><option class="text-dark" value="806400" data-type="Teacher">McGinn, Shawn</option><option class="text-dark" value="801502" data-type="Teacher">Mellows, Heather</option><option class="text-dark" value="805843" data-type="Teacher">Melvin, Christopher</option><option class="text-dark" value="800424" data-type="Teacher">Menache, Nicole</option><option class="text-dark" value="20498" data-type="Teacher">Mendoza, Mayra</option><option class="text-dark" value="801510" data-type="Teacher">Merchant, Angela</option><option class="text-dark" value="803315" data-type="Teacher">Miller, Gregory</option><option class="text-dark" value="808131" data-type="Teacher">Min, Yujin</option><option class="text-dark" value="804001" data-type="Teacher">Modica, Diana</option><option class="text-dark" value="808192" data-type="Teacher">Montalvo-Torres, Joyce</option><option class="text-dark" value="801572" data-type="Teacher">Moyer, Virginia</option><option class="text-dark" value="807573" data-type="Teacher">Mulingtapang, Bjorn</option><option class="text-dark" value="801570" data-type="Teacher">Munger, Julie</option><option class="text-dark" value="805543" data-type="Teacher">Nelson, Adam</option><option class="text-dark" value="803310" data-type="Teacher">Nino Oliva, Teresa</option><option class="text-dark" value="807796" data-type="Teacher">Norberg, Christina</option><option class="text-dark" value="801650" data-type="Teacher">O'Connell, Casey</option><option class="text-dark" value="12725" data-type="Teacher">Ochoa, Dennis</option><option class="text-dark" value="806510" data-type="Teacher">Olson, James</option><option class="text-dark" value="807055" data-type="Teacher">Ordonez, Jose</option><option class="text-dark" value="804024" data-type="Teacher">Ou-Ponticelli, Tiffany</option><option class="text-dark" value="800946" data-type="Teacher">Owen, Kristen</option><option class="text-dark" value="801690" data-type="Teacher">Paley, Joshua</option><option class="text-dark" value="801698" data-type="Teacher">Park, Grace</option><option class="text-dark" value="805608" data-type="Teacher">Paronable, Marjorie</option><option class="text-dark" value="807641" data-type="Teacher">Pascale, Carla</option><option class="text-dark" value="800009" data-type="Teacher">Pascale, Carli</option><option class="text-dark" value="807679" data-type="Teacher">Pascucci, Myriam</option><option class="text-dark" value="805165" data-type="Teacher">Patrick, Jeffrey</option><option class="text-dark" value="S0804" data-type="Teacher">Pelayo, Vanessa</option><option class="text-dark" value="807217" data-type="Teacher">Pena, Rosanna</option><option class="text-dark" value="801724" data-type="Teacher">Pennington, Laurie</option><option class="text-dark" value="806040" data-type="Teacher">Perkins, Haley</option><option class="text-dark" value="801736" data-type="Teacher">Peters, Cindy</option><option class="text-dark" value="806563" data-type="Teacher">Phu, Julius</option><option class="text-dark" value="801789" data-type="Teacher">Powell, Maria</option><option class="text-dark" value="807856" data-type="Teacher">Ramirez, Luzviminda</option><option class="text-dark" value="807429" data-type="Teacher">Ramos, Michelle</option><option class="text-dark" value="805819" data-type="Teacher">Raptis, Sofia</option><option class="text-dark" value="801833" data-type="Teacher">Redfield, Christopher</option><option class="text-dark" value="801847" data-type="Teacher">Renazco, Daisy</option><option class="text-dark" value="S0651" data-type="Teacher">Rippey, Kiana</option><option class="text-dark" value="805907" data-type="Teacher">Robinson, Rodney</option><option class="text-dark" value="806252" data-type="Teacher">Rode, Patrick</option><option class="text-dark" value="805282" data-type="Teacher">Rodriguez, Brandymae</option><option class="text-dark" value="807802" data-type="Teacher">Rossillon, Matthew</option><option class="text-dark" value="S0711" data-type="Teacher">Runser, Skyles</option><option class="text-dark" value="807862" data-type="Teacher">Rupe, Kelly</option><option class="text-dark" value="801928" data-type="Teacher">Sabbag, Kimberly</option><option class="text-dark" value="803034" data-type="Teacher">Salcedo Aguirre, Ernesto</option><option class="text-dark" value="802642" data-type="Teacher">Sanchez Barrera, Jorge</option><option class="text-dark" value="808050" data-type="Teacher">Sanchez de Ortega, Adriana</option><option class="text-dark" value="S0780" data-type="Teacher">Sani, Sofia</option><option class="text-dark" value="801973" data-type="Teacher">Saxena, Karen</option><option class="text-dark" value="804635" data-type="Teacher">Schroeppel, Claudia</option><option class="text-dark" value="804343" data-type="Teacher">Schworetzky, Navneet</option><option class="text-dark" value="802014" data-type="Teacher">Selznick, Howard</option><option class="text-dark" value="805471" data-type="Teacher">Seoane, Marta</option><option class="text-dark" value="801601" data-type="Teacher">Sharma, Ambika</option><option class="text-dark" value="804791" data-type="Teacher">Shen Lorenson, Rebecca</option><option class="text-dark" value="803986" data-type="Teacher">Sheridan, Angeline</option><option class="text-dark" value="808110" data-type="Teacher">Sheth, Shilpan</option><option class="text-dark" value="804755" data-type="Teacher">Shinh, Arshdeep</option><option class="text-dark" value="807746" data-type="Teacher">Silverbush, Jacquelyn</option><option class="text-dark" value="806865" data-type="Teacher">Siu, Danning</option><option class="text-dark" value="807711" data-type="Teacher">Slocum, Dethrick</option><option class="text-dark" value="800375" data-type="Teacher">Smith, Ofelia</option><option class="text-dark" value="802111" data-type="Teacher">Srinivasan, Florence</option><option class="text-dark" value="801829" data-type="Teacher">Steward, Pam</option><option class="text-dark" value="21598" data-type="Teacher">Stoneham, Michael</option><option class="text-dark" value="806799" data-type="Teacher">Stratton, Wendy</option><option class="text-dark" value="807801" data-type="Teacher">Su, Anita</option><option class="text-dark" value="802158" data-type="Teacher">Summers, Todd</option><option class="text-dark" value="805742" data-type="Teacher">Swauger, Ryan</option><option class="text-dark" value="804804" data-type="Teacher">Tabares Ruiz, Daissy</option><option class="text-dark" value="807942" data-type="Teacher">Tabel, Brittney</option><option class="text-dark" value="805262" data-type="Teacher">Talbot, Katherine</option><option class="text-dark" value="803297" data-type="Teacher">Tantod, Gopi</option><option class="text-dark" value="807326" data-type="Teacher">Thampuran, Radhika</option><option class="text-dark" value="803602" data-type="Teacher">Tucker, Jeanette</option><option class="text-dark" value="808295" data-type="Teacher">Velazquez-Mendoza, Stephanie</option><option class="text-dark" value="804730" data-type="Teacher">Vidonia, Nestor</option><option class="text-dark" value="802310" data-type="Teacher">Vrudny, Yanan</option><option class="text-dark" value="S0720" data-type="Teacher">Wang, Fei</option><option class="text-dark" value="808059" data-type="Teacher">Warren, Danielle</option><option class="text-dark" value="808180" data-type="Teacher">Warren, Jennifer</option><option class="text-dark" value="807707" data-type="Teacher">Watanabe, Evan</option><option class="text-dark" value="802339" data-type="Teacher">Weisman, Mark</option><option class="text-dark" value="806913" data-type="Teacher">Wells Akis, Jennifer</option><option class="text-dark" value="801030" data-type="Teacher">Wells, Jordan</option><option class="text-dark" value="808225" data-type="Teacher">Wentworth, Dimitri</option><option class="text-dark" value="806049" data-type="Teacher">Weymouth, Kate</option><option class="text-dark" value="804786" data-type="Teacher">Whichard, Danielle</option><option class="text-dark" value="802381" data-type="Teacher">Wilson, Melinda</option><option class="text-dark" value="808111" data-type="Teacher">Xu, Ning</option><option class="text-dark" value="806626" data-type="Teacher">Young Nicholson, Alana</option><option class="text-dark" value="807394" data-type="Teacher">Young, Timothy</option><option class="text-dark" value="804395" data-type="Teacher">Yun, Emily</option><option class="text-dark" value="806442" data-type="Teacher">Zake, Baiba</option><option class="text-dark" value="803784" data-type="Teacher">Zipperstein, Max</option><option class="text-dark" value="803630" data-type="Teacher">Zizmor, Elana</option> </optgroup>
</select>
</div>

</div>
</div>

<div class="row justify-content-center">
<div class="col-8">
<div class="form-group justify-content-center">
<label class="form-label float-left h4" for="neededSlider">Time needed </label>
<div class="row w-100 justify-content-center mt-3">
<div class="ml-4 w-100 d-inline-flex align-items-center justify-content-center">
<button type="button" class="btn btn-secondary mr-3" onclick="incrementRange('minus')"><i class="fa fa-minus"></i></button>
<span class="h5 mx-2 mt-2">1</span>
<input type="range" id="neededSlider" class="form-range w-100" min="1" max="15" step="1" value="5" onchange="updateRange(this.value)"> <span class="h5 mx-2 mt-2">15</span>
<button type="button" class="btn btn-secondary ml-3" onclick="incrementRange('plus')"><i class="fa fa-plus"></i></button>
</div>
</div>
<div class="row w-100 justify-content-center mt-3">
<div id="rangeNum" class="text-center h4">
<span>5 Minutes</span>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center mt-2">
<div class="col-6 text-center" id="mainCard"></div>
</div>
<div class="row justify-content-center mt-3 mb-3">
<h3 id="teacherName"></h3>
</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
	$(function () {
		$('#startTime').datetimepicker({
			format: 'LT',
			icons: {
						time: 'fa fa-clock-o',
						date: 'fa fa-calendar',
						up: 'fa fa-plus',
						down: 'fa fa-minus',
						next: 'fa fa-chevron-right',
						previous: 'fa fa-chevron-left'
					}
		});
	});
	$(function () {
		$('#endTime').datetimepicker({
			format: 'LT',
			icons: {
						time: 'fa fa-clock-o',
						date: 'fa fa-calendar',
						up: 'fa fa-plus',
						down: 'fa fa-minus',
						next: 'fa fa-chevron-right',
						previous: 'fa fa-chevron-left'
					}
		});
	});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="js/formValidation.min.js"></script>
<script src="js/bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js" integrity="sha256-LyocQFwqh0JslfDVDlJqJamo/nJP/5rAQdYtCAtB4hU=" crossorigin="anonymous"></script>

<script src="js/app.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script src="js/common.js"></script>
</body>
</html>
