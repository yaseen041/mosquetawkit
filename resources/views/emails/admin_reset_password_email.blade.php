<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your New Password</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2>Your New Password</h2>
        <p>Hello <strong>{{ $data['email'] }}</strong>,</p>
        <p>Your password has been successfully reset. Your new password: <strong>{{ $data['password'] }}</strong></p>
        <p>Please use this password to log in to your account. You can access your account <a href="{{url('admin/login')}}" style="color: #007BFF;">here</a>. We recommend changing it once you log in for security purposes.</p>
        <p>If you did not request this change, please contact us immediately at <a href="mailto:{{ get_section_content('project', 'admin_email') }}" style="color: #007BFF;">{{ get_section_content('project', 'admin_email') }}</a>.</p>
        <br>
        <p>Best regards,</p>
        <p>The <strong>{{ get_section_content('project', 'site_title') }}</strong> Team</p>
    </div>
</body>
</html>
