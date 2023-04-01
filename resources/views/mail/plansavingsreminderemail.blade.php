@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Dear <b>{{$data['plan']['user']['firstname']}}</b>,</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Please be informed that the next saving date for your plan <b>{{$data['plan']['name']}}</b>,
        @if($data['plan']['next_deduction_date'] == $data['today'])
            is today.
        @else
            is on <b>{{$data['formatted_next_saving_date']}}.</b>
        @endif
    </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">If you have added your Card to your plan, you do not have to do anything. Your savings will be debited from your account automatically.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;">In case there are no funds in your bank account, you do not have to worry, there is no penalty for not saving on your saving date/dates. However, after 4 days of trying to debit your card to no avail, we won't try again. In this case, we expect you to do a Transfer of your savings to the account below when you have the funds. </p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;">Find below the account details for saving via transfer:</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>Account Name:</b> {{config('app.bank_details.account_name')}}</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>Bank Name:</b> {{config('app.bank_details.bank_name')}}</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>Account Number:</b> {{config('app.bank_details.account_number')}}</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;">If you save using the transfer option, please note that it takes upto 6 hours for it to reflect on your Paymyrent dashboard. </p>
    
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Thank you for using PAYMYRENT.</p>
@endsection
