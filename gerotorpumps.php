<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gerotorpumps | asa-group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/lib/animate/animate.min.css" rel="stylesheet">
<link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!-- wow css -->
<link href="ajax/libs/wow/1.1.2/wow.js" rel="stylesheet">

<!-- animate css -->
<link href="ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">-->


<!-- Main Stylesheet File -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet"></head>

<body>

<div class="click-closed"></div>


<!--/ Nav Star /-->
<?php include './component/header.php';?>
<!--/ Nav End /-->
<!--/ Intro Single star /-->
<section class="intro-single padding_bottom_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box padding_bottom_section">
                    <h1 class="title-single">Gerotor pumps</h1>
                    <h5>up to 80cm<sup>3</sup></h5>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Gerotor pumps
                        </li>

                    </ol>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 pt-3">
                <h5>Design</h5>
                <p>The GERO generation 2 gerotor pumps are contant displacement pumps with compact measurements, high cleanness and reliability.
                    The asa gerotor pump generation 2 is a completely new design with trendsetting modules to provide the highest flexibility to
                    the actual application, whhile maintaining the advantages of a standard product at the same time.
                </p>
                <h5>Applications</h5>
                <p>The aluminium body of the housing, the steel shaft and the standard NBR sealings are the perfect match for any mineral oil application. The pump can be used for lubrication circuits as well as for oil supply, cooling and filtration systems.
                </p>
            </div>
            <div class="col-lg-3 col-md-5 margin_auto">
                <div class="feature-imagebox border download-action">
                    <div class="block">
                        <h5>Gerotor Pumps</h5>
                        <img src="assets/img/filter/Pumpe-1.jpg" style="padding-bottom: 10px;">

                        <div class="download_catelog">
                            <a href="contact.php" target="_blank">Send a request</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <img src="assets/img/filter/Pumps-Katalog.jpg" alt="">
            </div>
            </div>
        </div>
</section>
<!--/ Intro Single End /-->
<?php include './component/footer.php';?>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<div id="preloader"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Send a request</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>

    <div class="box-collapse-wrap form">
        <form class="form-a" action="" id="myform" method="post">

            <div id="errormessage"></div>

            <div id="sendmessage"></div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="c_name" id="c_name" class="form-control c_name form-control-lg form-control-a" placeholder="Company Name:" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="postal_code" class="form-control postal_code form-control-lg form-control-a" placeholder="Postal Code:" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="f_name" class="form-control f_name form-control-lg form-control-a" placeholder="First Name:" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 mb-3">
                    <input name="s_name" type="text" class="form-control s_name form-control-lg form-control-a" placeholder="Surname:" data-rule="email">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="email" name="email" class="form-control email form-control-lg form-control-a" placeholder="Email:" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="phone" class="form-control phone form-control-lg form-control-a" placeholder="Phone:" onkeypress="return isNumberKey(event)" required="required" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">
                </div>

                <div class="col-md-6 mb-3">
                    <input type="text" name="subject" class="form-control subject form-control-lg form-control-a" placeholder="Subject:" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                </div>
                <div class="col-md-6 mb-3">
                    <input name="city" type="text" class="form-control city form-control-lg form-control-a" placeholder="City:" data-rule="email">
                </div>


                <div class="col-md-12 mb-3">
                    <input name="address" type="text" class="form-control address form-control-lg form-control-a" placeholder="Address:" data-rule="email">
                </div>
                <div class="col-md-12 mb-3">
                                    <textarea class="form-control message_form" name="message_form" cols="45" rows="2" data-rule="required" placeholder="Comment"></textarea>
                </div>
                <div class="col-md-12 send_button_margin">
                    <button type="button" onclick="sendRequest()" name="request" class="btn btn-b-n navbar-toggle-box-collapse d-md-block">Send
                        Request
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
<!--/ Form Search End /-->

<script src="ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    function isNumberKey(evt) {
        var k = evt.keyCode;
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode != 46 && (charCode < 48 || charCode > 57)))
            return false;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
    }
</script>
<script>
    function sendRequest() {
        var c_name = $("#c_name").val();

        var postal_code = $(".postal_code").val();
        if (postal_code == "") {
            c_name = "Not available";
        }
        var city = $(".city").val();
        if (city == "") {
            city = "Not available";
        }
        var address = $(".address").val();

        var message_form = $(".message_form").val();
        if (message_form == "") {
            message_form = "Not available";
        }
        var subject = $(".subject").val();
        if (subject == "") {
            subject = "Not available";
        }
        var phone = $(".phone").val();
        var f_name = $(".f_name").val();
        var s_name = $(".s_name").val();
        var email = $(".email").val();
        if (c_name == "") {
            $("#errormessage").css("display", "block");
            $("#errormessage").text('Please Enter Company Name');
        }
        else if (address == "") {
            $("#errormessage").css("display", "block");
            $("#errormessage").text('Please Enter Address');
        }
        else if (phone == "") {
            $("#errormessage").css("display", "block");
            $("#errormessage").text('Please Enter Phone Number');
        } else if (f_name == "") {
            $("#errormessage").css("display", "block");
            $("#errormessage").text("Please Enter First Name");
        } else if (s_name == "") {
            $("#errormessage").css("display", "block");
            $("#errormessage").text("Please Enter surname");
        } else if (email == "") {
            $("#errormessage").css("display", "block");
            $("#errormessage").text("Please Enter Email");
        } else {
            var dataString = "message_form=" + message_form + "&c_name=" + c_name + "&postal_code=" + postal_code + "&f_name=" + f_name + "&s_name=" + s_name + "&email=" + email + "&phone=" + phone + "&subject=" + subject + "&city=" + city + "&address=" + address;
            $.ajax({
                type: "POST",
                url: "mail-send-ajax.php", // Name of the php files
                data: dataString,
                cache: false,
                success: function (html) {
                    $("#errormessage").css("display", "none");
                    $("#sendmessage").css("display", "block");
                    $("#sendmessage").text("Mail has been sent success fully");
                    $("#myform")[0].reset();

                },
                error: function (err) {
                    console.log("AJAX error in request: " + JSON.stringify(err, null, 2));
                }
            });
        }


    }
</script>
<!-- JavaScript Libraries -->
<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/jquery/jquery-migrate.min.js"></script>
<script src="assets/lib/popper/popper.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="assets/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="assets/js/main.js"></script>

</body>
</html>
