$(document).on('ready', funcMain);


function funcMain()
{
	$("#add_row2").on('click',ejercicio2);
}



function ejercicio2(){ 
    var name_table=document.getElementById("tabla2");
    
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
     
            
         var patron=/(\b\S+)(?:\s+\1\b)+/gi;
     var sus ='$1';
                    
 
		var similar = textoArea.replace(patron, sus);
        var row = name_table.insertRow(0+1);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = '<p name="numero_f[]" class="non-margin">'+similar+'</p>';
  
			
        
  }  
//fin
	

