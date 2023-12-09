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

<section class="course-page-welcome-section">
    <div class="container">
        <div class="section-header">
            <h3 class="h3 fw-semibold section-item">Online Courses on Design and Development</h3>
            <p class="section-item small-size-p color-grey-two">Welcome to our online course page, where you can enhance your skills
                in design and
                development. Choose from our carefully curated selection of 10 courses designed to provide you with
                comprehensive knowledge and practical experience. Explore the courses below and find the perfect fit for
                your learning journey.</p>
        </div>
    </div>

</section>

<section class="course-page-course-card">
    <div class="container">
        <div class="section-items">

            <?php

            $courseCards = [
                [
                    'cardHeader' => 'Web Design Fundamentals',
                    'cardText' => 'Learn the fundamentals of web design, including HTML, CSS, and responsive design principles. Develop the skills to create visually appealing and user-friendly websites.',
                    'cardPicture' => ['card1-picture1.png', 'card1-picture2.png', 'card1-picture3.png',],
                    'cardDescription' => [
                        'personExperience' => ['4 Weeks', 'Beginner',],
                        'name' => 'By John Smith',
                    ],
                    'curriculumItems' => [
                        [
                            'curriculumNumber' => '01',
                            'curriculumText' => 'Introduction to HTML',
                        ],
                        [
                            'curriculumNumber' => '02',
                            'curriculumText' => 'Styling with CSS',
                        ],
                        [
                            'curriculumNumber' => '03',
                            'curriculumText' => 'Introduction to Responsive Design',
                        ],
                        [
                            'curriculumNumber' => '04',
                            'curriculumText' => 'Design Principles for Web',
                        ],
                        [
                            'curriculumNumber' => '05',
                            'curriculumText' => 'Building a Basic Website',
                        ],
                    ],
                ],
                [
                    'cardHeader' => 'UI/UX Design',
                    'cardText' => 'Master the art of creating intuitive user interfaces (UI) and enhancing user experiences (UX). Learn design principles, wireframing, prototyping, and usability testing techniques.',
                    'cardPicture' => ['card2-picture1.png', 'card2-picture2.png', 'card2-picture3.png',],
                    'cardDescription' => [
                        'personExperience' => ['6 Weeks', 'Intermediate',],
                        'name' => 'By Emily Johnson',
                    ],
                    'curriculumItems' => [
                        [
                            'curriculumNumber' => '01',
                            'curriculumText' => 'Introduction to UI/UX Design',
                        ],
                        [
                            'curriculumNumber' => '02',
                            'curriculumText' => 'User Research and Personas',
                        ],
                        [
                            'curriculumNumber' => '03',
                            'curriculumText' => 'Wireframing and Prototyping',
                        ],
                        [
                            'curriculumNumber' => '04',
                            'curriculumText' => 'Visual Design and Branding',
                        ],
                        [
                            'curriculumNumber' => '05',
                            'curriculumText' => 'Usability Testing and Iteration',
                        ],
                    ],
                ],
                [
                    'cardHeader' => 'Mobile App Development',
                    'cardText' => 'Dive into the world of mobile app development. Learn to build native iOS and Android applications using industry-leading frameworks like Swift and Kotlin.',
                    'cardPicture' => ['card3-picture1.png', 'card3-picture2.png', 'card3-picture3.png',],
                    'cardDescription' => [
                        'personExperience' => ['8 Weeks', 'Intermediate',],
                        'name' => 'By David Brown',
                    ],
                    'curriculumItems' => [
                        [
                            'curriculumNumber' => '01',
                            'curriculumText' => 'Introduction to Mobile App Development',
                        ],
                        [
                            'curriculumNumber' => '02',
                            'curriculumText' => 'Fundamentals of Swift Programming (iOS)',
                        ],
                        [
                            'curriculumNumber' => '03',
                            'curriculumText' => 'Fundamentals of Kotlin Programming (Android)',
                        ],
                        [
                            'curriculumNumber' => '04',
                            'curriculumText' => 'Building User Interfaces',
                        ],
                        [
                            'curriculumNumber' => '05',
                            'curriculumText' => 'App Deployment and Testing',
                        ],
                    ],

                ],
                [
                    'cardHeader' => 'Graphic Design for Beginners',
                    'cardText' => 'Discover the fundamentals of graphic design, including typography, color theory, layout design, and image manipulation techniques. Create visually stunning designs for print and digital media.',
                    'cardPicture' => ['card4-picture1.png', 'card4-picture2.png', 'card4-picture3.png',],
                    'cardDescription' => [
                        'personExperience' => ['10 Weeks', 'Beginner',],
                        'name' => 'By Sarah Thompson',
                    ],
                    'curriculumItems' => [
                        [
                            'curriculumNumber' => '01',
                            'curriculumText' => 'Introduction to Graphic Design',
                        ],
                        [
                            'curriculumNumber' => '02',
                            'curriculumText' => 'Typography and Color Theory',
                        ],
                        [
                            'curriculumNumber' => '03',
                            'curriculumText' => 'Layout Design and Composition',
                        ],
                        [
                            'curriculumNumber' => '04',
                            'curriculumText' => 'Image Editing and Manipulation',
                        ],
                        [
                            'curriculumNumber' => '05',
                            'curriculumText' => 'Designing for Print and Digital Media',
                        ],
                    ],

                ],
                [
                    'cardHeader' => 'Front-End Web Development',
                    'cardText' => 'Become proficient in front-end web development. Learn HTML, CSS, JavaScript, and popular frameworks like Bootstrap and React. Build interactive and responsive websites.',
                    'cardPicture' => ['card5-picture1.png', 'card5-picture2.png', 'card5-picture3.png',],
                    'cardDescription' => [
                        'personExperience' => ['10 Weeks', 'Intermediate',],
                        'name' => 'By Michael Adams',
                    ],
                    'curriculumItems' => [
                        [
                            'curriculumNumber' => '01',
                            'curriculumText' => 'HTML Fundamentals',
                        ],
                        [
                            'curriculumNumber' => '02',
                            'curriculumText' => 'CSS Styling and Layouts',
                        ],
                        [
                            'curriculumNumber' => '03',
                            'curriculumText' => 'JavaScript Basics',
                        ],
                        [
                            'curriculumNumber' => '04',
                            'curriculumText' => 'Building Responsive Websites',
                        ],
                        [
                            'curriculumNumber' => '05',
                            'curriculumText' => 'Introduction to Bootstrap and React',
                        ],
                    ],

                ],
            ];

            foreach ($courseCards as $courseCard) {

                echo '                        <div class="card-item">
                <div class="card-header">
                    <div class="header-description">
                        <h5 class="h5 fw-semibold">' . $courseCard['cardHeader'] . '</h5>
                        <p class="small-size-p color-grey-two">' . $courseCard['cardText'] . '</p>
                    </div>
                    <div class="section-btn">
                        <button type="button" class="transparent-btn">View Course</button>
                    </div>
                </div>
                <div class="card-picture">';
                foreach ($courseCard['cardPicture'] as $cardPicture) {
                    echo '<img src="course-page-card-picture/' . $cardPicture . '">';
                };
                echo '
                </div>
                <div class="person-description">
                    <div class="person-experience">';
                foreach ($courseCard['cardDescription']['personExperience'] as $personExperience) {
                    echo '<p class="transparent-btn color-grey-two">' . $personExperience . '</p>';
                }
                echo '
                    </div>
                    <div class="person">
                        <h5 class="h5 m-0 fw-medium">' . $courseCard['cardDescription']['name'] . '</h5>
                    </div>
                </div>
                <div class="curriculum">
                    <div class="curriculum-header">
                        <h5 class="h5 m-0">Curriculum</h5>
                    </div>
                    <div class="curriculum-items">';
                foreach ($courseCard['curriculumItems'] as $curriculumItem) {
                    echo '
                        <div class="curriculum-item">
                            <h3 class="h1 fw-bold">' . $curriculumItem['curriculumNumber'] . '</h3>
                            <p class="small-size-p fw-medium">' . $curriculumItem['curriculumText'] . '</p>
                        </div>
                    ';
                }
                echo '  
                   </div>
                </div>
            </div>

';
            }


            ?>
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