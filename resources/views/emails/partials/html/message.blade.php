@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{ Illuminate\Mail\Markdown::parse($slot) }}

@slot('footer')
@component('mail::footer')
&copy; {{ date('Y') }} @lang('All rights reserved.')
@endcomponent
@endslot

@endcomponent
