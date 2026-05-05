 <section class=bg-gradient-very-light-gray id=contact>
        <div class=container>
            <div
                class="row row-cols-1 row-cols-lg-2 row-cols-md-1 g-0 justify-content-center box-shadow-extra-large border-radius-10px overflow-hidden">
                <div class="col contact-form-style-04">
                    <div class="h-100 md-h-450px sm-h-350px w-100 cover-background position-relative"
                        style="background-image: url('images/contact.png')">

                    </div>
                </div>
                <div class="col contact-form-style-04">
                    <div class="p-13 md-p-10 bg-white">
                        <h3 class="d-inline-block fw-600 text-dark-gray mb-8 ls-minus-1px">How we can help?</h3>
                        <form id=contactForm action="/contacts" method=post>
                            <input type=hidden name=_token value=F4Csc2daWVosHy66E2g9vpF0hRoIS3Vqs9yn69I0
                                autocomplete=off> <label class="text-dark-gray mb-10px fw-500">Name<span
                                    class=text-red>*</span></label>
                            <input class="mb-20px bg-very-light-gray form-control required" required type=text
                                name=name placeholder="Enter your name">
                            <label class="text-dark-gray mb-10px fw-500">Email address<span
                                    class=text-red>*</span></label>
                            <input class="mb-20px bg-very-light-gray form-control required" required type=email
                                name=email placeholder="Enter your email">
                            <label class="text-dark-gray mb-10px fw-500">Phone<span class=text-red>*</span></label>
                            <input class="mb-20px bg-very-light-gray form-control required" required type=text
                                name=phone placeholder="Enter your phone number">
                            <label class="text-dark-gray mb-10px fw-500">Message<span class=text-red>*</span></label>
                            <textarea class="mb-20px bg-very-light-gray form-control required" required name=message
                                placeholder="Enter your message"></textarea>
                            <div class="position-relative terms-condition-box text-start d-inline-block mb-20px">
                                <label>
                                    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>
                                    <div data-sitekey=6LfR0vsqAAAAAKyKVameKtTvkQC9eCmP6M8hiV7_ class=g-recaptcha></div>
                                </label>
                            </div>
                            <button id=submitBtn
                                class="btn btn-large btn-round-edge btn-dark-gray btn-box-shadow w-100 mb-20px"
                                type=submit>
                                Submit
                            </button>
                            <div class="form-results mt-20px d-none"></div>
                        </form>
                        <script>
                            document.getElementById('submitBtn').addEventListener('click', function(event) {
                                event.preventDefault(); // Prevent default form submission

                                var recaptcha = document.querySelector('.g-recaptcha-response').value;

                                if (!recaptcha) {
                                    alert('Please complete the reCAPTCHA verification.');
                                } else {
                                    document.getElementById('contactForm').submit(); // Submit the form if reCAPTCHA is selected
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
