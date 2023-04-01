@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Dear <b>{{$data['firstname']}}</b>,</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">My name is Busola and I am really excited to have you here.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Paymyrent will help you save little by little towards your house rent and other projects. You can choose to save daily, weekly or monthly.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Let me inform you that Paymyrent is the ONLY savings platform that pays you interest every time you make a savings deposit. If you save today, you get an instant interest. If you save tomorrow, you get an instant interest. Even if you save 5 times in a day, we keep giving you interest on the savings.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Paymyrent savings is warehoused in First bank and GTB who are insured by the NDIC. Warehoused funds are then invested in low risk investments that generate interest. Be rest assured that your savings with Paymyrent is safe and secured.</p>



    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;">
        Find below the list of functions on your dashboard and a little explanation on how to use them.
    </p>
    <ul style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        <li>Withdrawal: Use this to withdraw your savings on the due date.</li>
        <li>Quick save: Use this to add more money to your savings.</li>
        {{--  <li>Loans: This shows the amount you can get as a loan instantly.</li>  --}}
        <li>Transactions: Shows the list of all the transactions that have taken place on your account.</li>
    </ul>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">If you ever need our help, we are just a mail, a call or Whatsapp away. Your number plug is
        {{ config('app.whatsapp_number') }}.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">You can visit Paymyrent HQ at {{ config('app.office_address') }}. The street is just before First bank PLC if coming from Opebi.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Busola Adegbayibi</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Product Head,</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Paymyrent Nigeria.</p>
@endsection
