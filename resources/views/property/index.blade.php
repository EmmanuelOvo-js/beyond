@include('admin.navbar')

 <!-- property area -->
        {{-- <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
            <div class="container">   
                <div class="row">
                    
                        <div class="col-md-12 "> 
                            <div class="col-md-12  padding-top-40 properties-page">
                        <span class="float-end">
                                <a href="{{route('property.create')}}">
                                    <button class="btn btn-primary">Add Property</button>
                                </a>
                              </span>
                            <div class="col-xs-10 page-subheader sorting pl0">


                                {{-- <ul class="sort-by-list">
                                    <li class="active">
                                        <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                            Property Date <i class="fa fa-sort-amount-asc"></i>					
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                            Property Price <i class="fa fa-sort-numeric-desc"></i>						
                                        </a>
                                    </li>
                                </ul><!--/ .sort-by-list-->

                                <div class="items-per-page">
                                    <label for="items_per_page"><b>Property per page :</b></label>
                                    <div class="sel">
                                        <select id="items_per_page" name="per_page">
                                            <option value="3">3</option>
                                            <option value="6">6</option>
                                            <option value="9">9</option>
                                            <option selected="selected" value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                            <option value="45">45</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div><!--/ .sel-->
                                </div><!--/ .items-per-page--> --}}
                                

                                
                            </div>

                            {{-- <div class="col-xs-2 layout-switcher">
                                <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                                <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                            </div><!--/ .layout-switcher--> --}}
                        </div>

                        <div class="col-md-12 "> 
                             @if (count($properties)>0)
                                @foreach ($properties as $key=>$property)

                            <div id="list-type" class="proerty-th">
                                <div class="col-sm-6 col-md-3 p0">
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
                                             <div class="dealer-action">                                        
                                                    <a href="{{route('property.edit',[$property->id])}}" class="button">Edit </a>
                                                    <a href="{{route('property.view',[$property->id])}}" class="button">View</a>
                                                    {{-- <a href="{{route('property.destroy',[$property->id])}}" class="button">Delete </a> --}}

                                            </div>
                                            <form method="POST" id="delete-form{{$property->id}}" 
                                                        action="{{route('property.destroy',[$property->id])}}">
                                                        @csrf {{ method_field('DELETE') }} 
                                                    </form>
                                                    <a href="#" onclick="if(confirm('Do you want to delete?')){
                                                        
                                                        event.preventDefault();
                                                        document.getElementById('delete-form{{$property->id}}').submit()

                                                    }else{
                                                        event.preventDefault();
                                                    }"> <input type="submit" value="Delete" class="btn btn-danger"></a>
                                           
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