<?php include('partials/header.php') ?>

<br>

<div class="jumbotron">

<div class="container">

<div class="row">

<div class="col-xs-12 col-sm-6">

<img src="http://lorempixel.com/600/450/city/5" alt="">

</div>

<div class="col-xs-12 col-sm-6">

<form class="form-horizontal">

<!-- Button Drop Down -->
<div class="form-group">
<label class="col-md-4 control-label" for="buttondropdown">Choisir une taille et la quantité</label>
<div class="col-md-4">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ajouter / Modifier</legend>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="marque">Marque</label>  
<div class="col-md-12">
<input id="marque" name="marque" type="text" placeholder="Marque:" class="form-control input-md" required="">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="prix">Prix:</label>  
<div class="col-md-12">
<input id="prix" name="prix" type="text" placeholder="Prix:" class="form-control input-md" required="">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="serie">Série:</label>  
<div class="col-md-12">
<input id="serie" name="serie" type="text" placeholder="Série" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="t49">46</label>  
<div class="col-md-12">
<input id="t49" name="t49" type="text" placeholder="Qté" class="form-control input-md">

</div>
</div>

<!-- File Button --> 
<div class="form-group">
<label class="col-md-4 control-label" for="photo">Photo:</label>
<div class="col-md-4">
<input id="photo" name="photo" class="input-file" type="file">
</div>
</div>

</fieldset>
</form>

</div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
</div>


<?php include('partials/footer.php') ?>
