@component('mail::message')
# Introduction
There is new query from {{$name}}, {{$email}}
Mesage:
{{$message}}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
AMSCorp
@endcomponent
