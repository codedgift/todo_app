<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{{ $subject }}</title>
<style media="all" type="text/css">
@media only screen and (max-width: 620px) {
  table[class=body] h1,
  table[class=body] h2,
  table[class=body] h3,
  table[class=body] h4 {
    font-weight: 600 !important;
  }
  table[class=body] h1 {
    font-size: 22px !important;
  }
  table[class=body] h2 {
    font-size: 18px !important;
  }
  table[class=body] h3 {
    font-size: 16px !important;
  }
  table[class=body] .content,
  table[class=body] .wrapper {
    padding: 10px !important;
  }
  table[class=body] .container {
    padding: 0 !important;
    width: 100% !important;
  }
  table[class=body] .btn table,
  table[class=body] .btn a {
    width: 100% !important;
  }
}
</style>
</head>

<body style="margin: 0; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; height: 100% !important; line-height: 1.6em; -webkit-font-smoothing: antialiased; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; background-color: #f6f6f6;">

<table class="body" style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;" width="100%" bgcolor="#f6f6f6">
	<tr>
		<td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;" valign="top"></td>
		<td class="container" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto !important; max-width: 580px; padding: 10px; width: 580px;" width="580" valign="top">
			<div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">
<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"></span>
<div class="header" style="box-sizing: border-box; margin-bottom: 30px; margin-top: 20px; width: 100%;">
  <table style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
    <tr>
      <td class="align-center" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; text-align: center;" valign="top" align="center">
        <a href="{{config('app.url')}}" style="box-sizing: border-box; color: #348eda; text-decoration: underline;"><img src="{{config('mail.logo')}}" height="50" alt="{{config('app.name')}}" style="-ms-interpolation-mode: bicubic; max-width: 100%;"></a>
      </td>
    </tr>
  </table>
</div>
<table class="main" style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border: 1px solid #e9e9e9; border-radius: 3px;" width="100%">
  <tr>
    <td class="wrapper" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top; padding: 30px;" valign="top">
      <table style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
        <tr>
          <td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;" valign="top">
          		@yield('mail-content')
			</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div class="footer" style="box-sizing: border-box; clear: both; width: 100%;">
  <table style="box-sizing: border-box; border-collapse: separate !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; color: #999999; font-size: 12px;" width="100%">
    <tr style="color: #999999; font-size: 12px;">
      <td class="align-center" style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; vertical-align: top; font-size: 12px; color: #999999; text-align: center; padding: 20px 0;" valign="top" align="center">
        <p style="font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: normal; margin: 0; margin-bottom: 15px; color: #999999; font-size: 12px;">Copyright© 2023 Poptin.</p>
      </td>
    </tr>
  </table>
</div>
</div>
		</td>
		<td style="box-sizing: border-box; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; vertical-align: top;" valign="top"></td>
	</tr>
</table>

</body>
</html>
