<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0a0e27;
            --secondary: #ff6b35;
            --accent: #00d9ff;
            --text: #ffffff;
            --text-secondary: #a8b2d1;
            --input-bg: #1a1f3a;
            --border: #2a3555;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: linear-gradient(135deg, #0a0e27 0%, #1a1f3a 50%, #0f1629 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,107,53,0.15) 0%, transparent 70%);
            top: -100px;
            right: -100px;
            border-radius: 50%;
            animation: float 20s ease-in-out infinite;
        }

        body::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(0,217,255,0.1) 0%, transparent 70%);
            bottom: -100px;
            left: -100px;
            border-radius: 50%;
            animation: float 15s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            50% {
                transform: translate(50px, 50px) scale(1.1);
            }
        }

        .container {
            max-width: 550px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .form-wrapper {
            background: rgba(26, 31, 58, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 50px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--accent), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .form-header p {
            color: var(--text-secondary);
            font-size: 1rem;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 30px;
            animation: fadeIn 0.8s ease-out forwards;
            opacity: 0;
        }

        .form-group:nth-child(1) {
            animation-delay: 0.1s;
        }

        .form-group:nth-child(2) {
            animation-delay: 0.2s;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.3s;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        label {
            display: block;
            color: var(--text);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        input[type="email"],
        textarea {
            width: 100%;
            padding: 16px 20px;
            background: var(--input-bg);
            border: 2px solid var(--border);
            border-radius: 12px;
            color: var(--text);
            font-size: 1rem;
            font-family: 'Outfit', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        input[type="email"]:focus,
        textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(0, 217, 255, 0.1);
            transform: translateY(-2px);
        }

        input[type="email"]::placeholder,
        textarea::placeholder {
            color: var(--text-secondary);
            opacity: 0.6;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            border: none;
            border-radius: 12px;
            color: var(--text);
            font-size: 1.1rem;
            font-weight: 700;
            font-family: 'Outfit', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.3);
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 107, 53, 0.5);
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        .success-message {
            display: none;
            background: linear-gradient(135deg, rgba(0, 217, 255, 0.2), rgba(255, 107, 53, 0.2));
            border: 1px solid var(--accent);
            border-radius: 12px;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            color: var(--text);
            font-weight: 600;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-message.show {
            display: block;
        }

        .char-count {
            text-align: right;
            color: var(--text-secondary);
            font-size: 0.85rem;
            margin-top: 8px;
            font-family: 'Space Mono', monospace;
        }

        @media (max-width: 600px) {
            .form-wrapper {
                padding: 40px 30px;
            }

            .form-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="form-header">
                <h1>Contáctame</h1>
                <p>Déjame tu mensaje y te responderé pronto</p>
            </div>

            <form method="GET" action= "/contacto">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="tu@email.com" 
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        placeholder="Escribe tu mensaje aquí..." 
                        required
                        maxlength="500"
                    ></textarea>
                    <div class="char-count">
                        <span id="charCount">0</span> / 500
                    </div>
                </div>

                <button type="submit" class="submit-btn">Enviar Mensaje</button>
            </form>

            <div class="success-message" id="successMessage">
                ✓ ¡Mensaje enviado con éxito! Te responderé pronto.
            </div>
        </div>
    </div>

    
</body>
</html>