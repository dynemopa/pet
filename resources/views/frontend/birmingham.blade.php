@extends('frontend.layout.main')

@section('content')
<style>
  input[type="text"] {
  width: 100%;
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}

input[type="text"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="text"] {
  padding-left: 40px;
}

.inputWithIcon {
  position: relative;
}

.inputWithIcon i {
  position: absolute;
  left: 0;
  top: 8px;
  padding: 9px 8px;
  color: #aaa;
  transition: 0.3s;
}

.inputWithIcon input[type="text"]:focus + i {
  color: dodgerBlue;
}

.inputWithIcon.inputIconBg i {
  background-color: #aaa;
  color: #fff;
  padding: 9px 4px;
  border-radius: 4px 0 0 4px;
}

.inputWithIcon.inputIconBg input[type="text"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
.d11
{
  border-radius: 30px 0px 0px 30px;
}
.d111
{
  border-radius: 30px 30px 30px 30px;
  background-color: #eaece3;
  margin-top: 50px
}
.d112{
  color: gray;
  font-size: 14px;
  font-family: "Times New Roman", Times, serif;

}

</style>


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
            <p style="font-size: 25px">Listings in "Birmingham"</p>
            <div class="col-md-12">
              <div class="row d111">
                <div class="col-md-4"><img src="https://mb5.bfe.myftpupload.com/wp-content/uploads/2022/03/12_707_Richard_Arrington_Blvd12_mls-400x314.jpg" width="100%" class="d11"><p style="color: white; margin-top: -39px;  margin-left: 10px;">USD 150 /night</p></div>
                <div class="col-md-8">
                  <p class="">Charming 1BR at The Waites</p>
                  <p class="d112">Every apartment is outfitted with all the modern essentials including: custom-designed furnishings, a fully-equipped kitchen ...</p>
                  <p class="d112"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;Downtown Montgomery, Birmingham, Birmingham</p>
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