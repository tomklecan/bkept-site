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

        /* [SECTION] GLOBAL NAVIGATION (HOMEPAGE MATCH) */
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

        /* BRAND LOGO: Precise Styling to match Homepage */
        .bk-logo {
            font-family: 'Inter', sans-serif;
            font-size: 26px; /* Authority sizing */
            font-weight: 900; /* 'Black' weight is key */
            letter-spacing: -1.5px; /* Tight tracking for the 'logo' feel */
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
            appearance: none; /* Clean UI for dropdowns */
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%232D3436%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
            background-repeat: no-repeat;
            background-position: right 15px top 50%;
            background-size: 10px auto;
        }
        input { background-image: none; } /* Remove arrow from text inputs */

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
            letter-spacing: -2px;
        }
        .result-sub { font-size: 13px; font-weight: 600; color: var(--bk-dark); }

        .memo-box {
            background: var(--bk-void); color: #BDC3C7; padding: 25px;
            font-size: 12px; border-radius: 4px; line-height: 1.6; margin-top: auto;
        }

        hr { border: 0; border-top: 1px solid #E2E8F0; margin: 0; }

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
                            <option value="0">Up to Date (No Cleanup)</option>
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
                    <div class="result-main" id="outCleanup">$0</div>
                    <div class="result-sub" id="cleanupMeta">Project-based Intervention</div>
                </div>

                <hr>

                <div class="result-block">
                    <span class="result-label">The Kept (Monthly)</span>
                    <div class="result-main" id="outRetainer">$650</div>
                    <div class="result-sub" id="retainerMeta">Ongoing Financial Architecture</div>
                </div>

                <div class="memo-box">
                    <strong style="color: white; text-transform: uppercase;">Executive Summary:</strong><br><br>
                    All fees are fixed and value-based. Cleanup covers historical integrity. Retainer covers full-spectrum management and "The Truth Memo" monthly reporting.
                </div>
                
            </div>
        </div>
    </div>

<script>
    function calculate() {
        // Inputs
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

        // Logic Engine: Volume Tiers
        if (txn > 500) isCustom = true;
        else if (txn > 250) volRetainer = 500;
        else if (txn > 100) volRetainer = 250;

        // Logic Engine: Account Tiers
        if (accts > 3) acctRetainer = (accts - 3) * 50;

        const totalRetainer = baseRetainer + volRetainer + acctRetainer + opsPrice;

        // --- CLEANUP CALCULATION ---
        // Formula: Base Setup + (50% of Monthly Rate * Months Behind)
        // Chaos Multiplier applies to the complexity portion, not the base setup
        const baseSetup = 500;
        const monthlyCatchupBase = (baseRetainer + volRetainer + acctRetainer) * 0.5; // 50% of monthly rate
        const catchupTotal = monthlyCatchupBase * cleanupMonth;
        
        let totalCleanup = (baseSetup + catchupTotal) * chaos;

        if(cleanupMonth === 0) totalCleanup = 500; // Minimum setup fee if up to date

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
                document.getElementById('cleanupMeta').innerText = cleanupMonth + " Months Catch-up @ " + chaos + "x Complexity";
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

    calculate();
</script>

</body>
</html>
