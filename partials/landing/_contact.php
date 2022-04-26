<section id="contacto" class="landing__contact">
  <div class="l-main-wrapper">
    <h2>Contacto</h2>
    <p>Desbloquea tu potencial</p>
    <form id="contact-form" action="/contact_mailer.php" method="POST" class="col-wrapper">
      <div class="col-2">
        <label for="name">
          <input type="text" name="name" id="name" placeholder="Nombre." required>
        </label>
        <label for="email">
          <input type="text" name="email" id="email" placeholder="Correo electrónico." required>
        </label>
      </div>
      <div class="col-1">
        <label for="message">
          <textarea name="message" id="message" rows="1" placeholder="Mensaje." required></textarea>
        </label>
      </div>
      <div class="col-1">
        <div
          class="g-recaptcha"
          data-sitekey="6LdI0aIfAAAAAO1KuR8H6oZuP17uezuqSsomhkn2"
          data-callback='recaptchaSubmit'
          data-size='invisible'>
        </div>
        <button type="submit" class="link --black">
          Enviar
        </button>
      </div>
    </form>
  </div>
</section>