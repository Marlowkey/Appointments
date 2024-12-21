@extends('layouts.admin')

@section('content')
<!-- Welcome Home Admin Section -->
<div class="row justify-content-center my-8">
    <div class="col-lg-8 text-center">
        <h2 class="display-4 text-primary font-weight-bold">Welcome, Admin</h2>
        <p class="lead text-muted">Manage payment method</p>
    </div>
</div>

<!-- Payment Section -->
<div class="content">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <!-- Display Uploaded QR Code and GCash Number First -->
            @if ($paymentMethod && $paymentMethod->gcash_qr_code)
                <div class="mt-4 text-center">
                    <h5>Uploaded QR Code:</h5>
                    <img src="{{ asset('storage/' . $paymentMethod->gcash_qr_code) }}" alt="GCash QR Code" class="img-fluid mb-3">
                    <h5 class="mt-3"><strong>GCash Number:</strong></h5>
                    <p><strong>{{ $paymentMethod->gcash_num }}</strong></p>
                </div>
            @endif
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="w-100">
                <h5 class="text-center text-black mb-4">Update</h5>

                <!-- Display Success Message -->
                @if(session('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Display Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- QR Code and GCash Number Upload Form -->
                <div class="mt-16">
                    <form action="{{ route('admin.paymentMethod.uploadQRCode') }}" method="POST" enctype="multipart/form-data" class="text-center p-4 border rounded mb-4">
                        @csrf
                        <div class="form-group">
                            <label for="gcash_qr_code" class="font-weight-bold">Upload GCash QR Code</label>
                            <input type="file" name="gcash_qr_code" class="form-control-file" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="gcash_num" class="font-weight-bold">GCash Number</label>
                            <input type="text" name="gcash_num" class="form-control" value="{{ old('gcash_num', $paymentMethod->gcash_num ?? '') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg d-block mx-auto">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection
