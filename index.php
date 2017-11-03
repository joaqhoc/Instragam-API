<!--
  *******************************************************************
			CODED BY MAININDEX 2017
  *******************************************************************
-->


<html>
	<head>
		<title>
			Instagram | MainIndex
		</title>
		<style type="text/css">
			#InstaFeed{
			  list-style:none;
			  width: 300px;  
			}
			#InstaFeed li{
			  float:left;
			  width:70px;
			  height:70px;
			  margin:3px
			}
			#InstaFeed li img{
			  max-width:100%;
			  max-height:100%;
			}
		</style>
	</head>
	<body>
		<div style="width: 300px;height: 300px; margin: 100px auto;">
			
			<!--Mostrar fotos de Instagram-->
			<ul id="InstaFeed"></ul>
			<!-- FIN-->

		</div>

	</body>

	<!--le javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			var token = "547916969.1677ed0.edf98be6c798469eaff940ef2492b859"; //Obtener Token Acccess desde el siguiente enlace http://instagram.pixelunion.net/ 
		    num_photos = 9; //Limite de fotos a mostrar
		 
			$.ajax({
			    url: 'https://api.instagram.com/v1/users/self/media/recent', // Api Instagram
			    dataType: 'jsonp',
			    type: 'GET',
			    data: {access_token: token, count: num_photos},
			    success: function(data){
			        console.log(data);
			        for( x in data.data ){
			            $('ul').append('<li><a target="_blank" href="'+data.data[x].link+'"><img src="'+data.data[x].images.low_resolution.url+'"></a></li>'); // Al hacer click te lleva a la pagina original
			        }
			    },
			    error: function(data){
			        console.log(data);
			    }
			});
		});
	</script>
</html>