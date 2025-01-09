@extends('layouts.app')

@section('content_one')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Fees Receipt</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Fees</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Fees Receipt</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="print-section" class="card mt-3">
                    <div class="card-header text-center d-flex align-items-center justify-content-center" style="position: relative; background-color: #FF9933; color: white;">
                        <img src="{{ asset('frontend/img/svmlogo.png') }}" alt="Logo"
                             style="height: 40px; width: 240px; position: absolute; left: 10px;">
                        <h4 style="margin: 0; font-size: 24px; text-align: center; flex-grow: 1;">
                            Saraswati Shishu Vidya Mandir
                        </h4>
                        <img src="{{ asset('frontend/img/svmlogo.png') }}" alt="Logo"
                             style="height: 40px; width: 240px; position: absolute; right: 10px;">
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h6 style="color: #FF9933;">From:</h6>
                                <div><strong>Saraswati Shishu Vidya Mandir</strong></div>
                                <div>123 School Lane</div>
                                <div>City, State, ZIP</div>
                                <div>Email: info@school.com</div>
                                <div>Phone: +91 9876543210</div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-right">
                                <h6 style="color: #FF9933;">To:</h6>
                                <div><strong>Khushjeet</strong></div>
                                <div>123 School Lane</div>
                                <div>City, State, ZIP</div>
                                <div>Email: info@school.com</div>
                                <div>Phone: +91 9876543210</div>
                            </div>
                        </div>

                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Fees Type</th>
                                        <th>Frequency</th>
                                        <th class="right">Invoice Number</th>
                                        <th class="center">Date</th>
                                        <th class="right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left strong">Monthaly Fees</td>
                                        <td class="left">Monthly</td>
                                        <td class="right">#12345</td>
                                        <td class="center">01 Jan 2025</td>
                                        <td class="right">$500</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"></div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>$500</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-12 text-right">
                        <button class="btn btn-primary" onclick="printReceipt()" type="button">Print</button>
                        <button class="btn btn-secondary" type="button">Other Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function printReceipt() {
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => button.style.display = 'none');

        const printContents = document.getElementById('print-section').innerHTML;
        const originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();

        document.body.innerHTML = originalContents;
        window.location.reload();
    }
</script>
@endsection
