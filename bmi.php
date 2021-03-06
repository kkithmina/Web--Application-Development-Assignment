<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BMI_Calculator</title>

    <link rel = "stylesheet" href = "./assets/css/bmi.css">
  </head>
  <body>

    <div class = "parent_div">
      <div class = "child_div">
        <div class = "head">
          <div id = "us_head" class = "form2 form1">
            <h2>US Units</h2>
          </div>
          <div id = "mc_head" class = "form2">
            <h2>Metric Units</h2>
          </div>
        </div>

        <div class="form_details">

                 <!-- bmi us units -->

          <div class = "form_dtls" id = "bmi_us">
            <form>
              <div class = "lbl1">
                <p>Age</p>
                <input type = "text" class = "form_cntrl" placeholder="Enter Age In Years" id = "age1">
              </div>

              <div class = "lbl2">
                <p>Gender</p>
                <div>
                  <input type = "radio" name = "gender" id = "male" value = "male" checked>
                  <label for = "male">Male</label>
                </div>
                <div>
                  <input type="radio" name = "gender" id = "female" value = "female">
                  <label for = "female">Female</label>
                </div>
              </div>

              <div class = "lbl2">
                <p>Height</p>
                <input type = "text" class = "form_cntrl" id = "height_feet" placeholder="Enter Height In Feet">
                <input type = "text" class = "form_cntrl" id = "height_inches" placeholder="Inches">
              </div>

              <div class = "lbl1">
                <p>Weight</p>
                <input type = "text" class = "form_cntrl" id = "weight_pounds" placeholder="Enter Weight In Pounds">
              </div>
            </form>
          </div>

                 <!-- bmi metric units -->

          <div class = "form_dtls" id = "bmi_mc">
            <form>
              <div class = "lbl1">
                <p>Age</p>
                <input type = "text" class = "form_cntrl" placeholder="Enter Age In Years" id = "age2">
              </div>

              <div class = "lbl2">
                <p>Gender</p>
                <div>
                  <input type = "radio" name = "gender" id = "male" value = "male" checked>
                  <label for = "male">Male</label>
                </div>

                <div>
                  <input type = "radio" name = "gender" id = "female" value = "female">
                  <label for = "female">Female</label>
                </div>
              </div>

              <div class = "lbl1">
                <p>Height</p>
                <input type = "text" class = "form_cntrl" id = "height_cm" placeholder="Enter Height In cm">
              </div>

              <div class = "lbl1">
                <p>Weight</p>
                <input type = "text" class = "form_cntrl" id = "weight_kg" placeholder="Enter Weight In Kg">
              </div>
            </form>
          </div>
        </div>

        <div class = "btns">
          <button type = "button" id = "cal_btn" class = "btn1">Calculate</button>
          <button type = "button" id = "clr_btn" class = "btn1">Clear</button>
        </div>

        <div class = "result">
          <span class = "alert_error">The data entered is invalid!</span>
          <div class = "bmi_result">
            <h3 id = "bmi_value"></h3>
            <p id = "bmi_category"></p>
            <p id = "bmi_gender"></p>
          </div>
        </div>
      </div>
    </div>

    <script src = "./assets/js/script.js"></script>
  
  </body>
</html> 