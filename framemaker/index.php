<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "lang.php";
?>
<?php
$photo_url = isset($_GET['photo_url']) ? $_GET['photo_url'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <meta name="description" content="<?= $lang['eventtitle'] ?>">
    <meta name="keywords" content="<?= $lang['keywords'] ?>">

    <meta id="MetaRobots" name="ROBOTS" content="INDEX, FOLLOW" />

    <link rel="canonical" href="<?= $lang['url'] ?>" />

    <!-- Open Graph Data -->
    <meta property="og:title" content="ফ্রেম মেকার | <?= $lang['eventtitle'] ?>" />
    <meta property="og:url" content="<?= $lang['url'] ?>frame_builder.php" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?= $lang['url'] ?><?= $lang['frame_banner'] ?>" />
    <meta property="og:site_name" content="<?= $lang['orgname'] ?>" />
    <meta property="og:description" content="<?= $lang['orgname'] ?>" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="<?= $lang['url'] ?>framemaker/index.php" />
    <meta name="twitter:creator" content="<?= $lang['orgname'] ?>" />
    <meta name="twitter:title" content="ফ্রেম মেকার | <?= $lang['eventtitle'] ?>" />
    <meta name="twitter:description" content="<?= $lang['orgname'] ?>" />
    <meta name="twitter:image" content="<?= $lang['url'] ?><?= $lang['frame_banner'] ?>" />

    <!-- Verification metatags -->
    <meta name="google-site-verification" content="<?= $lang['google-site-verification'] ?>" />
    <meta name="msvalidate.01" content="" />

    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/fav/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/fav/site.webmanifest">
    <link rel="mask-icon" href="assets/icons/fav/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/icons/fav/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="assets/icons/fav/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>ফ্রেম মেকার | <?= $lang['eventtitle'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <!-- <link href="vendor/cropper/cropper.min.css" rel="stylesheet">
    <script src="vendor/cropper/cropper.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css" integrity="sha512-hvNR0F/e2J7zPPfLC9auFe3/SE0yG4aJCOd/qxew74NN7eyiSKjr7xJJMu1Jy2wf7FXITpWS1E/RY8yzuXN7VA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js" integrity="sha512-9KkIqdfN7ipEW6B6k+Aq20PV31bjODg4AA52W+tYtAE0jE0kMx49bjJ3FgvS56wzmyfMUHbQ4Km2b7l9+Y/+Eg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script> -->
    <!-- <script src="js/qrcode.min.js"></script> -->
    <!-- <script src="js/JsBarcode.code128.min.js"></script> -->

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <style type="text/css">
        html,
        body {
            /* width: 810px; */
            margin-left: auto;
            margin-right: auto;
            background-color: #f5f8fe00;
            font-family: 'Josefin Sans', sans-serif;
            color: #464666;
        }

        #card_div {
            margin-top: 10px;
            /* margin-right: 50px; */
            /* border: 1px solid black; */
            background-color: white !important;
            height: auto;
            /* width: 1002px; */
            position: relative;
        }


        @media print {
            body {
                -webkit-print-color-adjust: exact;
            }

            .no-print,
            .no-print * {
                display: none !important;
            }
        }

        @font-face {
            font-family: MonsieurLaDoulaise-Regular;
            src: url(assets/invitation_card/PinyonScript-Regular.ttf);
        }

        .reunion_font {
            font-family: 'Parisienne', cursive;
            /*font-family: 'Josefin Sans', sans-serif;*/

        }

        /* .main_image{
                position: absolute;
                margin: auto;
                top: 43px;
                left: 37px;
                width: 425px;
                border-radius: 25px;
        } */

        .new_page {
            page-break-inside: avoid;
            page-break-after: always;
        }

        .invitation_card_background {
            background-size: 500px 500px;
            background-position: center;
            background-repeat: no-repeat;
            width: 500px;
            height: 500px;
            margin: auto;
        }

        .invitation_card_background .main_image {
            /* position: absolute;
            margin: auto;
            top: 120px;
            left: 105px;
            width: 280px;
            height: 280px;
            border-radius: 25px; */

            position: absolute;
    top: 13px;
    left: 66px;
    width: 365px;
    height: 365px;
    margin: auto;
        }

        .adjust_image {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .invitation_card_background .frame_image {
            position: absolute;
            top: 0;
            left: 0;
            width: 498px;
            height: 0;
            z-index: 2;
        }

        .invitation_card_background .second_image {
            position: absolute;
            top: 260px;
            top: 265px;
            left: 295px;
            width: 120px;
            border-radius: 0;
            z-index: 3;
            display: none;
        }

        .invitation_card_background .title {
            position: absolute;
            top: 0;
            left: 0;
            width: 475px;
            height: 475px;
        }

        .user_select_none {
            user-select: none;
            -moz-user-select: none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            -o-user-select: none;
        }

        @media (max-width: 400px) {
            .invitation_card_background {
                background-size: 350px 350px;
                background-position: center;
                background-repeat: no-repeat;
                width: 350px;
                height: 350px;
                margin: auto;
            }

            .invitation_card_background .main_image {
                position: absolute;
                top: 10px;
                left: 48px;
                width: 254px;
                height: 254px;
                margin: auto;
            }

            .invitation_card_background .frame_image {
                position: absolute;
                top: 0;
                left: 0;
                width: 348px;
                height: 0;
                z-index: 2;
            }

            .invitation_card_background .second_image {
                position: absolute;
                top: 190px;
                left: 190px;
                width: 90px;
                border-radius: 0;
                z-index: 3;
                display: none;
            }

            .invitation_card_background .title {
                position: absolute;
                top: 0;
                left: 0;
                width: 475px;
                height: 475px;
            }
        }

        @media (min-width:401) and (max-width: 450px) {
            .invitation_card_background {
                background-size: 400px 400px;
                background-position: center;
                background-repeat: no-repeat;
                width: 400px;
                height: 400px;
                margin: auto;
            }

            .invitation_card_background .main_image {
                position: absolute;
                margin: auto;
                top: 135px;
                left: 135px;
                width: 230px;
                height: 230px;
                border-radius: 25px;
            }

            .invitation_card_background .frame_image {
                position: absolute;
                top: 25px;
                left: 25px;
                width: 450px;
                height: 0;
                z-index: 2;
            }

            .invitation_card_background .second_image {
                position: absolute;
                top: 260px;
                top: 265px;
                left: 295px;
                width: 120px;
                border-radius: 0;
                z-index: 3;
            }

            .invitation_card_background .title {
                position: absolute;
                top: 0;
                left: 0;
                width: 475px;
                height: 475px;
            }
        }

        @media (min-width:451) and (max-width: 650px) {
            .invitation_card_background {
                background-size: 450px 450px;
                background-position: center;
                background-repeat: no-repeat;
                width: 450px;
                height: 450px;
                margin: auto;
            }

            .invitation_card_background .main_image {
                position: absolute;
                margin: auto;
                top: 135px;
                left: 135px;
                width: 230px;
                height: 230px;
                border-radius: 25px;
            }

            .invitation_card_background .frame_image {
                position: absolute;
                top: 25px;
                left: 25px;
                width: 450px;
                height: 0;
                z-index: 2;
            }

            .invitation_card_background .second_image {
                position: absolute;
                top: 260px;
                top: 265px;
                left: 295px;
                width: 120px;
                border-radius: 0;
                z-index: 3;
            }

            .invitation_card_background .title {
                position: absolute;
                top: 0;
                left: 0;
                width: 475px;
                height: 475px;
            }
        }

        @media (min-width: 651px) {
            .invitation_card_background {
                background-size: 500px 500px;
                background-position: center;
                background-repeat: no-repeat;
                width: 500px;
                height: 500px;
                margin: auto;
            }

            .invitation_card_background .main_image {
                /* position: absolute;
                margin: auto;
                top: 115px;
                left: 100px;
                width: 290px;
                height: 290px;
                border-radius: 25px; */

                position: absolute;
    top: 13px;
    left: 66px;
    width: 365px;
    height: 365px;
    margin: auto;
            }

            .invitation_card_background .frame_image {
                position: absolute;
                top: 0;
                left: 0;
                width: 498px;
                height: 0;
                z-index: 2;
            }

            .invitation_card_background .second_image {
                position: absolute;
                top: 260px;
                top: 265px;
                left: 295px;
                width: 120px;
                border-radius: 0;
                z-index: 3;
            }

            .invitation_card_background .title {
                position: absolute;
                top: 0;
                left: 0;
                width: 475px;
                height: 475px;
            }
        }
    </style>

    <style>
        .print-card-btn {
            border-radius: 25px;
            padding: 5px 10px;
            background-color: #26662F;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        .print-card-btn:hover {
            color: #F9D045;
        }

        .download-card-btn {
            background-color: #F9D045;
            border-radius: 25px;
            padding: 5px 10px;
            color: #26662F;
            font-weight: bold;
            font-size: 20px;
        }

        .print-card-btn:hover {
            color: white;
        }

        .notice_text {
            /* border-style: dashed; */
            color: red;
            margin-top: 10px;
            /* margin-left: 10px; */
            /* padding: 10px 0px; */

            border: 2px dotted red;
            border: 10px solid transparent;
            padding: 10px 0px;
            border-image: url(./assets/image/border.png) 30 stretch;
            -moz-border-image: url(./assets/image/border.png) 30 stretch;
            -webkit-border-image: url(./assets/image/border.png) 30 stretch;
        }

        .notice_container {
            /* width: 1002px; */
        }
    </style>

</head>

<body class="overflow-auto">

    <div class="notice_container mx-auto d-print-none notice_text custom-border" style="margin-top:10px;">
        <div class="text-center">
            <div class='' style="font-size: 22px;">
                আপনার একটি পরিচ্ছন্ন ছবি দিন
            </div>
            <div class=" d-print-none" style=" cursor: pointer;">
                <button class="btn upload-photo-btn print-card-btn mx-2 px-5">
                    <i class="fa fa-upload mr-1"></i> Upload
                </button>
                <input type="file" name="profile_pic_input" id="profile_pic_input" style="visibility: hidden; display:none;">
            </div>
        </div>
    </div>

    <div class="text-center mt-3 mb-2">
        ফ্রেম বাছাই করুন
    </div>
    <div class="d-flex justify-content-center">
        <style>
            img.frame.frame-active {
                border: 5px solid goldenrod;
            }

            img.frame {
                border: 1px solid grey;
                cursor: pointer;
            }
        </style>
        <div>
            <img class="frame frame-active img-thumbnail mx-1 p-2 border-2" src="assets/frames/frame-1.png" width="160" alt="">
        </div>

        <!-- <div>
            <img class="frame img-thumbnail mx-1 p-2 border-2" src="assets/image/frame-2.png" width="160" alt="">
        </div> -->

        <!-- <div>
            <img class="frame img-thumbnail mx-1 p-2 border-2" src="assets/image/frame-3.png" width="160" alt="">
        </div> -->
    </div>

    <div id="card_div" class="d-flex1 justify-content-center mx-auto mt-3">
        <div class="new_page invitation_card_root invitation_card_background position-relative" style="border: 1px solid black;">


            <div style="position:absolute; " class="group-1">
                <!-- IMAGE -->
                <div style="" class="main_image">
                    <img src="<?= strlen($photo_url) ? $photo_url : "assets/image/click.jpeg" ?>" class="adjust_image invitee_photo_url" style="border-radius: 50%; cursor:pointer;">
                </div>

                <!-- IMAGE FRAME -->
                <div style="" class="frame_image">
                    <img src="assets/frames/frame-1.png" class="photo_frame" style="width:100%;">
                </div>

                <!-- IMAGE 2 -->
                <!-- <div style="display: none" class="second_image">
                    <img src='assets/image/logo.png' class="photo_url" style="width:100%; ">
                </div> -->

                <!-- NAME TITLE -->
                <!-- <div style="display: none;">
                    <div class="name_en_title text-dark" style="">

                    </div>
                </div> -->
            </div>


        </div>
    </div>

    <div class="notice_container mx-auto d-print-none notice_text" style="margin-top:10px;">
        <div class="d-flex justify-content-center">


            <div class=" d-print-none" style=" cursor: pointer;">
                <button class="btn mx-2 px-5 download-card-btn h5">
                    <i class="fa fa-download"></i> Download
                </button>
            </div>

        </div>


    </div>

    <?php
    require "photo_change_form_registration.php";
    ?>

    <script type="text/javascript">
        var avatar = $('.main_image img')[0];
        var image = $('#edit_image')[0];
        var input = $('#profile_pic_input')[0];
        var $modal = $('#profile_pic_modal');
        var cropper;

        const ratioWidth = 1,
            ratioHeight = 1,
            imageWidth = 500,
            imageHeight = 500;

        $(document).ready(function() {

            $(document).on('change', '#profile_pic_input', function(e) {
                // if (this.files && this.files[0]) {
                //     var img = $('.main_image img')[0];
                //     console.log(`img =>`, img);

                //     img.onload = function() {
                //         //URL.revokeObjectURL(img.src); // no longer needed, free memory
                //     }

                //     img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                // }

                if (e.target.files && e.target.files.length) {
                    var files = e.target.files;
                    var done = function(url) {
                        //input.value = '';
                        image.src = url;
                        console.log(`$modal =>`, $modal);

                        $modal.data("profilepic", null);
                        $modal.modal('show');
                    };
                    var reader;
                    var file;
                    var url;
                    if (files && files.length > 0) {
                        file = files[0];
                        if (URL) {
                            done(URL.createObjectURL(file));
                        } else if (FileReader) {
                            reader = new FileReader();
                            reader.onload = function(e) {
                                done(reader.result);
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                }


            });

            $modal.on('shown.bs.modal', function() {
                cropper = new Cropper(image, {
                    dragMode: 'move',
                    aspectRatio: ratioWidth / ratioHeight,
                    autoCropArea: 0.85,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: true,
                    cropBoxResizable: true,
                    toggleDragModeOnDblclick: false,
                    viewMode: 3,
                });
            }).on('hidden.bs.modal', function() {
                cropper.destroy();
                cropper = null;
            });

            $(document).on('click', '#crop', function() {
                var initialAvatarURL;
                var canvas;

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: imageWidth,
                        height: imageHeight,
                    });
                    initialAvatarURL = avatar.src;

                    canvas.toBlob(function(blob) {

                        // if (callback != null || callback != undefined) {
                        //     callback();
                        // }
                        $modal.modal('hide');

                        avatar.src = canvas.toDataURL();
                    }, 'image/jpeg', 0.9);
                }
            });

            $(document).on("click", ".download-card-btn ", function(e) {
                //$(this).hide();
                let current = $(".invitation_card_background")[0];

                html2canvas(current, {
                    logging: true,
                    letterRendering: 1,
                    allowTaint: false,
                    useCORS: true,
                }).then(canvas => {
                    console.log("canvas.toDataURL()", canvas, canvas.toDataURL());
                    var a = document.createElement("a");
                    a.href = canvas.toDataURL();
                    a.download = "profile_frame.jpg";
                    a.click();
                    $(this).show();
                    $(".invitation_card_background").not(current).removeClass("d-none");

                });
            });

            $(document).on('click', '.upload-photo-btn', function() {
                console.log(`Hi =>`);

                $('#profile_pic_input').trigger('click');
            });

            $(document).on('click', '.group-1', function() {
                console.log(`Hi =>`);

                $('#profile_pic_input').trigger('click');

            });
        });
    </script>

    <script>
        $(document).on('click', 'img.frame', function() {
            $('img.frame').removeClass('frame-active');
            $(this).addClass('frame-active');

            let src = $(this).prop('src');

            $('.photo_frame').prop('src', src);
        });
    </script>
</body>

</html>