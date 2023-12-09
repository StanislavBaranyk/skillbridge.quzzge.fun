<section class="questions">
    <div class="container">
        <div class="section-items">
            <div class="section-header">
                <h3 class="h3 fw-semibold">Frequently Asked Questions</h3>
                <p class="text-dark small-size-p">Still you have any questions? Contact our Team via
                    support@skillbridge.com</p>
                <div class="section-btn">
                    <button type="button" class="transparent-btn">See All FAQ’s</button>
                </div>
            </div>
            <div class="accordion" id="accordionExample">

                <?php
                $askedQuestions = [

                    [
                        'questions' => 'Can I enroll in multiple courses at once?',
                        'response' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                        'process' => 'Enrollment Process for Different Courses',
                        'number' => '1',
                        'classShow' => 'show',
                    ],
                    [
                        'questions' => 'What kind of support can I expect from instructors?',
                        'response' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                        'process' => 'Enrollment Process for Different Courses',
                        'number' => '2',
                        'classCollapsed' => 'collapsed',
                    ],
                    [
                        'questions' => 'Are the courses self-paced or do they have specific start and end dates?',
                        'response' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                        'process' => 'Enrollment Process for Different Courses',
                        'number' => '3',
                        'classCollapsed' => 'collapsed',

                    ],
                    [
                        'questions' => 'Are there any prerequisites for the courses?',
                        'response' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                        'process' => 'Enrollment Process for Different Courses',
                        'number' => '4',
                        'classCollapsed' => 'collapsed',

                    ],
                    [
                        'questions' => 'Can I download the course materials for offline access?',
                        'response' => 'Absolutely! You can enroll in multiple courses simultaneously and access them at your convenience.',
                        'process' => 'Enrollment Process for Different Courses',
                        'number' => '5',
                        'classCollapsed' => 'collapsed',
                    ],
                ];

                foreach ($askedQuestions as $askedQuestion) {
                    echo '                <div class="accordion-item ' . $askedQuestion['deleteMobile'] . '">
                    <h2 class="accordion-header" id="heading' . $askedQuestion['number'] . '">
                        <button class="accordion-button ' . $askedQuestion['classCollapsed'] . '" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse' . $askedQuestion['number'] . '" aria-expanded="true" aria-controls="collapse' . $askedQuestion['number'] . '">
                            <div class="frequently-asked-questions">
                                <h5 class="h5 fw-medium">' . $askedQuestion['questions'] . '</h5>
                            </div>
                            <span class="accordion-btn-icons"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                   height="20" viewBox="0 0 20 20" fill="none">
  <path d="M5.63156 14.3689L10.0004 10M14.3693 5.63113L10.0004 10M10.0004 10L5.63156 5.63113M10.0004 10L14.3693 14.3689"
        stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span>
                        </button>
                    </h2>
                    <div id="collapse' . $askedQuestion['number'] . '" class="accordion-collapse collapse ' . $askedQuestion['classShow'] . '" aria-labelledby="heading' . $askedQuestion['number'] . '"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="small-size-p color-grey-two">' . $askedQuestion['response'] . '</p>
                            <div class="section-btn">
                                <p class="small-size-p text-dark fw-semibold">' . $askedQuestion['process'] . '</p>
                                <button type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none">
                                        <path d="M5.00032 10H15.417M15.417 10L10.417 5M15.417 10L10.417 15"
                                              stroke="#4C4C4C" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
';
                }

                ?>

            </div>
        </div>
    </div>
</section>
<?php
