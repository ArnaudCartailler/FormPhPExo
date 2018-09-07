<!DOCTYPE>

<html>

   <body>



   </body>

			<form action="result.php" method="post" enctype="multipart/form-data">

                                <p>Veuillez taper votre prénom :</p>
                                  <input type="text" name="firstname" />

                                <p>Veuillez taper votre nom :</p>
                                  <input type="text" name="lastname" />

                                  <p>Quel est votre genre ?</p>
                                    <input type="radio" name="gender" value="femme" id="femme" /> <label for="femme">Femme</label>
                                    <input type="radio" name="gender" value="homme"  id="homme" /> <label for="homme">Homme</label>
                                    <input type="radio" name="gender" value="non-binaire" id="non-binaire" /> <label for="nonbinaire">Non-binaire</label>

                                    <p>Veuillez saisir votre âge :</p>
                                      <select name="age">
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                      </select>

                                    <p>Quels sont vos loisirs ?</p>
                                      <input type="checkbox" name="case[]" value="manger" id="manger" /> <label for="case">Manger</label>
                                      <input type="checkbox" name="case[]" value="dormir" id="dormir" /> <label for="case">Dormir</label>
                                      <input type="checkbox" name="case[]" value="lire"  id="lire" /> <label for="case">Lire</label>
                                      <input type="checkbox" name="case[]" value ="eplucher le niglo" id="niglo" /> <label for="case">Eplucher le niglo<label>

                                    <p>Formulaire d'envoi de fichier :</p>
                                      <input type="file" name="myfile" />
                                      <input type="submit"name="valid" value="Envoyer le formulaire" />
                 	 </form>


