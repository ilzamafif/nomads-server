  @extends('layouts.checkout')

  @section('title', 'Checkout')
  @section('content')
  <!-- start content -->
  <main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col px-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">Paket travel</li>
                <li class="breadcrumb-item">Detail</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Who Is Going</h1>
              <p>Trip to Ubud , bali, Indonesia</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nasionality</td>
                      <td>Visa</td>
                      <td>Pasport</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/images/testimonial.jpg') }}" height="60px" class="rounded-circle">
                      </td>
                      <td class="align-middle">
                        Ilzam Kedua
                      </td>
                      <td class="align-middle">
                        ID
                      </td>
                      <td class="align-middle">
                        C/N
                      </td>
                      <td class="align-middle">
                        non- Active
                      </td>
                      <td>
                        <a href="#" class="align-middle">
                          <img src="{{ url('frontend/images/icon/hapus.png') }}" width="25px" class="mt-3">
                        </a>
                      </td>
                    </tr>

                  </tbody>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{ url('frontend/images/testimonial.jpg') }}" height="60px" class="rounded-circle">
                      </td>
                      <td class="align-middle">
                        Ilzam Afif
                      </td>
                      <td class="align-middle">
                        ID
                      </td>
                      <td class="align-middle">
                        C/N
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td>
                        <a href="#" class="align-middle">
                          <img src="{{ url('frontend/images/icon/hapus.png') }}" width="25px" class="mt-3">
                        </a>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="members mt-3">
                <h2>Add Member</h2>
                <form action="" class="form-inline">
                  <label for="inputUsername" class="sr-only">Name</label>
                  <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" placeholder="Username" id="inputUsername">

                  <label for="inputVisa" class="sr-only">Visa</label>
                  <select name="inputVisa" id="" class="custom-select mb-2 mr-sm-2">
                    <option value="VISA">Visa</option>
                    <option value="30 days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>

                  <label for="doePassport" class="sr-only">DEO Passport</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                  </div>

                  <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now </button>
                </form>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">You are only able to invite member that has registered in Nomads</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Checkout information</h2>
              <table class="trip-information">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">2 Person</td>
                </tr>
                <tr>
                  <th width="50%">Addtional VISA</th>
                  <td width="50%" class="text-right">$ 190,00</td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">$80,00 / Pesron</td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">$ 200,00</td>
                </tr>
                <tr>
                  <th width="50%">Total(+unique)</th>
                  <td width="50%" class="text-right">
                    <span class="text-blue">$ 279,</span>
                    <span class="text-orange">33</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Payment Instruction</h2>
              <p class="payment-instruction">Plase complete your payment before to continue the wonderful trip</p>
              <div class="bank">
                <div class="bank-item pb-3 d-flex">
                  <img src="./frontend/images/icon/bank.png" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0970 078 70877 <br> Bank central Asia</p>
                  </div>
                </div>
                <div class="bank-item pb-3 d-flex">
                  <img src="./frontend/images/icon/bank.png" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0970 078 70877 <br> Bank central Asia</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="join-container">
              <a href="./success.html" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
              <div class="text-center mt-3">
                <a href="./detail.html" class="text-muted">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- end content -->
  @endsection

  @push('prepend-style')
  <!-- gijgo -->
  <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
  @endpush
  @push('prepend-style')
  <!-- gijgo -->
  <script src="./frontend/libraries/gijgo/js/gijgo.min.js"></script>
  <script>
    $('.datepicker').datepicker({
      uilibrary: 'bootstrap4',
      icons: {
        righticon: `<img src="{{ url('frontend/images/icon/calender.png') }}">`
      }
    });
  </script>
  @endpush