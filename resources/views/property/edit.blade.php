@include('admin.navbar')

{{-- Css for list page --}}
<style>
    #box-submit{
        padding: 20px 40px;
        width: 60%;
        border: solid black 1px;
         margin: auto;
    }
    #box-head{
        width: 60%;
        background: rgb(0, 0, 0);
        padding: 30px;
        border: solid black 1px;
        border-bottom: 0;
        margin: auto;
        text-align: center;
        color: #00ffff;
        
    }
</style>
<!-- CREATE property area -->
<div class="container">
     &nbsp;
    <div class="row">
        <div class="col">
            <div id="box-head"><h1 style="font-size:5vw;">Update Property</h1></div>
         
            <div class="card" id="box-submit">
            {{-- Alert message --}}
            @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}    
                    </div>                    
                @endif

                {{-- When you create a upload field you need to use this code:enctype="multipart/form-data --}}
            &nbsp;
            <form action="{{route('property.update',[$property->id])}}" method="POST" enctype="multipart/form-data">@csrf
                {{method_field('PUT')}}
           

                <div class="card-body">
                    <div class="form-row ">
                    <div class="form-group col-md-6">
                        <label for="name">Property Name </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$property->name}}">
                         @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">Property Price</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$property->price}}">
                         @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                     {{-- end of form-row --}}
                    </div>
                  
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">
                        {{$property->description}}</textarea>
                         @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-row ">
                        
                         <div class="form-group col-md-4">
                            <label for="parking">Parking</label>
                            <input type="number" name="parking" class="form-control @error('parking') is-invalid @enderror" value="{{$property->parking}}">
                            @error('parking')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                         <div class="form-group col-md-4">
                            <label for="bathroom">Bathroom</label>
                            <input type="number" name="bathroom" class="form-control @error('bathroom') is-invalid @enderror" value="{{$property->bathroom}}">
                            @error('bathroom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                         <div class="form-group col-md-4">
                            <label for="room">Room</label>
                            <input type="number" name="room" class="form-control @error('room') is-invalid @enderror" value="{{$property->room}}">
                            @error('room')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                     {{-- end of form-row --}}
                    </div>
               
                     <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="status">Property Status</label>
                        <select id="basic" class="selectpicker show-tick form-control" name="status" title="Select Your Property Status" >
                    
                            <option value="rent" >Rent {{$property->status}}</option>
                            <option value="sale">Sale {{$property->status}}</option>
                           
                        </select>

                        {{-- <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"> --}}
                         @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                   
                    <div class="form-group col-md-4">
                        <label for="zone">Property Zone</label>
                        <select id="lunchBegins" class="selectpicker" name="zone" type="text" class="form-control" title="Select Your Property Zone" placeholder="Super villa ...">
                            <option value="north">North {{$property->zone}}</option>
                            <option value="south">South  {{$property->zone}}</option>
                            <option value="west">West  {{$property->zone}}</option>
                            <option value="east">East  {{$property->zone}}</option>
                            
                        </select>
                        {{-- <input type="text" name="zone" class="form-control @error('zone') is-invalid @enderror"> --}}
                         @error('zone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="type">Property Type</label>
                         <select id="basic" class="selectpicker show-tick form-control" name="type" title="Select Your Property Type">
                            <option value="land">Land {{$property->type}}</option>
                            <option value="self_Contain">Self_Contain {{$property->type}}</option>
                            <option value="flat">Flat {{$property->type}}</option>  
                            <option value="hotel">Hotel {{$property->type}}</option>  
                            <option value="duplex">Duplex {{$property->type}}</option>  
                        </select>

                        {{-- <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"> --}}
                         @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- end of form-row --}}
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="city">Property City</label>
                        <select id="lunchBegins" class="selectpicker" name="city" data-live-search="true" data-live-search-style="begins" title="Select your city">
                            <option value="flaq">Flaq {{$property->city}}</option>
                            <option value="quatre_Borne">Quatre_Borne {{$property->city}}</option>
                            <option value="flic_en_Flac">Flic_en_Flac {{$property->city}}</option>
                            <option value="grandbay">Grandbay {{$property->city}}</option>    
                        </select>

                        {{-- <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"> --}}
                         @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="phone">Telephone</label>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$property->phone}}">
                         @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                  
                    <div class="form-group col-md-4">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{$property->image}}">
                         @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- end of form-row --}}
                    </div>


                    <div class="form-group">
                        <button class="btn btn btn-finish btn-primary" type="submit">
                            Update
                        </button>
                    </div>
                    &nbsp;
                    
                </div>
            
            </form>
            </div>

        </div>

    </div>
     &nbsp;
</div>



@include('backend.footer')
