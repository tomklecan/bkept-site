<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkept | Investment Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* [SECTION] BKEPT IDENTITY PROTOCOL */
        :root {
            /* Palette */
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-void: #1A1A1A;
            --bk-surface: #F9FAFB;
            --bk-white: #FFFFFF;
            --bk-border: #E2E8F0;
            --bk-font: 'Inter', sans-serif;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body { 
            font-family: var(--bk-font); 
            color: var(--bk-dark); 
            background: var(--bk-surface); 
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* [SECTION] GLOBAL NAVIGATION */
        .site-header {
            background: var(--bk-white);
            width: 100%;
            border-bottom: 2px solid;
            border-image: var(--bk-gradient) 1; /* The Gold Line Protocol */
            padding: 20px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-logo {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -1px;
            text-decoration: none;
            background: var(--bk-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: lowercase; /* Brand Spec */
        }

        .nav-link {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #636E72;
            text-decoration: none;
            transition: 0.3s;
        }
        .nav-link:hover { color: var(--bk-gold-solid); }

        /* [SECTION] LAYOUT & STRUCTURE */
        .page-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .header-section {
            text-align: left;
            margin-bottom: 60px;
            border-bottom: 2px solid var(--bk-border);
            padding-bottom: 20px;
            position: relative;
        }
        
        .header-section::after {
            content: ""; position: absolute; left: 0; bottom: -2px;
            height: 2px; width: 100px; background: var(--bk-gradient);
        }

        h1 { 
            font-size: 42px; font-weight: 800; letter-spacing: -1.5px; 
            color: var(--bk-void); margin: 10px 0; text-transform: uppercase; line-height: 1;
        }
        
        .hero-tag {
            font-size: 0.85rem; font-weight: 800; text-transform: uppercase; 
            letter-spacing: 3px; color: var(--bk-gold-solid); 
            border: 1px solid var(--bk-gold-solid); padding: 4px 12px; 
            border-radius: 100px; display: inline-block; margin-bottom: 15px;
        }

        .sub-text { font-size: 16px; color: #636E72; max-width: 600px; margin-top: 10px; }

        /* [SECTION] THE DASHBOARD */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: start;
        }

        /* LEFT PANEL: INPUTS */
        .config-panel {
            background: var(--bk-white);
            border: 1px solid var(--bk-border);
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* Mode Switch */
        .mode-switch-container {
            display: flex; align-items: center; gap: 20px;
            margin-bottom: 40px; padding: 20px; background: #F0F2F5; border-radius: 4px;
        }
        
        .switch-label { font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; color: #BDC3C7; transition: 0.3s; }
        .switch-label.active { color: var(--bk-dark); }

        .toggle-checkbox { display: none; }
        .toggle-slot {
            position: relative; height: 28px; width: 54px;
            border: 2px solid var(--bk-border); border-radius: 100px;
            background-color: white; transition: 0.3s; cursor: pointer;
        }
        .toggle-button {
            transform: translate(3px, 3px); position: absolute; height: 18px; width: 18px;
            border-radius: 50%; background-color: #BDC3C7; transition: 0.3s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .toggle-checkbox:checked ~ .toggle-slot .toggle-button {
            transform: translate(29px, 3px); background-color: var(--bk-gold-solid);
        }

        /* Direct Inputs */
        .input-block { margin-bottom: 30px; }
        .input-label { 
            display: block; font-size: 11px; font-weight: 700; text-transform: uppercase; 
            letter-spacing: 2px; color: #636E72; margin-bottom: 10px; 
        }
        
        .bk-input {
            width: 100%; padding: 18px; font-size: 16px; font-weight: 600; color: var(--bk-dark);
            background: var(--bk-white); border: 1px solid var(--bk-border); border-radius: 2px;
            font-family: 'Inter', sans-serif; transition: 0.2s;
        }
        .bk-input:focus { 
            outline: none; border-color: var(--bk-gold-solid); 
            box-shadow: 0 0 0 4px rgba(197, 160, 89, 0.1); 
        }
        .helper-text { font-size: 12px; color: #B2BEC3; margin-top: 8px; font-style: italic; }

        /* RIGHT PANEL: OUTPUT */
        .investment-panel {
            background: var(--bk-void);
            color: white;
            padding: 40px;
            border-radius: 4px;
            position: sticky; top: 40px;
        }

        .price-block { margin-bottom: 30px; border-bottom: 1px solid #333; padding-bottom: 30px; }
        .price-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: var(--bk-gold-solid); margin-bottom: 5px; display: block; }
        
        .price-display { 
            font-size: 48px; font-weight: 800; letter-spacing: -2px; line-height: 1; 
            background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .price-sub { font-size: 12px; color: #BDC3C7; margin-top: 5px; }

        /* Lock Form */
        .lock-form { margin-top: 30px; }
        .lock-input {
            width: 100%; padding: 15px; margin-bottom: 15px; background: #2D3436; 
            border: 1px solid #444; color: white; font-family: 'Inter', sans-serif; font-size: 14px;
        }
        .lock-input:focus { border-color: var(--bk-gold-solid); outline: none; }

        .btn-lock {
            width: 100%; padding: 20px; background: var(--bk-gradient); 
            border: none; color: var(--bk-void); font-weight: 800; 
            text-transform: uppercase; letter-spacing: 2px; cursor: pointer; 
            transition: transform 0.2s;
        }
        .btn-lock:hover { transform: translateY(-2px); }

        /* Seasonal Alert */
        .seasonal-alert {
            margin-top: 40px; background: #FFFBF2; border-left: 3px solid var(--bk-gold-solid); padding: 20px;
        }
        .alert-title { font-size: 13px; font-weight: 800; color: var(--bk-dark); text-transform: uppercase; margin-bottom: 5px; }
        .alert-body { font-size: 13px; color: #555; line-height: 1.5; }

        @media(max-width: 900px) {
            .dashboard-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="site-header">
        <div class="nav-container">
            <a class="bk-logo">bkept.</a>
            <a href="/" class="nav-link">← Return to Home</a>
        </div>
    </header>

    <div class="page-container">
        
        <div class="header-section">
            <span class="hero-tag">Transparent Pricing Logic</span>
            <h1>Scalable Investment </h1>
            <p class="sub-text">Whether your business operates year-round or seasonally, the pricing is kept simple. Use the dashboard below to estimate your monthly investment for a well-kept business. We offer special pricing for business with seasonal operations </p>
        </div>

        <div class="dashboard-grid">
            
            <div class="config-panel">
                
                <div class="mode-switch-container">
                    <span class="switch-label active" id="lblStandard">Standard Businesses</span>
                    <label class="toggle-slot">
                        <input type="checkbox" class="toggle-checkbox" id="seasonalToggle" onchange="calculate()">
                        <div class="toggle-button"></div>
                    </label>
                    <span class="switch-label" id="lblSeasonal">Seasonal Businesses</span>
                </div>

                <div class="input-block">
                    <label class="input-label">Monthly Transaction Volume</label>
                    <input type="number" id="txnInput" class="bk-input" value="75" min="0" placeholder="e.g. 75" oninput="calculate()">
                    <div class="helper-text">Average combined volume across all connected accounts.</div>
                </div>

                <div class="input-block">
                    <label class="input-label">Data Feeds (Bank/CC Accounts)</label>
                    <input type="number" id="acctInput" class="bk-input" value="1" min="1" placeholder="e.g. 1" oninput="calculate()">
                </div>

                <div class="input-block">
                    <label class="input-label">Historical Catch-Up (Months Behind)</label>
                    <input type="number" id="monthInput" class="bk-input" value="0" min="0" placeholder="e.g. 0" oninput="calculate()">
                </div>

                <div class="seasonal-alert">
                    <div class="alert-title">The Off-Season Myth</div>
                    <div class="alert-body">Just because revenue pauses doesn't mean operations stop. The off-season is the time to architect the new season. We're supporting you year-round so you're ready for peak season- come opening day, it's show time!</div>
                </div>

            </div>

            <div class="investment-panel">
                
                <div class="price-block">
                    <span class="price-label">The Kept Retainer (Monthly)</span>
                    <div class="price-display" id="outRetainer">$650</div>
                    <div class="price-sub">Includes Tech Stack & Truth Memo</div>
                </div>

                <div class="price-block" style="border-bottom: none; padding-bottom: 0;">
                    <span class="price-label">The Concierge (Cleanup)</span>
                    <div class="price-display" id="outCleanup">$500</div>
                    <div class="price-sub" id="cleanupMeta">One-Time Setup Fee</div>
                </div>

                <form class="lock-form" id="lockForm">
                    <div style="margin-bottom: 10px; font-size: 10px; font-weight: 700; text-transform: uppercase; color: #636E72;">Secure this Architecture</div>
                    <input type="text" name="lead_name" class="lock-input" placeholder="FULL NAME" required>
                    <input type="email" name="lead_email" class="lock-input" placeholder="WORK EMAIL" required>
                    <button type="submit" class="btn-lock">Lock in Rate</button>
                </form>

            </div>

        </div>
    </div>

<script>
    const WEBHOOK_URL = "https://hooks.zapier.com/hooks/catch/26262080/ulvega2/";

    function calculate() {
        // 1. Get Values
        const txn = parseInt(document.getElementById('txnInput').value) || 0;
        const accts = parseInt(document.getElementById('acctInput').value) || 1;
        const months = parseInt(document.getElementById('monthInput').value) || 0;
        const isSeasonal = document.getElementById('seasonalToggle').checked;

        // 2. Visual Toggle State
        const lblStandard = document.getElementById('lblStandard');
        const lblSeasonal = document.getElementById('lblSeasonal');
        if(isSeasonal) {
            lblStandard.classList.remove('active');
            lblSeasonal.classList.add('active');
        } else {
            lblStandard.classList.add('active');
            lblSeasonal.classList.remove('active');
        }

        // 3. Logic Engine [cite: 300-310]
        // Base Price: Standard ($650) vs Seasonal ($450)
        let base = isSeasonal ? 450 : 650;
        
        // Volume: 0-100 (Free), 101-250 (+$250), 251-500 (+$500)
        let volCharge = 0;
        if (txn > 100 && txn <= 250) volCharge = 250;
        if (txn > 250 && txn <= 500) volCharge = 500;
        
        // Accounts: 1-3 (Free), 4+ (+$50 each)
        let acctCharge = 0;
        if (accts > 3) acctCharge = (accts - 3) * 50;

        // Monthly Total
        const monthlyTotal = base + volCharge + acctCharge;
        
        // Cleanup: $500 Setup + (50% Monthly Rate * Months Behind)
        const cleanupTotal = 500 + (monthlyTotal * 0.5 * months);

        // 4. Render Output
        const retainerEl = document.getElementById('outRetainer');
        const cleanupEl = document.getElementById('outCleanup');
        const cleanupMeta = document.getElementById('cleanupMeta');

        if (txn > 500) {
            retainerEl.innerText = "Custom";
            cleanupEl.innerText = "Custom";
            retainerEl.style.fontSize = "32px"; 
        } else {
            retainerEl.innerText = "$" + monthlyTotal.toLocaleString();
            cleanupEl.innerText = "$" + cleanupTotal.toLocaleString();
            retainerEl.style.fontSize = "48px";
        }

        // Update Cleanup Context
        if (months > 0) {
            cleanupMeta.innerText = `Setup + ${months} Months Catch-Up`;
        } else {
            cleanupMeta.innerText = "One-Time Setup Fee";
        }
    }

    calculate();

    // 5. Submit Handler (Zapier Webhook)
    document.getElementById('lockForm').onsubmit = function(e) {
        e.preventDefault();
        const btn = this.querySelector('button');
        const origText = btn.innerText;
        btn.innerText = "SECURING...";
        btn.disabled = true;

        const formData = new FormData(this);
        formData.append('retainer_quote', document.getElementById('outRetainer').innerText);
        formData.append('cleanup_quote', document.getElementById('outCleanup').innerText);
        formData.append('is_seasonal', document.getElementById('seasonalToggle').checked ? "YES" : "NO");

        // Convert to URLSearchParams for robust Zapier POST
        const data = new URLSearchParams(formData);

        fetch(WEBHOOK_URL, {
            method: 'POST',
            body: data,
            mode: 'no-cors'
        }).then(() => {
            alert("Rate Locked. Protocol initiated.");
            btn.innerText = "LOCKED";
            window.location.href = "/";
        }).catch(err => {
            alert("Connection Error. Please try again.");
            btn.innerText = origText;
            btn.disabled = false;
        });
    };
</script>

</body>
</html>
