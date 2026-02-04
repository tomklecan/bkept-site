<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kept Guide | Bkept Financial Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-font: 'Inter', sans-serif;
            --bk-border: #E2E8F0;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: var(--bk-font); color: var(--bk-dark); background: #fff; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 20px; }

        /* HEADER */
        header { background: #fff; padding: 20px 0; border-bottom: 2px solid; border-image: var(--bk-gradient) 1; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; text-decoration: none; color: var(--bk-dark); }
        .back-link { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; text-decoration: none; font-weight: 700; }

        /* CONTENT */
        .guide-body { margin: 80px 0 100px 0; line-height: 1.8; font-size: 1.1rem; color: #2D3436; }
        h1 { font-size: 3rem; letter-spacing: -1px; line-height: 1.1; margin-bottom: 40px; }
        h2 { font-size: 1.8rem; margin-top: 50px; margin-bottom: 20px; }
        p { margin-bottom: 30px; }
        
        .highlight-box { background: #F9FAFB; border-left: 4px solid var(--bk-gold-solid); padding: 30px; margin: 40px 0; font-style: italic; color: #636E72; }

    </style>
</head>
<body>

    <header>
        <div class="container nav-flex">
            <a href="/" class="logo">bkept.</a>
            <a href="/" class="back-link">← Return to OS</a>
        </div>
    </header>

    <div class="container guide-body">
        <span style="color: var(--bk-gold-solid); font-weight: 800; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; display:block; margin-bottom:20px;">The Protocol</span>
        <h1>The Kept Guide to Operational Clarity.</h1>
        
        <p>Bookkeeping is not about taxes. Taxes are a byproduct. Bookkeeping is about the <strong>Story of Your Business.</strong></p>
        
        <p>Most founders treat their books like a laundry hamper—throwing receipts in a pile and hoping someone cleans it up once a year. This is why you feel anxious. This is why you don't know your burn rate. This is why you hesitate to hire.</p>

        <div class="highlight-box">
            "We do not record history. We architect the future."
        </div>

        <h2>Rule #1: The One-Way Sync</h2>
        <p>Data must flow in one direction: Source (Bank) → Verification (Receipt) → Ledger (QuickBooks) → Report (Fathom). If you are manually typing numbers into a spreadsheet, you have already lost.</p>

        <h2>Rule #2: The 5-Day Close</h2>
        <p>You cannot steer a ship with a map from last month. We close books by the 5th business day of the following month. Speed provides agility.</p>

        <h2>Rule #3: Radical Honesty</h2>
        <p>Your P&L is the only place where you cannot lie to yourself. We protect that truth aggressively.</p>

        <hr style="margin: 60px 0; border: 0; border-top: 1px solid #eee;">

        <div style="text-align: center;">
            <p style="font-size: 0.9rem; color: #636E72;">Ready to install this operating system?</p>
            <a href="/discovery" class="logo" style="background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Initialize Audit →</a>
        </div>
    </div>

</body>
</html>
