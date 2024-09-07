<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AnythingDigital - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">AnythingDigital</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="{{route('job-list')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('job-list')}}" class="dropdown-item">Job List</a>
                            <a href="{{route('job-detail')}}" class="dropdown-item">Job Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('category')}}" class="dropdown-item">Job Category</a>
                            <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                            <a href="{{route('404')}}" class="dropdown-item">404</a>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">404 Error</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">404 Error</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary py-3 px-5" href="{{route('home')}}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->

        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">AnythingDigital</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="">AnythingDigital</a>
                        </div>
                        <div class="h-100" [ngClass]="{ previewBodyForm: !fullScreenVisible, previewBodyFormFull: fullScreenVisible }">
                            <div class="text-center" id="personalinfo">
                                <h1 class="m-0">{{ f["user_name"].value }}</h1>
                                <p class="m-0">{{ f["user_job_title"].value }}</p>
                                <hr />
                                <div class="d-flex justify-content-between font-12">
                                    <a [href]="'tel:' + f['user_phone'].value" target="_Blank">{{ f["user_phone"].value }}</a>
                                    <a [href]="'tel:' + f['user_email'].value" target="_Blank">{{ f["user_email"].value }}</a>
                                    <a [href]="f['user_linkedin'].value" target="_Blank">LinkedIn</a>
                                    <a [href]="f['user_website'].value" target="_Blank">{{ f["user_website"].value }}</a>
                                    <span>{{ f["user_location"].value }}</span>
                                </div>
                                <hr />
                                <div>
                                    <h2>Summary</h2>
                                    <p class="m-0" [innerHTML]="f['user_summary'].value"></p>
                                </div>
                            </div>
                            <hr />
                            <div class="d-flex gap-1">
                                <div class="w-75 d-flex flex-column">
                                    <div id="education">
                                        <h2 class="m-0">Education</h2>
                                        <div class="d-flex flex-wrap">
                                            <div class="w-50" *ngFor="let edu of getEduDetailsArray.controls">
                                                <h3 class="m-0">{{ edu.value.edu_degree }}</h3>
                                                <h4 class="m-0">{{ edu.value.edu_college_name }} {{ edu.value.edu_percentage ? " | " +
                                                    edu.value.edu_percentage : "" }} {{ edu.value.edu_cgpa_percentage }}</h4>
                                                <p class="m-0">{{ edu.value.edu_location }} {{ edu.value.edu_start_year }} {{
                                                    edu.value.edu_end_year ? " - " + edu.value.edu_end_year : "" }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div id="experience">
                                        <h2 class="m-0">Experience</h2>
                                        <div class="mb-1" *ngFor="let exp of getWorkExpArray.controls">
                                            <h3 class="m-0">{{ exp.value.work_designation }} {{ exp.value.work_type ? " - " +
                                                exp.value.work_type : "" }}</h3>
                                            <h4 class="m-0">{{ exp.value.work_org_name }} {{ exp.value.work_location ? " | " +
                                                exp.value.work_location : "" }} {{ exp.value.work_start_year ? " | " +
                                                exp.value.work_start_year : "" }} {{ exp.value.work_end_year ? " - " +
                                                exp.value.work_end_year : "" }}</h4>
                                            <p class="m-0" [innerHTML]="exp.value.work_job_description"></p>
                                        </div>
                                    </div>
                                    <hr />
                                    <div id="project">
                                        <h2 class="m-0">Project</h2>
                                        <div class="mb-1" *ngFor="let project of getProjectDetailsArray.controls">
                                            <h3 class="m-0">{{ project.value.project_name }}</h3>
                                                <h4 class="m-0">{{ project.value.project_start_name }} {{ project.value.project_end_name ? " - "
                                                    + project.value.project_end_name : "" }}</h4>
                                            <p class="m-0" [innerHTML]="project.value.project_description"></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <hr class="h-100" />
                                </div>
                                <div class="w-25 d-flex flex-column">
                                    <div id="certificates">
                                        <h2 class="m-0">Certificates</h2>
                                        <div *ngFor="let certificate of getCertificatesArray.controls">
                                            <h3 class="m-0">{{ certificate.value.certificate_name }}</h3>
                                            <h4 class="m-0">{{ certificate.value.certificate_issued }}</h4>
                                            <p class="m-0">{{ certificate.value.certificate_id }}</p>
                                            <a [href]="certificate.value.certicate_link" target="_Blank">Certificate Link</a>
                                        </div>
                                    </div>
                                    <hr />
                                    <div id="language">
                                        <h2 class="m-0">Languages Known</h2>
                                        <ul>
                                            <li *ngFor="let lang of getLanguagesKnownArray.controls">{{ lang.value.language }} {{
                                                lang.value.lang_proficiency ? " - " + lang.value.lang_proficiency : "" }}</li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div id="skills">
                                        <h2 class="m-0">Skills</h2>
                                        <ul>
                                            <li *ngFor="let skill of getSkillsArray.controls">{{ skill.value.skills }} {{
                                                skill.value.skills_proficiency ? " - " + skill.value.skills_proficiency : "" }}</li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div id="hobbies">
                                        <h2 class="m-0">Hobbies</h2>
                                        <ul>
                                            <li *ngFor="let hobby of getHobbiesArray.controls">{{ hobby.value.hobbies }}</li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div id="achievements">
                                        <h2 class="m-0">Other Achievements</h2>
                                        <ul>
                                            <li *ngFor="let extra of getExtraCurricularArray.controls">{{
                                                extra.value.extra_curricular_activites }}</li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div id="references">
                                        <h2 class="m-0">References</h2>
                                        <div *ngFor="let refer of getReferenceArray.controls">
                                            <h4 class="m-0">{{ refer.value.ref_name }} {{ refer.value.ref_position ? " | " +
                                                refer.value.ref_position : "" }}</h4>
                                            <p class="m-0">{{ refer.value.ref_organization }} {{ refer.value.ref_contact ? " | " +
                                                refer.value.ref_contact : "" }}</p>
                                            <p>{{ refer.value.ref_email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                   <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>