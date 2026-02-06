<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkept | Investment Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            /* [SECTION] CORE PALETTE */
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-void: #1A1A1A;
            --bk-surface: #F9FAFB;
            --bk-border: #E2E8F0;
            --bk-font: 'Inter', sans-serif;
        }

        * { box-sizing: border-box; }

        body {
            font-family: var(--bk-font);
            background: var(--bk-surface);
            color: var(--bk-dark);
            margin: 0; padding: 0;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        /* [SECTION] GLOBAL NAVIGATION */
        .site-header {
            background: #FFFFFF;
            width: 100%;
            border-bottom: 2px solid;
            border-image: var(--bk-gradient) 1;
            padding: 20px 0;
            margin-bottom: 60px;
        }

        .nav-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* [SECTION] IDENTITY PROTOCOL: Calibrated to Bkept.co */
        .bk-logo {
            font-family: 'Inter', sans-serif;
            font-size: 24px; 
            font-weight: 900; /* ExtraBlack for authority */
            letter-spacing: -1.2px; /* Tight tracking for modern feel */
            text-transform: lowercase;
            text-decoration: none;
            background: var(--bk-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
            display: inline-block;
        }

        .nav-link {
            font-size: 11px; font-weight: 700; text-transform: uppercase;
            letter-spacing: 1px; color: #636E72; text-decoration: none;
            transition: 0.3s;
        }
        .nav-link:hover { color: var(--bk-gold-solid); }

        /* [SECTION] CALCULATOR LAYOUT */
        .page-wrapper {
            display: flex; justify-content: center; padding: 0 20px 80px 20px;
        }

        .calc-card {
            background: #FFFFFF;
            width: 100%; max-width: 1100px;
            border-radius: 4px;
            box-shadow: 0 40px 80px -15px rgba(0,0,0,0.1);
            overflow: hidden;
            border: 1px solid var(--bk-border);
            display: grid;
            grid-template-columns: 1fr 400px;
        }

        /* INPUT PANEL */
        .config-panel { padding: 50px; border-right: 1px solid var(--bk-border); }

        .pill-tag {
            font-size: 9px; border: 1px solid var(--bk-gold-solid); color: var(--bk-gold-solid);
            padding: 4px 10px; border-radius: 100px; text-transform: uppercase; 
            font-weight: 800; margin-bottom: 20px; display: inline-block; letter-spacing: 0.5px;
        }

        .input-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin-bottom: 40px; }
        .input-group { margin-bottom: 0; }
        
        label { display: block; font-size: 10px; font-weight: 800; text-transform: uppercase; color: #636E72; margin-bottom: 8px; letter-spacing: 1px; }
        
        input, select {
            width: 100%; padding: 15px; font-size: 15px; font-weight: 600;
            border: 1px solid var(--bk-border); border-radius: 4px;
            background: white; font-family: 'Inter', sans-serif; color: var(--bk-dark);
            appearance: none; -webkit-appearance: none;
        }
        input:focus, select:focus { outline: none; border-color: var(--bk-gold-solid); box-shadow: 0 0 0 4px rgba(197, 160, 89, 0.1); }

        /* OUTPUT PANEL */
        .summary-panel { 
            padding: 50px; background: #FAFAFA; 
            display: flex; flex-direction: column; gap: 40px; 
        }

        .result-block { border-left: 3px solid var(--bk-gold-solid); padding-left: 25px; }
        .result-label { font-size: 11px; font-weight: 800; color: #B2BEC3; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; display: block; }
        .result-main { 
            font-size: 48px; font-weight: 800; line-height: 1; margin-bottom: 5px;
            background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; 
            letter-spacing: -1px;
        }
        .result-sub { font-size: 13px; font-weight: 600; color: var(--bk-dark); }

        hr { border: 0; border-top: 1px solid #E2E8F0; margin: 0; }

        /* LOCK FORM */
        .lock-form { margin-top: auto; }
        .lock-input {
            width: 100%; padding: 15px; margin-bottom: 15px; background: #fff; 
            border: 1px solid #ccc; color: var(--bk-dark); font-family: 'Inter', sans-serif; font-size: 14px;
        }
        .btn-lock {
            width: 100%; padding: 20px; background: var(--bk-gradient); 
            border: none; color: var(--bk-void); font-weight: 800; 
            text-transform: uppercase; letter-spacing: 2px; cursor: pointer; 
            transition: transform 0.2s;
        }
        .btn-lock:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(197, 160, 89, 0.2); }
        .btn-lock:disabled { opacity: 0.7; cursor: not-allowed; }

        @media (max-width: 900px) {
            .calc-card { grid-template-columns: 1fr; }
            .config-panel { border-right: none; }
            .input-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="site-header">
        <div class="nav-container">
            <a href="https://bkept.co" class="bk-logo">bkept.</a>
            <a href="/" class="nav-link">← Return to Home</a>
        </div>
    </header>

    <div class="page-wrapper">
        <div class="calc-card">
            
            <div class="config-panel">
                <h1 style="font-size: 28px; font-weight: 800; margin-bottom: 40px; letter-spacing: -1px; text-transform: uppercase;">Investment Architecture</h1>
                
                <div class="pill-tag">Data Load & Structure</div>
                <div class="input-grid">
                    <div class="input-group">
                        <label>Avg Monthly Transactions</label>
                        <input type="number" id="txn" value="75" oninput="calculate()">
                    </div>
                    <div class="input-group">
                        <label>Total Data Feeds (Accounts)</label>
                        <input type="number" id="accts" value="3" oninput="calculate()">
                    </div>
                </div>

                <div class="pill-tag">Phase A: The Fix (Cleanup)</div>
                <div class="input-grid">
                    <div class="input-group">
                        <label>Cleanup Cut-off (From Jan)</label>
                        <select id="cleanupMonth" onchange="calculate()">
                            <option value="0">Up to Date</option>
                            <option value="1">1 Month Behind</option>
                            <option value="2">2 Months Behind</option>
                            <option value="3">3 Months Behind</option>
                            <option value="6">6 Months Behind</option>
                            <option value="12">12+ Months Behind</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>Chaos Multiplier</label>
                        <select id="chaos" onchange="calculate()">
                            <option value="1">Standard (CSV/API Available)</option>
                            <option value="1.5">Messy (Mixed Funds)</option>
                            <option value="2.5">Severe (Shoebox/Paper)</option>
                        </select>
                    </div>
                </div>

                <div class="pill-tag">Phase B: The Flow (Retainer)</div>
                <div class="input-grid">
                    <div class="input-group" style="grid-column: span 2;">
                        <label>Operational Friction (AP/AR)</label>
                        <select id="ops" onchange="calculate()">
                            <option value="0">None (Client Managed)</option>
                            <option value="350">Light (Up to 20 items/mo)</option>
                            <option value="750">Standard (Up to 50 items/mo)</option>
                            <option value="1500">Premium (Up to 100 items/mo)</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="summary-panel">
                
                <div class="result-block">
                    <span class="result-label">The Concierge (Cleanup)</span>
                    <div class="result-main" id="outCleanup">$500</div>
                    <div class="result-sub" id="cleanupMeta">Project-based Intervention</div>
                </div>

                <hr>

                <div class="result-block">
                    <span class="result-label">The Kept (Monthly)</span>
                    <div class="result-main" id="outRetainer">$650</div>
                    <div class="result-sub" id="retainerMeta">Ongoing Financial Architecture</div>
                </div>

                <form class="lock-form" id="lockForm">
                    <div style="margin-bottom: 15px; font-size: 10px; font-weight: 700; text-transform: uppercase; color: #636E72;">Secure this Architecture</div>
                    <input type="text" name="lead_name" class="lock-input" placeholder="FULL NAME" required>
                    <input type="email" name="lead_email" class="lock-input" placeholder="WORK EMAIL" required>
                    <button type="submit" class="btn-lock">Lock in Rate</button>
                </form>
                
            </div>
        </div>
    </div>

<script>
    // ZAPIER WEBHOOK ENDPOINT
    const WEBHOOK_URL = "https://hooks.zapier.com/hooks/catch/26262080/ulvega2/";

    function calculate() {
        // 1. Get Values
        const txn = parseInt(document.getElementById('txn').value) || 0;
        const accts = parseInt(document.getElementById('accts').value) || 0;
        const cleanupMonth = parseInt(document.getElementById('cleanupMonth').value);
        const chaos = parseFloat(document.getElementById('chaos').value);
        const opsPrice = parseInt(document.getElementById('ops').value);

        // --- RETAINER CALCULATION ---
        const baseRetainer = 650;
        let volRetainer = 0;
        let acctRetainer = 0;
        let isCustom = false;

        // Logic: Volume Tiers
        if (txn > 500) isCustom = true;
        else if (txn > 250) volRetainer = 500;
        else if (txn > 100) volRetainer = 250;

        // Logic: Account Tiers
        if (accts > 3) acctRetainer = (accts - 3) * 50;

        const totalRetainer = baseRetainer + volRetainer + acctRetainer + opsPrice;

        // --- CLEANUP CALCULATION ---
        const baseSetup = 500;
        
        // Catchup Rate is 50% of the calculated Retainer (without ops friction)
        const coreRetainer = baseRetainer + volRetainer + acctRetainer;
        const catchupRate = (coreRetainer * 0.5) * cleanupMonth;
        
        // Complexity Surcharge (Accounts > 3)
        const complexitySurcharge = (accts > 3 ? (accts - 3) * 100 : 0);
        
        // Chaos Multiplier applies to the variable components
        const totalCleanup = baseSetup + ((catchupRate + complexitySurcharge) * chaos);

        // Render UI
        const cleanupEl = document.getElementById('outCleanup');
        
        if (isCustom) {
            cleanupEl.innerText = "Custom";
            document.getElementById('cleanupMeta').innerText = "Requires Audit";
        } else {
            cleanupEl.innerText = "$" + Math.round(totalCleanup).toLocaleString();
            if (cleanupMonth === 0) {
                document.getElementById('cleanupMeta').innerText = "One-Time Tech Setup Fee";
            } else {
                document.getElementById('cleanupMeta').innerText = cleanupMonth + " Months Catch-up @ " + chaos + "x Chaos";
            }
        }

        const retainerEl = document.getElementById('outRetainer');
        if (isCustom) {
            retainerEl.innerText = "Custom";
            document.getElementById('retainerMeta').innerText = "Volume exceeds automated tiering.";
        } else {
            retainerEl.innerText = "$" + totalRetainer.toLocaleString();
            document.getElementById('retainerMeta').innerText = "Includes Tech Stack & Truth Memo";
        }
    }

    // Run initial calculation
    calculate();

    // 2. Submit Handler
    document.getElementById('lockForm').onsubmit = function(e) {
        e.preventDefault();
        const btn = this.querySelector('button');
        const origText = btn.innerText;
        btn.innerText = "SECURING...";
        btn.disabled = true;

        const formData = new FormData(this);
        // Append calculated values to the form data
        formData.append('retainer_quote', document.getElementById('outRetainer').innerText);
        formData.append('cleanup_quote', document.getElementById('outCleanup').innerText);
        // Grab config context
        formData.append('config_txn', document.getElementById('txn').value);
        formData.append('config_cleanup', document.getElementById('cleanupMeta').innerText);

        // Convert to URLSearchParams for robust Zapier POST
        const data = new URLSearchParams(formData);

        fetch(WEBHOOK_URL, {
            method: 'POST',
            body: data,
            mode: 'no-cors'
        }).then(() => {
            alert("Rate Locked. Check your email for The Proposal.");
            btn.innerText = "LOCKED";
            // Optional: Redirect to success page or clear form
        }).catch(err => {
            alert("Connection Error. Please try again.");
            btn.innerText = origText;
            btn.disabled = false;
        });
    };
</script>

</body>
</html>
