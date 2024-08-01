@component('mail::message')
<h1 style="color: rgb(106, 192, 69);">
    Welcome to Barren, 
    <span style="color: rgb(105, 105, 105);">{{ $user->firstName }} {{ $user->lastName }}</span> !
</h1>

Thank you for registering. Here are your account details:

**Email:** {{ $user->email }}
<br>
**Password:** {{ $user->password }}

Please remember this password.

@component('mail::button', ['url' => route('login')])
Login Now
@endcomponent

Thanks,<br>
Barren Events Organisator
@endcomponent
