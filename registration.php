<!DOCTYPE html>
<html>
<head>
  <title>Connection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
      
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                        <div class="panel-title">ENREGISTREZ VOUS</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php">Connectez-vous</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Votre Email">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Prénoms </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="Votre prénom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Nom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Votre Nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Mot de Passe</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Mot de passe">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Reprendre Mot de Passe</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd2" placeholder="Reprendre mot de passe">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="gender" class="col-md-3 control-label">Sexe</label>
                                    <div class="col-md-9">
                                        <select name = "sexe" class="form-control">
                                        <option value = "">Votre sexe</option>
                                        <option value = "M">Masculin</option>
                                        <option value = "F">Féminin</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="gender" class="col-md-3 control-label">Votre niveau d'étude</label>
                                    <div class="input-group">
                                      <div class="radio">
                                        <label>
                                        <input type="radio" name="niveau" value="BAC+">BAC+<br>
                                        <input type="radio" name="niveau" value="BAC">BAC<br>
                                        <input type="radio" name="niveau" value="BAC">CAP<br>
                                        </label>
                                      </div>
                                    </div>
                                </div>


                        <div class="form-group">
                                    <label for="gender" class="col-md-3 control-label">Etude</label>
                                    <div class="col-md-9">
                                <select name = "etude" class="form-control">
                                <option  value="">Votre étude ou activité</option>
                                <option  value="archivistique">Archivistique</option>
                                <option  value="cartographiedessins">Cartographie/Dessins</option>
                                <option  value="chimie-alimentairecontrole-qualite">Chimie alimentaire/contrôle qualité</option>
                                <option  value="commercial-ventes">Commercial/Ventes</option>
                                <option  value="communication">Communication</option>
                                <option  value="compta-gestion">Compta/Gestion</option>
                                <option  value="construction-btp-immobilier">Construction/BTP/ Immobilier</option>
                                <option  value="creation-mode-couture">Création/Mode/Couture</option>
                                <option  value="culturemusiqueart">Culture/Musique/Art</option>
                                <option  value="design-infographie-pao">Design/Infographie/ PAO</option>
                                <option  value="developpement-rural-agriculture">Développement rural/ Agriculture</option>
                                <option  value="economie">Economie</option><option  value="electrobiomedical">Electrobiomédical</option>
                                <option  value="electronique">Électronique</option><option  value="electrotechnique">Électrotechnique</option>
                                <option  value="elevage">Elevage</option><option  value="energetique">Énergétique</option><option  value="enseignement-formation">Enseignement/Formation</option>
                                <option  value="environnement">Environnement</option>
                                <option  value="finance">Finance</option>
                                <option  value="geometretopographie">Géomètre/Topographie</option>
                                <option  value="industrie-technique">Industrie/Technique</option>
                                <option  value="journalisme-edition">Journalisme/Edition</option>
                                <option  value="juridique-droit">Juridique/Droit</option>
                                <option  value="management-direction">Management/Direction</option>
                                <option  value="marketing">Marketing</option>
                                <option  value="minesgeologiepetrole">Mines/Géologie/Pétrole</option>
                                <option  value="photographie">Photographie</option>
                                <option  value="sciences-sociales">Sciences sociales</option>
                                <option  value="secretariat-assistanat">Secrétariat/Assistanat</option>
                                <option  value="sociologieressources-humainespsychologie">Sociologie/Ressources Humaines/Psychologie</option>
                                <option  value="statistiques">Statistiques</option>
                                <option  value="tourisme-restauration-hotellerie">Tourisme/Restauration/ Hôtellerie</option>
                                <option  value="traduction-interpretariat">Traduction, interprétariat</option>
                                <option  value="transport-manutention-logistique">Transport/Manutention/Logistique</option>
                                <option  value="autre">Autre que l'informatique</option>
                                </select>
                                </div>
                            </div>
      
       
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>ENREGISTREZ VOUS</button> 
                                    </div>
                                </div>
                                
                            </form>
                         </div>
                    </div>
         </div> 
    </div>
    
</body>
</html> 


