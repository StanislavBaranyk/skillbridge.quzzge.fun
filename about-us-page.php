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

<section class="about-skillbridge">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h3 class="h3 fw-semibold section-item">About Skillbridge</h3>
                <p class="small-size-p color-grey-two section-item"> Welcome to our platform, where we are passionate about
                    empowering
                    individuals to master the world of design and development. We offer a wide range of online courses
                    designed to equip learners with the skills and knowledge needed to succeed in the ever-evolving
                    digital landscape.</p>
            </div>
            <div class=""
        </div>
    </div>
</section>
<section class="achievements">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h4 class="h4 fw-medium">Achievements</h4>
                <p class="small-size-p color-grey-two">Our commitment to excellence has led us to achieve significant
                    milestones along our journey. Here are some of our notable achievements</p>
            </div>
            <div class="card-items">
                <?php
                $achievementsItems = [
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="23" viewBox="0 0 28 23" fill="none">
  <path d="M4.67212 17.6668L4.99961 18.9918C5.41442 20.7143 6.32047 21.5977 8.12164 21.5977H19.8783C21.6905 21.5977 22.5856 20.7364 23.0113 18.9918L23.3388 17.6668H4.67212ZM4.31189 16.154H23.7099L25.7621 7.65193L24.867 7.13297L19.8347 10.843C19.4635 11.108 19.2125 11.0086 19.005 10.7105L14.2674 3.46711L13.7435 3.44503L8.96218 10.7436C8.77661 11.0307 8.55828 11.1191 8.18713 10.854L3.25302 7.21026L2.20507 7.4863L4.31189 16.154ZM2.60897 9.86024C4.04991 9.86024 5.20701 8.67882 5.20701 7.21026C5.20701 5.77484 4.04991 4.58232 2.60897 4.58232C1.16803 4.58232 0 5.76379 0 7.21026C0 8.67882 1.17894 9.86024 2.60897 9.86024ZM14.0055 5.26691C15.4355 5.26691 16.6035 4.08545 16.6035 2.62793C16.6035 1.1925 15.4355 0 14.0055 0C12.5536 0 11.3965 1.18147 11.3965 2.62793C11.3965 4.08545 12.5645 5.26691 14.0055 5.26691ZM25.391 9.86024C26.8211 9.86024 28 8.67882 28 7.21026C28 5.76379 26.832 4.58232 25.391 4.58232C23.961 4.58232 22.793 5.77484 22.793 7.21026C22.793 8.67882 23.961 9.86024 25.391 9.86024Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Trusted by Thousands',
                        'cardText' => 'We have successfully served thousands of students, helping them unlock their potential and achieve their career goals.',
                    ],
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="23" height="27" viewBox="0 0 23 27" fill="none">
  <path d="M11.148 26.4375C15.273 26.4375 18.6011 23.1094 18.6011 18.9961C18.6011 14.8711 15.273 11.543 11.148 11.543C7.0347 11.543 3.70657 14.8711 3.70657 18.9961C3.70657 23.1094 7.0347 26.4375 11.148 26.4375ZM9.02688 22.8281C8.58157 23.1562 8.11282 22.8164 8.2886 22.3008L9.13235 19.7812L6.9761 18.2461C6.56595 17.9414 6.69485 17.3672 7.25735 17.3672L9.90579 17.3906L10.7144 14.8594C10.8784 14.3438 11.4409 14.3438 11.605 14.8594L12.4136 17.3906L15.062 17.3672C15.6245 17.3672 15.7417 17.9531 15.3433 18.2344L13.187 19.7812L14.0308 22.3008C14.2066 22.8164 13.7378 23.1562 13.2925 22.8281L11.1597 21.2695L9.02688 22.8281ZM4.01126 13.418C5.1597 11.9648 6.74173 10.8633 8.55813 10.3242L3.24954 0.785156L0.167509 5.48438C-0.0434283 5.78906 -0.0551471 6.12891 0.132353 6.43359L4.01126 13.418ZM8.52298 6.32812H13.7847L17.3589 0H4.94876L8.52298 6.32812ZM13.7495 10.3242C15.5777 10.8633 17.148 11.9648 18.2964 13.418L22.187 6.43359C22.3628 6.12891 22.3511 5.78906 22.1402 5.48438L19.0581 0.785156L13.7495 10.3242Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Award-Winning Courses',
                        'cardText' => 'Our courses have received recognition and accolades in the industry for their quality, depth of content, and effective teaching methodologies.',
                    ],
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20" fill="none">
  <path d="M10.5393 16.9684C14.5075 15.8763 16.2058 12.7396 15.087 8.51088L13.5818 2.763C13.1713 1.21928 12.1733 0.66092 10.6359 1.07148L2.65938 3.23104C1.11397 3.65802 0.542495 4.64337 0.952994 6.21992L2.4501 11.9595C3.55281 16.1802 6.57118 18.0523 10.5393 16.9684ZM9.78276 14.0288C8.10047 14.4722 6.46655 13.8892 5.6053 12.4933C5.43628 12.2388 5.58116 11.9842 5.90312 12.0089C6.97363 12.0992 8.24539 11.9103 9.16295 11.6558C10.0644 11.4176 11.2396 10.9414 12.133 10.3091C12.3986 10.112 12.6643 10.2516 12.6481 10.5883C12.5918 12.2306 11.473 13.5526 9.78276 14.0288ZM5.72605 8.63406C5.12237 8.80643 5.04188 9.21704 4.78431 9.2581C4.66358 9.28269 4.51869 9.14311 4.44625 8.90502C4.25307 8.20706 4.68773 7.45982 5.37994 7.28739C6.0802 7.11495 6.79656 7.53372 6.97363 8.20706C7.04608 8.45335 6.98168 8.64226 6.8529 8.69152C6.55509 8.79823 6.27337 8.48621 5.72605 8.63406ZM10.6359 7.27917C10.0322 7.45982 9.95173 7.86217 9.69416 7.89502C9.57348 7.91965 9.42856 7.78006 9.35616 7.55015C9.16295 6.8604 9.59759 6.10497 10.2898 5.93253C10.9981 5.74368 11.7064 6.17066 11.8835 6.85219C11.9559 7.10674 11.8916 7.28739 11.7628 7.33665C11.473 7.4434 11.1832 7.12316 10.6359 7.27917ZM26.1544 5.35774L18.1859 3.18177C16.7692 2.79584 15.7712 3.22283 15.3606 4.50377L15.2641 4.85686L16.1495 8.22345C17.0348 11.5819 16.3105 14.423 14.2499 16.2623C15.0387 17.5925 16.4393 18.5861 18.2905 19.0869C22.2426 20.1626 25.2449 18.2904 26.3556 14.0699L27.8769 8.33844C28.2793 6.7865 27.6998 5.77652 26.1544 5.35774ZM18.041 10.3337C17.4856 10.1942 17.1556 9.61937 17.3085 9.0364C17.4614 8.46982 18.0249 8.13313 18.5802 8.28918C19.1356 8.44515 19.4657 9.0282 19.3208 9.59471C19.1678 10.1613 18.6044 10.4898 18.041 10.3337ZM22.7657 11.6229C22.2184 11.4751 21.8884 10.8921 22.0413 10.3173C22.1862 9.75075 22.7497 9.42234 23.3051 9.57831C23.8685 9.71789 24.1904 10.3009 24.0455 10.8757C23.8926 11.4423 23.3292 11.7789 22.7657 11.6229ZM19.3771 14.776C18.5401 14.5379 17.7351 14.5297 16.7049 14.7596C16.3829 14.8335 16.1897 14.5625 16.3588 14.2916C17.051 13.183 18.4515 12.7232 19.8118 13.1092C21.2203 13.4704 22.1782 14.5707 22.2264 15.8845C22.2426 16.213 21.9448 16.3526 21.7033 16.1309C20.9065 15.3919 20.2223 14.9977 19.3771 14.776Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Positive Student Feedback',
                        'cardText' => 'We take pride in the positive feedback we receive from our students, who appreciate the practicality and relevance of our course materials.',
                    ],
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
  <path d="M9.58594 23.6602C9.77344 23.6602 10.0664 23.5898 10.3594 23.4375C17.0273 19.9453 19.1719 18.1992 19.1719 13.9922V5.15625C19.1719 3.94922 18.6562 3.5625 17.6719 3.15234C16.3008 2.58984 11.918 0.996094 10.5586 0.527344C10.2422 0.421875 9.91406 0.363281 9.58594 0.363281C9.25781 0.363281 8.92969 0.433594 8.625 0.527344C7.25391 0.972656 2.87109 2.60156 1.5 3.15234C0.527344 3.55078 0 3.94922 0 5.15625V13.9922C0 18.1992 2.26172 19.7461 8.8125 23.4375C9.11719 23.6016 9.39844 23.6602 9.58594 23.6602ZM4.30078 12.3984C4.30078 12.2578 4.37109 12.082 4.5 11.9297L11.1211 3.62109C11.625 2.98828 12.4688 3.41016 12.1641 4.19531L9.98438 10.0547H14.0742C14.3906 10.0547 14.625 10.2773 14.625 10.5938C14.625 10.7344 14.5547 10.9102 14.4258 11.0625L7.80469 19.3711C7.30078 20.0039 6.46875 19.582 6.76172 18.8086L8.95312 12.9375H4.85156C4.54688 12.9375 4.30078 12.7148 4.30078 12.3984Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Industry Partnerships',
                        'cardText' => 'We have established strong partnerships with industry leaders, enabling us to provide our students with access to the latest tools and technologies',
                    ],
                ];

                foreach ($achievementsItems as $achievementsItem) {
                    echo '  <div class="card-item">
                    <div class="card-header">
                        ' . $achievementsItem['cardIcons'] . '
                    </div>
                    <div class="card-description">
                        <h5 class="h5">' . $achievementsItem['cardHeader'] . '</h5>
                        <p class="small-size-p color-grey-two">' . $achievementsItem['cardText'] . '</p>
                    </div>
                </div>';
                }

                ?>


            </div>
        </div>
    </div>
</section>

<section class="our-goals">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h4 class="h4 fw-medium">Our Goals</h4>
                <p class="small-size-p color-grey-two">At SkillBridge, our goal is to empower individuals from all
                    backgrounds to thrive in the world of design and development. We believe that education should be
                    accessible and transformative, enabling learners to pursue their passions and make a meaningful
                    impact.
                    Through our carefully crafted courses, we aim to</p>
            </div>
            <div class="card-items">
                <?php
                $ourGoals = [
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="29" viewBox="0 0 18 29" fill="none">
  <path d="M5.65732 27.8559H12.3427C16.1504 27.8559 18.0325 25.9011 17.9996 21.9915C17.9558 17.5266 17.934 14.2834 17.8246 11.851C17.5073 4.69819 15.5268 2.599 9.00549 2.599C2.4842 2.599 0.492802 4.69819 0.17549 11.851C0.0660726 14.2834 0.0441891 17.5266 0.000422031 21.9915C-0.0324032 25.9011 1.84958 27.8559 5.65732 27.8559ZM5.34 23.4466C4.39901 23.4466 3.79722 22.8245 3.79722 21.8916V16.1605C3.79722 15.2164 4.39901 14.5944 5.34 14.5944H12.671C13.6011 14.5944 14.2028 15.2164 14.2028 16.1605V21.8916C14.2028 22.8245 13.6011 23.4466 12.671 23.4466H5.34ZM3.79722 18.8706H14.2028V17.5488H3.79722V18.8706ZM9.00549 0C6.90467 0 5.42753 1.44389 5.42753 3.4098H6.97033C6.97033 2.33244 7.8019 1.56606 9.00549 1.56606C10.1981 1.56606 11.0407 2.33244 11.0407 3.4098H12.5834C12.5834 1.44389 11.0954 0 9.00549 0Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Provide Practical Skills',
                        'cardText' => 'We focus on delivering practical skills that are relevant to the current industry demands. Our courses are designed to equip learners with the knowledge and tools needed to excel in their chosen field.',
                    ],
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" viewBox="0 0 20 26" fill="none">
  <path d="M3.59766 25.1133H18.7734C19.2891 25.1133 19.7109 24.7031 19.7109 24.1758C19.7109 23.7656 19.4297 23.4023 19.0547 23.2734C17.5781 22.6875 17.2734 20.7773 18.7266 19.3125C19.1719 18.8672 19.7109 18.293 19.7109 17.1211V3.67969C19.7109 1.24219 18.5039 0 16.0781 0H3.63281C1.20703 0 0 1.23047 0 3.67969V21.4922C0 23.9062 1.21875 25.1133 3.59766 25.1133ZM3.70312 23.2266C2.51953 23.2266 1.88672 22.5938 1.88672 21.4805C1.88672 20.4258 2.63672 19.7461 3.80859 19.7461H15.832C15.9844 19.7461 16.125 19.7344 16.2422 19.7109C15.6914 20.9297 15.7852 22.2188 16.4062 23.2266H3.70312ZM3.35156 17.9648C2.98828 17.9648 2.68359 17.6602 2.68359 17.2852V2.48438C2.68359 2.10938 2.98828 1.81641 3.35156 1.81641C3.71484 1.81641 4.03125 2.10938 4.03125 2.48438V17.2852C4.03125 17.6602 3.71484 17.9648 3.35156 17.9648Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Foster Creative Problem-Solving',
                        'cardText' => 'We encourage creative thinking and problem-solving abilities, allowing our students to tackle real-world challenges with confidence and innovation.',
                    ],
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="19" viewBox="0 0 28 19" fill="none">
  <path d="M0 9.48525C0 11.4946 1.39227 12.5977 2.95857 12.5977C3.61602 12.5977 4.10912 12.4105 4.69889 12.0363C5.25 11.6916 5.64641 11.8983 5.64641 12.381V16.0254C5.64641 17.9658 6.65193 18.9606 8.57594 18.9606H11.1574C11.6215 18.9606 11.8246 18.5666 11.4959 18.0052C11.1188 17.4043 10.9351 16.902 10.9351 16.2322C10.9351 14.6366 12.0276 13.2183 14 13.2183C15.9724 13.2183 17.0553 14.6366 17.0553 16.2322C17.0553 16.902 16.8715 17.4043 16.5041 18.0052C16.1754 18.5666 16.3687 18.9606 16.8426 18.9606H19.4241C21.3481 18.9606 22.3536 17.9658 22.3536 16.0254V12.381C22.3536 11.8983 22.75 11.6916 23.2915 12.0363C23.8909 12.4105 24.384 12.5977 25.0317 12.5977C26.6077 12.5977 28 11.4946 28 9.48525C28 7.46603 26.6077 6.36287 25.0317 6.36287C24.384 6.36287 23.8909 6.55002 23.2915 6.9243C22.75 7.26904 22.3536 7.0622 22.3536 6.57956V2.9352C22.3536 1.00466 21.3481 0 19.4241 0H16.8426C16.3687 0 16.1754 0.403836 16.5041 0.965268C16.8715 1.56609 17.0553 2.06843 17.0553 2.7382C17.0553 4.33385 15.9724 5.75219 14 5.75219C12.0276 5.75219 10.9351 4.33385 10.9351 2.7382C10.9351 2.06843 11.1188 1.56609 11.4959 0.965268C11.8246 0.403836 11.6215 0 11.1574 0H8.57594C6.65193 0 5.64641 1.00466 5.64641 2.9352V6.57956C5.64641 7.0622 5.25 7.26904 4.69889 6.9243C4.10912 6.55002 3.61602 6.36287 2.95857 6.36287C1.39227 6.36287 0 7.46603 0 9.48525Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Promote Collaboration and Community',
                        'cardText' => 'We believe in the power of collaboration and peer learning. Our platform fosters a supportive and inclusive community where learners can connect, share insights, and grow together.',
                    ],
                    [
                        'cardIcons' => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
  <path d="M22.8633 23.707C23.3906 23.707 23.8242 23.2852 23.8242 22.7695C23.8242 22.2422 23.3906 21.8086 22.8633 21.8086H21.4336V14.0391C21.4336 9.76172 18.1406 6.45703 13.8633 6.45703C9.59766 6.45703 6.30469 9.76172 6.30469 14.0391V21.8086H4.85156C4.33594 21.8086 3.92578 22.2422 3.92578 22.7695C3.92578 23.2852 4.33594 23.707 4.85156 23.707H22.8633ZM14.8477 14.0742V21.8086H12.9023V14.0742C12.9023 13.5352 13.3242 13.0898 13.8633 13.0898C14.4023 13.0898 14.8477 13.5352 14.8477 14.0742ZM3.24609 14.8828C3.79688 14.8828 4.27734 14.4258 4.27734 13.8867C4.27734 13.3242 3.79688 12.8672 3.24609 12.8672H0.996094C0.457031 12.8672 0 13.3359 0 13.8867C0 14.4141 0.457031 14.8828 0.996094 14.8828H3.24609ZM5.64844 7.08984C6.03516 7.47656 6.67969 7.48828 7.06641 7.08984C7.46484 6.69141 7.45312 6.05859 7.06641 5.67188L5.48438 4.07812C5.10938 3.67969 4.45312 3.67969 4.05469 4.07812C3.66797 4.47656 3.66797 5.09766 4.05469 5.49609L5.64844 7.08984ZM12.8555 3.26953C12.8555 3.82031 13.3125 4.28906 13.8633 4.28906C14.4258 4.28906 14.8828 3.82031 14.8828 3.26953V1.01953C14.8828 0.46875 14.4141 0 13.8633 0C13.3125 0 12.8555 0.46875 12.8555 1.01953V3.26953ZM20.6484 5.67188C20.2617 6.05859 20.25 6.69141 20.6484 7.08984C21.0586 7.48828 21.6797 7.47656 22.0664 7.08984L23.6719 5.49609C24.0586 5.09766 24.0586 4.47656 23.6719 4.07812C23.2617 3.67969 22.6406 3.67969 22.2539 4.07812L20.6484 5.67188ZM26.7188 14.8828C27.2695 14.8828 27.7383 14.4141 27.7383 13.8867C27.7383 13.3359 27.2695 12.8672 26.7188 12.8672H24.4688C23.9297 12.8672 23.4609 13.3242 23.4609 13.8867C23.4609 14.4258 23.9297 14.8828 24.4688 14.8828H26.7188Z" fill="#FF9500"/>
</svg>',
                        'cardHeader' => 'Stay Ahead of the Curve',
                        'cardText' => 'The digital landscape is constantly evolving, and we strive to stay at the forefront of industry trends. We regularly update our course content to ensure our students receive the latest knowledge and skills.',
                    ],
                ];

                foreach ($ourGoals as $ourGoal) {

                    echo '                <div class="card-item">
                    <div class="card-header">
                        ' . $ourGoal['cardIcons'] . '
                    </div>
                    <div class="card-description">
                        <h5 class="h5">' . $ourGoal['cardHeader'] . '</h5>
                        <p class="small-size-p color-grey-two">' . $ourGoal['cardText'] . '</p>
                    </div>
                    </div>
               
';
                }


                ?>
            </div>
        </div>
    </div>
</section>

<section class="lets-shape">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <svg class="shape-17"  xmlns="http://www.w3.org/2000/svg" width="362" height="323" viewBox="0 0 362 323" fill="none">
                    <path d="M0.359375 346.917L120.88 226.396H241.401V105.875L361.922 226.396L241.401 346.917H0.359375Z" fill="#F7F7F8"/>
                    <path d="M0.359375 105.875L120.88 226.396V105.875H241.401L361.922 -14.6458H120.88L0.359375 105.875Z" fill="#F7F7F8"/>
                </svg>
                <div class="header-description">

                    <h3 class="h3 fw-semibold"><span>Together</span>, let's shape the future of digital innovation</h3>
                    <p class="small-size-p">Join us on this exciting learning journey and unlock your potential in design and development.</p>
                </div>
                <div class="section-btn">
                    <button class="orange-btn">Join Now</button>
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