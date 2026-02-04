<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkept | Discovery Engine</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&amp;display=swap" rel="stylesheet">
    <style>
        :root {
            --bkept-gold: #C5A059;
            --bkept-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --deep-slate: #2D3436;
            --surface: #F9FAFB;
            --chrome: #E2E8F0;
        }

        body { 
            background-color: var(--surface); 
            font-family: 'Inter', sans-serif; 
            color: var(--deep-slate); 
            margin: 0; 
            padding: 0; /* Reset for header */
        }

        /* --- ADDED NAV HEADER --- */
        .nav-header {
            background: #fff;
            padding: 20px 0;
            border-bottom: 2px solid;
            border-image: var(--bkept-gradient) 1;
            margin-bottom: 40px;
        }
        .nav-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-logo {
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: -1px;
            text-decoration: none;
            color: var(--deep-slate);
        }
        .back-link {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #636E72;
            text-decoration: none;
            font-weight: 700;
        }
        /* ------------------------ */

        .audit-wrapper {
            display: flex; 
            justify-content: center;
            padding: 0 20px 60px 20px;
        }

        .audit-container { 
            background: white; 
            width: 100%; 
            max-width: 900px; 
            padding: 60px; 
            border-radius: 4px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
            border-top: 4px solid var(--bkept-gold); 
        }
        
        .bk-logo { 
            font-size: 24pt; 
            font-weight: 700; 
            letter-spacing: 3px; 
            background: var(--bkept-gradient); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; 
            margin-bottom: 20px; 
            text-transform: lowercase; 
        }
        
        h1 { 
            font-size: 22pt; 
            font-weight: 800; 
            text-transform: uppercase; 
            margin-bottom: 40px; 
            border-bottom: 2px solid var(--chrome); 
            padding-bottom: 20px; 
        }
        
        h2 { 
            font-size: 10pt; 
            font-weight: 800; 
            color: var(--bkept-gold); 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            margin: 40px 0 20px 0; 
            display: flex; 
            align-items: center; 
        }
        h2::after { content: ""; flex: 1; height: 1px; background: var(--chrome); margin-left: 15px; }
        
        .form-section { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
        .full-width { grid-column: span 2; }
        
        label { 
            display: block; 
            font-size: 8pt; 
            font-weight: 700; 
            text-transform: uppercase; 
            letter-spacing: 1px; 
            margin-bottom: 8px; 
            color: #636E72; 
        }
        
        input, select, textarea { 
            width: 100%; 
            padding: 12px; 
            border: 1px solid var(--chrome); 
            background: var(--surface); 
            font-family: 'Inter'; 
            font-size: 10pt; 
            box-sizing: border-box; /* Fix width issues */
        }
        
        .glass-card { 
            background: #fff; 
            border: 1px solid var(--chrome); 
            padding: 25px; 
            margin-bottom: 20px; 
            transition: all 0.3s ease; 
        }
        .glass-card:hover { transform: translateY(-3px); border-top: 3px solid var(--bkept-gold); }

        .submit-btn { 
            background: var(--bkept-gradient); 
            color: white; 
            border: none; 
            width: 100%; 
            padding: 25px; 
            font-weight: 800; 
            text-transform: uppercase; 
            letter-spacing: 3px; 
            cursor: pointer; 
            margin-top: 40px; 
        }

        @media(max-width: 600px) {
            .form-section { grid-template-columns: 1fr; }
            .audit-container { padding: 30px; }
            .full-width { grid-column: span 1; }
        }
    </style>
</head>
<body>

    <div class="nav-header">
        <div class="nav-container">
            <a href="/" class="nav-logo">bkept.</a>
            <a href="/" class="back-link">← Return to OS</a>
        </div>
    </div>

    <div class="audit-wrapper">
        <div class="audit-container">
            <div class="bk-logo">bkept.</div>
            <h1>Discovery Audit</h1>

            <form id="auditForm">
                <h2>01. Legal Structure</h2>
                <div class="form-section">
                    <div><label>Legal Business Name *</label><input type="text" name="q1" required=""></div>
                    <div><label>DBA / Trade Name</label><input type="text" name="q2"></div>
                    <div class="full-width">
                        <label>Entity Legal Structure *</label>
                        <select name="q3" required="">
                            <option value="SoleProp">Sole Proprietorship</option>
                            <option value="Partnership">Partnership</option>
                            <option value="LLC">LLC</option>
                            <option value="S-Corp">S-Corp</option>
                            <option value="C-Corp">C-Corp</option>
                            <option value="Nonprofit">Nonprofit</option>
                        </select>
                    </div>
                    <div class="full-width"><label>State of Incorporation *</label><input type="text" name="q4" required=""></div>
                </div>

                <h2>02. Revenue Channels</h2>
                <div class="glass-card">
                    <div class="form-section">
                        <div><label>Prior Year Revenue</label><input type="text" name="q7" placeholder="$"></div>
                        <div><label>Projected Annual Revenue</label><input type="text" name="q8" placeholder="$"></div>
                    </div>
                    <label>Payment Processors (Check all that apply)</label>
                    <input type="text" name="q10" placeholder="e.g. Stripe, PayPal, Square, Venmo">
                </div>

                <h2>03. Banking &amp; Volume</h2>
                <div class="form-section">
                    <div class="glass-card"><label>Total # Bank Accounts</label><input type="number" name="q13"></div>
                    <div class="glass-card"><label>Total # Credit Cards</label><input type="number" name="q14"></div>
                    <div class="glass-card full-width"><label>Avg. Monthly Transactions (Line Items)</label><input type="number" name="q15"></div>
                </div>

                <h2>04. Workforce &amp; Payroll</h2>
                <div class="form-section">
                    <div><label># of Employees (W2)</label><input type="number" name="q17"></div>
                    <div><label># of Contractors (1099)</label><input type="number" name="q18"></div>
                    <div class="full-width">
                        <label>Payroll Frequency</label>
                        <select name="q23">
                            <option value="Weekly">Weekly</option>
                            <option value="Biweekly">Biweekly</option>
                            <option value="Semimonthly">Semimonthly</option>
                            <option value="Monthly">Monthly</option>
                        </select>
                    </div>
                </div>

                <h2>05. Tech Stack &amp; Compliance</h2>
                <div class="form-section">
                    <div>
                        <label>Current Accounting System</label>
                        <select name="q24">
                            <option value="QuickBooks">QuickBooks</option>
                            <option value="Xero">Xero</option>
                            <option value="None">None / Manual</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div><label>Income Tax Returns Current?</label><select name="q26"><option>Yes</option><option>No</option></select></div>
                </div>

                <h2>06. Strategic Objectives</h2>
                <div class="glass-card">
                    <label>Current Pain Points &amp; Service Needs</label>
                    <textarea name="q28" rows="4" placeholder="What keeps you up at night regarding your books?"></textarea>
                </div>

                <h2>07. Primary Lead</h2>
                <div class="form-section">
                    <div><label>Full Name *</label><input type="text" name="q31" required=""></div>
                    <div><label>Email *</label><input type="email" name="q32" required=""></div>
                </div>

                <button type="submit" class="submit-btn">Initialize Performance Sync</button>
            </form>
        </div>
    </div>

    <script>
        // BKEPT SERVER HOOK
        document.getElementById('auditForm').onsubmit = function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const originalText = btn.innerText;
            btn.innerText = "Transmitting Data...";
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());

            fetch('https://hooks.zapier.com/hooks/catch/26262080/ul9kwo5/', {
                method: 'POST',
                mode: 'no-cors',
                body: JSON.stringify(data),
                headers: {'Content-Type': 'application/json'}
            }).then(() => {
                alert('Bkept Architecture Initialized. We will provision your secure folder shortly.');
                window.location.href = "/"; // Send them home after success
            }).catch(err => {
                alert('Connection Error. Please try again.');
                btn.innerText = originalText;
            });
        };
    </script>
</body>
</html>
