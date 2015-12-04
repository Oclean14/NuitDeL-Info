<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Offrir un logement</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<?php include("header.php");?> 
	</head>
	<body>

		<!-- Header -->
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row 200%">
						<div class="8u 12u(2)">
							<div id="content">

								<!-- Content -->
							
									<article>
										<header>
											<h2>Ajout d'un logement sur notre plateforme</h2>
										</header>
										
										<div id="region"> 
                    <label>Region<span class="erreur">*</span></label>
                    <select class = "recherche_avancee" name="log_region" size="1">
                        <option value="null" default="null" > Région</option>
                        <option value="Aquitaine"> Aquitaine</option>
                        <option value="Alsace">Alsace</option>
                        <option value="Basse-Normandie">Basse-Normandie</option>
                        <option value="Bourgogne">Bourgogne</option>
                        <option value="Bretagne">Bretagne</option>
                        <option value="Centre">Centre</option>
                        <option value="Champagne-Ardenne">Champagne-Ardenne</option>
                        <option value="Corse">Corse</option>
                        <option value="Franche-Comté">Franche-Comté</option>
                        <option value="Haute Normandie"> Haute Normandie</option>
                        <option value="Ile de France"> Ile de France</option>		
                        <option value="Languedoc Roussillon">Languedoc-Roussillon</option>
                        <option value="Limousin">Limousin</option>
                        <option value="Lorraine">Lorraine</option>
                        <option value="Midi-Pyrénées">Midi-Pyrénées</option>
                        <option value="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
                        <option value="Pays de la Loire">Pays de la Loire</option>
                        <option value="Picardie">Picardie</option>
                        <option value="Poitou-Charentes">Poitou-Charentes</option>
                        <option value="Provence-Alpes-Côte-d'Azur">Provence-Alpes-Côte-d'Azur</option>
                        <option value="Rhône-Alpes">Rhône-Alpes</option>
                    </select>  <br/>
                </div> 
														
                </div> 

                <label for="Adresse">Adresse</label>
                <input type="text" name="log_adresse" id="log_adresse"> 

                <label for="ville">Ville</label>
                <input type="text" name="log_ville"> <br/>

                <label for="postal">Code Postal</label>
                <input type="text" name="log_postal"> <br/>

                <label for="description">Description</label>
                <textarea name="log_description" id="description" rows="10" cols="30">
                </textarea>
                <br/>
                <br/> 
                <fieldset>  

                	<label for="En plus">En Plus</label>
                    <table>
                        <tr>
                            <td><input TYPE="checkbox" NAME="precision[]" VALUE="garage"> Garage</td>
                            <td><input TYPE="checkbox" NAME="precision[]" VALUE="parking"> Parking</li></td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="animaux"> Animaux</td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="meuble"> Meublé</td>
                        </tr>
                        <tr>
                            <td><input TYPE="checkbox" NAME="precision[]" value="courte duree"> Courte Durée</li></td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="balcon"> Balcon</li></td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="acces handicape"> Accès Handicapé</td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="ascenseur"> Ascenseur</td>
                        </tr>
                        <tr>
                            <td><input TYPE="checkbox" NAME="precision[]" VALUE="terrasse"> Terrasse</li></td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="longue durée"> Longue Durée</td>
                            <td><input TYPE="checkbox" NAME="precision[]" value="piscine"> Piscine</td>
                        </tr>
                    </table>
                </fieldset>
									</article>
						
							</div>
						</div>
						<div class="4u 12u(2)">
							<div id="sidebar">

								<!-- Sidebar -->
							
									<section>
										<h3>Just a Subheading</h3>
										<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
										Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
										Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis et nisi etiam.</p>
										<footer>
											<a href="#" class="button">Continue Reading</a>
										</footer>
									</section>

									<section>
										<h3>Another Subheading</h3>
										<ul class="links">
											<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
											<li><a href="#">Ornare in hendrerit in lectus</a></li>
											<li><a href="#">Semper mod quis eget mi dolore</a></li>
											<li><a href="#">Consequat etiam lorem phasellus</a></li>
											<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
											<li><a href="#">Semper mod quisturpis nisi</a></li>
										</ul>
										<footer>
											<a href="#" class="button">More Random Links</a>
										</footer>
									</section>
						
							</div>
						</div>
					</div>
				</div>
			</section>			

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<section class="3u 6u(2) 12u$(3)">
							<h3>Links to Stuff</h3>
							<ul class="links">
								<li><a href="#">Mattis et quis rutrum</a></li>
								<li><a href="#">Suspendisse amet varius</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum accumsan dolor</a></li>
								<li><a href="#">Mattis rutrum accumsan</a></li>
								<li><a href="#">Suspendisse varius nibh</a></li>
								<li><a href="#">Sed et dapibus mattis</a></li>
							</ul>
						</section>
						<section class="3u 6u$(2) 12u$(3)">
							<h3>More Links to Stuff</h3>
							<ul class="links">
								<li><a href="#">Duis neque nisi dapibus</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum accumsan sed</a></li>
								<li><a href="#">Mattis et sed accumsan</a></li>
								<li><a href="#">Duis neque nisi sed</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum amet varius</a></li>
							</ul>
						</section>
						<section class="6u 12u(2)">
							<h3>Get In Touch</h3>
							<form>
								<div class="row 50%">
									<div class="6u 12u(3)">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="6u 12u(3)">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button alt" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</div>

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

				<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

	</body>
</html>