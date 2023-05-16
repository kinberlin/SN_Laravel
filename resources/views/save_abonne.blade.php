<!DOCTYPE html>
<html lang="en">

@include('partials.topbar')
<body>
  <form method="post" action="{{ route('region.update') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nom : </label>
      <?php
      echo ('<input type="text" name="id" value="' . $_GET["id"] . '" hidden/>');
      ?>
      <input type="text" name="nom" class="form-
      control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez un nom" value="{{$region->label}}">
      <small id="emailHelp" class="form-text text-muted">Enter a unique name.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">tel : </label>

      <input type="text" name="tel" class="form-
      control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez un nom" value="{{$region->label}}">
      <small id="emailHelp" class="form-text text-muted">Enter un tel.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Ville : </label>
      <input type="text" name="ville" class="form-
      control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez un nom" value="{{$region->label}}">
      <small id="emailHelp" class="form-text text-muted">Enter a ville.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>