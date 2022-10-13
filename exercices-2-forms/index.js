
// Variables ==========================

//Check if an array of inputs is valid for sumbission, with visual feedback.
function validForm(fieldsArray){
    for (let i = 0; i < fieldsArray.length; i++){
        if (fieldsArray[i].value == "" || fieldsArray[i].value == fieldsArray[i].getAttribute("placeholder") + " *" ){
            event.preventDefault()
            fieldsArray[i].style.color = "red"
            fieldsArray[i].value = fieldsArray[i].getAttribute("placeholder") + " *"
        }
        else{
            null
        }
    }
}

function resetInputBehavior(fields){
    for(let i = 0; i < fields.length; i++){
        fields[i].addEventListener("click", ()=>{
    
            if(fields[i].value == fields[i].getAttribute("placeholder") + " *")
            fields[i].value = "";
            fields[i].style.color = "initial"
        })
    
    
    }
}


// EXO 1 et 2 ===========================================
const inputs = document.querySelectorAll(".field");
const button = document.querySelector("#submit");


button.addEventListener("click", ()=>{
    validForm(inputs)
})

resetInputBehavior(inputs)



// EXO 3 ====================================================

const mailField = document.querySelector(".mailField")
const submitMail = document.querySelector("#submitMail")

submitMail.addEventListener("click", ()=>{
    if(mailField.value == ""){
        event.preventDefault()
    }
    else{
        null
    }
})