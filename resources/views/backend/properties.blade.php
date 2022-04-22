@include('backend.navbar')

  <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                     
                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
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

                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">  
                                                <input class="button btn largesearch-btn" value="Search" type="submit">
                                            </div>  
                                        </div>
                                    </fieldset>                                     
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                          
                            <div class="panel-heading">
                                <h3 class="panel-title">Recommended</h3>
                            </div>

                            <div class="panel-body recent-property-widget">
                                @if (count($properties)>0)
                                @foreach ($properties as $key=>$property)
                                        <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="{{route('property.view',[$property->id])}}"><img src="{{asset('image')}}/{{$property->image}}"></a>
                                               
                                                &nbsp;
                                                &nbsp;
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="{{route('property.view',[$property->id])}}">{{$property->name}} </a></h6>
                                                <span class="property-price">RS {{$property->price}}</span>
                                            </div>
                                        </li>
                                   

                                    </ul>
                            @endforeach

                            @else
                                <td>No property to display</td>
                            @endif
                            </div>
                              
                        </div>
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 
                        
                    </div>

                    <div class="col-md-12 clear"> 
                        @if (count($properties)>0)
                        @foreach ($properties as $key=>$property)
                        <div id="list-type" class="proerty-th">
                            <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="{{route('property.view',[$property->id])}}" ><img src="{{asset('image')}}/{{$property->image}}"></a>
                                        </div>
                                        
                                        <div class="item-entry overflow">
                                           <h5><a href="{{route('property.view',[$property->id])}}"> {{$property->name}} </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Status :</b> {{$property->status}}  </span>
                                            <span class="proerty-price pull-right"> RS {{$property->price}} </span>
                                            <p style="display:none;">{{$property->description}}</p>
                                            <div class="property-icon">
                                                <img src="{{asset('beyond/assets/img/icon/bed.png')}}">({{$property->room}})|
                                                <img src="{{asset('beyond/assets/img/icon/shawer.png')}}">({{$property->bathroom}})|
                                                <img src="{{asset('beyond/assets/img/icon/cars.png')}}">({{$property->parking}})  
                                            </div>
                                        </div>


                                    </div>
                                </div> 

                    
                        </div>
                        @endforeach

                            @else
                                <td>No property to display</td>
                            @endif
                    </div>
                    
                    <div class="col-md-12"> 
                        <div class="pull-right">
                            <div class="pagination">
                                {{-- For pagination links to show up --}}
                                {{ $properties->links() }}   
                            </div>
                        </div>                
                    </div>
                </div>  
                </div>              
            </div>
        </div>

@include('backend.footer')