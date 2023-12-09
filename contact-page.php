<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Title</title>
</head>
<body>
<?php
include "layots/header.php";
?>

<section class="contact-us">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h3 class="h3">Contact Us</h3>
                <p class="small-size-p color-grey-two">Welcome to SkillBridge's Pricing Plan page, where we offer two
                    comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and
                    affordable pricing options for our services. Whether you're an individual looking to enhance your
                    skills or a business seeking professional development solutions, we have a plan that suits you.
                    Explore our pricing options below and choose the one that best fits your requirements.</p>
            </div>
        </div>
    </div>
</section>
<section class="contact-page-form">
    <div class="container">
        <div class="section-items">
            <form class="contact-form col-lg-8">

                <div class="form-item col-sm-6 d-flex flex-column align-items-start">
                    <label for="contact-page-first-name" class="small-size-p fw-medium text-dark">First Name</label>
                    <input type="text" id="contact-page-first-name" required class="small-size-p"
                           placeholder="Enter First Name">
                </div>
                <div class="form-item col-sm-6 d-flex flex-column align-items-start">
                    <label for="contact-page-last-name" class="small-size-p fw-medium">Last Name</label>
                    <input type="text" id="contact-page-last-name" required class="small-size-p"
                           placeholder="Enter Last Name">
                </div>
                <div class="form-item col-sm-6 d-flex flex-column align-items-start">
                    <label for="contact-page-email" class="small-size-p fw-medium">Email</label>
                    <input type="email" required id="contact-page-email" name="email" class="small-size-p"
                           placeholder="Enter your Email">
                </div>
                <div class="form-item col-sm-6 d-flex flex-column align-items-start">
                    <label for="contact-page-phone" class="small-size-p fw-medium">Phone</label>
                    <input type="number" required id="contact-page-phone" name="phone" class="small-size-p"
                           placeholder="Enter Phone Number">
                </div>
                <div class="form-item col-12 d-flex flex-column align-items-start">
                    <label for="contact-page-subject" class="small-size-p fw-medium">Subject</label>
                    <input type="text" required id="contact-page-subject" name="subject" class="small-size-p"
                           placeholder="Enter your Subject">
                </div>
                <div class="form-item  col-12 d-flex flex-column align-items-start">
                    <label for="contact-page-message" class="small-size-p fw-medium">Message</label>
                    <textarea required id="contact-page-message" name="message" class="small-size-p"
                              placeholder="Enter your Message here..."></textarea>
                </div>
                <div class="section-btn">
                    <button type="button" class="orange-btn">Send Your Message</button>
                </div>
            </form>
            <div class="contact-us col-lg-4">
                <div class="card-item ">
                    <div class="card-link d-flex">
                        <a href="#" class="transparent-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <path d="M1.25 7.22425V14.375C1.25 15.7557 2.36929 16.875 3.75 16.875H16.25C17.6307 16.875 18.75 15.7557 18.75 14.375V7.22425L11.3102 11.8026C10.5067 12.297 9.49327 12.297 8.68976 11.8026L1.25 7.22425Z"
                                      fill="#262626"/>
                                <path d="M18.75 5.75652V5.625C18.75 4.24429 17.6307 3.125 16.25 3.125H3.75C2.36929 3.125 1.25 4.24429 1.25 5.625V5.75652L9.34488 10.738C9.74664 10.9852 10.2534 10.9852 10.6551 10.738L18.75 5.75652Z"
                                      fill="#262626"/>
                            </svg>
                        </a>
                    </div>
                    <p class="small-size-p text-center color-grey-one">support@skillbridge.com</p>
                </div>
                <div class="card-item">
                    <div class="card-link">
                        <a href="#" class="transparent-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M1.25 3.75C1.25 2.36929 2.36929 1.25 3.75 1.25H4.89302C5.61 1.25 6.23498 1.73796 6.40887 2.43354L7.33037 6.11952C7.48284 6.72942 7.25495 7.37129 6.75202 7.74849L5.674 8.557C5.56206 8.64096 5.53772 8.7639 5.56917 8.84974C6.51542 11.4329 8.5671 13.4846 11.1503 14.4308C11.2361 14.4623 11.359 14.4379 11.443 14.326L12.2515 13.248C12.6287 12.7451 13.2706 12.5172 13.8805 12.6696L17.5665 13.5911C18.262 13.765 18.75 14.39 18.75 15.107V16.25C18.75 17.6307 17.6307 18.75 16.25 18.75H14.375C7.12626 18.75 1.25 12.8737 1.25 5.625V3.75Z"
                                      fill="#262626"/>
                            </svg>
                        </a>
                    </div>
                    <p class="small-size-p text-center color-grey-one">+91 00000 00000</p>
                </div>
                <div class="card-item">
                    <div class="card-link">
                        <a href="#" class="transparent-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.61646 18.6259C9.64163 18.6405 9.66141 18.6517 9.67542 18.6596L9.69869 18.6726C9.88441 18.7745 10.1148 18.7738 10.3007 18.6729L10.3246 18.6596C10.3386 18.6517 10.3584 18.6405 10.3835 18.6259C10.4339 18.5967 10.5058 18.5542 10.5963 18.4985C10.7771 18.3872 11.0323 18.223 11.3372 18.0076C11.9459 17.5776 12.7581 16.9395 13.5721 16.1061C15.1922 14.4474 16.875 11.9551 16.875 8.75C16.875 4.95304 13.797 1.875 10 1.875C6.20304 1.875 3.125 4.95304 3.125 8.75C3.125 11.9551 4.80777 14.4474 6.42788 16.1061C7.24188 16.9395 8.05409 17.5776 8.66282 18.0076C8.96771 18.223 9.22295 18.3872 9.40375 18.4985C9.49419 18.5542 9.56612 18.5967 9.61646 18.6259ZM10 11.25C11.3807 11.25 12.5 10.1307 12.5 8.75C12.5 7.36929 11.3807 6.25 10 6.25C8.61929 6.25 7.5 7.36929 7.5 8.75C7.5 10.1307 8.61929 11.25 10 11.25Z"
                                      fill="#262626"/>
                            </svg>
                        </a>
                    </div>
                    <p class="small-size-p text-center color-grey-one">Some Where in the World</p>
                </div>
                <div class="card-item">
                    <div class="card-link d-flex">
                        <a href="#" class="transparent-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <g clip-path="url(#clip0_156_5623)">
                                    <path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z"
                                          fill="#333333"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_156_5623">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#" class="transparent-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <g clip-path="url(#clip0_156_5626)">
                                    <path d="M6.2918 18.125C13.8371 18.125 17.9652 11.8723 17.9652 6.45155C17.9652 6.27577 17.9613 6.09608 17.9535 5.9203C18.7566 5.33955 19.4496 4.62021 20 3.79608C19.2521 4.12883 18.458 4.34615 17.6449 4.44061C18.5011 3.92742 19.1421 3.12123 19.4492 2.17147C18.6438 2.6488 17.763 2.98551 16.8445 3.16718C16.2257 2.50963 15.4075 2.07426 14.5164 1.92838C13.6253 1.78249 12.711 1.93421 11.9148 2.36008C11.1186 2.78595 10.4848 3.46225 10.1115 4.28443C9.73825 5.1066 9.64619 6.02885 9.84961 6.90858C8.21874 6.82674 6.62328 6.40309 5.16665 5.66508C3.71002 4.92708 2.42474 3.8912 1.39414 2.6246C0.870333 3.5277 0.710047 4.59637 0.945859 5.61341C1.18167 6.63045 1.79589 7.51954 2.66367 8.09999C2.01219 8.0793 1.37498 7.9039 0.804688 7.58827V7.63905C0.804104 8.58679 1.13175 9.50549 1.73192 10.239C2.3321 10.9725 3.16777 11.4755 4.09687 11.6625C3.49338 11.8276 2.85999 11.8517 2.2457 11.7328C2.50788 12.5479 3.01798 13.2607 3.70481 13.7719C4.39164 14.2831 5.22093 14.5672 6.07695 14.5844C4.62369 15.7259 2.82848 16.3451 0.980469 16.3422C0.652739 16.3417 0.325333 16.3216 0 16.282C1.87738 17.4865 4.06128 18.1262 6.2918 18.125Z"
                                          fill="#333333"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_156_5626">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#" class="transparent-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <g clip-path="url(#clip0_156_5629)">
                                    <path d="M18.5195 0H1.47656C0.660156 0 0 0.644531 0 1.44141V18.5547C0 19.3516 0.660156 20 1.47656 20H18.5195C19.3359 20 20 19.3516 20 18.5586V1.44141C20 0.644531 19.3359 0 18.5195 0ZM5.93359 17.043H2.96484V7.49609H5.93359V17.043ZM4.44922 6.19531C3.49609 6.19531 2.72656 5.42578 2.72656 4.47656C2.72656 3.52734 3.49609 2.75781 4.44922 2.75781C5.39844 2.75781 6.16797 3.52734 6.16797 4.47656C6.16797 5.42188 5.39844 6.19531 4.44922 6.19531ZM17.043 17.043H14.0781V12.4023C14.0781 11.2969 14.0586 9.87109 12.5352 9.87109C10.9922 9.87109 10.7578 11.0781 10.7578 12.3242V17.043H7.79688V7.49609H10.6406V8.80078H10.6797C11.0742 8.05078 12.043 7.25781 13.4844 7.25781C16.4883 7.25781 17.043 9.23438 17.043 11.8047V17.043Z"
                                          fill="#333333"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_156_5629">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <p class="small-size-p text-center color-grey-one">Social Profiles</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "layots/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>