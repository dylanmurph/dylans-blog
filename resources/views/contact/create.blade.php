@extends('layouts.app')

@section('content')

    <div class="mt-16">
        <section class="p-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200">
                    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">We'd Love to Hear From You</h2>
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                            <div>{{$errors->first('name')}}</div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" name="email" value="{{old('email')}}" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                            <div>{{$errors->first('email')}}</div>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                            <textarea name="message" cols="30" rows="10" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600" required>{{old('message')}}</textarea>
                            <div>{{$errors->first('message')}}</div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="w-full px-6 py-3 bg-green-700 text-white font-semibold rounded-lg hover:bg-green-500 transition duration-300">Send Message</button>
                        </div>
                    </form>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200">
                    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Our Location</h2>
                    <div id="map" style="width: 100%; height: 450px;"></div>
                    <div class="mt-4 text-center">
                        <p class="text-lg font-semibold">Drivers Digest</p>
                        <p class="italic">PJ Carroll Building<br>Dundalk Institute of Technology<br>Dundalk<br>Co.Louth<br>Ireland<br>A91 K584</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function initMap() {
            var location = { lat: 53.98146980159599, lng: -6.391901258103853 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: location,
                mapTypeId: 'hybrid',
                tilt: 45
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5EmPbJYPujrj0W_lKOcQjk57R82ozVZA&callback=initMap"></script>

@endsection
