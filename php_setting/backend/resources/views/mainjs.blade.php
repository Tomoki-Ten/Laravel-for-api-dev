<script>
  const listcontainer = document.getElementById('listcontainer');
  const getBtn = document.getElementById('get-btn');
  const postBtn = document.getElementById('post-btn');
  const putBtn = document.getElementById('put-btn');
  const deleteBtn = document.getElementById('delete-btn');


  // GET as Loading
  async function getData(){
    const response = await fetch('/api/v1/posts')
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
      // listcontainer.appendChild(createList);
      listcontainer.insertBefore(createList,listcontainer.firstElementChild)
    };
  }
  getData();

  // Cleaner
  function cleaner(){
    while(listcontainer.firstChild){
      listcontainer.removeChild(listcontainer.firstChild);
    }
  }


  // setInterval(()=> {
  //   cleaner();
  //   getData();
  // },3000);

  // GET as getBtn pushed
  // getBtn.addEventListener('click',(e)=> {
  //   console.log(event);
  //   console.log(e);
  //   console.log(e.target);
  //   console.log(e.target.value);
  //   cleaner();
  //   getData();
  // });


  // POST
  postBtn.addEventListener('click', ()=> {
    const titleForm = document.getElementById('title-form');
    const titleVal = titleForm.value;
    const postForm = document.getElementById('post-form');
    const postVal = postForm.value;
    
    const obj = {title: titleVal,post: postVal};
    
    fetch('/api/v1/posts', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify(obj),
    })
    .then(response => response.json())
    .then(response => {
      console.log('Success:', response);
    })
    .catch((error) => {
      console.error('Error:', error);
    });

    titleForm.value = '';
    postForm.value = '';

    cleaner();
    setTimeout(getData,100);
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
    
    fetch('/api/v1/posts/' + id, {
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

    titleForm.value = '';
    postForm.value = '';
    idForm.value = '';
    
    cleaner();
    setTimeout(getData,100); //Wait to start fetch loading data to get exact result of data.
  });

  // DELETE
  deleteBtn.addEventListener('click',()=> {
    const idForm = document.getElementById('id-form');
    const id = idForm.value;

    fetch('/api/v1/posts/' + id, {
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

    idForm.value = '';
    
    cleaner();
    setTimeout(getData,100);
  });


  // async function showData(id){
  //   const response = await fetch('/api/v1/posts/' + id);
  //   const result = await response.json();

  //   const createList = document.createElement('li');
  //   const createSpan = document.createElement('span');
  //   const createH3 = document.createElement('h3');
  //   const createP = document.createElement('p');
    
  //   createH3.textContent = result.title;
  //   createSpan.textContent = 'id:' + result.id;
  //   createP.textContent = result.post;

  //   createList.appendChild(createH3);
  //   createList.appendChild(createSpan);
  //   createList.appendChild(createP);

  //   listcontainer.insertBefore(createList,listcontainer.firstElementChild);

  // }

  // // Show
  // getBtn.addEventListener('click',()=> {
  //   const idForm = document.getElementById('id-form');
  //   const id = idForm.value;
  //   cleaner();
  //   showData(id);
  // });


  async function searchTitle(postValue){
    const response = await fetch('/api/v1/posts/' + postValue);
    const result = await response.json();
    console.log(result);
    // return result;
  }

  getBtn.addEventListener('click',()=>{
    const searchForm = document.getElementById('search-form');
    const postValue = searchForm.value;
    cleaner();
    searchTitle(postValue);
  });


</script>