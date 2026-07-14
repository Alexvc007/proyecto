<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Gabriel Ferrufino Vasquez - Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-section .subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Content Section */
        .content-section {
            background: white;
            padding: 60px 0;
            margin-top: -30px;
            position: relative;
            z-index: 10;
            border-radius: 20px 20px 0 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
            color: #333;
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }

        .card-item {
            background: #f8f9fa;
            border: none;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .card-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
        }

        .card-item h3 {
            color: #667eea;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .card-item p {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .skill-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .skill-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-top: 60px;
        }

        .social-links {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .social-icon:hover {
            background: white;
            color: #667eea;
            transform: translateY(-5px);
        }

        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
            color: white;
        }

        /* Footer */
        footer {
            background: #1a1a2e;
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 60px;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section .subtitle {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="container">
                <img src="https://via.placeholder.com/150/667eea/ffffff?text=JG" alt="Foto de perfil" class="profile-img">
                <h1>Juan Gabriel Ferrufino Vasquez</h1>
                <p class="subtitle">Desarrollador | Innovador | Profesional</p>
                <a href="#contact" class="btn btn-custom">Contáctame</a>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <!-- About Section -->
            <div class="section-title">
                <i class="fas fa-user"></i> Acerca de Mí
            </div>
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card-item">
                        <p>
                            Soy Juan Gabriel Ferrufino Vasquez, un profesional dedicado y apasionado por la tecnología y la innovación. 
                            Con experiencia en desarrollo de software, me enfoco en crear soluciones que generen impacto real. 
                            Siempre buscando aprender y mejorar mis habilidades para ofrecer lo mejor a cada proyecto.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="section-title">
                <i class="fas fa-star"></i> Habilidades
            </div>
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto">
                    <div class="skills-grid">
                        <div class="skill-badge">
                            <i class="fas fa-code"></i><br>Desarrollo Web
                        </div>
                        <div class="skill-badge">
                            <i class="fab fa-laravel"></i><br>Laravel
                        </div>
                        <div class="skill-badge">
                            <i class="fab fa-php"></i><br>PHP
                        </div>
                        <div class="skill-badge">
                            <i class="fab fa-js"></i><br>JavaScript
                        </div>
                        <div class="skill-badge">
                            <i class="fab fa-react"></i><br>React
                        </div>
                        <div class="skill-badge">
                            <i class="fab fa-bootstrap"></i><br>Bootstrap
                        </div>
                        <div class="skill-badge">
                            <i class="fas fa-database"></i><br>Bases de Datos
                        </div>
                        <div class="skill-badge">
                            <i class="fab fa-git"></i><br>Git
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience Section -->
            <div class="section-title">
                <i class="fas fa-briefcase"></i> Experiencia
            </div>
            <div class="row mb-5">
                <div class="col-lg-10 mx-auto">
                    <div class="card-item">
                        <h3><i class="fas fa-code-branch"></i> Desarrollador Full Stack</h3>
                        <p>
                            Con experiencia en el desarrollo completo de aplicaciones web, desde el frontend hasta el backend. 
                            Utilizo tecnologías modernas como Laravel, React y bases de datos relaciones para crear soluciones robustas y escalables.
                        </p>
                    </div>
                    <div class="card-item">
                        <h3><i class="fas fa-cogs"></i> Soluciones Técnicas</h3>
                        <p>
                            Especializado en resolver problemas complejos, optimizar procesos y implementar mejoras en infraestructuras existentes. 
                            Siempre enfocado en la eficiencia y la calidad del código.
                        </p>
                    </div>
                    <div class="card-item">
                        <h3><i class="fas fa-lightbulb"></i> Innovación</h3>
                        <p>
                            Comprometido con mantenerse actualizado en las últimas tendencias y tecnologías del desarrollo de software. 
                            Busco constantemente formas innovadoras de mejorar la experiencia del usuario.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div id="contact" class="contact-section">
                <div class="container">
                    <h2 class="section-title" style="color: white;">
                        <i class="fas fa-envelope"></i> Contacto
                    </h2>
                    <p style="font-size: 1.1rem; margin-bottom: 30px;">
                        ¿Quieres trabajar conmigo o necesitas más información? ¡No dudes en contactarme!
                    </p>
                    <div class="social-links">
                        <div class="social-icon" title="Email">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="social-icon" title="LinkedIn">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="social-icon" title="GitHub">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="social-icon" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="social-icon" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </div>
                    <a href="mailto:juan.gabriel@example.com" class="btn btn-custom" style="margin-top: 30px;">
                        <i class="fas fa-paper-plane"></i> Enviar Email
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2026 Juan Gabriel Ferrufino Vasquez. Todos los derechos reservados.</p>
            <p style="font-size: 0.9rem; margin-top: 10px; opacity: 0.7;">
                Diseñado con <i class="fas fa-heart" style="color: #e74c3c;"></i> usando Bootstrap
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scroll para links internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animación de hover en social icons
        document.querySelectorAll('.social-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                this.style.animation = 'pulse 0.5s';
            });
        });

        // Estilos CSS para animación pulse
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.2); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
