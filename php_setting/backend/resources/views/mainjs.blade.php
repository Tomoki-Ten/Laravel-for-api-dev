<script>
  const listcontainer = document.getElementById('listcontainer');
  const getBtn = document.getElementById('get-btn');
  const postBtn = document.getElementById('post-btn');
  const putBtn = document.getElementById('put-btn');
  const deleteBtn = document.getElementById('delete-btn');


  // GET
  async function getData(){
    const response = await fetch('/api/posts')
    const data = await response.json();

    console.log(data);

    const getBtn = document.getElementById('get-btn');
    for(let i=0; i<data.length; i++){
      const createList = document.createElement('li');
      const createSpan = document.createElement('span');
      const createH3 = document.createElement('h3');
      const createP = document.createElement('p');
      createSpan.textContent = 'id:' + data[i].id;
      createH3.textContent = data[i].title;
      createP.textContent = data[i].post;
      createList.appendChild(createH3);
      createList.appendChild(createSpan);
      createList.appendChild(createP);
      listcontainer.appendChild(createList);
    };
  }
  getData();


  // POST
  postBtn.addEventListener('click', ()=> {
    const titleForm = document.getElementById('title-form');
    const titleVal = titleForm.value;
    const postForm = document.getElementById('post-form');
    const postVal = postForm.value;
    
    const obj = {title: titleVal,post: postVal};
    
    fetch('/api/posts', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(obj),
    })
    .then(response => response.json())
    .then(response => {
      console.log('Success:', response);
    })
    .catch((error) => {
      console.error('Error:',error);
    });
  });


  // PUT
  putBtn.addEventListener('click',()=> {
    const titleForm = document.getElementById('title-form');
    const titleVal = titleForm.value;
    const postForm = document.getElementById('post-form');
    const postVal = postForm.value;
    const idForm = document.getElementById('id-form');
    const id = idForm.value;
    
    const obj = {title: titleVal,post: postVal};
    
    fetch('/api/posts/' + id, {
      method: 'PUT',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(obj),
    })
    .then(response => response.json())
    .then(response => {
      console.log('Success:', response);
    })
    .catch((error) => {
      console.error('Error:', error);
    })
  });

  // DELETE
  deleteBtn.addEventListener('click',()=> {
    const idForm = document.getElementById('id-form');
    const id = idForm.value;

    fetch('/api/posts/' + id, {
      method: 'DELETE',
      headers: {'Content-Type': 'application/json'},
    })
    .then(response => response.json())
    .then(response => {
      console.log('Success:', response);
    })
    .catch((error) => {
      console.error('Error:', error);
    })
  });


  
</script>