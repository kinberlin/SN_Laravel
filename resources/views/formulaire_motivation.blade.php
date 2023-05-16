<link rel="stylesheet" href="{!! url('css/bootstrap/bootstrap.min.css') !!}">
@vite(['resources/js/app.js'])
<form method="post" action="{{ route('region.save') }}" >
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom : </label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez un nom">
    <small id="emailHelp" class="form-text text-muted">Enter a unique name.</small>
  </div>
  <div class="form-group">
    <label for="email">Tel :</label>
    <input type="text" name="tel" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Label :</label>
    <input type="text" name="ville" class="form-control" id="email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!--
<div class="form-group">
    <label for="email">Label :</label>
    <input type="text" class="form-control" id="email">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form> -->