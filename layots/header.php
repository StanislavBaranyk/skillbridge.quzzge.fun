<header id="header" class="header">
    <div class="container">
        <div class="section-items">
            <div class="header-top-banner">
                <p>Free Courses Sale Ends Soon, Get It Now</p>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M-2.62268e-07 6.5C-2.80374e-07 6.08579 0.335786 5.75 0.75 5.75L11.3879 5.75L7.23017 1.79062C6.93159 1.50353 6.92228 1.02875 7.20937 0.730167C7.49647 0.431589 7.97125 0.422279 8.26983 0.709374L13.7698 5.95937C13.9169 6.10078 14 6.29599 14 6.5C14 6.70401 13.9169 6.89922 13.7698 7.04062L8.26983 12.2906C7.97125 12.5777 7.49647 12.5684 7.20937 12.2698C6.92228 11.9713 6.93159 11.4965 7.23017 11.2094L11.3879 7.25L0.75 7.25C0.335786 7.25 -2.44163e-07 6.91421 -2.62268e-07 6.5Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>
            <nav class="header-nav">
                <div class="header-nav-container">
                    <a href="#" class="header-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                            <path d="M3.27246 27.8457L11.2972 19.821H19.3218V11.7963L27.3465 19.821L19.3218 27.8457H3.27246Z"
                                  fill="white"/>
                            <path d="M3.27246 11.7963L11.2972 19.821V11.7963H19.3218L27.3465 3.77161H11.2972L3.27246 11.7963Z"
                                  fill="white"/>
                        </svg>
                    </a>
                    <nav>
                        <ul class="list-items">
                            <?php

                            $headerNavItems = ['Home', "Courses", 'About Us', 'Pricing', 'Contact'];

                            foreach ($headerNavItems as $headerNavItem) {
                                echo ' <li class="li-item">
                                <span class="transparent-btn  active-nav">' . $headerNavItem . '</span>
                            </li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <ul class="nav-items">
                    <li class="nav-item">
                        <button class="transparent-btn" type="button">Sign Up</button>
                    </li>
                    <li class="nav-item">
                        <button class="orange-btn" type="button">Login</button>
                    </li>
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35" viewBox="0 0 34 35" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M4.25 10.0625C4.25 9.4757 4.7257 9 5.3125 9H28.6875C29.2743 9 29.75 9.4757 29.75 10.0625C29.75 10.6493 29.2743 11.125 28.6875 11.125H5.3125C4.7257 11.125 4.25 10.6493 4.25 10.0625ZM4.25 17.5C4.25 16.9132 4.7257 16.4375 5.3125 16.4375H28.6875C29.2743 16.4375 29.75 16.9132 29.75 17.5C29.75 18.0868 29.2743 18.5625 28.6875 18.5625H5.3125C4.7257 18.5625 4.25 18.0868 4.25 17.5ZM15.9375 24.9375C15.9375 24.3507 16.4132 23.875 17 23.875H28.6875C29.2743 23.875 29.75 24.3507 29.75 24.9375C29.75 25.5243 29.2743 26 28.6875 26H17C16.4132 26 15.9375 25.5243 15.9375 24.9375Z"
                                  fill="#262626"/>
                        </svg>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

