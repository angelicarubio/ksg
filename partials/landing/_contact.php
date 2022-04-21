<section id="contacto" class="landing__contact">
  <div class="l-main-wrapper">
    <h2>Contacto</h2>
    <p>Desbloquea tu potencial</p>
    <form action="/contact_mailer.php" method="POST" class="col-wrapper">
      <div class="col-2">
        <label for="name">
          <input type="text" name="name" id="name" placeholder="Nombre.">
        </label>
        <label for="email">
          <input type="text" name="email" id="email" placeholder="Correo electrónico.">
        </label>
      </div>
      <div class="col-1">
        <label for="message">
          <textarea name="message" id="message" rows="1" placeholder="Mensaje."></textarea>
        </label>
      </div>
      <div class="col-1">
        <button type="submit" class="link --black">Enviar</button>
      </div>
    </form>
  </div>
</section>