$(document).on('ready', funcMain);


function funcMain()
{
	$("#add_row").on('click',ejercicio1);
}

//a) Encontrar palabras similares.


function ejercicio1(){ 
    var name_table=document.getElementById("tabla1");
    
   var textoArea = document.getElementById("area").value;
    var numeroCaracteres = textoArea.length;
    var inicioBlanco = /^ /;
    var finBlanco = / $/;
    var variosBlancos = /[ ]+/g ;
    var saltoLinea = /\n/;

    
      textoArea = textoArea.replace(inicioBlanco,"");
      textoArea = textoArea.replace(finBlanco,"");
      textoArea = textoArea.replace(variosBlancos," ");
      textoArea = textoArea.replace(saltoLinea," ");
      //var textoAreaDividido = textoArea.split(" ");
     // var numeroPalabras = textoAreaDividido.length;
//var datos = new Array();
    
        //for (var i = 0; i <  numeroPalabras; i++){
            
         var patron=/(\b\S+)(?:\s+\1\b)+/gi;
     var sus ='$1';
                    
    //if  (patron.test(textoAreaDividido[i])){
		var similar = textoArea.replace(patron, sus);
        var row = name_table.insertRow(0+1);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = '<p name="numero_f[]" class="non-margin">'+similar+'</p>';
   //datos[i]=textoAreaDividido[i];
	//}
	
			
        
  }  
	
/*for (var j = 0; j <  datos.length; j++){
            
        
        var row = name_table.insertRow(0+1);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = '<p name="numero_f[]" class="non-margin">'+datos[j]+'</p>';
    }*/
        
  ///}
//FIN

