<h2>Bonjour</h2> <br><br>

Vous avez reçu un e-mail de : {{ $first_name }}  {{ $last_name }}<br><br>

Coordonnées d'utilisateur: <br><br>

<span>● </span> Email: {{ $email }} .<br>
<span>● </span> Nom complet: {{ $first_name }}  {{ $last_name }} .<br>
<span>● </span> Nom de l'entreprise: {{ $business }}   .<br>
<span>● </span> Numéro de téléphone: {{ $phone }} .<br>
<span>● </span> Poste occupé: {{ $post }} .<br>
<span>● </span> Addresse: {{ $address }} .<br>
@if(!empty($address1))
    <span>● </span> Addresse 1: {{ $address1 }}  .<br>
@endif
@if(!empty($country))
    <span>● </span> Pays: {{ $country }} .<br>
@endif
@if(!empty($city))
    <span>● </span> Ville: {{ $city }} .<br>
@endif
@if(!empty($needs))
    <span>● </span> Vos besoin: {{ $needs }} .<br>
@endif

<br>

Merci
