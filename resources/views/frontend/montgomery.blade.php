@extends('frontend.layout.main')

@section('content')


<div class="container-fluid">
  <div class="col-md-12">
    <div class="row" style="margin-top: 70px">
      <div class="col-md-7" style="height:600px; overflow-y:scroll">
          <div class="row">
            <div class="col-md-8">
              <div class="inputWithIcon">
                <input type="text" placeholder="Where do You want  to go ?">
                <i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Check-in"  id="checkindate" name="checkindate">
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="check-out"  id="checkoutdate" name="checkoutdate">
                <i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Guests">
                <i class="fa  fa-user fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Rooms"  list="browsers" >
                <datalist id="browsers" style="height: 20px">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </datalist>
                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
             
            </div>

            <div class="col-md-4">
             
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="All Types"  list="browsers1" >
                <datalist id="browsers1">
                  <option value="All Types">All Types</option>
                  <option value="Apartment (6)">Apartment (6)</option>
                  
                </datalist>
                <i class="fa  fa-building fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="All Sizes"  list="allsizes" >
                <datalist id="allsizes">
                  <option value="All Sizes">All Sizes</option>
                  <option value="Private Room (6)">Private Room (6)</option>
                  
                </datalist>
                <i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>
            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Bedrooms"  list="Bedrooms" >
                <datalist id="Bedrooms"  style="height: 20px">
                  
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </datalist>
                <i class="fa fa-bed fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>

            <div class="col-md-4">
              <div class="inputWithIcon">
                <input type="text" placeholder="Baths"  list="Baths" >
                <datalist id="Baths"  style="height: 20px">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                 </datalist>
                <i class="fa  fa-bath fa-lg fa-fw" aria-hidden="true"></i>  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Price range: <b>200 to 0</b></p>
              <input type="range" min="1" max="100" value="0" class="slider" id="myRange">
             
            </div>
          </div>
          <section>
            <p>Listings in "Montgomery"</p>
            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/montgomeryimg')}}"><img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/b3ad365b-b1ff-4a9b-9e6f-b2b201fdaab7-400x314.jpeg" width="100%" class="d11"></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD 150 /night</p></div>
                <div class="col-md-8">
                  <p class="d113"><a href="{{url('/montgomeryimg')}}">Spacious 1BR at 79 Commerce</a></p>
                  <p class="d112">Located in the Heart of downtown Montgomery in the Alabama region, there is no equal. ...</p>
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Downtown Montgomery, Downtowns, Montgomery, Montgomery</p>
                  <p class="d112"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Apartment / Private room</p>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/montgomeryimg')}}"><img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2015/04/05-400x314.jpeg" width="100%" class="d11"></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD 150 /night</p></div>
                <div class="col-md-8">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span style="    margin-left: 295px;background-color: #111010; color: white;">Available</span>
                  <p class="d113"><a href="{{url('/montgomeryimg')}}">Charming 1BR at 79 Commerce</a></p>
                  <p class="d112">Located in the Heart of downtown Montgomery in the Alabama region, there is no equal. ...</p>
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Downtown Montgomery, Downtowns, Montgomery, Montgomery</p>
                  <p class="d112"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Apartment / Private room</p>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/montgomeryimg')}}"><img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/04-400x314.jpg" width="100%" class="d11"></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD 150 /night</p></div>
                <div class="col-md-8">
                  <p class="d113"><a href="{{url('/montgomeryimg')}}">Bright 1 BR at 79 Commerce</a></p>
                  <p class="d112">Located in the Heart of downtown Montgomery in the Alabama region, there is no equal. ...</p>
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Downtowns, Montgomery, Montgomery</p>
                  <p class="d112"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Apartment / Private room</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/montgomeryimg')}}"><img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/02-1-400x314.jpeg" width="100%" class="d11"></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD 150 /night</p></div>
                <div class="col-md-8">
                  <p class="d113"><a href="{{url('/montgomeryimg')}}">Vibrant 1BR at 79 Commerce</a></p>
                  <p class="d112">Located in the Heart of downtown Montgomery in the Alabama region, there is no equal. ...</p>
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Downtowns, Montgomery, Montgomery</p>
                  <p class="d112"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Apartment / Private room</p>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><a href="{{url('/montgomeryimg')}}"><img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/01-400x314.jpeg" width="100%" class="d11"></a><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD 150 /night</p></div>
                <div class="col-md-8">
                  <p class="d113"><a href="{{url('/montgomeryimg')}}">Cozy 1BR at 79 Commerce</a></p>
                  <p class="d112">Located in the Heart of downtown Montgomery in the Alabama region, there is no equal. ...</p>
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Downtowns, Montgomery, Montgomery</p>
                  <p class="d112"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Apartment / Private room</p>
                </div>
              </div>
            </div>
          </section>
      </div>
     







      {{-- MAP DIV --}}
      <div class="col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.091620339562!2d77.63270171437962!3d27.49752594128974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3973731c342ccfcd%3A0xe39fe31a55b256f5!2sRatanlal%20Phool%20Katori%20Devi%20School%20Mathura!5e0!3m2!1sen!2sin!4v1659440098553!5m2!1sen!2sin"  height="600" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      {{-- MAP DIV END --}}
    </div>
  </div>
</div>

@endsection