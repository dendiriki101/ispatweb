@extends('layout.tools.main_indo')

@section('content')



<section class="cs_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">

        <div class="col-md-12 row">

<div class="contact_detail col-md-4">
    <br>
    <h2 style="color: #fff;">Contact Details</h2>
    <P style="color: #fff; font-size: 14px;">We' love to hear from you. Our friendly team is always here to chat.</P>

    <br>
    <div class="detail-info">
      <div class="col">
        <div class="row">
          <i class="fa-solid fa-location-dot"></i>
          <h5>
            Office
          </h5>
        </div>
        <p>Desa Kedungturi, Taman Sidoarjo PO BOX 1083 Surabaya 60010 - Indonesia</p>
      </div>
    </div>
    <br>

    <!-- <div class="detail-info">
      <div class="col">
        <div class="row">
          <i class="fa-solid fa-clock"></i>
          <h5>
            Open hours
          </h5>
        </div>
        <p>Monday - Friday <br>9.00 - 18.00 WIB</p>
      </div>
    </div>
    <br> -->

    <div class="detail-info">
        <div class="col">
          <div class="row">
            <i class="fa-solid fa-envelope"></i>
            <h5>
              Email to us
            </h5>
          </div>
          <p>Sales & Marketing : <br> <a href="mailto:marketing.indo@mittalsteel.com">marketing.indo@mittalsteel.com</a> <br> <br>

            Customer Support : <br> <a href="mailto:marketing.indo@mittalsteel.com">custsupp.indo@mittalsteel.com</a> <br> <br>

            Career : <br> <a href="mailto:hrd.indo@mittalsteel.com">hrd.indo@mittalsteel.com</a> <br> <br>

            Webmaster : <br> <a href="mailto:webmaster.indo@mittalsteel.com">webmaster.indo@mittalsteel.com</a></p>
        </div>
      </div>
      <br>

      <div class="detail-info">
        <div class="col">
          <div class="row">
            <i class="fa-solid fa-phone"></i>
            <h5>
              Call us
            </h5>
          </div>
          <p>TELP : (62) 31-7887000 <br> <br>
            FAX : (62) 31-7887500 (031) <br> <br>
            Sales & Marketing(WA) : <br> +62 81 5515 2222</p>
        </div>
      </div>
      <br>

      <div class="social">
        <div class="col">

            <a href="">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://www.linkedin.com/company/pt-ispat-indo">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://instagram.com/ispatindo_group/">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://m.youtube.com/@IspatNow">
              <i class="fa-brands fa-youtube"></i>
            </a>

        </div>
      </div>
      <br>

  </div>



<div class="col-md-8 customer">
            <br>
            <h2 class="hider-font">Customer Center</h2>
            <br>
            <form method="POST" action="/customer-post_indo">
                @csrf
              <div class="form-row">
                <div class="col-md-6 mb-3">
                    <h6>Option</h6>
                    <select class="form-control" name="option">
                        <option selected disabled>Select an option</option>
                        <option value="Complain">Complain</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Suggestion">Suggestion</option>
                        <option value="Enquiry">Enquiry</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                  <h6>About</h6>
                  <div class="form-check form-check-inline" style="bottom: -7px;">
                      <input class="form-check-input" type="radio" name="about" id="about" value="Product"
                          checked>
                      <label class="form-check-label" for="leftRadio">Product</label>
                  </div>
                  <div class="form-check form-check-inline ml-2" style="bottom: -7px;">
                      <input class="form-check-input" type="radio" name="about" id="about"
                          value="Service">
                      <label class="form-check-label" for="rightRadio">Service</label>
                  </div>
              </div>

              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Name</label>
                  <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Company</label>
                  <input type="text" class="form-control" name="company" id="validationDefault02" placeholder="Company" required>
                </div>
              </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Email</label>
                    <input type="text" class="form-control" name="email" id="validationDefault01" placeholder="Email" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Telephone</label>
                    <input type="text" class="form-control" name="telphone" id="validationDefault02" placeholder="Telephone" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <h6>Country</h6>
                      <select class="form-control" name="country" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                        <option value="Select Country"selected disabled>Select Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. Swaziland)</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Holy See">Holy See</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Korea">North Korea</option>
                        <option value="North Macedonia">North Macedonia</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestine State">Palestine State</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

                      </select>
                  </div>
                  <div class="col-md-8 address">
                    <label for="validationDefault02">Address</label>
                    <input type="text" class="form-control" name="location" id="validationDefault02" placeholder="Address">
                  </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <h6>Wire Rod Product</h6>
                    <select class="form-control" name="grade1" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                        <option value="LowCarbon">Low Carbon</option>
                        <option value="HighCarbon">High Carbon</option>
                        <option value="MediumCarbon">Medium Carbon</option>
                        <option value="ElectrodeGrade">Electrode Grade</option>
                        <option value="AlloyGrade">Alloy Grade</option>
                        <option value="CHQGrade">CHQGrade</option>
                        <option value="BarinCoil">Bar in Coil</option>
                        <option value="Other">Other</option>
                      {{-- @foreach ($grades as $grade)
                        @if (old('grade') == $grade->id)
                            <option value="{{ $grade->name }}" selected>{{ $grade->name }}
                            </option>
                        @else
                            <option value="{{ $grade->name }}">{{ $grade->name }}</option>
                        @endif
                       @endforeach --}}
                    </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <h6>Grade</h6>
                      <input type="text" class="form-control" name="grade2" id="validationDefault02" placeholder="Grade" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h6>Total Quantity in MT</h6>
                        <input type="text" class="form-control" name="grade3" id="validationDefault02" placeholder="Total Quantity in MT" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                      </div>
                  </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Size</label>
                  <input type="text" class="form-control" name="size" id="validationDefault03" placeholder="Size" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault04">End Application</label>
                  <input type="text" class="form-control" name="end" id="validationDefault04" placeholder="End Application" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <h6>Message</h6>
                            <div class="input-group flex-nowrap">
                                <textarea name="massage" class="form-control" placeholder="Your Message..." aria-describedby="addon-wrapping"
                                    id="" cols="30" rows="10"></textarea>
                            </div>
                </div>
              </div>
              <div class="button-submit-from">
              <button type="submit">Submit form</button>
            </div>
            <br>
        </div>

        </div>
      </div>
    </div>
  </section>
@endsection
