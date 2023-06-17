<?php include("include/header.php"); ?>
   
    <link rel="stylesheet" href="css/gallery.css">
    <script src="js/gallery.js"></script>
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

                

            
 
    
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Gallery</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- HOW IT WORK SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area2">
                        
                <div class="container">
                    <div class="row">
                        
                           
                        <div class="wrapper">
                              <!-- filter Items -->
                                <nav>
                                  <div class="items">
                                    <span class="item active" data-name="all">All</span>
                                    <span class="item" data-name="btr">Btr</span>
                                    <span class="item" data-name="state">State</span>
                                    <span class="item" data-name="central">Central</span>
                                    
                                  </div>
                                </nav>
                                <!-- filter Images -->
                               <div class="gallery">
                                  <div class="image" data-name="central"><span><img src="img/central.jpg" alt=""></span></div>
                                  <div class="image" data-name="central"><span><img src="img/central1.JPG" alt=""></span></div>
                                  <div class="image" data-name="btr"><span><img src="img/btr.jpg" alt=""></span></div>
                                  <div class="image" data-name="btr"><span><img src="img/btr2.jpg" alt=""></span></div>
                                  
                                  <div class="image" data-name="state"><span><img src="img/state.jpg" alt=""></span></div>
                                  <div class="image" data-name="state"><span><img src="img/state2.jpg" alt=""></span></div>
                                  <div class="image" data-name="state"><span><img src="img/state3.jpeg" alt=""></span></div>
                                  
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
                    </div>

                </div>
            </div>


                   
            
                    <!-- FOOTER START -->
                    <?php include("include/footer.php"); ?>
                    <!-- FOOTER END -->
                    

        </div>
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


    for (let i = 0; i < gallery.length; i++) {
        total.textContent = gallery.length; //passing total img length to totalImg variable
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable
        
        gallery[i].onclick = () =>{
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
            function preview(){
                currentImg.textContent = newIndex + 1; //passing current img index to currentImg varible with adding +1
                let imageURL = gallery[newIndex].querySelector("img").src; //getting user clicked img url
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

<?php include("include/footer_javascipt.php"); ?>



</body>

</html>
