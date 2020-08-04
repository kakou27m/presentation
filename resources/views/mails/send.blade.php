@component('mail::message')

<p> Expediteur: {{strtoupper($data['firstName']).' '.ucwords($data['lastName'])}}</p>
<p> Adresse mail: {{strtolower($data['email'])}}</p>
<p> Contact: {{$data['phone']}}</p>
<p> Objet: {{$data['subject']}}</p>

<h4>
    message
    <p class="text-muted">
        {{$data['message']}}
    </p>
</h4>
    Coordialement !!! <br> <br>
<p class="text-center">{{'Envoyé le '.date('d-m-Y').' à ' .date('H:i:s')}}</p>

{{"Plateform utilisée : " .config('app.name') }}
@endcomponent
