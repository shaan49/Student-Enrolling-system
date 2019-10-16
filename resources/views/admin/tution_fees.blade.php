 @extends('layout')

 @section('content')


          
       
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Basic Table</h2>
                  <table class="table">
                    <thead>
                      <tr class="">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        
            <div class="col-lg-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Striped Table</h2>
                  <table class="table table-striped">
                    <thead>
                      <tr class="">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Hoverable Table</h2>
                  <table class="table table-hover">
                    <thead>
                      <tr class="">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Table with contextual classes</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-active">
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr class="table-success">
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr class="table-warning">
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                      <tr class="table-danger">
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr class="table-info">
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Advanced Table</h2>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Invoice Subject</th>
                          <th>Client</th>
                          <th>VatNo.</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="">
                          <td>034</td>
                          <td>Designs</td>
                          <td>Client</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-success">Approved</label></td>
                          <td>$349</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                          <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                        <tr class="">
                          <td>035</td>
                          <td>Designs</td>
                          <td>Client</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-warning">Approved</label></td>
                          <td>$349</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                          <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                        <tr class="">
                          <td>036</td>
                          <td>Designs</td>
                          <td>Client</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-success">Approved</label></td>
                          <td>$349</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                          <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                        <tr class="">
                          <td>037</td>
                          <td>Designs</td>
                          <td>Client</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-danger">Rejected</label></td>
                          <td>$349</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                          <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                        <tr class="">
                          <td>038</td>
                          <td>Designs</td>
                          <td>Client</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-success">Approved</label></td>
                          <td>$349</td>
                          <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                          <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  @endsection