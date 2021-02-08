@extends('layouts.checkout')
@section('title', 'Checkout')


@section('content')
    <main>
        <section class="section-details-header"></section>

        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>
                                Who is Going?
                            </h1>
                            <p>Trip to Ubud, Bali, Indonesia</p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td class="border-0">Picture</td>
                                            <td class="border-0">Name</td>
                                            <td class="border-0">Nationality</td>
                                            <td class="border-0">VISA</td>
                                            <td class="border-0">Passport</td>
                                            <td class="border-0"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-0">
                                                <img src="{{ url('frontend/images/avatar-1.png') }}" height="60">
                                            </td>
                                            <td class="align-middle border-0">
                                                Rebecca
                                            </td>
                                            <td class="align-middle border-0">
                                                CN
                                            </td>
                                            <td class="align-middle border-0">
                                                N/A
                                            </td>
                                            <td class="align-middle border-0">
                                                Active
                                            </td>
                                            <td class="align-middle border-0">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/ic_remove.png') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <img src="{{ url('frontend/images/avatar-2.png') }}" height="60">
                                            </td>
                                            <td class="align-middle border-0">
                                                Novrian H
                                            </td>
                                            <td class="align-middle border-0">
                                                SG
                                            </td>
                                            <td class="align-middle border-0">
                                                30 Days
                                            </td>
                                            <td class="align-middle border-0">
                                                Active
                                            </td>
                                            <td class="align-middle border-0">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/ic_remove.png') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUser" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                        placeholder="Username">

                                    <label for="inputVisa" class="sr-only">VISA</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
                                            placeholder="DOE Passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in Traboost.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">
                                        Members
                                    </th>
                                    <td width="50%" class="text-right">
                                        2 Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Additional VISA
                                    </th>
                                    <td width="50%" class="text-right">
                                        $ 190,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Trip Price
                                    </th>
                                    <td width="50%" class="text-right">
                                        $ 80,00 / person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Sub Total
                                    </th>
                                    <td width="50%" class="text-right">
                                        $280,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">
                                        Total (+Unique Code)
                                    </th>
                                    <td width="50%" class="text-right">
                                        <span class="text-blue text-total">$ 279,</span>
                                        <span class="text-orange">22</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instruction</h2>
                            <p class="payment-instruction">Please complete payment before you
                                continue the wonderful trip</p>

                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Traboost Tours ID</h3>
                                        <p>
                                            637483838
                                            <br>
                                            Bank BNI
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Traboost Tours ID</h3>
                                        <p>
                                            1223837773
                                            <br>
                                            Bank Mandiri
                                        </p>
                                    </div>
                                    <div class="clearfix">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made The Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail') }}" class="text-muted">
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')

    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {


            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="frontend/images/ic_doe.png "/>'
                }
            })
        });

    </script>
@endpush
