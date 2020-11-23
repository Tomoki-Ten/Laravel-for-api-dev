<script type="text/javascript">
'use strict'
{
  const getBtn = document.getElementById('get-btn');
  const postBtn = document.getElementById('post-btn');
  const putBtn = document.getElementById('put-btn');
  const deleteBtn = document.getElementById('delete-btn');
  const imagecontainer = document.getElementById('imagecontainer');
  

  //GET
  async function getImages(){
    const response = await fetch('/api/v1/images');
    const result = await response.json();
    console.log(result);

    for(let i = 0; i < result.length; i++){
      console.log(result[i].image);
      const createImg = document.createElement('img');
      const dataSrc = result[i].image;
      createImg.src = dataSrc;
      imagecontainer.appendChild(createImg);
    }
  }
  getImages();

  //POST
  function previewFile(callback){
    const preview = document.getElementById('preview');
    const file = document.getElementById('image-form').files[0];
    const reader = new FileReader();

    reader.addEventListener('load',()=>{
      preview.src = reader.result;
      callback(reader.result);
    });
    if(file){
      reader.readAsDataURL(file);
    }
  }

  function constPost(base64Data){
    const titleForm = document.getElementById('title-form');
    let titleVal = titleForm.value;
    // if(titleVal === null){
    //   let titleVal = 'Non Title';
    // }
    const data = {
      title: titleVal,
      image: base64Data
    };
    
    fetch('/api/v1/images', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(result => {
      console.log('Result:',result);
    })
    .catch((error) => {
      console.error('Error:',error);
    });
    console.log(data);
  }
  //postBtn
  postBtn.addEventListener('click',()=> {
    previewFile(constPost);
  });

}
</script>