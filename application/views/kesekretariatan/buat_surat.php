<main id="main" class="main">
  <div class="pagetitle">
    <h1><?= $title; ?></h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Kop Surat</label>
              </div>
            </div>

            <form>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Logo 1</label>
                <div class="col-sm-10"> <input class="form-control" type="file" id="formFile"></div>
              </div>
              
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Logo 2</label>
                <div class="col-sm-10"> <input class="form-control" type="file" id="formFile"></div>
              </div>

               <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10"> <input type="text" class="form-control" id="inputText"></div>
               </div>
              
               <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10"> <input type="text" class="form-control" id="inputText"></div>
               </div>

               <div class="text-right">
                 <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                 <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
               </div>
            </form>
            
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">No Surat</label>
              </div>
            </div>
            
              <form class="row g-3">
                <div class="col-md-12"> <label for="inputName5" class="form-label">Your Name</label> <input type="text" class="form-control" id="inputName5"></div>

                           <div class="col-md-6"> <label for="inputEmail5" class="form-label">Email</label> <input type="email" class="form-control" id="inputEmail5"></div>

                           <div class="col-md-6"> <label for="inputPassword5" class="form-label">Password</label> <input type="password" class="form-control" id="inputPassword5"></div>

                           <div class="col-12"> <label for="inputAddress5" class="form-label">Address</label> <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St"></div>

                           <div class="col-12"> <label for="inputAddress2" class="form-label">Address 2</label> <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"></div>

                           <div class="col-md-6"> <label for="inputCity" class="form-label">City</label> <input type="text" class="form-control" id="inputCity"></div>

                           <div class="col-md-4">

                              <label for="inputState" class="form-label">State</label> 

                              <select id="inputState" class="form-select">

                                 <option selected>Choose...</option>

                                 <option>...</option>

                              </select>

                           </div>

                           <div class="col-md-2"> <label for="inputZip" class="form-label">Zip</label> <input type="text" class="form-control" id="inputZip"></div>

                           <div class="col-12">

                              <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck"> <label class="form-check-label" for="gridCheck"> Check me out </label></div>

                           </div>

                           <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>

                        </form>

                     </div>

                  </div>

               </div>

               <div class="col-lg-6">

                  <div class="card">

                     <div class="card-body">

                        <h5 class="card-title">Vertical Form</h5>

                        <form class="row g-3">

                           <div class="col-12"> <label for="inputNanme4" class="form-label">Your Name</label> <input type="text" class="form-control" id="inputNanme4"></div>

                           <div class="col-12"> <label for="inputEmail4" class="form-label">Email</label> <input type="email" class="form-control" id="inputEmail4"></div>

                           <div class="col-12"> <label for="inputPassword4" class="form-label">Password</label> <input type="password" class="form-control" id="inputPassword4"></div>

                           <div class="col-12"> <label for="inputAddress" class="form-label">Address</label> <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"></div>

                           <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>

                        </form>

                     </div>

                  </div>

                  <div class="card">

                     <div class="card-body">

                        <h5 class="card-title">No Labels / Placeholders as labels Form</h5>

                        <form class="row g-3">

                           <div class="col-md-12"> <input type="text" class="form-control" placeholder="Your Name"></div>

                           <div class="col-md-6"> <input type="email" class="form-control" placeholder="Email"></div>

                           <div class="col-md-6"> <input type="password" class="form-control" placeholder="Password"></div>

                           <div class="col-12"> <input type="text" class="form-control" placeholder="Address"></div>

                           <div class="col-md-6"> <input type="text" class="form-control" placeholder="City"></div>

                           <div class="col-md-4">

                              <select id="inputState" class="form-select">

                                 <option selected>Choose...</option>

                                 <option>...</option>

                              </select>

                           </div>

                           <div class="col-md-2"> <input type="text" class="form-control" placeholder="Zip"></div>

                           <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>

                        </form>

                     </div>

                  </div>

                  <div class="card">

                     <div class="card-body">

                        <h5 class="card-title">Floating labels Form</h5>

                        <form class="row g-3">

                           <div class="col-md-12">

                              <div class="form-floating"> <input type="text" class="form-control" id="floatingName" placeholder="Your Name"> <label for="floatingName">Your Name</label></div>

                           </div>

                           <div class="col-md-6">

                              <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email"> <label for="floatingEmail">Your Email</label></div>

                           </div>

                           <div class="col-md-6">

                              <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label></div>

                           </div>

                           <div class="col-12">

                              <div class="form-floating"><textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea><label for="floatingTextarea">Address</label></div>

                           </div>

                           <div class="col-md-6">

                              <div class="col-md-12">

                                 <div class="form-floating"> <input type="text" class="form-control" id="floatingCity" placeholder="City"> <label for="floatingCity">City</label></div>

                              </div>

                           </div>

                           <div class="col-md-4">

                              <div class="form-floating mb-3">

                                 <select class="form-select" id="floatingSelect" aria-label="State">

                                    <option selected>New York</option>

                                    <option value="1">Oregon</option>

                                    <option value="2">DC</option>

                                 </select>

                                 <label for="floatingSelect">State</label>

                              </div>

                           </div>

                           <div class="col-md-2">

                              <div class="form-floating"> <input type="text" class="form-control" id="floatingZip" placeholder="Zip"> <label for="floatingZip">Zip</label></div>

                           </div>

                           <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>

                        </form>

                     </div>

                  </div>

               </div>

            </div>

         </section>

      </main>