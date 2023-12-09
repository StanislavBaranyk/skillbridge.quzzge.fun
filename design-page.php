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

<section class="design-course">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <div class="header-description">
                    <h3 class="h3 fw-semibold section-item">UI/UX Design Course</h3>
                    <p class="small-size-p color-grey-one section-item">Welcome to our UI/UX Design course! This comprehensive
                        program will equip you with the knowledge and skills to create exceptional user interfaces (UI)
                        and enhance user experiences (UX). Dive into the world of design thinking, wireframing,
                        prototyping, and usability testing. Below is an overview of the curriculum</p>
                </div>
            </div>
            <div class="section-picture">
                <img class="first-picture picture-item" src="design-page-images/mobaile-picture.png">
                <img class="last-picture picture-item" src="design-page-images/designer-picture.png">
            </div>
            <div class="card-items">
                <?php
                $designCourseItems = [
                    [
                        'number' => '01',
                        'cardHeader' => 'Introduction to UI/UX Design',
                        'curriculum' => [
                            [
                                'curriculumHeader' => 'Understanding UI/UX Design Principles',
                                'lesson' => 'Lesson 01',
                                'time' => '45 Minutes',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Importance of User-Centered Design',
                                'lesson' => 'Lesson 02',
                                'time' => '1 Hour',
                                'class' => 'border-orange',
                            ],
                            [
                                'curriculumHeader' => 'The Role of UI/UX Design in Product Development',
                                'lesson' => 'Lesson 03',
                                'time' => '45 Minutes',
                                'class' => 'border-gray',
                            ],
                        ],
                    ],
                    [
                        'number' => '02',
                        'cardHeader' => 'User Research and Analysis',
                        'curriculum' => [
                            [
                                'curriculumHeader' => 'Conducting User Research and Interviews',
                                'lesson' => 'Lesson 01',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Analyzing User Needs and Behavior',
                                'lesson' => 'Lesson 02',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Creating User Personas and Scenarios',
                                'lesson' => 'Lesson 03',
                                'time' => '45 Minutes',
                                'class' => 'border-gray',
                            ],
                        ],
                    ],
                    [
                        'number' => '03',
                        'cardHeader' => 'Wireframing and Prototyping',
                        'curriculum' => [
                            [
                                'curriculumHeader' => 'Introduction to Wireframing Tools and Techniques',
                                'lesson' => 'Lesson 01',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Wireframing and Prototyping',
                                'lesson' => 'Lesson 02',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                                ],
                            [
                                'curriculumHeader' => 'Understandings UI/UX Design Principles',
                                'lesson' => 'Lesson 03',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                        ],
                    ],
                    [
                        'number' => '04',
                        'cardHeader' => 'Visual Design and Branding',
                        'curriculum' => [
                            [
                                'curriculumHeader' => 'Color Theory and Typography in UI Design',
                                'lesson' => 'Lesson 01',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Visual Hierarchy and Layout Design',
                                'lesson' => 'Lesson 02',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Creating a Strong Brand Identity',
                                'lesson' => 'Lesson 03',
                                'time' => '45 Minutes',
                                'class' => 'border-gray',
                            ],
                        ],
                    ],
                    [
                        'number' => '05',
                        'cardHeader' => 'Usability Testing and Iteration',
                        'curriculum' => [
                            [
                                'curriculumHeader' => 'Usability Testing Methods and Techniques',
                                'lesson' => 'Lesson 01',
                                'time' => '1 Hour',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Analyzing Usability Test Results',
                                'lesson' => 'Lesson 02',
                                'time' => '45 Minutes',
                                'class' => 'border-gray',
                            ],
                            [
                                'curriculumHeader' => 'Iterating and Improving UX Designs',
                                'lesson' => 'Lesson 03',
                                'time' => '45 Minutes',
                                'class' => 'border-gray',
                            ],
                        ],

                    ],
                ];

                foreach ($designCourseItems as $designCourseItem) {

                    echo '  <div class="card-item">
                    <h3 class="h1 fw-bold">'.$designCourseItem['number'].'</h3>
                    <h5 class="text-start h5">'.$designCourseItem['cardHeader'].'</h5>
                    <div class="curriculum">'; foreach ($designCourseItem['curriculum'] as $curriculum) {
                        echo '<div class="curriculum-item '.$curriculum['class'].'">
                            <div class="curriculum-header">
                                <h5 class="h5 fw-medium">'.$curriculum['curriculumHeader'].'</h5>
                                <p class="small-size-p color-grey-two">'.$curriculum['lesson'].'</p>
                            </div>
                            <div class="curriculum-time">
                                <span class="small-size-p">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none">
                                        <path d="M10 5V10H13.75M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z"
                                              stroke="#4C4C4D" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    '.$curriculum['time'].'
                                </span>
                            </div>
                        </div>';
                    }  echo '
                    </div>
                </div>';
                }

                ?>


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