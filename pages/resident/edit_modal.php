<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Resident Information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT * from tblresident where id = '".$row['id']."' ");
        $erow = mysqli_fetch_array($edit_query);

        echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input name="txt_edit_lname" class="form-control input-sm" type="text" value="'.$erow['lname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_fname" class="form-control input-sm" type="text" value="'.$erow['fname'].'"/>
                            </div> 
                            <div class="col-sm-4">
                                <input name="txt_edit_mname" class="form-control input-sm" type="text" value="'.$erow['mname'].'"/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm" type="date" value="'.$erow['bdate'].'"/> 
                        </div>

                        <div class="form-group">
                            <label class="control-label">Barangay</label>
                            <input name="txt_edit_brgy" class="form-control input-sm" type="number" value="564"'.$erow['barangay'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Zone</label>
                            <input name="txt_edit_zone" class="form-control input-sm" type="number" value="55"'.$erow['zone'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Household #:</label>
                            <input name="txt_edit_householdnum" class="form-control input-sm" type="number" min="1" value="'.$erow['householdnum'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Differently-abled Person:</label>
                            <input name="txt_edit_dperson" class="form-control input-sm input-size" type="text" value="'.$erow['differentlyabledperson'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Blood Type:</label>
                            <select name="txt_edit_btype" class="form-control input-sm>
                            <option value="'.$erow['bloodtype'].'">' .$erow['bloodtype'].'</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Civil Status:</label>
                            <select name="txt_edit_cstatus" class="form-control input-sm>
                            <option value="'.$erow['civilstatus'].'">' .$erow['civilstatus'].'</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Separated">Separated</option>
                                <option value="Widowed ">Widowed </option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Length of Stay: (in Months)</label>
                            <input name="txt_edit_length" class="form-control input-sm" type="number" min="1" value="'.$erow['lengthofstay'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <select name="txt_edit_national" class="form-control input-sm">
                            <option value="'.$erow['nationality'].'">' .$erow['nationality'].'</option>
                            <option value="afghan">Afghan</option>
                                            <option value="albanian">Albanian</option>
                                            <option value="algerian">Algerian</option>
                                            <option value="american">American</option>
                                            <option value="andorran">Andorran</option>
                                            <option value="angolan">Angolan</option>
                                            <option value="antiguans">Antiguans</option>
                                            <option value="argentinean">Argentinean</option>
                                            <option value="armenian">Armenian</option>
                                            <option value="australian">Australian</option>
                                            <option value="austrian">Austrian</option>
                                            <option value="azerbaijani">Azerbaijani</option>
                                            <option value="bahamian">Bahamian</option>
                                            <option value="bahraini">Bahraini</option>
                                            <option value="bangladeshi">Bangladeshi</option>
                                            <option value="barbadian">Barbadian</option>
                                            <option value="barbudans">Barbudans</option>
                                            <option value="batswana">Batswana</option>
                                            <option value="belarusian">Belarusian</option>
                                            <option value="belgian">Belgian</option>
                                            <option value="belizean">Belizean</option>
                                            <option value="beninese">Beninese</option>
                                            <option value="bhutanese">Bhutanese</option>
                                            <option value="bolivian">Bolivian</option>
                                            <option value="bosnian">Bosnian</option>
                                            <option value="brazilian">Brazilian</option>
                                            <option value="british">British</option>
                                            <option value="bruneian">Bruneian</option>
                                            <option value="bulgarian">Bulgarian</option>
                                            <option value="burkinabe">Burkinabe</option>
                                            <option value="burmese">Burmese</option>
                                            <option value="burundian">Burundian</option>
                                            <option value="cambodian">Cambodian</option>
                                            <option value="cameroonian">Cameroonian</option>
                                            <option value="canadian">Canadian</option>
                                            <option value="cape verdean">Cape Verdean</option>
                                            <option value="central african">Central African</option>
                                            <option value="chadian">Chadian</option>
                                            <option value="chilean">Chilean</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="colombian">Colombian</option>
                                            <option value="comoran">Comoran</option>
                                            <option value="congolese">Congolese</option>
                                            <option value="costa rican">Costa Rican</option>
                                            <option value="croatian">Croatian</option>
                                            <option value="cuban">Cuban</option>
                                            <option value="cypriot">Cypriot</option>
                                            <option value="czech">Czech</option>
                                            <option value="danish">Danish</option>
                                            <option value="djibouti">Djibouti</option>
                                            <option value="dominican">Dominican</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="east timorese">East Timorese</option>
                                            <option value="ecuadorean">Ecuadorean</option>
                                            <option value="egyptian">Egyptian</option>
                                            <option value="emirian">Emirian</option>
                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                            <option value="eritrean">Eritrean</option>
                                            <option value="estonian">Estonian</option>
                                            <option value="ethiopian">Ethiopian</option>
                                            <option value="fijian">Fijian</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="finnish">Finnish</option>
                                            <option value="french">French</option>
                                            <option value="gabonese">Gabonese</option>
                                            <option value="gambian">Gambian</option>
                                            <option value="georgian">Georgian</option>
                                            <option value="german">German</option>
                                            <option value="ghanaian">Ghanaian</option>
                                            <option value="greek">Greek</option>
                                            <option value="grenadian">Grenadian</option>
                                            <option value="guatemalan">Guatemalan</option>
                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                            <option value="guinean">Guinean</option>
                                            <option value="guyanese">Guyanese</option>
                                            <option value="haitian">Haitian</option>
                                            <option value="herzegovinian">Herzegovinian</option>
                                            <option value="honduran">Honduran</option>
                                            <option value="hungarian">Hungarian</option>
                                            <option value="icelander">Icelander</option>
                                            <option value="indian">Indian</option>
                                            <option value="indonesian">Indonesian</option>
                                            <option value="iranian">Iranian</option>
                                            <option value="iraqi">Iraqi</option>
                                            <option value="irish">Irish</option>
                                            <option value="israeli">Israeli</option>
                                            <option value="italian">Italian</option>
                                            <option value="ivorian">Ivorian</option>
                                            <option value="jamaican">Jamaican</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="jordanian">Jordanian</option>
                                            <option value="kazakhstani">Kazakhstani</option>
                                            <option value="kenyan">Kenyan</option>
                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                            <option value="kuwaiti">Kuwaiti</option>
                                            <option value="kyrgyz">Kyrgyz</option>
                                            <option value="laotian">Laotian</option>
                                            <option value="latvian">Latvian</option>
                                            <option value="lebanese">Lebanese</option>
                                            <option value="liberian">Liberian</option>
                                            <option value="libyan">Libyan</option>
                                            <option value="liechtensteiner">Liechtensteiner</option>
                                            <option value="lithuanian">Lithuanian</option>
                                            <option value="luxembourger">Luxembourger</option>
                                            <option value="macedonian">Macedonian</option>
                                            <option value="malagasy">Malagasy</option>
                                            <option value="malawian">Malawian</option>
                                            <option value="malaysian">Malaysian</option>
                                            <option value="maldivan">Maldivan</option>
                                            <option value="malian">Malian</option>
                                            <option value="maltese">Maltese</option>
                                            <option value="marshallese">Marshallese</option>
                                            <option value="mauritanian">Mauritanian</option>
                                            <option value="mauritian">Mauritian</option>
                                            <option value="mexican">Mexican</option>
                                            <option value="micronesian">Micronesian</option>
                                            <option value="moldovan">Moldovan</option>
                                            <option value="monacan">Monacan</option>
                                            <option value="mongolian">Mongolian</option>
                                            <option value="moroccan">Moroccan</option>
                                            <option value="mosotho">Mosotho</option>
                                            <option value="motswana">Motswana</option>
                                            <option value="mozambican">Mozambican</option>
                                            <option value="namibian">Namibian</option>
                                            <option value="nauruan">Nauruan</option>
                                            <option value="nepalese">Nepalese</option>
                                            <option value="new zealander">New Zealander</option>
                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                            <option value="nicaraguan">Nicaraguan</option>
                                            <option value="nigerien">Nigerien</option>
                                            <option value="north korean">North Korean</option>
                                            <option value="northern irish">Northern Irish</option>
                                            <option value="norwegian">Norwegian</option>
                                            <option value="omani">Omani</option>
                                            <option value="pakistani">Pakistani</option>
                                            <option value="palauan">Palauan</option>
                                            <option value="panamanian">Panamanian</option>
                                            <option value="papua new guinean">Papua New Guinean</option>
                                            <option value="paraguayan">Paraguayan</option>
                                            <option value="peruvian">Peruvian</option>
                                            <option value="polish">Polish</option>
                                            <option value="portuguese">Portuguese</option>
                                            <option value="qatari">Qatari</option>
                                            <option value="romanian">Romanian</option>
                                            <option value="russian">Russian</option>
                                            <option value="rwandan">Rwandan</option>
                                            <option value="saint lucian">Saint Lucian</option>
                                            <option value="salvadoran">Salvadoran</option>
                                            <option value="samoan">Samoan</option>
                                            <option value="san marinese">San Marinese</option>
                                            <option value="sao tomean">Sao Tomean</option>
                                            <option value="saudi">Saudi</option>
                                            <option value="scottish">Scottish</option>
                                            <option value="senegalese">Senegalese</option>
                                            <option value="serbian">Serbian</option>
                                            <option value="seychellois">Seychellois</option>
                                            <option value="sierra leonean">Sierra Leonean</option>
                                            <option value="singaporean">Singaporean</option>
                                            <option value="slovakian">Slovakian</option>
                                            <option value="slovenian">Slovenian</option>
                                            <option value="solomon islander">Solomon Islander</option>
                                            <option value="somali">Somali</option>
                                            <option value="south african">South African</option>
                                            <option value="south korean">South Korean</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="sri lankan">Sri Lankan</option>
                                            <option value="sudanese">Sudanese</option>
                                            <option value="surinamer">Surinamer</option>
                                            <option value="swazi">Swazi</option>
                                            <option value="swedish">Swedish</option>
                                            <option value="swiss">Swiss</option>
                                            <option value="syrian">Syrian</option>
                                            <option value="taiwanese">Taiwanese</option>
                                            <option value="tajik">Tajik</option>
                                            <option value="tanzanian">Tanzanian</option>
                                            <option value="thai">Thai</option>
                                            <option value="togolese">Togolese</option>
                                            <option value="tongan">Tongan</option>
                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                            <option value="tunisian">Tunisian</option>
                                            <option value="turkish">Turkish</option>
                                            <option value="tuvaluan">Tuvaluan</option>
                                            <option value="ugandan">Ugandan</option>
                                            <option value="ukrainian">Ukrainian</option>
                                            <option value="uruguayan">Uruguayan</option>
                                            <option value="uzbekistani">Uzbekistani</option>
                                            <option value="venezuelan">Venezuelan</option>
                                            <option value="vietnamese">Vietnamese</option>
                                            <option value="welsh">Welsh</option>
                                            <option value="yemenite">Yemenite</option>
                                            <option value="zambian">Zambian</option>
                                            <option value="zimbabwean">Zimbabwean</option>
                                        </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm">
                                <option value="'.$erow['highestEducationalAttainment'].'">' .$erow['highestEducationalAttainment'].'</option>
                                <option>No schooling completed</option>
                                <option>Elementary</option>
                                <option>High school, undergrad</option>
                                <option>High school graduate</option>
                                <option>College, undergrad</option>
                                <option>Vocational</option>
                                <option>Bachelor’s degree</option>
                                <option>Master’s degree</option>
                                <option>Doctorate degree</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Land Ownership Status:</label>
                            <select name="ddl_edit_los" class="form-control input-sm">
                                <option value="'.$erow['landOwnershipStatus'].'">'.$erow['landOwnershipStatus'].'</option>
                                <option>Owned</option>
                                <option>Landless</option>
                                <option>Tenant</option>
                                <option>Care Taker</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Water Usage:</label>
                        	<select name="txt_edit_water" class="form-control input-sm input-size">
                                <option>'.$erow['waterUsage'].'</option>
                                <option>Faucet</option>
                                <option>Deep Well</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Remarks:</label>
                            <input name="txt_edit_remarks" class="form-control input-sm" type="text" value="'.$erow['remarks'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Username:</label>
                            <input name="txt_edit_uname" class="form-control input-sm" type="text" value="'.$erow['username'].'"/>
                        </div>

                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm">
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input name="txt_edit_bplace" class="form-control input-sm" type="text" value="'.$erow['bplace'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Total Household Member:</label>
                            <input name="txt_edit_householdmem" class="form-control input-sm" type="number" min="1" value="'.$erow['totalhousehold'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Relationship to Head:</label>
                            <input name="txt_edit_rthead" class="form-control input-sm" type="text" value="'.$erow['relationtohead'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <input name="txt_edit_occp" class="form-control input-sm" type="text" value="'.$erow['occupation'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Monthly Income:</label>
                            <input name="txt_edit_income" class="form-control input-sm" type="number" min="1" value="'.$erow['monthlyincome'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <select name="txt_edit_religion" class="form-control input-sm">
                            <option value="'.$erow['religion'].'" selected>'.$erow['religion'].'</option>
                                    <option value="Roman Catholic">Roman Catholic</option>
                                        <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                                        <option value="Evangelical Christianity">Evangelical Christianity</option>
                                        <option value="Other Protestant">Other Protestant </option>
                                        <option value="Seventh-day Adventism">Seventh-day Adventism</option>
                                        <option value="Aglipayan">Aglipayan</option>
                                        <option value="Bible Baptist Church">Bible Baptist Church</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Jehovahs Witnesses">Jehovahs Witnesses</option>
                                        </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Type of Valid ID:</label>
                            <select name="txt_edit_phno" class="form-control input-sm">
                            <option value="'.$erow['IDType'].'" selected>'.$erow['IDType'].'</option>
                                            <option value="UMID">UMID</option>
                                            <option value="Driver license">Driver license</option>
                                            <option value="NBI Clearance">NBI Clearance</option>
                                            <option value="Passport">Passport</option>
                                            <option value="Philhealth">Philhealth</option>
                                            <option value="TIN ID">TIN ID</option>
                                            <option value="National ID">National ID</option>
                                            <option value="PRC ID">PRC ID</option>
                                            <option value="Voters ID">Voters ID</option>
                                        </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Valid ID Number</label>
                            <input name="txt_edit_igpit" class="form-control input-sm" type="number" value="'.$erow['ValIDnum'].'"/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">House Ownership Status:</label>
                            <select name="ddl_edit_hos" class="form-control input-sm">

                                <option value="'.$erow['houseOwnershipStatus'].'" selected>'.$erow['houseOwnershipStatus'].'</option>
                                
                                <option value="Own Home">Own Home</option>
                                <option value="Rent">Rent</option>
                                <option value="Live with Parents/Relatives">Live with Parents/Relatives</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Lightning Facilities:</label>
                        	<select name="txt_edit_lightning" class="form-control input-sm input-size">
                                <option>'.$erow['lightningFacilities'].'</option>
                                <option>Electric</option>
                                <option>Lamp</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Former Address:</label>
                            <input name="txt_edit_faddress" class="form-control input-sm" type="text" value="'.$erow['formerAddress'].'"/>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Password:</label>
                            <input name="txt_edit_upass" class="form-control input-sm" type="password" value="'.$erow['password'].'"/>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
                        </div>

                    </div>

                    </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>