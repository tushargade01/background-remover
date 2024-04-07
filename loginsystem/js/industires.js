function industriesButton(value) {
    const animal = document.querySelector(".animal-container");
    const people = document.querySelector(".people-container");
    const car = document.querySelector(".car-container");
    const product = document.querySelector(".product-container");

    // Hide all sections first
    animal.style.display = "none";
    people.style.display = "none";
    car.style.display = "none";
    product.style.display = "none";

    // Show the section based on the value
    switch (value) {
        case 0:
            animal.style.display = "block";
            break;
        case 1:
            people.style.display = "block";
            break;
        case 2:
            car.style.display = "block";
            break;
        case 3:
            product.style.display = "block";
            break;
        default:
            // Handle any unexpected value
            console.error("Invalid value for sections function:", value);
            break;
    }
}

window.onload = function() {
    // Call industriesButton() with the desired value to display images in the industries section
    industriesButton(0); // Display the animal images by default

    // Select default images for all containers
    var containers = document.querySelectorAll(".img-conatiner");
    containers.forEach(function(container) {
        var defaultImage = container.querySelector("img");
        if (defaultImage) {
            // Call imgSelection() only if the defaultImage is found
            imgSelection(defaultImage);
        } else {
            console.error("Default image not found in container:", container.id);
        }
    });
};
function imgSelection(img) {
    console.log(img);
    let expandImg;
    if(img.id == "animal"){
        expandImg = document.querySelector(".expandedImgAnimal");
    }else if(img.id == "people"){
        expandImg = document.querySelector(".expandedImgPeople");
    }else if(img.id == "car"){
        expandImg = document.querySelector(".expandedImgCar");
    }else if(img.id == "product"){
        expandImg = document.querySelector(".expandedImgProducts");
    }

    // Debugging statement
    console.log(expandImg);

    if(expandImg){
        expandImg.src = img.src;
        expandImg.parentElement.style.display = "block";
    } else {
        console.log('Error: Expanded image element not found.');
    }
}
