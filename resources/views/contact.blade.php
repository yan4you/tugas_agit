@extends('layouts.app')

@section('content')
<!-- Contact Page Section -->
<div class="container py-5">
    <h1 class="text-center mb-4">Contact Us</h1>

    <!-- Display success or error message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        <!-- Left Column - Contact Form -->
        <div class="col-md-6">
            <h3 class="mb-4">Get in Touch</h3>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <!-- Subject -->
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <!-- Right Column - Contact Information -->
        <div class="col-md-6">
            <h3 class="mb-4">Our Address</h3>
            <p>
                <strong>Company Name</strong><br>
                Kp. Baru,Kec. Ps. Kliwon, Kota Surakarta, Jawa Tenga<br>
                <strong>Phone:</strong> +62 863 9983 322 <br>
                <strong>Email:</strong> burgerdraken@gmail.com
            </p>

            <div id="map" class="mt-4" style="height: 300px; background: #ddd;"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16760.552238729695!2d110.84674183683893!3d-7.5789354141494005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1733321941984!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <!-- Optional: Embed Google Maps or custom map here -->
        </div>
    </div>
    @endsection