<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>SEU NOME</title>

	<meta property="og:site_name" content="AGENDA WB COMPANIES">
<meta property="og:title" content="AGENDA WB COMPANIES" />
<meta property="og:description" content="TELEFONES, RAMAIS E EMAILS DOS COLABORADORES WB" />
<meta property="og:image" itemprop="image" content="bg.jpg">
<meta property="og:type" content="website" />
<meta property="og:updated_time" content="1440432930" />


	<script src="jquery.min.js"></script>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="jquery.min.js"></script> -->





  <link rel="icon" href="favicon.png" />




<!-- <meta name="viewport" content="initial-scale=1"> -->


<meta name="viewport" content="width=device-width, user-scalable=no">

<!-- <link rel="stylesheet" href="fontawesome/css/all.css"> -->



<script>





  // $(document).ready(function(){



// });

// $(document).ready( function () {
// jQuery.fn.DataTable.ext.type.search.string = function ( data ) {
//     return ! data ?
//         '' :
//         typeof data === 'string' ?
//             data
//                 .replace( /έ/g, 'ε' )
//                 .replace( /[ύϋΰ]/g, 'υ' )
//                 .replace( /ό/g, 'ο' )
//                 .replace( /ώ/g, 'ω' )
//                 .replace( /ά/g, 'α' )
//                 .replace( /[ίϊΐ]/g, 'ι' )
//                 .replace( /ή/g, 'η' )
//                 .replace( /\n/g, ' ' )
//                 .replace( /á/g, 'a' )
//                 .replace( /â/g, 'a' )
//                 .replace( /é/g, 'e' )
//                 .replace( /í/g, 'i' )
//                 .replace( /ó/g, 'o' )
//                 .replace( /ú/g, 'u' )
//                 .replace( /ê/g, 'e' )
//                 .replace( /î/g, 'i' )
//                 .replace( /ô/g, 'o' )
//                 .replace( /è/g, 'e' )
//                 .replace( /ï/g, 'i' )
//                 .replace( /ü/g, 'u' )
//                 .replace( /ã/g, 'a' )
//                 .replace( /õ/g, 'o' )
//                 .replace( /ç/g, 'c' )
//                 .replace( /ì/g, 'i' ) :
//             data;
// };  
//   $('.table').DataTable({
//     "columnDefs": [ {
// "targets": 0,
// "orderable": true
// } ],
//     order: [[0, 'asc']],
//     paging: false,
//   "info": false,
// language:
// {
//     "sEmptyTable": "NADA ENCONTRADO",
//     "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
//     "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
//     "sInfoFiltered": "(Filtrados de _MAX_ registros)",
//     "sInfoPostFix": "",
//     "sInfoThousands": ".",
//     "sLengthMenu": "_MENU_ resultados por página",
//     "sLoadingRecords": "CARREGANDO...",
//     "sProcessing": "PROCESSANDO...",
//     "sZeroRecords": "NADA ENCONTRADO",
//     "sSearch": "PESQUISAR",
//     "oPaginate": {
//         "sNext": "Próximo",
//         "sPrevious": "Anterior",
//         "sFirst": "Primeiro",
//         "sLast": "Último"
//     },
//     "oAria": {
//         "sSortAscending": ": Ordenar colunas de forma ascendente",
//         "sSortDescending": ": Ordenar colunas de forma descendente"
//     }
// }




// });

// } );



</script>



<script>
    // console.log("marco");

$(document).ready(function(){









// var valor1 = document.getElementById("value").value;
var listapnome = [" ","Lixo", "Jean Wyllys", "Lularápio", "Gleisi", "Malandro", "Gilmarzinho", "Boulos", "Verdevaldo", "Nove Dedos", "Comunistinha", "Esquerdopata", "Vento Estoquista", "Feminazi", "Mortadela", "Sindicalista", "Abortista", "Ladrão", "Safado", "Terrorista", "Delator", "Pixuleco", "Nove Dedos", "Cú de Cachorro", "Mensaleiro", "Gilmar", "Mentiroso", "Gilmarzinho", "Dobrador de Meta", "Grampeado", "Feminista", "Lixo Humano"];

var listasnome = ["", "de Merda", "da Odebrecht", "do Rosário", "do Triplex", "do Sítio de Atibaia", "Presidiário de Curitiba", "do Mandato Vendido", "do Presídio",  "Socialista", "Comunista", "da Greve", "Mendes" ];
var pnome = null;
var snome = null;


  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};


if(getUrlParameter('pn') && getUrlParameter('sn')){
var pn = getUrlParameter('pn');
var sn = getUrlParameter('sn');
  
}


if(pn && sn){


 ppnome = listapnome[pn];

ssnome = listasnome[sn];



$(".pnome").html("Meu nome comunista é "+ppnome+" "+ssnome)


}



 $('#dia').on('change', function() {
     $('.alerta').hide();

  var dia = this.value;
 pnome = listapnome[dia];
  console.log( this.value );
  console.log(listapnome[dia] );
});



 $('#mes').on('change', function() {
     $('.alerta').hide();

var mes = this.value;
snome = listasnome[mes];
console.log( this.value );
console.log(listasnome[mes] );
});


 $('#result').on('click', function() {
  if(!snome || !pnome){
     $('.alerta').show();
    console.log("selecione o dia e o mes do seu aniversario"); 
  }else{

        $(".pnome").html(pnome+" "+snome);
    
  }

});




});


</script>




<style>
	 body{
    text-transform: uppercase;
    background-color: red;
    /*color:white;*/
  }
/*
	.bg{

		background: url(bg.jpg) center no-repeat;
		min-height: 290px;
	}


	.col-xs-12{
	}
	#example_filter{
		margin:0 auto;
		text-align: center;
	}*/
</style>

</head>
<body>
<div class="jumbotron bg">
  <div class="container ">
<!-- <i class="fas fa-address-book " style="font-size: 4em;color:black"></i>  -->
 <h1>DESCUBRA SEU NOME COMUNISTA</h1>
  </div>
</div>


	<div class="container">
  	<!-- <h1 class="display-2 text-center">AGENDINHA</h1> -->

		<div class="row">
			<div class="col-md-12">
<H1 class="pnome"></H1>

				<!--Table-->
  <div class="table-responsive ">

    <form action="">
 


       <div class="form-group">
    <label for="dia">SELECIONE O DIA DO SEU ANIVERSÁRIO</label>
    
  <select  id="dia" name="dia" >
  <option value="">DIA</option>
  <option value="1">1</option>
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
  <option value="31">31</option>

</select>
  </div>



<br>

       <div class="form-group">

    <label for="mes">SELECIONE O MÊS DO SEU ANIVERSÁRIO</label>

<select name="mes" id="mes">
  
  <option value="">MÊS</option>
  <option value="1">Janeiro</option>
  <option value="2">Fevereiro</option>
  <option value="3">Março</option>
  <option value="4">Abril</option>
  <option value="5">Maio</option>
  <option value="6">Junho</option>
  <option value="7">Julho</option>
  <option value="8">Agosto</option>
  <option value="9">Setembro</option>
  <option value="10">Outubro</option>
  <option value="11">Novembro</option>
  <option value="12">Dezembro</option>
</select>
  </div>



</form>
<button id="result">VER MEU NOME COMUNISTA</button>
<div class="alerta" style="display: none;">ESCOLHA O DIA E O MÊS DO SEU ANIVERSÁRIO</div>
			</div>
			</div>
		</div>
	</div>

</body>
</html>
