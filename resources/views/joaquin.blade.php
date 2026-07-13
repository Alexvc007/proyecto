<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome para íconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <style>
            /* Reset básico */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                min-height: 100vh;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                padding: 20px;
            }

            /* Tarjeta principal */
            .card {
                background: white;
                border-radius: 20px;
                padding: 40px;
                max-width: 550px;
                width: 100%;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            }

            /* Imagen de perfil */
            .profile-image {
                width: 130px;
                height: 130px;
                border-radius: 50%;
                margin: 0 auto 20px;
                display: block;
                border: 4px solid #667eea;
                background: #667eea;
            }

            .profile-image .placeholder {
                width: 100%;
                height: 100%;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 50px;
                color: white;
            }

            /* Títulos */
            h1 {
                font-size: 2rem;
                color: #2d3748;
                text-align: center;
                margin-bottom: 5px;
            }

            .subtitle {
                text-align: center;
                color: #718096;
                font-size: 1rem;
                margin-bottom: 5px;
            }

            .subtitle i {
                margin-right: 8px;
                color: #667eea;
            }

            /* Línea divisora */
            .divider {
                width: 60px;
                height: 3px;
                background: #667eea;
                margin: 20px auto;
                border-radius: 10px;
            }

            /* Detalles personales */
            .details {
                margin: 20px 0;
            }

            .details p {
                padding: 10px 0;
                border-bottom: 1px solid #e2e8f0;
                color: #4a5568;
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .details p:last-child {
                border-bottom: none;
            }

            .details p i {
                width: 25px;
                color: #667eea;
            }

            /* Desplegables */
            .accordion-item {
                margin: 10px 0;
                border-radius: 10px;
                border: 1px solid #e2e8f0;
                overflow: hidden;
            }

            .accordion-header {
                width: 100%;
                padding: 14px 18px;
                background: #f7fafc;
                border: none;
                color: #2d3748;
                font-size: 1rem;
                font-weight: 600;
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                align-items: center;
                transition: background 0.3s ease;
            }

            .accordion-header:hover {
                background: #edf2f7;
            }

            .accordion-header i:first-child {
                margin-right: 12px;
                color: #667eea;
                width: 20px;
            }

            .accordion-header .arrow {
                transition: transform 0.3s ease;
                color: #a0aec0;
            }

            .accordion-item.active .arrow {
                transform: rotate(180deg);
            }

            .accordion-content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease;
                padding: 0 18px;
            }

            .accordion-item.active .accordion-content {
                max-height: 300px;
                padding: 0 18px 18px;
            }

            .accordion-content ul {
                list-style: none;
                padding: 0;
            }

            .accordion-content ul li {
                padding: 8px 0;
                color: #4a5568;
                display: flex;
                align-items: center;
                gap: 10px;
                border-bottom: 1px solid #f7fafc;
            }

            .accordion-content ul li:last-child {
                border-bottom: none;
            }

            .accordion-content ul li i {
                color: #48bb78;
                width: 20px;
            }

            /* Responsive */
            @media (max-width: 480px) {
                .card {
                    padding: 25px;
                }
                h1 {
                    font-size: 1.5rem;
                }
                .profile-image {
                    width: 100px;
                    height: 100px;
                }
                .profile-image .placeholder {
                    font-size: 40px;
                }
            }
        </style>
    </head>
    <body>
        <div class="card">
            <!-- Foto de perfil -->
            <div class="profile-image">
                <div class="placeholder">
                    <i class="fas fa-user"></i>
                </div>

            </div>
            <h1>Joaquin Marcos Maita Flores</h1>
            <p class="subtitle"><i class="fas fa-graduation-cap"></i> Estudiante de Ingeniería en Sistemas</p>
            <p class="subtitle"><i class="fas fa-university"></i> UPDS - Universidad Privada Domingo Savio</p>

            <div class="divider"></div>

            <!-- Detalles -->
            <div class="details">
                <p><i class="fas fa-user"></i> <strong>Joaquin Maita</strong></p>
                <p><i class="fas fa-map-marker-alt"></i> Bolivia</p>
                <p><i class="fas fa-envelope"></i> sc.joaquin.maita.f@upds.edu.bo</p>
                <p><i class="fas fa-phone"></i> +591 79572061</p>
            </div>

            <div class="divider"></div>

            <!-- Desplegable: Habilidades -->
            <div class="accordion-item active">
                <button class="accordion-header" onclick="toggleAccordion(this)">
                    <span><i class="fas fa-code"></i> Habilidades Técnicas</span>
                    <i class="fas fa-chevron-down arrow"></i>
                </button>
                <div class="accordion-content">
                    <ul>
                        <li><i class="fas fa-check"></i> HTML BASICO, CSS BASICO</li>
                        <li><i class="fas fa-check"></i> PHP </li>
                        <li><i class="fas fa-check"></i> Python BASICOo</li>
                        <li><i class="fas fa-check"></i> Git & GitHub</li>
                    </ul>
                </div>
            </div>

            <!-- Desplegable: Conocimientos -->
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this)">
                    <span><i class="fas fa-brain"></i> Conocimientos</span>
                    <i class="fas fa-chevron-down arrow"></i>
                </button>
                <div class="accordion-content">
                    <ul>
                        <li><i class="fas fa-check"></i> DISEÑO GRAFICO</li>
                        <li><i class="fas fa-check"></i> REPARACION DE COMPUTADORAS</li>
                        <li><i class="fas fa-check"></i> OFIMATICA</li>
                    </ul>
                </div>
            </div>

            <!-- Desplegable: Idiomas -->
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this)">
                    <span><i class="fas fa-language"></i> Idiomas</span>
                    <i class="fas fa-chevron-down arrow"></i>
                </button>
                <div class="accordion-content">
                    <ul>
                        <li><i class="fas fa-check"></i> Español (Nativo)</li>
                        <li><i class="fas fa-check"></i> Inglés (Básico)</li>
                        <li><i class="fas fa-check"></i> Portugués (Muy Básico)</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            function toggleAccordion(button) {
                const item = button.closest('.accordion-item');
                const isActive = item.classList.contains('active');

                // Cerrar todos los otros desplegables
                document.querySelectorAll('.accordion-item').forEach(el => {
                    if (el !== item) {
                        el.classList.remove('active');
                    }
                });

                // Alternar el actual
                if (isActive) {
                    item.classList.remove('active');
                } else {
                    item.classList.add('active');
                }
            }
        </script>
    </body>
</html>