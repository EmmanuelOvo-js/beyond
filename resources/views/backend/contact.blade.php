@include('backend.navbar')

 <!-- property area -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"> 
                        <div class="" id="contact1">                        
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                                    <p>13/25 shibuia
                                        <br>Tokyo 
                                        <br>45Y 73J 
                                        <br>
                                        <strong>Japan</strong>
                                    </p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Call center</h3>
                                    <p class="text-muted">This number is toll free if calling from
                                        Great Britain otherwise we advise you to use the electronic
                                        form of communication.</p>
                                    <p><strong>+33 555 444 333</strong></p>
                                </div>
                                <!-- /.col-sm-4 -->
                                <div class="col-sm-4">
                                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                    <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                    <ul>
                                        <li><strong><a href="mailto:">info@company.com</a></strong>   </li>
                                        {{-- <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li> --}}
                                    </ul>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                            <hr>
                            
                            <hr>
                            <h2>Contact form</h2>
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
                                     {{-- <div class="col-sm-6">
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
                                    </div> --}}

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
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>
                        </div>
                    </div>    
                </div>
               
            </div>
        </div>

@include('backend.footer')