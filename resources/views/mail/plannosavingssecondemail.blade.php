@extends('mail.maillayout')
@section('mail-content')
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hello {{ $firstname }}</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        You are not alone. Many of us are always waiting for the next salary barely a week after we receive one.
    </p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        At Paymyrent, we have a simply strategy that can help. We call it don’t torch until you save. What this
        means is that you can’t torch your income until you have saved 15% of that income on Paymyrent. Don’t
        wait till the next day before you save. Save it immediately. You can use the automated savings for this or
        the transfer option.
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        Use the remaining 85% on other expenses you have planned for. Remember that if you save and get
        broke, it’s good. But if you don’t save and still get broke, then you are very broke.
    </p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
        Money is never enough, but whatever you do, just keep saving.
    </p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">If you ever need our help, we are just a mail, a call or Whatsapp away. Your number plug is
        {{ config('app.whatsapp_number') }}.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">You can visit Paymyrent HQ at {{ config('app.office_address') }}. The street is just before First bank PLC if coming from Opebi.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Busola Adegbayibi</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Product Head,</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Paymyrent Nigeria.</p>
@endsection
