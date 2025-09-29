<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <title>Jandel's Portfolio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <!-- In your <head> or before </body> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <style>
        html {
            scroll-behavior: smooth;
        }

        @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
        $main-green: #79dd09 !default;
        $main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
        $main-yellow: #bdbb49 !default;
        $main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
        $main-red: #bd150b !default;
        $main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
        $main-blue: #0076bd !default;
        $main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

        /* This pen */

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            /* font-family: "Baloo 2", cursive; */
            /* font-size: 16px; */
            color: inherit;
            text-rendering: optimizeLegibility;
            font-weight: initial;
            overflow-x: hidden

        }

        .dark {
            background: #110f16;
        }


        .light {
            background: #ffffff;
        }

        a,
        a:hover {
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        #pageHeaderTitle {
            margin: 2rem 0;
            text-transform: uppercase;
            text-align: center;
            font-size: 2.5rem;
        }

        /* Cards */
        .postcard {
            flex-wrap: wrap;
            display: flex;

            box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
            border-radius: 10px;
            margin: 0 0 2rem 0;
            overflow: hidden;
            position: relative;
            color: #ffffff;

            &.dark {
                background-color: #18151f;
            }

            &.light {
                background-color: #e1e5ea;
            }

            .t-dark {
                color: #18151f;
            }

            a {
                color: inherit;
            }

            h1,
            .h1 {
                margin-bottom: 0.5rem;
                font-weight: 500;
                line-height: 1.2;
            }

            .small {
                font-size: 80%;
            }

            .postcard__title {
                font-size: 1.75rem;
            }

            .postcard__img {
                max-height: 180px;
                width: 100%;
                object-fit: cover;
                position: relative;
            }

            .postcard__img_link {
                display: contents;
            }

            .postcard__bar {
                width: 50px;
                height: 10px;
                margin: 10px 0;
                border-radius: 5px;
                background-color: #62BCFC;
                transition: width 0.2s ease;
            }

            .postcard__text {
                padding: 1.5rem;
                position: relative;
                display: flex;
                flex-direction: column;
            }

            .postcard__preview-txt {
                overflow: hidden;
                text-overflow: ellipsis;
                text-align: justify;
                height: 100%;
            }

            .postcard__tagbox {
                display: flex;
                flex-flow: row wrap;
                font-size: 14px;
                margin: 20px 0 0 0;
                padding: 0;
                justify-content: center;

                .tag__item {
                    display: inline-block;
                    background-color: #62BCFC;
                    border-radius: 3px;
                    padding: 2.5px 10px;
                    margin: 0 5px 5px 0;
                    cursor: default;
                    user-select: none;
                    transition: background-color 0.3s;

                    &:hover {
                        background: #20a0fc;
                    }
                }
            }

            &:before {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-image: linear-gradient(-70deg, #424242, transparent 50%);
                opacity: 1;
                border-radius: 10px;
            }

            &:hover .postcard__bar {
                width: 100px;
            }
        }

        .g-recaptcha {
            margin: 10px 0;
        }


        @media screen and (min-width: 769px) {
            .postcard {
                flex-wrap: inherit;

                .postcard__title {
                    font-size: 2rem;
                }

                .postcard__tagbox {
                    justify-content: start;
                }

                .postcard__img {
                    max-width: 300px;
                    max-height: 100%;
                    transition: transform 0.3s ease;
                }

                .postcard__text {
                    padding: 3rem;
                    width: 100%;
                }

                .media.postcard__text:before {
                    content: "";
                    position: absolute;
                    display: block;
                    background: #18151f;
                    top: -20%;
                    height: 130%;
                    width: 55px;
                }

                &:hover .postcard__img {
                    transform: scale(1.1);
                }

                &:nth-child(2n+1) {
                    flex-direction: row;
                }

                &:nth-child(2n+0) {
                    flex-direction: row-reverse;
                }

                &:nth-child(2n+1) .postcard__text::before {
                    left: -12px !important;
                    transform: rotate(4deg);
                }

                &:nth-child(2n+0) .postcard__text::before {
                    right: -12px !important;
                    transform: rotate(-4deg);
                }
            }
        }

        @media screen and (min-width: 1024px) {
            .postcard__text {
                padding: 2rem 3.5rem;
            }

            .postcard__text:before {
                content: "";
                position: absolute;
                display: block;

                top: -20%;
                height: 130%;
                width: 55px;
            }

            .postcard.dark {
                .postcard__text:before {
                    background: #18151f;
                }
            }

            .postcard.light {
                .postcard__text:before {
                    background: #e1e5ea;
                }
            }
        }

        /* COLORS */
        .postcard .postcard__tagbox .green.play:hover {
            background: $main-green;
            color: black;
        }

        .green .postcard__title:hover {
            color: $main-green;
        }

        .green .postcard__bar {
            background-color: $main-green;
        }

        .green::before {
            background-image: linear-gradient(-30deg,
                    $main-green-rgb-015,
                    transparent 50%);
        }

        .green:nth-child(2n)::before {
            background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
        }

        .postcard .postcard__tagbox .blue.play:hover {
            background: $main-blue;
        }

        .blue .postcard__title:hover {
            color: $main-blue;
        }

        .blue .postcard__bar {
            background-color: $main-blue;
        }

        .blue::before {
            background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
        }

        .blue:nth-child(2n)::before {
            background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
        }

        .postcard .postcard__tagbox .red.play:hover {
            background: $main-red;
        }

        .red .postcard__title:hover {
            color: $main-red;
        }

        .red .postcard__bar {
            background-color: $main-red;
        }

        .red::before {
            background-image: linear-gradient(-30deg, $main-red-rgb-015, transparent 50%);
        }

        .red:nth-child(2n)::before {
            background-image: linear-gradient(30deg, $main-red-rgb-015, transparent 50%);
        }

        .postcard .postcard__tagbox .yellow.play:hover {
            background: $main-yellow;
            color: black;
        }

        .yellow .postcard__title:hover {
            color: $main-yellow;
        }

        .yellow .postcard__bar {
            background-color: $main-yellow;
        }

        .yellow::before {
            background-image: linear-gradient(-30deg,
                    $main-yellow-rgb-015,
                    transparent 50%);
        }

        .yellow:nth-child(2n)::before {
            background-image: linear-gradient(30deg,
                    $main-yellow-rgb-015,
                    transparent 50%);
        }

        @media screen and (min-width: 769px) {
            .green::before {
                background-image: linear-gradient(-80deg,
                        $main-green-rgb-015,
                        transparent 50%);
            }

            .green:nth-child(2n)::before {
                background-image: linear-gradient(80deg,
                        $main-green-rgb-015,
                        transparent 50%);
            }

            .blue::before {
                background-image: linear-gradient(-80deg,
                        $main-blue-rgb-015,
                        transparent 50%);
            }

            .blue:nth-child(2n)::before {
                background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
            }

            .red::before {
                background-image: linear-gradient(-80deg, $main-red-rgb-015, transparent 50%);
            }

            .red:nth-child(2n)::before {
                background-image: linear-gradient(80deg, $main-red-rgb-015, transparent 50%);
            }

            .yellow::before {
                background-image: linear-gradient(-80deg,
                        $main-yellow-rgb-015,
                        transparent 50%);
            }

            .yellow:nth-child(2n)::before {
                background-image: linear-gradient(80deg,
                        $main-yellow-rgb-015,
                        transparent 50%);
            }
        }

        /* From Uiverse.io by adamgiebl */
.dots-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
}

.dot {
  height: 20px;
  width: 20px;
  margin-right: 10px;
  border-radius: 10px;
  background-color: #b3d4fc;
  animation: pulse 1.5s infinite ease-in-out;
}

.dot:last-child {
  margin-right: 0;
}

.dot:nth-child(1) {
  animation-delay: -0.3s;
}

.dot:nth-child(2) {
  animation-delay: -0.1s;
}

.dot:nth-child(3) {
  animation-delay: 0.1s;
}

@keyframes pulse {
  0% {
    transform: scale(0.8);
    background-color: #b3d4fc;
    box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
  }

  50% {
    transform: scale(1.2);
    background-color: #6793fb;
    box-shadow: 0 0 0 10px rgba(178, 212, 252, 0);
  }

  100% {
    transform: scale(0.8);
    background-color: #b3d4fc;
    box-shadow: 0 0 0 0 rgba(178, 212, 252, 0.7);
  }
}
    </style>

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu" id="mainNav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="#"><img src="img/logo4.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link active" href="#home"
                                    style="position: relative; color: #007BFF; text-decoration: none;">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about"
                                    style="position: relative; text-decoration: none;">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#services"
                                    style="position: relative; text-decoration: none;">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#projects"
                                    style="position: relative; text-decoration: none;">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blogs"
                                    style="position: relative; text-decoration: none;">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" id="contactBtn"
                                    style="position: relative; text-decoration: none; cursor: pointer;">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area " id="home" style="position: relative; overflow: hidden;">
        <div id="dna-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;"></div>
        <div class="banner_inner">
            <div class="container" style="position: relative; z-index: 1;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_left_img" data-aos="fade-right" data-aos-duration="1000">
                            <img src="img/banner/banner-left-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h5>This is me</h5>
                            <h2>Jandel Lopez</h2>
                            <p>Always learning. Always building. Bringing ideas to life on the web.</p>
                            <a class="banner_btn" href="#" id="contactBtn1" data-aos="fade-left"
                                data-aos-duration="1000">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_area p_120" id="about">
        <div class="container">
            <div class="row welcome_inner">
                <div class="col-lg-6">
                    <div class="welcome_text">
                        <h4>About Myself</h4>
                        <p>Web development is my passion because it allows me to combine creativity with technical
                            skills to build functional, user-friendly, and visually appealing websites. I thrive on the
                            challenge of transforming ideas into reality, whether it’s through crafting clean and
                            efficient code, designing intuitive user interfaces, or optimizing performance for a
                            seamless user experience.</p>
                        <div class="row">
                            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                                <div class="wel_item">
                                    <i class="lnr lnr-database"></i>
                                    <h4>₱50.00</h4>
                                    <p>Total Donation</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                                <div class="wel_item">
                                    <i class="lnr lnr-book"></i>
                                    <h4>5</h4>
                                    <p>Total Projects</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                                <div class="wel_item">
                                    <i class="lnr lnr-users"></i>
                                    <h4>5</h4>
                                    <p>Total Volunteers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tools_expert">
                        <h3>Tools Expertness</h3>
                        <div class="skill_main">
                            <div class="skill_item">
                                <h4>Laravel Filament <span class="counter">75</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>Photoshop <span class="counter">85</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>HTML <span class="counter">70</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>CSS <span class="counter">50</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill_item">
                                <h4>PHP <span class="counter">50</span>%</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Welcome Area =================-->

    <!--================Feature Area =================-->

    <section class="feature_area p_120" id="services">
        {{-- <div id="dna-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;"></div> --}}
        <div class="container" style="position: relative; z-index: 1;">
            <div class="main_title">
                <h2>Services</h2>
                <p>Turning ideas into functional, responsive, and user-friendly websites.</p>
            </div>
            <div class="feature_inner row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="feature_item">
                            {{-- <i class="flaticon-city"></i> --}}
                            <h4>{{ $service->name }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->

    <!--================Projects Area =================-->

    <section class="light projects_area p_120" id="projects">
        <div class="container py-2">
            <div class="main_title">
                <h2>My Recent Completed Projects</h2>
                <p>Turning complex workflows into simple, one solution at a time.</p>
            </div>
            @foreach ($projects as $project)
                <article class="postcard light blue" data-aos="fade-up" data-aos-duration="1000">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="{{ asset(Storage::url($project->image)) }}"
                            alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue"><a href={{ $project->link }}
                                target="_blank">{{ $project->name }}</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i
                                    class="fas fa-calendar-alt mr-2"></i>{{ \Carbon\Carbon::parse($project->start_date)->format('F j, Y') }}
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">{{ $project->description }}</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item">
                                <a href="{{ $project->link }}" target="_blank"
                                    style="text-decoration: none; color: inherit;">
                                    <i class="fa-solid fa-globe" style="margin-right: 6px;"></i>Visit site
                                </a>
                            </li>
                            <li class="tag__item">
                                <a href="{{ $project->code }}" target="_blank"
                                    style="text-decoration: none; color: inherit;">
                                    <i class="fa-solid fa-code" style="margin-right: 6px;"></i>View code
                                </a>
                            </li>


                        </ul>
                    </div>
                </article>
            @endforeach

        </div>
    </section>
    <!--================End Projects Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area p_120" id="testimonials">
        <div class="container">
            <div class="main_title">
                <h2>Testimonials</h2>
                <p>Trusted by clients. Appreciated for quality. Here's some feedback I’ve received.</p>
            </div>
            <div class="testi_inner">
                <div class="testi_slider owl-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="testi_item text-center">
                                <div class="container d-flex justify-content-center mb-3">
                                    <img src="{{ asset(Storage::url($testimonial->image)) }}"
                                        alt="{{ $testimonial->name }}"
                                        style="width: 100px; height: 100px; object-fit: cover; border-radius: 100%;">
                                </div>
                                <p>{{ $testimonial->testimonial }}</p>
                                <h4>{{ $testimonial->name }}</h4>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->


    <!--================Latest Blog Area =================-->
    <section class="latest_blog_area p_120" id="blogs">
        <div class="container">
            <div class="main_title">
                <h2>Latest Posts from Blog</h2>
                <p>Welcome to my blog! Here, I share insights, tips, and updates about web development, design, and the
                    projects I’m working on.</p>
            </div>
            <div class="row latest_blog_inner">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="l_blog_item">
                            <div class="l_blog_img">
                                <img class="img-fluid" src={{ asset(Storage::url($blog->featured_image)) }}
                                    alt="">
                            </div>
                            <div class="l_blog_text">
                                <div class="date">
                                    <a href="#">{{ $blog->created_at->format('F j, Y') }} | By
                                        {{ $blog->author }}</a>
                                </div>
                                <a href="javascript:void(0);" onclick="openModal({{ $blog->id }})">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <p>{{ Str::of($blog->content)->matchAll('/[^.!?]+[.!?]/')->take(2)->implode(' ') }}</p>
                            </div>
                        </div>
                    </div>
                    <div id="modal-{{ $blog->id }}" class="modal"
                        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
                                background-color: rgba(0, 0, 0, 0.5); z-index: 9999; justify-content: center; align-items: center;">
                        <div
                            style="background-color: #fff; padding: 24px; border-radius: 8px; width: 90%; max-width: 600px; position: relative;">
                            <button onclick="closeModal({{ $blog->id }})"
                                style="position: absolute; top: 12px; right: 12px; background: none; border: none; font-size: 24px; cursor: pointer;">
                                &times;
                            </button>
                            <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 8px;">{{ $blog->title }}
                            </h2>
                            <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 16px;">
                                Published on {{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}
                            </p>
                            <div
                                style="color: #1f2937; line-height: 1.6; max-height: 300px; overflow-y: auto; padding-right: 8px;">
                                {!! nl2br(e($blog->content)) !!}
                            </div>

                        </div>
                    </div>
                    <!-- Modal Script -->
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Latest Blog Area =================-->
    <!--================End Latest Blog Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area p_120">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6" data-aos="fade-right" data-aos-duration="1000">
                    <aside class="f_widget ab_widget">
                        <div class="f_title">
                            <h3>About Me</h3>
                        </div>
                        <p>Do you want to be even more successful? Learn to love learning and growth. The more effort
                            you put into improving your skills, the more doors you’ll see swing open—opportunities you
                            never even noticed before will start popping up everywhere, and challenges that once felt
                            huge will shrink into welcome chances to level‑up.</p>
                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | By Jandel Lopez
                        </p>
                    </aside>
                </div>
                <div class="col-lg-5 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <aside class="f_widget news_widget">
                        <div class="f_title">
                            <h3>Newsletter</h3>
                        </div>
                        <div id="mc_embed_signup">
                            <div id="mc_embed_shell">
                                <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet"
                                    type="text/css">
                                <style type="text/css">
                                    #mc_embed_signup {
                                        background: #000410;
                                        false;
                                        clear: left;
                                        font: 14px Helvetica, Arial, sans-serif;
                                        width: auto;
                                    }
                                </style>
                                {{-- <div id="mc_embed_signup"> --}}
                                <form
                                    action="https://space.us16.list-manage.com/subscribe/post?u=9baa2c5c90016b5bd148cc2f7&amp;id=77dc1d2cf8&amp;f_id=00ca91e1f0"
                                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                    class="validate" target="_blank">
                                    <div id="mc_embed_signup_scroll">
                                        <h2 style="color: white">Stay updated with my latest trends</h2>
                                        <div class="indicates-required" style="color: white"><span class="asterisk">*</span> indicates
                                            required</div>
                                        <div class="mc-field-group" style="color: white"><label for="mce-EMAIL">Email Address <span
                                                    class="asterisk">*</span></label><input type="email"
                                                name="EMAIL" class="required email" id="mce-EMAIL" required=""
                                                value=""></div>
                                        <div id="mce-responses" class="clear foot">
                                            <div class="response" id="mce-error-response" style="display: none;">
                                            </div>
                                            <div class="response" id="mce-success-response" style="display: none;">
                                            </div>
                                        </div>
                                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                                            /* real people should not fill this in and expect good things - do not
                                            remove this or risk form bot signups */
                                            <input type="text" name="b_9baa2c5c90016b5bd148cc2f7_77dc1d2cf8"
                                                tabindex="-1" value="">
                                        </div>
                                        <div class="optionalParent">
                                            <div class="clear foot">
                                                <input type="submit" name="subscribe" id="mc-embedded-subscribe"
                                                    class="button" value="Subscribe">
                                                {{-- <p style="margin: 0px auto;"><a href="http://eepurl.com/jhBcb2" title="Mailchimp - email marketing made easy and fun"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"><img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a></p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                                <script type="text/javascript">
                                    (function($) {
                                        window.fnames = new Array();
                                        window.ftypes = new Array();
                                        fnames[0] = 'EMAIL';
                                        ftypes[0] = 'email';
                                        fnames[1] = 'FNAME';
                                        ftypes[1] = 'text';
                                        fnames[2] = 'LNAME';
                                        ftypes[2] = 'text';
                                        fnames[3] = 'ADDRESS';
                                        ftypes[3] = 'address';
                                        fnames[4] = 'PHONE';
                                        ftypes[4] = 'phone';
                                        fnames[5] = 'BIRTHDAY';
                                        ftypes[5] = 'birthday';
                                        fnames[6] = 'COMPANY';
                                        ftypes[6] = 'text';
                                    }(jQuery));
                                    var $mcj = jQuery.noConflict(true);
                                </script>
                            </div>

                        </div>
                    </aside>
                </div>
                <div class="col-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <aside class="f_widget social_widget">
                        <div class="f_title">
                            <h3>Follow Me</h3>
                        </div>
                        <p>Let us be social</p>
                        <ul class="list">
                            <li>
                                <a href="https://web.facebook.com/demski.chu2xbrothers" target="_blank"
                                    title="Visit my Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jandel-lopez-85a6272ba/" target="_blank"
                                    title="View my LinkedIn">
                                    <i class="fa-solid fa-tent-arrow-down-to-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/demski.21/" target="_blank"
                                    title="Follow me on Instagram">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@jandellopez2120" target="_blank"
                                    title="Subscribe to my YouTube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!--================Contact Modal Area =================-->
    <div id="contactModal" class="p_120"
        style="position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); display: none; align-items: center; justify-content: center; z-index: 9999;">
        <div
            style="background-color: white; border-radius: 8px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); width: 100%; max-width: 500px; padding: 24px; position: relative;">
            <button id="closeModal"
                style="position: absolute; top: 12px; right: 12px; color: #4B5563; font-size: 24px; background: none; border: none; cursor: pointer;">&times;</button>
            <h2 style="font-size: 24px; font-weight: 600; margin-bottom: 16px;">Contact Me</h2>
            <form action={{ route('send.message') }} method="POST">
                @csrf
                <div style="margin-bottom: 12px;">
                    <label for="name"
                        style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 4px;">Name<span style="color: red">*</span></label>
                    <input type="text" name="name" id="name" required
                        style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;">
                </div>
                <div style="margin-bottom: 12px;">
                    <label for="email"
                        style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 4px;">Email<span style="color: red">*</span></label>
                    <input type="email" name="email" id="email" required
                        style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;">
                </div>
                <div style="margin-bottom: 16px;">
                    <label for="message"
                        style="display: block; font-size: 14px; font-weight: 500; margin-bottom: 4px;">Message<span style="color: red">*</span></label>
                    <textarea name="message" id="message" rows="4" required
                        style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="{{ config('recaptcha.site_key') }}"></div>
                <p id="recaptcha-require"></p>
                <button type="submit"
                    style="background-color: #3B82F6; color: white; padding: 10px 16px; border: none; border-radius: 4px; cursor: pointer;">Send</button>
            </form>

            <script>
                document.getElementById('contactModal').addEventListener('submit', function (e) {
                    const recaptchaResponse = grecaptcha.getResponse();
                    const recaptchaError = document.getElementById('recaptcha-require');

                    if (!recaptchaResponse) {
                        e.preventDefault(); // stop submission
                        recaptchaError.textContent = 'Please complete the reCAPTCHA.';
                        recaptchaError.style.color = 'red';
                        return;
                    }

                    // Show loader
                    document.getElementById('loader').style.display = 'flex';
                });
            </script>
        </div>
    </div>

    <!-- From Uiverse.io by adamgiebl -->
    <script>
        window.addEventListener('load', function () {
            document.getElementById('loader').style.display = 'none';
        });
    </script>


<!-- Loader -->
<div id="loader" style="display: none; position: fixed; inset: 0; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); z-index: 9999; display: flex; align-items: center; justify-content: center;">
    <section class="dots-container">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </section>
</div>





    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: "{{ session('success') }}",
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: "{{ session('error') }}",
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

    <!--================End Contact Modal Area =================-->

    <script>
        // Contact Modal Logic
        const contactBtn = document.getElementById('contactBtn');
        const contactBtn1 = document.getElementById('contactBtn1');
        const contactModal = document.getElementById('contactModal');
        const closeModalBtn = document.getElementById('closeModal');

        contactBtn?.addEventListener('click', () => {
            contactModal.style.display = 'flex';
        });

        contactBtn1?.addEventListener('click', () => {
            contactModal.style.display = 'flex';
        });

        closeModalBtn?.addEventListener('click', () => {
            contactModal.style.display = 'none';
        });

        contactModal?.addEventListener('click', (e) => {
            if (e.target === contactModal) {
                contactModal.style.display = 'none';
            }
        });

        // Blog Modal Logic
        function openModal(id) {
            const modal = document.getElementById('modal-' + id);
            modal.style.display = 'flex';

            // Close blog modal on outside click
            modal.onclick = function(e) {
                if (e.target === modal) {
                    closeModal(id);
                }
            };
        }

        function closeModal(id) {
            const modal = document.getElementById('modal-' + id);
            modal.style.display = 'none';
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Remove active styles from all
                    navLinks.forEach(l => {
                        l.classList.remove('active');
                        l.style.color = '';
                        l.style.borderBottom = '';
                    });

                    // Add active styles to clicked one
                    this.classList.add('active');
                    this.style.color = '#007BFF';
                    // this.style.borderBottom = '2px solid #007BFF';

                    console.log(`"${this.textContent.trim()}" button clicked.`);
                });
            });
        });
    </script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> --}}
    {{-- <script src="js/gmaps.min.js"></script> --}}
    <script src="js/theme.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            VANTA.NET({
                el: "#dna-bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 100.00,
                minWidth: 200.00,
                scale: 1.0,
                scaleMobile: 1.0,
                color: 0xfaf9ff,
                backgroundColor: 0xf9f9ff,
                points: 10.0, // Density of points
                maxDistance: 25.0, // Connection distance
                spacing: 15.0 // How spread out they are
            });
        });
    </script>


    <!-- Load reCAPTCHA script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
