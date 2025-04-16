<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formStyle.css">
    <link rel="stylesheet" href="bootstrap.min.css">    
</head>
<body>
    <main>
        
        <div class="form">
    <form id="SimpleForm" method="post" action="submitForm.php" enctype="multipart/form-data">
        <h1>Dab's Beauty Touch Booking Form</h1>
        
        <label for="name">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="">

        <label>Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber">
        <label for="emailAddress">Email Address:</label>
        <input type="text" id="emailAddress" name="emailAddress">

        
        <label for="homeAddress">Home Address:</label>
        <input type="text" id="homeAddress" name="homeAddress">

        <label for="hairStyle">Choose a Service:</label>
        <select id="mainOptions" name="mainOptions">
            <option value="">Please Choose a Style...</option>
            <option value="Boho Braid">Boho Braids</option>
            <option value="Knotless Braid">Knotless Braids</option>
            <option value="Stitch Braid">Stitch Braids</option>
            <option value="Feed-in Braid">Feed-in Braids</option>
            <option value="French Braid">French Braids</option>
            <option value="Twist Braid">Twist Braids</option>
        </select>

        <div class="subOptions1" id="subOptions1">
            <label for="subOptions1">Choose Length:</label>
            <select id="subOptions1" name="subOptions1">
                <option value="">Please Choose a Length...</option>
                <option value="Neck Length">Neck Length</option>
                <option value="Shoulder Length">Shoulder Length</option>
                <option value="Mid Back Length">Mid Back Length</option>
                <option value="Waist/Butt Length">Waist/Butt Length</option>
                <option value="Knee Length">Knee Length</option>
            </select>
        </div>

        <div class="subOptions2" id="subOptions2">
            <label for="subOptions2">Choose Size:</label>
            <select id="subOptions2" name="subOptions2">
                <option value="Large">Large</option>
                <option value="Medium">Medium</option>
                <option value="Smedium">Smedium</option>
                <option value="Small">Small</option>
            </select>
        </div> 

        <div>
            <br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>
        </div> 

        <div class="form-group">
            <label for="exampleFormControlFile1">Have a Sample Picture?</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imageSample">
        </div>

        <div class="single-prod-wrap">
            <h2>Important Information</h2>
            <div class="subtitle-2">
                <input type="checkbox" required>
                A deposit is required to secure your booking.<br>
                We accept cash and e-terrac transfers only.<br>
                Deposits are NON-REFUNDABLE under 5 days cancellation notice for bookings made more than 1 week,
                and 2 days for bookings made within a week.<br>
                
            </div>
        </div>

        <div class="button-container">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</main>
            <br>
         <section class="container-wide" style=" text-align: center; color: darkblue;">
            <div class="single-prod-wrap">
                <div class="extension">
                    Save yourself the hassle of buying an extension; we have a variety available for purchase.<br><br>
                    <div class="subtitle">Clients can bring their own extensions. Accepted types are shown below:
            </div>
                </div>
            </div>
        </section><br/>
         <div class="images">
            <img src="images/extention.jpg" alt="extension type 2" style="width: 20%; height: 10%; display: flex; margin: 0 auto;">
            <img src="images/extention-2.jpg" alt="extension type 2" style="width: 25%; height: 20%; display: flex; margin: 0 auto;">
        </div><br/>
    <header>
       <div class="section section section-lg">
        <div class="container wide">
          <div class="row row-md-30">
            <div class="col-md-5 col-lg-5">
              <div class="subtitle-2" style="color:darkblue;">LOWER BACK STYLES: BUY ONE PACK OF 48" , TWO PACKS OF 52” AND ONE PACK OF 58 <br><br>

WAIST/BUTT LENGTH STYLES: BUY ONE PACK OF 52” AND THREE PACKS OF 58”<br><br>

KNEE LENGTH: BUY FIVE PACKS OF 58” or FOUR PACKS OF 72” ABOVE<br><br>

KINKY TWISTS: BUY 3-5 PACKS FOR MID LENGTH AND 5-7 FOR LOWER BACK/WAIST<br><br>

TEENAGE BRAIDS: BUY 4 PACKS OF 48”</div><br/> 
              <div class="btn-wrap"><a class="button button-primary button-md" href="form.php" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a></div>
            </div>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        var mainOptions = document.getElementById("mainOptions");
        var subOptions1 = document.getElementById("subOptions1");
        var subOptions2 = document.getElementById("subOptions2");

        subOptions1.style.display = "none";
        subOptions2.style.display = "none";

        mainOptions.addEventListener("change", function () {
            if (mainOptions.value !== "") {
            subOptions1.style.display = "block";
            subOptions2.style.display = "none"; 
            } else {
            subOptions1.style.display = "none";
            subOptions2.style.display = "none";
            }
        });

        subOptions1.addEventListener("change", function () {
            if (subOptions1.value !== "") {
            subOptions2.style.display = "block";
            } else {
            subOptions2.style.display = "none";
            }
        });
        });
    </script>
</body>
</html>
