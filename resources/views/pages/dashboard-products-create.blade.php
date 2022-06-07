@extends('layouts.dashboard')

@section('title')
    Add New Product
@endsection

@section('content')
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title ml-3 mt-3">Add New Product</h2>
              <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/dashboard-products.html">My Product</a></li>
                          <li class="breadcrumb-item active" aria-current="page">
                            Add New Produk
                          </li>
                        </ol>
                      </nav>
                    </div>
                  </div>
                </div>
              </section>
              <!-- <p class="dashboard-subtitle">
                Create your own product
              </p> -->
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <form action="">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Product Name</label>
                              <input type="text" class="form-control" id="name" aria-describedby="name" name="storeName"
                                value="Papel La Casa" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="price">Price</label>
                              <input type="number" class="form-control" id="price" aria-describedby="price" name="price"
                                value="200" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="category">Category</label>
                              <select name="category" id="category" class="form-control">
                                <option value="Furniture">Furniture</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="descrioption" id="editor" cols="30" rows="4" class="form-control">

                                </textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="thumbnails">Thumbnails</label>
                              <input type="file" multiple class="form-control pt-1" id="thumbnails"
                                aria-describedby="thumbnails" name="thumbnails" />
                              <small class="text-muted">
                                Kamu dapat memilih lebih dari satu file
                              </small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                        <button type="submit" class="btn btn-success btn-block px-5">
                          Save Now
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('addon-script')
  <script>
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        console.log(editor);
      })
      .catch(error => {
        console.error(error);
      });
  </script>
@endpush