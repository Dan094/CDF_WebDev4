

const createPost = post => $(`
    <div class="post hoverable" data-aos="fade-left" data-aos-duration="2000" id=" ${post.postsID}">
                                                 <img class="img" src="${post.img}" width="100%" >
                                                 <div class="desp">
                                                         <h5 class="title" >${post.title}</h5>
                                                         <p>${post.content}</p>
                                                         <a href="${post.link}" class="readmoreBtn">
                                                            <h6>Read More</h6>
                                                         </a>
                                                 </div>
                                         </div>
`);




function getAllPosts(data) {
    $.ajax({
      type: "GET",
      url: `${url}/php/posts.php`,
      data: data
    }).then(({data}) => {
      $('.sliderCont').empty();
      for(const id in data) {
        const post = data[id];
        createPost(post).appendTo('.sliderCont');
      }
  
    }).catch(error => {
      console.log("ERROR", error);
      alert(error.responseText);
    });
  }
  
  getAllPosts();


  function postContent(data) {
    $.ajax({
      type: "POST",
      url: `${url}/php/posts.php`,
      data: data
    }).then(({data}) => {
      // createSqueak(squeak).prependTo('.all-squeaks');
      getAllPosts();
    }).catch(error => {
      console.log("ERROR", error);
      alert(error.responseText);
    });
  }
  
  
  $("#contentForm").on("submit", function(event) {
    event.preventDefault();
    const data = $(this).serialize();
    postContent(data);
  });
  
  
  $("#contentForm").on("submit", function(event){
    event.preventDefault();
    const data = $(this).serialize();
    getAllPosts(data);
  });
  

  function deletePost(postsID) {
    $.ajax({
      type: "POST",
      url: `${url}/delete.php`,
      data: `id=${postsID}`
    }).then(({ data }) => {
      if (data.id) {
        $(`#${data.id}`).remove();
      }
    }).catch(error => {
      console.log("ERROR", error);
      alert(error.responseText);
    });
  }