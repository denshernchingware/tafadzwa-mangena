<footer id="contact" class="position-relative overflow-hidden pb-0">
        <img src="images/demo-freelancer-03.png" class="position-absolute top-0px right-minus-100px" alt="">
        <div class="container position-relative">
            <img src="images/demo-freelancer-04.png"
                class="position-absolute top-20px right-minus-100px d-none d-md-block" alt="">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <div class="fs-70 md-fs-50 sm-fs-40 ls-minus-3px fw-700 text-black mb-10px sm-ls-minus-1px">Create
                        something great.</div>
                    <div class="d-flex align-items-center">
                        <i
                            class="bi bi-envelope icon-extra-large md-icon-large me-10px text-base-color align-middle"></i>
                            @foreach ($contacts as $contact )
                            <a href="mailto:brian@domain.com"
                            class="fs-50 sm-fs-40 text-base-color fw-600 align-middle ls-minus-3px sm-ls-minus-1px">{{ $contact->email }}</a>
                            @endforeach

                    </div>
                    @foreach ($contacts as $contact)
                    <div class="d-flex align-items-center mt-3">
                        <i class="bi bi-telephone icon-extra-large md-icon-large me-10px text-base-color align-middle"></i>
                        <a href="tel:{{ $contact->phone_one }}" class="fs-30 sm-fs-25 text-base-color fw-600 align-middle">{{ $contact->phone_one }}</a>
                        @if($contact->phone_two)
                        <span class="mx-2">/</span>
                        <a href="tel:{{ $contact->phone_two }}" class="fs-30 sm-fs-25 text-base-color fw-600 align-middle">{{ $contact->phone_two }}</a>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row g-0 align-items-center border-top border-2 border-color-dark-gray pt-30px mt-6 mb-3">
                <div class="col-md-7 last-paragraph-no-margin sm-mb-20px">
                    <p>Development is heart of our business. Our skilled designers and developers make sure to deliver
                        tried-tested efficient, scalable.</p>
                </div>
                <div class="col-md-5 elements-social social-text-style-01 text-start text-md-end sm-mb-20px">



                    <ul class="medium-icon dark fw-600">
                        @foreach ($contacts as $contact )
                        <li><a class="facebook" href="{{ $contact->facebook_link }}" target="_blank">Fb.</a></li>
                        <li><a class="linkedin" href="{{ $contact->linkedin_link }}" target="_blank">ld.</a></li>
                        <li><a class="github" href="{{ $contact->github_link }}" target="_blank">Gb.</a></li>

                         @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>
