<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Mea+Culpa&family=Nanum+Myeongjo&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="
    background:#f3f3f3;
    padding:40px;
    font-family:'Segoe UI', Arial, sans-serif;
">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="
       background:#ffffff;
       border-radius:12px;
       box-shadow:0 10px 30px rgba(0,0,0,0.08);
       overflow:hidden;
       ">

                    <!-- HEADER -->
                    <tr style="background:#0a1a44;">
                        <td align="center" style="padding:30px;">
                            <img width="80" height="80"
                                src="https://img.icons8.com/d4af37/fluency-systems-regular/96/tulip.png" alt="Tulip Restaurant"
                                width="120" style="display:block;margin-bottom:10px;" />
                            <h1
                                style="color:#d4af37;margin:0;font-family: 'Mea Culpa'
                                , cursive;">
                                Tulip Restaurant</h1>
                        </td>
                    </tr>

                    <!-- BODY -->
                    <tr>
                        <td style="padding:40px;color:#333;">

                            <p style="font-size:16px;">
                                Hello <strong>{{ $user->name }}</strong>,
                            </p>

                            <p style="font-size:15px;line-height:1.6;">
                                We received a request to reset the password for your Tulip Restaurant account.
                                Click the button below to create a new password.
                            </p>

                            <p style="text-align:center;margin:35px 0;">
                                <a href="{{ $url }}"
                                    style="
       background:#0a1a44;
       color:#ffffff;
       padding:14px 30px;
       text-decoration:none;
       border-radius:30px;
       font-weight:bold;
       letter-spacing:0.5px;
       display:inline-block;
       ">
                                    Reset Password
                                </a>
                            </p>

                            <p style="font-size:14px;color:#666;">
                                If you did not request a password reset, no further action is required.
                            </p>

                            <p style="margin-top:40px;font-size:15px;">
                                Warm regards,<br>
                                <strong>Tulip Restaurant Team</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr style="background:#f8f8f8;">
                        <td align="center" style="padding:20px;font-size:12px;color:#d4af37;">
                            © {{ date('Y') }} Tulip Restaurant. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/c8a515c247.js" crossorigin="anonymous"></script>
</body>

</html>
