<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        h2 { color: #f35c08; }
        p { margin: 10px 0; }
        a { color: #f35c08; text-decoration: none; font-weight: bold; }
        .button {
            display: inline-block;
            background-color: #f35c08;
            color: white !important;
            padding: 5px 12px;
            border-radius: 5px;
            text-decoration: none;
        }
        .footer { font-size: 0.9em; color: #000000; margin-top: 20px; }
    </style>
    <title>Reset Password</title>
</head>
<body>
    <h4>Hi {{ $data['email'] }},</h4>
    <p>You recently requested to reset your password. Here is your new password: <strong>{{ $data['password'] }}</strong></p>
    <p>Please log in and change your password immediately to ensure your account's security.</p>
    <h4 class="footer">
        Best regards,
        <br />
        {{ get_section_content('project', 'site_title') }}
    </h4>
</body>
</html>