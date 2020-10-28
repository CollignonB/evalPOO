<div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" class="form-control" name ="lastname" id="lastname">
      </div>
      <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control" name ="firstname" id="firstname">
      </div>
      <div class="form-group">
        <label for="address">Adresse</label>
        <input type="text" class="form-control" name ="address" id="address">
      </div>
      <div class="form-group">
        <label for="postal_code">Code Postal</label>
        <input type="text" class="form-control" name ="postal_code" id="postal_code">
      </div>
      <div class="form-group">
        <label for="city">Ville</label>
        <input type="text" class="form-control" name ="city" id="city">
      </div>
      <div class="form-group">
        <label for="birthdate">Date de Naissance</label>
        <input type="date" class="form-control" name ="birthdate" id="birthdate">
      </div>
      <div class="form-group">
        <label for="sex">Sexe</label>
        <select name="sex" class="form-control" id="sex">
            <option value="male">Homme</option>
            <option value="female">Femme</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>