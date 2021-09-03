const qBtn = document.querySelector('.addQBtn');
const secretMenu = document.querySelector('.secret_menu_option');
const pen = document.querySelector('.build-pen')
const buildFontTwo = document.querySelector('.build-pen > .font_two')
const setting = document.querySelector('.setting');
const settingFontTwo = document.querySelector('.setting > .font_two');
const settingColor = document.querySelector('.setting_color_blue');
const shortAnswer = document.querySelector('.shortAns');
const queryBox = document.querySelector('.query_box');
const mobile = document.querySelector('.responsive_devices > .mobile_icon');
const tablet = document.querySelector('.responsive_devices > .tablet_icon');
const desktop = document.querySelector('.responsive_devices > .desktop_icon');
const mobile_preview = document.querySelector('.mobile');
const tablet_preview = document.querySelector('.tablet');
const desktop_preview = document.querySelector('.desktop');
const nameInput = document.querySelector('.name');
const nameInputId = document.querySelector('#nameInputId');
const descInput = document.querySelector('.desc');
const device_h1_mobile = document.querySelector('.device_h1_input_mobile');
const device_h1_tablet = document.querySelector('.device_h1_input_tablet');
const device_h1_desktop = document.querySelector('.device_h1_input_desktop');
const device_p_mobile = document.querySelector('.device_p_input_mobile');
const device_p_tablet = document.querySelector('.device_p_input_tablet');
const device_p_desktop = document.querySelector('.device_p_input_desktop');
const builderPage = document.querySelector('.first-builder-page');
const showForView = document.querySelector('.show_for_view');
const showForResponse = document.querySelector('.show_for_response');
const showForQuestion = document.querySelector('.show_for_question');
const secondSettingsPage = document.querySelector('.second-settings_page');
const settingVieWrapper = document.querySelector('.setting_view_wrapper');
const responseWrapper = document.querySelector('.response_wrapper');
const questionWrapper = document.querySelector('.question_wrapper');
const username = document.querySelector('.name');
const description = document.querySelector('.desc');
const form = document.querySelector('.formS');
const form_send_btn = document.querySelector('.formBtn');
const name_error = document.querySelector('#name_error');
const desc_error = document.querySelector('#desc_error');
const startBtn = document.querySelector('.start_btn');


qBtn.addEventListener('click', displayMenuOptions);
pen.addEventListener('click', openBuildPen);
setting.addEventListener('click', displaySettingPage);
shortAnswer.addEventListener('click', showShortAnswer);
mobile.addEventListener('click',show_mobile_preview);
tablet.addEventListener('click',show_tablet_preview);
desktop.addEventListener('click',show_desktop_preview);
nameInput.addEventListener('input', showNameInput);
descInput.addEventListener('input',showDescInput);
showForView.addEventListener('click', show_For_View);
showForResponse.addEventListener('click', show_For_Response);
showForQuestion.addEventListener('click', show_For_Question);
form_send_btn.addEventListener('click', validate_JS_Form);
startBtn.addEventListener('click', startBtnDevices);
nameInputId.addEventListener('keyup', () => {
    console.log('up');
})

function openBuildPen(){
    builderPage.style.display = 'block';
    secondSettingsPage.style.display = 'none';
    buildFontTwo.style.color = 'rgb(53, 118, 204)';
    settingFontTwo.style.color = 'rgb(108, 109, 110)';
}

function displayMenuOptions(){
    if(secretMenu.classList.contains('hide')){
         secretMenu.classList.remove('hide');
    }else{
         secretMenu.classList.add('hide');
    }
}

function displaySettingPage(){
    if(builderPage){
        builderPage.style.display = 'none';
        settingFontTwo.style.color = 'rgb(53, 118, 204)';
        buildFontTwo.style.color = 'rgb(108, 109, 110)';
        secondSettingsPage.style.display = 'block';
        settingVieWrapper.style.display = 'block';
    }

    if(settingColor.classList.contains('setting_color_blue')){
        settingColor.classList.remove('setting_color_blue');
    }else{
        settingColor.classList.add('setting_color_blue');
    }
}
function show_For_View(){
    responseWrapper.style.display = 'none';
    settingVieWrapper.style.display = 'block';
    questionWrapper.style.display = 'none';
}
function show_For_Response(){
    responseWrapper.style.display = 'block';
    settingVieWrapper.style.display = 'none';
    questionWrapper.style.display = 'none';
}
function show_For_Question(){
    responseWrapper.style.display = 'none';
    settingVieWrapper.style.display = 'none';
    questionWrapper.style.display = 'block';
}

function showShortAnswer(){
    const cDiv = document.createElement('div');
    cDiv.classList.add('cDiv');
    const cInput = document.createElement('input');
    cInput.classList.add('cInput');
    cDiv.appendChild(cInput);
    const cBtn = document.createElement('button');
    cBtn.classList.add('cBtn');
    cBtn.innerHTML = '<i class="fas fa-paperclip"></i>';
    cDiv.appendChild(cBtn);
    const addQ = document.createElement('button');
    addQ.classList.add('hidden-q-btn');
    addQ.innerHTML = "+";
    cDiv.appendChild(addQ);
    const selectForm = document.createElement('select');
    selectForm.classList.add('selectForm');
    const option1 = document.createElement('option');
    option1.classList.add('option1');
    const option2 = document.createElement('option');
    option2.classList.add('option2');
    const option3 = document.createElement('option');
    option3.classList.add('option3');
    const option4 = document.createElement('option');
    option4.classList.add('option4');
    const option5 = document.createElement('option');
    option5.classList.add('option5');
    const option6 = document.createElement('option');
    option6.classList.add('option6');
    option1.innerHTML = 'Short Answer';
    option2.innerHTML = 'Long Answer';
    option3.innerHTML = 'Email';
    option4.innerHTML = 'Number';
    option5.innerHTML = 'Multiple Choice';
    option6.innerHTML = 'Checkboxes';
    selectForm.appendChild(option1);
    selectForm.appendChild(option2);
    selectForm.appendChild(option3);
    selectForm.appendChild(option4);
    selectForm.appendChild(option5);
    selectForm.appendChild(option6);
    cDiv.appendChild(selectForm);
    queryBox.appendChild(cDiv);
    qBtn.style.display = 'none';
    secretMenu.style.display = 'none';
}

function show_mobile_preview(){
    mobile_preview.classList.remove('hide_devices');
    tablet_preview.classList.add('hide_devices');
    desktop_preview.classList.add('hide_devices');
}

function show_tablet_preview(){
    tablet_preview.classList.remove('hide_devices');
    mobile_preview.classList.add('hide_devices');
    desktop_preview.classList.add('hide_devices')
}

function show_desktop_preview(){
    desktop_preview.classList.remove('hide_devices');
    tablet_preview.classList.add('hide_devices');
    mobile_preview.classList.add('hide_devices');
}

// Mobile Tablet Desktop View Box

function showNameInput(){
     const showInDeviceH = nameInput.value;
     device_h1_mobile.innerHTML = showInDeviceH;
     device_h1_tablet.innerHTML = showInDeviceH;
     device_h1_desktop.innerHTML = showInDeviceH;
}


function showDescInput(){
     const showDescDeviceH = descInput.value;
     device_p_mobile.innerHTML = showDescDeviceH;
     device_p_tablet.innerHTML = showDescDeviceH;
     device_p_desktop.innerHTML = showDescDeviceH;
}

function startBtnDevices(clicked){
    const hideDeviceContents = document.querySelector('.device_queries');
    if(clicked){
        hideDeviceContents.style.display = 'none';
        startBtn.style.display = 'none';
        show_new_page_content();
    }
}
const mainNewContentContainer = document.querySelector(".new_content_wrapper");
function show_new_page_content(){
    const showInDevicee = nameInput.value;
    const showDescDevicee = descInput.value;
            // console.log('content-shown');
            const connDiv = document.createElement('div');
            connDiv.classList.add('conn_div');
            connDiv.style.backgroundColor = "rgb(236, 234, 234)";
            connDiv.style.height = '110px';
            connDiv.style.width = '234px';
            connDiv.style.margin = '0px 0px 0px 3px';
            const connH1 = document.createElement('h1');
            connH1.classList.add('conn_h1');
            connH1.innerHTML = showInDevicee;
            connH1.style.color = 'black';
            connH1.style.margin = '5px 0px';
            connH1.style.padding = '10px 0px 0px 0px';
            connH1.style.fontSize = '16px';
            connDiv.appendChild(connH1);
            const connP = document.createElement('p');
            connP.classList.add('conn_p');
            connP.innerHTML = showDescDevicee;
            connP.style.margin = '5px 0px 15px 0px';
            connDiv.appendChild(connP);
            const submitBtn = document.createElement('button');
            submitBtn.classList.add('submit_btn');
            submitBtn.innerHTML = "Submit";
            submitBtn.style.color = 'white';
            submitBtn.style.backgroundColor = 'black';
            submitBtn.style.height = '30px';
            submitBtn.style.width = '90px';
            submitBtn.style.border = "none";
            submitBtn.style.margin = "0px 0px 10px 0px";
            connDiv.appendChild(submitBtn); 
            mainNewContentContainer.appendChild(connDiv);
}

// Javascript Form Validation

function validate_JS_Form(e){
    e.preventDefault();
    let userVal = username.value.trim();
    let descVal = description.value.trim();

    if(userVal === ""){
        name_error.innerText = "* Please insert your Title";
        name_error.style.color = "red";
    }else if((userVal.length < 5) || (userVal.length > 15)){
        name_error.innerText = "* Title length should not be less than 5 and greater than 15 characters";
        name_error.style.color = "red";
    }else{
        name_error.innerText = "";
    }


    if(descVal === ""){
        alert("Kindly add the description before submitting");
        desc_error.innerText = "* Please insert your Description";
        desc_error.style.color = "red";
    }else if(descVal.length > 100){
        desc_error.innerText = "* Description length should not be greater than 100 characters";
        desc_error.style.color = "red";
    }else{
        desc_error.innerText = "";
    }

}
