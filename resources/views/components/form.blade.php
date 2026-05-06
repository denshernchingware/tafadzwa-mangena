
<div class="section">
  <div class="blob"></div>

  <div class="heading">
    <h2 class="text-dark-gray fw-700 ls-minus-1px">Text</h2>
    <p>Text who ever you want where ever you want any time you want —<br>enjoy contacting friends and families.</p>
  </div>

  <form action="#" method="POST">

    <div class="field">
      <label for="first-name">First name</label>
      <input type="text" id="first-name" name="first-name" autocomplete="given-name"/>
    </div>

    <div class="field">
      <label for="last-name">Last name</label>
      <input type="text" id="last-name" name="last-name" autocomplete="family-name"/>
    </div>

    <div class="field full">
      <label for="company">Company</label>
      <input type="text" id="company" name="company" autocomplete="organization"/>
    </div>

    <div class="field full">
      <label for="email" class="red">Email</label>
      <input type="email" id="email" name="email" autocomplete="email"/>
    </div>

    <div class="field full">
      <label for="phone-number" class="green">Phone number</label>
      <div class="phone-row">
        <select id="country" name="country">
          <option>US</option>
          <option>CA</option>
          <option>EU</option>
          <option>UK</option>
          <option>YE</option>
          <option>MA</option>
        </select>
        <input type="tel" id="phone-number" name="phone-number" autocomplete="tel"/>
      </div>
    </div>

    <div class="field full">
      <label for="message" class="green">Message</label>
      <textarea id="message" name="message" rows="4"></textarea>
    </div>

    <div class="toggle-row">
      <label class="switch">
        <input type="checkbox" id="privacy-switch"/>
        <span class="slider"></span>
      </label>
      <span class="toggle-label">
        By selecting this, free palestine —
        <a href="#">privacy&nbsp;policy</a>.
      </span>
    </div>

    <div class="submit-wrap">
      <button type="submit" class="btn-submit">Let's talk</button>
    </div>

  </form>
</div>
