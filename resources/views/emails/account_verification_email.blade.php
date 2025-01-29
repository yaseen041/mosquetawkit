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
</head>
<body>
    <h4>Hi {{ $edata['full_name'] }},</h4>
    <span>Welcome to <strong>{{ get_section_content('project', 'site_title') }}</strong>!</span>
    <p>Please click the button below to verify your email address.</p>
    <p style="text-align: start; margin-left: 1rem">
        <a href="{{ $edata['verificationLink'] }}" class="button">Verify Email</a>
    </p>
    <p>If the button above doesn’t work, you can copy and paste the following link into your browser:</p>
    <p style="margin-left: 1rem">
        <a href="{{ $edata['verificationLink'] }}">{{ $edata['verificationLink'] }}</a>
    </p>
    <p>If you did not sign up to {{ get_section_content('project', 'site_title') }}, please ignore this email.</p>
    <h4 class="footer">
        Best regards,
        <br />
        The {{ get_section_content('project', 'site_title') }} Team.
    </h4>
</body>
</html>