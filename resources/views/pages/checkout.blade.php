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
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif

              <h1>Who Is Going</h1>
              <p>Trip to {{ $item->travel_package->title, $item->travel_package->location}}</p>
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
                    @forelse($item->details as $detail)
                    <tr>
                      <td>
                        <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60px" class="rounded-circle">
                      </td>
                      <td class="align-middle">
                        {{ $detail->username }}
                      </td>
                      <td class="align-middle">
                        {{ $detail->nationality }}
                      </td>
                      <td class="align-middle">
                        {{ $detail->is_visa ? '30 days' : 'N/A' }}
                      </td>
                      <td class="align-middle">
                        {{ \Carbon\Carbon::createFromDate($item->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                      </td>
                      <td>
                        <a href="{{ route('checkout-remove', $detail->id) }}" class="align-middle">
                          <img src="{{ url('frontend/images/ic_remove.png') }}" width="25px" class="mt-3">
                        </a>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6" class="text-center">No Visitor</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>

              <div class="members mt-3">
                <h2>Add Member</h2>
                <form action="{{ route('checkout-create', $item->id) }}" method="POST" class="form-inline">
                  @csrf
                  <label for="username" class="sr-only">Name</label>
                  <input type="text" name="username" class="form-control mb-2 mr-sm-2" placeholder="Username" id="username" required>

                  <label for="nationality" class="sr-only">Nationality</label>
                  <input type="text" name="nationality" class="form-control mb-2 mr-sm-2" placeholder="nationality" id="nationality" style="width: 50px;" required>

                  <label for="is_visa" class="sr-only">Visa</label>
                  <select name="is_visa" id="" class="custom-select mb-2 mr-sm-2" required>
                    <option value="VISA">Visa</option>
                    <option value="30 days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>

                  <label for="doe_passport" class="sr-only">DEO Passport</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" name="doe_passport" class="form-control datepicker" id="doe_passport" placeholder="DOE Passport">
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
                  <td width="50%" class="text-right">
                    {{ $item->details->count() }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Addtional VISA</th>
                  <td width="50%" class="text-right">
                    $ {{ $item->addtional_visa }}.00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">
                    ${{ $item->travel_package->price }}.00 / Pesron
                  </td>
                </tr>
                <tr>
                  <th width="50%">Sub Total</th>
                  <td width="50%" class="text-right">
                    $ {{ $item->transaction_total }}
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total(+unique)</th>
                  <td width="50%" class="text-right">
                    <span class="text-blue">$ {{ $item->transaction_total }},</span>
                    <span class="text-orange">{{ mt_rand(0, 99) }}</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Payment Instruction</h2>
              <p class="payment-instruction">Plase complete your payment before to continue the wonderful trip</p>
              <div class="bank">
                <div class="bank-item pb-3 d-flex">
                  <img src="{{ url('./frontend/images/ic_bank.png') }}" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0970 078 70877 <br> Bank central Asia</p>
                  </div>
                </div>
                <div class="bank-item pb-3 d-flex">
                  <img src="{{ url('./frontend/images/ic_bank.png') }}" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads ID</h3>
                    <p>0970 078 70877 <br> Bank central Asia</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="join-container">
              <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                Continue to Payment
              </a>
              <div class="text-center mt-3">
                <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">Cancel</a>
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
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uilibrary: 'bootstrap4',
        icons: {
          righticon: `<img src="{{ url('frontend/images/ic_doe.png') }}">`
        }
      });
    });
  </script>
  @endpush