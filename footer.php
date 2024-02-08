<footer class="bg-dark-grey">
    <div class="container">
        <div class="row align-items-center pt-5 pb-4">
            <div class="col-lg-4 text-center">
                <a href="<?= home_url() ?>"><img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['url'] ?>"></a>

                <div class="row align-items-center justify-content-center gx-2 pt-3">
                    <div class="col-auto">
                        <p class="text-uppercase text-white fs-12 fw-700">Follow us</p>
                    </div>

                    <div class="col-auto">
                        <a href="" target="_blank">
                            <img src="http://localhost/dhilas/wp-content/uploads/2024/02/facebook.png" alt="">
                        </a>
                    </div>

                    <div class="col-auto">
                        <a href="" target="_blank">
                            <img src="http://localhost/dhilas/wp-content/uploads/2024/02/twitter.png" alt="">
                        </a>
                    </div>

                    <div class="col-auto">
                        <a href="" target="_blank">
                            <img src="http://localhost/dhilas/wp-content/uploads/2024/02/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8 pt-5 pt-lg-0">
                <div class="row gy-4">
                    <div class="col-6 col-md-3 col-lg-4">
                        <p class="fs-22 text-primary fw-700 pb-4">Quick Links</p>

                        <ul class="ps-0 d-flex flex-column gap-3">
                            <li><a href="" class="text-white">Home</a></li>
                            <li><a href="" class="text-white">About</a></li>
                            <li><a href="" class="text-white">Services</a></li>
                            <li><a href="" class="text-white">Gallery</a></li>
                            <li><a href="" class="text-white">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-3 col-lg-4">
                        <p class="fs-22 text-primary fw-700 pb-4">Services</p>

                        <ul class="ps-0 d-flex flex-column gap-3">
                            <li><a href="" class="text-white">Demolition</a></li>
                            <li><a href="" class="text-white">Asbestos Removal</a></li>
                            <li><a href="" class="text-white">Builk Details Excavation</a></li>
                            <li><a href="" class="text-white">Traffic Management</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md col-lg-4">
                        <p class="fs-22 text-primary fw-700 pb-4">Reach us</p>

                        <ul class="ps-0 d-flex flex-column gap-4">
                            <li>
                                <a href="mailto:<?= get_field('general', 'options')['email_address'] ?>" class="text-white">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7464 0.1875C18.2069 0.1875 19.6119 0.764733 20.6455 1.80048C21.6801 2.83406 22.2585 4.22813 22.2585 5.68755V14.2916C22.2585 17.3302 19.7862 19.7916 16.7464 19.7916H5.98702C2.94728 19.7916 0.476074 17.3302 0.476074 14.2916V5.68755C0.476074 2.64891 2.93639 0.1875 5.98702 0.1875H16.7464ZM18.4792 7.31035L18.5663 7.22322C18.8266 6.90738 18.8266 6.44995 18.5544 6.1341C18.403 5.97182 18.1949 5.87271 17.9782 5.85093C17.7495 5.83895 17.5317 5.91628 17.3672 6.06876L12.4564 9.98958C11.8247 10.5134 10.9196 10.5134 10.2781 9.98958L5.3771 6.06876C5.03839 5.81826 4.57007 5.85093 4.28798 6.14499C3.99392 6.43906 3.96125 6.90738 4.21066 7.23411L4.35333 7.3757L9.30882 11.2421C9.91873 11.7213 10.6582 11.9827 11.4326 11.9827C12.2048 11.9827 12.9574 11.7213 13.5662 11.2421L18.4792 7.31035Z" fill="#7CC5E5" />
                                    </svg>
                                    <?= get_field('general', 'options')['email_address'] ?>
                                </a>
                            </li>

                            <li>
                                <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="text-white">
                                    <svg width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.752377 9.84452C0.752377 9.17074 0.760491 8.49696 0.768642 7.82006C0.772775 7.47688 0.776917 7.13291 0.780016 6.78772C0.780016 3.07894 3.10171 0.374849 6.30787 0.374849H10.4261C13.6323 0.374849 15.954 3.07894 15.954 6.78772C15.9816 8.27337 15.9908 9.75901 15.9908 11.2554C15.9908 12.7517 15.9816 14.2587 15.954 15.7444C15.954 19.4531 13.6323 22.1572 10.4261 22.1572H6.30787C3.10171 22.1572 0.780016 19.4531 0.780016 15.7337C0.76159 14.3335 0.743164 12.9013 0.743164 11.4477L0.752377 9.84452ZM9.76104 19.5869V19.7612C9.76104 20.4948 9.14764 21.0681 8.36696 21.0681C7.60487 21.0681 6.97289 20.4948 6.97289 19.7612V19.5869C6.97289 18.8724 7.60487 18.28 8.36696 18.28C9.14764 18.28 9.76104 18.8724 9.76104 19.5869ZM2.9396 7.39247C2.93378 7.83246 2.92798 8.27042 2.92798 8.70837L2.9214 9.75046C2.9214 10.6953 2.93456 11.6262 2.94772 12.5363C2.94772 14.954 4.60608 16.7116 6.89619 16.7116H9.8378C12.1279 16.7116 13.7863 14.954 13.7863 12.5433C13.806 11.5776 13.8126 10.598 13.8126 9.62541C13.8126 8.6528 13.806 7.68712 13.7863 6.72145C13.7863 4.31075 12.1279 2.55309 9.8378 2.55309H6.89619C4.60608 2.55309 2.94772 4.31075 2.94772 6.72145C2.94551 6.94582 2.94255 7.16941 2.9396 7.39247Z" fill="#7CC5E5" />
                                    </svg>
                                    <?= get_field('general', 'options')['phone_number'] ?>
                                </a>
                            </li>

                            <li>
                                <p class="text-white">
                                    <svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.39956 0.654319C11.861 0.66521 14.2135 1.64542 15.9343 3.36622C17.666 5.09792 18.6353 7.43953 18.6244 9.86826V9.92272C18.559 13.2227 16.7075 16.2614 14.3986 18.6357C13.0917 19.9753 11.6431 21.1624 10.0639 22.1644C9.63916 22.5238 9.01837 22.5238 8.59361 22.1644C6.25201 20.6396 4.18268 18.7228 2.50544 16.4901C1.03513 14.5515 0.196505 12.2208 0.109375 9.79203C0.131157 4.72762 4.29159 0.643427 9.39956 0.654319ZM9.39957 12.9181C10.1728 12.9181 10.9134 12.6241 11.458 12.0904C12.0243 11.5349 12.3413 10.7954 12.3413 10.0211C12.3413 8.40917 11.0224 7.11312 9.39957 7.11312C7.77678 7.11312 6.46984 8.40917 6.46984 10.0211C6.46984 11.6123 7.755 12.8963 9.36689 12.9181H9.39957Z" fill="#7CC5E5" />
                                    </svg>
                                    <?= get_field('general', 'options')['address'] ?>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-11 col-lg-10 mx-auto">
        <hr class="border-2 border-primary opacity-40">
    </div>

    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center pb-4 gy-4">
            <div class="col-12 col-md-auto">
                <p class="text-white text-center">© <?= date('Y') ?> Dhilas Excavation & Demolition Pty Ltd</p>
            </div>

            <div class="col-auto">
                <a href="https://www.aiims.com.au/this-is-us"><img src="<?= home_url() ?>/wp-content/uploads/2024/02/aiims.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>