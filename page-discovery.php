<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discovery Audit | Bkept Financial Architecture</title>
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
        body { font-family: var(--bk-font); color: var(--bk-dark); background: #F9FAFB; }
        .container { max-width: 800px; margin: 0 auto; padding: 0 20px; }

        /* HEADER */
        header { background: #fff; padding: 20px 0; border-bottom: 2px solid; border-image: var(--bk-gradient) 1; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; text-decoration: none; color: var(--bk-dark); }
        .back-link { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; text-decoration: none; font-weight: 700; }

        /* FORM CONTAINER */
        .audit-form-wrapper { background: #fff; padding: 60px; border: 1px solid var(--bk-border); margin: 60px 0 100px 0; border-top: 4px solid var(--bk-gold-solid); }
        
        .form-group { margin-bottom: 30px; }
        .form-label { display: block; font-weight: 700; font-size: 0.9rem; margin-bottom: 10px; color: #1A1A1A; }
        .form-sub { display: block; font-size: 0.8rem; color: #636E72; margin-bottom: 10px; }
        .form-input, .form-select, .form-textarea { width: 100%; padding: 15px; border: 1px solid var(--bk-border); background: #FAFAFA; font-family: 'Inter', sans-serif; font-size: 1rem; }
        .form-input:focus { border-color: var(--bk-gold-solid); outline: none; background: #fff; }

        .btn-submit { background: var(--bk-gradient); color: #1A1A1A; border: none; padding: 20px 40px; font-weight: 800; text-transform: uppercase; cursor: pointer; width: 100%; letter-spacing: 1px; }

        h1 { font-size: 2.5rem; letter-spacing: -1px; margin-bottom: 10px; }
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
        <div style="text-align: center; margin-top: 60px;">
            <span style="color: var(--bk-gold-solid); font-weight: 800; letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem;">Phase 01</span>
            <h1>The Discovery Audit</h1>
            <p style="color: #636E72; max-width: 500px; margin: 0 auto;">Before we prescribe a solution, we must diagnose the friction. Please provide the operational data below.</p>
        </div>

        <div class="audit-form-wrapper">
            <form id="discoveryAuditForm">
                
                <div class="form-group">
                    <label class="form-label">Current Accounting Software</label>
                    <select class="form-select" name="software_current">
                        <option>QuickBooks Online</option>
                        <option>Xero</option>
                        <option>Excel / Spreadsheets</option>
                        <option>Nothing / Fresh Start</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Last Month Reconciled</label>
                    <span class="form-sub">When was the last time your books were 100% accurate?</span>
                    <input type="text" class="form-input" name="last_reconciled" placeholder="e.g. December 2024">
                </div>

                <div class="form-group">
                    <label class="form-label">Primary Pain Point</label>
                    <span class="form-sub">Why are you hiring us *now*?</span>
                    <textarea class="form-textarea" rows="4" name="pain_point" placeholder="e.g. Tax deadline looming, investors asking for reports..."></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address for Report</label>
                    <input type="email" class="form-input" name="audit_email" required>
                </div>

                <button type="submit" class="btn-submit">Initialize Audit</button>

            </form>
        </div>
    </div>

    <script>
        // PASTE YOUR SAME ZAPIER WEBHOOK URL HERE
        const WEBHOOK_URL = 'https://hooks.zapier.com/hooks/catch/26262080/ul576pd/'; 

        document.getElementById('discoveryAuditForm').onsubmit = function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            btn.innerText = "Transmitting Data...";
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            fetch(WEBHOOK_URL, {
                method: 'POST',
                mode: 'no-cors',
                body: JSON.stringify(data),
                headers: {'Content-Type': 'application/json'}
            }).then(() => {
                alert('Audit Data Received. We are reviewing your file.');
                window.location.href = "/"; // Redirect home
            }).catch(err => {
                alert('Error connecting to Bkept Server.');
            });
        };
    </script>
</body>
</html>
