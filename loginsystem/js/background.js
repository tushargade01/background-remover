const btn = document.querySelector(".button");
const btnDownload = document.querySelector(".download-button");

const inputFile = document.querySelector('#file');
const imgArea = document.querySelector('.img-area');
const canvas = document.createElement('canvas');
const ctx = canvas.getContext('2d');

let imageURL;

btn.addEventListener('click', function () {
    inputFile.click();
});

inputFile.addEventListener('change', function () {
    btn.classList.add("button--loading");
    const image = this.files[0];
    const formData = new FormData();
    formData.append("image_file", image);
    formData.append('size', 'auto');
    const apiKey = "bgDbBmH97BxYLvwJGzWpjRgm";
    fetch('https://api.remove.bg/v1.0/removebg', {
        method: "POST",
        headers: {
            'X-Api-Key': apiKey,
        },
        body: formData
    })
    .then(response => response.blob())
    .then(blob => {
        const url = URL.createObjectURL(blob);
        imageURL = url;
        const background = document.querySelector('.img-back');
        background.style.display = 'none';
        const img = new Image();
        img.onload = function() {
            canvas.width = img.naturalWidth;
            canvas.height = img.naturalHeight;
            const colorImage = imgArea.style.backgroundColor;
            ctx.fillStyle = colorImage || '#00000000'; // Default color if no background color is set
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(img, 0, 0);
            btn.classList.remove("button--loading");
            btn.style.display = "none";
            btnDownload.style.display = "block";
        };
        img.src = url;
        imgArea.appendChild(img);
        imgArea.classList.add('active');
        imgArea.dataset.imgs = image.name;
    })
    .catch(error => {
        console.error('Error:', error);
        btn.classList.remove("button--loading");
    });
});

btnDownload.addEventListener('click', function () {
    const img = new Image();
    img.onload = function() {
        canvas.width = img.naturalWidth;
        canvas.height = img.naturalHeight;
        const colorImage = imgArea.style.backgroundColor;
        ctx.fillStyle = colorImage;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0);
        canvas.toBlob(function (blob) {
            let newFileName;
            if(colorImage == 'rgb(255, 13, 13)' || colorImage == '#4297ff' || colorImage == '#f677ff'){
                newFileName = inputFile.files[0].name.replace(/\.[^/.]+$/, "") + "-bgremover.jpeg";
            }else{
                newFileName = inputFile.files[0].name.replace(/\.[^/.]+$/, "") + "-bgremover.png";
            }
            const anchorElement = document.createElement("a");
            anchorElement.href = URL.createObjectURL(blob);
            anchorElement.download = newFileName;
            document.body.appendChild(anchorElement);
            anchorElement.click();
            document.body.removeChild(anchorElement);
        });
    };
    img.src = imageURL;
});


//color chnage
const colorOne = document.querySelector(".color-1");
colorOne.addEventListener('click', function () {
    imgArea.style.backgroundColor = "#0073ff00";
})

const colorTwo = document.querySelector(".color-2");
colorTwo.addEventListener('click', function () {
	imgArea.style.backgroundColor = "rgb(255, 13, 13)";
})

const colorThree = document.querySelector(".color-3");
colorThree.addEventListener('click', function () {
	imgArea.style.backgroundColor = "#4297ff";
})

const colorFour = document.querySelector(".color-4");
colorFour.addEventListener('click', function () {
	imgArea.style.backgroundColor = "#f677ff";
})


