<?php include("include/header.php"); ?>

<body>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
     
        <!-- HEADER START -->
       <?php include("include/navbar.php"); ?>
   
    <link rel="stylesheet" href="css/gallery.css">
    <script src="js/gallery.js"></script>
     <!-- CONTENT START -->
        <div class="page-content">

            <div class="twm-home2-banner-section site-bg-gray bg-cover" style="background-image:url(images/main-slider/slider2/bg1.jpg)">
                
                
            </div>

<body>
 <div class="wrapper">
  <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="bag">Bag</span>
        <span class="item" data-name="shoe">Shoe</span>
        <span class="item" data-name="watch">Watch</span>
        <span class="item" data-name="camera">Camera</span>
        <span class="item" data-name="headphone">Headphone</span>
      </div>
    </nav>
    <!-- filter Images -->
   <div class="gallery">
      <div class="image" data-name="bag"><span><img src="img/gallery/bag-1.jpg" alt=""></span></div>
      <div class="image" data-name="headphone"><span><img src="img/gallery/headphone-1.jpg" alt=""></span></div>
      <div class="image" data-name="camera"><span><img src="img/gallery/camera-1.jpg" alt=""></span></div>
      <div class="image" data-name="shoe"><span><img src="img/gallery/shoe-1.jpg" alt=""></span></div>
      <div class="image" data-name="headphone"><span><img src="img/gallery/headphone-2.jpg" alt=""></span></div>
      <div class="image" data-name="watch"><span><img src="img/gallery/watch-1.jpg" alt=""></span></div>
      <div class="image" data-name="shoe"><span><img src="img/gallery/shoe-2.jpg" alt=""></span></div>
      <div class="image" data-name="camera"><span><img src="img/gallery/camera-2.jpg" alt=""></span></div>
    </div>
  </div>
  <div class="preview-box">
    <div class="details">
      <span class="title">Image <p class="current-img"></p> of <p class="total"></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
      <div class="slide prev"><i class="fas fa-angle-left"></i></div>
      <div class="slide next"><i class="fas fa-angle-right"></i></div>
      <img src="" alt="">
    </div>
  </div>
  <div class="shadow"></div>


<?php include("include/footer.php"); ?>

<!-- javascript -->
<script type="text/javascript">
    const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".gallery .image");
    const gallery  = document.querySelectorAll(".image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
currentImg = previewBox.querySelector(".current-img"),
total = previewBox.querySelector(".total"),
shadow = document.querySelector(".shadow");

window.onload = ()=>{
filterItem.onclick = (selectedItem)=>{ //if user click on filterItem div
    if(selectedItem.target.classList.contains("item")){ //if user selected item has .item class
      filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in first item
      selectedItem.target.classList.add("active"); //add that active class on user selected item
      let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
        if((filterImges == filterName) || (filterName == "all")){
          image.classList.remove("hide"); //first remove the hide class from the image
          image.classList.add("show"); //add show class in image
        }else{
          image.classList.add("hide"); //add hide class in image
          image.classList.remove("show"); //remove show class from the image
        }
      });
    }
  }
  for (let i = 0; i < filterImg.length; i++) {
    filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
  }
  const previewBox = document.querySelector(".preview-box"),
categoryName = previewBox.querySelector(".title p"),
previewImg = previewBox.querySelector("img"),
closeIcon = previewBox.querySelector(".icon"),
shadow = document.querySelector(".shadow");

function preview(element){
  //once user click on any image then remove the scroll bar of the body, so user can't scroll up or down
  document.querySelector("body").style.overflow = "hidden";
  let selectedPrevImg = element.querySelector("img").src; //getting user clicked image source link and stored in a variable
  let selectedImgCategory = element.getAttribute("data-name"); //getting user clicked image data-name value
  previewImg.src = selectedPrevImg; //passing the user clicked image source in preview image source
  categoryName.textContent = selectedImgCategory; //passing user clicked data-name value in category name
  previewBox.classList.add("show"); //show the preview image box
  shadow.classList.add("show"); //show the light grey background
  closeIcon.onclick = ()=>{ //if user click on close icon of preview box
    previewBox.classList.remove("show"); //hide the preview box
    shadow.classList.remove("show"); //hide the light grey background
    document.querySelector("body").style.overflow = "auto"; //show the scroll bar on body
  }
}

    for (let i = 0; i < filterImg.length; i++) {
        total.textContent = filterImg.length; //passing total img length to totalImg variable
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable
        
        filterImg[i].onclick = () =>{
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
            function preview(){
                currentImg.textContent = newIndex + 1; //passing current img index to currentImg varible with adding +1
                let imageURL = filterImg[newIndex].querySelector("img").src; //getting user clicked img url
                previewImg.src = imageURL; //passing user clicked img url in previewImg src
            }
            preview(); //calling above function
    
            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            if(newIndex == 0){ //if index value is equal to 0 then hide prevBtn
                prevBtn.style.display = "none"; 
            }
            if(newIndex >= gallery.length - 1){ //if index value is greater and equal to gallery length by -1 then hide nextBtn
                nextBtn.style.display = "none"; 
            }
            prevBtn.onclick = ()=>{ 
                newIndex--; //decrement index
                if(newIndex == 0){
                    preview(); 
                    prevBtn.style.display = "none"; 
                }else{
                    preview();
                    nextBtn.style.display = "block";
                } 
            }
            nextBtn.onclick = ()=>{ 
                newIndex++; //increment index
                if(newIndex >= gallery.length - 1){
                    preview(); 
                    nextBtn.style.display = "none";
                }else{
                    preview(); 
                    prevBtn.style.display = "block";
                }
            }
            document.querySelector("body").style.overflow = "hidden";
            previewBox.classList.add("show"); 
            shadow.style.display = "block"; 
            closeIcon.onclick = ()=>{
                newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                prevBtn.style.display = "block"; 
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").style.overflow = "scroll";
            }
        }
        
    }
    
}

</script>
  <script src="js/galleryscript.js"></script>
<?php include("include/footer_javascipt.php"); ?>
<!-- javascript -->
</body>
</html>
