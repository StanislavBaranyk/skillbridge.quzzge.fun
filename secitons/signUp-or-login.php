<div class="box-section">
    <section class="login item-section">
        <div class="container">
            <div class="section-form">

                <?php

                $login = [
                    'formAction' => 'login-action.php',
                    'header' => 'Login',
                    'headerText' => 'Welcome back! Please log in to access your account.s',
                    'inputItems' => [' <div class="form-item">
                        <label class="small-size-p fw-medium" for="email">Email</label>
                        <input type="email" id="email" required name="email" placeholder="Enter your Email">
                    </div>',
                        ' <div class="form-item">
                        <label class="small-size-p fw-medium" for="password">Password</label>
                        <input type="password" id="password" required name="password" placeholder="Enter your Password">
                        <span class="password-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                         viewBox="0 0 20 21" fill="none">
  <path d="M9.99951 13C11.3802 13 12.4995 11.8807 12.4995 10.5C12.4995 9.11929 11.3802 8 9.99951 8C8.6188 8 7.49951 9.11929 7.49951 10.5C7.49951 11.8807 8.6188 13 9.99951 13Z"
        fill="#4C4C4D"/>
  <path fill-rule="evenodd" clip-rule="evenodd"
        d="M1.10235 10.0389C2.34173 6.31309 5.85611 3.625 9.99994 3.625C14.1419 3.625 17.6549 6.3106 18.8958 10.0337C18.9961 10.3346 18.9962 10.6601 18.8961 10.9611C17.6567 14.6869 14.1423 17.375 9.99848 17.375C5.85657 17.375 2.34354 14.6894 1.10263 10.9663C1.00234 10.6654 1.00225 10.3399 1.10235 10.0389ZM14.3745 10.5C14.3745 12.9162 12.4158 14.875 9.99951 14.875C7.58327 14.875 5.62451 12.9162 5.62451 10.5C5.62451 8.08375 7.58327 6.125 9.99951 6.125C12.4158 6.125 14.3745 8.08375 14.3745 10.5Z"
        fill="#4C4C4D"/>
</svg></span>
                        <p class="small-size-p text-end color-grey-one">Forgot Password?</p>
                    </div>', '<div class="form-item remember-me">
                        <input type="radio" name="radio" id="remember">
                        <label for="remember" class="remember-me-radio"></label>
                        <label for="remember" class="small-size-p" style="color: #656567">Remember Me</label>
                    </div>'],
                    'btn' => '<button class="orange-btn" id="submit-login-form" type="submit">Login</button>',
                    'googleLink' => 'Login with Google',
                    'valid-condition' => ' <p class="small-size-p">Don’t have an account?<a href="#" class="fw-medium">Sign Up</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                     fill="none">
                                    <path d="M5.00004 16.3333L15.8334 5.49996M15.8334 5.49996V15.9M15.8334 5.49996H5.43337"
                                          stroke="#262626" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </p>',
                ];

                $signUp = [
                        'formAction' => '/signUp-action.php',
                        'header' => 'Sign Up',
                    'headerText' => 'Create an account to unlock exclusive features.',
                    'inputItems' => [' <div class="form-item">
                        <label class="small-size-p fw-medium" for="email">Full Name</label>
                        <input type="text" id="name" required  class="form-input" name="name" placeholder="Enter your Name">
                    </div>', '<div class="form-item">
                        <label class="small-size-p fw-medium" for="email">Email</label>
                        <input type="email" id="email" class="form-input" required name="email" placeholder="Enter your Email">
                    </div>', ' <div class="form-item">
                        <label class="small-size-p fw-medium" for="password">Password</label>
                        <input type="password" id="password"  class="form-input" required name="password" placeholder="Enter your Password">
                       <svg class="password-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                         viewBox="0 0 20 21" fill="none">
  <path d="M9.99951 13C11.3802 13 12.4995 11.8807 12.4995 10.5C12.4995 9.11929 11.3802 8 9.99951 8C8.6188 8 7.49951 9.11929 7.49951 10.5C7.49951 11.8807 8.6188 13 9.99951 13Z"
        fill="#4C4C4D"/>
  <path fill-rule="evenodd" clip-rule="evenodd"
        d="M1.10235 10.0389C2.34173 6.31309 5.85611 3.625 9.99994 3.625C14.1419 3.625 17.6549 6.3106 18.8958 10.0337C18.9961 10.3346 18.9962 10.6601 18.8961 10.9611C17.6567 14.6869 14.1423 17.375 9.99848 17.375C5.85657 17.375 2.34354 14.6894 1.10263 10.9663C1.00234 10.6654 1.00225 10.3399 1.10235 10.0389ZM14.3745 10.5C14.3745 12.9162 12.4158 14.875 9.99951 14.875C7.58327 14.875 5.62451 12.9162 5.62451 10.5C5.62451 8.08375 7.58327 6.125 9.99951 6.125C12.4158 6.125 14.3745 8.08375 14.3745 10.5Z"
        fill="#4C4C4D"/>
</svg>     
                    </div>', '<div class="form-item remember-me">
                        <input type="radio" name="radio" id="remember">
                        <label for="remember" class="remember-me-radio"></label>
                        <label for="remember" class="small-size-p" style="color: #656567">I agree witch <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> </label>
                    </div>'],
                    'btn' => '<button class="orange-btn" id="submit-sign-up-form" type="submit">Sign Up</button>',
                    'googleLink' => 'Sign up with Google',
                    'valid-condition' => ' <p class="small-size-p">Already have an account?<a href="#" class="fw-medium">Login</a>
                               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
  <path d="M6.50005 19.5L19.5 6.49996M19.5 6.49996V18.98M19.5 6.49996H7.02005" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                            </p>',

                ];

                if ($_SERVER['PHP_SELF'] === '/login-page.php') {
                    echo '        <div class="section-header">
                    <h3 class="h3 fw-semibold text-center">'.$login['header'].'</h3>
                    <p class="small-size-p color-grey-one text-center">'.$login['headerText'].'</p>
                </div>
                <form class="login-form" id="login-form" action="'.$login['formAction'].'">';
                    foreach ($login['inputItems'] as $inputItem) {
                        echo $inputItem;
                    }
                    echo '
                    <div class="section-btn">
                        '.$login['btn'].'
                        <div class="box-lines">
                            <div class="abstract-line"></div>
                            <p class="small-size-p" style="color: #98989A;">OR</p>
                            <div class="abstract-line"></div>
                        </div>
                        <div class="log-google">
                            <a class="fw-medium small-size-p" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_152_4778)">
                                        <path d="M24.2643 12.2764C24.2643 11.4607 24.1982 10.6406 24.0571 9.83807H12.7383V14.4591H19.22C18.951 15.9494 18.0868 17.2678 16.8213 18.1056V21.1039H20.6883C22.9591 19.0139 24.2643 15.9274 24.2643 12.2764Z"
                                              fill="#4285F4"/>
                                        <path d="M12.7391 24.0008C15.9756 24.0008 18.705 22.9382 20.6936 21.1039L16.8266 18.1055C15.7507 18.8375 14.3618 19.252 12.7435 19.252C9.61291 19.252 6.95849 17.1399 6.00607 14.3003H2.01562V17.3912C4.05274 21.4434 8.20192 24.0008 12.7391 24.0008Z"
                                              fill="#34A853"/>
                                        <path d="M6.00082 14.3003C5.49816 12.8099 5.49816 11.1961 6.00082 9.70575V6.61481H2.01478C0.312781 10.0056 0.312781 14.0004 2.01478 17.3912L6.00082 14.3003Z"
                                              fill="#FBBC04"/>
                                        <path d="M12.7391 4.74966C14.4499 4.7232 16.1034 5.36697 17.3425 6.54867L20.7685 3.12262C18.5991 1.0855 15.7198 -0.034466 12.7391 0.000808666C8.20192 0.000808666 4.05274 2.55822 2.01562 6.61481L6.00166 9.70575C6.94967 6.86173 9.6085 4.74966 12.7391 4.74966Z"
                                              fill="#EA4335"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_4778">
                                            <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                '.$login['googleLink'].'</a>
                        </div>
                        <div class="sign-up">
                            '.$login['valid-condition'].'
                        </div>
                    </div>
                </form>';
                }
                else if ($_SERVER['PHP_SELF'] === '/sign-up-page.php') {
                    echo '        <div class="section-header">
                    <h3 class="h3 fw-semibold text-center">'.$signUp['header'].'</h3>
                    <p class="small-size-p color-grey-one text-center">'.$signUp['headerText'].'</p>
                </div>
                <form class="login-form" id="sign-up-form"  action="'.$signUp['formAction'].'">';
                    foreach ($signUp['inputItems'] as $inputItem) {
                        echo $inputItem;
                    }
                    echo '
                    <div class="section-btn">
                        '.$signUp['btn'].'
                        <div class="box-lines">
                            <div class="abstract-line"></div>
                            <p class="small-size-p" style="color: #98989A;">OR</p>
                            <div class="abstract-line"></div>
                        </div>
                        <div class="log-google">
                            <a class="fw-medium small-size-p" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                     fill="none">
                                    <g clip-path="url(#clip0_152_4778)">
                                        <path d="M24.2643 12.2764C24.2643 11.4607 24.1982 10.6406 24.0571 9.83807H12.7383V14.4591H19.22C18.951 15.9494 18.0868 17.2678 16.8213 18.1056V21.1039H20.6883C22.9591 19.0139 24.2643 15.9274 24.2643 12.2764Z"
                                              fill="#4285F4"/>
                                        <path d="M12.7391 24.0008C15.9756 24.0008 18.705 22.9382 20.6936 21.1039L16.8266 18.1055C15.7507 18.8375 14.3618 19.252 12.7435 19.252C9.61291 19.252 6.95849 17.1399 6.00607 14.3003H2.01562V17.3912C4.05274 21.4434 8.20192 24.0008 12.7391 24.0008Z"
                                              fill="#34A853"/>
                                        <path d="M6.00082 14.3003C5.49816 12.8099 5.49816 11.1961 6.00082 9.70575V6.61481H2.01478C0.312781 10.0056 0.312781 14.0004 2.01478 17.3912L6.00082 14.3003Z"
                                              fill="#FBBC04"/>
                                        <path d="M12.7391 4.74966C14.4499 4.7232 16.1034 5.36697 17.3425 6.54867L20.7685 3.12262C18.5991 1.0855 15.7198 -0.034466 12.7391 0.000808666C8.20192 0.000808666 4.05274 2.55822 2.01562 6.61481L6.00166 9.70575C6.94967 6.86173 9.6085 4.74966 12.7391 4.74966Z"
                                              fill="#EA4335"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_152_4778">
                                            <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                '.$signUp['googleLink'].'</a>
                        </div>
                        <div class="sign-up">
                           '.$signUp['valid-condition'].'
                        </div>
                    </div>
                </form>';
                }


                ?>

            </div>
        </div>
    </section>
    <section class="students-testimonials item-section">
        <div class="container">
            <div class="section-items">
                <div class="section-header">
                    <h3 class="h3 section-item">Students Testimonials</h3>
                    <p class="small-size-p color-grey-two section-item">Lorem ipsum dolor sit amet consectetur. Tempus
                        tincidunt etiam
                        eget elit id
                        imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla
                        feugiat
                        senectus in.</p>
                </div>
                <div class="students-testimonials-slider">
                    <?php
                    $studentsTestimonialsSliderItems = [
                        [
                            'personDescription' => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                            'personPicture' => 'personPicture1.png',
                            'personName' => 'Sarah L'
                        ],
                        [
                            'personDescription' => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                            'personPicture' => 'personPicture2.png',
                            'personName' => 'Sarah L'
                        ],
                        [
                            'personDescription' => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                            'personPicture' => 'personPicture1.png',
                            'personName' => 'Sarah L'
                        ],
                        [
                            'personDescription' => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                            'personPicture' => 'personPicture2.png',
                            'personName' => 'Sarah L'
                        ],
                    ];

                    foreach ($studentsTestimonialsSliderItems as $testimonialsSliderItem) {
                        echo '<div class="card-person">
                    <div class="person-description">
                        <p class="small-size-p color-grey-one">' . $testimonialsSliderItem['personDescription'] . '</p>
                    </div>
                    <div class="person">
                        <div class="person-name">
                            <img src="login-page-picture/' . $testimonialsSliderItem['personPicture'] . '">
                            <h5 class="h5 fw-semibold text-dark">' . $testimonialsSliderItem['personName'] . '</h5>
                        </div>
                        <a href="#" class="transparent-btn fw-medium small-size-p">Read Full Story</a>
                    </div>
                </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
</div>