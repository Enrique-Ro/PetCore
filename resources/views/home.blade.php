@extends('layout')

@section('content')

<!-- HERO -->
<section class="hero" id="inicio">
    <div class="container hero-content">
        <h2>Bienvenido a PetCore Solutions</h2>
        <p>Nos apasiona el bienestar y la felicidad de tus mascotas. Te ofrecemos soluciones integrales para su salud, comodidad y cuidado.</p>
        <a href="#animales" class="btn">Explorar Servicios</a>
    </div>
</section>

<!-- NOSOTROS / OBJETIVOS -->
<section class="about" id="Nosotros">
    <div class="container">
        <div class="section-title">
            <h2>Quiénes Somos</h2>
            <p>
                En PetCore Solutions nos enfocamos en mejorar el cuidado de las mascotas mediante información confiable,
                recordatorios inteligentes, historial médico organizado y conexión directa con veterinarios certificados.
            </p>
        </div>

        <div class="about-grid">

            <div class="about-card">
                <i class="fas fa-notes-medical"></i>
                <h3>Historial Médico</h3>
                <p>Organiza consultas, tratamientos, vacunas y emergencias.</p>
            </div>

            <div class="about-card">
                <i class="fas fa-bell"></i>
                <h3>Recordatorios</h3>
                <p>Recibe alertas automáticas por correo sobre vacunas, citas y medicamentos.</p>
            </div>

            <div class="about-card">
                <i class="fas fa-user-md"></i>
                <h3>Veterinarios Verificados</h3>
                <p>Encuentra especialistas certificados cerca de ti.</p>
            </div>

            <div class="about-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Información Confiable</h3>
                <p>Contenido revisado por profesionales del cuidado animal.</p>
            </div>

        </div>
    </div>
</section>

<!-- OBJETIVOS ESPECÍFICOS -->
<section class="objectives">
    <div class="container">
        <div class="section-title">
            <h2>Objetivos Específicos</h2>
        </div>

        <ul class="objectives-list">
            <li><i class="fas fa-check-circle"></i> Facilitar el acceso a servicios veterinarios.</li>
            <li><i class="fas fa-check-circle"></i> Centralizar recordatorios (vacunas, citas y tratamientos).</li>
            <li><i class="fas fa-check-circle"></i> Promover herramientas tecnológicas para el cuidado animal.</li>
            <li><i class="fas fa-check-circle"></i> Verificar y ofrecer información confiable.</li>
            <li><i class="fas fa-check-circle"></i> Notificar por correo a los usuarios sobre eventos importantes.</li>
        </ul>
    </div>
</section>

<!-- ANIMALES -->
<section class="animals" id="animales">
    <div class="container">
        <div class="section-title">
            <h2>Tipos de Mascotas</h2>
            <p>Información especializada según el tipo de mascota que tengas.</p>
        </div>

        <div class="animals-grid">

            <div class="animal-card" data-animal="perro">
                <div class="animal-img" style="background-image:url('https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=662&q=80')"></div>
                <div class="animal-info">
                    <h3>Perros</h3>
                    <p>Cuidados esenciales, alimentación y entrenamiento.</p>
                </div>
            </div>

            <div class="animal-card" data-animal="gato">
                <div class="animal-img" style="background-image:url('https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?auto=format&fit=crop&w=843&q=80')"></div>
                <div class="animal-info">
                    <h3>Gatos</h3>
                    <p>Todo lo que necesitas para cuidar a tu felino favorito.</p>
                </div>
            </div>

            <div class="animal-card" data-animal="conejo">
                <div class="animal-img" style="background-image:url('https://images.unsplash.com/photo-1585110396000-c9ffd4e4b308?auto=format&fit=crop&w=687&q=80')"></div>
                <div class="animal-info">
                    <h3>Conejos</h3>
                    <p>Guía completa sobre cuidados y alimentación.</p>
                </div>
            </div>

            <div class="animal-card" data-animal="hamster">
                <div class="animal-img" style="background-image:url('https://s3.animalia.bio/animals/photos/full/1x1/koreahamsterjpg.webp?id=e6d91ba2b9d88c61088ec00505a7022f')"></div>
                <div class="animal-info">
                    <h3>Hámsters</h3>
                    <p>Cuidado básico y consejos para tu pequeño roedor.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONIOS -->
<section class="testimonials" id="testimonios">
    <div class="container">

        <div class="section-title">
            <h2>Experiencias de Nuestros Usuarios</h2>
            <p>Lo que otros dueños de mascotas dicen de PetCore Solutions.</p>
        </div>

        <div class="testimonials-container">

            <div class="testimonial">
                <div class="testimonial-header">
                    <div class="testimonial-avatar" style="background-image:url('https://images.unsplash.com/photo-1494790108755-2616b612b786?auto=format&fit=crop&w=687&q=80')"></div>
                    <div class="testimonial-info">
                        <h4>María González</h4>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>"Gracias a PetCore encontré un veterinario excelente cerca de mi casa. ¡Muy recomendados!"</p>
                <div class="testimonial-images">
                    <div class="testimonial-img" style="background-image:url('https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=662&q=80')"></div>
                </div>
            </div>

            <!-- Formulario -->
            <div class="comment-form">
                <h3>Comparte tu experiencia</h3>
                <form id="testimonial-form">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="comment">Tu experiencia</label>
                        <textarea id="comment" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Sube fotos de tu mascota</label>
                        <div class="file-upload">
                            <label for="pet-photos" class="file-upload-label">
                                <i class="fas fa-upload"></i> Seleccionar archivos
                            </label>
                            <input type="file" id="pet-photos" multiple hidden>
                            <span id="file-name">No se han seleccionado archivos</span>
                        </div>
                    </div>

                    <button type="submit" class="btn">Enviar Comentario</button>
                </form>
            </div>

        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="footer-content">

            <div class="footer-column">
                <h3>PetCore Solutions</h3>
                <p>Cuidando lo que más quieres... ¡tu familia peluda!</p>
                <div class="social-links">
                    <a><i class="fab fa-facebook-f"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-instagram"></i></a>
                    <a><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#quienes-somos">Quiénes Somos</a></li>
                    <li><a href="#veterinarios">Veterinarios</a></li>
                    <li><a href="#animales">Animales</a></li>
                    <li><a href="#testimonios">Testimonios</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contacto</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt"></i> Calle Mascotas 123</li>
                    <li><i class="fas fa-phone"></i> +52 000 000 0000</li>
                    <li><i class="fas fa-envelope"></i> contacto@petcore.com</li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 PetCore Solutions. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<!-- Modal Detalle Animal -->
<div class="modal" id="animal-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 id="modal-title"></h2>
            <button class="close-modal" id="close-modal">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="modal-body">
            <div id="modal-image" class="animal-detail-img"></div>

            <div class="animal-detail-info">
                <h3>Información</h3>

                <div class="info-section">
                    <h4><i class="fas fa-home"></i> Hábitat</h4>
                    <p id="modal-habitat"></p>
                </div>

                <div class="info-section">
                    <h4><i class="fas fa-utensils"></i> Alimentación</h4>
                    <p id="modal-alimentacion"></p>
                </div>

                <div class="info-section">
                    <h4><i class="fas fa-heart"></i> Salud</h4>
                    <p id="modal-salud"></p>
                </div>

                <div class="info-section">
                    <h4><i class="fas fa-lightbulb"></i> Consejos</h4>
                    <p id="modal-consejos"></p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection