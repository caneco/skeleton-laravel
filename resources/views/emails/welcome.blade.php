@component('mail::message')

# This is an H1

## And this is an H2

### What about this H3?

This is a paragraph of your message.

@component('mail::panel', ['color' => 'primary'])
And here's a Panel
@endcomponent

This is another paragraph of your message.

@component('mail::subcopy')
This is a subcopy.
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'primary'])
This is a default button
@endcomponent

– Thanks
@endcomponent
