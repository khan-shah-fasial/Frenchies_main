@extends('frontend.layouts.app')


@section('page.content')
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nav_row v_center">
                    <div class="header_item item_left">
                        <div class="logo">
                            <a href="https://attariclassestest.webtesting.pw" aria-label="Logo Link">
                                <img class="sm-logo-size" src="/assets/frontend/images/cropped-header-logo-1.webp"
                                    width="180" height="50" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="header_item item_center">
                        <div class="menu_overlay"></div>
                        <nav class="menu">
                            <div class="mobile_menu_head">
                                <div class="go_back"><i class="fa fa-angle-left"></i></div>
                                <div class="current_menu_title"></div>
                                <div class="mobile_menu_close">&times;</div>
                            </div>
                            <ul class="manu_main">
                                <li class="menu_item_has_children">
                                    <a href="#">Courses
                                        <i class="nav-arrow fa fa-angle-down" aria-hidden="true" role="img"></i>
                                    </a>
                                    <div class="sub_menu single_column_menu">
                                        <ul>
                                            <li>
                                                <a
                                                    href="https://attariclassestest.webtesting.pw/vmware-training-certification-online">
                                                    <span class="icon_text">
                                                        <i class="fa
                                                                                                                                    fa-laptop
                                                                    " aria-hidden="true"></i>
                                                        VMware
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://attariclassestest.webtesting.pw/aws-certification-training-online">
                                                    <span class="icon_text">
                                                        <i class="fa
                                                                                                                                    fa-brands fa-amazon
                                                                    " aria-hidden="true"></i>
                                                        AWS Cloud
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://attariclassestest.webtesting.pw/microsoft-azure-certification-training-online">
                                                    <span class="icon_text">
                                                        <i class="fa
                                                                                                                                    fa-brands fa-microsoft
                                                                    " aria-hidden="true"></i>
                                                        AZURE Cloud
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://attariclassestest.webtesting.pw/mcsa-mcse-windows-server-training-online">
                                                    <span class="icon_text">
                                                        <i class="fa
                                                                                                                                    fa-brands fa-windows
                                                                    " aria-hidden="true"></i>
                                                        MCSE
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://attariclassestest.webtesting.pw/ccna-training-certification-online">
                                                    <span class="icon_text">
                                                        <i class="fa
                                                                                                                                    fa-solid fa-certificate
                                                                    " aria-hidden="true"></i>
                                                        CCNA
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a
                                        href="https://attariclassestest.webtesting.pw/training-option-attari-classes">Training
                                        Options</a></li>
                                <li><a href="https://attariclassestest.webtesting.pw/batch">Batch Schedule</a></li>
                                <li><a href="https://attariclassestest.webtesting.pw/about-us">About Us</a></li>
                                <li><a href="https://attariclassestest.webtesting.pw/reviews">Reviews</a></li>
                                <li><a href="https://attariclassestest.webtesting.pw/success-stories">Success
                                        Stories</a></li>
                                <li><a href="https://attariclassestest.webtesting.pw/blog">Blog</a></li>
                                <li><a href="https://attariclassestest.webtesting.pw/contact-us">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header_item item_right">
                        <div class="mobile_menu_trigger">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="banner_slider1">
    <picture>
        <source srcset="/assets/frontend/images/make_it_happen_responsive.jpg" width="600" height="600"
            media="(max-width: 767px)">
        <source srcset="/assets/frontend/images/make_it_happen_banner.jpg"> <img class="slide-image"
            src="/assets/frontend/images/make_it_happen_banner.jpg" alt="Banner">
    </picture>
    <div class="container">
        <div class="text-center">
            <div class="banner_content">
                <div class="modal fade enquiry_modal" id="enquiry_modal1" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="modal-body">
                                <form id="add_popup_form1"
                                    action="https://attariclassestest.webtesting.pw/contact-save" method="post"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="_token"
                                        value="oqUQy66ve3xbD2oKJHZNAchRQ6eg3wD6hgzY82TW" autocomplete="off">
                                    <h5 class="text-center">Enquire Now</h5>
                                    <input type="hidden" name="section" value="Enquire Form Top - Home Page"
                                        data-aos-once="true" data-aos="fade-up" />
                                    <input type="hidden" name="url" value="https://attariclassestest.webtesting.pw"
                                        data-aos-once="true" data-aos="fade-up" />
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter Email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country"
                                            placeholder="Your Country" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone"
                                            placeholder="Mobile no with country code" required />
                                    </div>
                                    <div class="form-group">
                                        <select name="services" class="form-select form-control" required>
                                            <option value>--Select Course-</option>
                                            <option value="VMware">VMware</option>
                                            <option value="AWS Cloud">AWS Cloud</option>
                                            <option value="Azure Cloud">Azure Cloud</option>
                                            <option value="MCSE">MCSE</option>
                                            <option value="CCNA">CCNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea aria-labelledby="Message" name="description" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <input type="hidden" name="ip" value="103.175.61.38" data-aos-once="true"
                                        data-aos="fade-up" />
                                    <input type="hidden" name="ref_url"
                                        value="http://attariclassestest.webtesting.pw" data-aos-once="true"
                                        data-aos="fade-up" />
                                    <div class="form-group text-center">
                                        <input class="btn btn-primary submit_button" type="submit" value="send" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn enquire_now_btn" data-bs-toggle="modal"
                    data-bs-target="#enquiry_modal1"> Enquire Now </button>
            </div>
        </div>
    </div>
</div>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-lg-3 mb-0 mt-5">
                <h4 class="services_headign">Virtualization & Cloud Computing</h4>
            </div>
            <div class="col-md-4 box_services">
                <a href="https://attariclassestest.webtesting.pw/vmware-training-certification-online">
                    <img data-src="/assets/frontend/images/vmvare_coursimg.webp" width="380" height="224"
                        class="lazyload image_width1" alt="VMware vSphere 7 ">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            VMware vSphere 7
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 box_services">
                <a href="https://attariclassestest.webtesting.pw/aws-certification-training-online">
                    <img data-src="/assets/frontend/images/aws_courseimg.webp" width="380" height="224"
                        class="lazyload image_width1" alt="AWS Cloud Solution Architect">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            AWS Cloud Solution Architect
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 box_services"> <a
                    href="https://attariclassestest.webtesting.pw/microsoft-azure-certification-training-online">
                    <img data-src="/assets/frontend/images/azure_courseimg.webp" width="380" height="224"
                        class="lazyload image_width1" alt="AZURE Cloud Administrator">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            AZURE Cloud Administrator
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="services mrgtop50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-1 mb-lg-3 mb-0">
                <h4 class="services_headign">Server & Networking</h4>
            </div>
            <div class="col-md-4 box_services"> <a
                    href="https://attariclassestest.webtesting.pw/mcsa-mcse-windows-server-training-online">
                    <img data-src="/assets/frontend/images/mcse_courseimg.webp" width="380" height="224"
                        class="lazyload image_width1" alt="Microsoft Windows Server MCSE">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            Microsoft Windows Server MCSE
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 box_services">
                <a href="https://attariclassestest.webtesting.pw/ccna-training-certification-online">
                    <img data-src="/assets/frontend/images/ccna_courseimg.webp" width="380" height="224"
                        class="lazyload image_width1" alt="Cisco Networking CCNA">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            Cisco Networking CCNA
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="training">
    <div class="container">
        <div class="row">
            <div class="col-md-7 training_text_box">
                <h2 class="training_heading">
                    Instructor-Led Online Training with live Hands-on Practical
                </h2>
                <p class="training_para pb-4"> Labs and Software are available on Cloud for practicals,you can
                    Interact with
                    trainer live during the training and resolve queires, also get access to topic wise Live
                    Recorded
                    Lectures on our Learning Management System(LMS) </p>
                <div class="row">
                    <div class="col-lg-3 col-6 training_icons_box"> <img
                            data-src="/assets/frontend/images/teacher-1.svg" width="40" height="40" class="lazyload"
                            alt="Instructor-Led">
                        <p class="para">Instructor-Led</p>
                    </div>
                    <div class="col-lg-3 col-6 training_icons_box"> <img data-src="/assets/frontend/images/lab.webp"
                            width="40" height="40" class="lazyload" alt="Access to Cloud Labs">
                        <p class="para">Access to Cloud Labs</p>
                    </div>
                    <div class="col-lg-3 col-6 training_icons_box"> <img
                            data-src="/assets/frontend/images/Online-Training.webp" width="40" height="40"
                            class="lazyload" alt="Online Training Material">
                        <p class="para">Online Training Material</p>
                    </div>
                    <div class="col-lg-3 col-6 training_icons_box"> <img
                            data-src="/assets/frontend/images/whatsapp.png" width="40" height="40" class="lazyload"
                            alt="Trainer Support on WhatsApp">
                        <p class="para">Trainer Support on WhatsApp</p>
                    </div>
                </div>
                <div class="training_btn d-none d-lg-block">
                    <div class="modal fade enquiry_modal" id="enquiry_modal2" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="modal-body">
                                    <form id="add_popup_form2"
                                        action="https://attariclassestest.webtesting.pw/contact-save" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="oqUQy66ve3xbD2oKJHZNAchRQ6eg3wD6hgzY82TW" autocomplete="off">
                                        <h5 class="text-center">Book a Demo</h5>
                                        <input type="hidden" name="section"
                                            value="Instructor-Led Online Training - Home Page" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <input type="hidden" name="url"
                                            value="https://attariclassestest.webtesting.pw" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="country"
                                                placeholder="Your Country" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone"
                                                placeholder="Mobile no with country code" required />
                                        </div>
                                        <div class="form-group">
                                            <select name="services" class="form-select form-control" required>
                                                <option value>--Select Course-</option>
                                                <option value="VMware">VMware</option>
                                                <option value="AWS Cloud">AWS Cloud</option>
                                                <option value="Azure Cloud">Azure Cloud</option>
                                                <option value="MCSE">MCSE</option>
                                                <option value="CCNA">CCNA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea aria-labelledby="Message" name="description"
                                                class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <input type="hidden" name="ip" value="103.175.61.38" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <input type="hidden" name="ref_url"
                                            value="http://attariclassestest.webtesting.pw" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <div class="form-group text-center">
                                            <input class="btn btn-primary submit_button" type="submit"
                                                value="send" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal2"> Book a Demo </button>
                </div>
            </div>
            <div class="col-md-5 img_box"> <img data-src="/assets/frontend/images/dsvdfb.jpg" width="399"
                    height="600" class="lazyload" alt="Lab Image"> </div>
        </div>
    </div>
</section>

<section class="counter pt-lg-5 pt-4 pb-3" id="counter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="counter_heading mb-3">Why Attari Classes</h2>
            </div>
            <div class="col-lg-2 col-md-4 col-6 counter_box">
                <div class="counter_inner_box">
                    <span class="counter-value" data-count="5000">1000</span>
                    <p>Sessions</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 counter_box">
                <div class="counter_inner_box">
                    <span class="counter-value" data-count="10">0</span>
                    <p>Years of Delivering Innovative Training</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 counter_box">
                <div class="counter_inner_box">
                    <span class="counter-value" data-count="7000">2000</span>
                    <p>Candidates Trained</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 counter_box">
                <div class="counter_inner_box">
                    <span class="counter-value" data-count="1000">100</span>
                    <p>Students Working in Top MNCs</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 counter_box">
                <div class="counter_inner_box">
                    <span class="counter-value" data-count="4.9">0.0</span>
                    <p>Google Rating</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 counter_box">
                <div class="counter_inner_box">
                    <span class="counter-value" data-count="4.9">0.0</span>
                    <p>Facebook Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="classroom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 classroom_text_box order-md-2">
                <h2 class="training_heading">
                    Classroom Training with live Hands-on Practical
                </h2>
                <p class="training_para pb-4"> We have High tech Infrastructure in our Classrooms, using High end
                    labs
                    candidates can perform live practical’s along with the trainer, also get access to topic wise
                    Live
                    Recorded Lectures on our Learning Management System(LMS)</p>
                <div class="row">
                    <div class="col-lg-3 col-6 training_icons_box"><img
                            data-src="/assets/frontend/images/teacher-1.svg" width="40" height="40" class="lazyload"
                            alt="Instructor-Led">
                        <p class="para">Instructor-Led</p>
                    </div>
                    <div class="col-lg-3 col-6 training_icons_box"> <img data-src="/assets/frontend/images/lab.webp"
                            width="40" height="40" class="lazyload" alt="Access to Cloud Labs">
                        <p class="para">Access to Cloud Labs</p>
                    </div>
                    <div class="col-lg-3 col-6 training_icons_box"> <img
                            data-src="/assets/frontend/images/Online-Training.webp" width="40" height="40"
                            class="lazyload" alt="Online Training Material">
                        <p class="para">Online Training Material</p>
                    </div>
                    <div class="col-lg-3 col-6 training_icons_box"> <img
                            data-src="/assets/frontend/images/whatsapp.png" width="40" height="40" class="lazyload"
                            alt="Trainer Support on WhatsApp">
                        <p class="para">Trainer Support on WhatsApp</p>
                    </div>
                </div>
                <div class="training_btn d-none d-lg-block">
                    <div class="modal fade enquiry_modal" id="enquiry_modal3" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="modal-body">
                                    <form id="add_popup_form3"
                                        action="https://attariclassestest.webtesting.pw/contact-save" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="oqUQy66ve3xbD2oKJHZNAchRQ6eg3wD6hgzY82TW" autocomplete="off">
                                        <h5 class="text-center">Book a Demo</h5>
                                        <input type="hidden" name="section" value="Classroom Training - Home Page"
                                            data-aos-once="true" data-aos="fade-up" />
                                        <input type="hidden" name="url"
                                            value="https://attariclassestest.webtesting.pw" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="country"
                                                placeholder="Your Country" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone"
                                                placeholder="Mobile no with country code" required />
                                        </div>
                                        <div class="form-group">
                                            <select name="services" class="form-select form-control" required>
                                                <option value>--Select Course-</option>
                                                <option value="VMware">VMware</option>
                                                <option value="AWS Cloud">AWS Cloud</option>
                                                <option value="Azure Cloud">Azure Cloud</option>
                                                <option value="MCSE">MCSE</option>
                                                <option value="CCNA">CCNA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea aria-labelledby="Message" name="description"
                                                class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <input type="hidden" name="ip" value="103.175.61.38" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <input type="hidden" name="ref_url"
                                            value="http://attariclassestest.webtesting.pw" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <div class="form-group text-center">
                                            <input class="btn btn-primary submit_button" type="submit"
                                                value="send" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal3"> Book a Demo </button>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <div id="carouselExampleFade" class="carousel slide carousel-fade ">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img data-src="/assets/frontend/images/16.jpg" width="576"
                                height="432" class="lazyload d-block w-100" alt="Cirtificate Image 1"></div>
                        <div class="carousel-item"> <img data-src="/assets/frontend/images/17.jpg" width="576"
                                height="432" class="lazyload d-block w-100" alt="Cirtificate Image 2"></div>
                        <div class="carousel-item"> <img data-src="/assets/frontend/images/27.jpg" width="576"
                                height="432" class="lazyload d-block w-100" alt="Cirtificate Image 3"></div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span> </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span> </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="enquiry_mobile_form d-block d-lg-none d-md-none">
    <div class="container">
        <form id="add_demo1_form" action="https://attariclassestest.webtesting.pw/contact-save" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="_token" value="oqUQy66ve3xbD2oKJHZNAchRQ6eg3wD6hgzY82TW" autocomplete="off">
            <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>
            <input type="hidden" name="section" value="Book a Free Demo - Mobile View" data-aos-once="true"
                data-aos="fade-up" />
            <input type="hidden" name="url" value="https://attariclassestest.webtesting.pw" data-aos-once="true"
                data-aos="fade-up" />
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="country" placeholder="Your Country" required />
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Mobile no with country code"
                    required />
            </div>
            <div class="form-group">
                <select name="services" class="form-select form-control" required />
                <option value>--Select Course-</option>
                <option value="VMware">VMware</option>
                <option value="AWS Cloud">AWS Cloud</option>
                <option value="Azure Cloud">Azure Cloud</option>
                <option value="MCSE">MCSE</option>
                <option value="CCNA">CCNA</option>
                </select>
            </div>
            <div class="form-group">
                <textarea aria-labelledby="Message" name="description" class="form-control"
                    placeholder="Message"></textarea>
            </div>
            <input type="hidden" name="ip" value="103.175.61.38" data-aos-once="true" data-aos="fade-up" />
            <div class="form-group text-center">
                <input class="btn btn-primary submit_button" type="submit" value="send" />
            </div>
        </form>
    </div>
</section>

<section class="lms pt-lg-5 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="lms_heading pt-md-4 pt-0">
                    Free Learning Management System(LMS) Included with Training
                </h2>
                <p class="lms_para pb-4"> You get access to topic wise Live Recorded Lectures of our courses on
                    Learning
                    Management System(LMS), lectures on LMS are updated regularly and even new topics are added
                    whenever
                    required, you can access LMS even after course is completed, so revision and upgrading yourself
                    in
                    future is easy </p>
                <div class="training_btn"> <a target="_blank" href="https://lms.attariclasses.in/">Visit Video
                        Portal</a> </div>
            </div>
            <div class="col-md-6 lms_img"><img data-src="/assets/frontend/images/lms_images123.png" width="576"
                    height="422" class="lazyload" alt="Learning Image"> </div>
        </div>
    </div>
</section>

<section class="adv_lms">
    <div class="bg_adv">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="pb-3 fw-normal">Advantages of LMS</h2>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6 lms_box"> <i class="far fa-clock"></i>
                            <p>24*7 Learning</p>
                        </div>
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-laptop"></i>
                            <p>Live Recorded Lectures</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-chalkboard-teacher"></i>
                            <p>Premium Content</p>
                        </div>
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-laptop-code"></i>
                            <p>Learn At Your Own Pace</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-globe-africa"></i>
                            <p>Access From Anywhere, Any Device</p>
                        </div>
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-certificate"></i>
                            <p>Course Completion Certificate</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="far fa-edit"></i>
                            <p>Free Practice Exam</p>
                        </div>
                        <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-exchange-alt"></i>
                            <p>Revise & Learn Multiple Times</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Certificate">
    <div class="container">
        <div class="row">
            <div class="col-md-6 Certificate_box">
                <h2 class="Certificate_heading pt-md-5 mt-md-3">
                    Earn Industry-Recognized Credentials
                </h2>
                <p class="Certificate_para mb-md-5 mb-4"> Certification plays an Important role in proving your
                    skills,
                    Hands-on practical training at Attari Classes will clear your concepts and make you exam ready.
                    We
                    provide Practice exams and learning material for free which prepares you to answer the question
                    asked in actual exam, most of the candidates have passed exam in one attempt </p>
                <div class="training_btn none">
                    <div class="modal fade enquiry_modal" id="enquiry_modal4" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="btn-close close_button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="modal-body">
                                    <form id="add_popup_form4"
                                        action="https://attariclassestest.webtesting.pw/contact-save" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="oqUQy66ve3xbD2oKJHZNAchRQ6eg3wD6hgzY82TW" autocomplete="off">
                                        <h5 class="text-center">Get Certified</h5>
                                        <input type="hidden" name="section" value="Certificate section - Home Page"
                                            data-aos-once="true" data-aos="fade-up" />
                                        <input type="hidden" name="url"
                                            value="https://attariclassestest.webtesting.pw" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Enter Name" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="country"
                                                placeholder="Your Country" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone"
                                                placeholder="Mobile no with country code" required />
                                        </div>
                                        <div class="form-group">
                                            <select name="services" class="form-select form-control" required>
                                                <option value>--Select Course-</option>
                                                <option value="VMware">VMware</option>
                                                <option value="AWS Cloud">AWS Cloud</option>
                                                <option value="Azure Cloud">Azure Cloud</option>
                                                <option value="MCSE">MCSE</option>
                                                <option value="CCNA">CCNA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea aria-labelledby="Message" name="description"
                                                class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <input type="hidden" name="ip" value="103.175.61.38" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <input type="hidden" name="ref_url"
                                            value="http://attariclassestest.webtesting.pw" data-aos-once="true"
                                            data-aos="fade-up" />
                                        <div class="form-group text-center">
                                            <input class="btn btn-primary submit_button" type="submit"
                                                value="send" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal4"> Get Certified</button>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item  active " data-bs-interval="10000">
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/certificate/7jaNkrfbaJwxkBEPPo3sTTBJEFglh4lTPh9371u3.webp"
                                width="576" height="450" class="lazyload d-block w-100" alt>
                        </div>
                        <div class="carousel-item " data-bs-interval="10000">
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/certificate/O0gm66jn3EUk4G5qhBqYEvviWW8qHTDn7XaLiEnR.jpg"
                                width="576" height="450" class="lazyload d-block w-100" alt>
                        </div>
                        <div class="carousel-item " data-bs-interval="10000">
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/certificate/5cKvNzjGcpCBHakoHIhlyI96GRjnYF9NnnuMolTI.webp"
                                width="576" height="450" class="lazyload d-block w-100" alt>
                        </div>
                        <div class="carousel-item " data-bs-interval="10000">
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/certificate/JjtqBIKnhpfkswq8NJSRHEXgTuJFmvxk7ICtZ3tg.jpg"
                                width="576" height="450" class="lazyload d-block w-100" alt>
                        </div>
                        <div class="carousel-item " data-bs-interval="10000">
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/certificate/VmxbQzI8JWHU6QtRYMsyeGfw3aBiDl5k1GyYlFX4.jpg"
                                width="576" height="450" class="lazyload d-block w-100" alt>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span> </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span> </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="testiminilas_sec pt-md-5 pt-3 pb-md-5 pb-3 gray_bgg1">
    <div class="container">
        <h3 class="main_heads text-center mb-4">
            What our <strong>Students</strong> says?
        </h3>
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme video_testiminials">
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/T9PrVAio31k" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/KUgWimOlS7RjXz33o5dR9Yo1ihE6nv2mBpR2R1rX.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/Gx9iRvGxYsg" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/qepRMeNNLbKQ9bZnw7NPFdIFLuvSfGpOrLe8Yx7l.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/50yDGXULiB4" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/YCONYRHEvLwxhIujQSYCkHASsPXRDXmEIyD9Taae.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/n_nrNMrxe1c" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/3jKO8VaX3vCC9AVl4RraREhO0mCkY1TUlbTB0ZPy.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/R-NDHE2FYZ0" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/d5qkaMaQcu4H48Up5UucRtv7KxxtG9IxbKSixZr4.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/n_nrNMrxe1c" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/3THPkmUOsiQkI8WzoWXF3UYnJo8n2buLmrbuumUK.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/cdeo_Q0_nkM" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/gVW5yDShbbnchoAUg1RScz2juGJfa24CV2sJ0Uyf.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/wnFO31gdZ7Y" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/9ocSJzb2UyFInCZGcJmKFr3yCnMQaX0cUhCs3Evj.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/tBgjgAHzNVs" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/uqYqpE586hS8ThE39o6vFy6WhGi9KiaDt4lWgQZj.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_video">
                        <a href="https://youtu.be/embed/cdeo_Q0_nkM" aria-label="Testimonial Video Link"
                            data-fancybox="gallery">
                            <div class="pulse-button"></div>
                            <img data-src="https://attariclassestest.webtesting.pw/storage/assets/image/video_review/ia7OL1s1DOk3BAMT1JW4FSD9E0ljffSixdbfTcJg.jpg"
                                width="352" height="198" class="lazyload d-block w-100" alt>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="large-12 columns mt-4">
            <div class="owl-carousel owl-theme slider_content_dots">
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/wziP9x4urKMetEfrjaBM9efMong3jG9TDBuVProy.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Suryakant Mishra</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a href><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    I've taken VMware online training here, I was bit afraid about it at the
                                    beginning but the trainer Mr. Maqsood has made it really smooth and easy. The
                                    training is all about hands on practice, 100% practical approach. Thanks to
                                    Attari classes and Maqsood sir. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/jLepkXX7LOTFCrlkK4dHcd8YcYAX1cz7saI4dFVd.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Pravinkumar Devanpalli</span>
                                    </div>
                                    <span>Accenture, Mumbai</span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a
                                            href="https://www.google.com/search?q=attari+classes&amp;sca_esv=cc28994e032c69f9&amp;biw=1366&amp;bih=599&amp;ei=9hvGZd7-LcqGnesPj9O2wA4&amp;gs_ssp=eJzj4tZP1zcsybK0TM8qNGC0UjWoME5KNU-2sEixNDVLNk4ysLQyqEhLtkwyMTVKtjRINUhJMkj04kssKUksylRIzkksLk4tBgCmfRTH&amp;oq=attari&amp;gs_lp=Egxnd3Mtd2l6LXNlcnAiBmF0dGFyaSoCCAAyEBAuGIAEGIoFGEMYxwEYrwEyChAAGIAEGIoFGEMyChAAGIAEGIoFGEMyDRAAGIAEGIoFGEMYsQMyDRAuGIAEGIoFGEMYsQMyBRAAGIAEMgsQLhiABBixAxiDATIOEC4YgAQYsQMYxwEYrwEyBRAAGIAEMgUQABiABDIfEC4YgAQYigUYQxjHARivARiXBRjcBBjeBBjgBNgBAUj7F1AAWIcHcAB4AZABAJgBvgGgAe0HqgEDMC42uAEDyAEA-AEBwgIREC4YgAQYigUYkQIYxwEYrwHCAgoQLhiABBiKBRhDwgILEAAYgAQYigUYkQLCAhEQLhiABBixAxiDARjHARjRA8ICDhAAGIAEGIoFGLEDGIMBwgIFEC4YgATCAgsQABiABBixAxiDAcICIBAuGIAEGIoFGJECGMcBGK8BGJcFGNwEGN4EGOAE2AEBwgIXEC4YgAQYigUYkQIYsQMYgwEYxwEY0QPCAg0QLhiABBiKBRhDGNQCwgIIEAAYgAQYsQPCAgsQLhiABBixAxjUAsICExAuGIAEGIoFGEMYsQMYxwEYrwHCAgsQLhiABBjHARivAeIDBBgAIEG6BgYIARABGBQ&amp;sclient=gws-wiz-serp#lrd=0x3be7c88d956c3b09:0xfc9b452c90e0db0a,1,,,"><i
                                                aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    I have joine Attari classes for the second time. First time it was classroom
                                    based training for VMware and now online course for AWS.
                                    I would say the quality of this classes is one of the best in terms of sharing
                                    the practical approach and explaining the theory. This concept is very less.
                                    If a person wants to learn VMware and AWS along with Practicals, then I would
                                    recommend him or her to join Attari Classes and bring a turning point in his
                                    career.
                                    Each and every concept will be thought at Attari Classes.
                                    Thank You Maqsood Sir. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/cADTfgZtGuUY5jECwuUqJKPKh3RLr9AJRVFiC4S2.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Raj Dubey</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a href><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    I have done AWS cloud course from Attari classes , where Maqsood sir have a
                                    awsome teaching skills which will really help s us to improve the IT skills and
                                    clear the every concept.
                                    And Upar level management (classes Staf) is also helpful.
                                    Please join Attari class for any IT course to improve your skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/l67Uog8AOH0Y9zIGG0HpBnki0zVoTjcxcv44dHf3.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Pratik Joshi</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a href><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>This was the second time i have joined Attari classes for AWS online training,
                                    first time it was VMware Professional classes which was in the classroom face to
                                    face with awesome trainer Mr Maqsood Sir...the way he thought us is very unique
                                    and very interactive trainer ever I had seen.
                                    He clear every concept with best example which students can easily understand
                                    and we can learn and understand technology in simpler function ... Thank you sir
                                    for your great contribution as a trainer, as a mentor...it's really help me to
                                    update my knowledge and IT skills.
                                    And also thanks to all Attari class Management to give us access to LMS so that
                                    we can repeat recorded lecture any time.
                                    Thank you ones agin to Maqsood Sir for their efforts .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/1a9r4KTrFYvg8iI3wcgckAUeZbsBNP07ns8pahMX.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Rakesh Mishra</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a
                                            href="https://www.google.com/search?si=AKbGX_rcuucMgom2rba1cdwsvM2SVoIkP2btyqGMV4t0GuHIs4sGV_1tpuqR0YHG4Rzd9SdUzGYNXCd_p0w1TuZUrMXlT2SAkp-Jc9tsM9nTTR1BZF7c2vEmOkFeHP1cFq8rt5pDX17mkCg5iaqsZzUfZ0cYi3OZZM_Kedfa9b4JRCMH1evrzpqLz1BGe1KHGKMzaI9AGovZLdTBy21m9ob0vX4kRdLF-Q%3D%3D&amp;q=Attari%20IT%20Trainings%20%7C%20MCSE%20%7C%20CCNA%20%7C%20MCSA%20%7C%20Azure%20%7C%20VMwareAWS%20Reviews&amp;sa=X&amp;ved=0CCcQ7JgMahcKEwjA9tivop6EAxUAAAAAHQAAAAAQBg&amp;biw=1366&amp;bih=599&amp;dpr=1"><i
                                                aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    I did MS Azure from Arttari and can say Attari IT training is one of best online
                                    training, Zameer Sir is well experienced and very student friendly and try
                                    always to support student, Highly recommend for online learning for IT
                                    infrastructure related courses. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/wCWhA66oTEI6Qh373ajWJdA8P5vW1NZST6WilNth.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Prashant Shirole</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a
                                            href="https://www.google.com/search?si=AKbGX_rcuucMgom2rba1cdwsvM2SVoIkP2btyqGMV4t0GuHIs4sGV_1tpuqR0YHG4Rzd9SdUzGYNXCd_p0w1TuZUrMXlT2SAkp-Jc9tsM9nTTR1BZF7c2vEmOkFeHP1cFq8rt5pDX17mkCg5iaqsZzUfZ0cYi3OZZM_Kedfa9b4JRCMH1evrzpqLz1BGe1KHGKMzaI9AGovZLdTBy21m9ob0vX4kRdLF-Q%3D%3D&amp;q=Attari%20IT%20Trainings%20%7C%20MCSE%20%7C%20CCNA%20%7C%20MCSA%20%7C%20Azure%20%7C%20VMwareAWS%20Reviews&amp;sa=X&amp;ved=0CCcQ7JgMahcKEwjA9tivop6EAxUAAAAAHQAAAAAQBg&amp;biw=1366&amp;bih=599&amp;dpr=1"><i
                                                aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    Thank you Atttari Classes for a great online course(AZ-104). Great presentation
                                    style by Zameer Sir with lots of opportunities to ask questions and talk about
                                    real life examples along with online practicals during the training which all
                                    made for a really enjoyable and informative course."
                                    "This has more than met my expectations.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/Y2HKKXqYTOGHtcQ9AGqc7J8WlWBxkXLTHqTVq2Xl.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Sri Azhagar</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a href><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>I did a MCSE course in attari, I am happy with the training classes. Zameer sir
                                    shares the best practices and he is more accessible to solve each doubts.There
                                    will be labs on virtually the concepts too which helps me to understand easily
                                    and professionally. Hoping to get placed in a good company. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/iJNKvewAS9FfTt1ArIW2CGoNpWPIwhgrXHXSwAS5.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Sarosh Faizan</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a href><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    Online CCNA training :
                                    It almost feels like we are sitting in a class room. Zameer sir's teaching style
                                    is really awesome and different . And LMS is very unique feature which I've seen
                                    for the first time only in Attari classes where we can go through any lecture
                                    anywhere anytime. WORTH IT </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/HvVwiZOsPADWQ0heFMVfCVKh8SzpnCpiNV8poOJm.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">021aadi</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a href><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                <p>
                                    I have joined online class for the first time and I'm highly impressed by the
                                    teaching methodology of the institute.
                                    I have recently completed my CCNA course online and I would like to thanks Mr
                                    Zameer Sir
                                    My experience in Attari classes. It was fantastic journey from 1st lecture to
                                    last lecture. Management of Attarri classes is very nice. I would like to say
                                    big thank you to Zameer Sir for sharing their knowledge
                                    Looking forward to gain knowledge on more courses with Attari Classes. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial_box">
                        <div class="testimonial__header">
                            <div class="row">
                                <div class="col-lg-9 col-10">
                                    <div class="testimonial__image"> <img
                                            data-src="https://attariclassestest.webtesting.pw/storage/assets/image/text_review/NhnPuD1zrUGyrSzfpLJnPiG3n4OjXpCkRZ9r4kS6.webp"
                                            class="lazyload d-block w-100" alt="unnamed"> <span
                                            class="testimonial__name">Sumit Kori</span>
                                    </div>
                                    <span></span>
                                </div>
                                <div class="col-lg-3 col-2">
                                    <div class="testimonial__icon">
                                        <a
                                            href="https://www.google.com/search?si=AKbGX_rcuucMgom2rba1cdwsvM2SVoIkP2btyqGMV4t0GuHIs4sGV_1tpuqR0YHG4Rzd9SdUzGYNXCd_p0w1TuZUrMXlT2SAkp-Jc9tsM9nTTR1BZF7c2vEmOkFeHP1cFq8rt5pDX17mkCg5iaqsZzUfZ0cYi3OZZM_Kedfa9b4JRCMH1evrzpqLz1BGe1KHGKMzaI9AGovZLdTBy21m9ob0vX4kRdLF-Q%3D%3D&amp;q=Attari%20IT%20Trainings%20%7C%20MCSE%20%7C%20CCNA%20%7C%20MCSA%20%7C%20Azure%20%7C%20VMwareAWS%20Reviews&amp;sa=X&amp;ved=0CCcQ7JgMahcKEwjA9tivop6EAxUAAAAAHQAAAAAQBg&amp;biw=1366&amp;bih=599&amp;dpr=1"><i
                                                aria-hidden="true" class="fab fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__content">
                            <div class="testimonial__text">
                                This is Sumit Kori. Have completed MCSE Online course. I truly believe this wasn't
                                imagine that such a course can be managed online. The lecture and practical lab is
                                based on actual production environment.
                                Thanks a ton to Zameer sir and Attari classes. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view_allbutton text-center"> <a href="https://webtesting.pw/attari-website/reviews.php"> View
                All
                <i class="fas fa-arrow-right" aria-hidden="true"></i></a></div>
    </div>
</section>
<section class="enquiry_mobile_form d-block d-lg-none d-md-none">
    <div class="container">
        <form id="add_demo1_form" action="https://attariclassestest.webtesting.pw/contact-save" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="_token" value="oqUQy66ve3xbD2oKJHZNAchRQ6eg3wD6hgzY82TW" autocomplete="off">
            <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>
            <input type="hidden" name="section" value="Book a Free Demo - Mobile View" data-aos-once="true"
                data-aos="fade-up" />
            <input type="hidden" name="url" value="https://attariclassestest.webtesting.pw" data-aos-once="true"
                data-aos="fade-up" />
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="country" placeholder="Your Country" required />
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Mobile no with country code"
                    required />
            </div>
            <div class="form-group">
                <select name="services" class="form-select form-control" required />
                <option value>--Select Course-</option>
                <option value="VMware">VMware</option>
                <option value="AWS Cloud">AWS Cloud</option>
                <option value="Azure Cloud">Azure Cloud</option>
                <option value="MCSE">MCSE</option>
                <option value="CCNA">CCNA</option>
                </select>
            </div>
            <div class="form-group">
                <textarea aria-labelledby="Message" name="description" class="form-control"
                    placeholder="Message"></textarea>
            </div>
            <input type="hidden" name="ip" value="103.175.61.38" data-aos-once="true" data-aos="fade-up" />
            <div class="form-group text-center">
                <input class="btn btn-primary submit_button" type="submit" value="send" />
            </div>
        </form>
    </div>
</section>

<section class="faq pt-md-5 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 faq_box">
                <div class="question">
                    <h1 class="text_services_heading1">
                        Best Institute for VMware, AWS, AZURE, MCSE, CCNA Training in
                        Mumbai
                    </h1> <i class="fas fa-arrow-right"></i>
                </div>
                <div class="answer">
                    <p> Attari Classes is the preferred Training Institute for VMware VCP certification training in
                        India. We provide latest trending courses like AWS Cloud Solution Architect, Aure Cloud
                        Administrator, CCNA-Networking Course and MCSE- Windows Server course. </p>
                    <p> Attari Classes provides both classroom and online training for domestic and international
                        students all over the world. We are one of the reliable and trustworthy learning centers for
                        VMware VCP Certification, Azure Certification AZ-104, AWS Solution Architect- Associate
                        Certification SAA-C02, and CCNA Certification Courses. We are also one of the leading,
                        trusted,
                        and preferred Training providers to Corporates across India for various courses. </p>
                    <p> Attari Classes also provide options of Video learning using our Learning Management
                        System(LMS)
                        for VMware vSphere, AWS Cloud, Azure Cloud, MCSE, and CCNA Courses, you can learn at your
                        own
                        pace and do practicals using cloud-based labs or download the software required for labs
                        using
                        the guidance given in our LMS. </p>
                    <h2 class="faq_inner_head">Attari Classes Training Programs</h2>
                    <div class="test_heading_inner"> <i> We provide Hands-on Live Practical training for</i> </div>
                    <ul class="test_ul">
                        <li> <a href="https://attariclasses.in/vmware-training-certification-online/">1. VMware
                                vSphere</a>
                        </li>
                        <li>
                            <a href="https://attariclasses.in/aws-certification-training-online/">2. AWS Cloud
                                Solution
                                Architect</a>
                        </li>
                        <li>
                            <a href="https://attariclasses.in/microsoft-azure-certification-training-online/">3.
                                Azure
                                Cloud Administration</a>
                        </li>
                        <li>
                            <a href="https://attariclasses.in/mcsa-mcse-windows-server-training-online/">4. MCSE-
                                Windows Server</a>
                        </li>
                        <li>
                            <a href="https://attariclasses.in/ccna-training-certification-online/">5. CCNA- Computer
                                Networking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection