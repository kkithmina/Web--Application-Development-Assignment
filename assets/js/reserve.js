
let patientid = $("input[name*='book_id']")
patientid.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let patientname = $("input[name*='patient_name']");
    let patientmobile = $("input[name*='patient_mob']");
    let patientsex = $("input[name*='patient_sex']");

    id.val(textvalues[0]);
    patientname.val(textvalues[1]);
    patientmobile.val(textvalues[2]);
    patientsex.val(textvalues[3].replace("$", ""));
});


function displayData(e) {
    let patientid = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.patientid == e.target.dataset.patientid){
           textvalues[patientid++] = value.textContent;
        }
    }
    return textvalues;

}