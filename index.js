var script = (function () {
	
        //appliquer CSS
        var style = document.createElement("style");
        style.type = "text/css";
        
        var css = document.createTextNode("div");
        if(style.stylesheet){
            style.stylesheet.cssText = css;
        } else {
            style.appendChild(css);
        }
       document.getElementsByTagName("head")[0].appendChild(style);
////////////////////////////////////////////////////////////////////////////////
  
        var setCss = function (helper) {
                        helper.style.background = "white",
                        helper.style.boxShadow = "0 0 10px #000000",
                        helper.style.position ="fixed",
                        helper.style.width ="40%",
                        helper.style.height="40%",
                        helper.style.top ="25%",
                        helper.style.left ="80%",
                        helper.style.transition ="left 1s, opacity 1s",
                        helper.style.textAlign ="center",
                                               helper.style.fontSize = "xx-large";


            };
////////////////////////////////////////////////////////////////////////////////  
	
    /*Je fais un evenement onclick*/
        var closeOnclick = function () {
                        this.onclick = null;
                        var parent = this.parentNode;
                        parent.style.background ="red";
                        parent.style.opacity = 0;
                        window.setTimeout( function () {
                                parent.parentNode.removeChild(parent);
                        }, 1000);
        };

        var buttonOKOnClick = function () {
                        this.onclick = null;
			var parent = this.parentNode;
			parent.style.background ="blue";
			parent.style.opacity = 0;
			window.setTimeout( function () {
				parent.parentNode.removeChild(parent);
			}, 1000);
        };
 ///////////////////////////////////////////////////////////////////////////////
    
    var getHelper = function(message) {
                /*Contrôle pour développeur*/
		if (typeof message !== "string") {
			throw new Error("Le message doit être une chaine de caractères");
		}
		
		/* Je crée les Element*/
		var div = document.createElement("div");
		var p = document.createElement("p");
		var close = document.createElement("a");
		var buttonOK = document.createElement("button");
		
		/* Je crée des Textes*/
		var pText = document.createTextNode("Bonne visite sur mon Curriculum Vitae");
		close.innerHTML = "&#x274c;";/*la croix*/
		var buttonOKText = document.createTextNode("OK");
		
                setCss(div);
                
		/* J'insère le Texte dans les éléments*/
		p.appendChild(pText);
		buttonOK.appendChild(buttonOKText);
		div.appendChild(close);
		div.appendChild(p);
		div.appendChild(buttonOK);
		
		div.setAttribute("id", "script");
                // "X"
		close.onclick = closeOnclick;
                //bouton
		buttonOK.onclick = buttonOKOnClick;
		
		return div;
	};
////////////////////////////////////////////////////////////////////////////////	
	var log = function(helper) {
		
		if(!(helper instanceof window.HTMLElement) || !document.body) {
			throw new Error("require a valid documen and a body");
		}
		document.body.appendChild(helper);
		helper.clientHeight;
		helper.style.left = "20%";
	};
////////////////////////////////////////////////////////////////////////////////
	return {
		welcome : function(message){
			var helper = getHelper(message);
                        helper.getElementsByTagName("button")[0].setAttribute("class", "welcome");
			log(helper);
		}
	};
}) ();
