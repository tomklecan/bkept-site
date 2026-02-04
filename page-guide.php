<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kept Guide | bkept. Performance Bookkeeping</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;800&amp;display=swap" rel="stylesheet">
    <style>
        :root {
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold: #C5A059;
            --bk-slate: #2D3436;
            --bk-void: #1A1A1A;
            --bk-surface: #F9FAFB;
            --bk-border: #E2E8F0;
            --bk-white: #FFFFFF;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bk-surface);
            color: var(--bk-slate);
            margin: 0;
            padding: 0; /* Changed to 0 to accommodate sticky header */
            line-height: 1.6;
        }

        /* --- ADDED NAV HEADER FOR NAVIGATION --- */
        .nav-header {
            background: #fff;
            padding: 20px 0;
            border-bottom: 2px solid;
            border-image: var(--bk-gradient) 1;
            margin-bottom: 40px;
        }
        .nav-container {
            max-width: 800px;
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
            color: var(--bk-slate);
        }
        .back-link {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #636E72;
            text-decoration: none;
            font-weight: 700;
        }
        /* --------------------------------------- */

        .guide-wrapper {
            max-width: 800px;
            margin: 0 auto 60px auto;
            background: var(--bk-white);
            border: 1px solid var(--bk-border);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            position: relative;
        }

        .header-bar {
            padding: 40px 60px;
            border-bottom: 2px solid transparent;
            border-image: var(--bk-gradient) 1;
            text-align: center;
        }

        .logo {
            font-weight: 700;
            font-size: 24px;
            letter-spacing: 3px;
            background: var(--bk-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: lowercase;
            margin-bottom: 10px;
            display: inline-block;
        }

        h1 {
            font-weight: 800;
            font-size: 32px;
            letter-spacing: -1.5px;
            color: var(--bk-void);
            margin: 0;
            text-transform: uppercase;
        }

        .hero-tag {
            display: inline-block;
            font-size: 0.85rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--bk-gold);
            border: 1px solid var(--bk-gold);
            padding: 4px 12px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .section {
            padding: 40px 60px;
        }

        .manifesto-callout {
            background-color: var(--bk-void);
            color: #BDC3C7;
            padding: 30px;
            border-left: 4px solid var(--bk-gold);
            margin-bottom: 40px;
        }

        h2 {
            font-weight: 700;
            font-size: 10pt;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--bk-gold);
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background: var(--bk-white);
            border: 1px solid var(--bk-border);
            padding: 25px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-top: 4px solid var(--bk-gold);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .card strong {
            display: block;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 1px;
            color: var(--bk-void);
            margin-bottom: 10px;
        }

        .cadence-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .cadence-row {
            border-bottom: 1px solid var(--bk-border);
        }

        .cadence-row td {
            padding: 15px 0;
            vertical-align: top;
        }

        .day-mark {
            font-weight: 800;
            color: var(--bk-gold);
            width: 100px;
        }

        .alert-24hr {
            background: #FFFBF2;
            border: 1px solid var(--bk-gold);
            padding: 20px;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        footer {
            background: var(--bk-void);
            color: #888;
            padding: 30px;
            text-align: center;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        @media (max-width: 600px) {
            .section { padding: 30px; }
            .grid { grid-template-columns: 1fr; }
            .header-bar { padding: 30px; }
            .nav-container { padding: 0 20px; }
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

    <div class="guide-wrapper">
        <div class="header-bar">
            <span class="logo">bkept.</span>
            <h1>The Kept Guide</h1>
        </div>

        <div class="section">
            <div class="hero-tag">Operational Philosophy</div>
            <div class="manifesto-callout">
                <strong>The One-Way Sync Protocol</strong><br>
                We don't record history; we architect the future. Our ecosystem is built on a "One-Way Sync"—data flows automatically from your bank to our engine. We never manually enter what can be fetched.
            </div>

            <h2>01 // The Tech Stack</h2>
            <div class="grid">
                <div class="card">
                    <strong>The Engine</strong>
                    QuickBooks Online. Your single source of truth where all financial data is aggregated and reconciled daily.
                </div>
                <div class="card">
                    <strong>The Vault</strong>
                    Dext. Snap photos of receipts immediately. A digital image is attached to every transaction before it hits the ledger.
                </div>
                <div class="card">
                    <strong>The Command Center</strong>
                    The Client Hub. Your central dashboard for requests, the "Truth Memo," and your monthly financial statements.
                </div>
                <div class="card">
                    <strong>The Wallet</strong>
                    Bill.com. Log in here to review, approve, and manage all outgoing vendor payments and incoming customer invoices.
                </div>
            </div>

            <h2>02 // The Monthly Cadence</h2>
            <table class="cadence-table">
                <tbody>
                    <tr class="cadence-row">
                        <td class="day-mark">1st – 3rd</td>
                        <td><strong>Data Aggregation:</strong> Statements and transaction data are auto-fetched via read-only bank feeds.</td>
                    </tr>
                    <tr class="cadence-row">
                        <td class="day-mark">4th</td>
                        <td><strong>Preliminary Close:</strong> We reconcile all accounts. Mystery items are compiled into the "Open Items List."</td>
                    </tr>
                    <tr class="cadence-row" style="background: #F9FAFB;">
                        <td class="day-mark" style="color: var(--bk-void);">5th</td>
                        <td><strong>Client Context:</strong> Your 24-hour window to provide context for open items to maintain the delivery schedule.</td>
                    </tr>
                    <tr class="cadence-row">
                        <td class="day-mark">10th</td>
                        <td><strong>Delivery:</strong> "The Truth Memo" and full financial package (P&L, Balance Sheet, Cash Flow) are delivered to your Hub.</td>
                    </tr>
                </tbody>
            </table>

            <div class="alert-24hr">
                <strong>Operational Rule:</strong> Adherence to the 5th-of-the-month deadline is critical. To maintain our "One-Way Sync" integrity, client context must be resolved within 24 hours.
            </div>
        </div>

        <footer>
            bkept performance bookkeeping // impeccably kept // bkept.co
        </footer>
    </div>

</body>
</html>
