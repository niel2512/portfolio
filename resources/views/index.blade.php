<!DOCTYPE html>
<html lang="en">
    @include('components.header')
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            @include('components.navbar')
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-start gap-3">
                                {{-- <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Design &middot; Development &middot; Marketing</div></div> --}}
                                <div class="fs-3 fw-bold text-muted mt-5">Hi There..👋</div>
                                <h1 class="display-7 fw-bolder mb-3"><span class="text-gradient d-inline">Selamat datang di website kami..!</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-start justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 fs-6 text-white bg-blue-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500" href="#">Let's Started</a>
                                    {{-- <a class="rounded-md text-sm font-medium px-3 py-2 text-white bg-blue-500 transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500" href="#">Let's Start</a> --}}
                                    {{-- <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a> --}}
                                </div>
                            </div>
                        </div>
                        {{--Disinitempat buat border untuk memasukkan gambar--}}
                        {{-- <div class="w-20 h-20 bg-gray-200 rounded overflow-hidden justify-content-end"></div> --}}
                    </div>
                </div>
            </header>

            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center mb-5">
                                <h2 class="display-5 fw-bolder mb-5"><span class="text-gradient d-inline">About Me</span></h2>
                                <p class="lead fw-light mb-4">My name is Nathaniel Yusuf Langelo</p>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                        <!-- Page Content-->
                        <div class="container px-5 my-5">
                            <div class="text-center mb-5">
                                <h1 class="display-5 fw-bolder mb-0">
                                    <span class="text-gradient d-inline">Resume</span>
                                </h1>
                            </div>
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-11 col-xl-9 col-xxl-8">
                                    <!-- Experience Section-->
                                    <section>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <h2 class="text-primary fw-bolder mb-0">
                                                Experience
                                            </h2>
                                            <!-- Download resume button-->
                                            <!-- Note: Set the link href target to a PDF file within your project-->
                                            {{-- <a class="btn btn-primary px-4 py-3" href="#!">
                                                <div class="d-inline-block bi bi-download me-2"></div>
                                                Download Resume
                                            </a> --}}
                                        </div>
                                        <!-- Experience Card 1-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <div class="row align-items-center gx-5">
                                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                        <div class="bg-light p-4 rounded-4">
                                                            <div class="text-primary fw-bolder mb-2">
                                                                Feb 2024 - Jun 2024
                                                            </div>
                                                            <div class="small fw-bolder">
                                                                Finance Intern
                                                            </div>
                                                            <div class="small text-muted">
                                                                Yakes Telkom
                                                            </div>
                                                            <div class="small text-muted">
                                                                Bandung, Jawa Barat
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>
                                                            Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit.
                                                            Delectus laudantium, voluptatem
                                                            quis repellendus eaque sit animi
                                                            illo ipsam amet officiis
                                                            corporis sed aliquam non
                                                            voluptate corrupti excepturi
                                                            maxime porro fuga.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Experience Card 2-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <div class="row align-items-center gx-5">
                                                    <div class="col text-center text-lg-start mb-4 mb-lg-10">
                                                        <div class="bg-light p-4 rounded-4">
                                                            <div class="text-primary fw-bolder mb-2">
                                                                Feb 2024 - Jun 2024
                                                            </div>
                                                            <div class="small fw-bolder">
                                                                Assitant Advance Taxation
                                                            </div>
                                                            <div class="small text-muted">
                                                                Telkom University
                                                            </div>
                                                            <div class="small text-muted">
                                                                Bandung, Jawa Barat
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>
                                                            Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit.
                                                            Delectus laudantium, voluptatem
                                                            quis repellendus eaque sit animi
                                                            illo ipsam amet officiis
                                                            corporis sed aliquam non
                                                            voluptate corrupti excepturi
                                                            maxime porro fuga.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Experience Card 3-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <div class="row align-items-center gx-5">
                                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                        <div class="bg-light p-4 rounded-4">
                                                            <div class="text-primary fw-bolder mb-2">
                                                                Oct 2023 - Jan 2024
                                                            </div>
                                                            <div class="small fw-bolder">
                                                                Assitant Web Proggraming
                                                            </div>
                                                            <div class="small text-muted">
                                                                Telkom University
                                                            </div>
                                                            <div class="small text-muted">
                                                                Bandung, Jawa Barat
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>
                                                            Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit.
                                                            Delectus laudantium, voluptatem
                                                            quis repellendus eaque sit animi
                                                            illo ipsam amet officiis
                                                            corporis sed aliquam non
                                                            voluptate corrupti excepturi
                                                            maxime porro fuga.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Education Section-->
                                    <section>
                                        <h2 class="text-secondary fw-bolder mb-4">
                                            Education
                                        </h2>
                                        <!-- Education Card 1-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <div class="row align-items-center gx-5">
                                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                        <div class="bg-light p-4 rounded-4">
                                                            <div class="text-secondary fw-bolder mb-2">2024 - Now</div>
                                                            <div class="mb-2">
                                                                <div class="small fw-bolder">Telkom University</div>
                                                                <div class="small text-muted">Bandung, Jawa Barat</div>
                                                            </div>
                                                            <div class="fst-italic">
                                                                <div class="small text-muted">Undergraduate Degree</div>
                                                                <div class="small text-muted">Information Systems</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>
                                                            Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit.
                                                            Delectus laudantium, voluptatem
                                                            quis repellendus eaque sit animi
                                                            illo ipsam amet officiis
                                                            corporis sed aliquam non
                                                            voluptate corrupti excepturi
                                                            maxime porro fuga.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Education Card 2-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <div class="row align-items-center gx-5">
                                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                        <div class="bg-light p-4 rounded-4">
                                                            <div class="text-secondary fw-bolder mb-2">2021 - 2024</div>
                                                            <div class="mb-2">
                                                                <div class="small fw-bolder">Telkom University</div>
                                                                <div class="small text-muted">Bandung, Jawa Barat</div>
                                                            </div>
                                                            <div class="fst-italic">
                                                                <div class="small text-muted">Associate's Degree</div>
                                                                <div class="small text-muted">Accounting Information System</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>
                                                            Lorem ipsum dolor sit amet
                                                            consectetur adipisicing elit.
                                                            Delectus laudantium, voluptatem
                                                            quis repellendus eaque sit animi
                                                            illo ipsam amet officiis
                                                            corporis sed aliquam non
                                                            voluptate corrupti excepturi
                                                            maxime porro fuga.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Divider-->
                                    <div class="pb-5"></div>

                                    <!-- Skills Section-->
                                    <section class="bg-light py-5">
                                        <div class="container px-5 pb-5">
                                        <div class="text-center mb-5">
                                            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Skills</span></h1>
                                        </div>
                                        <!-- Skillset Card-->
                                        <div class="card shadow border-0 rounded-4 mb-5">
                                            <div class="card-body p-5">
                                                <!-- Professional skills list-->
                                                <div class="mb-5">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                                            <i class="bi bi-tools"></i>
                                                        </div>
                                                        <h3 class="fw-bolder mb-0">
                                                            <span class="text-gradient d-inline">Professional Skills</span>
                                                        </h3>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                        <div class="col mb-4 mb-md-0">
                                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100" >SEO/SEM Marketing</div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3">
                                                        <div class="col">
                                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Languages list-->
                                                <div class="mb-0">
                                                    <div
                                                        class="d-flex align-items-center mb-4"
                                                    >
                                                        <div
                                                            class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"
                                                        >
                                                            <i class="bi bi-code-slash"></i>
                                                        </div>
                                                        <h3 class="fw-bolder mb-0">
                                                            <span class="text-gradient d-inline">Languages</span >
                                                        </h3>
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                        <div class="col mb-4 mb-md-0">
                                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                                                        </div>                                              
                                                    </div>
                                                    <div class="row row-cols-1 row-cols-md-3"></div>
                                                        <div class="col">
                                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        </div>
                        </div>
            <!-- Projects Section-->
            <section class="bg-light py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Project Name 1</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                        </div>
                                        <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Project Name 2</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!</p>
                                        </div>
                                        <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            {{-- <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
                    </div>
                </div>
            </section> --}}


            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Full name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                    </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- Footer-->
        @include('components.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
