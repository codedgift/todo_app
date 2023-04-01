@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Dear <b>{{$data['loan']['user']['firstname']}}</b>,</p>
   

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Please be informed that your loan of NGN {{number_format($data['repayment_amount'], 2)}}
        @if($data['loan']['due_date'] == $data['today'])
            is due for repayment today.
        @elseif($data['loan']['due_date'] < $data['today'])
            has been due for repayment since <b>{{$data['formatted_due_date']}}.</b>
        @else
            will be due for repayment on <b>{{$data['formatted_due_date']}}.</b>
        @endif 
    </p>
     

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Ensure your bank account is funded for your repayment to be automatically deducted.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;">You can also make a cash transfer into our bank account.</p>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>Account Name:</b> {{config('app.bank_details.account_name')}}</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>Bank Name:</b> {{config('app.bank_details.bank_name')}}</p>
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>Account Number:</b> {{config('app.bank_details.account_number')}}</p>
    

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 13px; font-weight: normal; margin: 0; margin-bottom: 5px;"><b>NOTE: </b>Your loan repayment will be deducted from your savings if you fail to make repayment on or a day after your due date.</p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Warm Regards,</p>

     
    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Team {{config('app.name')}}.</p>
@endsection