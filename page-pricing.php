<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing | Bkept Financial Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* [SECTION] BKEPT GLOBAL STYLES IMPORT */
        :root {
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-void: #1A1A1A;
            --bk-surface: #FFFFFF;
            --bk-font: 'Inter', sans-serif;
            --bk-border: #E2E8F0;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: var(--bk-font); color: var(--bk-dark); background: #F9FAFB; line-height: 1.6; }
        
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        
        /* HEADER */
        header { background: #fff; padding: 20px 0; border-bottom: 2px solid; border-image: var(--bk-gradient) 1; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; text-decoration: none; color: var(--bk-dark); }
        .back-link { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; text-decoration: none; font-weight: 700; }

        /* HERO */
        .page-hero { text-align: center; padding: 80px 0 60px 0; }
        h1 { font-size: 3rem; margin-bottom: 20px; letter-spacing: -2px; font-weight: 800; text-transform: uppercase; color: var(--bk-void); }
        .gold-text { background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

        /* CALCULATOR MODULE */
        .calc-wrapper { background: #fff; border: 1px solid var(--bk-border); padding: 50px; box-shadow: 0 30px 60px rgba(0,0,0,0.08); margin-bottom: 60px; max-width: 800px; margin: 0 auto 60px auto; border-top: 4px solid var(--bk-gold-solid); position: relative; }
        
        /* SEASONAL TOGGLE SWITCH */
        .toggle-row { display: flex; justify-content: center; align-items: center; gap: 15px; margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid var(--bk-border); }
        .toggle-label { font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; color: #BDC3C7; transition: 0.3s; }
        .toggle-label.active { color: var(--bk-dark); }
        
        .switch { position: relative; display: inline-block; width: 50px; height: 26px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #E2E8F0; transition: .4s; border-radius: 34px; }
        .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 4px; bottom: 4px; background-color: white; transition: .4s; border-radius: 50%; box-shadow: 0 2px 4px rgba(0,0,0,0.2); }
        input:checked + .slider { background-color: var(--bk-gold-solid); }
        input:checked + .slider:before { transform: translateX(24px); }

        /* SLIDERS */
        .slider-group { margin-bottom: 40px; }
        .slider-label { display: flex; justify-content: space-between; margin-bottom: 15px; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; }
        
        input[type=range] { -webkit-appearance: none; width: 100%; background: transparent; }
        input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; height: 24px; width: 24px; border-radius: 50%; background: var(--bk-gold-solid); cursor: pointer; margin-top: -10px; box-shadow: 0 0 0 4px #fff, 0 0 0 5px var(--bk-gold-solid); transition: transform 0.2s; }
        input[type=range]::-webkit-slider-thumb:hover { transform: scale(1.1); }
        input[type=range]::-webkit-slider-runnable-track { width: 100%; height: 4px; background: #e1e1e1; border-radius: 2px; }
        
        /* OUTPUT BOARD */
        .output-board { background: var(--bk-void); color: #fff; padding: 40px; border-radius: 4px; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px; }
        .out-col { text-align: center; position: relative; }
        .out-col:first-child { border-right: 1px solid #333; }
        .out-label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: #BDC3C7; margin-bottom: 10px; display: block; }
        .out-price { font-size: 2.8rem; font-weight: 800; color: #fff; display: block; letter-spacing: -1px; line-height: 1; }
        .out-meta { font-size: 0.8rem; color: #BDC3C7; margin-top: 8px; display: block; font-style: italic; }

        /* [SECTION] SEASONAL BLURB BOX (ALWAYS ON) */
        .seasonal-context { 
            background: #FFFBF2; 
            border-left: 4px solid var(--bk-gold-solid); 
            padding: 30px; 
            margin-bottom: 40px; 
            display: block;
        }

        .seasonal-tag { 
            display: inline-block; font-size: 0.65rem; border: 1px solid var(--bk-gold-solid); color: var(--bk-gold-solid); 
            padding: 2px 8px; border-radius: 100px; text-transform: uppercase; font-weight: 800; margin-bottom: 15px; 
        }
        .seasonal-context h3 { font-size: 1.1rem; font-weight: 800; text-transform: uppercase; margin-bottom: 10px; color: var(--bk-dark); letter-spacing: -0.5px; }
        .seasonal-context p { font-size: 0.9rem; color: #4A5568; margin: 0; line-height: 1.5; }

        /* CONTACT CAPTURE SECTION */
        .contact-capture { background: #F9FAFB; padding: 30px; border: 1px solid var(--bk-border); border-radius: 4px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
        .form-input { width: 100%; padding: 15px; border: 1px solid var(--bk-border); background: #fff; font-family: 'Inter', sans-serif; font-size: 0.9rem; color: var(--bk-dark); outline: none; transition: 0.3s; }
        .form-input:focus { border-color: var(--bk-gold-solid); box-shadow: 0 0 0 3px rgba(197, 160, 89, 0.1); }
        
        .btn-submit { background: var(--bk-gradient); color: #1A1A1A; border: none; padding: 20px 40px; font-weight: 800; text-transform: uppercase; cursor: pointer; width: 100%; letter-spacing: 2px; display: block; text-align: center; text-decoration: none; transition: 0.3s; }
        .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(197, 160, 89, 0.2); }

        /* FOOTER SIMULATION */
        .simple-footer { text-align: center; padding: 60px 20px; font-size: 0.75rem; color: #636E72; background: #1A1A1A; text-transform: uppercase; letter-spacing: 1px; }

        @media(max-width: 768px) {
            .output-board { grid-template-columns: 1fr; gap: 30px; }
            .out-col:first-child { border-right: none; border-bottom: 1px solid #333; padding-bottom: 30px; }
            .form-row { grid-template-columns: 1fr; }
            h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container nav-flex">
            <a href="/" class="logo">bkept.</a>
            <a href="/" class="back-link">← Return to OS</a>
        </div>
    </header>

    <div class="container">
        <div class="page-hero">
            <h1>Transparent <span class="gold-text">Architecture.</span></h1>
            <p style="color: #636E72; max-width: 600px; margin: 0 auto; font-weight: 500;">Estimate your investment. We do not hide behind "Call for Quote" buttons unless complexity demands it.</p>
        </div>

        <form id="pricingForm" class="calc-wrapper">
            
            <div class="toggle-row">
                <span class="toggle-label active" id="lblStandard">Standard Business</span>
                <label class="switch">
                    <input type="checkbox" id="seasonalToggle" onchange="calculate()">
                    <span class="slider"></span>
                </label>
                <span class="toggle-label" id="lblSeasonal">Seasonal (LBI)</span>
            </div>

            <div class="slider-group">
                <div class="slider-label">
                    <span>Monthly Transaction Volume</span>
                    <span id="labelTxn">0 - 100</span>
                </div>
                <input type="range" name="volume" id="rangeTxn" min="0" max="600" step="50" value="100" oninput="calculate()">
                <div style="display:flex; justify-content:space-between; font-size:0.7rem; color:#b2bec3; margin-top:10px; text-transform: uppercase; letter-spacing: 1px; font-weight: 700;">
                    <span>Low Vol</span>
                    <span>High Vol</span>
                </div>
            </div>

            <div class="slider-group">
                <div class="slider-label">
                    <span>Number of Bank/CC Accounts</span>
                    <span id="labelAccts">1</span>
                </div>
                <input type="range" name="accounts" id="rangeAccts" min="1" max="10" step="1" value="1" oninput="calculate()">
            </div>

            <div class="slider-group">
                <div class="slider-label">
                    <span>Months Behind (Cleanup)</span>
                    <span id="labelMonths">0 Months</span>
                </div>
                <input type="range" name="months_behind" id="rangeMonths" min="0" max="12" step="1" value="0" oninput="calculate()">
            </div>

            <div class="output-board">
                <div class="out-col">
                    <span class="out-label">Monthly Retainer</span>
                    <span class="out-price" id="outRetainer">$650</span>
                    <span class="out-meta">The "Kept" Standard</span>
                </div>
                <div class="out-col">
                    <span class="out-label">One-Time Cleanup</span>
                    <span class="out-price" id="outCleanup">$500</span>
                    <span class="out-meta" id="cleanupMeta">Setup Fee Only</span>
                </div>
            </div>

            <div class="seasonal-context" id="seasonalBlurb">
                <span class="seasonal-tag">Strategic Advantage</span>
                <h3>The Off-Season Myth</h3>
                <p>Just because revenue pauses doesn't mean operations stop. The off-season is the only time to re-organize, architect the new season, and put business changes into motion without the noise of daily operations. We keep you ready for Opening Day.</p>
            </div>

            <input type="hidden" name="estimated_retainer" id="hiddenRetainer" value="$650">
            <input type="hidden" name="estimated_cleanup" id="hiddenCleanup" value="$500">
            <input type="hidden" name="is_seasonal" id="hiddenSeasonal" value="false">

            <div class="contact-capture">
                <div style="text-align:center; margin-bottom:20px; font-weight:700; color:#636E72; font-size:0.8rem; text-transform:uppercase; letter-spacing:1px;">Secure This Architecture</div>
                
                <div class="form-row">
                    <input type="text" name="lead_name" class="form-input" placeholder="Your Full Name" required>
                    <input type="email" name="lead_email" class="form-input" placeholder="Work Email Address" required>
                </div>
                
                <button type="submit" class="btn-submit">Lock in Rate</button>
            </div>

        </form>
    </div>

    <footer class="simple-footer">
        &copy; 2026 Bkept Financial Architecture. <br>Calculations are estimates. Final pricing subject to detailed audit.
    </footer>

    <script>
        // ZAPIER PRICING HOOK
        // Logic Source: SOP - Client Acquisition Lifecycle
        const PRICING_WEBHOOK = 'https://hooks.zapier.com/hooks/catch/26262080/ulvega2/';

        function calculate() {
            // INPUTS
            const txn = parseInt(document.getElementById('rangeTxn').value);
            const accts = parseInt(document.getElementById('rangeAccts').value);
            const months = parseInt(document.getElementById('rangeMonths').value);
            const isSeasonal = document.getElementById('seasonalToggle').checked;

            // LOGIC - BASE RATE SWITCH
            // Standard: $650 | Seasonal: $450
            let baseRate = isSeasonal ? 450 : 650;
            
            // Volume Surcharge
            if (txn > 100 && txn <= 250) baseRate += 250;
            if (txn > 250 && txn <= 500) baseRate += 500;
            
            // Account Surcharge (First 3 free)
            let acctSurcharge = 0;
            if (accts > 3) acctSurcharge = (accts - 3) * 50;

            const monthlyTotal = baseRate + acctSurcharge;

            // Cleanup Logic
            const setupFee = 500;
            const cleanupRate = (monthlyTotal * 0.5) * months;
            const totalCleanup = setupFee + cleanupRate;

            // UI UPDATES
            document.getElementById('labelTxn').innerText = txn >= 600 ? "500+ (Custom)" : txn;
            document.getElementById('labelAccts').innerText = accts;
            document.getElementById('labelMonths').innerText = months + " Months";

            // Toggle Visuals (Labels Only)
            const lblStandard = document.getElementById('lblStandard');
            const lblSeasonal = document.getElementById('lblSeasonal');

            if (isSeasonal) {
                lblStandard.classList.remove('active');
                lblSeasonal.classList.add('active');
                document.getElementById('hiddenSeasonal').value = "true";
            } else {
                lblStandard.classList.add('active');
                lblSeasonal.classList.remove('active');
                document.getElementById('hiddenSeasonal').value = "false";
            }

            let retainerDisplay, cleanupDisplay;

            // Prices
            if (txn >= 600) {
                retainerDisplay = "Custom";
                cleanupDisplay = "Custom";
            } else {
                retainerDisplay = "$" + monthlyTotal.toLocaleString();
                cleanupDisplay = "$" + totalCleanup.toLocaleString();
            }

            // Update Visuals
            document.getElementById('outRetainer').innerText = retainerDisplay;
            document.getElementById('outCleanup').innerText = cleanupDisplay;
            
            // Update Hidden Fields
            document.getElementById('hiddenRetainer').value = retainerDisplay;
            document.getElementById('hiddenCleanup').value = cleanupDisplay;

            // Meta
            document.getElementById('cleanupMeta').innerText = months === 0 ? "Setup Fee Only" : months + " Months Catch-up + Setup";
        }

        // INITIAL CALC ON LOAD
        calculate();

        // FORM SUBMISSION (Corrected for Zapier FormData)
        document.getElementById('pricingForm').onsubmit = function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const originalText = btn.innerText;
            btn.innerText = "Securing Rate...";
            btn.disabled = true;

            // FIX: Using FormData for Zapier compatibility
            const formData = new FormData(this);

            fetch(PRICING_WEBHOOK, {
                method: 'POST',
                mode: 'no-cors',
                body: formData // Sends as multipart/form-data
            }).then(() => {
                alert('Rate Locked. A confirmation of this architecture has been sent to your inbox.');
                btn.innerText = "Rate Locked";
                window.location.href = "/"; 
            }).catch(err => {
                alert('Connection Error. Please try again.');
                btn.innerText = originalText;
                btn.disabled = false;
            });
        };
    </script>
</body>
</html>
