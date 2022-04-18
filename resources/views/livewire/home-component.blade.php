<main>
    {{-- slider starts --}}

    <div id="Slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#Slider" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#Slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#Slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slider/slide1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle w-100">
                    <h5 class="animate__animated animate__fadeInRight animate__delay-1s animation__repeate-1">Laptop
                        Repairs Fast, Affordable Price</h5>
                    <p class="animate__animated animate__fadeInUp animate__delay-2s animation__repeate-1">We are the
                        repair specialist for all brands & models.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider/slide2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle w-100">
                    <h5 class="animate__animated animate__fadeInRight animate__delay-0s animation__repeate-1">PC Support
                        that's there for Before You need it. </h5>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s animation__repeate-1">The best way
                        to fix your PC problems.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider/slide-3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption position-absolute top-50 start-50 translate-middle w-100">
                    <h5 class="animate__animated animate__fadeInRight animate__delay-0s animation__repeate-1">We are
                        Satisfied with our Work</h5>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s animation__repeate-1">We can handle
                        just about any tech question or computer repair that comes our way.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#Slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#Slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- slider ends --}}

    <!-- Card Starts -->

    <div class="py-5" id="first-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center py-3 animate__animated animate__fadeInLeft animate__delay-1s animation__repeate-1">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Repairs</h5>
                            <p class="card-text">While you wait or same day Service if you decide not to proceed
                                the repair of your laptop, we will pay you cash to buy it and return your hard drive or
                                transfer data for you.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 ">
                            <a href="#" class="btn btn-secondary">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center py-3 animate__animated animate__fadeIn animate__delay-2s animation__repeate-1">
                        <div class="card-body">
                            <h5 class="card-title">Desktop Repair</h5>
                            <p class="card-text">We service all makes and models of Computers. Most Computers are
                                repaired same day with parts available in stock. We service all models including: HP,
                                Apple, Acer, Lenovo/IBM, Dell, Samsung, Gateway, Asus, Alienware & more… </p>

                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#" class="btn btn-secondary">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center py-3 animate__animated animate__fadeInRight animate__delay-3s animation__repeate-1">
                        <div class="card-body">
                            <h5 class="card-title">Other Services</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>

                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <a href="#" class="btn btn-secondary">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Card Ends -->

    <!-- Get in touch starts -->
    <div class="py-3 py-md-5 bg-light" id="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="">
                        <h2 class="fs-3 text-primary">Get Your Computer Fixed NOW!</h2>
                    </div>
                    <div class="">
                        <strong><a href="tel:08880470007" class="btn btn-primary text-decoration-none"> Contact
                                Us</a></strong>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="border-start border-primary border-5">

                        <div class="ps-3">
                            <p>for one of our professional computer repair techs to help you with your Desktop, Laptop,
                                Mac
                                or other inquiry</p>
                        </div>
                        <div class="py-1 ps-3">
                            <a href="#" class="btn btn-primary">Get Your Repair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get in touch ends -->
    <!-- types of services  procedure start -->
    <div class="py-3 py-md-5" id="third-section">
        <div class="container">
            <div class="text-center">
                <h2 class="pt-2 text-center text-white mb-0">All Computer & Tablet Services</h2>
                <p class="py-1 text-center text-white fst-italic">We can Solve your Hardware and Software Problems</p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card border-0">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-laptop-medical"></i>
                            <h5 class="card-title text-center text-white">Diagnosing Your Device</h5>
                            <p class="card-text text-white">We will diagnose your issues, provide you with options and
                                give
                                you a price for FREE!</p>
                            <!-- <a href="#" class="btn btn-primary">More Info</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-compact-disc"></i>
                            <h5 class="card-title text-center text-white">Hardware & Software Installation</h5>
                            <p class="card-text text-white">We can help you determine what hardware install or software
                                installing solutions will best fit your needs. </p>
                            <!-- <a href="#" class="btn btn-primary">More Info</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            <h5 class="card-title text-center text-white">Professional Computer Repair</h5>
                            <p class="card-text text-white">We fix all sorts of computer issues! From software to
                                hardware we
                                have the solution!</p>
                            <!-- <a href="#" class="btn btn-primary">More Info</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card border-0">
                        <div class="card-body text-center animate__animated animate__flash animate__delay-1s animation__repeate-1">
                            <i class="fa-solid fa-shield-virus"></i>
                            <h5 class="card-title text-center text-white">Virus & Spyware Removal</h5>
                            <p class="card-text text-white">We work through a remote super-secure connection, and give
                                you a
                                full report when our work is done.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- types of servces procedure ends -->
    <!-- About starts -->
    <div class="py-3 py-md-5" id="fourth-section">
        <div class="container">
            <div class="row justify-content-center py-md-5">
                <div class="col-md-6">
                    <h2 class="text-primary">About Us</h2>
                    <p class="fst-italic">Your Local Computer Specialist Servicing</p>
                    <p>Computer Repair is dedicated to providing the best customer service and computer repair available
                        to you. When your Laptop, PC or Mac needs repairing, you won’t have to worry for long! Our
                        technicians are skilled in dealing with all computers and gadgets whether you need home or
                        business computer repairs.</p>
                    <ul>
                        <li>Microsoft Windows PC Computer Repair</li>
                        <li>Apple iMac and Macbook Computer Repair</li>
                        <li>Data Recovery</li>
                        <li>Viruses, Spyware, Adware and Ransom-ware Removal</li>
                        <li>Cracked and Broken Laptop Screen Replacements</li>
                        <li>Charging Issues, Charging Ports Repairs and Replacements</li>
                        <li>Computer Tune Ups, Hardware Repair, Installations</li>
                        <li>Printer Set Ups / Troubleshooting</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h1 class="text-primary">Free Estimate</h1>
                    <p class="fst-italic">Get your computer fixed today!</p>
                    <div class="form p-3 bg-light shadow-sm">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                        <label for="name">Enter Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col">

                                    <a href="#" class="btn btn-primary">Get a Quote</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->
    <!-- Testimonial starts -->
    <div class="py-3 py-md-5 bg-light" id="fifth-section">
        <div class="container">
            <div class="text-center">
                <h2 class="text-primary">Our Testimonials</h2>
                <p class="fst-italic">There are many valid reasons why you should choose us to take care of your
                    valuable device</p>
            </div>
            <div class="owl-carousel owl-theme" id="TestingSlider">
                <div class="item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <p>A well-known quote, contained in a blockquote element.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial starts -->
    <!-- Why us Starts -->
    <div class="py-3">
        <div class="container">
            <h2 class="text-center">Why Choose Us</h2>
            <p class="text-center">There are many valid reasons why you should choose us to take care of your
                valuable device</p>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-user-tie align-self-center"></i>
                            <h5 class="card-title">Experienced Professionals</h5>
                            <p class="card-text">We pride ourselves on being a professional computer repair
                                facility</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-computer-mouse"></i>
                            <h5 class="card-title">Expert Technical Skills</h5>
                            <p class="card-text">Our technical experts will get you honest, reliable and
                                professional help</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a>  -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-comments"></i>
                            <h5 class="card-title">Trustworthy See Reviews</h5>
                            <p class="card-text">Our business has been built on trust and customer
                                satisfaction</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-handshake-simple"></i>
                            <h5 class="card-title">Friendly Service</h5>
                            <p class="card-text">Most of the services below are repaired within hours, and in
                                most cases same day!</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-star"></i>
                            <h5 class="card-title">Excellent Reputation</h5>
                            <p class="card-text">We have built our reputation on the attention to details and
                                our loyal service to our customers</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-stethoscope"></i>
                            <h5 class="card-title">Affordable Diagnosis</h5>
                            <p class="card-text">We will diagnose your issues, provide you with options and
                                give you a price for FREE!</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </div>
    <!-- Why us ends -->
    <!-- Getting Help -->
    <div class="py-3">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h2 class="text-center">Getting Help Easy</h2>
                    <p class="text-center">Have a question? Give us a call or stop by a quote. It's that easy.
                    </p>
                    <div class="text-center mx-2">
                        <a href="#" class="btn btn-primary">Book An Engineer</a>
                        <a href="#" class="btn btn-primary">Ask a Question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Getting Help -->
    <!-- Certification Blocks -->
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/slider/sertficate-01.png') }}" alt="" class="img-fluid">
                    <h5 class="text-center">We Value Your Time</h5>
                    <p class="text-center">Our tech support saves your time and energy and lets you enjoy your
                        computer to the max.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/slider/sertficate-02.png') }}" alt="" class="img-fluid">
                    <h5 class="text-center">Remote, Hyper-secure Connection</h5>
                    <p class="text-center">You select the service you need, and our tech support does all the
                        work through a remote, hyper-secure connection.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/slider/sertficate-03.png') }}" alt="" class="img-fluid">
                    <h5 class="text-center">Customer Happiness</h5>
                    <p class="text-center">Your satisfaction is our #1 priority. We pledge to be by your side
                        until you are 100% satisfied with our services.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Certification Blocks -->
</main>
