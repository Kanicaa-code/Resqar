<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSync - AR Emergency Response System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #FF3B30;
            --secondary: #007AFF;
            --dark: #1C1C1E;
            --light: #F2F2F7;
            --accent: #34C759;
            --gradient: linear-gradient(135deg, #FF3B30 0%, #FF9500 100%);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            overflow-x: hidden;
            color: var(--dark);
            background: var(--light);
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .cta-button {
            background: var(--gradient);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(255, 59, 48, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(255, 59, 48, 0.4);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            top: -250px;
            right: -250px;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-30px);
            }
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 4rem;
            font-weight: 900;
            color: white;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .hero-text p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
            padding: 1.2rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
        }

        .hero-visual {
            position: relative;
        }

        .phone-mockup {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            background: white;
            border-radius: 40px;
            padding: 20px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            animation: phoneFloat 3s ease-in-out infinite;
        }

        @keyframes phoneFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(-2deg);
            }

            50% {
                transform: translateY(-20px) rotate(2deg);
            }
        }

        .phone-screen {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border-radius: 30px;
            padding: 60px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .ar-overlay {
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(255, 59, 48, 0.3);
            border: 3px solid var(--primary);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0.7;
            }
        }

        /* Features Section */
        .features {
            padding: 8rem 2rem;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 3rem;
        }

        .feature-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 3rem;
            border-radius: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .feature-card p {
            color: #555;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        /* How It Works */
        .how-it-works {
            padding: 8rem 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .steps {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 80px;
            height: 80px;
            background: white;
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 900;
            margin: 0 auto 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .step h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .step p {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Emergency Types */
        .emergency-types {
            padding: 8rem 2rem;
            background: white;
        }

        .emergency-grid {
            max-width: 1400px;
            margin: 4rem auto 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .emergency-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .emergency-card:hover {
            transform: scale(1.05);
        }

        .emergency-header {
            padding: 2rem;
            color: white;
            text-align: center;
        }

        .cpr-card .emergency-header {
            background: linear-gradient(135deg, #FF3B30 0%, #FF9500 100%);
        }

        .choking-card .emergency-header {
            background: linear-gradient(135deg, #007AFF 0%, #5856D6 100%);
        }

        .unconscious-card .emergency-header {
            background: linear-gradient(135deg, #34C759 0%, #30B0C7 100%);
        }

        .emergency-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .emergency-card h3 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .emergency-body {
            padding: 2rem;
        }

        .emergency-body ul {
            list-style: none;
            padding: 0;
        }

        .emergency-body li {
            padding: 0.8rem 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .emergency-body li:before {
            content: '✓';
            color: var(--accent);
            font-weight: bold;
            margin-right: 1rem;
            font-size: 1.3rem;
        }

        /* Stats Section */
        .stats {
            padding: 6rem 2rem;
            background: var(--dark);
            color: white;
        }

        .stats-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 4rem;
            text-align: center;
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 900;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.2rem;
            opacity: 0.8;
        }

        /* CTA Section */
        .cta-section {
            padding: 8rem 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            text-align: center;
            color: white;
        }

        .cta-section h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 900;
        }

        .cta-section p {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .app-buttons {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .app-button {
            background: white;
            color: var(--dark);
            padding: 1.5rem 3rem;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .app-button:hover {
            transform: translateY(-5px);
        }

        .app-icon {
            font-size: 2.5rem;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 4rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h4 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 0.8rem;
        }

        .footer-section a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .section-title {
                font-size: 2rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .cta-section h2 {
                font-size: 2rem;
            }
        }

        /* Animation on scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s, transform 0.6s;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">🚑 ResQAR</div>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#emergencies">Emergencies</a></li>
                <li><a href="#download">Download</a></li>
            </ul>
            <a href="#download" class="btn-primary">get Started</a>

        </div>
    </nav>


   




    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Save Lives with AR Emergency Guidance</h1>
                <p>Turn your smartphone into an intelligent emergency coach. Real-time AR guidance for CPR, choking, and
                    critical situations when every second counts.</p>
                <div class="hero-buttons">
                    <a href="#download" class="btn-primary">Download Now</a>
                    <a href="#how-it-works" class="btn-secondary">Watch Demo</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="phone-mockup">
                    <div class="phone-screen">
                        <div class="ar-overlay"></div>
                        <h3>📱 AR Mode Active</h3>
                        <p>Detecting Emergency...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <h2 class="section-title">Revolutionary Features</h2>
        <p class="section-subtitle">Advanced AI and AR technology that transforms anyone into a capable first responder
        </p>

        <div class="features-grid">
            <div class="feature-card fade-in">
                <div class="feature-icon">🎯</div>
                <h3>Real-Time Detection</h3>
                <p>AI-powered computer vision instantly identifies emergency situations and assesses the victim's
                    condition with 95% accuracy.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">👁️</div>
                <h3>AR Visual Guidance</h3>
                <p>Precise AR overlays show exactly where to place hands, how deep to compress, and when to perform each
                    action.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">🎵</div>
                <h3>CPR Metronome</h3>
                <p>Built-in rhythm guide maintains perfect 100-120 BPM compression rate, increasing survival chances by
                    40%.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">🗣️</div>
                <h3>Voice Commands</h3>
                <p>Hands-free operation with voice control keeps your focus on the victim while the app guides you
                    through each step.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">🚨</div>
                <h3>Auto-Emergency Call</h3>
                <p>Automatically contacts 911 with your exact location, emergency type, and real-time session data.</p>
            </div>

            <div class="feature-card fade-in">
                <div class="feature-icon">📊</div>
                <h3>Performance Tracking</h3>
                <p>Real-time feedback on compression depth, rate, and technique helps you improve with each compression.
                </p>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="how-it-works">
        <h2 class="section-title" style="color: white;">How It Works</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Three simple steps to becoming a life-saver
        </p>

        <div class="steps">
            <div class="step fade-in">
                <div class="step-number">1</div>
                <h3>Point & Detect</h3>
                <p>Open the app and point your camera at the emergency situation. AI instantly recognizes the emergency
                    type.</p>
            </div>

            <div class="step fade-in">
                <div class="step-number">2</div>
                <h3>Follow AR Guidance</h3>
                <p>AR overlays appear showing exact hand placement, compression depth, and step-by-step instructions.
                </p>
            </div>

            <div class="step fade-in">
                <div class="step-number">3</div>
                <h3>Save a Life</h3>
                <p>Follow the visual and audio cues while help is automatically dispatched to your location.</p>
            </div>
        </div>
    </section>

    <!-- Emergency Types -->
    <section id="emergencies" class="emergency-types">
        <h2 class="section-title">Emergencies We Handle</h2>
        <p class="section-subtitle">Comprehensive guidance for the most critical situations</p>

        <div class="emergency-grid">
            <div class="emergency-card cpr-card fade-in">
                <div class="emergency-header">
                    <div class="emergency-icon">💓</div>
                    <h3>Cardiac Arrest</h3>
                    <p>CPR Guidance</p>
                </div>
                <div class="emergency-body">
                    <ul>
                        <li>Hand placement markers</li>
                        <li>100-120 BPM metronome</li>
                        <li>Compression depth tracking</li>
                        <li>Rescue breathing cues</li>
                        <li>AED integration</li>
                    </ul>
                </div>
            </div>

            <div class="emergency-card choking-card fade-in">
                <div class="emergency-header">
                    <div class="emergency-icon">🫁</div>
                    <h3>Choking</h3>
                    <p>Heimlich Maneuver</p>
                </div>
                <div class="emergency-body">
                    <ul>
                        <li>Positioning guidance</li>
                        <li>Fist placement overlay</li>
                        <li>Thrust direction arrows</li>
                        <li>Force indication</li>
                        <li>Success detection</li>
                    </ul>
                </div>
            </div>

            <div class="emergency-card unconscious-card fade-in">
                <div class="emergency-header">
                    <div class="emergency-icon">😴</div>
                    <h3>Unconscious</h3>
                    <p>Recovery Position</p>
                </div>
                <div class="emergency-body">
                    <ul>
                        <li>Responsiveness check</li>
                        <li>Airway assessment</li>
                        <li>Recovery position guide</li>
                        <li>Pulse monitoring</li>
                        <li>Continuous assessment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="stats-grid">
            <div class="stat fade-in">
                <div class="stat-number">95%</div>
                <div class="stat-label">Detection Accuracy</div>
            </div>
            <div class="stat fade-in">
                <div class="stat-number">40%</div>
                <div class="stat-label">Increased Survival Rate</div>
            </div>
            <div class="stat fade-in">
                <div class="stat-number">3min</div>
                <div class="stat-label">Average Response Time</div>
            </div>
            <div class="stat fade-in">
                <div class="stat-number">50K+</div>
                <div class="stat-label">Lives Potentially Saved</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="download" class="cta-section">
        <h2>Ready to Save Lives?</h2>
        <p>Download ResQAR now and be prepared for any emergency</p>
        <div class="app-buttons">
            <a href="#" class="app-button">
                <span class="app-icon">🍎</span>
                <div style="text-align: left;">
                    <div style="font-size: 0.8rem; opacity: 0.7;">Download on the</div>
                    <div style="font-size: 1.2rem;">App Store</div>
                </div>
            </a>
            <a href="#" class="app-button">
                <span class="app-icon">🤖</span>
                <div style="text-align: left;">
                    <div style="font-size: 0.8rem; opacity: 0.7;">Get it on</div>
                    <div style="font-size: 1.2rem;">Google Play</div>
                </div>
            </a>
        </div>
    </section>
    <!-- conact -->
    <!-- Contact Section -->
    <section id="contact" class="features" style="padding: 6rem 2rem;">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-subtitle">Have questions or suggestions? Reach out to us and we'll get back to you!</p>

        <div style="max-width: 600px; margin: 0 auto;">
            <form id="contactForm" method="post" action="submit.php"
                style="display: flex; flex-direction: column; gap: 1.5rem;">
                <input type="text" name="name" placeholder="Full Name" required
                    style="padding: 1rem; border-radius: 15px; border: 1px solid #ccc; font-size: 1rem;">
                <input type="email" name="email" placeholder="Email" required
                    style="padding: 1rem; border-radius: 15px; border: 1px solid #ccc; font-size: 1rem;">
                <input type="text" name="phone" placeholder="Phone" required
                    style="padding: 1rem; border-radius: 15px; border: 1px solid #ccc; font-size: 1rem;">
                <textarea name="message" placeholder="Message" rows="5"
                    style="padding: 1rem; border-radius: 15px; border: 1px solid #ccc; font-size: 1rem;"></textarea>
                <button type="submit" class="cta-button" style="width: 150px; align-self: flex-start;">Submit</button>
            </form>
        </div>
    </section>

    <!-- conact end -->
    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>🚑 SkillSync</h4>
                <p style="opacity: 0.7;">Empowering everyday heroes with AR technology to save lives in critical
                    moments.</p>
            </div>

            <div class="footer-section">
                <h4>Product</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#emergencies">Emergencies</a></li>
                    <li><a href="#download">Download</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Training Videos</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press Kit</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 ResQAR. All rights reserved. | Privacy Policy | Terms of Service</p>
            <p style="margin-top: 1rem; font-size: 0.9rem;">⚠️ This app is designed to assist, not replace, professional
                medical care. Always call 911 in emergencies.</p>
        </div>
    </footer>

    <script>
        // Scroll animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Dynamic stats counter
        const animateCounter = (element, target, suffix = '') => {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target + suffix;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + suffix;
                }
            }, 20);
        };

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumber = entry.target.querySelector('.stat-number');
                    const text = statNumber.textContent;
                    const value = parseInt(text);
                    const suffix = text.replace(/[0-9]/g, '');

                    if (!isNaN(value)) {
                        statNumber.textContent = '0' + suffix;
                        animateCounter(statNumber, value, suffix);
                    }
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.stat').forEach(stat => statsObserver.observe(stat));

        // Parallax effect for hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Mobile menu toggle (if needed)
        const createMobileMenu = () => {
            const nav = document.querySelector('nav');
            const navLinks = document.querySelector('.nav-links');

            if (window.innerWidth <= 768) {
                const menuButton = document.createElement('button');
                menuButton.innerHTML = '☰';
                menuButton.style.cssText = `
                    background: none;
                    border: none;
                    font-size: 2rem;
                    color: var(--dark);
                    cursor: pointer;
                    display: block;
                `;

                menuButton.addEventListener('click', () => {
                    navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
                    navLinks.style.flexDirection = 'column';
                    navLinks.style.position = 'absolute';
                    navLinks.style.top = '100%';
                    navLinks.style.left = '0';
                    navLinks.style.right = '0';
                    navLinks.style.background = 'white';
                    navLinks.style.padding = '2rem';
                    navLinks.style.boxShadow = '0 4px 10px rgba(0,0,0,0.1)';
                });

                if (!document.querySelector('.mobile-menu-btn')) {
                    menuButton.classList.add('mobile-menu-btn');
                    document.querySelector('.nav-container').insertBefore(menuButton, navLinks);
                }
            }
        };

        window.addEventListener('resize', createMobileMenu);
        createMobileMenu();

        // AR visualization animation
        const arOverlay = document.querySelector('.ar-overlay');
        if (arOverlay) {
            setInterval(() => {
                arOverlay.style.borderColor = arOverlay.style.borderColor === 'rgb(255, 59, 48)' ? '#34C759' : '#FF3B30';
            }, 2000);
        }

        // Interactive phone mockup
        const phoneMockup = document.querySelector('.phone-mockup');
        if (phoneMockup) {
            phoneMockup.addEventListener('mouseenter', () => {
                phoneMockup.style.transform = 'scale(1.05) rotate(0deg)';
            });

            phoneMockup.addEventListener('mouseleave', () => {
                phoneMockup.style.transform = 'scale(1) rotate(-2deg)';
            });
        }

        // Emergency card interaction
        document.querySelectorAll('.emergency-card').forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.boxShadow = '0 20px 60px rgba(0,0,0,0.2)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.boxShadow = '0 10px 40px rgba(0,0,0,0.1)';
            });
        });

        // Feature card stagger animation
        const featureCards = document.querySelectorAll('.feature-card');
        featureCards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });

        // CTA button hover effect
        document.querySelectorAll('.app-button').forEach(button => {
            button.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-5px) scale(1.05)';
            });

            button.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add page load animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.5s';
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add scroll progress indicator
        const createScrollIndicator = () => {
            const indicator = document.createElement('div');
            indicator.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                height: 4px;
                background: linear-gradient(90deg, #FF3B30 0%, #FF9500 100%);
                z-index: 10000;
                transition: width 0.1s;
            `;
            document.body.appendChild(indicator);

            window.addEventListener('scroll', () => {
                const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
                indicator.style.width = scrollPercent + '%';
            });
        };

        createScrollIndicator();

        // Toast notification system
        const showToast = (message, type = 'info') => {
            const toast = document.createElement('div');
            toast.style.cssText = `
                position: fixed;
                bottom: 2rem;
                right: 2rem;
                background: ${type === 'success' ? '#34C759' : '#007AFF'};
                color: white;
                padding: 1.5rem 2rem;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3);
                z-index: 10000;
                animation: slideInRight 0.3s ease-out;
                max-width: 300px;
            `;
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.animation = 'slideOutRight 0.3s ease-out';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        };

        // Demo button interactions
        document.querySelectorAll('.app-button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                showToast('Coming soon to App Store and Google Play!', 'info');
            });
        });

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }

            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .fade-in {
                animation: fadeInUp 0.6s ease-out forwards;
            }

            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 10px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #FF3B30 0%, #FF9500 100%);
                border-radius: 10px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(135deg, #FF9500 0%, #FF3B30 100%);
            }

            /* Loading animation */
            .loading {
                display: inline-block;
                width: 20px;
                height: 20px;
                border: 3px solid rgba(255,255,255,.3);
                border-radius: 50%;
                border-top-color: #fff;
                animation: spin 1s ease-in-out infinite;
            }

            @keyframes spin {
                to { transform: rotate(360deg); }
            }

            /* Pulse animation for emergency buttons */
            @keyframes pulse-glow {
                0%, 100% {
                    box-shadow: 0 0 0 0 rgba(255, 59, 48, 0.7);
                }
                50% {
                    box-shadow: 0 0 0 20px rgba(255, 59, 48, 0);
                }
            }

            .cta-button {
                animation: pulse-glow 2s infinite;
            }

            /* Shimmer effect */
            @keyframes shimmer {
                0% {
                    background-position: -1000px 0;
                }
                100% {
                    background-position: 1000px 0;
                }
            }

            .feature-card::after {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(
                    90deg,
                    transparent,
                    rgba(255, 255, 255, 0.3),
                    transparent
                );
                transition: left 0.5s;
            }

            .feature-card:hover::after {
                left: 100%;
            }

            /* Floating animation for icons */
            @keyframes float-icon {
                0%, 100% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-10px);
                }
            }

            .feature-icon {
                animation: float-icon 3s ease-in-out infinite;
            }

            .emergency-icon {
                animation: float-icon 2s ease-in-out infinite;
            }

            /* Gradient text animation */
            @keyframes gradient-shift {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
            }

            .section-title {
                background-size: 200% 200%;
                animation: gradient-shift 3s ease infinite;
            }
        `;
        document.head.appendChild(style);

        // Emergency simulation demo (for demonstration purposes)
        let demoMode = false;
        document.addEventListener('keydown', (e) => {
            if (e.key === 'd' && e.ctrlKey) {
                demoMode = !demoMode;
                if (demoMode) {
                    showToast('Demo Mode Activated - Press Space for simulation', 'success');
                    startDemoMode();
                } else {
                    showToast('Demo Mode Deactivated', 'info');
                }
            }
        });

        const startDemoMode = () => {
            const phoneScreen = document.querySelector('.phone-screen');
            if (!phoneScreen) return;

            document.addEventListener('keydown', (e) => {
                if (e.key === ' ' && demoMode) {
                    e.preventDefault();
                    simulateEmergencyDetection();
                }
            });
        };

        const simulateEmergencyDetection = () => {
            const phoneScreen = document.querySelector('.phone-screen');
            const emergencies = ['CPR Detected', 'Choking Detected', 'Unconscious Person'];
            const emergency = emergencies[Math.floor(Math.random() * emergencies.length)];

            phoneScreen.style.background = 'linear-gradient(135deg, #FF3B30 0%, #FF9500 100%)';
            phoneScreen.querySelector('h3').textContent = '🚨 ' + emergency;
            phoneScreen.querySelector('p').textContent = 'Initiating AR Guidance...';

            setTimeout(() => {
                phoneScreen.style.background = 'linear-gradient(135deg, #1e3c72 0%, #2a5298 100%)';
                phoneScreen.querySelector('h3').textContent = '📱 AR Mode Active';
                phoneScreen.querySelector('p').textContent = 'Detecting Emergency...';
            }, 3000);

            showToast('Emergency Simulation: ' + emergency, 'success');
        };

        // Performance optimization - lazy load images
        const lazyLoadImages = () => {
            const images = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        };

        lazyLoadImages();

        // Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                // Close any open modals or menus
                const navLinks = document.querySelector('.nav-links');
                if (navLinks.style.display === 'flex' && window.innerWidth <= 768) {
                    navLinks.style.display = 'none';
                }
            }
        });

        // Analytics tracking (placeholder)
        const trackEvent = (category, action, label) => {
            console.log(`Analytics: ${category} - ${action} - ${label}`);
            // In production, this would send to Google Analytics, Mixpanel, etc.
        };

        // Track button clicks
        document.querySelectorAll('a, button').forEach(element => {
            element.addEventListener('click', () => {
                trackEvent('User Interaction', 'Click', element.textContent.trim());
            });
        });

        // Track scroll depth
        let maxScroll = 0;
        window.addEventListener('scroll', () => {
            const scrollPercent = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            if (scrollPercent > maxScroll) {
                maxScroll = Math.floor(scrollPercent / 25) * 25; // Track in 25% increments
                trackEvent('Scroll Depth', 'Scroll', `${maxScroll}%`);
            }
        });

        console.log('%c🚑 SkillSync Emergency Response System', 'color: #FF3B30; font-size: 20px; font-weight: bold;');
        console.log('%cWebsite loaded successfully. Press Ctrl+D to activate demo mode.', 'color: #007AFF; font-size: 14px;');

    </script>
</body>

</html>