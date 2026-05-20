<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Enquiry — Liberu Software</title>
    <style>
        body { margin: 0; padding: 0; background: #f5f5f5; font-family: 'Segoe UI', Arial, sans-serif; color: #333; }
        .wrapper { max-width: 600px; margin: 32px auto; background: #fff; border-radius: 8px; overflow: hidden; border: 1px solid #e5e5e5; }
        .header { background: #1a1a1a; padding: 28px 32px; }
        .header-brand { display: flex; align-items: center; gap: 12px; }
        .header-icon { width: 36px; height: 36px; background: #f5c518; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; color: #1a1a1a; }
        .header h1 { margin: 0 0 4px; color: #fff; font-size: 18px; font-weight: 700; }
        .header p { margin: 0; color: #a3a3a3; font-size: 13px; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em; color: #888; margin-bottom: 4px; }
        .value { font-size: 15px; color: #1a1a1a; }
        .message-box { background: #f9f9f9; border: 1px solid #e5e5e5; border-radius: 6px; padding: 16px 20px; font-size: 14px; color: #333; line-height: 1.6; white-space: pre-wrap; }
        .divider { border: none; border-top: 1px solid #e5e5e5; margin: 24px 0; }
        .footer { background: #f9f9f9; border-top: 1px solid #e5e5e5; padding: 16px 32px; font-size: 12px; color: #999; text-align: center; }
        a { color: #b89400; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-brand">
                <div class="header-icon">L</div>
                <div>
                    <h1>New Contact Enquiry</h1>
                    <p>Submitted via liberusoftware.com</p>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="field">
                <div class="label">From</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            <div class="field">
                <div class="label">Email</div>
                <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
            </div>
            <div class="field">
                <div class="label">Subject</div>
                <div class="value">{{ $data['subject'] }}</div>
            </div>
            @if(!empty($data['enquiry_type']))
            <div class="field">
                <div class="label">Enquiry Type</div>
                <div class="value">{{ ucfirst($data['enquiry_type']) }}</div>
            </div>
            @endif
            <hr class="divider">
            <div class="field">
                <div class="label">Message</div>
                <div class="message-box">{{ $data['message'] }}</div>
            </div>
        </div>
        <div class="footer">
            This email was sent from the contact form at
            <a href="https://www.liberusoftware.com">www.liberusoftware.com</a>.
            Reply directly to this email to respond to {{ $data['name'] }}.
        </div>
    </div>
</body>
</html>
