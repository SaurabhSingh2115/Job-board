<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
      /* Style for text input fields */
      .form-control {
          background-color: black !important; /* Black background */
          color: white !important; /* White text color */
          border: 1px solid #ccc; /* Optional: Add a light border */
      }

      /* Placeholder text styling */
      .form-control::placeholder {
          color: #aaa; /* Light gray placeholder */
          opacity: 1; /* Fully visible */
      }

      /* Style for dropdown menus */
      select.form-control {
          background-color: black !important;
          color: white !important;
      }

      /* Style for text areas */
      textarea.form-control {
          background-color: black !important;
          color: white !important;
      }

      /* Optional: Hover and focus styles for better user experience */
      .form-control:focus {
          background-color: black !important;
          color: white !important;
          border-color: #777; /* Slightly darker border on focus */
          box-shadow: none; /* Remove default focus shadow */
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add</h4>
              @if ($errors->any())
                <div class="alert alert-danger my-3">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{url('store_jobs')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="job_title">Job title</label>
                  <input type="text" class="form-control" name="job_title" value="{{ old('job_title') }}">
                </div>

                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="job_region">Job region</label>
                  <input type="text" class="form-control" name="job_region" value="{{ old('job_region') }}">
                </div>

                <div class="form-group">
                  <label for="company_name">Company name</label>
                  <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">
                </div>

                <div class="form-group">
                  <label for="job_type">Job type</label>
                  <input type="text" class="form-control" name="job_type" value="{{ old('job_type') }}">
                </div>

                <div class="form-group">
                  <label for="experience">Experience</label>
                  <input type="text" class="form-control" name="experience" value="{{ old('experience') }}">
                </div>

                <div class="form-group">
                  <label for="application_deadline">Application deadline</label>
                  <input type="date" class="form-control" name="application_deadline" value="{{ old('application_deadline') }}">
                </div>

                <div class="form-group">
                  <label for="vacancy">Vacancy</label>
                  <input type="text" class="form-control" name="vacancy" value="{{ old('vacancy') }}">
                </div>

                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="Gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Any</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="salary">Salary</label>
                  <input type="number" class="form-control" name="salary" value="{{ old('salary') }}">
                </div>

                <div class="form-group">
                  <label for="job_description">Job description</label>
                  <textarea class="form-control" rows="4" name="job_description">{{ old('job_description') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="responsibilities">Responsibilities</label>
                  <textarea class="form-control" rows="4" name="responsibilities">{{ old('responsibilities') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="education_experience">Education experience</label>
                  <textarea class="form-control" rows="4" name="education_experience">{{ old('education_experience') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="otherbenefits">Other benefits</label>
                  <textarea class="form-control" rows="4" name="otherbenefits">{{ old('otherbenefits') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="image">File upload</label>
                  <input type="file" name="image" required="">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.script')
      <!-- End custom js for this page -->
    </div>
  </body>
</html>
