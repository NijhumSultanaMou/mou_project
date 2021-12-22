@extends('layouts.admin.app')

@section('content')
    <h3 class="text-center mb-5 mt-5">Add Property</h3>
    <div class="col-md-6 offset-md-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-6">
                    <label for="division">Owner name</label>
                    <input type="text" required class="form-control" placeholder="Owner Name" name="name">
                </div>
                <div class="col-md-6">
                    <label for="division">Phone number</label>
                    <input type="text"  class="form-control" placeholder="Phone" name="phone" required>
                </div>
                <div class="col-md-6">
                    <label for="division">Division</label>
                    <select name="division" id="division" class="form-control" required>
                            <option>Select Division</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Sylhet">Sylhet</option>

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="district">District</label>
                    <select class="form-control" name="district" required>
                        <option>Select District</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Bogura">Bogura</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Natore">Natore</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Feni">Feni</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="location">Area</label>
                    <select class="form-control" name="location" required>
                        <option>Select Area</option>
                        <option value="Mirpur-10">Mirpur-10</option>
                        <option value="Mirpur-1">Mirpur-1</option>
                        <option value="Mirpur-2">Mirpur-2</option>
                        <option value="Mirpur-11">Mirpur-11</option>
                        <option value="Mirpur-11.5">Mirpur-11.5</option>
                        <option value="Mirpur-12">Mirpur-12</option>
                        <option value="Dhanmondi-15">Dhanmondi-15</option>
                        <option value="Dhanmondi-32">Dhanmondi-32</option>
                        <option value="Dhanmondi-27">Dhanmondi-27</option>
                        <option value="Sobhanbag">Sobhanbag</option>
                        <option value="Sukrabad">Sukrabad</option>
                        <option value="Tollabag">Tollabag</option>
                        <option value="Mohammadpur">Mohammadpur</option>
                        <option value="Badda">Badda</option>
                        <option value="Farmgate">Farmgate</option>
                        <option value="Greenroad">Greenroad</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Gulishtan">Gulishtan</option>
                        <option value="Motijheel">Motijheel</option>
                        <option value="Mohakhali">Mohakhali</option>
                        <option value="Mouchak">Mouchak</option>
                        <option value="Paltan">Paltan</option>
                        <option value="Rampura">Rampura</option>
                        <option value="SignBoard">SignBoard</option>
                        <option value="Jatrabari">Jatrabari</option>
                        <option value="Azimpur">Azimpur</option>
                        <option value="Shyamoli">Shyamoli</option>
                        <option value="Kalyanpur">Kalyanpur</option>
                        <option value="Kamlapur">Kamlapur</option>
                        <option value="Monipuripara">Monipuripara</option>
                        <option value="Dhanmondi-27">Dhanmondi-27</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="tenant_type">Tenant Type</label>
                    <select class="form-control" name="tenant_type" required>
                        <option>Select Tenant type</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Family">Family</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="lift">Lift</label>
                    <select class="form-control" name="lift">
                        <option value="yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="rent">Rent:</label>
                    <input type="number" class="form-control" name="rent" placeholder="Rent(BDT)" min="500" required>
                </div>
                <div class="col-md-6">
                    <label for="room-quantity">Room Quantity:</label>
                    <input type="number" name="room_quantity" class="form-control" min="1" max="10" required>
                </div>
                <div class="col-md-6">
                    <label for="washroom-quantity">Washroom Quantity:</label>
                    <input type="number" name="washroom_quantity" class="form-control" min="1" max="10" required>
                </div>
                <div class="col-md-6">
                    <label for="balcony_quantity">Balcony Quantity:</label>
                    <input type="number" name="balcony_quantity" class="form-control" min="1" max="10" required>
                </div>
                <div class="col-md-6">
                    <label for="floor">Floor:</label>
                    <input type="number" name="floor" class="form-control" min="1" max="10">
                </div>
                <div class="col-md-12">
                    <label for="Comment">Comment</label>
                    <textarea name="comment" id="comment" cols="30" rows="20" class="form-control"></textarea>
                </div>

                <div class="col-md-12 mb-2 mt-2">
                    <div class="form-group">
                        <span style="color: black; ">Image</span>
                        <div class="custom-file">
                            <input type="file" name="image" class="dropify" data-allowed-file-extensions="jpg png jpeg" data-show-errors="true" data-show-loader="true" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center d-flex ml-auto">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>
@endsection

