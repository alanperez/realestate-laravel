@extends ('layouts.main')
@section('page-title', 'Listings - Max Realtor')
@section('content')
<div class="listings-page">
    <div class="listings-city">
      <img class="lisitings-city__img" src="https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="house">
      <h1 class="listings-city__title">Available Homes</h1>
    </div>
    <div class="listings-filter">
  
      <div class="listings-filter__wrapper">
        <div class="listings-filter__option">
          Any Price <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
          All Beds <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
          Home type <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
          More <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__button">
          Search
        </div>
      </div>
    </div>
    <div class="listings-properties">
      <div class="container">
        <div class="row">
          @for ($i = 1; $i <= 12; $i++)
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <a href="/listing/2123-grand-ave-miami-fl-33456/1" class="listings-properties__item">
                <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg">
                <div class="listings-properties__saved ">
                  <i class="fa-solid fa-heart"></i>
                </div>
  
                <span class="listings-properties__item-price">$250,000</span>
                <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i> 7260 SQFT</span>
                <span class="listings-properties__item-address">

                </span>
                <div class="listings-properties__item-line"></div>
                <span class="listings-properties__item-owner">
                  Dallas Builders
                </span>
              </a>
            </div>
          @endfor
          
          
          
        </div>
      </div>
      
      
      
    </div>
  </div>
@endsection