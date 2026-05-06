<nav class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed" data-header-hover="dark">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="demo-freelancer.html">
                        <img src="images/demo-freelancer-logo-white.png"
                            data-at2x="images/demo-freelancer-logo-white@2x.png" alt="" class="default-logo">
                        <img src="images/demo-freelancer-logo-white.png"
                            data-at2x="images/demo-freelancer-logo-white@2x.png" alt="" class="alt-logo">
                        <img src="images/demo-freelancer-logo-white.png"
                            data-at2x="images/demo-freelancer-logo-white@2x.png" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto col-lg-3 text-end lg-pe-0">
                    <div class="header-icon">
                        @foreach ($contacts as $contact )
                            <a href="mailto:{{ $contact->email }}" class="text-white">{{ $contact->email }}</a>
                        @endforeach

                        <div class="header-push-button hamburger-push-button icon sm-pe-15px">
                            <div class="push-button">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
