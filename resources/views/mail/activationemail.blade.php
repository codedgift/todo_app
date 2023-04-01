@extends('mail.maillayout')
@section('mail-content')
	<p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hi <b>{{$data['firstname']}}</b>,</p>



    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">My team and I have been waiting for you for a long time!</b></p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">We are glad you are finally here. To confirm this is you and not someone else trying to act in your capacity, Please Click the button below  to instantly verify your identity.</p>

    <table class="btn btn-primary" cellpadding="0" cellspacing="0" style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
        <tr>
            <td align="center" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top; padding-bottom: 15px;" valign="top">
            <table cellpadding="0" cellspacing="0" style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                <tr>
                <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px; vertical-align: top; background-color: #f90000; border-radius: 5px; text-align: center;" valign="top" bgcolor="#f90000" align="center">
                <a href="{{config('app.email_verification_link')}}?email={{$data['email']}}&token={{$pin}}" style="box-sizing: border-box; border-color: #f90000; text-decoration: none; background-color: #f90000; border: solid 1px #f90000; border-radius: 5px; cursor: pointer; color: #ffffff; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; display: inline-block;">Verify Me</a>
                </td>
                </tr>
            </table>
            </td>
        </tr>
    </table>

    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Alternatively, you can copy this verification code <b>{{$pin}}</b>, and paste it on the verification page being displayed to you right now on the Paymyrent dashboard. </p>


    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Warm Regards,</p>



    <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Team {{config('app.name')}}.</p>

@endsection
