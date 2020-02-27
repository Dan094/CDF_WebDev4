

const createPost = post => $(`
    <div class="post hoverable" data-aos="fade-left" data-aos-duration="2000" id=" ${post.id}">
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