@component('mail::message')
# Introduction

{{ $pdf['name'] }}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
