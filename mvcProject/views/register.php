

<section class="container">
        <div class="form-design"><br />
            <form action="" method="">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <label for="" class="form-label">First Name</label> <br />
                        <input type="text" name="fname" class="form-control" /> <br />
                        <label for="" class="form-label">Email</label> <br />
                        <input type="text" name="email" class="form-control" /> <br />
                        <label for="" class="form-label">Contact Number</label> <br />
                        <input type="text" name="mobile" class="form-control" /> <br />
                        <label for="" class="form-label">Address</label> <br />
                        <textarea class="form-control" name="address"></textarea>
                        <label for="" class="form-label">Choose File</label> <br />
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Last Name</label><br />
                        <input type="text" name="lname" class="form-control" /> <br />
                        <label for="" class="form-label">Password</label> <br />
                        <input type="password" name="password" class="form-control" /> <br />
                        <label for="" class="form-label">Gender</label> <br />
                        <div class="form-check">
                            <input type="radio" name="gender" class="form-check-input" value="male" />
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gender" class="form-check-input" value="female" />
                            <label class="form-check-label">Female</label>
                        </div> <br />
                        <label for="" class="form-label">State</label> <br />
                        <select class="custom-select" name="state">
                            <option selected>Select the State</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Chittagonj">Chittagonj</option>
                        </select>
                        <br /><br />
                        <label for="" class="form-label">Hobbies</label> <br />
                        <input type="checkbox" name="hobbies[]" value="Music" /> Music<br />
                        <input type="checkbox" name="hobbies[]" value="Traveling" /> Traveling<br />
                        <input type="checkbox" name="hobbies[]" value="Coding" /> Coding<br />
                        <br />
                        <input type="submit" id="submitBtn" class="btn btn-lg btn-primary text-center"
                            value="Registration" />
                    </div>
                    <div class="col-md-2"></div>
                </div>

            </form>
        </div>
    </section>