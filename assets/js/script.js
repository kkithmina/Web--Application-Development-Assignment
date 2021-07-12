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