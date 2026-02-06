<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Protocol | Bkept</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* [SECTION] BKEPT IDENTITY PROTOCOL */
        :root {
            --bk-gradient: linear-gradient(110deg, #8E7338 0%, #D6B569 35%, #F9E7BA 50%, #D6B569 65%, #8E7338 100%);
            --bk-gold-solid: #C5A059;
            --bk-dark: #2D3436;
            --bk-void: #1A1A1A;
            --bk-surface: #F9FAFB;
            --bk-border: #E2E8F0;
            --bk-font: 'Inter', sans-serif;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body { 
            font-family: var(--bk-font); 
            color: var(--bk-dark); 
            background: var(--bk-surface); 
            line-height: 1.6;
        }

        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* HEADER */
        header { background: #fff; padding: 20px 0; border-bottom: 2px solid; border-image: var(--bk-gradient) 1; }
        .nav-flex { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 800; font-size: 1.5rem; letter-spacing: -1px; text-decoration: none; color: var(--bk-dark); }
        .back-link { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; color: #636E72; text-decoration: none; font-weight: 700; }

        /* HERO */
        .page-hero { text-align: center; padding: 80px 0 60px 0; }
        .hero-tag {
            font-size: 0.85rem; font-weight: 800; text-transform: uppercase; 
            letter-spacing: 3px; color: var(--bk-gold-solid); 
            border: 1px solid var(--bk-gold-solid); padding: 4px 12px; 
            border-radius: 100px; display: inline-block; margin-bottom: 20px;
        }
        h1 { font-size: 3.5rem; margin-bottom: 20px; letter-spacing: -2px; font-weight: 800; text-transform: uppercase; color: var(--bk-void); line-height: 1; }
        .gold-text { background: var(--bk-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .sub-text { font-size: 1.1rem; color: #636E72; max-width: 700px; margin: 0 auto; }

        /* PROTOCOL GRID */
        .protocol-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 100px; }
        
        .protocol-card { 
            background: #fff; padding: 40px; border: 1px solid var(--bk-border); 
            transition: 0.3s; position: relative; overflow: hidden;
            border-radius: 4px;
        }
        .protocol-card:hover { border-color: var(--bk-gold-solid); transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
        .protocol-card::before { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: var(--bk-dark); transition: 0.3s; }
        .protocol-card:hover::before { background: var(--bk-gradient); }

        .card-num { font-size: 3rem; font-weight: 800; color: #F0F2F5; line-height: 1; margin-bottom: 10px; display: block; }
        .card-title { font-size: 1.2rem; font-weight: 800; margin-bottom: 15px; color: var(--bk-void); text-transform: uppercase; letter-spacing: 1px; }
        .card-desc { font-size: 0.95rem; color: #636E72; }

        /* MANIFESTO BLOCK */
        .manifesto-block { 
            background: var(--bk-void); color: white; padding: 100px 0; text-align: center; 
            position: relative; overflow: hidden;
        }
        .manifesto-title { font-size: 2.5rem; font-weight: 800; margin-bottom: 20px; text-transform: uppercase; letter-spacing: -1px; }
        .manifesto-text { font-size: 1.2rem; color: #BDC3C7; max-width: 700px; margin: 0 auto 50px auto; }
        
        .btn-gold { 
            background: var(--bk-gradient); color: #1A1A1A; padding: 20px 40px; 
            font-weight: 800; text-transform: uppercase; letter-spacing: 2px; 
            text-decoration: none; display: inline-block; border-radius: 2px; transition: 0.3s;
        }
        .btn-gold:hover { transform: translateY(-2px); box-shadow: 0 10px 30px rgba(197, 160, 89, 0.3); }

        footer { background: #fff; padding: 40px 0; border-top: 1px solid #eee; text-align: center; font-size: 0.8rem; color: #b2bec3; }

        @media(max-width: 900px) {
            .protocol-grid { grid-template-columns: 1fr; }
            h1 { font-size: 2.5rem; }
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
            <span class="hero-tag">Open Architecture</span>
            <h1>Our Network <span class="gold-text">is an Ecosystem.</span></h1>
            <p class="sub-text">Great businesses are not built in isolation. Whether you are an agency, a consultant, a VC, or a fellow operator—if your network relies on financial clarity to succeed, we are the engine room.</p>
        </div>

        <div class="protocol-grid">
            
            <div class="protocol-card">
                <span class="card-num">01</span>
                <h3 class="card-title">Reliability First</h3>
                <p class="card-desc">Your reputation is your currency. When you refer a partner, you are staking that reputation. We treat that trust as our primary asset. We do not ghost. We do not miss deadlines.</p>
            </div>

            <div class="protocol-card">
                <span class="card-num">02</span>
                <h3 class="card-title">Mutual Velocity</h3>
                <p class="card-desc">Clean data makes everyone faster. If you provide marketing, legal, or strategy services to a client, our "Truth Memo" gives you the verified intel you need to do your job better.</p>
            </div>

            <div class="protocol-card">
                <span class="card-num">03</span>
                <h3 class="card-title">Lane Discipline</h3>
                <p class="card-desc">We are Performance Bookkeepers. We do not upsell marketing, we do not practice law, and we do not pretend to be tax filers. We stay in our lane so you can own yours.</p>
            </div>

        </div>
    </div>

    <div class="manifesto-block">
        <div class="container">
            <h2 class="manifesto-title">The Alliance Model</h2>
            <p class="manifesto-text">We are open to all forms of strategic partnership. From white-label operational support to reciprocal referral networks. If you serve business owners who need order, we should speak.</p>
            <a href="mailto:tomklecan@bkept.co?subject=Strategic%20Alliance%20Inquiry" class="btn-gold">Initialize Alliance</a>
        </div>
    </div>

    <footer>
        &copy; 2026 Bkept Financial Architecture. <br>The Partner Protocol v2.0
    </footer>

</body>
</html>
