@extends ('layouts.account')


@section('page-title', 'Request Status - Dallas Builders')
@section('page-bg', 'https://images.pexels.com/photos/5874584/pexels-photo-5874584.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')

@section('content')
<div class="request-list">
    <h3>All Requests</h3>
    @for ($i = 0; $i < 10; $i++)
    <div class="request-list__wrapper">
        <div>
          <h3>8600 Thackery St </h3>
        <span class="request-list__details"><i class="fa-solid fa-bed"></i> 5 <i class="fa-solid fa-bath"></i> 5.2 <i class="fa-solid fa-ruler"></i> 7260 SQFT</span>
        </div>
        
        <div class="request-list__info">
          <span class="request-list__info-title">
            Status
          </span>
          <div class="request-list__info-status request-list__info-status--success request-list__info-status--canceled
          request-list__info-status--sold">
          Success
          </div>
        </div>
      </div>
      @endfor
</div>
@endsection
