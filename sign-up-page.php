<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!--[if (lt IE 9)]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script>
    <![endif]-->

    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Title</title>
</head>
<body>
<?php
include 'layots/header.php';
include 'secitons/signUp-or-login.php';
include 'layots/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

<script>
    const slider = tns({
        container: '.students-testimonials-slider',
        items: 1,
        nav: false,
        controlsText: ['<svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">\n' +
        '  <path fill-rule="evenodd" clip-rule="evenodd" d="M23 15C23 15.6213 22.4963 16.125 21.875 16.125H11.9181L15.1547 19.0641C15.6026 19.4947 15.6166 20.2069 15.1859 20.6547C14.7553 21.1026 14.0431 21.1166 13.5953 20.6859L8.34525 15.8109C8.12466 15.5988 8 15.306 8 15C8 14.694 8.12466 14.4012 8.34525 14.1891L13.5953 9.31406C14.0431 8.88342 14.7553 8.89739 15.1859 9.34525C15.6166 9.79312 15.6026 10.5053 15.1547 10.9359L11.9181 13.875L21.875 13.875C22.4963 13.875 23 14.3787 23 15Z" fill="#262626"/>\n' +
        '</svg>','<svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">\n' +
        '  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 15C8 14.3787 8.50368 13.875 9.125 13.875H19.0819L15.8453 10.9359C15.3974 10.5053 15.3834 9.79312 15.8141 9.34525C16.2447 8.89739 16.9569 8.88342 17.4047 9.31406L22.6547 14.1891C22.8753 14.4012 23 14.694 23 15C23 15.306 22.8753 15.5988 22.6547 15.8109L17.4047 20.6859C16.9569 21.1166 16.2447 21.1026 15.8141 20.6547C15.3834 20.2069 15.3974 19.4947 15.8453 19.0641L19.0819 16.125H9.125C8.50368 16.125 8 15.6213 8 15Z" fill="#262626"/>\n' +
        '</svg>']

    });
</script>

</body>
</html>
