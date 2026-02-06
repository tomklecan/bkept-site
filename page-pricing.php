<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkept | Investment Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* [SECTION] BKEPT IDENTITY PROTOCOL */
        :root {
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

        /* [SECTION] GLOBAL NAVIGATION - SYNCED TO HOMEPAGE */
        .site-header {
            background: var(--bk-white);
            width: 100%;
            border-bottom: 2px solid;
            border-image: var(--bk-gradient) 1;
            padding: 15px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bk-logo {
            font-family: 'Inter', sans-serif !important;
            font-size: 24px !important;
            font-weight: 900 !important;
            letter-spacing: -1.2px !important;
            text-decoration: none !important;
            background: var(--bk-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: lowercase;
            line-height: 1;
        }

        .nav-link {
            font-size: 11px;
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

        .config-panel {
            background: var(--bk-white);
            border: 1px solid var(--bk-border);
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

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

        .investment-panel {
            background: var(--bk-void);
            color: white;
            padding: 40px;
            border-radius: 4px;
            position: sticky; top: 40px;
        }

        .price-display { 
            font-size: 48px; font-weight: 800; letter-spacing: -2px; line-height: 1; 
            background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }

        .btn-lock {
            width: 100%; padding: 20px; background: var(--bk-gradient); 
            border: none; color: var(--bk-void); font-weight: 800; 
            text-transform: uppercase; letter-spacing: 2px; cursor: pointer; 
            transition: transform 0.2s;
        }
        .btn-lock:hover { transform: translateY(-2px); }

        @media(max-width: 900px) {
            .dashboard-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="site-header">
        <div class="nav-container">
            <a href="https://bkept.co" class="bk-logo">bkept.</a>
            <a href="https://bkept.co" class="nav-link">← Return Home</a>
        </div>
    </header>

    <div class="page-container">
        <div class="header-section">
            <span class="hero-tag">Transparent Pricing Logic</span>
            <h1>Scalable Investment</h1>
            <p class="sub-text">Whether your business operates year-round or seasonally, the pricing is kept simple. Use the dashboard below to estimate your monthly investment.</p>
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
                    <input type="number" id="txnInput" class="bk-input" value="75" oninput="calculate()">
                </div>

                <div class="input-block">
                    <label class="input-label">Data Feeds (Bank/CC Accounts)</label>
                    <input type="number" id="acctInput" class="bk-input" value="1" oninput="calculate()">
                </div>

                <div class="input-block">
                    <label class="input-label">Historical Catch-Up (Months Behind)</label>
                    <input type="number" id="monthInput" class="bk-input" value="0" oninput="calculate()">
                </div>
            </div>

            <div class="investment-panel">
                <div style="margin-bottom: 30px; border-bottom: 1px solid #333; padding-bottom: 30px;">
                    <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; color: var(--bk-gold-solid);">The Kept Retainer</span>
                    <div class="price-display" id="outRetainer">$650</div>
                </div>
                <div style="margin-bottom: 30px;">
                    <span style="font-size: 10px; font-weight: 700; text-transform: uppercase; color: var(--bk-gold-solid);">The Concierge</span>
                    <div class="price-display" id="outCleanup">$500</div>
                </div>
                <button class="btn-lock">Lock in Rate</button>
            </div>
        </div>
    </div>

    <script>
        function calculate() {
            const txn = parseInt(document.getElementById('txnInput').value) || 0;
            const accts = parseInt(document.getElementById('acctInput').value) || 1;
            const months = parseInt(document.getElementById('monthInput').value) || 0;
            const isSeasonal = document.getElementById('seasonalToggle').checked;

            let base = isSeasonal ? 450 : 650;
            let volCharge = txn > 250 ? 500 : (txn > 100 ? 250 : 0);
            let acctCharge = accts > 3 ? (accts - 3) * 50 : 0;

            const monthlyTotal = base + volCharge + acctCharge;
            const cleanupTotal = 500 + (monthlyTotal * 0.5 * months);

            document.getElementById('outRetainer').innerText = txn > 500 ? "Custom" : "$" + monthlyTotal.toLocaleString();
            document.getElementById('outCleanup').innerText = txn > 500 ? "Custom" : "$" + cleanupTotal.toLocaleString();
        }
        calculate();
    </script>
</body>
</html>
