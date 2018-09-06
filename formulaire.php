<!DOCTYPE>

<html>

   <body>


                <form action="cible.php" method="post">


                                <p>Veuillez taper votre prénom :</p>
                                  <input type="text" name="prenom" />

                                <p>Veuillez taper votre nom :</p>
                                  <input type="text" name="nom" />

                                  <p>Quel est votre genre ?</p>
                                    <input type="radio" name="genre" id="femme" checked="checked" /> <label for="oui">Femme</label>
                                    <input type="radio" name="genre" id="homme" /> <label for="non">Homme</label>
                                    <input type="radio" name="genre" id="non-binaire" /> <label for="oui">Non-binaire</label>

                                    <p>Veuillez saisir votre âge :</p>
                                      <select name="age">
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                      </select>

                                    <p>Quels sont vos loisirs ?</p>
                                      <input type="checkbox" name="case" id="manger" /> <label for="case">Manger</label>
                                      <input type="checkbox" name="case" id="dormir" /> <label for="case">Dormir</label>
                                      <input type="checkbox" name="case" id="lire" /> <label for="case">Lire</label>
                                      <input type="checkbox" name="case" id="niglo" /> <label for="case">Eplucher le niglo<label>
                  </form>

   </body>

</html>


