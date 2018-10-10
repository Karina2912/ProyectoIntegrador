$(document).on('ready', funcMain);


function funcMain()
{
	$("#add_row3").on('click',ejercicio3);
}


function ejercicio3(){ 
    var name_table=document.getElementById("tabla3");
    
    //contador de palabras
    var textoArea = document.getElementById("area").value;
	var buscar = document.getElementById("buscar").value;
	var remplazar = document.getElementById("remplanzar").value;
    var numeroCaracteres = textoArea.length;
	
    var inicioBlanco = /^ /;
    var finBlanco = / $/;
    var variosBlancos = /[ ]+/g ;
    var saltoLinea = /\n/;
    textoArea = textoArea.replace(inicioBlanco,"");
    textoArea = textoArea.replace(finBlanco,"");
    textoArea = textoArea.replace(variosBlancos," ");
    textoArea = textoArea.replace(saltoLinea," ");
  
		var similar = textoArea.replace(new RegExp(buscar, "g"), remplazar);
        var row = name_table.insertRow(0+1);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = '<p name="numero_f[]" class="non-margin">'+similar+'</p>';
            
      
    
    }
       
//FIN

