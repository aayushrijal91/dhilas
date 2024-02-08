<section class="common-form">
    <div class="container">
        <div class="bg-tertiary py-4 px-3 px-md-5 form">
            <div class="row gy-5 ">
                <div class="col-12 col-md-6 border-end border-primary">
                    <img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['alt'] ?>">
                    <p class="text-white pt-4">Email: <?= get_field('general', 'options')['email_address'] ?></p>
                    <p class="text-white pt-2"><?= get_field('general', 'options')['address'] ?></p>

                    <p class="text-primary fs-24 fw-700 pt-5 pb-3">Contact Details</p>

                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Suburb">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <p class="text-primary fs-24 fw-700 pb-3">How to Contact Me</p>

                    <div class="row g-3 justify-content-end">
                        <div class="col-12 col-lg-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Other">
                        </div>

                        <div class="col-12 col-lg-6">
                            <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                        </div>
                    </div>

                    <p class="text-primary fs-24 fw-700 py-3">Service Required</p>

                    <div class="row g-3 justify-content-end">
                        <div class="col-12 col-lg-6">
                            <select class="form-control">
                                <option selected>Excavation</option>
                            </select>
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Other">
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center pt-5 gy-4">
                <div class="col-auto d-flex gap-x-2 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                        <path d="M10.3105 5.16012H9.20463V3.20076C9.20463 2.42128 8.85511 1.67372 8.23295 1.12254C7.6108 0.571367 6.76697 0.261719 5.88711 0.261719C5.00725 0.261719 4.16343 0.571367 3.54127 1.12254C2.91911 1.67372 2.56959 2.42128 2.56959 3.20076V5.16012H1.46375C1.17046 5.16012 0.889188 5.26333 0.681803 5.44706C0.474418 5.63079 0.35791 5.87997 0.35791 6.1398V11.0382C0.35791 11.298 0.474418 11.5472 0.681803 11.7309C0.889188 11.9147 1.17046 12.0179 1.46375 12.0179H10.3105C10.6038 12.0179 10.885 11.9147 11.0924 11.7309C11.2998 11.5472 11.4163 11.298 11.4163 11.0382V6.1398C11.4163 5.87997 11.2998 5.63079 11.0924 5.44706C10.885 5.26333 10.6038 5.16012 10.3105 5.16012ZM6.99295 5.16012H4.78127V3.20076C4.78127 2.94093 4.89778 2.69175 5.10516 2.50802C5.31255 2.32429 5.59382 2.22108 5.88711 2.22108C6.1804 2.22108 6.46167 2.32429 6.66906 2.50802C6.87644 2.69175 6.99295 2.94093 6.99295 3.20076V5.16012Z" fill="#7CC5E5" />
                    </svg>

                    <p class="text-primary"><span class="fw-700">Your privacy is our priority</span><span class="px-4">|</span>All information will remain 100% private and secure</p>
                </div>
                <div class="col-8 col-md-6 col-lg-3">
                    <button class="btn btn-primary w-100 rounded-0 fs-24 fw-500" type="submit">Book A Quote</button>
                </div>
            </div>
        </div>
    </div>
</section>