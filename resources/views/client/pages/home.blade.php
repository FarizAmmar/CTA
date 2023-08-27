@extends('client.masters.master')

@section('container')
<!-- Hero Section -->
<div class="bg-hero-image bg-cover bg-bottom py-32" style="background-image: url('assets/background/herobg-2.jpg');">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-semibold text-white uppercase mb-2">Welcome To Our Website</h1>
        <p class="text-gray-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis at nisl
            luctus tempus.</p>
        <button class="bg-white drop-shadow-md text-black px-6 py-3 rounded-md mt-4 hover:bg-gray-200">Hire
            Us</button>
    </div>
</div>

<!-- About Section -->
<div class="container mx-auto py-16">
    <h2 class="text-2xl font-semibold mb-4">About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget felis at nisl luctus tempus.</p>
</div>

<!-- Services Section -->
<div class="bg-gray-200 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-semibold mb-4">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Service 1</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Service 2</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Service 3</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Section -->
<div class="container mx-auto py-16">
    <h2 class="text-2xl font-semibold mb-4">Portfolio</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="assets/portfolio/project-1.jpg" alt="Project 1" class="mb-4 rounded-lg">
            <h3 class="text-xl font-semibold mb-2">Project 1</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="assets/portfolio/project-2.jpg" alt="Project 2" class="mb-4 rounded-lg">
            <h3 class="text-xl font-semibold mb-2">Project 2</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="assets/portfolio/project-3.jpg" alt="Project 3" class="mb-4 rounded-lg">
            <h3 class="text-xl font-semibold mb-2">Project 3</h3>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Add more project items as needed... -->
    </div>
</div>

<!-- Contact Section -->
<div class="bg-gray-100 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
        <p class="text-gray-600 mb-6">Got questions? Contact us using the form below.</p>
        <form class="w-full max-w-lg mx-auto">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        First Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="John">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Last Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" placeholder="Doe">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="email" placeholder="example@example.com">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-message">
                        Message
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-message" rows="6" placeholder="Write your message here..."></textarea>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <button
                    class="bg-green-300 hover:bg-green-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p>&copy; Create The Apps 2023 | <a href="https://www.createyourapps.com" class="underline"
                target="_blank">www.createyourapps.com</a></p>
    </div>
</footer>
@endsection
