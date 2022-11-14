const aImg=document.getElementById('a_img');
const aName=document.getElementById('a_name');
const aInfo=document.getElementById('a_info');



const apiobj=fetch('https://zoo-animal-api.herokuapp.com/animals/rand');

apiobj
    .then(response => {
        return response.json();
    })
    .then(data => {
        updatecard(data);
    });
    // .catch(() =>{
    //     alert("error");
    // });



    function updatecard (animal){
        aName.textContent = animal.name;
        aImg.src = animal.image_link;
        aInfo.textContent = animal.diet;
    }