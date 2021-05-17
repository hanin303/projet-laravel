@csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nom">Nom</label>
        <input name="nom" type="text" value="{{ $client->nom_client ?? old('nom') }}" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Votre nom ici ">
        @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group col-md-6">
    <label for="prenom">Prenom</label>
    <input name="prenom" type="text" value="{{ $client->prenom_client ?? old('prenom') }}" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Votre prenom ici ">
    @error('prenom')<div class="text-danger">{{ $message }}</div>@enderror
</div>   
</div>
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" value="{{ $client->adresse_client ?? old('adresse') }}" class="form-control  @error('adresse') is-invalid @enderror" id="adresse" placeholder="Votre adresse ici ">
    @error('adresse')<div class="text-danger">{{ $message }}</div>@enderror

</div>
<div class="form-group">
    <label for="mail">Email</label>
    <input type="email" name="mail" value="{{ $client->email_client ?? old('mail') }}" class="form-control @error('mail') is-invalid @enderror" id="mail" placeholder="voter_Email@ici">
    @error('mail')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="form-group">
    <label for="telf">Telephone</label>
    <input type="text" name="telf" value="{{ $client->telephone_client ?? old('telf') }}" class="form-control @error('telf') is-invalid @enderror" id="telf" placeholder="+21625258369">
    @error('telf')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-info"><i class="fas fa-user-plus"></i> Enregistrer</button></div>
    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-user-times"></i> Annuler</button></div>
</div>
