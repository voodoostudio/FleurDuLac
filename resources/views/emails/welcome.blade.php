
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style>
        @import url(https://fonts.googleapis.com/css?family=Josefin+Sans);
        [style*="Josefin+Sans"] {
            font-family: 'Josefin Sans', sans-serif !important;
        }
    </style>

    <!--[if mso]>
    <style>
        span {
            font-family: 'Josefin Sans', sans-serif !important;
        }
    </style>
    <![endif]-->
</head>
<body bgcolor="#222222" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="font-family: 'Josefin Sans', sans-serifs; color: #d9d9d9; font-size: 15px; background-color: #222222 !important;">
<center style="font-family: 'Josefin Sans', sans-serif; color: #d9d9d9; font-size: 15px;">
    <table bgcolor="#222222" border="0" cellpadding="0" align="center" cellspacing="0" width="100%">
        <tr>
            <td height="45" style="height: 45px" colspan="3"></td>
        </tr>
        <tr>
            <td width="10"></td>
            <td align="center">
                <table cellpadding="0" cellspacing="0" style="border-collapse:collapse; max-width: 600px; border:1px solid #d1bc82; background-color: #222222">
                    <tr>
                        <td height="45" style="height: 45px" colspan="3"></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <a href="{{ route('home.locale') }}" style="text-decoration: none">
                                <img width="140" src="{{ $message->embed('../public/img/logo.png') }}" style="width: 140px;" alt="Fleur du Lac logo" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td height="45" style="height: 45px" colspan="3"></td>
                    </tr>
                    <tr>
                        <td width="30"></td>
                        <td>
                            <table cellpadding="10">
                                <tr>
                                    <td style="font-family: 'Josefin Sans', sans-serif; font-size:15px; color:#d1bc82;">
                                        <span>{{ trans('lang.description_email_1') }} </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family: 'Josefin Sans', sans-serif; font-size:15px; color:#d9d9d9;">
                                        <span>{!! trans('lang.description_email_2', ['amount' => $name]) !!}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family: 'Josefin Sans', sans-serif; font-size:15px; color:#d9d9d9;">
                                        {{ $bodyMessage }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; font-family: 'Josefin Sans', sans-serif; color: #d9d9d9;">
                                        {{ trans('lang.description_email_3') }} <a href="mailto:{{ $email }}" style="text-decoration: none; color:#d1bc82">{{ $email }}</a>.
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="30"></td>
                    </tr>
                    <tr>
                        <td height="45" style="height: 45px" colspan="3"></td>
                    </tr>
                </table>
            </td>
            <td width="10"></td>
        </tr>
        <tr>
            <td height="7" style="height: 7px" colspan="3"></td>
        </tr>
        {{--<tr>--}}
        {{--<td align="center">--}}
        {{--<a href="#" style="margin: 10px 0;display: block;text-align: center; font-weight: bold; text-transform: uppercase; text-decoration: none; font-size: 15px; font-family: 'Josefin Sans', sans-serif; color: #d9d9d9;">Unsubscribe</a>--}}
        {{--</td>--}}
        {{--</tr>--}}
        <tr>
            <td height="40" style="height: 40px" colspan="3"></td>
        </tr>
    </table>
</center>
</body>
</html>
