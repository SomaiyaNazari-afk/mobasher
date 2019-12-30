@extends('layouts.master')

@section('title')
    Product Registration
@endsection

@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Register</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group col-md-12 row">
                    <label for="firstname" class="col-md-4 col-form-label text-md-right">{{__('First Name: ') }}</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="User first name " name="firstname" required>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{__('Last Name: ') }}</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="User last name " name="lastname" required>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{__('Email: ') }}</label>

                    <div class="col-md-8">
                        <input type="email" class="form-control" placeholder="User email " name="email" required>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="gender" class="col-md-4 col-form-label text-md-right">{{__('Gender: ')}}</label>

                    <div class="col-md-8">
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female<br>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{__('Phone: ')}}</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="User Phone " name="phone" required>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="dob" class="col-md-4 col-form-label text-md-right">{{__('Date of Birth: ')}}</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" placeholder="Date of Birth" name="phone" required>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="country" class="col-md-4 col-form-label text-md-right">{{__('Country: ')}}</label>

                    <div class="col-md-8">
                        <select name="country" class="form-control">
                            <option value="country">country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="India">India</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Iraq">Iraq</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label for="city" class="col-md-4 col-form-label text-md-right">{{__('City: ')}}</label>

                    <div class="col-md-8">
                        <select name="city" class="form-control">
                            <option value="City">City</option>
                            <option value="Kabul">Kabul</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Istanbul">Istanbul</option>
                            <option value="Dushanbe">Dushanbe</option>
                            <option value="Tashkent">Tashkent</option>
                            <option value="Baghdad">Baghdad</option>

                        </select>
                    </div>
                </div>

                <div class="form-group col-md-12 row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{__('Address: ')}}</label>

                    <div class="col-md-8">
                        <textarea placeholder="Employee home address " class="form-control" name="address" style="height:100px;"> </textarea>
                    </div>
                </div>

                <center>
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <br>
                </center>
            </div></div>
    </div>
</div>
</div>

