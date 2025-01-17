
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4">Make Appointment</h1>

                            <!-- Alerts Section -->
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('appointment.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="gname" name="guardian_name" placeholder="Guardian Name" required>
                                            <label for="gname">Guardian Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="gmail" name="guardian_email" placeholder="Guardian Email" required>
                                            <label for="gmail">Guardian Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cname" name="child_name" placeholder="Child Name" required>
                                            <label for="cname">Child Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control border-0" id="cage" name="child_age" placeholder="Child Age" required>
                                            <label for="cage">Child Age</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="mobile" name="mobile_number" placeholder="Mobile Number" required>
                                            <label for="mobile">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="whatsapp" name="whatsapp_number" placeholder="WhatsApp Number" required>
                                            <label for="whatsapp">WhatsApp Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded" src="{{ asset('frontend/img/appointment.jpg') }}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
