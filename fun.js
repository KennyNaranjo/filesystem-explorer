
const deleteFiles = document.querySelectorAll("#delete-btn");


deleteFiles.forEach(element => {
    element.addEventListener("click", deleteFolder)
});

function deleteFolder(event){
    const popUpDeleteConfirm = confirm("Do you want to delete this file?");
    console.log(popUpDeleteConfirm);
    if (popUpDeleteConfirm){
        let actualFolderName = event.srcElement.getAttribute("actual-folder");
        console.log(actualFolderName);

            fetch("delete.php?actualFolderName=./"+actualFolderName)
            .then(response=>response.json())
            .then(data =>console.log(data));
        
    }
    location.reload();
}
