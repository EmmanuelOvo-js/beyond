@include('backend.navbar')

  <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-2">
                        <div class="">
                            <div class="row">
                                <div class="light-slide-item">            
                                    <div class="clearfix">
                                        <div class="favorite-and-print">
                                            {{-- <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                                <i class="fa fa-star-o"></i>
                                            </a> --}}
                                            <a class="printer-icon " href="javascript:window.print()">
                                                <i class="fa fa-print"></i> 
                                            </a>
                                        </div> 

                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                            <li data-thumb="{{asset('image')}}/{{$property->image}}"> 
                                                <img src="{{asset('image')}}/{{$property->image}}" />
                                            </li>
                                            <li data-thumb="{{asset('image')}}/{{$property->image}}"> 
                                                <img src="{{asset('image')}}/{{$property->image}}" />
                                            </li>
                                            <li data-thumb="{{asset('image')}}/{{$property->image}}"> 
                                                <img src="{{asset('image')}}/{{$property->image}}" />
                                            </li>
                                            <li data-thumb="{{asset('image')}}/{{$property->image}}"> 
                                                <img src="{{asset('image')}}/{{$property->image}}" />
                                            </li>                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-property-wrapper">

                                <div class="section">
                                    <h4 class="s-property-title">Description</h4>
                                    <div class="s-property-content">
                                        <p>{{$property->description}}</p>
                                    </div>
                                </div>
                                <!-- End description area  -->

                                <div class="section additional-details">

                                    <h4 class="s-property-title">Additional Details</h4>

                                    <ul class="additional-details-list clearfix">
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">BATHROOM</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$property->bathroom}}</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">ROOM</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$property->room}}</span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">PARKING</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$property->parking}}</span>
                                        </li>

                                        {{-- <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Yes</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">View</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal View,Direct ew</span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Waterfront Description:</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Intracoastal Front,Ocean Access</span>
                                        </li>  --}}

                                    </ul>
                                </div>  
                                <!-- End additional-details area  -->

                                {{-- <div class="section property-features">      

                                    <h4 class="s-property-title">Features</h4>                            
                                    <ul>
                                        <li><a href="properties.html">Swimming Pool</a></li>   
                                        <li><a href="properties.html">3 Stories</a></li>
                                        <li><a href="properties.html">Central Cooling</a></li>
                                        <li><a href="properties.html">Jog Path 2</a></li>
                                        <li><a href="properties.html">2 Lawn</a></li>
                                        <li><a href="properties.html">Bike Path</a></li>
                                    </ul>

                                </div>
                                <!-- End features area  --> --}}

                                <div class="section property-video"> 
                                    <h4 class="s-property-title">Property Video</h4> 
                                    <div class="video-thumb">
                                        <a class="video-popup" href="yout" title="Virtual Tour">
                                            <img src="{{asset('beyond/assets/img/property-video.jpg')}}" class="img-responsive wp-post-image" alt="Exterior">            
                                        </a>
                                    </div>
                                </div>
                                <!-- End video area  -->

                                <div class="section property-share"> 
                                    <h4 class="s-property-title">Share width your friends </h4> 
                                    <div class="roperty-social">
                                        <ul> 
                                            <li><a title="Share this on facebok " href="#"><img src="{{asset('beyond/assets/img/social_big/facebook_grey.png')}}"></a></li> 
                                            <li><a title="Share this on twitter " href="#"><img src="{{asset('beyond/assets/img/social_big/twitter_grey.png')}}"></a></li> 
                                            <li><a title="Share this on linkedin " href="#"><img src="{{asset('beyond/assets/img/social_big/linkedin_grey.png')}}"></a></li>  
                                            {{-- <li><a title="Share this on dribbble " href="#"><img src="{{asset('beyond/assets/img/social_big/dribbble_grey.png')}}"></a></li>                                         
                                            
                                            <li><a title="Share this on delicious " href="#"><img src="{{asset('beyond/assets/img/social_big/delicious_grey.png')}}"></a></li> 
                                            <li><a title="Share this on tumblr " href="#"><img src="{{asset('beyond/assets/img/social_big/tumblr_grey.png')}}"></a></li> 
                                            <li><a title="Share this on digg " href="#"><img src="{{asset('beyond/assets/img/social_big/digg_grey.png')}}"></a></li>  --}}
                                            
                                                                                  
                                        </ul>
                                    </div>
                                </div>
                                <!-- End video area  -->
                            </div>
                        </div>

                        {{-- <div class="similar-post-section padding-top-40"> 
                          
                            <div id="prop-smlr-slide_0"> 
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="{{route('property.view',[$property->id])}}" ><img src="{{asset('image')}}/{{$property->image}}"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Super nice villa </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Area :</b> 120m </span>
                                        <span class="proerty-price pull-right"> $ 300,000</span> 
                                    </div>
                                </div> 
                               
                            </div>
                        
                        </div> --}}
                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right property-style2">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">
                                        <div class="single-property-header">                                          
                                            <h1 class="property-title">{{$property->name}}</h1>
                                            <span class="property-price">RS {{$property->price}}</span>
                                        </div>

                                        <div class="property-meta entry-meta clearfix ">   

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-tag">                                                                                      
                                                    <img src="{{asset('beyond/assets/img/icon/sale-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Status</span>
                                                    <span class="property-info-value">For {{$property->status}}</span>
                                                </span>
                                            </div>
{{-- 
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info icon-area">
                                                    <img src="{{asset('beyond/assets/img/icon/room-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Area</span>
                                                    <span class="property-info-value">3500<b class="property-info-unit">Sq Ft</b></span>
                                                </span>
                                            </div> --}}

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed">
                                                    <img src="{{asset('beyond/assets/img/icon/bed-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Bedrooms</span>
                                                    <span class="property-info-value">{{$property->room}}</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="{{asset('beyond/assets/img/icon/cars-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Bathrooms</span>
                                                    <span class="property-info-value">{{$property->bathroom}}</span>
                                                </span>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="{{asset('beyond/assets/img/icon/os-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Bathrooms</span>
                                                    <span class="property-info-value">3.5</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="{{asset('beyond/assets/img/icon/room-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Garages</span>
                                                    <span class="property-info-value">{{$property->parking}}</span>
                                                </span>
                                            </div>

                                            {{-- <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-garage">
                                                    <img src="{{asset('beyond/assets/img/icon/shawer-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Garages</span>
                                                    <span class="property-info-value">2</span>
                                                </span>
                                            </div> --}}


                                        </div>
                                        <div class="dealer-section-space">
                                            <span>Dealer information</span>
                                        </div>
                                        <div class="clear">
                                            {{-- <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="" class="img-circle fa fa-user">
                                                </a>
                                            </div> --}}
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name ">
                                                    {{-- <a href="">Nathan James</a> --}}
                                                    <span class="fa fa-user" > Real Estate Agent</span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    {{-- <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a> --}}
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    {{-- <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a> --}}
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                                <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                                <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                            </ul>
                                            <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>

                                   
  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>

                                     <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city">Property</label>
                                            <select id="lunchBegins" class="selectpicker" name="city" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                <option value="">Select Property</option>
                                                @foreach (App\Models\Property::all() as $property)
                                                    <option value="{{$property->id}}">
                                                        {{$property->name}}
                                                    </option>
                                                @endforeach   
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telephone</label>
                                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>

                            &nbsp;

                            <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ads her  </h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                    <img src="{{asset('beyond/assets/img/ads.jpg')}}">
                                </div>
                            </div>
                            

                            {{-- <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Smart search</h3>
                                </div>
                                <div class="panel-body search-widget">
                                    <form action="" class=" form-inline"> 
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Key word">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-6">

                                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                                        <option>New york, CA</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6">

                                                    <select id="basic" class="selectpicker show-tick form-control">
                                                        <option> -Status- </option>
                                                        <option>Rent </option>
                                                        <option>Boy</option>
                                                        <option>used</option>  

                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label for="price-range">Price range ($):</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[0,450]" id="price-range" ><br />
                                                    <b class="pull-left color">2000$</b> 
                                                    <b class="pull-right color">100000$</b>                                                
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="property-geo">Property geo (m2) :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[50,450]" id="property-geo" ><br />
                                                    <b class="pull-left color">40m</b> 
                                                    <b class="pull-right color">12000m</b>                                                
                                                </div>                                            
                                            </div>
                                        </fieldset>                                

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label for="price-range">Min baths :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[250,450]" id="min-baths" ><br />
                                                    <b class="pull-left color">1</b> 
                                                    <b class="pull-right color">120</b>                                                
                                                </div>

                                                <div class="col-xs-6">
                                                    <label for="property-geo">Min bed :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                                           data-slider-max="600" data-slider-step="5" 
                                                           data-slider-value="[250,450]" id="min-bed" ><br />
                                                    <b class="pull-left color">1</b> 
                                                    <b class="pull-right color">120</b>

                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" checked> Fire Place</label>
                                                    </div> 
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox"> Dual Sinks</label>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" checked> Swimming Pool</label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" checked> 2 Stories </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> Laundry Room </label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox"> Emergency Exit</label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox" checked> Jog Path </label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox"> 26' Ceilings </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-12"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox"> Hurricane Shutters </label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12">  
                                                    <input class="button btn largesearch-btn" value="Search" type="submit">
                                                </div>  
                                            </div>
                                        </fieldset>                                     
                                    </form>
                                </div>
                            </div>  --}}

                        </aside>
                    </div>

                </div>

            </div>
        </div>

@include('backend.footer')