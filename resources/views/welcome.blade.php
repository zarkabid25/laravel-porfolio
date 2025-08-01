<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Zark Abid - Portfolio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@400;700&family=Poppins&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                    <img class="w-100 img-fluid mb-4" src="{{ asset('img/portfolio-img.jpg') }}" alt="Image">
                    <h1 class="mt-2">Zark Abid</h1>
                    <div class="mb-4" style="height: 22px;">
                        <h4 class="typed-text-output d-inline-block text-body"></h4>
                        <div class="typed-text d-none">Software Engineer</div>
                    </div>
                    <div class="d-flex justify-content-center mt-auto mb-3">
                        <a class="mx-2" href="https://www.linkedin.com/in/zark-abid-43057a9a/" target="_blank">
                            <i class="fab fa-linkedin-in"></i></a>
                        <a class="mx-2" href="https://github.com/zarkabid25" target="_blank">
                            <i class="fab fa-github" aria-hidden="true"></i></a>
                    </div>
                    <div class="d-flex align-items-end justify-content-between">
                        <a href="{{ asset('cv/Zark_Abid_Updated_Laravel_Developer_Resume.pdf') }}" class="btn btn-block border-right" download>Download CV</a>
                        <a href="#contact" class="btn btn-block btn-scroll">Contact Me</a>
                    </div>
                </div>
                <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                    <i class="fas fa-2x fa-angle-double-right text-primary"></i>
                </div>
            </div>
            <div class="content">
                <!-- About Start -->
                <div class="container bg-white py-5" id="about">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">About Me</h2>
                        </div>
                        <div class="col-12">
                            <p>Dynamic and innovative Software Engineer with over 4+ years of experience, specializing in PHP, JavaScript, SQL,
                                and modern frameworks like Laravel, CodeIgnitor, Vue JS. I'm passionate about building scalable web applications and
                                solving complex problems through elegant code. Beyond coding, I enjoy staying updated with the latest tech trends, contributing
                                to open-source projects, and mentoring junior developers. I believe in writing clean, maintainable code and creating intuitive
                                user experiences.</p>
                            <div class="row">
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Name:</h5> Zark Abid
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Birthday:</h5> 25 November, 1993
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Degree:</h5> Bachelors
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Experience:</h5> 4+ Years
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Phone:</h5> +(92) 316-4361158
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Email:</h5> zarkabid2511@gmail.com
                                </div>
                                <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Address:</h5> 16-A millat road near Samanabad Lahore
                                </div>
                                <!-- <div class="col-sm-6 py-1">
                                    <h5 class="d-inline text-primary">Freelance:</h5> Available
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->


                <!-- Skills Start -->
                <div class="container bg-white py-5" id="skills">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Skills</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">HTML</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">CSS</p>
                                    <p class="mb-2">85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Bootstrap</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">PHP</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">CodeIgnitor</p>
                                    <p class="mb-2">80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Laravel</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row px-3">
                        <div class="col-sm-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">JavaScript</p>
                                    <p class="mb-2">80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">jQuery</p>
                                    <p class="mb-2">80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">API Integration</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            {{-- <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Vue JS</p>
                                    <p class="mb-2">70%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="col-sm-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">SQL</p>
                                    <p class="mb-2">75%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">AJAX</p>
                                    <p class="mb-2">80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Skills End -->

                <!-- Education -->
                 <div class="container bg-white py-5">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Education</h2>
                        </div>
                        <div class="col-12">
                            <div class="border-left border-primary pt-2 pl-4 ml-2">
                                <div class="position-relative mb-4">
                                    <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                                    <h5 class="mb-1">Bachelors of Science in Computer Science</h5>
                                    <p class="mb-2">Virtual University of Pakistan | <small>2017</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Education Start -->
                <div class="container bg-white py-5" id="experiences">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Expericence</h2>
                        </div>
                        <div class="col-12">
                            <div class="border-left border-primary pt-2 pl-4 ml-2">
                                <div class="position-relative mb-4">
                                    <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                                    <h5 class="mb-1">Senior Software Engineer</h5>
                                    <p class="mb-2"> Ozoned Digital | <small>Jul 2003 - Present</small></p>
                                    <p> Working as Senior Software Engineer. Ozoned Tech is Insurance Tech service provider software house. There major products are Jubilee Health Life Insurance
                                        (Pakistan, Kenya, Tanzania, Uganda) and Adam Jee.</p>
                                </div>
                                <div class="position-relative mb-4">
                                    <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                                    <h5 class="mb-1"> PHP Laravel Developer</h5>
                                    <p class="mb-2"> LeadConcept Software House | <small>Feb 2022 - June 2023</small></p>
                                    <p>Working as PHP Developer at Lead Concept. It's a service based software house.
                                        Major projects are (zippys, christopher games).</p>
                                </div>
                                <div class="position-relative mb-4">
                                    <i class="fa fa-arrow-right text-primary position-absolute" style="top: 3px; left: -24px;"></i>
                                    <h5 class="mb-1">Web Developer</h5>
                                    <p class="mb-2">Raheem Tech Software House | <small>Feb 2020 - Jan 2022</small></p>
                                    <p> Working as Web Developer (PHP, Laravel) at Raheem Tech. It's service based
                                        software house. Major projects are (Dabos, Talgaha, SafaidPoosh)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education End -->


                <!-- Subscribe Start -->
                <!-- <div class="container bg-white py-5 px-0">
                    <div class="bg-primary text-center p-5">
                        <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
                        <p class="text-white">Subscribe and get my latest article in your inbox</p>
                        <form class="form-inline justify-content-center">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-dark px-4" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
                <!-- Subscribe End -->


                <!-- Services Start -->
                <div class="container bg-white pt-5 pb-3" id="services">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Services</h2>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                            <h5 class="mb-2">Web Design</h5>
                            <p>I craft visually appealing and responsive web designs using HTML, CSS, Bootstrap, and Vue.js,
                                ensuring modern and accessible design across all devices.</p>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                            <h5 class="mb-2">Web Development</h5>
                            <p>I build fast, secure, and scalable web applications using PHP frameworks like Laravel and CodeIgniter. Whether it's a custom CMS, API integration, or full-stack solution,
                                I deliver clean, maintainable code with performance in mind.</p>
                        </div>
                        <!-- <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-search mx-auto mb-4"></i>
                            <h5 class="mb-2">SEO</h5>
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div>
                        <div class="col-md-6 service-item text-center mb-3">
                            <i class="fa fa-2x fa-edit mx-auto mb-4"></i>
                            <h5 class="mb-2">Content Creating</h5>
                            <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore</p>
                        </div> -->
                    </div>
                </div>
                <!-- Services End -->


                <!-- Portfolio Start -->
                <div class="container bg-white pt-5 pb-3" id="portfolios">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Portfolio</h2>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 text-center mb-2">
                                    <ul class="list-inline mb-4" id="portfolio-flters">
                                        <li class="btn btn-outline-primary active"  data-filter="*"><i class="fa fa-star mr-2"></i>All</li>
                                        <li class="btn btn-outline-primary" data-filter=".first"><i class="fa fa-laptop-code mr-2"></i>Design</li>
                                        <li class="btn btn-outline-primary" data-filter=".second"><i class="fa fa-mobile-alt mr-2"></i>Development</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row portfolio-container">
                                <div class="col-md-6 mb-4 portfolio-item second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <a href="https://shop.milkkitchen.co/login" target="_blank">
                                            <img class="img-fluid w-100" src="img/milk-kitchen.png" alt="">
                                        </a>
                                        <div style="text-align: center; margin-top: 20px !important;">
                                            <p><span style="font-weight: bold;">Milk Kitchen</span> is online milk supply portal. Customers who are purchasing milk from
                                            this company, their records are stored in this portal. Orders are tracked weekly
                                            and fortnightly. This portal is specialized for New Zealand people only</p>
                                        </div>

                                        <!-- <div class="d-flex align-items-center justify-content-center">
                                            <a href="https://shop.milkkitchen.co/login" > -->
                                                <!-- <i class="fa fa-4x fa-plus text-white"></i> -->
                                            <!-- </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item first second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <a href="https://otoz.ai" target="_blank">
                                            <img class="img-fluid w-100" src="img/otozai.png" alt="">
                                        </a>
                                        <div style="text-align: center; margin-top: 20px !important;">
                                            <p><span style="font-weight: bold;">Otozai</span> is a product based import export auction website for cars. It has three roles
                                            (customer, dealer, admin), Dealers add their cars on portal that customer see in
                                            frontend so he can make quotation for any car which customer want to buy. After
                                            completing of all steps car will export and deliver to customer given address all
                                            over the world.</p>
                                        </div>
                                        <!-- <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="https://otoz.ai" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item first second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <a href="https://dabos.com" target="_blank">
                                            <img class="img-fluid w-100" src="img/dabos.png" alt="">
                                        </a>
                                        <div style="text-align: center; margin-top: 20px !important;">
                                            <p>
                                                <span style="font-weight: bold;">Dabos</span>, the major purpose is to track shipping orders of medical equipments just like TCS, Leopard but an
                                                additional functionality in it is map tracker same like uber, careem map tracker.
                                            </p>
                                        </div>
                                        <!-- <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="https://dabos.com" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 portfolio-item second">
                                    <div class="position-relative overflow-hidden mb-2">
                                        <a href="https://www.nordicxpresslimousine.dk" target="_blank">
                                            <img class="img-fluid w-100" src="img/nxl.png" alt="">
                                        </a>
                                        <div style="text-align: center; margin-top: 20px !important;">
                                            <p><span style="font-weight: bold;">NXL</span> is taxi Service Company that is linked with third parties who book NXL taxis for passengers who comes from different
                                                countries, so taxis pick passengers from Airport and drop them on their destination.</p>
                                        </div>
                                        <!-- <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                            <a href="https://www.nordicxpresslimousine.dk" data-lightbox="portfolio">
                                                <i class="fa fa-4x fa-plus text-white"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio End -->


                <!-- Testimonial Start -->
                <!-- <div class="container bg-white py-5">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Testimonial</h2>
                        </div>
                        <div class="col-12">
                            <div class="owl-carousel testimonial-carousel">
                                <div class="text-left">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                                        <div class="pl-3">
                                            <h5 class="text-primary m-0">Client Name</h5>
                                            <i>Profession</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                                        <div class="pl-3">
                                            <h5 class="text-primary m-0">Client Name</h5>
                                            <i>Profession</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="text-body mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                                        <div class="pl-3">
                                            <h5 class="text-primary m-0">Client Name</h5>
                                            <i>Profession</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Testimonial End -->


                <!-- Contact Start -->
                <div class="container bg-white py-5" id="contact">
                    <div class="row px-3">
                        <div class="col-12">
                            <h2 class="title position-relative pb-2 mb-4">Contact Me</h2>
                        </div>
                        <div class="col-12">
                            <div class="contact-form">
                                <div id="success"></div>
                               <form id="" action="{{ route('contact.form') }}" method="POST">
                                    @csrf

                                    <div class="form-row">
                                        <div class="control-group col-sm-6 mb-3">
                                            <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name"
                                                value="{{ old('name') }}" required />
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="control-group col-sm-6 mb-3">
                                            <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email"
                                                value="{{ old('email') }}" required />
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="control-group mb-3">
                                        <input type="text" class="form-control p-4" name="subject" id="subject" placeholder="Subject"
                                            value="{{ old('subject') }}" required />
                                        @error('subject')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="control-group mb-3">
                                        <textarea class="form-control py-3 px-4" rows="5" name="message" id="message" placeholder="Message"
                                            required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div>
                                        <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->


                <!-- Footer Start -->
                <div class="container-fluid bg-white pt-5 px-0">
                    <div class="container bg-dark text-light text-center py-5">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/in/zark-abid-43057a9a/" target="_blank">
                                <i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="https://github.com/zarkabid25" target="_blank">
                                <i class="fab fa-github"></i></a>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a class="text-white" href="#about">About</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#skills">Skills</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#experiences">Experience</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#portfolios">Portfolio</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#services">Services</a>
                            <span class="px-3">|</span>
                            <a class="text-white" href="#contact">Contact</a>
                        </div>
                        <p class="m-0">&copy; 2025 Zark Abid. All Rights Reserved.</p>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
