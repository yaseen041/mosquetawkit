<!DOCTYPE html>
<html lang="en">

<body style="font-family: 'Arial', sans-serif; line-height: 1.6; color: #333; background-color: #f9f9f9; margin: 0; padding: 0;">
    <div style="width: 100%; max-width: 700px; margin: 20px auto; background: linear-gradient(135deg, #ffffff, #f0f0f0); border-radius: 15px; overflow: hidden; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
        <div style="color: #ffffff; padding: 10px 20px; text-align: center; border-bottom: 1px solid #13a08f;">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="80" style="max-width: 60px;">
        </div>
        <div style="padding: 25px; background-color: #ffffff;">
            <p>Dear <strong>User</strong>,</p>
            <p>Recently you created a mosque <a href="" target="_blank" style="color: #1F4B43; text-decoration: none;">Mosque Name</a>. Please find the details below:</p>

            <h4 style="color: #1F4B43; margin-top: 20px; margin-bottom: 5px; font-size: 18px;">Login Details</h4>
            <div style="background-color: #f4f4f4; padding: 15px; border-radius: 8px; border: 1px solid #ddd; margin-top: 10px;">

                <p style="margin: 5px 0; font-size: 14px; color: #555;"><strong>Administration Link:</strong> <a href="http://localhost/mosquetawkit/online/mosque" target="_blank" style="color: #1F4B43; text-decoration: none;">http://localhost/mosquetawkit/online/mosque</a></p>
                <p style="margin: 5px 0; font-size: 14px; color: #555;"><strong>Login:</strong> {{ $data['email']}}</p>
                <p style="margin: 5px 0; font-size: 14px; color: #555;"><strong>Password:</strong> {{$data['password']}}</p>
            </div>

            <p style="margin: 15px 0; font-size: 15px; color: #555;"><strong>Best Regards,</strong><br>{{ get_section_content('project', 'site_title') }}</p>
        </div>
        <div style="text-align: center; font-size: 12px; color: #666; padding: 15px 20px; background: #f4f4f4; border-top: 1px solid #ddd;">
            <p style="margin: 0;">&copy; 2025 EL Real Estate. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
