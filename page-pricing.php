<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing | Bkept Financial Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        /* BKEPT GLOBAL STYLES IMPORT */
        :root {
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-surface: #FFFFFF;
            --bk-font: 'Inter', sans-serif;
            --bk-border: #E2E8F0;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: var(--bk-font); color: var(--bk-dark); background: #F9FAFB; }
        
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        
        /* HEADER */
        header { background: #fff; padding: 20px 0; border-bottom: 2px solid; border-image: var(--bk-gradient) 1; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; text-decoration: none; color: var(--bk-dark); }
        .back-link { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; text-decoration: none; font-weight: 700; }

        /* HERO */
        .page-hero { text-align: center; padding: 80px 0 60px 0; }
        h1 { font-size: 3rem; margin-bottom: 20px; letter-spacing: -1px; }
        .gold-text { background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

        /* CALCULATOR MODULE */
        .calc-wrapper { background: #fff; border: 1px solid var(--bk-border); padding: 50px; box-shadow: 0 20px 40px rgba(0,0,0,0.05); margin-bottom: 100px; max-width: 800px; margin: 0 auto 100px auto; border-top: 4px solid var(--bk-gold-solid); }
        
        .slider-group { margin-bottom: 40px; }
        .slider-label { display: flex; justify-content: space-between; margin-bottom: 15px; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; }
        
        /* Custom Range Slider */
        input[type=range] { -webkit-appearance: none; width: 100%; background: transparent; }
        input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; height: 24px; width: 24px; border-radius: 50%; background: var(--bk-gold-solid); cursor: pointer; margin-top: -10px; box-shadow: 0 0 0 4px #fff, 0 0 0 5px var(--bk-gold-solid); }
        input[type=range]::-webkit-slider-runnable-track { width: 100%; height: 4px; background: #e1e1e1; border-radius: 2px; }
        
        /* OUTPUT BOARD */
        .output-board { background: #2D3436; color: #fff; padding: 40px; border-radius: 4px; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px; }
        .out-col { text-align: center; position: relative; }
        .out-col:first-child { border-right: 1px solid #555; }
        .out-label { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: #BDC3C7; margin-bottom: 10px; display: block; }
        .out-price { font-size: 2.5rem; font-weight: 800; color: #fff; display: block; }
        .out-meta { font-size: 0.8rem; color: #BDC3C7; margin-top: 5px; display: block; font-style: italic; }

        /* CONTACT CAPTURE SECTION */
        .contact-capture { background: #F9FAFB; padding: 30px; border: 1px solid var(--bk-border); border-radius: 4px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
        .form-input { width: 100%; padding: 15px; border: 1px solid var(--bk-border); background: #fff; font-family: 'Inter', sans-serif; font-size: 0.9rem; }
        
        .btn-submit { background: var(--bk-gradient); color: #1A1A1A; border: none; padding: 20px 40px; font-weight: 800; text-transform: uppercase; cursor: pointer; width: 100%; letter-spacing: 1px; display: block; text-align: center; text-decoration: none; }
        .btn-submit:hover { opacity: 0.9; }

        /* FOOTER SIMULATION */
        .simple-footer { text-align: center; padding: 40px; font-size: 0.8rem; color: #b2bec3; background: #1A1A1A; }

        @media(max-width: 768px) {
            .output-board { grid-template-columns: 1fr; gap: 30px; }
            .out-col:first-child { border-right: none; border-bottom: 1px solid #555; padding-bottom: 30px; }
            .form-row { grid-template-columns: 1fr; }
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
            <p style="color: #636E72; max-width: 600px; margin: 0 auto;">Estimate your investment. We do not hide behind "Call for Quote" buttons unless complexity demands it.</p>
        </div>

        <form id="pricingForm" class="calc-wrapper">
            
            <div class="slider-group">
                <div class="slider-label">
                    <span>Monthly Transaction Volume</span>
                    <span id="labelTxn">0 - 100</span>
                </div>
                <input type="range" name="volume" id="rangeTxn" min="0" max="600" step="50" value="100" oninput="calculate()">
                <div style="display:flex; justify-content:space-between; font-size:0.75rem; color:#b2bec3; margin-top:10px;">
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

            <input type="hidden" name="estimated_retainer" id="hiddenRetainer" value="$650">
            <input type="hidden" name="estimated_cleanup" id="hiddenCleanup" value="$500">

            <div class="contact-capture">
                <div style="text-align:center; margin-bottom:20px; font-weight:700; color:#636E72; font-size:0.8rem; text-transform:uppercase; letter-spacing:1px;">Initialize Proposal Request</div>
                
                <div class="form-row">
                    <input type="text" name="lead_name" class="form-input" placeholder="Your Full Name" required>
                    <input type="email" name="lead_email" class="form-input" placeholder="Work Email Address" required>
                </div>
                
                <button type="submit" class="btn-submit">Initialize Proposal</button>
            </div>

        </form>
    </div>

    <footer class="simple-footer">
        &copy; 2026 Bkept Financial Architecture. <br>Calculations are estimates. Final pricing subject to detailed audit.
    </footer>

    <script>
        // ZAPIER PRICING HOOK
        const PRICING_WEBHOOK = 'https://hooks.zapier.com/hooks/catch/26262080/ulp6kfx/';

        function calculate() {
            // INPUTS
            const txn = parseInt(document.getElementById('rangeTxn').value);
            const accts = parseInt(document.getElementById('rangeAccts').value);
            const months = parseInt(document.getElementById('rangeMonths').value);

            // LOGIC
            let baseRate = 650;
            
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
            
            // Update Hidden Fields (For Zapier)
            document.getElementById('hiddenRetainer').value = retainerDisplay;
            document.getElementById('hiddenCleanup').value = cleanupDisplay;

            // Meta
            document.getElementById('cleanupMeta').innerText = months === 0 ? "Setup Fee Only" : months + " Months Catch-up + Setup";
        }

        // FORM SUBMISSION
        document.getElementById('pricingForm').onsubmit = function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const originalText = btn.innerText;
            btn.innerText = "Locking Rates...";
            btn.disabled = true;

            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            fetch(PRICING_WEBHOOK, {
                method: 'POST',
                mode: 'no-cors',
                body: JSON.stringify(data),
                headers: {'Content-Type': 'application/json'}
            }).then(() => {
                alert('Proposal Initialized. Our team will review your specs and confirm via email.');
                btn.innerText = "Proposal Sent";
                window.location.href = "/"; // Redirect Home
            }).catch(err => {
                alert('Connection Error. Please try again.');
                btn.innerText = originalText;
                btn.disabled = false;
            });
        };
    </script>
</body>
</html>
