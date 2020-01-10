<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/style2.css')}}">
</head>
  <body>





<!-- Start Sidebar -->
<nav class="navbar navbar-expand-md navbar-dark bg-custom">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    <span class="menu-collapsed">DMT</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>


<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Charts</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Reports</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Tables</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>            
           
        </ul>
    </div> <!-- End Sidebar -->

    <!-- MAIN -->
    <div class="col">
        
        <div class="container">
          <div class="row justify-content-center mt-5">
            <div class="col-md-4">
              <div class="card  card-twos">
                <div class="card-body">
                  <div class="row justify-content-center text-center color-text">
                    <div class="col-md-4">
                      <h2>23</h2>
                      <h6>users</h6>
                    </div>

                    <div class="col-md-4">
                      <h2>300</h2>
                      <h6>product</h6>
                    </div>

                    <div class="col-md-4">
                      <h2>23</h2>
                      <h6>pending</h6>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card card-modif"></div>
            </div>

            <div class="col-md-4">
              <div class="card card-twos">
                <div class="card-body">
                  <div class="row justify-content-center text-center color-text">
                    <div class="col-md-4">
                      <h2>23</h2>
                      <h6>shipping</h6>
                    </div>

                    <div class="col-md-4">
                      <h2>23</h2>
                      <h6>complete</h6>
                    </div>

                    <div class="col-md-4">
                      <h2>23</h2>
                      <h6>pending</h6>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card card-modif"></div>
            </div>

            <div class="col-md-4">
              <div class="card card-twos">
                <div class="card-body">a</div>
              </div>
              <div class="card card-modif"></div>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-12">

              
              <div class="card card-twos">
                <div class="card-header card-header-two">listing product</div>
                <div class="card-body">
                      <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Desc Produk</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                      @foreach($produks as $produk)
                      <tr>
                        <td><a href="#">{{$produk->id}}</a></td>
                        <td class="font-weight-600">{{$produk->nama_produk}}
                          <div class="bullet"></div>
                              <a href="{{route('showit', ['produk' => $produk->id])}}">View</a>
                            </div>
                        </td>
                        <td>{!!str_limit($produk->desc_produk, 10)!!}</td>
                        <td><img src="{{asset($produk->image)}} width="30" class=" mr-1"></td>
                        <td>{{$produk->price_produk}}</td>
                        <td>
                          <a href="{{route('edit_blog_path', ['produk' => $produk->id])}}" class="btn btn-primary mt-3"><i class="fas fa-pen"></i></a>
                             <form action="{{route('delete_produk', ['produk' => $produk->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                             <button type="submit" class="btn btn-danger mt-1 mb-3" value=""><i class="fas fa-trash"></i> </button>   
                              </form>
                        </td>
                      </tr>
                    @endforeach
                    {{$produks->links()}}
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>
           <div class="row justify-content-center mt-5">
            <div class="col-md-2">
              <div class="card card-twos">
                   <div class="card-body">
                      <i class="fas fa-tshirt"></i>
                  </div>
              </div>
             </div>
             <div class="col-md-2">
              <div class="card card-twos">
                   <div class="card-body">
                      <i class="fas fa-futbol"></i>
                  </div>
              </div>
             </div>
             <div class="col-md-2">
              <div class="card card-twos">
                   <div class="card-body">
                      <i class="fas fa-car"></i>
                  </div>
              </div>
             </div>
             <div class="col-md-2">
              <div class="card card-twos">
                   <div class="card-body">
                    <i class="fas fa-laptop-code"></i>
                  </div>
              </div>
             </div>
             <div class="col-md-2">
              <div class="card card-twos">
                   <div class="card-body">
                    <i class="fas fa-book-open"></i>
                  </div>
              </div>
             </div>
             <div class="col-md-2">
              <div class="card card-twos">
                   <div class="card-body">
                    <i class="fas fa-gamepad"></i>
                  </div>
              </div>
             </div>

            </div>

          <div class="row justify-content-center mt-5">
            <div class="col-md-12">

              
              <div class="card card-twos">
                <div class="card-header card-header-two">best product</div>
                  <div class="card-body">
                    <div class="row text-center justify-content-center">
                      <div class="col-md-2">
                        <div class="card card-twos">
                          <div class="card-body">
                                <i class="fas fa-book-open"></i>
                          </div>
                          </div>
                          <h3>Books</h3>
                      </div>
                      <div class="col-md-2">
                        <div class="card card-twos">
                         <div class="card-body">
                              <i class="fas fa-laptop-code"></i>
                         </div>
                        </div>
                        <h3>Laptop</h3>
                      </div>
                       <div class="col-md-2">
                        <div class="card card-twos">
                            <div class="card-body">
                                <i class="fas fa-tshirt"></i>
                            </div>
                        </div>
                         <h3>T-shirts</h3>
                       </div>
                    </div>
                  </div>
              </div>
            </div>


          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-8">
              <div class="card card-twos">
                <div class="card-header card-header-two">sell product</div>
                  <div class="card-body">
                      
                  <form action="{{route('upload_produk')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                      </div>
                       <div class="form-group">
                        <label for="catatan_produk">Catatan Produk</label>
                        <textarea name="catatan_produk" rows="10" class="form-control" id=""></textarea>
                      </div>
                      <div class="form-group">
                        <label for="desc_produk">Desk Product</label>
                        <textarea name="desc_produk" rows="10" class="form-control" id="article-ckeditor"></textarea>
                      </div>

                     <div class="form-group">
                        <label for="price_produk">Harga Produk</label>
                        <input type="text" name="price_produk" class="form-control">
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Produk</button>
                      </div>
                   

                  </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-twos">
                <div class="card-header card-header-two">product detail</div>
                  <div class="card-body">
                      <div class="form-group">
                            <input type="file" name="files" class="form-control">
                        </div>
                        
                 

                       
                       <div class="form-group">
                        <label for="berat">Berat barang</label>
                        <input type="text" name="berat" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="merek">Merak</label>
                        <input type="text" name="merek" class="form-control">
                      </div>
                      </form>
                  </div>
              </div>
            </div>

          </div>
        </div>  
      
    </div>
</div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/696f01ebdb.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
  </body>
</html>