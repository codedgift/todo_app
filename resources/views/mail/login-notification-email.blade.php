@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Dear <b>{{$user->firstname}}</b>,</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        This is to bring to your notice that your Paymyrent account was accessed at {{ now('Africa/Lagos')->format('l jS \\of F Y h:i:s A') }}.
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        If you did not log in to your Paymyrent account at the time specified above, please send a mail to <a href="mailto:support@paymyrent.ng">{{config('mail.reply_to.address')}}</a> or call us on {{config('mail.reply_to.telephone')}} immediately.
    </p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Thank you for choosing us.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Busola Adegbayibi</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Product Head,</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Paymyrent Nigeria.</p>
@endsection
