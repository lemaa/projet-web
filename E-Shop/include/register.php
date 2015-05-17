<div class="span7">
                    <h2>Register An Account</h2>
                        <form class="register-form" action="login.php" method="POST">
                          <label><span class="required">*</span> Your Personal Details</label>
                          <input class="input-block-level" type="text" placeholder="* Enter your first name" id="inputname" name="nom" />
                          <input class="input-block-level" placeholder="* Enter your last name" type="text" id="inputlastname" name="prenom" />
                          <input class="input-block-level" placeholder="* Enter your email address" type="text" id="inputemail" name="email"/>
                          <input class="input-block-level" placeholder="Enter your phone number" type="text" id="inputphone" name="tel" />
                          <label><span class="required">*</span> Shipping Address Details</label>
                          <input class="input-block-level" type="text" placeholder="* Enter your address" id="inputaddress" name="address"/>
                          <input class="input-block-level" placeholder="* Enter your city" type="text" id="inputcity" name="city"/>
                          <input class="input-block-level" placeholder="* Enter your post code" type="text" id="inputcode" name="zipcode"/>
                             <label><span class="required">*</span> Country / Region / State</label>
                             <select class="span5" name="country">
                            <option>--- Select Country ---</option>
                            <option value="Country #1">Country #1</option>
                            <option value="Country #2">Country #2</option>
                            <option value="Country #3">Country #3</option>
                            <option value="Country #4">Country #4</option>
                            <option value="Country #5">Country #5</option>
                            <option value="Country #6">Country #6</option>
                            </select>
                            
                             <label><span class="required">*</span> Choose Password</label>
                          <input class="input-block-level" placeholder="* Enter your password" type="text" id="inputpassword" name="password" />
                          <input class="input-block-level" placeholder="* Enter your password again" type="text" id="inputrepassword" name="username" />
	
                              <button class="btn btn-medium btn-general input-block-level" type="submit" name="envoyer2">Register your account today!</button>
                        </form>
					</div>