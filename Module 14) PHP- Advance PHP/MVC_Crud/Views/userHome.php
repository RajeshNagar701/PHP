<div class="album py-5 bg-light" style="height:180vh;">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card border-success" style="max-width: 65rem;padding: 2%;">
                    <h2> Profile </h2> <hr>
                    <div class="card-body">
                        <form method="post" id="profile">
                            <img src="<?php echo 'uploads/' . $selectData['Data'][0]->profile;  ?>" class="rounded mx-auto d-block" height="200" width="200" alt="Profile Photo">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="fname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="<?php echo $selectData['Data'][0]->fname;  ?>" value = "<?php echo $selectData['Data'][0]->fname; ?>" required="" readonly="">
                                </div>
                                <div class="col">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="<?php echo $selectData['Data'][0]->lname;  ?>" value = "<?php echo $selectData['Data'][0]->lname; ?>" required="" readonly="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $selectData['Data'][0]->email;  ?>" value = "<?php echo $selectData['Data'][0]->email; ?>" required="" readonly="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="mobile" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="<?php echo $selectData['Data'][0]->contact;  ?>" value = "<?php echo $selectData['Data'][0]->contact; ?>" required="" readonly="">
                                </div>
                                <div class="col">
                                    <label for="gender" class="form-label">Gender</label><br>
                                    <input type="radio" id="gender" name="gender" value="Male" 
                                    <?php
                                        if($selectData['Data'][0]->gender == 'Male'){
                                            echo "checked";
                                        }
                                    ?>
                                    disabled="">Male
                                    <input type="radio" id="gender" name="gender" value="Female"
                                    <?php
                                        if($selectData['Data'][0]->gender == 'Female'){
                                            echo "checked";
                                        }
                                    ?>
                                    disabled="">Female
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" rows="3" name="address" placeholder="address" required="" readonly="">
                                        <?php
                                            echo $selectData['Data'][0]->address;
                                        ?>
                                    </textarea>
                                </div>
                                <div class="col">
                                    <label for="inputState" class="form-label">State</label>
                                    <select class="form-select" id="inputState" aria-label="Default select example" required="" disabled="">
                                        <option disabled>Select</option>
                                        <option value="gj" 
                                        <?php
                                            if($selectData['Data'][0]->state == 'gj'){
                                                echo "selected";
                                            }
                                        ?>
                                        >Gujarat</option>
                                        <option value="dl"
                                        <?php
                                            if($selectData['Data'][0]->state == 'dl'){
                                                echo "selected";
                                            }
                                        ?>
                                        >Delhi</option>
                                        <option value="rj"
                                        <?php
                                            if($selectData['Data'][0]->state == 'rj'){
                                                echo "selected";
                                            }
                                        ?>
                                        >Rajasthan</option>
                                        <option value="mh"
                                        <?php
                                            if($selectData['Data'][0]->state == 'mh'){
                                                echo "selected";
                                            }
                                        ?>
                                        >Maharashtra</option>
                                        <option value="sk"
                                        <?php
                                            if($selectData['Data'][0]->state == 'sk'){
                                                echo "selected";
                                            }
                                        ?>
                                        >Sikkim</option>
                                        <option value="pb"
                                        <?php
                                            if($selectData['Data'][0]->state == 'pb'){
                                                echo "selected";
                                            }
                                        ?>
                                        >Punjab</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                     <?php $hobbies_arr = explode(',', $selectData['Data'][0]->hobbies); ?>
                                    <label for="hobbies" class="form-label">Hobbies</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="hobbies[]" value="Travelling" disabled=""
                                        <?php if(in_array('Travelling', $hobbies_arr)){   echo 'checked'; } ?>
                                        >
                                        <label class="form-check-label" for="inlineCheckbox1">Travelling</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="hobbies[]" value="Music" disabled=""
                                        <?php if(in_array('Music', $hobbies_arr)){   echo 'checked'; } ?>
                                        >
                                        <label class="form-check-label" for="inlineCheckbox2">Music</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="hobbies[]" value="Coding" disabled=""
                                        <?php if(in_array('Coding', $hobbies_arr)){   echo 'checked'; } ?>
                                        >
                                        <label class="form-check-label" for="inlineCheckbox3">Coding</label>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>