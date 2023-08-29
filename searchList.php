<?php
include 'layout/header.php';
?>
<div id="wrapper-searchList">
    <div class="searchList">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="filter bg-white">
                        <h3>Filter</h3>
                        <div class="borderDash"></div>
                        <form class="position-relative form-search">
                            <input type="text" id="search" name="" class="form-control" placeholder="Keywords..." />
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="borderDash"></div>
                        <h3>Category</h3>
                        <div class="d-flex align-items-center my-4">
                            <div class="d-flex align-items-center">
                                <input class="bg-black mr-2" type="radio" name="" id="rent" />
                                <label class="form-check-label label-category" for="rent">
                                    Rent
                                </label>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <input class="bg-black mr-2" type="radio" name="" id="rent" />
                                <label class="form-check-label label-category" for="rent">
                                    Rent
                                </label>
                            </div>
                            <div class="d-flex align-items-center ml-4">
                                <input class="bg-black mr-2" type="radio" name="" id="rent" />
                                <label class="form-check-label label-category" for="rent">
                                    Rent
                                </label>
                            </div>
                        </div>
                        <h3>Select Types</h3>
                        <div class="d-flex flex-column mb-4">
                            <select name="" id="" class="mt-2 w-100 select-types">
                                <option value="0" selected>Keywords...</option>
                                <option value="1">Keywords...</option>
                                <option value="2">Keywords...</option>
                            </select>
                            <select name="" id="" class="mt-2 w-100 select-types mt-3">
                                <option value="0" selected>Keywords...</option>
                                <option value="1">Keywords...</option>
                                <option value="2">Keywords...</option>
                            </select>
                            <select name="" id="" class="mt-2 w-100 select-types mt-3">
                                <option value="0" selected>Keywords...</option>
                                <option value="1">Keywords...</option>
                                <option value="2">Keywords...</option>
                            </select>
                            <select name="" id="" class="mt-2 w-100 select-types mt-3">
                                <option value="0" selected>Keywords...</option>
                                <option value="1">Keywords...</option>
                                <option value="2">Keywords...</option>
                            </select>
                        </div>
                        <h3>Pricing Scale</h3>
                        <div slider id="slider-distance">
                        <div>
                            <div inverse-left style="width:70%;"></div>
                            <div inverse-right style="width:70%;"></div>
                            <div range style="left:30%;right:40%;"></div>
                            <span thumb style="left:30%;"></span>
                            <span thumb style="left:60%;"></span>
                            <div sign style="left:30%;">
                            <span id="value">$30000</span>
                            </div>
                            <div sign style="left:60%;">
                            <span id="value">$60000</span>
                            </div>
                        </div>
                        <input type="range" tabindex="0" value="30000" max="100000" min="0" step="1" oninput="
                        this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                        var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                        var children = this.parentNode.childNodes[1].childNodes;
                        children[1].style.width=value+'%';
                        children[5].style.left=value+'%';
                        children[7].style.left=value+'%';children[11].style.left=value+'%';
                        children[11].childNodes[1].innerHTML='$'+this.value;" />

                        <input type="range" tabindex="0" value="60000" max="100000" min="0" step="1" oninput="
                        this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                        var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                        var children = this.parentNode.childNodes[1].childNodes;
                        children[3].style.width=(100-value)+'%';
                        children[5].style.right=(100-value)+'%';
                        children[9].style.left=value+'%';children[13].style.left=value+'%';
                        children[13].childNodes[1].innerHTML='$'+this.value;" />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="d-flex justify-content-between align-items-center bg-white result-search">
                        <div class="statisticView ml-2">
                            <span>Showing 5 of 20 Results</span>
                        </div>
                        <div class="sortBy">
                            <label for="">Sort By :</label>
                            <select class="ml-1" name="" id="" value="latest">
                                <option value="latest">Latest</option>
                            </select>
                        </div>
                    </div>
                    <div class="list-result">
                        <div class="info-person-search-list mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="assets/images/avatar.png" class="w-100 h-100 object-fit-cover" alt="" />
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="location-search-list">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>United States</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-star mr-1 star"></i>
                                            <span>4.7</span>
                                            <span>(66)</span>
                                        </div>
                                    </div>
                                    <div class="namePerson mt-4">John Perry</div>
                                    <div class="jobName mt-4">Digital Marketing</div>
                                    <div class="available mt-3">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>Available Today</span>
                                    </div>
                                    <div class="borderDash"></div>
                                    <div class="d-flex justify-content-between align-items-center book-search-list mb-3">
                                        <div><span class="price">$2,300</span> <span class="session">/Session</span></div>
                                        <a href='./checkout.php' class="btn-booking" >Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-person-search-list mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="assets/images/avatar.png" class="w-100 h-100 object-fit-cover" alt="" />
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="location-search-list">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>United States</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-star mr-1 star"></i>
                                            <span>4.7</span>
                                            <span>(66)</span>
                                        </div>
                                    </div>
                                    <div class="namePerson mt-4">John Perry</div>
                                    <div class="jobName mt-4">Digital Marketing</div>
                                    <div class="available mt-3">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>Available Today</span>
                                    </div>
                                    <div class="borderDash"></div>
                                    <div class="d-flex justify-content-between align-items-center book-search-list mb-3">
                                        <div><span class="price">$2,300</span> <span class="session">/Session</span></div>
                                        <a href='./checkout.php' class="btn-booking" >Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-person-search-list mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="assets/images/avatar.png" class="w-100 h-100 object-fit-cover" alt="" />
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="location-search-list">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>United States</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-star mr-1 star"></i>
                                            <span>4.7</span>
                                            <span>(66)</span>
                                        </div>
                                    </div>
                                    <div class="namePerson mt-4">John Perry</div>
                                    <div class="jobName mt-4">Digital Marketing</div>
                                    <div class="available mt-3">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>Available Today</span>
                                    </div>
                                    <div class="borderDash"></div>
                                    <div class="d-flex justify-content-between align-items-center book-search-list mb-3">
                                        <div><span class="price">$2,300</span> <span class="session">/Session</span></div>
                                        <a href='./checkout.php' class="btn-booking" >Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-person-search-list mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="assets/images/avatar.png" class="w-100 h-100 object-fit-cover" alt="" />
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="location-search-list">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>United States</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-star mr-1 star"></i>
                                            <span>4.7</span>
                                            <span>(66)</span>
                                        </div>
                                    </div>
                                    <div class="namePerson mt-4">John Perry</div>
                                    <div class="jobName mt-4">Digital Marketing</div>
                                    <div class="available mt-3">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>Available Today</span>
                                    </div>
                                    <div class="borderDash"></div>
                                    <div class="d-flex justify-content-between align-items-center book-search-list mb-3">
                                        <div><span class="price">$2,300</span> <span class="session">/Session</span></div>
                                        <a href='./checkout.php' class="btn-booking" >Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-person-search-list mt-4">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="assets/images/avatar.png" class="w-100 h-100 object-fit-cover" alt="" />
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="location-search-list">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>United States</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-star mr-1 star"></i>
                                            <span>4.7</span>
                                            <span>(66)</span>
                                        </div>
                                    </div>
                                    <div class="namePerson mt-4">John Perry</div>
                                    <div class="jobName mt-4">Digital Marketing</div>
                                    <div class="available mt-3">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>Available Today</span>
                                    </div>
                                    <div class="borderDash"></div>
                                    <div class="d-flex justify-content-between align-items-center book-search-list mb-3">
                                        <div><span class="price">$2,300</span> <span class="session">/Session</span></div>
                                        <a href='./checkout.php' class="btn-booking" >Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='text-center'>
                    <div class="d-inline-block mt-4">
                            <ul id="pagination">
                                <li class="item">
                                    <a href="#"><i class="fa-solid fa-chevron-left"></i></a>
                                </li>
                                <li class="item">
                                    <a href="#">1</a>
                                </li>
                                <li class="item active">
                                    <a href="#">2</a>
                                </li>
                                <li class="item">
                                    <a href="#">3</a>
                                </li>
                                <li class="item">
                                    <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
                                </li>
                            </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>