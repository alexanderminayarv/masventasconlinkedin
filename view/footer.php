<div class="boton-flotante">
    <a href="https://api.whatsapp.com/send?phone=924309626">
        <img src="<?php echo URL?>assets/img/iconos/whatsapp.png" alt="WhatsApp">
    </a>
</div>

<style>
.boton-flotante {
    position: fixed;
    bottom: 20px;
    right: 20px;
}

.boton-flotante a {
    display: flex;
    width: 70px;
    height: 70px;
    background-color: #25d366;
    border-radius: 100%;
    text-align: center;
    line-height: 70px;
    font-size: 24px;
    text-decoration: none;
    transition: background 0.3s;
}

.boton-flotante a:hover {
    background: #128c7e;
}
</style>

<!-- FOOTER -->
<section class="container  my-5  pt-5 footer__">
    <div class="row">
        <div class="col-12 col-md-3 text-center">
            <img class="logo__img" src="<?php echo URL?>assets/img/logo.png" alt="">
            <div class="redes__ mt-4 d-flex justify-content-center">
                <img src="<?php echo URL?>assets/img/facebook.png" alt="">
                <img src="<?php echo URL?>assets/img/linkedin.png" alt="">
                <img src="<?php echo URL?>assets/img/youtube.png" alt="">
                <img src="<?php echo URL?>assets/img/instagram.png" alt="">
                <img src="<?php echo URL?>assets/img/tik-tok.png" alt="">
            </div>
        </div>
        <div class="col-12 col-md-3 page__footer">
            <div class="row enlaces__footer">
                <a href="#">inicio</a>
                <a href="#">cursos</a>
            </div>
            <div class="row enlaces__footer">
                <a href="#">servicios</a>
                <a href="#">contáctanos</a>
            </div>
        </div>
        <div class="col-12 col-md-6 text-center">
            <p class="titulo__footer">mantengámonos conectados</p>
            <p class="descripcion__footer">Cada semana te enviaré un correo con mis mejores tips para mantenerte activo
                emocional y físicamente</p>
            <div class="correo__footer">
                <input class="input__footer" type="text" name="" id="" placeholder="nombre@ejemplo.com">
                <button type="button">suscribirse</button>
            </div>
        </div>
    </div>
</section>