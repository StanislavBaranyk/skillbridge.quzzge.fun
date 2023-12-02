<footer class="footer">
    <div class="container">
        <div class="section-items">
            <div class="footer-container">
                <div class="section-header">
                    <a class="header-logo" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                            <path d="M4.09961 30.5811L12.9268 21.7539H21.7539V12.9268L30.5811 21.7539L21.7539 30.5811H4.09961Z"
                                  fill="white"/>
                            <path d="M4.09961 12.9268L12.9268 21.7539V12.9268H21.7539L30.5811 4.09961H12.9268L4.09961 12.9268Z"
                                  fill="white"/>
                        </svg>
                    </a>
                    <ul class="list-items">
                        <li class="li-item">
                            <p class="small-size-p">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <path d="M1.5 8.6691V17.25C1.5 18.9069 2.84315 20.25 4.5 20.25H19.5C21.1569 20.25 22.5 18.9069 22.5 17.25V8.6691L13.5723 14.1631C12.6081 14.7564 11.3919 14.7564 10.4277 14.1631L1.5 8.6691Z"
                                          fill="#262626"/>
                                    <path d="M22.5 6.90783V6.75C22.5 5.09315 21.1569 3.75 19.5 3.75H4.5C2.84315 3.75 1.5 5.09315 1.5 6.75V6.90783L11.2139 12.8856C11.696 13.1823 12.304 13.1823 12.7861 12.8856L22.5 6.90783Z"
                                          fill="#262626"/>
                                </svg>
                                hello@skillbridge.com
                            </p>
                        </li>
                        <li class="li-item">
                            <p class="small-size-p">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.5 4.5C1.5 2.84315 2.84315 1.5 4.5 1.5H5.87163C6.732 1.5 7.48197 2.08556 7.69064 2.92025L8.79644 7.34343C8.97941 8.0753 8.70594 8.84555 8.10242 9.29818L6.8088 10.2684C6.67447 10.3691 6.64527 10.5167 6.683 10.6197C7.81851 13.7195 10.2805 16.1815 13.3803 17.317C13.4833 17.3547 13.6309 17.3255 13.7316 17.1912L14.7018 15.8976C15.1545 15.2941 15.9247 15.0206 16.6566 15.2036L21.0798 16.3094C21.9144 16.518 22.5 17.268 22.5 18.1284V19.5C22.5 21.1569 21.1569 22.5 19.5 22.5H17.25C8.55151 22.5 1.5 15.4485 1.5 6.75V4.5Z"
                                          fill="#262626"/>
                                </svg>
                                +91 91813 23 2309
                            </p>
                        </li>
                        <li class="li-item">
                            <p class="small-size-p">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.5397 22.351C11.57 22.3685 11.5937 22.3821 11.6105 22.3915L11.6384 22.4071C11.8613 22.5294 12.1378 22.5285 12.3608 22.4075L12.3895 22.3915C12.4063 22.3821 12.43 22.3685 12.4603 22.351C12.5207 22.316 12.607 22.265 12.7155 22.1982C12.9325 22.0646 13.2388 21.8676 13.6046 21.6091C14.3351 21.0931 15.3097 20.3274 16.2865 19.3273C18.2307 17.3368 20.25 14.3462 20.25 10.5C20.25 5.94365 16.5563 2.25 12 2.25C7.44365 2.25 3.75 5.94365 3.75 10.5C3.75 14.3462 5.76932 17.3368 7.71346 19.3273C8.69025 20.3274 9.66491 21.0931 10.3954 21.6091C10.7612 21.8676 11.0675 22.0646 11.2845 22.1982C11.393 22.265 11.4793 22.316 11.5397 22.351ZM12 13.5C13.6569 13.5 15 12.1569 15 10.5C15 8.84315 13.6569 7.5 12 7.5C10.3431 7.5 9 8.84315 9 10.5C9 12.1569 10.3431 13.5 12 13.5Z"
                                          fill="#262626"/>
                                </svg>
                                Somewhere in the World
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="sub-container">
                    <div class="list-container">
                        <?php

                        $footerSubContainerListItems =
                            [
                                [
                                    'cardHeader' => 'Home',
                                    'textLink' => ['Benefits', 'Our Courses', 'Our Testimonials', 'Our FAQ',],
                                ],
                                [
                                    'cardHeader' => 'About Us',
                                    'textLink' => ['Company', 'Company', 'Our Goals',],
                                ],
                            ];

                        foreach ($footerSubContainerListItems as $footerSubContainerListItem) {
                            echo ' <ul class="list-items">
                                        <li class="li-item"><h5 class="fw-semibold">' . $footerSubContainerListItem['cardHeader'] . '</li>';
                            foreach ($footerSubContainerListItem['textLink'] as $textLink) {
                                echo '<li class="li-item"><a href="#" class="small-size-p fw-semibold">' . $textLink . '</a></li>';
                            };
                            echo '</ul>';
                        }
                        ?>
                    </div>
                    <div class="social-profiles">
                        <h5 class="fw-semibold">Social Profiles</h5>
                        <ul class="list-items">
                            <li class="li-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <g clip-path="url(#clip0_140_348)">
                                        <path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z"
                                              fill="#333333"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_140_348">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </li>
                            <li class="li-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path d="M6.2918 18.1246C13.8371 18.1246 17.9652 11.8719 17.9652 6.45118C17.9652 6.2754 17.9613 6.09572 17.9535 5.91993C18.7566 5.33918 19.4496 4.61985 20 3.79572C19.2521 4.12847 18.458 4.34579 17.6449 4.44025C18.5011 3.92706 19.1421 3.12086 19.4492 2.17111C18.6438 2.64843 17.763 2.98514 16.8445 3.16681C16.2257 2.50927 15.4075 2.0739 14.5164 1.92801C13.6253 1.78212 12.711 1.93384 11.9148 2.35971C11.1186 2.78559 10.4848 3.46189 10.1115 4.28406C9.73825 5.10623 9.64619 6.02848 9.84961 6.90822C8.21874 6.82638 6.62328 6.40272 5.16665 5.66472C3.71002 4.92671 2.42474 3.89083 1.39414 2.62423C0.870333 3.52734 0.710047 4.596 0.945859 5.61304C1.18167 6.63008 1.79589 7.51917 2.66367 8.09962C2.01219 8.07894 1.37498 7.90353 0.804688 7.5879V7.63868C0.804104 8.58643 1.13175 9.50512 1.73192 10.2386C2.3321 10.9721 3.16777 11.4751 4.09687 11.6621C3.49338 11.8272 2.85999 11.8513 2.2457 11.7324C2.50788 12.5475 3.01798 13.2604 3.70481 13.7716C4.39164 14.2828 5.22093 14.5668 6.07695 14.584C4.62369 15.7256 2.82848 16.3447 0.980469 16.3418C0.652739 16.3413 0.325333 16.3212 0 16.2817C1.87738 17.4861 4.06128 18.1258 6.2918 18.1246Z"
                                          fill="#333333"/>
                                </svg>
                            </li>
                            <li class="li-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <g clip-path="url(#clip0_140_354)">
                                        <path d="M18.5195 0H1.47656C0.660156 0 0 0.644531 0 1.44141V18.5547C0 19.3516 0.660156 20 1.47656 20H18.5195C19.3359 20 20 19.3516 20 18.5586V1.44141C20 0.644531 19.3359 0 18.5195 0ZM5.93359 17.043H2.96484V7.49609H5.93359V17.043ZM4.44922 6.19531C3.49609 6.19531 2.72656 5.42578 2.72656 4.47656C2.72656 3.52734 3.49609 2.75781 4.44922 2.75781C5.39844 2.75781 6.16797 3.52734 6.16797 4.47656C6.16797 5.42188 5.39844 6.19531 4.44922 6.19531ZM17.043 17.043H14.0781V12.4023C14.0781 11.2969 14.0586 9.87109 12.5352 9.87109C10.9922 9.87109 10.7578 11.0781 10.7578 12.3242V17.043H7.79688V7.49609H10.6406V8.80078H10.6797C11.0742 8.05078 12.043 7.25781 13.4844 7.25781C16.4883 7.25781 17.043 9.23438 17.043 11.8047V17.043Z"
                                              fill="#333333"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_140_354">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-lines"></div>
            <div class="page-rights">
                <p class="small-size-p text-center">© 2023 Skillbridge. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
