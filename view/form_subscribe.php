

<html>

<?php include("header.php");?>
    <div class="container"
        <body>
    	   <h1>Formulaire d'inscription</h1>
            <form method="post">        
                <table>              
            	   <td><label for="nom"><strong>Nom</strong></label></td>
            	   <td><input type="text" name="nom" id="nom"/></td>
                </tr>
                <tr>            
            	   <td><label for="login"><strong>Prenom</strong></label></td>
            	   <td><input type="text" name="prenom" id="prenom"/></td>            
                </tr>           
                <tr>            
                	<td><label for="pass"><strong>Date de naissance</strong></label></td>
                	<td><input type="date" name="pass" id="pass"/></td>            
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
                	<td><input type="text" name="ville" id="ville"/></td>            
                </tr>            
                <tr>         
                	<td><label for="pass2"><strong>Pays</strong></label></td>
                	<td><input type="text" name="pays" id="pays"/></td>
                </tr>
                <tr>            
                	<td><label for="login"><strong>Pseudo </strong></label></td>
                	<td><input type="text" name="pseudo" id="pseudo"/></td>            
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
                	<td><input type="mail" name="mail" id="mail"/></td>
                </tr>    
                </table>
            	<input type="submit" name="register" value="S'inscrire"/>
            </form>
        </div></body>
</html>