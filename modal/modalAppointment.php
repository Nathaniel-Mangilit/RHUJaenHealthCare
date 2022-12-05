    <!-- Event Modal-->
        <div class="modal fade" id="DentalAppointment" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-success p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send Request</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-5">
                        <form id="formEvent"  class="form-a" onsubmit="return false">
                              <div class="row">
                                <div class=" mb-2 bg-gradient-success">
                                  <div class="row">

                                  <div class="col-md-6 mb-2"> 
                                    <div class="form-group">
                                      <label class="pb-2" for="Type">First Name<span class="text-danger">*</span></label>
                                      <input type="text" id="_fname" name="title" class="form-control form-control-md form-control-a" placeholder="" required>
                                    </div>
                                  </div>

                                <div class="col-md-6 mb-2">
                                  <div class="form-group">
                                <label class="pb-2" for="Type">Last Name<span class="text-danger">*</span></label>
                                <input type="text" id="_lname" name="title" class="form-control form-control-md form-control-a" placeholder="" required>
                                  </div>
                                </div>

                                <div class="col-md-3 mb-2">
                                  <div class="form-group">
                                <label class="pb-2" for="Type">Age<span class="text-danger">*</span></label>
                                <input type="number" id="_age" class="form-control form-control-md form-control-a" placeholder=""required>
                                  </div>

                                </div>
                                <div class="col-md-4 mb-2">
                                  <div class="form-group">
                                <label class="pb-2" for="Type">Gender<span class="text-danger">*</span></label>
                                          <div class="col-md-12"> 
                                           <select id="_gender" class="form-select" aria-label="Default select">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            </select>
                                          </div>
                                  </div>
                                </div>
                                <div class="col-md-5 mb-2">
                                  <div class="form-group">
                                    <label class="pb-2" for="Type">Contact Number<span class="text-danger">*</span></label>
                                    <input type="number" min="11" maxlength="11"  id="_ContactNo" class="form-control form-control-md form-control-a" placeholder=""required/>
                                  </div>
                                </div>
                                <div class="col-md-7 mb-2">
                                  <div class="form-group">
                                    <label class="pb-2" for="Type">Address<span class="text-danger">*</span></label>
                                    <input type="txt" id="_address" class="form-control form-control-md form-control-a" placeholder=""required>
                                  </div>
                                </div>
                                <div class="col-md-5 mb-2">
                                  <div class="form-group">
                                    <label class="pb-2" for="Type">Purpose of Request<span class="text-danger">*</span></label>
                                         <div class="col-md-12"> 
                                           <select id="_service" class="form-select" aria-label="Default select">
                                            <option value="1">Medical</option>
                                            <option value="2">Dental</option>
                                           </select>
                                          </div>
                                  </div>
                                </div>                               
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="Type">Enter Email</label>
                                      <input type="Email" name="email" class="form-control form-control-md form-control-a" id="_email" placeholder="example@yahoo.com">
                                    </div>
                                  </div>


                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label for="Type">Enter Valid ID</label>
                                      <input type="file" name="file" class="form-control form-control-md form-control-a" id="_file" placeholder="<Optional>">
                                    </div>
                                  </div>  
                                  
                                </div>
                                   
                                <div class="col-md-5">
                                  <button type="submit" onclick="createRequest()" class="btn bg-gradient-success text-white btn-sm col-md-12">Submit</button>
                                </div>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- End of Event Modal-->