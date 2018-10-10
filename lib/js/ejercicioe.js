$(document).on('ready', funcMain);


function funcMain()
{
	$("#add_row5").on('click',ejercicio5);
}


function ejercicio5(){ 
    var name_table=document.getElementById("tabla5");
    
    //contador de palabras
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
    var textoAreaDividido = textoArea.split(" ");
    var numeroPalabras = textoAreaDividido.length;

    
    
    //crea las filas con el FOR
   for (var i = 0; i <  numeroPalabras; i++){
       
    var inicioBlanco = /^ /;
    var finBlanco = / $/;
    var variosBlancos = /[ ]+/g ;
    var saltoLinea = /\n/;
    textoArea = textoArea.replace(inicioBlanco,"");
    textoArea = textoArea.replace(finBlanco,"");
    textoArea = textoArea.replace(variosBlancos," ");
    textoArea = textoArea.replace(saltoLinea," ");
    var textoAreaDividido = textoArea.split(" ");
    var numeroPalabras = textoAreaDividido.length;
       
       
        
      var patron=/([\d.]+)|[-+*/()=]/gm;
        
    if  (patron.test(textoAreaDividido[i])){
                 
            var row = name_table.insertRow(0+1);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = '<p name="numero_f[]" class="non-margin">'+textoAreaDividido[i]+'</p>';
        
    }
 
    
    }
       
//FIN
}
