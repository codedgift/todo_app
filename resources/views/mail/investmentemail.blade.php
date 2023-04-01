@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hi <b> Paymyrent</b>,</p>



    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Kindly find below the customer details</b></p>

<table cellpadding="10" border="1" cellspacing="0" style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
  <tbody>
    <tr>
      <th>Firstname</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['firstname']}}</td>
    </tr>

    <tr>
      <th>Lastname</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['lastname']}}</td>
    </tr>

    <tr>
      <th>Phone Number</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['phone']}}</td>
    </tr>

    <tr>
      <th>Investment Name</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['product']}}</td>
    </tr>

    <tr>
      <th>Amount</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{number_format($data['amount'], 2)}}</td>
    </tr>

    <tr>
      <th>Duration</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['duration'] . ' Months'}}</td>
    </tr>

    <tr>
      <th>ROI</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['roi'] .'%'}}</td>
    </tr>

    <tr>
      <th>Start Date</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['start_date']}}</td>
    </tr>

    <tr>
      <th>End Date</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['end_date']}}</td>
    </tr>


  </tbody>
</table>
<br>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Warm Regards,</p>



    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Team {{config('app.name')}}.</p>

@endsection
