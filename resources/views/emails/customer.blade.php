@component('mail::message')
# Dsi22-iset Bizerte

Dear **{{$client->nom_client.' '.$client->prenom_client}}**

we are happy to annonce that your account has been created .<br>
These are the infformations that we registered for you , can you please check and tell us if there is any mistake :
- **Phone**: {{$client->telephone_client}}
- **Email**: {{$client->email_client}}
- **Adresse**: {{$client->adresse_client}}




<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
