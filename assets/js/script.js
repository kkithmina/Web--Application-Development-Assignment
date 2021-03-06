const BMI_HEADS = document.querySelectorAll('.form2');
const BMI_USC = document.getElementById('bmi_us');
const BMI_SI = document.getElementById('bmi_mc');
const CALC_BTN = document.getElementById('cal_btn');
const CLR_BTN = document.getElementById('clr_btn');
let activeForm;

// event listeners
window.addEventListener('DOMContentLoaded', () => {
    BMI_USC.classList.add('show_bmi');
    activeForm = "bmi_us";
});

CALC_BTN.addEventListener('click', performBMICalc);
CLR_BTN.addEventListener('click', () => {
    let forms = [...document.forms];
    forms.forEach(form => form.reset());
    clearBMIInfo();
});

// clear BMI Info
function clearBMIInfo(){
    document.getElementById('bmi_value').innerHTML = "";
    document.getElementById('bmi_category').innerHTML = "";
    document.getElementById('bmi_gender').innerHTML = "";
}

// bmi calculation form toggle
BMI_HEADS.forEach(bmiHead => {
    bmiHead.addEventListener('click', () => {
        if(bmiHead.id === "us_head"){
            removeActiveClass();
            clearBMIInfo();
            bmiHead.classList.add('form1');
            BMI_SI.classList.remove('show_bmi');
            BMI_USC.classList.add('show_bmi');
            activeForm = "bmi_us";
        }
        if(bmiHead.id === "mc_head"){
            removeActiveClass();
            clearBMIInfo();
            bmiHead.classList.add('form1');
            BMI_USC.classList.remove('show_bmi');
            BMI_SI.classList.add('show_bmi');
            activeForm = "bmi_mc";
        }
    });
});

// remove active class from heads
function removeActiveClass(){
    BMI_HEADS.forEach(bmiHead => {
        bmiHead.classList.remove('form1');
    });
}

// main bmi calculation function
function performBMICalc(){
    let BMIInfo = getUserInput();
    if(BMIInfo) printBMIResult(BMIInfo);
}

// get input values
function getUserInput(){
    let status;
    // get input values from us units
    if(activeForm === "bmi_us"){
        let age = document.getElementById('age1').value,
        gender = document.querySelector('#bmi_us input[name = "gender"]:checked').value,
        heightFeet = document.getElementById('height_feet').value,
        heightInches = document.getElementById('height_inches').value,
        weightPounds = document.getElementById('weight_pounds').value;

        status = checkInputStatus([age, heightFeet, heightInches, weightPounds]);

        if(status == true){
            return calculateBMI({
                gender,
                age, 
                height: parseFloat(heightFeet) * 12 + parseFloat(heightInches),
                weight: parseFloat(weightPounds)
            });
        }
    }

    // get input values form metric units
    if(activeForm === "bmi_mc"){
        let age = document.getElementById('age2').value,
        gender = document.querySelector('#bmi_mc input[name = "gender"]:checked').value,
        heightCm = document.getElementById('height_cm').value,
        weightKg = document.getElementById('weight_kg').value;

        status = checkInputStatus([age, heightCm, weightKg]);

        if(status === true){
            return calculateBMI({
                gender,
                age,
                height: parseFloat(heightCm) / 100,
                weight: parseFloat(weightKg)
            });
        }
    }

    document.querySelector('.alert_error').style.display = "block";
    setTimeout(() => {
        document.querySelector('.alert_error').style.display = "none";
    }, 1000);
    return false;
}

function checkInputStatus(inputs){
    for(let i = 0; i < inputs.length; i++){
        if(inputs[i].trim() === "" || isNaN(inputs[i])) return false;
    }
    return true;
}

// calculate BMI Value
function calculateBMI(values){
    let BMI;
    if(activeForm === 'bmi_us'){
        BMI = (703 * (values.weight / Math.pow(values.height, 2))).toFixed(2);
    } else {
        BMI = (values.weight / Math.pow(values.height, 2)).toFixed(2);
    }
    return {gender: values.gender, BMI};
}

// print BMI result information
function printBMIResult(BMIInfo){
    document.getElementById('bmi_value').innerHTML = `${BMIInfo.BMI} kg/m<sup>2</sup>`;

    let bmiCategory;
    if(BMIInfo.BMI < 18.5){
        bmiCategory = "Underweight";
    } else if(BMIInfo.BMI >= 18.5 && BMIInfo.BMI <= 24.9){
        bmiCategory = "Normal Weight";
    } else if(BMIInfo.BMI >= 25 && BMIInfo.BMI <= 29.9){
        bmiCategory = "Overweight";
    } else {
        bmiCategory = "Obesity";
    }

    document.getElementById('bmi_category').innerHTML = `${bmiCategory}`;
    document.getElementById('bmi_gender').innerHTML = BMIInfo.gender;
} 