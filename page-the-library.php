<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Library | Bkept Financial Architecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800;900&display=swap" rel="stylesheet">
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
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* HEADER */
        header { background: #fff; padding: 20px 0; border-bottom: 2px solid; border-image: var(--bk-gradient) 1; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        
        /* THE BRAND FIX: Renamed from .logo to .bk-logo & Updated Specs */
        .bk-logo { 
            font-family: 'Inter', sans-serif;
            font-size: 24px; 
            font-weight: 900; /* ExtraBlack for authority */
            letter-spacing: -1.2px; /* Tight tracking for the 'logo' feel */
            text-transform: lowercase;
            text-decoration: none; 
            background: var(--bk-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
            display: inline-block;
        }
        
        .back-link { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; text-decoration: none; font-weight: 700; }

        /* HERO */
        .page-hero { text-align: center; padding: 80px 0 60px 0; }
        h1 { font-size: 3rem; margin-bottom: 20px; letter-spacing: -1px; }
        .gold-text { background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }

        /* RESOURCE LIST */
        .resource-list { max-width: 800px; margin: 0 auto 100px auto; }
        .resource-item { display: flex; align-items: center; background: #fff; padding: 30px; margin-bottom: 20px; border: 1px solid var(--bk-border); transition: 0.3s; }
        .resource-item:hover { border-color: var(--bk-gold-solid); transform: translateX(10px); }
        
        .res-icon { font-size: 2rem; margin-right: 25px; color: var(--bk-gold-solid); }
        .res-content { flex-grow: 1; }
        .res-title { font-size: 1.2rem; font-weight: 700; margin-bottom: 5px; color: #1A1A1A; }
        .res-desc { font-size: 0.9rem; color: #636E72; }
        .res-action { font-size: 0.8rem; text-transform: uppercase; font-weight: 700; color: var(--bk-dark); letter-spacing: 1px; }

        footer { background: #1A1A1A; color: #636E72; padding: 40px 0; text-align: center; font-size: 0.8rem; }
    </style>
</head>
<body>

    <header>
        <div class="container nav-flex">
            <a href="/" class="bk-logo">bkept.</a>
            <a href="/" class="back-link">← Return to OS</a>
        </div>
    </header>

    <div class="container">
        <div class="page-hero">
            <h1>The <span class="gold-text">Library.</span></h1>
            <p style="color: #636E72; max-width: 600px; margin: 0 auto;">Standard Operating Procedures (SOPs), Templates, and Protocols. Use our internal tools to build your own clarity.</p>
        </div>

        <div class="resource-list">
            
            <div class="resource-item">
                <div class="res-icon">🗓</div>
                <div class="res-content">
                    <div class="res-title">The Monthly Cadence</div>
                    <div class="res-desc">The exact schedule of deliverables. Know exactly what happens on the 4th, 10th, and 20th of every month.</div>
                </div>
                <div class="res-action">View SOP →</div>
            </div>

            <div class="resource-item">
                <div class="res-icon">📝</div>
                <div class="res-content">
                    <div class="res-title">The "Truth" Memo Template</div>
                    <div class="res-desc">Stop sending 40-page PDFs. Use this one-page executive summary to report financial health to investors.</div>
                </div>
                <div class="res-action">Download →</div>
            </div>

            <div class="resource-item">
                <div class="res-icon">⚙️</div>
                <div class="res-content">
                    <div class="res-title">Tech Stack Integration Map</div>
                    <div class="res-desc">A visual diagram of how Bank Feeds, Payroll, and Receipts flow into the General Ledger.</div>
                </div>
                <div class="res-action">View Diagram →</div>
            </div>

        </div>
    </div>

    <footer>
        &copy; 2026 Bkept Financial Architecture. <br>Assets provided for educational use only.
    </footer>

</body>
</html>
