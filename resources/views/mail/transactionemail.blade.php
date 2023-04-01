@extends('mail.transactionlayout')
@section('mail-content')
<p align="right" style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;"><b>{{date("Y-m-d")}}</b></p>
<h3 align="center" style="color: #111111 !important; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 400; line-height: 1.4em; margin: 0; margin-bottom: 30px; font-size: 18px; text-transform: uppercase;"><b><u>{{config('app.name')}} RECEIPT</u></b></h3>
<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Receipt for a transaction that occured on your account</p>

<h4 style="color: #111111 !important; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 500; line-height: 1.4em; margin: 0; font-size: 14px; margin-bottom: 0 !important; text-align: center;"><b>Transaction Details</b></h4>
<table cellpadding="10" border="1" cellspacing="0" style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
  <tbody>
    <tr>
      <th>Amount</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">NGN {{number_format($data['amount'], 2)}}</td>
    </tr>

    <tr>
      <th>Type</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['type']}}</td>
    </tr>

    @switch($data['type'])
      @case('activation')
        <tr>
          <th>Card</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['card']['type']}} ending with {{$data['card']['last4']}}</td>
        </tr>
        @break

      @case('withdrawal')
        <tr>
          <th>Plan</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['plan']['name']}}</td>
        </tr>

        <tr>
          <th>Bank</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">
            {{$data['bank']['account_number']}} -
            @switch($data['bank']['bank_code'])
              @case('044')
                  {{'ACCESS BANK PLC'}}
                  @break
              @case('023')
                  {{'CITI BANK'}}
                  @break
              @case('063')
                  {{'DIAMOND BANK PLC'}}
                  @break
              @case('050')
                  {{'ECOBANK BANK PLC'}}
                  @break
              @case('070')
                  {{'FIDELITY BANK PLC'}}
                  @break
              @case('011')
                  {{'FIRST BANK OF NIGERIA PLC'}}
                  @break
              @case('214')
                  {{'FIRST CITY MONUMENT BANK PLC'}}
                  @break
              @case('058')
                  {{'GUARANTY TRUST BANK PLC'}}
                  @break
              @case('030')
                  {{'HERITAGE BANK'}}
                  @break
              @case('301')
                  {{'JAIZ BANK'}}
                  @break
              @case('082')
                  {{'KEYSTONE BANK'}}
                  @break
              @case('076')
                  {{'SKYE BANK PLC'}}
                  @break
              @case('221')
                  {{'STANBIC-IBTC BANK PLC'}}
                  @break
              @case('232')
                  {{'STERLING BANK PLC'}}
                  @break
              @case('100')
                  {{'SUNTRUST BANK'}}
                  @break
              @case('032')
                  {{'UNION BANK OF NIGERIA PLC'}}
                  @break
              @case('033')
                  {{'UNITED BANK FOR AFRICA PLC'}}
                  @break
              @case('215')
                  {{'UNITY BANK PLC'}}
                  @break
              @case('035')
                  {{'WEMA BANK PLC'}}
                  @break
              @case('057')
                  {{'ZENITH BANK PLC'}}
                  @break
              @default

            @endswitch
          </td>
        </tr>

        @break

      @case('savings')
        <tr>
          <th>Plan</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['plan']['name']}}</td>
        </tr>

        <tr>
          <th>Card</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['card']['type']}} ending with {{$data['card']['last4']}}</td>
        </tr>

        @break

      @case('loan disbursement')
        <tr>
          <th>Loan Code</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['loan']['code']}}</td>
        </tr>

        <tr>
          <th>Bank</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">
            {{$data['bank']['account_number']}} -
            @switch($data['bank']['bank_code'])
              @case('044')
                  {{'ACCESS BANK PLC'}}
                  @break
              @case('023')
                  {{'CITI BANK'}}
                  @break
              @case('063')
                  {{'DIAMOND BANK PLC'}}
                  @break
              @case('050')
                  {{'ECOBANK BANK PLC'}}
                  @break
              @case('070')
                  {{'FIDELITY BANK PLC'}}
                  @break
              @case('011')
                  {{'FIRST BANK OF NIGERIA PLC'}}
                  @break
              @case('214')
                  {{'FIRST CITY MONUMENT BANK PLC'}}
                  @break
              @case('058')
                  {{'GUARANTY TRUST BANK PLC'}}
                  @break
              @case('030')
                  {{'HERITAGE BANK'}}
                  @break
              @case('301')
                  {{'JAIZ BANK'}}
                  @break
              @case('082')
                  {{'KEYSTONE BANK'}}
                  @break
              @case('076')
                  {{'SKYE BANK PLC'}}
                  @break
              @case('221')
                  {{'STANBIC-IBTC BANK PLC'}}
                  @break
              @case('232')
                  {{'STERLING BANK PLC'}}
                  @break
              @case('100')
                  {{'SUNTRUST BANK'}}
                  @break
              @case('032')
                  {{'UNION BANK OF NIGERIA PLC'}}
                  @break
              @case('033')
                  {{'UNITED BANK FOR AFRICA PLC'}}
                  @break
              @case('215')
                  {{'UNITY BANK PLC'}}
                  @break
              @case('035')
                  {{'WEMA BANK PLC'}}
                  @break
              @case('057')
                  {{'ZENITH BANK PLC'}}
                  @break
              @default

            @endswitch
          </td>
        </tr>

        @break



      @case('loan repayment')
        <tr>
          <th>Loan Code</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['loan']['code']}}</td>
        </tr>

        @if ($data['plan'])
          <tr>
            <th>Plan</th>
            <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['plan']['name']}}</td>
          </tr>
        @endif

        @if ($data['card'])
          <tr>
            <th>Card</th>
            <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['card']['type']}} ending with {{$data['card']['last4']}}</td>
          </tr>
        @endif

        @break

      @case('savings termination' || 'interest termination')
        <tr>
          <th>Plan</th>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['plan']['name']}}</td>
        </tr>

        @break
      @default

    @endswitch

    <tr>
      <th>Name</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{$data['user']->firstname}} {{$data['user']->lastname}}</td>
    </tr>

    <tr>
      <th>Date</th>
      <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top;" valign="top">{{date("Y-m-d")}}</td>
    </tr>
  </tbody>
</table>
<br>
<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">If you ever need our help, we are just a mail, a call or Whatsapp away. Your number plug is
    {{ config('app.whatsapp_number') }}.</p>

<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">You can visit Paymyrent HQ at {{ config('app.office_address') }}. The street is just before First bank PLC if coming from Opebi.</p>


<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Busola Adegbayibi</p>
<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Product Head,</p>
<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 3px;">Paymyrent Nigeria.</p>
<br>
@endsection
