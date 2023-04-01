@extends('mail.maillayout')
@section('mail-content')
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hello {{ $firstname }}</p>

	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">House rent is not what I want you to delay in paying. That’s why am here to assist you to save towards it. While we might be able to raise the bulk rent at once, its better you save small small towards it.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        Do you know you should be saving like 15% of your income towards your rent? Even if you can’t save
        upto 15%, try to save something consistently towards your rent.
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        We are helping lot of persons save towards their rent. While saving, you have access to the following
        benefits:
    </p>

    <ul style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        {{--  <li>Access to loan on your savings dashboard</li>  --}}
        <li>Access to a FREE lawyer who helps you in reviewing your tenancy agreement and other rental
            documents</li>
        <li>You earn interest on all your deposit</li>
        <li>You have access to our “Rent to Own” scheme programme starting soon.</li>
    </ul>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        Don't let anything stop you
    </p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">If you ever need our help, we are just a mail, a call or Whatsapp away. Your number plug is
        {{ config('app.whatsapp_number') }}.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">You can visit Paymyrent HQ at {{ config('app.office_address') }}. The street is just before First bank PLC if coming from Opebi.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Busola Adegbayibi</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Product Head,</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Paymyrent Nigeria.</p>
@endsection
