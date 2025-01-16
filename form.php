<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formStyle.css">    
</head>
<body>
    <main>
        
        <div class="form">
        <form id="SimpleForm" method="post" action="submitForm.php">
            <h1> Dab's Beauty Touch Booking Form</h1> 
            <label for="name">First Name:</label>
            <input Type="text" id="firstName" name="firstName"  value="" required>

            <label>Last Name:</label>
            <input Type="text" id="lastName" name="lastName" value="Please enter your last name">

            <label for="phoneNumber">Phone Number:</label>
            <input Type="text" id="phoneNumber" name="phoneNumber">

            <label for="emailAddress">Email Address:</label>
            <input Type="emailAddress" id="email" name="emailAddress">

            <label for="homeAddress">Home Address:</label>
            <input Type="text" id="homeAddress" >
            <label for "hairStyle"> Choose a Service</label>
            <select id="mainOptions" onchange="showSubDropdown()" name="mainOptions">
                <option value="">Please Choose a Style...</option>
                <option value="Boho Braid">Boho Braids</option>
                <option value="Knotless Braid">Knotless Braids</option>
                <option value="Stitch Braid">Stitch Braids</option>
                <option value="Feed-in Braid">Feed-in Braids</option>
                <option value="French Braid">French Braids</option>
                <option value="Twist Braid">Twist Braids</option>
            </select>
            <div class="subOptions1" id="subOptions1" >
            <label for "subOptions1"> Options</label>
                <select id ="subOptions1" name="subOptions1">
                <option value="Please Choose a Lenght..." disabled></option>
                <option value="Lower Back">Lower Back</option>
                <option value="Waist/Butt Length">Waist/Butt Length</option>
                <option value="Knee Length">Knee Length</option>
                <option value="Kinky Twists">Kinky Twists</option>
            </select>
        </div>
            <div class="subOptions2" id="subOptions2" >
            <label for "subOptions2"> Options</label>
                <select id ="selectOptions2" name="selectOptions2">
                <option value="Lower Back">Large</option>
                <option value="Waist/Butt Length">Medium</option>
                <option value="Knee Length">Smedium</option>
                <option value="Kinky Twists">Kinky Twists</option>
            </select>
        </div>
            <div class="button-container">
                <input type="submit" value="Submit">
            </div>
            <div class="single-prod-wrap">
                <h2>Important Information</h2>
                <div class="subtitle-2">
                <input type="checkbox" required>
                    We accept cash and debit cards only.<br>
                    Deposits are NON REFUNDABLE under 5 days cancellation notice for bookings made more than 1 week,<br> 
                    and 2 days for bookings made within a week.<br> 
                    A deposit is required to secure your booking.
                </div>
            </div>
        </form>
    </div>
</main>
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
            <img src="images/extention.jpg" alt="extension type 2" style="width: 50%; height: 25%;">
            <img src="images/extention-2.jpg" alt="extension type 2" style="width: 50%; height: 25%;">
        </div>
    <header>
       <div class="section section section-lg">
        <div class="container wide">
          <div class="row row-md-30">
            <div class="col-md-5 col-lg-5">
              <div class="subtitle-2" style="color:royalblue;">LOWER BACK STYLES: BUY ONE PACK OF 48" , TWO PACKS OF 52” AND ONE PACK OF 58 <br><br>

WAIST/BUTT LENGTH STYLES: BUY ONE PACK OF 52” AND THREE PACKS OF 58”<br><br>

KNEE LENGTH: BUY FIVE PACKS OF 58” or FOUR PACKS OF 72” ABOVE<br><br>

KINKY TWISTS: BUY 3-5 PACKS FOR MID LENGTH AND 5-7 FOR LOWER BACK/WAIST<br><br>

TEENAGE BRAIDS: BUY 4 PACKS OF 48”</div>
              <div class="btn-wrap"><a class="button button-primary button-md" href="form.php" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a></div>
            </div>
    </header>

    <script>
        function showSubDropdown(){
            var mainOptions = document.getElementById("mainOptions");
            var subOptions1 = document.getElementById("subOptions1");
            var subOptions2 = document.getElementById("subOptions2");
            if(mainOptions.value == "Boho Braid" || mainOptions.value == "Knotless Braid" || mainOptions.value == "Stitch Braid" || mainOptions.value == "Feed-in Braid" || mainOptions.value == "French Braid" || mainOptions.value == "Twist Braid"){
                subOptions1.style.display = "block";
                subOptions2.style.display = "none";
            }else if(mainOptions.value == "French Braid" || mainOptions.value == "Twist Braid"){
                subOptions2.style.display = "block";
                subOptions1.style.display = "none";
            }else{
                subOptions1.style.display = "none";
                subOptions2.style.display = "none";
            }
        }
    </script>
</body>
</html>
