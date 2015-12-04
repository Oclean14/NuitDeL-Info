<html>
    <head>   
        <title>Création d'un formulaire d'inscription en HTML</title>
        <?php include("../header.php");?>
    </head>    

    <body><div class= "container"> 
    	<h1>Formulaire d'inscription</h1>
        <form method="post">
        <div class="6u 12u(3)">        
            <table>              
            	<td><label for="pass2"><strong>Nom</strong></label></td>
            	<td><input type="password" name="pass2" id="pass2"/></td>
            </tr>
            <tr>            
            	<td><label for="login"><strong>Prenom</strong></label></td>
            	<td><input type="text" name="login" id="login"/></td>            
            </tr>           
            <tr>            
            	<td><label for="pass"><strong>Date de naissance</strong></label></td>
            	<td><input type="password" name="pass" id="pass"/></td>            
            </tr>            
            <tr>         
            	<td><label for="pass2"><strong>Sexe</strong></label></td>
            	<td><input type="password" name="pass2" id="pass2"/></td>
            </tr>
              <tr>            
            	<td><label for="login"><strong>Adresse postale</strong></label></td>
            	<td><input type="text" name="login" id="login"/></td>            
            </tr>           
            <tr>            
            	<td><label for="pass"><strong>Ville</strong></label></td>
            	<td><input type="password" name="pass" id="pass"/></td>            
            </tr>            
            <tr>         
            	<td><label for="pass2"><strong>Pays</strong></label></td>
            	<td><input type="password" name="pass2" id="pass2"/></td>
            </tr>
            <tr>            
            	<td><label for="login"><strong>Pseudo </strong></label></td>
            	<td><input type="text" name="login" id="login"/></td>            
            </tr>           
            <tr>            
            	<td><label for="pass"><strong>Mot de passe</strong></label></td>
            	<td><input type="password" name="pass" id="pass"/></td>            
            </tr>            
            <tr>         
            	<td><label for="pass2"><strong>Confirmez le mot de passe</strong></label></td>
            	<td><input type="password" name="pass2" id="pass2"/></td>          
            <tr>
            <tr>         
            	<td><label for="pass2"><strong>Mail</strong></label></td>
            	<td><input type="password" name="pass2" id="pass2"/></td>
            </tr>    
            </table>
        </div>
        	<input type="submit" name="register" value="S'inscrire"/>
        </form>
    </div></body>
</html>