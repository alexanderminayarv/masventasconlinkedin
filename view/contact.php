<!-- ENCABEZADO DE CONTACTO -->

<div class="container-fluid mb-sm-2 mb-md-5 ">
    <div class="row">
        <div class="col-12 col-sm contenedor__nav">
            <h1 class="contenedor__titulo">contáctanos</h1>
            <!-- <img src="./contactenos-1.jpg" alt="" 
            style="width: 100%; height: 500px; object-fit: cover;"> -->
        </div>
    </div>
</div>



<div class="container nav__contact  " data-aos="zoom-in" data-aos-duration="2000">
    <div class="row nav__contact__">
        <div class="col-sm-12 col-md-5 col-lg-5 contact__imagen">

            <!-- <img src="<?php echo URL?>assets/img/contacto.jpg" class="img-fluid card__img" alt="..."> -->
            <div class="card-img-overlay text-center content__contenido_padre">
                <div class="content__contenido">
                    <h5 class="mb-2">Solicita una llamada con nuestro equipo</h5>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="nav__separador__blanco"></div>
                    </div>
                    <p class="mb-2 contenedor__img-texto">LinkedIn es una mina de oportunidades para vender o venderte,
                        quieres
                        comenzara
                        a aprovecharlas?</p>
                </div>
            </div>

        </div>
        <div class="vh-100 col-sm-12 col-md-7 col-lg-7  px-5 ms-auto contact__input">
            <h5 class="text-center">Queremos que tengas superpoderes <br>en <strong>LinkedIn</strong>
            </h5>
            <div class="row mt-5">
                <div class="contact-form">
                    <form class="row g-3 needs-validation" id="formulario" name="formulario" method="POST" novalidate>
                        <div class="col-md-6">
                            <input type="text" placeholder="Nombres" class="form-control" id="name" name="name"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                            <div class="invalid-feedback">
                                Redacte sus Nombres y Apellidos ...
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder="Celular" class="form-control" id="phone" name="phone"
                                required>
                            <div class="invalid-feedback">
                                Redacte su celular ...
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group has-validation">
                                <input type="text" placeholder="Correo" id="email" name="email"
                                    aria-describedby="inputGroupPrepend" class="form-control" required>
                                <div class="invalid-feedback">
                                    Redacte su correo ...
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <select class="form-select  from__asunto" name="subject" id="subject" required>
                                <option selected disabled value="">Seleccione el asunto</option>
                                <option value="1">Marca Empleadora</option>
                                <option value="2">Marca Personal</option>
                                <option value="3">Negocios</option>
                                <option value="4">Empleabilidad</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleccione el asunto
                            </div>
                        </div>

                        <div class="col-md-12">
                            <textarea type="text" placeholder="Mensaje..." class="form-control" col="10" id="message"
                                name="message" rows="8" required></textarea>
                            <div class="invalid-feedback">
                                Redacte su Mensaje ...
                            </div>
                        </div>
                        <div class="col-md-12 text-center mb-sm-3 mb-md-5 ">

                            <button class="btn contact__buscar" type="submit">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>