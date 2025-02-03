<html>
<head></head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6; margin: 0; padding: 0;">
    <h4 style="color: #f35c08; margin-bottom: 10px;">Hi Admin,</h4>
    <span style="display: block; margin-bottom: 10px;">You have received a new contact form submission on <strong>{{ get_section_content('project', 'site_title') }}</strong>!</span>

    <p style="margin: 10px 0;"><strong>Message:</strong></p>
    <p style="margin-left: 1rem; margin-bottom: 10px;">{{ nl2br(e($message)) }}</p>

    <p style="margin: 10px 0;">If you need to reply, please contact <a href="mailto:{{ $email }}" style="color: #f35c08; text-decoration: none; font-weight: bold;">{{ $email }}</a>.</p>

    <h4 style="font-size: 0.9em; color: #000000; margin-top: 20px;">
        Best regards,<br />
        The {{ get_section_content('project', 'site_title') }} Team.
    </h4>
</body>
</html>
