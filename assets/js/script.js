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