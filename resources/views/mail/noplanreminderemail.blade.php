@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hi <b>{{$user->firstname}}</b>,</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Do you always have panic when house rent is near? The truth is that you are not alone. There are
        millions of person in same shoes with you. So don’t panic, IT’S A NORMAL THING.
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        By normal, I mean it happens to a lot of people. Am just wondering why you are part of that number and
        why you have decided to remain at the panic attack level.
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        {{ $user->firstname }}, I was part of that growing number until i Japa (Ran away). This is what I did to Japa from
        panic attack.
    </p>

    <ul style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        <li>I started saving small small on Paymyrent</li>
        <li>4Months to my rent, I increased my savings amount</li>
        <li>I stopped taking my ATM everywhere. I take only the money I needed out</li>
        <li>I stopped collecting loans from all those loan sharks</li>
        <li>I ensure i save immediately my income comes in. That’s the first thing I do.</li>
    </ul>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        I have my complete house rent already and my rent is due in 2months time. This never happened
        before. It’s the first time it’s happening to me and is super interesting.
    </p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        Don't let anything stop you. Create a Plan today and start saving something.
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        Log in to <a href="{{ config('app.home_page_url')}}" title="Paymyrent">www.paymyrent.ng</a> today to start saving or Download the brand new Paymyrent <a href="{{ config('app.playstore_url') }}" title="Playstore">android</a> & <a href="{{ config('app.appstore_url') }}" title="App Store">iOS</a> app
        now!!! Visit my office at {{ config('app.office_address') }} or send a mail to {{ config('mail.reply_to.address') }}.
        Call or whatsapp {{ config('app.whatsapp_number') }}
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Regards,</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">The PAYMYRENT Team</p>
@endsection
