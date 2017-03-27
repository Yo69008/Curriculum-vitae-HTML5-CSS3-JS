<!DOCTYPE html>
<html>
    <head>
        <title>CV</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./CSS/image.css">
        <link rel="stylesheet" href="./CSS/footer.css">
        <link rel="stylesheet" href="./CSS/nav.css">
        <link rel="stylesheet" href="./CSS/profil.css">
        <link rel="stylesheet" href="./CSS/article.css">
        <script type="text/javascript" src="./lib/script/index.js" defer></script>
        <script>
            window.onload = function () {
                script.welcome("Bonne visite");
            };
        </script>
        <style>
            #script {
                background: white; 
            }       
             #script a {
                float: right;
            }
            #script button {    
                background: green;
                border: inset 1px black;
                width: 5em;
                margin-left: 40%;
            }
            #script button:hover {    
                background: purple;
                /*border: outset 1px black;*/
            }

        </style>
    </head>
    <body>
        
<header></header> 
   
        <nav>
            <ul id="menu">
                <li><a href="#volet">Mes Coordonnées</a></li>
                <li><a href="#experiences">Mes expériences</a></li>
                <li><a href="#competences">Mes compétences</a></li>
                <li><a href="#formation">Ma formation</a></li>
                <li><a href="#hobbies">Mes centres d'intérêt</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
        </nav> 

    <article id="profil">
            <div id="volet_clos">
            <div id="volet">

                 <h2>Information</h2>
                        Yoann DEFARGE <br/>
                        25 ans <br/>
                        22, Avenue des frères Lumière 69008 Lyon <br/>
                        Tél.  06 70 09 70 21 <br/>
                        Ambitieux, persévérant et déterminé<br/>
                        Email:  yoann.defarge@free.fr <br/>
                        Célibataire <br/>
                        Permis B depuis 2012
            
            <a href="#volet" class="ouvrir">Qui suis-je ?</a>
            <a href="#volet_clos" class="fermer">fermer !</a>
            
            </div>
            </div>
    </article>    
            
    <article> 
        <div id="experience">


<h2>Mon expérience</h2>

            <ul>
                <li>Mai  2015 à Novembre 2016 - GATTEFOSSE - Opérateur de production - Saint-Priest 
                    <ul>
                        <li>Extraction de Principes Actifs Végétaux à travers une macération</li>
                        <li>Filtration et conditionnement dans des contenants demandés dans un Ordre de Fabrication</li>
                    </ul>
                </li>

                 <li>Octobre 2013 à Septembre 2014 - CARSO LSEHL - Agent spécialisé - Lyon
                    <ul>
                         <li>Réapprovisionnement des différents laboratoires en solvants et consommables</li>
                         <li>Préparation et expédition des colis vers d’autres entreprises françaises ou internationales</li>
                         <li>Transmission des échantillons entre les services</li>
                    </ul>
                 </li>

                <li>Juin 2012 à juillet 2012 et octobre 2012 à novembre 2012 - BioDyMIA - Stagiaire - Bourg-en-Bresse</li>
                </ul>
        </div>
    </article>
    
<section>
    
    <article> 
        <div id="competences">
<h2>Mes Compétences</h2>

            <ul>
                <li>JavaScript:<br/>
                    JavaScript brut <input type="range" value="25" max="40" min="0" step="5" disabled="disabled"/>
                    JQuery <input type="range" value="20" max="40" min="0" step="5" disabled="disabled"/>
                    AJAX <input type="range" value="20" max="40" min="0" step="5" disabled="disabled"/></li>
                 <li>connaissances en HTML5 et CSS3 :<br/>
                    HTML <input type="range" value="35" max="40" min="0" step="5" disabled="disabled" />
                    CSS <input type="range" value="35" max="40" min="0" step="5" disabled="disabled"/></li>
                <li>notions de SQL, PHP :<br/>
                    SQL <input type="range" value="5" max="40" min="0" step="5" disabled="disabled"/>
                    PHP <input type="range" value="10" max="40" min="0" step="5" disabled="disabled"/></li>
            </ul>
        </div>
    </article>

      
        
    <article>
        <div id="formation">
            <h2>Ma formation</h2>
                <ul>
                    <li><em>en informatique : </em>en cours de formation</li>
                    <li><em>initialement :  </em>
                        <ul>
                            <li>BTS Bio-Analyses et Contrôles obtenu en juin 2013</li>
                            <li>Baccalaureat STL option Biochimie, Génie Biologique en 2011</li>
                        </ul>
                </ul>

            </div>
    </article>
        
            
    <article>         
        <div id="hobbies">
            <h2>Mes centres d'intérêt</h2>
            <ul>
                <li>L'informatique</li>
                <li>La lecture</li>
                <li>Ma famille</li>
            </ul>
        </div>
    </article>   

    <footer class="group">
        <div id="footer"> <h4>Pour me joindre</h4></div>
                <div class=formulaire">
            
<?php
  
    $email=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $height_message=  strlen(filter_input(INPUT_POST, "message" ));  
    
    if ($email && $height_message > 5) {
           
     $to      = 'yoann.defarge@free.fr';
     $message = ($_POST ["message"]);
     $headers = ($_POST ["email"]);

     mail($to, $subject, $message, $headers);
    
/*?>
                Quoi de neuf docteur =P
<?php */            
    }
    Else {
?>
                
                
            <form  method="POST" 
                   action="#contact">
                <input name="email" 
                       placeholder="E-mail"/>
                <textarea name="message" 
                          placeholder="votre commentaire"></textarea>
                <input type="submit"/>
            </form>              
                              
<?php
    }                    
?>
                </div>  
        </footer>
    </body>
</html>