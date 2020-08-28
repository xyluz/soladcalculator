
const powerInput = document.getElementById('power');
const metricsDisplay = document.getElementById('metric');
const barrelsDisplay = document.getElementById('barrels');
const carsDisplay = document.getElementById('cars');
const milesDisplay = document.getElementById('miles');
const displayMessage = document.getElementById('message');

const metricsHiddenField = document.getElementById('metricsHidden');
const carsHiddenField = document.getElementById('carsHidden');
const milesHiddenField = document.getElementById('milesHidden');
const barrelsHiddenField = document.getElementById('barrelsHidden');
const hoursHiddenField = document.getElementById('hoursHidden');

powerInput.addEventListener("keyup",()=>{
    
    let power = parseFloat(powerInput.value);

    if(isNaN(power) || power === "" || power === null){
        
        displayAlert('You have entered invalid number, please try again','error');
        
        
        metricsDisplay.innerHTML = 0;
        barrelsDisplay.innerHTML = 0;
        milesDisplay.innerHTML = 0;
        carsDisplay.innerHTML = 0;

    }else {
        
        let metrics = calculateMetrics(power);
        let barrels = calculateBarrels(power);
        let miles = calculateMiles(power);
        let cars = calculateCars(miles);

        metricsDisplay.innerHTML = metrics;
        metricsDisplay.style = "font-weight:800";
        metricsHiddenField.value = metrics;

        barrelsDisplay.innerHTML = barrels;
        barrelsDisplay.style = "font-weight:800";
        barrelsHiddenField.value = barrels;

        milesDisplay.innerHTML = numberWithCommas(miles);
        milesDisplay.style = "font-weight:800";
        milesHiddenField.value = miles;
        
        carsDisplay.innerHTML = cars;
        carsDisplay.style = "font-weight:800";
        carsHiddenField.value = cars;

        hoursHiddenField.value = power;

    }


});

const displayAlert = (message,type) => {

    type == 'error' ? displayMessage.setAttribute('class','alert alert-danger') : displayMessage.setAttribute('class','alert alert-warning');
    displayMessage.innerHTML = message;

    window.setTimeout(() => { 
       displayMessage.innerHTML = "";
       displayMessage.style = "display:none";
     }, 3000);      

}

const calculateMetrics = (power)=>{
    return ((((((power*7.4*50)*3.3)*3413)/1000000)/161.3)*7.07).toString().substr(0,5);
}

const calculateBarrels = (power)=>{
    return Math.round((power*7.4*50)/158.76);
}

const calculateMiles = (power)=>{   
    return Math.round(((power*7.4*50)/(158.76/7.5)) * 100);
}

const calculateCars = (miles)=>{
    return Math.round((miles)/16093);
}


const numberWithCommas = (num)=>{
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

