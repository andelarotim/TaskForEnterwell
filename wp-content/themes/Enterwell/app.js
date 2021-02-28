console.log("script loaded");
/* 
let dropArea = document.getElementById('drop-area');
let fileElem = document.getElementById("fileElem");

dropArea.addEventListener('dragenter', handlerFunction, false);
dropArea.addEventListener('dragleave', handlerFunction, false);
dropArea.addEventListener('dragover', handlerFunction, false);
dropArea.addEventListener('drop', handlerFunction, false);

dropArea.addEventListener('drop', handleDrop, false)

fileElem.onchange = function() {
    handleFiles(this.files);
}

dropArea.ondrop = function(evt) {
    fileElem.files = evt.dataTransfer.files[0];
    evt.preventDefault();
}


function handleDrop(e) {
    const dt = e.dataTransfer;
    const file = dt.files[0];

    handleFiles(file);
}

function handleFiles(files) {
    files = [...files]
    files.forEach(uploadFile)
    files.forEach(previewFile)
}

function previewFile(file) {
    let reader = new FileReader()
    reader.readAsDataURL(file)
}

function uploadFile(file) {
    console.log(file);
}

function handlerFunction(e) {
    e.preventDefault();
}
*/