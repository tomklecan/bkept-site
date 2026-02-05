<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkept | Investment Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* [SECTION] BRAND PROTOCOLS */
        :root {
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-void: #1A1A1A;
            --bk-surface: #FFFFFF;
            --bk-border: #E2E8F0;
            --bk-font: 'Inter', sans-serif;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { 
            font-family: var(--bk-font); 
            color: var(--bk-dark); 
            background: #F0F2F5; 
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        /* CARD CONTAINER */
        .pricing-card {
            background: #FFFFFF;
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 40px 80px -20px rgba(0,0,0,0.15);
            border: 1px solid var(--bk-border);
            overflow: hidden;
        }

        /* HEADER */
        .card-header {
            background: var(--bk-void);
            padding: 40px;
            text-align: center;
            border-bottom: 4px solid var(--bk-gold-solid);
        }
        .bk-logo {
            font-size: 24px; font-weight: 800; letter-spacing: -1px;
            background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            margin-bottom: 10px; display: inline-block; text-transform: lowercase;
        }
        .card-header h1 { font-size: 14px; color: #BDC3C7; text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin: 0; }

        /* CONFIGURATION BODY */
        .card-body { padding: 40px; }

        /* TOGGLE SWITCH */
        .toggle-container {
            display: flex; justify-content: center; align-items: center; gap: 15px;
            margin-bottom: 30px; padding-bottom: 30px; border-bottom: 1px solid var(--bk-border);
        }
        .mode-label { font-size: 12px; font-weight: 800; text-transform: uppercase; color: #BDC3C7; transition: 0.3s; }
        .mode-label.active { color: var(--bk-dark); }
        
        .switch { position: relative; display: inline-block; width: 48px; height: 24px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #E2E8F0; transition: .4s; border-radius: 34px; }
        .slider:before { position: absolute; content: ""; height: 16px; width: 16px; left: 4px; bottom: 4px; background-color: white; transition: .4s; border-radius: 50%; box-shadow: 0 2px 4px rgba(0,0,0,0.2); }
        input:checked + .slider { background-color: var(--bk-gold-solid); }
        input:checked + .slider:before { transform: translateX(24px); }

        /* INPUT GROUPS */
        .input-group { margin-bottom: 25px; }
        .label-row { display: block; margin-bottom: 8px; font-size: 11px; font-weight: 700; text-transform: uppercase; color: #636E72; }

        .bk-input {
            width: 100%; padding: 14px; font-family: 'Inter', sans-serif; font-size: 15px; font-weight: 600;
            border: 1px solid var(--bk-border); border-radius: 4px; outline: none; transition: 0.3s;
            color: var(--bk-dark);
        }
        .bk-input:focus { border-color: var(--bk-gold-solid); box-shadow: 0 0 0 3px rgba(197, 160, 89, 0.1); }
        /* Remove arrows from number inputs */
        input::-webkit-outer-spin-button, input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }

        /* OUTPUT DISPLAY */
        .output-section {
            background: #F9FAFB;
            border-radius: 4px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid var(--bk-border);
        }
        .result-row { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 15px; }
        .result-row:last-child { margin-bottom: 0; padding-top: 15px; border-top: 1px dashed #D1D5DB; }
        
        .res-label { font-size: 11px; font-weight: 700; text-transform: uppercase; color: #636E72; }
        .res-value { font-size: 24px; font-weight: 800; color: var(--bk-dark); line-height: 1; }
        .res-sub { font-size: 10px; color: #A0AEC0; font-weight: 500; text-align: right; margin-top: 4px; }

        /* LOCK FORM */
        .lock-form { margin-top: 20px; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px; }
        
        .lock-input {
            width: 100%; padding: 12px; font-family: 'Inter', sans-serif; font-size: 13px;
            border: 1px solid var(--bk-border); border-radius: 4px; outline: none;
        }
        .lock-input:focus { border-color: var(--bk-gold-solid); }

        .btn-lock {
            width: 100%; background: var(--bk-void); color: white; border: none; padding: 18px;
            font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;
            cursor: pointer; border-radius: 4px; transition: 0.3s;
        }
        .btn-lock:hover { background: var(--bk-gold-solid); transform: translateY(-2px); }

    </style>
</head>
<body>

<div class="pricing-card">
    <div class="card-header">
        <span class="bk-logo">bkept.</span>
        <h1>Pricing Architecture</h1>
    </div>

    <div class="card-body">
        
        <div class="toggle-container">
            <span class="mode-label active" id="lblStandard">Standard</span>
            <label class="switch">
                <input type="checkbox" id="seasonalToggle" onchange="calculate()">
                <span class="slider"></span>
            </label>
            <span class="mode-label" id="lblSeasonal">Seasonal (LBI)</span>
        </div>

        <div class="input-group">
            <label class="label-row">Monthly Transactions</label>
            <input type="number" id="txnInput" class="bk-input" value="75" min="0" placeholder="e.g. 75" oninput="calculate()">
        </div>

        <div class="input-group">
            <label class="label-row">Number of Bank/CC Accounts</label>
            <input type="number" id="acctInput" class="bk-input" value="1" min="1" placeholder="e.g. 1" oninput="calculate()">
        </div>

        <div class="input-group">
            <label class="label-row">Months Behind (Cleanup)</label>
            <input type="number" id="monthInput" class="bk-input" value="0" min="0" placeholder="e.g. 0" oninput="calculate()">
        </div>

        <div class="output-section">
            <div class="result-row">
                <div>
                    <div class="res-label">Monthly Retainer</div>
                    <div class="res-sub">Ongoing Management</div>
                </div>
                <div class="res-value" id="outRetainer">$650</div>
            </div>
            
            <div class="result-row">
                <div>
                    <div class="res-label">One-Time Cleanup</div>
                    <div class="res-sub">Historical Architecture</div>
                </div>
                <div class="res-value" id="outCleanup">$500</div>
            </div>
        </div>

        <form class="lock-form" id="lockForm">
            <div class="form-grid">
                <input type="text" name="name" class="lock-input" placeholder="Full Name" required>
                <input type="email" name="email" class="lock-input" placeholder="Email Address" required>
            </div>
            <button type="submit" class="btn-lock">Lock in Rate</button>
        </form>

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

        // 2. Toggle Styling
        const lblStandard = document.getElementById('lblStandard');
        const lblSeasonal = document.getElementById('lblSeasonal');
        
        if(isSeasonal) {
            lblStandard.classList.remove('active');
            lblSeasonal.classList.add('active');
        } else {
            lblStandard.classList.add('active');
            lblSeasonal.classList.remove('active');
        }

        // 3. Logic Engine
        [cite_start]// Base Price Toggle: $650 vs $450 [cite: 301, 310]
        let base = isSeasonal ? 450 : 650;
        
        [cite_start]// Volume Tiers [cite: 304, 305]
        let volCharge = 0;
        if (txn > 100 && txn <= 250) volCharge = 250;
        if (txn > 250 && txn <= 500) volCharge = 500;
        
        [cite_start]// Account Tiers [cite: 307, 308]
        let acctCharge = 0;
        if (accts > 3) acctCharge = (accts - 3) * 50;

        // Totals
        const monthlyTotal = base + volCharge + acctCharge;
        
        // Cleanup: $500 Setup + (50% of Monthly * Months Behind)
        const cleanupTotal = 500 + (monthlyTotal * 0.5 * months);

        // 4. Render
        const retainerEl = document.getElementById('outRetainer');
        const cleanupEl = document.getElementById('outCleanup');

        if (txn > 500) {
            retainerEl.innerText = "Custom";
            cleanupEl.innerText = "Custom";
        } else {
            retainerEl.innerText = "$" + monthlyTotal.toLocaleString();
            cleanupEl.innerText = "$" + cleanupTotal.toLocaleString();
        }
    }

    // Initialize
    calculate();

    // 5. Submit Handler
    document.getElementById('lockForm').onsubmit = function(e) {
        e.preventDefault();
        const btn = this.querySelector('button');
        const origText = btn.innerText;
        btn.innerText = "Securing...";
        btn.disabled = true;

        const formData = new FormData(this);
        
        // Add calculated values to the payload
        formData.append('retainer_quote', document.getElementById('outRetainer').innerText);
        formData.append('cleanup_quote', document.getElementById('outCleanup').innerText);
        formData.append('seasonal_mode', document.getElementById('seasonalToggle').checked ? "Yes" : "No");

        // Convert to URL params for robust Zapier catching
        const data = new URLSearchParams(formData);

        fetch(WEBHOOK_URL, {
            method: 'POST',
            body: data,
            mode: 'no-cors'
        }).then(() => {
            alert("Rate Locked. We've sent a confirmation to your inbox.");
            btn.innerText = "Locked";
            window.location.href = "/"; 
        }).catch(err => {
            alert("Connection error. Please try again.");
            btn.innerText = origText;
            btn.disabled = false;
        });
    };
</script>

</body>
</html>
