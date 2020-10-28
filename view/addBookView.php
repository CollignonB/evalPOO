<div class="container">
<form name="addBook" action="" method="POST">
  <div class="form-group">
    <label for="bookName">Tittre du livre</label>
    <input type="text" class="form-control" name="tittle" id="bookName">
  </div>
  <div class="form-group">
    <label for="author">Auteur du livre</label>
    <input type="text" class="form-control" name="author" id="author">
  </div>
  <div class="form-group">
    <label for="category">Categorie</label>
    <select class="form-control" id="category" name="category">
      <option value="roman">roman</option>
      <option value="poésie">poésie</option>
      <option value="recueil de nouvelle">recueil de nouvelle</option>
      <option value="bande déssinée">bande dessinée</option>
    </select>
  </div>
  <div class="form-group">
    <label for="pubDate">Date de publication</label>
    <input type="date" class="form-control" name="publication_date" id="publication_date">
  </div>
  <div class="form-group">
    <label for="resume">Résumé</label>
    <textarea class="form-control" id="resume" rows="3" name="resume"></textarea>
  </div>
  <input type="submit" class="btn btn-success" value="Ajouter">
</form>
</div>
