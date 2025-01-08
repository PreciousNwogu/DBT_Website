<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formStyle.css">    
</head>
<body>
    <section class="container-wide" style=" text-align: center; color: orange;">
            <div class="single-prod-wrap">
                <h2>Important Information</h2>
                <div class="subtitle-2">
                    We accept cash and debit cards only.<br>
                    Deposits are NON REFUNDABLE under 5 days cancellation notice for bookings made more than 1 week,<br> 
                    and 2 days for bookings made within a week, unless we cancel.<br> 
                    A deposit is required to secure your booking.
                </div>
            </div>
        </section>
            <br>
         <section class="container-wide" style=" text-align: center; color: white;">
            <div class="single-prod-wrap">
                <div class="extension">
                    Save yourself the hassle of buying an extension; we have a variety available for purchase.<br><br>
                    <div class="subtitle">Clients can bring their own extensions. Accepted types are shown below:
            </div>
                </div>
            </div>
        </section>
         <div class="images">
            <img src="...images/extension.jpg" alt="extension type 1" style="width: 50%; height: 25%;" >
            <img src="images/extention-2.jpg" alt="extension type 2" style="width: 50%; height: 25%;">
        </div>
    <header>
       <div class="section section section-lg">
        <div class="container wide">
          <div class="row row-md-30">
            <div class="col-md-5 col-lg-5">
              <!-- <div class="subtitle">Spa-quality service</div> -->
              <div class="subtitle-2" style="color:royalblue;">LOWER BACK STYLES: BUY ONE PACK OF 48" , TWO PACKS OF 52” AND ONE PACK OF 58 <br><br>

WAIST/BUTT LENGTH STYLES: BUY ONE PACK OF 52” AND THREE PACKS OF 58”<br><br>

KNEE LENGTH: BUY FIVE PACKS OF 58” or FOUR PACKS OF 72” ABOVE<br><br>

KINKY TWISTS: BUY 3-5 PACKS FOR MID LENGTH AND 5-7 FOR LOWER BACK/WAIST<br><br>

TEENAGE BRAIDS: BUY 4 PACKS OF 48”</div>
              <div class="btn-wrap"><a class="button button-primary button-md" href="form.php" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a></div>
            </div>
    </header>
    <main>
        <div class="form">
        <form id="SimpleForm" method="post" action="submitForm.php">

            <label for="name">First Name:</label>
            <input Type="text" id="firstName" name="firstName"  value="" required>

            <label>Last Name:</label>
            <input Type="text" id="lastName" name="lastName"required>

            <label for="phoneNumber">Phone Number:</label>
            <input Type="text" id="phoneNumber" name="phoneNumber">

            <label for="emailAddress">Email Address:</label>
            <input Type="emailAddress" id="email" name="emailAddress">

            <label for="homeAddress">Home Address:</label>
            <input Type="text" id="homeAddress" name="homeAddress">
       <div class="button-container">
             <input type="submit" value="Submit">
        </form> 
            <a href="view_record.php"><input type="button" value="View Record"></a>
        </div>

    </div>
    </main>

</body>
</html>