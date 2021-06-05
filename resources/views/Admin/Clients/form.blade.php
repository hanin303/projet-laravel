@csrf

<div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $client->name ?? old('name') }}" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Votre name ici ">
    @error('name')<div class="text-danger">{{ $message }}</div>@enderror

</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input name="email" type="email" value="{{ $client->email?? old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Votre email ici ">
        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
     <div class="form-group col-md-6">
        <label for="password">password</label>
        <input name="password" type="text" value="{{ $client->password ?? old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Votre password ici ">
        @error('password')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
</div>

<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" value="{{ $client->adresse ?? old('adresse') }}" class="form-control  @error('adresse') is-invalid @enderror" id="adresse" placeholder="Votre adresse ici ">
    @error('adresse')<div class="text-danger">{{ $message }}</div>@enderror

</div>
<div class="form-group">
    <label for="phone">Telephone</label>
    <input type="text" name="phone" value="{{ $client->phone ?? old('phone') }}" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="+21625258369">
    @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="row">
    <div class="col"><button type="submit" class="btn btn-block btn-outline-info"><i class="fas fa-user-plus"></i> Enregistrer</button></div>
    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-user-times"></i> Annuler</button></div>
</div>
