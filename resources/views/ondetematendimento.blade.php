@extends('layouts.app')

@section('content')


<div class='card'>

	<div class="card-header">Pesquisa por especialidade médica</div>
	<div class="card-body">

		<div style='display:inline-block; width:28%;'>
			
		<select id="especializacoes" class='form-control' onchange="getUni()">
			 <option>Selecione</option>
			@foreach($especializacoes as $esp)
			 <option>{{$esp->nome}}</option>
			@endforeach
		</select>

		<div id="unidades" style='max-height:400px; overflow-y:scroll;'></div>
	
		</div>

		<div id="mapa" style='width:70%; height:400px; display:inline-block; float:right;'>
		</div>
	</div>

</div>



<script type="text/javascript">

  var unidades=[];
  var erro;

  var nome=[], endereco=[], map; 

  var latitude=[], longitude=[];
  var markers=[], marks=[];
  var userLat, userLon;
  
  var isItemAvailable = false; // initialize the items with false
  var items=[]; 
  var esps;

  var infoScreen,  KEY = "unset";

  var selecionado;
  
	  navigator.geolocation.getCurrentPosition(
      data=>{
        userLat=data.coords.latitude;
        userLon=data.coords.longitude;
        origin= new google.maps.LatLng(userLat,userLon);

        initMap();
      },
      erro=>{
        console.log(JSON.stringify(erro));
      }
    );


	function  initMap(){
    var options = {
      zoom: 13.6,
      center: {
        lat:userLat,
        lng:userLon
      }
    };
    map = new google.maps.Map(document.getElementById('mapa'), options);
  }  

  
  function initMap2(lat,lng){
   
    var options = {
      zoom: 15.6,
      center: {
        lat:+userLat,
        lng:+userLon
      }
    };

  var marker = new google.maps.Marker({
    "position": new google.maps.LatLng(lat,lng),
    "map": 		map,
    "title": 	selecionado,
    "content": 	"conteudo",
    "icon": 	'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
  })

  marker.setMap(this.map);       
  }
  

  var items;
  

  //CARREGA LISTA DE ESPECIALIDADES
  //MOVIDO PARA HOME CONTROLLER


  
  var especialidade;
  //AO SELECIONAR ESPECIALIDADE
  //PUSH do resultado em this.unidades(nome,endereco) e chamada setCoords()
  //reseta variaveis

  function getUni(){

    let espName =  $('#especializacoes').val();

    especialidade =  espName;
    initMap();
 
     //requisição de unidades onde existe especialidade pedida
     //cadeia de funções
    unidades = []; latitude= []; longitude= [];
    nome = [];

    $.ajax({
    	method:"GET",
    	url: "getuni/"+espName,

    	success:function(data){
    	$("#unidades").html("Selecione a unidade desejada <br>");
	      for (let i=0; i<data.length;i++){
	        unidades.push(data[i]);

	        nome.push(data[i].nome);

	        $("#unidades").append("<button class='btn- btn-primary btn-block rounded' onclick='calculaDistancia(event)'>"+data[i].nome+"</button>");

	        endereco.push(data[i].endereco);
	      }
	      setCoords().then(data=>{
	        setCoords2(data)
	      });    		
    	},

    	error:function(error){
        	console.log(erro);
    	}
    })
 
  }


  var maps_url=[], endFinal=[];

  //push em maps_url
  //PROCESSO 1
  async function setCoords(){
    //reset
    maps_url=[];

    endFinal=[];
    for(let i=0; i<unidades.length; i++){
      let endereco_url= unidades[i]['endereco'].replace(',','+');

      endFinal[i] = endereco_url+"+mesquita+rj";

      maps_url[i] ="https://maps.googleapis.com/maps/api/geocode/json?address="+endFinal[i]+",+CA&key="+KEY;
    }

    return this.maps_url;  
  }



  //PUSH em latitude e longitude
  //PROCESSO 2
  	async function setCoords2(maps_url){
		for(let i=0; i < maps_url.length; i++ ){

			$.ajax({
				method:"GET",
				url:maps_url[i],
				success:function(data){

			    latitude[i]= data.results[0].geometry.location.lat;
			    longitude[i]= data.results[0].geometry.location.lng;
			  
			    if(longitude.length == maps_url.length)
			      doMarks();
				},

				error:function(err){
					console.log(err);
					return false;
				}
			})
	 	}
	}



  function doMarks() {  
     for (var i = 0; i < unidades.length; i++) {

        markers[i] = new google.maps.Marker({
          "position": new google.maps.LatLng(latitude[i],longitude[i]),
          "map": map,
          "title": nome[i],
          "content": "disponivel",
          "icon": 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
        })
        var content = '<button>teste</button>';
        var infowindow = new google.maps.InfoWindow({
          content: content
        });

        markers[i].addListener('click',v=>{
          infowindow.open(map,markers[i]);
        })
        markers[i].setMap(map);         
          
      }//end for
  }
  

 function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
  }

     // Removes the markers from the map, but keeps them in the array.
   function clearMarkers() {
      setMapOnAll(null);
    }

      // Shows any markers currently in the array.
    function showMarkers() {
      setMapOnAll(map);
    }

    // Deletes all markers in the array by removing references to them.
    function deleteMarkers() {
      clearMarkers();
      markers = [];
    }




  var origin; var destination;
  var uniSelected;

  function calculaDistancia(event) {
    
    unidade = 			 event.srcElement.innerText;

    uniSelected =    	 unidade;     
    destination =        unidades.filter(unidades=>unidades.nome==unidade);
    console.log(destination);
    var destino =        destination['0']['endereco'].replace(',','+');
    console.log(destino);
    destination=          destino+'+mesquita+rj';

    //Instanciar o DistanceMatrixService
    var service = new google.maps.DistanceMatrixService();
    //executar o DistanceMatrixService
    service.getDistanceMatrix({
          origins: [origin],  destinations: [destination],
          //Modo (DRIVING | WALKING | BICYCLING)
          travelMode: google.maps.TravelMode.DRIVING,
          //Sistema de medida (METRIC | IMPERIAL)
          unitSystem: google.maps.UnitSystem.METRIC
    }, 

      success=> {
      	console.log(success);
        infoScreen ={
          "origem"		:     success.originAddresses,
          "destino"		:     success.destinationAddresses,
          "distancia"	:     success.rows[0].elements[0].distance.text,
          "duracao" 	:     success.rows[0].elements[0].duration.text,
          //Duração = response.rows[0].elements[0].duration.text
        };

        $("#unidades").html(
        	"<h5 style='background-color:#35155c; color:white; text-align:center; padding:20px;'>"
        	+unidade+"</h5>"
        	+"<p><b style='background-color:#6b5603; padding:5px; color:white;'>Sua localização aproximada:</b>"
        	+"<br><span>"+infoScreen.origem+"</span></p>"
        	+"<p><b style='background-color:#6b5603; padding:5px; color:white;'>Endereço da unidade: </b>"
        	+"<br><span>"+infoScreen.destino+"</span></p>"
        	+"<p><b style='background-color:#6b5603; padding:5px; color:white;'>Distância: </b>" 
        	+"<br><span>"+infoScreen.distancia+"</span></p>"
        	+"<p><b style='background-color:#6b5603; padding:5px; color:white;'>Tempo até o destino:</b>"
        	+"<br><span> "+infoScreen.duracao+"</span></p>");
        console.log(infoScreen);
        makeRoute();
      },
      error =>{
        console.log(error);
      });
  }

  function setMapaCenter(endereco){
    let maps_url ="https://maps.googleapis.com/maps/api/geocode/json?address="+endereco[0]+",+Mountain+View,+CA&key="+KEY;
      

    	$.ajax({
    		url:"maps_url",
    		method:"GET",
    		success:function(data){
	    		var lat=(success.results[0].geometry.location.lat);
	            var lng=(success.results[0].geometry.location.lng);
	            this.userLat=lat;
	            this.userLon=lng;
	            this.initMap2(lat,lng);
    		},
    		error:function(err){
    			console.log(err);
    		}
    	})

    
  }



  function makeRoute(){
      var directionsService = new google.maps.DirectionsService();
      var directionsRenderer = new google.maps.DirectionsRenderer();
      initMap();

      directionsRenderer.setMap(map);

      var request = {
        origin: origin,
        destination: destination,
        travelMode: 'DRIVING'
      };

      directionsService.route(request, function(result, status) {
        if (status == 'OK') {
          directionsRenderer.setDirections(result);
        }
      });
    }

</script>
  
<script onload='setTimeout(function(){ initMap(); },2000)' id="map" src="http://maps.googleapis.com/maps/api/js?key=unset"></script >

<style type="text/css">
	.badge{
		display:block;
	}
</style>
@endSection

