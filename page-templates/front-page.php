<?php
/*
* Template Name: Front Page
* The front page
*/
get_header();
// get_template_part('parts/section', 'nav');
?>

<main class="homepage">
    <section class="homepage-banner">
        <div class="container py-16">
            <p class="text-white fs-35 text-uppercase fw-700 text-center">We know how to solve all your</p>
            <h1 class="text-capitalize fw-700 fs-85 text-center text-primary">Solve all your problems</h1>
            <div class="col-xl-2 mx-auto py-5">
                <div class="divider bg-white"></div>
            </div>
            <div class="col-xl-7 mx-auto">
                <p class="text-white text-center fs-20">With our modern equipment fleet and highly skilled employees, we complete even the most challenging demolitions excavation projects on time.</p>
            </div>
        </div>

        <div class="container pb-5">
            <div class="bannerServiceSlider">
                <div class="bg-primary text-center text-secondary p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/demolition.png" alt="">

                    <p>Demolition</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/asbestos-removal.png" alt="">

                    <p>Asbestos Removal</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/excavation.png" alt="">

                    <p>Excavation</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/traffic-control.png" alt="">

                    <p>Traffic control</p>
                </div>

                <div class="p-4">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/strip-outs.png" alt="">

                    <p>Strip Outs</p>
                </div>
            </div>
        </div>
    </section>

    <section class="business-needs">
        <div class="container">
            <div class="bg-container">
                <div class="row justify-content-between">
                    <div class="col-6">
                        <p class="text-uppercase text-primary fs-65 fw-800 lh-1">For <span class="text-tertiary">Over</span></p>
                        <p class="fs-125 text-uppercase fw-800 text-primary lh-1">15 Years</p>
                        <p class="text-tertiary fs-24 fw-800">we've been helping with any of</p>
                        <p class="text-tertiary fs-48 fw-800 lh-1">your business<br /> needs.</p>
                    </div>
                    <div class="col-5">
                        <p class="text-end fs-24 fw-600 text-black">We have been the company of <span class="fw-800">choice of</span></p>

                        <div class="row g-3 pt-4">
                            <div class="col-6">
                                <div class="border border-tertiary bg-tertiary text-white rounded-pill fs-24 fw-700 text-center lh-1 py-3">Excavation</div>
                            </div>

                            <div class="col-6">
                                <div class="border border-tertiary bg-primary text-tertiary rounded-pill fs-24 fw-700 text-center lh-1 py-3">Demolition</div>
                            </div>

                            <div class="col-12">
                                <div class="border border-primary bg-grey text-tertiary rounded-pill fs-24 fw-700 text-center lh-1 py-3">Complete Site Development Projects</div>
                            </div>

                            <div class="col-12">
                                <div class="border border-tertiary bg-white text-tertiary rounded-pill fs-24 fw-700 text-center lh-1 py-3">Sydney Wide</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary py-5">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-5">
                    <p class="text-center fs-24 fw-700 text-uppercase text-black">We have been transforming the ideas & visions into award-wining projects.</p>
                </div>
                <div class="col-4">
                    <a href="" class="btn btn-tertiary rounded-0 text-white fs-24 fw-700">Book A Quote</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about py-8">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="fs-65 fw-800 text-tertiary lh-1"><span class="text-primary">Dhilas</span> Excavation and Demolition</p>
                    <p class="fs-32 fw-600 py-3">takes great pride in the equipment and personnel we send to your project. We take every measure possible to ensure your experience with us is a good one.</p>

                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img src="<?= home_url() ?>/wp-content/uploads/2024/01/competitive-rates.png" alt="">
                                <p class="fs-20 text-tertiary fw-600">Competitive Rates</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img src="<?= home_url() ?>/wp-content/uploads/2024/01/on-site-consultation.png" alt="">
                                <p class="fs-20 text-tertiary fw-600">On-Site Consultations</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img src="<?= home_url() ?>/wp-content/uploads/2024/01/free-on-site-visits.png" alt="">
                                <p class="fs-20 text-tertiary fw-600">Free On-Site Visits</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img src="<?= home_url() ?>/wp-content/uploads/2024/01/free-quotes.png" alt="">
                                <p class="fs-20 text-tertiary fw-600">Free Quotes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 position-relative">
                    <div class="position-absolute bottom-0 w-100 bg-primary h-50 opacity-50 rounded-20"></div>
                    <div class="video bg-black h-100">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <p class="fs-95 fw-800 text-center text-primary">What We Do</p>
            <div class="col-xl-2 mx-auto py-4">
                <div class="divider bg-black"></div>
            </div>

            <div class="row gx-xl-5 pt-5">
                <div class="col-3">
                    <div class="service-card">
                        <p class="text-uppercase fs-32 py-3 px-4 fw-900">Demolition</p>
                        <img class="image" src="<?= home_url() ?>/wp-content/uploads/2024/01/demolition-1.png" alt="">
                        <div class="p-4">
                            <a href="" class="text-black fw-500">Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none">
                                    <path d="M12.9783 10.3208L17.8154 5.33628L12.9783 0.351806L12.1653 1.18961L15.6146 4.74391L0.596346 4.74391L0.596346 5.92872L15.6144 5.92872L12.1653 9.48295L12.9783 10.3208Z" fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="service-card">
                        <p class="text-uppercase fs-32 py-3 px-4 fw-900">Asbestos Removal</p>
                        <img class="image" src="<?= home_url() ?>/wp-content/uploads/2024/01/asbestos-removal-1.png" alt="">
                        <div class="p-4">
                            <a href="" class="text-black fw-500">Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none">
                                    <path d="M12.9783 10.3208L17.8154 5.33628L12.9783 0.351806L12.1653 1.18961L15.6146 4.74391L0.596346 4.74391L0.596346 5.92872L15.6144 5.92872L12.1653 9.48295L12.9783 10.3208Z" fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="service-card">
                        <p class="text-uppercase fs-32 py-3 px-4 fw-900">Excavation</p>
                        <img class="image" src="<?= home_url() ?>/wp-content/uploads/2024/01/excavation-1.png" alt="">
                        <div class="p-4">
                            <a href="" class="text-black fw-500">Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none">
                                    <path d="M12.9783 10.3208L17.8154 5.33628L12.9783 0.351806L12.1653 1.18961L15.6146 4.74391L0.596346 4.74391L0.596346 5.92872L15.6144 5.92872L12.1653 9.48295L12.9783 10.3208Z" fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="service-card">
                        <p class="text-uppercase fs-32 py-3 px-4 fw-900">Traffic Control</p>
                        <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/01/traffic-control-1.png" alt="">
                        <div class="p-4">
                            <a href="" class="text-black fw-500">Read more
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="11" viewBox="0 0 18 11" fill="none">
                                    <path d="M12.9783 10.3208L17.8154 5.33628L12.9783 0.351806L12.1653 1.18961L15.6146 4.74391L0.596346 4.74391L0.596346 5.92872L15.6144 5.92872L12.1653 9.48295L12.9783 10.3208Z" fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="numbers">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto text-center">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/projects.png" alt="">
                    <p class="fs-52 text-primary fw-700 pt-3">350</p>
                    <p class="fs-29 text-white">Projects</p>
                </div>

                <div class="col-auto text-center">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/happy-clients.png" alt="">
                    <p class="fs-52 text-primary fw-700 pt-3">2300</p>
                    <p class="fs-29 text-white">Happy Clients</p>
                </div>

                <div class="col-auto text-center">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/qualified-staffs.png" alt="">
                    <p class="fs-52 text-primary fw-700 pt-3">423</p>
                    <p class="fs-29 text-white">Qualified Staff</p>
                </div>

                <div class="col-auto text-center">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/01/machine.png" alt="">
                    <p class="fs-52 text-primary fw-700 pt-3">350</p>
                    <p class="fs-29 text-white">Machines</p>
                </div>
            </div>
        </div>
    </section>

    <section class="jobs-description py-6">
        <div class="container">
            <p class="fs-95 fw-800 text-center text-primary lh-1">Jobs</p>
            <div class="col-xl-2 mx-auto py-4">
                <div class="divider bg-black"></div>
            </div>

            <div class="jobs-slider py-5">
                <div class="">
                    <p class="title">Demolition</p>
                </div>

                <div class="">
                    <p class="title">Asbestos Removal</p>
                </div>

                <div class="">
                    <p class="title">Excavation</p>
                </div>

                <div class="">
                    <p class="title">Traffic Control</p>
                </div>

                <div class="">
                    <p class="title">Strip Outs</p>
                </div>

                <div class="">
                    <p class="title">Renovations</p>
                </div>

                <div class="">
                    <p class="title">Traffic Control</p>
                </div>

                <div class="">
                    <p class="title">Concrete Cutting</p>
                </div>
            </div>

            <div class="jobs-description-slider">
                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Mosman</p>
                        <p class="fs-20 text-white fw-500">Land Clearing</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/mosman.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Bankstown</p>
                        <p class="fs-20 text-white fw-500">Land Flattening</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/bankstown.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Liverpool</p>
                        <p class="fs-20 text-white fw-500">Block Clearance</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/liverpool.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Mosman</p>
                        <p class="fs-20 text-white fw-500">Land Clearing</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/mosman.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Bankstown</p>
                        <p class="fs-20 text-white fw-500">Land Flattening</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/bankstown.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Liverpool</p>
                        <p class="fs-20 text-white fw-500">Block Clearance</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/liverpool.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Mosman</p>
                        <p class="fs-20 text-white fw-500">Land Clearing</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/mosman.jpg" alt="">
                </div>

                <div class="job-card">
                    <div class="overlay p-4">
                        <p class="fs-27 text-primary fw-700">Bankstown</p>
                        <p class="fs-20 text-white fw-500">Land Flattening</p>
                    </div>
                    <img class="image" src="http://localhost/dhilas/wp-content/uploads/2024/02/bankstown.jpg" alt="">
                </div>
            </div>

            <div class="col-4 mx-auto mt-5">
                <a href="#" class="btn btn-tertiary text-primary text-uppercase fw-700 fs-24 rounded-0">See More</a>
            </div>
        </div>
    </section>

    <section class="priority py-6">
        <div class="container">
            <div class="row">
                <div class="col-6 position-relative" data-aos="fade-right">
                    <img src="http://localhost/dhilas/wp-content/uploads/2024/02/safety-is-priority.png" alt="">
                </div>

                <div class="col-6 py-5" data-aos="fade-left">
                    <p class="text-uppercase fw-800 lh-1 text-black fs-45">Safety is our</p>
                    <p class="text-uppercase fw-800 lh-1 text-primary fs-95">#1 Priority</p>
                    <div class="col-6 ms-n4 py-5">
                        <div class="divider bg-black"></div>
                    </div>

                    <article class="fs-20 description">
                        <p>It is the policy of Dhilas Demolition and Excavation Pty Ltd to ensure, safer as it is reasonably practicable, that all employees are safe from injury and risk to health while at work.</p>

                        <p>Our company meets this commitment by ensuring that, work practices and procedures adopted throughout its activities will constantly comply with the Acts, Regulations, Codes of Practice and Guidelines, governing Occupational Health and Safety.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials pb-8">
        <div class="container-fluid">
            <p class="fs-95 fw-800 text-center text-primary lh-1">What They Said</p>
            <div class="col-xl-2 mx-auto py-4">
                <div class="divider bg-black"></div>
            </div>

            <div class="testimonials-slider pt-5">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="testimonial bg-tertiary position-relative">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.21201 30.488C5.71601 30.488 3.76401 29.464 2.35601 27.416C1.14001 25.752 0.532012 23.48 0.532012 20.6C0.532012 16.632 1.52401 12.888 3.50801 9.368C5.49201 5.784 7.89201 2.968 10.708 0.919998L12.052 2.456C9.68401 4.248 7.73201 6.424 6.19601 8.984C4.72401 11.544 3.98801 14.104 3.98801 16.664C3.98801 17.368 4.11601 17.944 4.37201 18.392C4.62801 18.776 5.07601 19.16 5.71601 19.544C6.16401 19.8 7.25201 19.928 8.98001 19.928C10.388 19.928 11.54 20.44 12.436 21.464C13.332 22.424 13.78 23.576 13.78 24.92C13.78 26.648 13.204 28.024 12.052 29.048C10.9 30.008 9.62001 30.488 8.21201 30.488ZM26.068 30.488C23.572 30.488 21.62 29.464 20.212 27.416C18.996 25.752 18.388 23.48 18.388 20.6C18.388 16.632 19.38 12.888 21.364 9.368C23.348 5.784 25.748 2.968 28.564 0.919998L29.908 2.456C27.54 4.248 25.588 6.424 24.052 8.984C22.58 11.544 21.844 14.104 21.844 16.664C21.844 17.368 21.972 17.944 22.228 18.392C22.484 18.776 22.932 19.16 23.572 19.544C24.02 19.8 25.108 19.928 26.836 19.928C28.244 19.928 29.396 20.44 30.292 21.464C31.188 22.424 31.636 23.576 31.636 24.92C31.636 26.648 31.06 28.024 29.908 29.048C28.756 30.008 27.476 30.488 26.068 30.488Z" fill="#92AFBC" />
                                </svg>
                            </div>

                            <div class="col-auto">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.7384 4.55475C28.1013 6.20714 26.4879 7.83627 24.8514 9.48733C24.6096 9.28726 24.3638 9.07324 24.1069 8.8745C21.9994 7.24138 19.6026 6.60395 16.9924 6.95025C12.8294 7.5026 10.0011 9.87484 8.48449 13.7639C6.14109 19.7726 9.84164 26.6387 16.1142 27.9242C19.1546 28.5477 22.0402 28.0206 24.5694 26.107C26.1367 24.9212 27.09 23.306 27.5281 21.3818C27.5499 21.2867 27.5538 21.187 27.5709 21.0527H18.1578V14.2311H34.4681C34.5102 14.4664 34.5649 14.7203 34.6005 14.9769C34.8218 16.5728 34.8732 18.1747 34.7316 19.7799C34.08 27.1751 29.5599 33.0396 22.0995 34.5756C17.1222 35.5999 12.4407 34.801 8.24139 31.8332C4.29444 29.0422 1.88582 25.209 1.06428 20.4047C-0.522794 11.1251 5.5396 2.18517 14.7155 0.373252C20.2641 -0.722139 25.2407 0.585284 29.5322 4.36199C29.5975 4.41915 29.6594 4.4803 29.7384 4.55408V4.55475Z" fill="#7CC5E5" />
                                </svg>
                            </div>
                        </div>

                        <article class="fs-20 py-4 text-white description">
                            <p>This company delivered as promised. They demolished our outdated building and prepared the site for construction. While they did excellent work overall, there were some minor scheduling hiccups. Still, their quality of service and competitive pricing made them a solid choice for our project.</p>
                        </article>

                        <div class="row justify-content-between align-items-center pt-4">
                            <div class="col-auto">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="initials fs-20 fw-700 bg-primary text-white d-flex justify-content-center align-items-center rounded-circle">JM</div>
                                    <div class="fs-20 fw-600 text-white">John M.</div>
                                </div>
                            </div>

                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="19" viewBox="0 0 100 19" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7143 0.276641L10.7143 0.276714L10.7144 0.276809L10.7144 0.276898L10.7144 0.276976C10.7839 0.495189 10.8533 0.71335 10.9267 0.929963C11.249 1.88147 11.5716 2.83259 11.8988 3.78214C12.0831 4.31695 12.2707 4.85048 12.4583 5.38398L12.4583 5.38412L12.4588 5.38559L12.4593 5.38675L12.4595 5.38759C12.547 5.63638 12.6345 5.88517 12.7217 6.13408C12.7461 6.20383 12.7712 6.27335 12.7964 6.34287C12.8651 6.53259 12.9338 6.72227 12.9873 6.91636C13.0202 7.03583 13.0753 7.05033 13.1744 7.05229C14.1166 7.07109 15.0593 7.09224 16.0015 7.11457C16.8921 7.13573 17.783 7.15845 18.6736 7.18117C19.1761 7.1937 19.6782 7.20702 20.1807 7.22073C20.2102 7.22146 20.2396 7.2249 20.2794 7.22956C20.3038 7.23241 20.3321 7.23572 20.3667 7.23914L20.0824 7.46247C19.775 7.70394 19.4827 7.9335 19.1903 8.16284L17.9818 9.10984L16.7734 10.0568C16.0746 10.6045 15.3758 11.1521 14.6762 11.6994C14.5958 11.762 14.5422 11.822 14.5782 11.943C14.794 12.6676 15.0048 13.3934 15.2156 14.1191L15.2663 14.2938C15.3985 14.7493 15.5302 15.2051 15.662 15.6608L15.6627 15.6631L15.663 15.6644C15.8255 16.2263 15.988 16.7881 16.1511 17.3497C16.2633 17.7363 16.377 18.1226 16.4908 18.509L16.4914 18.5109L16.4917 18.5119L16.6349 18.9988H16.5966C16.4739 18.909 16.3515 18.8185 16.2292 18.7281L16.229 18.7279L16.2289 18.7278L16.2289 18.7278L16.2288 18.7277C15.9642 18.5321 15.6996 18.3364 15.4309 18.1468C14.9021 17.7736 14.3718 17.4026 13.8415 17.0316L13.8413 17.0315L13.8411 17.0313L13.841 17.0312C13.4069 16.7275 12.9728 16.4238 12.5395 16.1188C12.2696 15.929 12.0008 15.7374 11.7319 15.5458L11.7315 15.5455C11.4093 15.3158 11.0871 15.0862 10.7629 14.8594L10.7424 14.8448C10.6688 14.7918 10.5918 14.7363 10.4763 14.8187C9.9805 15.1719 9.48167 15.5208 8.98283 15.8697L8.9827 15.8698L8.9823 15.87L8.9819 15.8703L8.9817 15.8705C8.67263 16.0866 8.36357 16.3028 8.05524 16.52C7.23776 17.0958 6.42182 17.6748 5.60702 18.2545C5.37388 18.4205 5.14249 18.5892 4.91108 18.7579C4.8006 18.8384 4.69012 18.919 4.57944 18.9992H4.54117C4.59345 18.821 4.64591 18.6428 4.69836 18.4645L4.69847 18.4641L4.69858 18.4638L4.69869 18.4634L4.69877 18.4631C4.80781 18.0926 4.91687 17.722 5.02453 17.3512C5.17233 16.8424 5.31947 16.3334 5.4666 15.8245L5.46695 15.8233C5.6142 15.3139 5.76145 14.8046 5.90936 14.2953L5.94905 14.1586L5.94909 14.1585C6.16354 13.4199 6.37796 12.6813 6.59748 11.9442C6.63346 11.8235 6.58103 11.7632 6.50027 11.7001C6.18335 11.4525 5.86692 11.2043 5.55055 10.9562L5.55035 10.9561L5.54834 10.9545L5.54753 10.9538L5.05094 10.5645L4.05979 9.78789L4.05764 9.7862L4.0369 9.76995C3.28251 9.17885 2.52805 8.5877 1.77377 7.99635C1.56526 7.83293 1.35709 7.6688 1.13929 7.49707L0.812012 7.23914C0.842546 7.23603 0.868195 7.2331 0.890646 7.23054L0.890689 7.23054C0.933221 7.22569 0.964276 7.22215 0.995331 7.22112C1.49133 7.20741 1.98732 7.19448 2.48332 7.18156L3.35341 7.15874C4.07552 7.13969 4.79754 7.12065 5.51976 7.1036C5.84038 7.09607 6.16106 7.08941 6.48175 7.08274L6.48197 7.08274L6.48207 7.08273C6.995 7.07207 7.50797 7.06141 8.02079 7.04719C8.07361 7.04563 8.15665 6.99745 8.17273 6.95161C8.43025 6.2176 8.68379 5.48204 8.93735 4.74642C9.04442 4.4358 9.15149 4.12518 9.25887 3.81465C9.39067 3.43341 9.52311 3.05241 9.65555 2.67139L9.65559 2.67127L9.65564 2.67114L9.65568 2.67102L9.65569 2.67098L9.65572 2.6709L9.65574 2.67084C9.86359 2.07289 10.0714 1.47491 10.2769 0.875905C10.345 0.676615 10.4059 0.474338 10.4668 0.272039C10.4941 0.181275 10.5214 0.0905058 10.5494 0H10.6259C10.6556 0.0921117 10.6849 0.184327 10.7143 0.276533L10.7143 0.276587L10.7143 0.276641ZM30.6529 0.275863L30.6532 0.276714C30.7227 0.495014 30.7922 0.713263 30.8656 0.929963C31.1878 1.88147 31.5105 2.83259 31.8377 3.78214C32.0219 4.31684 32.2095 4.85027 32.397 5.38366L32.3972 5.38412L32.3978 5.38592L32.3983 5.38739C32.4859 5.63625 32.5734 5.8851 32.6605 6.13408C32.6849 6.20383 32.7101 6.27336 32.7353 6.34288C32.804 6.5326 32.8726 6.72228 32.9261 6.91636C32.959 7.03583 33.0141 7.05033 33.1133 7.05229C34.0555 7.07109 34.9981 7.09224 35.9404 7.11457C36.8309 7.13573 37.7219 7.15845 38.6125 7.18117C39.115 7.1937 39.6171 7.20702 40.1196 7.22073C40.1494 7.22146 40.1791 7.22494 40.2192 7.22964C40.2435 7.23247 40.2715 7.23575 40.3056 7.23914L40.0217 7.4621C39.7142 7.70371 39.4218 7.93339 39.1291 8.16284L37.9207 9.10984L36.7123 10.0568L36.706 10.0618L36.7017 10.0651L36.6975 10.0685L36.6952 10.0702C36.0021 10.6134 35.3089 11.1566 34.615 11.6994C34.5347 11.762 34.4811 11.822 34.5171 11.943C34.7328 12.6674 34.9436 13.3931 35.1543 14.1186L35.2052 14.2938C35.3376 14.7503 35.4696 15.2069 35.6017 15.6635C35.7642 16.2257 35.9268 16.7879 36.09 17.3497C36.2051 17.7462 36.3217 18.1424 36.4384 18.5385L36.4387 18.5395L36.439 18.5404L36.4394 18.5417L36.5738 18.9984H36.5355C36.4126 18.9085 36.2902 18.818 36.1678 18.7274L36.1677 18.7274C35.9031 18.5317 35.6385 18.336 35.3697 18.1464C34.841 17.7732 34.3108 17.4023 33.7805 17.0313L33.7789 17.0302L33.7786 17.03L33.7784 17.0298C33.3448 16.7264 32.9112 16.4231 32.4783 16.1185C32.2083 15.9285 31.9393 15.7368 31.6704 15.5451L31.6703 15.545L31.6702 15.5449L31.6701 15.5449C31.348 15.3153 31.0258 15.0857 30.7018 14.859L30.6812 14.8444C30.6077 14.7914 30.5306 14.7359 30.4151 14.8183C29.9194 15.1715 29.4206 15.5204 28.9217 15.8692L28.9215 15.8694L28.9213 15.8696L28.9211 15.8697L28.9208 15.8699C28.6117 16.0861 28.3025 16.3023 27.9941 16.5196C27.1766 17.0954 26.3607 17.6744 25.5459 18.2542C25.3128 18.4201 25.0814 18.5888 24.85 18.7574C24.7395 18.838 24.629 18.9186 24.5183 18.9988H24.48C24.5695 18.6897 24.6587 18.3806 24.7479 18.0714L24.7484 18.0696L24.7489 18.0678L24.7495 18.0659C24.9288 17.4444 25.1081 16.8228 25.2895 16.2019C25.4906 15.5134 25.6933 14.8253 25.8961 14.1374L25.8971 14.134L25.8981 14.1306C26.0218 13.7108 26.1455 13.2909 26.2688 12.871C26.286 12.8127 26.3033 12.7544 26.3206 12.6962C26.3968 12.4398 26.473 12.1836 26.5344 11.9234C26.5494 11.8608 26.4923 11.7507 26.4357 11.7045C26.1394 11.4621 25.8382 11.226 25.537 10.99C25.4452 10.9181 25.3535 10.8462 25.2619 10.7741C25.0027 10.5703 24.7435 10.3664 24.4844 10.1625L24.4836 10.1619C23.924 9.72152 23.3644 9.28118 22.8037 8.84249C22.4284 8.54871 22.052 8.25647 21.6757 7.96427L21.6753 7.96396L21.6744 7.96325C21.4199 7.76563 21.1654 7.56803 20.9112 7.36998C20.8672 7.3359 20.8278 7.29555 20.7926 7.2078C20.8719 7.2078 20.9512 7.20827 21.0305 7.20874C21.2024 7.20976 21.3743 7.21077 21.5458 7.20702C23.258 7.16941 24.9699 7.12985 26.6822 7.0895C26.8449 7.08558 27.0076 7.07979 27.1703 7.07399C27.4144 7.06529 27.6585 7.0566 27.9026 7.05425C28.0347 7.05307 28.0921 7.02134 28.1395 6.87953C28.2981 6.40624 28.4649 5.93599 28.6317 5.4657L28.6318 5.46545L28.6319 5.46519L28.632 5.46493C28.7389 5.16362 28.8458 4.86228 28.9505 4.56011C29.1361 4.02405 29.3186 3.48668 29.501 2.94926C29.6003 2.65687 29.6996 2.36446 29.7994 2.07224C29.91 1.74842 30.0212 1.4249 30.1324 1.10138L30.1324 1.10132L30.1324 1.10126L30.1324 1.1012C30.2436 0.777843 30.3547 0.454487 30.4653 0.130837C30.4749 0.102531 30.4789 0.0724037 30.4829 0.0421936V0.0421852V0.0421766L30.4829 0.0421374L30.4829 0.042107L30.4829 0.0420782L30.4829 0.0420507C30.4847 0.0279928 30.4866 0.0139176 30.489 0H30.5648C30.5944 0.0918885 30.6236 0.18388 30.6529 0.275863ZM50.4277 0.000391728L50.4276 0L50.4284 0.000391728H50.4277ZM50.4277 0.000391728C50.4573 0.0923584 50.4866 0.184428 50.516 0.276489L50.5161 0.276886C50.5855 0.495129 50.655 0.71332 50.7284 0.929963C51.0507 1.88147 51.3733 2.83259 51.7005 3.78214C51.8848 4.31708 52.0725 4.85075 52.2601 5.38439L52.2619 5.38947C52.3492 5.63764 52.4364 5.8858 52.5233 6.13408C52.5478 6.20382 52.5729 6.27334 52.5981 6.34286L52.5981 6.34292L52.5981 6.34297C52.6668 6.53266 52.7355 6.72231 52.7889 6.91636C52.8219 7.03583 52.877 7.05033 52.9761 7.05229C53.9183 7.07109 54.861 7.09224 55.8032 7.11457C56.6938 7.13573 57.5847 7.15845 58.4753 7.18117C58.9778 7.1937 59.4799 7.20702 59.9824 7.22073C60.0118 7.22146 60.0413 7.2249 60.0811 7.22956L60.0812 7.22957C60.1056 7.23242 60.1339 7.23572 60.1684 7.23914L59.8846 7.4621C59.577 7.70371 59.2846 7.93339 58.992 8.16284L57.7835 9.10984L56.5751 10.0568L56.5688 10.0618L56.5646 10.0651L56.5603 10.0685C55.8664 10.6122 55.1725 11.156 54.4779 11.6994C54.3975 11.762 54.3439 11.822 54.3799 11.943C54.5955 12.6672 54.8063 13.3927 55.0169 14.118L55.0174 14.1196L55.068 14.2938C55.1994 14.7467 55.3304 15.1998 55.4614 15.6529L55.4627 15.6574L55.464 15.6619C55.6267 16.2246 55.7894 16.7873 55.9528 17.3497C56.0655 17.7378 56.1796 18.1255 56.2938 18.5133L56.4366 18.9988H56.3983C56.2755 18.9089 56.1532 18.8184 56.0308 18.728L56.0308 18.7279L56.0307 18.7279L56.0304 18.7277C55.7658 18.532 55.5013 18.3364 55.2326 18.1468C54.7041 17.7738 54.1742 17.403 53.6442 17.0322L53.6432 17.0316C53.209 16.7278 52.7747 16.4239 52.3412 16.1188C52.0711 15.9288 51.8021 15.7371 51.5331 15.5454L51.5326 15.545L51.5325 15.545C51.2105 15.3155 50.8885 15.086 50.5646 14.8594L50.5441 14.8448C50.4705 14.7918 50.3935 14.7363 50.278 14.8187C49.7821 15.172 49.2832 15.5209 48.7843 15.8698C48.4749 16.0862 48.1656 16.3026 47.8569 16.52C47.0395 17.0958 46.2235 17.6748 45.4087 18.2545C45.1756 18.4205 44.9443 18.5891 44.7129 18.7578L44.7129 18.7578L44.7128 18.7579L44.7127 18.758C44.6022 18.8385 44.4918 18.919 44.3811 18.9992H44.3429C44.4327 18.6887 44.5223 18.3782 44.6119 18.0676L44.612 18.0671L44.6122 18.0667C44.7915 17.445 44.9709 16.8233 45.1523 16.2023C45.3535 15.5135 45.5563 14.8251 45.7592 14.1369C45.8835 13.7151 46.0078 13.2933 46.1317 12.8714C46.1488 12.813 46.1662 12.7547 46.1835 12.6964C46.2597 12.4401 46.3358 12.1839 46.3973 11.9238C46.4122 11.8611 46.3552 11.7511 46.2985 11.7048C46.0023 11.4626 45.7011 11.2265 45.3999 10.9904C45.3081 10.9185 45.2164 10.8466 45.1247 10.7745C44.8671 10.572 44.6095 10.3693 44.352 10.1666L44.3465 10.1623C43.7869 9.72196 43.2273 9.28159 42.6666 8.84288C42.2912 8.54906 41.9148 8.25678 41.5384 7.96453L41.5359 7.96264C41.2818 7.76536 41.0278 7.56809 40.7741 7.37037C40.73 7.33629 40.6906 7.29594 40.6554 7.20819C40.7347 7.20819 40.814 7.20866 40.8933 7.20913H40.8934C41.0652 7.21015 41.2371 7.21116 41.4086 7.20741C43.1209 7.16981 44.8327 7.13024 46.545 7.08989C46.7077 7.08598 46.8705 7.08018 47.0332 7.07438L47.0332 7.07438C47.2773 7.06568 47.5214 7.05699 47.7655 7.05464C47.8975 7.05346 47.9549 7.02173 48.0024 6.87993C48.1608 6.40692 48.3275 5.93697 48.4942 5.46697L48.4943 5.46687L48.4945 5.46609L48.4947 5.46578L48.4948 5.46552C48.6017 5.16414 48.7086 4.86274 48.8133 4.5605C48.999 4.0244 49.1814 3.48699 49.3639 2.94954C49.4631 2.65718 49.5624 2.36481 49.6622 2.07264C49.7728 1.74887 49.884 1.4254 49.9951 1.10193C50.1063 0.778459 50.2175 0.454991 50.3281 0.131229C50.3378 0.102924 50.3417 0.0727997 50.3457 0.0425918V0.0425837L50.3457 0.042515C50.3475 0.028433 50.3494 0.0143332 50.3518 0.000391728H50.4277ZM64.1288 18.9988C64.2187 18.6884 64.3083 18.3778 64.3979 18.0673C64.5773 17.4452 64.7568 16.8232 64.9383 16.2019C65.1392 15.5141 65.3417 14.8267 65.5443 14.1395L65.552 14.1133C65.674 13.6992 65.796 13.2851 65.9176 12.871C65.9348 12.8128 65.9521 12.7546 65.9694 12.6964C66.0456 12.4399 66.1218 12.1836 66.1832 11.9234C66.1982 11.8607 66.1411 11.7507 66.0845 11.7044C65.783 11.4579 65.4764 11.2177 65.1699 10.9777C65.0834 10.91 64.997 10.8423 64.9107 10.7745C64.6533 10.5722 64.396 10.3697 64.1388 10.1673L64.1332 10.1629C63.5734 9.72235 63.0135 9.28179 62.4526 8.84287C62.0774 8.54922 61.7011 8.25709 61.3249 7.96499L61.3243 7.96451C61.0694 7.7666 60.8145 7.56871 60.56 7.37037C60.516 7.33629 60.4766 7.29594 60.4414 7.20819C60.5207 7.20819 60.6 7.20866 60.6793 7.20913H60.6794C60.8512 7.21014 61.0231 7.21116 61.1946 7.20741C62.9068 7.1698 64.6187 7.13024 66.331 7.08989C66.4937 7.08597 66.6564 7.08017 66.8192 7.07438C67.0633 7.06568 67.3074 7.05698 67.5514 7.05463C67.6835 7.05346 67.7409 7.02173 67.7883 6.87992C67.9467 6.40711 68.1134 5.93734 68.28 5.46753L68.2805 5.46617C68.3875 5.16457 68.4945 4.86295 68.5993 4.5605C68.7849 4.02448 68.9674 3.48714 69.1498 2.94976L69.1517 2.94417C69.2503 2.6536 69.349 2.36302 69.4482 2.07263C69.5589 1.74849 69.6702 1.42463 69.7815 1.10078L69.7816 1.10055C69.8926 0.777538 70.0036 0.454527 70.1141 0.131224C70.1237 0.102934 70.1277 0.0728254 70.1317 0.0426331V0.0425664L70.1317 0.0424001C70.1335 0.0283546 70.1354 0.0142919 70.1378 0.000386532H70.2143C70.244 0.0925956 70.2734 0.184908 70.3028 0.277212C70.3723 0.495475 70.4417 0.713687 70.5152 0.93035C70.8374 1.88186 71.16 2.83297 71.4873 3.78252C71.6714 4.31696 71.8589 4.85012 72.0463 5.38324L72.0468 5.3845L72.0486 5.38959C72.1358 5.63785 72.2231 5.8861 72.3101 6.13446C72.3345 6.20425 72.3597 6.27382 72.3849 6.34338L72.3849 6.34343C72.4536 6.5331 72.5222 6.72272 72.5757 6.91674C72.6086 7.03622 72.6637 7.05072 72.7628 7.05267C73.7051 7.07148 74.6477 7.09263 75.5899 7.11496C76.4805 7.13611 77.3715 7.15883 78.262 7.18155C78.7645 7.19409 79.2667 7.20741 79.7692 7.22112C79.7986 7.22185 79.828 7.22529 79.8679 7.22995C79.8923 7.2328 79.9206 7.23611 79.9552 7.23953L79.6733 7.46093C79.365 7.70311 79.072 7.93328 78.7787 8.16322L77.5703 9.11023L76.3619 10.0572L76.3474 10.0686C75.6534 10.6124 74.9594 11.1563 74.2646 11.6997C74.1842 11.7624 74.1307 11.8224 74.1666 11.9434C74.3818 12.6661 74.5921 13.3901 74.8024 14.1139L74.8042 14.1202L74.8547 14.2942C74.9872 14.7507 75.1192 15.2073 75.2513 15.664C75.4138 16.2261 75.5763 16.7883 75.7396 17.35C75.8521 17.7377 75.9661 18.125 76.0801 18.5124L76.0803 18.513L76.2233 18.9992H76.1851C76.0622 18.9093 75.9398 18.8188 75.8174 18.7283L75.8168 18.7278C75.5523 18.5322 75.2879 18.3367 75.0193 18.1472C74.4908 17.7742 73.9608 17.4034 73.4308 17.0325L73.4298 17.0319C72.9956 16.7281 72.5614 16.4243 72.1279 16.1192C71.8578 15.9292 71.5888 15.7375 71.3199 15.5458L71.3194 15.5455C70.9973 15.3159 70.6753 15.0864 70.3514 14.8598L70.3308 14.8451C70.2573 14.7922 70.1802 14.7367 70.0647 14.8191C69.5689 15.1723 69.0701 15.5212 68.5712 15.8701C68.2618 16.0865 67.9524 16.3029 67.6437 16.5204C66.8262 17.0962 66.0103 17.6752 65.1955 18.2549C64.9623 18.4209 64.7309 18.5896 64.4995 18.7583C64.3891 18.8388 64.2786 18.9194 64.1679 18.9996H64.1296L64.1288 18.9988ZM84.2994 18.0664C84.2097 18.3772 84.12 18.6881 84.0301 18.9988L84.0305 19H84.0687C84.1793 18.9199 84.2896 18.8394 84.3999 18.759C84.6315 18.5902 84.863 18.4214 85.0963 18.2553C85.9111 17.6756 86.7271 17.0966 87.5445 16.5207C87.8532 16.3033 88.1627 16.0869 88.4721 15.8705C88.9709 15.5216 89.4698 15.1727 89.9656 14.8195C90.0811 14.7371 90.1581 14.7926 90.2317 14.8455C90.2385 14.8505 90.2454 14.8554 90.2522 14.8602C90.5764 15.087 90.8987 15.3167 91.2209 15.5463C91.4898 15.738 91.7588 15.9297 92.0288 16.1196C92.4624 16.4248 92.8967 16.7287 93.3311 17.0325C93.8613 17.4035 94.3915 17.7744 94.9202 18.1476C95.1889 18.3372 95.4534 18.5328 95.7181 18.7285C95.8405 18.8191 95.963 18.9096 96.0859 18.9996H96.1242C96.0392 18.7058 95.9544 18.4119 95.8696 18.118C95.6852 17.479 95.5008 16.8399 95.3144 16.2015C95.1174 15.5273 94.9189 14.8536 94.7204 14.1799C94.5918 13.7435 94.4632 13.3072 94.335 12.8706C94.3163 12.8066 94.2973 12.7427 94.2783 12.6787C94.2039 12.4281 94.1295 12.1774 94.0694 11.923C94.0549 11.8604 94.1127 11.7507 94.1693 11.7041C94.4697 11.4584 94.775 11.2194 95.0803 10.9804C95.1674 10.9122 95.2545 10.844 95.3415 10.7757L95.733 10.4681C96.6385 9.75659 97.5438 9.04525 98.4499 8.3348C98.725 8.11906 99.0011 7.90442 99.2772 7.68979C99.4353 7.56693 99.5933 7.44407 99.7512 7.32101C99.7749 7.3026 99.7959 7.27988 99.812 7.20858C99.7388 7.20858 99.6656 7.20888 99.5923 7.20918C99.4273 7.20984 99.2622 7.21051 99.0971 7.2078C98.9855 7.20605 98.8739 7.20434 98.7623 7.20263C98.1483 7.19322 97.5343 7.18381 96.9206 7.16823C96.2472 7.15131 95.5738 7.13271 94.9003 7.11412C94.155 7.09353 93.4096 7.07295 92.6641 7.05463C92.547 7.0515 92.5122 7.01193 92.4735 6.89833C92.317 6.43725 92.1544 5.97834 91.9918 5.51944C91.8788 5.20056 91.7658 4.88167 91.6549 4.56206C91.4663 4.0184 91.2811 3.47339 91.096 2.92836C90.9994 2.64397 90.9027 2.35958 90.8056 2.07537C90.7097 1.7948 90.6134 1.5143 90.5172 1.23378C90.3912 0.866504 90.2651 0.499186 90.1397 0.131616C90.13 0.103004 90.1258 0.0723457 90.1217 0.0416925C90.1198 0.0278601 90.118 0.0140286 90.1156 0.000386532H90.0391C90.0366 0.0143346 90.0348 0.028441 90.0329 0.0425296C90.029 0.0727566 90.025 0.102901 90.0153 0.131224C89.9047 0.454988 89.7935 0.778458 89.6824 1.10193C89.5712 1.4254 89.46 1.74887 89.3494 2.07263C89.2496 2.36502 89.1502 2.6576 89.0509 2.95018C88.8685 3.48741 88.6861 4.02461 88.5006 4.5605C88.3958 4.86284 88.2888 5.16434 88.1819 5.46582C88.015 5.9362 87.8482 6.40653 87.6896 6.87992C87.6421 7.02173 87.5847 7.05346 87.4527 7.05463C87.2083 7.05698 86.9642 7.06568 86.7202 7.07438C86.5575 7.08018 86.3949 7.08597 86.2322 7.08989C84.52 7.13024 82.8081 7.1698 81.0958 7.20741C80.9243 7.21116 80.7524 7.21014 80.5806 7.20913C80.5013 7.20866 80.4219 7.20819 80.3427 7.20819C80.3779 7.29594 80.4173 7.33589 80.4613 7.37037C80.7158 7.56867 80.9706 7.76653 81.2254 7.96441C81.6019 8.2567 81.9784 8.54902 82.3538 8.84287C82.9149 9.28188 83.4748 9.72253 84.0348 10.1632C84.2938 10.367 84.5528 10.5708 84.812 10.7745C84.8982 10.8423 84.9846 10.9099 85.071 10.9776C85.3775 11.2176 85.6842 11.4578 85.9857 11.7044C86.0424 11.7507 86.0994 11.8607 86.0845 11.9234C86.0231 12.1835 85.9469 12.4396 85.8708 12.6959C85.8534 12.7542 85.8361 12.8126 85.8189 12.871C85.6907 13.3075 85.5621 13.7438 85.4336 14.1801C85.235 14.8539 85.0365 15.5276 84.8395 16.2019C84.6581 16.8229 84.4787 17.4447 84.2994 18.0664Z" fill="#7CC5E5" />
                                </svg>
                            </div>
                        </div>

                        <div class="bottom-mark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="45" viewBox="0 0 73 45" fill="none">
                                <path d="M0.281622 44.7565C16.9548 34.4937 29.4423 20.1567 40.1042 4.14608C42.5479 0.498856 45.0022 -0.732103 49.2041 0.498871C56.6732 2.66247 64.2785 4.39217 72.624 6.49978C51.989 27.9142 27.8221 39.7299 0.281622 44.7565Z" fill="#7CC5E5" />
                            </svg>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="our-client py-7">
        <div class="container">
            <p class="fs-95 fw-800 text-center text-primary lh-1">Our Clients</p>
            <div class="col-xl-2 mx-auto py-4">
                <div class="divider bg-white"></div>
            </div>

            <div class="row pt-5">
                <div class="col-3" data-aos="fade-right">
                    <div class="bg-white h-100 d-flex justify-content-center align-items-center p-2">
                        <img src="http://localhost/dhilas/wp-content/uploads/2024/02/bbc.png" alt="">
                    </div>
                </div>

                <div class="col-3" data-aos="fade-right">
                    <div class="bg-white h-100 d-flex justify-content-center align-items-center p-2">
                        <img src="http://localhost/dhilas/wp-content/uploads/2024/02/hallmark.png" alt="">
                    </div>
                </div>

                <div class="col-3" data-aos="fade-left">
                    <div class="bg-white h-100 d-flex justify-content-center align-items-center p-2">
                        <img src="http://localhost/dhilas/wp-content/uploads/2024/02/auburn-city-council.png" alt="">
                    </div>
                </div>

                <div class="col-3" data-aos="fade-left">
                    <div class="bg-white h-100 d-flex justify-content-center align-items-center p-2">
                        <img src="http://localhost/dhilas/wp-content/uploads/2024/02/northern-beaches-council.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promotions py-7">
        <div class="container">
            <p class="fs-95 fw-800 text-center text-primary lh-1">Explore Our Exclusive Promotions</p>
            <p class="fs-35 text-tertiary text-center fw-500 py-3">for Exceptional Excavation and Demolition Services</p>
            <div class="col-xl-2 mx-auto py-4">
                <div class="divider bg-black"></div>
            </div>

            <div class="row gy-4">
                <div class="col-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="http://localhost/dhilas/wp-content/uploads/2024/02/free-quote.png" alt="">

                        <div class="overlay">
                            <p class="text-capitalize text-primary lh-1">Free <span class="text-white">Quote</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="http://localhost/dhilas/wp-content/uploads/2024/02/free-quote.png" alt="">

                        <div class="overlay">
                            <p class="text-capitalize text-primary lh-1">Over 25 Years <span class="text-white">Experience</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="http://localhost/dhilas/wp-content/uploads/2024/02/free-quote.png" alt="">

                        <div class="overlay">
                            <p class="text-capitalize text-primary lh-1">Family Owned & <span class="text-white">Operate Business</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="http://localhost/dhilas/wp-content/uploads/2024/02/free-quote.png" alt="">

                        <div class="overlay">
                            <p class="text-capitalize text-primary lh-1">All Work <span class="text-white">Guaranteed</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="http://localhost/dhilas/wp-content/uploads/2024/02/free-quote.png" alt="">

                        <div class="overlay">
                            <p class="text-capitalize text-primary lh-1">Full Licensed <span class="text-white">& Insured</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="promotion-card">
                        <img class="w-100 h-100 object-fit-cover" src="http://localhost/dhilas/wp-content/uploads/2024/02/free-quote.png" alt="">

                        <div class="overlay">
                            <p class="text-capitalize text-primary lh-1">Sydney Wide Service Council <span class="text-white">Approval Included</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end pt-11">
                <div class="col-7">
                    <p class="text-uppercase fs-45 fw-800 lh-1 text-tertiary">our employees are trained</p>
                    <p class="text-uppercase fs-95 fw-800 lh-1 text-primary">And Qualified</p>

                    <div class="col-xl-5 py-5">
                        <div class="divider bg-tertiary"></div>
                    </div>

                    <article class="fs-24 text-tertiary description">
                        <p>All employees are expected to take all practical and necessary measures to ensure a safe and healthy working environment.</p>

                        <p>The management of the company has the responsibility to monitor and maintain the safe working environment and conditions at any workplace.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="common-form">
        <div class="container">
            <div class="bg-tertiary py-4 px-5 form">
                <div class="row">
                    <div class="col-12 col-md-6 border-end border-primary">
                        <img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['alt'] ?>">
                        <p class="text-white pt-4">Email: <?= get_field('general', 'options')['email_address'] ?></p>
                        <p class="text-white pt-2"><?= get_field('general', 'options')['address'] ?></p>

                        <p class="text-primary fs-24 fw-700 pt-5 pb-3">Contact Details</p>

                        <div class="row g-3">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>

                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>

                            <div class="col-6">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="col-6">
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
                            <div class="col-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Other">
                            </div>

                            <div class="col-6">
                                <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                            </div>
                        </div>

                        <p class="text-primary fs-24 fw-700 py-3">Service Required</p>

                        <div class="row g-3 justify-content-end">
                            <div class="col-6">
                                <select class="form-control">
                                    <option selected>Excavation</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Other">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center pt-5">
                    <div class="col-auto d-flex gap-x-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                            <path d="M10.3105 5.16012H9.20463V3.20076C9.20463 2.42128 8.85511 1.67372 8.23295 1.12254C7.6108 0.571367 6.76697 0.261719 5.88711 0.261719C5.00725 0.261719 4.16343 0.571367 3.54127 1.12254C2.91911 1.67372 2.56959 2.42128 2.56959 3.20076V5.16012H1.46375C1.17046 5.16012 0.889188 5.26333 0.681803 5.44706C0.474418 5.63079 0.35791 5.87997 0.35791 6.1398V11.0382C0.35791 11.298 0.474418 11.5472 0.681803 11.7309C0.889188 11.9147 1.17046 12.0179 1.46375 12.0179H10.3105C10.6038 12.0179 10.885 11.9147 11.0924 11.7309C11.2998 11.5472 11.4163 11.298 11.4163 11.0382V6.1398C11.4163 5.87997 11.2998 5.63079 11.0924 5.44706C10.885 5.26333 10.6038 5.16012 10.3105 5.16012ZM6.99295 5.16012H4.78127V3.20076C4.78127 2.94093 4.89778 2.69175 5.10516 2.50802C5.31255 2.32429 5.59382 2.22108 5.88711 2.22108C6.1804 2.22108 6.46167 2.32429 6.66906 2.50802C6.87644 2.69175 6.99295 2.94093 6.99295 3.20076V5.16012Z" fill="#7CC5E5" />
                        </svg>

                        <p class="text-primary"><span class="fw-700">Your privacy is our priority</span><span class="px-4">|</span>All information will remain 100% private and secure</p>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary w-100 rounded-0 fs-24 fw-500" type="submit">Book A Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>