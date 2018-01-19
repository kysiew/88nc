/**
 * Micox Word Wrap 2.0 
 * elmicoxcodes.blogspot.com - www.ievolutionweb.com - micoxjcg@yahoo.com.br
 * Creative Commons License - creativecommons.org
 * 
 * Description:
 * Wraps large words in Firefox and Opera.
 * Works just like the word-wrap: break-word; CSS property in Internet Explorer
 *
 * Usage:
 * 1) Include this JS file in your page. Example: <script type='text/javascript' src='wordwrap.js'></script>
 * 2) Set 'word-wrap' as the classname of the elements that you want to word break. Example: <p class='word-wrap'>
 *
**/

function wrap(quem){
	var larg_total,larg_carac,quant_quebra,pos_quebra, over_orig;
	var elementos,quem, pai, caracs, texto, pai_texto, display_orig, wid_orig;
    
    if(quem.nodeType==3){
    		//elemento tipo texto. tenho que verificar se o pai dele tá quebrando. element type text I have that to verify if the parent of it tá breaking
    		
    		if(quem.nodeValue.replace('\n','').replace('\t','').trim()==''){
    			//se o textNode for vazio, não prossigo. if textNode will be empty, does not continue
    			return true;
    		}
    		
    		pai = quem.parentNode;		
    		texto = quem.nodeValue;			
    		
    		//pegando a largura setada oficial. catching official the setada width
    		display_orig = pai.style.display;
    		over_orig = pai.style.overflow;
    		wid_orig = pai.style.width;
    		pai.style.display="block";
    		pai.style.overflow="hidden";
    		larg_oficial = pai.offsetWidth;
    		
    		//pegando a largura real total. catching the total real width
    		pai.style.display="table";
    		pai.style.width = "auto"; //para o Opera
    		pai.style.overflow = "visible";
    		larg_total = pai.offsetWidth;
    		//alert("texto: " + texto + " \r\n larg_oficial:" + larg_oficial + " \r\n larg_total:" + larg_total)
    		pai.style.overflow = over_orig;
    		
    		if(larg_total>larg_oficial){ //se o pai do text tá extrapolando, quebro o text. if the parent of text tá surpassing, I break text
    			pos_quebra = 0;
    			caracs = pai.textContent.length;
    			//recalculando a largura real tirando os espaços pra poder calcular. recalculate the real width taking off the spaces pra to be able to calculate
    			// direito a largura dos caracs e quando vou quebrar. right the width of caracs and when I go to break
    			
    			quem.nodeValue = pai.textContent.replace(/ /g,"Ø") + " ";
    			larg_total = pai.offsetWidth;
    			pai.style.display = display_orig;
    			
    			larg_carac = larg_total / caracs ;
    			quant_quebra = parseInt(larg_oficial/larg_carac) - 2;
    			quant_quebra = quant_quebra>0 ? quant_quebra : 1; // added code 22nov2007
    			
    			quem.nodeValue = '';
    			
    			while(pos_quebra<=caracs){
    				quem.nodeValue += texto.substring(pos_quebra,pos_quebra + quant_quebra) + " "
    				pos_quebra = pos_quebra + quant_quebra;
    			}			
    		}
    		pai.style.display = display_orig;
    		pai.style.display = over_orig;
    		pai.style.width = wid_orig;
    		
	}
	
   /*
    if(quem.nodeType==3){
		//elemento tipo texto. tenho que verificar se o pai dele tá quebrando. element type text I have that to verify if the parent of it tá breaking
		
		if(quem.nodeValue.replace('\n','').replace('\t','').trim()==''){
			//se o textNode for vazio, não prossigo. if textNode will be empty, does not continue
			return true;
		}
		
		pai = quem.parentNode;		
		texto = quem.nodeValue;			
		
		//pegando a largura setada oficial. catching official the setada width
		display_orig = pai.style.display;
		over_orig = pai.style.overflow;
		wid_orig = pai.style.width;
		pai.style.display="block";
		pai.style.overflow="hidden";
		larg_oficial = pai.offsetWidth;
		
		//pegando a largura real total. catching the total real width
		pai.style.display="table";
		pai.style.width = "auto"; //para o Opera
		pai.style.overflow = "visible";
		larg_total = pai.offsetWidth;
		//alert("texto: " + texto + " \r\n larg_oficial:" + larg_oficial + " \r\n larg_total:" + larg_total)
		pai.style.overflow = over_orig;
		
		if(larg_total>larg_oficial){ //se o pai do text tá extrapolando, quebro o text. if the parent of text tá surpassing, I break text
			pos_quebra = 0;
			caracs = pai.textContent.length;
			//recalculando a largura real tirando os espaços pra poder calcular. recalculate the real width taking off the spaces pra to be able to calculate
			// direito a largura dos caracs e quando vou quebrar. right the width of caracs and when I go to break
			
			quem.nodeValue = pai.textContent.replace(/ /g,"Ø") + " ";
			larg_total = pai.offsetWidth;
			pai.style.display = display_orig;
			
			larg_carac = larg_total / caracs ;
			quant_quebra = parseInt(larg_oficial/larg_carac) - 2;
			quant_quebra = quant_quebra>0 ? quant_quebra : 1; // added code 22nov2007
			
			quem.nodeValue = '';
			
			while(pos_quebra<=caracs){
				quem.nodeValue += texto.substring(pos_quebra,pos_quebra + quant_quebra) + " "
				pos_quebra = pos_quebra + quant_quebra;
			}			
		}
		pai.style.display = display_orig;
		pai.style.display = over_orig;
		pai.style.width = wid_orig;
		
	}else if(quem.childNodes.length==1 && quem.childNodes[0].nodeType==3){
		//é o último do nível e o único filho é texto. is the last one of the level and the only child is text
		texto = String(quem.innerHTML); //salvando o original. saving the original
		
		
	
		//pegando a largura setada oficial
		display_orig = quem.style.display;
		over_orig = quem.style.overflow;
		wid_orig = quem.style.width;
		quem.style.display="block";
		quem.style.overflow="hidden";
		larg_oficial = quem.offsetWidth;
		
		//pegando a largura real total
		quem.style.display="table";
		quem.style.width = "auto"; //para o Opera
		quem.style.overflow = "visible";
		larg_total = quem.offsetWidth;
		//alert("texto: " + texto + " \r\n larg_oficial:" + larg_oficial + " \r\n larg_total:" + larg_total)
		quem.style.overflow = over_orig;
				
		if(larg_total>larg_oficial){ //quebrando quem extrapolou. breaking who it surpassed
			pos_quebra = 0;
			caracs = texto.length;
			//recalculando a largura real tirando os espaços pra poder calcular. recalculate the real width taking off the spaces pra to be able to calculate
			// direito a largura dos caracs e quando vou quebrar. right the width of caracs and when I go to break
			quem.innerHTML = quem.innerHTML.replace(/ /g,"Ø");
			larg_total = quem.offsetWidth;
			larg_carac = larg_total / caracs ;
			
			quant_quebra = parseInt(larg_oficial/larg_carac) - 2; 
			quant_quebra = quant_quebra>0 ? quant_quebra : 1; //added code 22nov2007
			quem.innerHTML = ""
			
			while(pos_quebra<=caracs){
				quem.innerHTML += texto.substring(pos_quebra,pos_quebra + quant_quebra) + " "
				pos_quebra = pos_quebra + quant_quebra;
			}
			
		}	
		quem.style.display = display_orig;
		quem.style.display = over_orig;
		quem.style.width = wid_orig;
		
	}else if(quem.childNodes.length>0){
		//se tiver mais que um filho, vou ter que executar de filho em filho nele. if it will have more than a son, I go to have that to execute of child in child in it
		for(var i=0;i<quem.childNodes.length;i++){
			wrap(quem.childNodes[i]);
		}
	}
	*/
}
function wordWrap(){  
    var elementos = document.body.getElementsByTagName("*") 
 
    if(navigator.appName.indexOf("Internet Explorer")>-1){
        for(var i=0; i<elementos.length;i++){
            if(elementos[i].className.indexOf("word-wrap")>-1){
                elementos[i].style.wordWrap = "break-word";
            }
        }
    }else{
        for(var i=0; i<elementos.length;i++){
            if(elementos[i].className.indexOf("word-wrap")>-1){
                wrap(elementos[i]);
            }
        }
    }
}
String.prototype.trim = function() { //Trim ambas direcciones. Trim both directions
	return this.replace(/^[ ]+|[ ]+$/g,"");
}

// remove code 22nov2007
//function addEvent(obj, evType, fn){
//	    if (obj.addEventListener)
//	        obj.addEventListener(evType, fn, true)
//	    if (obj.attachEvent)
//	        obj.attachEvent("on"+evType, fn)
//}
//addEvent(window,'load',wordWrap);

// added codes 22nov2007

function bodyOnReady(func){
 //call the function when DOM loaded
 //http://www.elmicox.com/2007/evento-body-onready-sem-o-uso-de-libs/
 //by Micox - www.elmicox.com - elmicox.blogspot.com - webly.com.br
 if(!(document.body==null)){
  func();
 }else{
  var func_rep = func;
  setTimeout(function(){ bodyOnReady(func_rep) },100);
 }
}
//bodyOnReady(wordWrap);