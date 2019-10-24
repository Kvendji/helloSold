
    <!-- header -->
<?php include 'header.php';?>

<!-- main -->
    <main>
         <!-- Start section -->
        <section class="container deals-object-page">
            <div class="row">
                <div class="row mx-0 align-items-center">
                    <a href="#" class="deals-object-page__btn-back">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 14"><defs><style>.cls-1{fill:none;stroke:#9aa3b2;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title>Ресурс 21</title><g id="Слой_2" data-name="Слой 2"><g id="Capa_1" data-name="Capa 1"><line class="cls-1" x1="21" y1="7" x2="1" y2="7"/><polyline class="cls-1" points="7 13 1 7 7 1"/></g></g></svg>
                    </a>
                    <div class="deals-object-page__title">5111 W Wilkinson Rd</div>
                </div> 
                <div class="deals-object-page__status col-12 main-title-text">Active</div>
            </div>
        </section>
        <!-- end section -->

        <!-- Start section -->
        <section class="container deals-object-page-main ">
            <div class="row align-items-start">
                <div class="main-wrapper-block deals-object-page-main__left-column">
                    <div class="swiper-container" id="dealObjectswiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img src="images/pic-home-tabs7.jpg" alt="" class="img-fluid"></div>
                            <div class="swiper-slide"><img src="images/pic-home-tabs1.jpg" alt="" class="img-fluid"></div>
                            <div class="swiper-slide"><img src="images/pic-home-tabs2.jpg" alt="" class="img-fluid"></div>
                            <div class="swiper-slide"><img src="images/pic-home-tabs3.jpg" alt="" class="img-fluid"></div>
                            <div class="swiper-slide"><img src="images/pic-home-tabs4.jpg" alt="" class="img-fluid"></div>
                            <div class="swiper-slide"><img src="images/pic-home-tabs5.jpg" alt="" class="img-fluid"></div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-fraction">
                                <span class="swiper-pagination-current"></span> 
                                <span class="swiper-pagination-total"></span>
                            </div>
                    </div>
                    <div class="deals__left-column__wrapper-text-block">
                            <div class="row mx-0 justify-content-between align-items-center mb-3">
                                    <a href="#" class="deals__left-column__btn-edit main-text" >Property details</a>
                                    <div class="dropdown position-relative">
                                        <button class="btn deals__left-column__btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>...</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <img src="images/icon-no.svg" alt="" class="img-fluid"> 
                                                <span>Override</span> 
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="images/icon-box.svg" alt="" class="img-fluid"> 
                                                <span>Archive</span> 
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="images/icon-lock.svg" alt="" class="img-fluid"> 
                                                <span>Make Private</span> 
                                            </a>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-4">
                                <div class="main-text main-color">MLS 5811266</div>
                                <div class="main-title-text">Single Family • Detached</div>
                            </div>
                            <div class="mb-4">
                                <div class="main-text">Paradise Valley</div>
                                <div class="main-title-text">AZ • 85253</div>
                            </div>
                            <div class="row mx-0 align-items-center justify-content-between mb-4">
                                <div class="main-text">$1,500,000</div>
                                <div class="main-title-text">Updated on 20/10/18</div>
                            </div>
                            <div class="deals__left-column__wrapper-row-info">
                                <div class="row mx-0 justify-content-between align-items-center deals__left-column__row-info">
                                    <div class="main-title-text">Size</div>
                                    <div class="">49,294 sq. ft.</div>
                                </div>
                                <div class="row mx-0 justify-content-between align-items-center deals__left-column__row-info">
                                    <div class="row mx-0 align-items-center">
                                        <img src="images/icon-bed.svg" alt="" class="img-fluid">
                                        <span class="main-title-text">Bedrooms</span>
                                    </div>
                                    <div class="">5</div>
                                </div>
                                <div class="row mx-0 justify-content-between align-items-center deals__left-column__row-info">
                                    <div class="row mx-0 align-items-center">
                                        <img src="images/icon-bath.svg" alt="" class="img-fluid">
                                        <span class="main-title-text">Bathrooms</span>
                                    </div>
                                    <div class="">4</div>
                                </div>
                            </div>
                    </div>
                   
                </div>
                <div class="deals-object-page-main__right-column w-100">
                    <nav class="deals__right-column__wrapper-nav">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-documents-tab" data-toggle="tab" href="#nav-documents" role="tab" aria-controls="nav-documents" aria-selected="true">Documents</a>
                            <a class="nav-item nav-link" id="nav-dealInfo-tab" data-toggle="tab" href="#nav-dealInfo" role="tab" aria-controls="nav-dealInfo" aria-selected="false">Deal info</a>
                            <a class="nav-item nav-link" id="nav-propertyInfo-tab" data-toggle="tab" href="#nav-propertyInfo" role="tab" aria-controls="nav-propertyInfo" aria-selected="false">Property info</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contacts</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <!-- start 1 -->
                        <div class="tab-pane fade show active" id="nav-documents" role="tabpanel" aria-labelledby="nav-documents-tab">
                            <div class="main-clients-section__head-block row mx-0 align-items-center justify-content-between col-12 px-0">
                                <div class="dropdown main-clients__dropdown row mx-0">
                                    <div class="main-clients__dropdown-title">Status</div>
                                    <a class="btn dropdown-toggle main-title-text" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Name</a>
                                        <a class="dropdown-item" href="#">Contact</a>
                                        <a class="dropdown-item" href="#">Status</a>
                                    </div>
                                </div>
                                <div class="">
                                <a href="#" class="btn-circle-span">
                                <span>.</span>
                                <span>.</span>
                                <span>.</span>
                            </a>
                                    <button class="btn green-btn">Upload</button>
                                </div>
                            </div>
                            <table class="col-12 property-campaigns__table-section ">
                                    <thead>
                                        <tr>
                                        <th>STATUS</th>
                                        <th>DOCUMENT</th>
                                        <th>UPDATED</th>
                                        <th>COMMENTS</th>
                                        <th>DEADLINE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- 1 row -->
                                        <tr>
                                            <td class="active <!-- done--> <!-- pasive-->">
                                                <a href="#" class="main-green-btn btn">To Do</a>
                                                <a href="#" class="main-rose-btn btn">In Review</a>
                                                <a href="#" class="main-gray-btn btn">Done</a>
                                            </td>
                                            <td><a href="#">molddisclosure.pdf</a></td>
                                            <td></td>
                                            <td>2 new commnets</td>
                                            <td>in 2 days</td>
                                        </tr>
                                    <!-- 2 row -->
                                        <tr>
                                            <td class="active <!-- done--> <!-- pasive-->">
                                                <a href="#" class="main-green-btn btn">To Do</a>
                                                <a href="#" class="main-rose-btn btn">In Review</a>
                                                <a href="#" class="main-gray-btn btn">Done</a>
                                            </td>
                                            <td><a href="#">leadbaseddisclosure.pdf</a></td>
                                            <td>2 days ago</td>
                                            <td>1 new commnets</td>
                                            <td>in 3 days</td>
                                        </tr>
                                    <!-- 3 row -->
                                        <tr>
                                            <td class="<!-- active--> <!-- done--> pasive">
                                                <a href="#" class="main-green-btn btn">To Do</a>
                                                <a href="#" class="main-rose-btn btn">In Review</a>
                                                <a href="#" class="main-gray-btn btn">Done</a>
                                            </td>
                                            <td><a href="#">simple document.docx</a></td>
                                            <td>3 days ago</td>
                                            <td>2 new commnets</td>
                                            <td>in 5 days</td>
                                        </tr>
                                    <!-- 4 row -->
                                        <tr>
                                            <td class="<!-- active--> <!-- done--> pasive">
                                                <a href="#" class="main-green-btn btn">To Do</a>
                                                <a href="#" class="main-rose-btn btn">In Review</a>
                                                <a href="#" class="main-gray-btn btn">Done</a>
                                            </td>
                                            <td><a href="#">simple document.docx</a></td>
                                            <td>3 days ago</td>
                                            <td>2 new commnets</td>
                                            <td>in 5 days</td>
                                        </tr>
                                        <!-- 5 row -->
                                        <tr>
                                            <td class="<!-- active--> done <!--pasive-->">
                                                <a href="#" class="main-green-btn btn">To Do</a>
                                                <a href="#" class="main-rose-btn btn">In Review</a>
                                                <a href="#" class="main-gray-btn btn">Done</a>
                                            </td>
                                            <td><a href="#">leadbaseddisclosure.pdf</a></td>
                                            <td>8 days ago</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        <!-- end 2 -->

                        <!-- start 2 -->
                        <div class="tab-pane fade" id="nav-dealInfo" role="tabpanel" aria-labelledby="nav-dealInfo-tab">
                            2
                        </div>
                        <!-- end 2 -->

                        <!-- start 3 -->
                        <div class="tab-pane fade" id="nav-propertyInfo" role="tabpanel" aria-labelledby="nav-propertyInfo-tab">
                            3
                        </div>
                        <!-- end 3 -->

                        <!-- start 4 -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            4
                        </div>
                        <!-- end 4 -->
                    </div>
                </div>
             </div>
        </section>
        <!-- end section -->
    </main>

    
     <!-- footer -->
     <?php include 'footer.php';?>

