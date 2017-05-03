@component('mail::message')

#Thank you

Thank you for working with "Homes.lk"


@component('mail::table')
| Name &nbsp;&nbsp; |  Amount &nbsp;&nbsp;|&nbsp;&nbsp; Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
|----- | ------ | ----------- |
| {{$name}} &nbsp;&nbsp; | &nbsp;&nbsp;{{$amount}} &nbsp;&nbsp; | &nbsp;&nbsp; {{$des}}|
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent